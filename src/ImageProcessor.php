<?php

namespace Israeldavidvm\ImageProcessor;

use Israeldavidvm\NameHelper\NameHelper;

use Exception;

require_once("lib/Tinify/Exception.php");
require_once("lib/Tinify/ResultMeta.php");
require_once("lib/Tinify/Result.php");
require_once("lib/Tinify/Source.php");
require_once("lib/Tinify/Client.php");
require_once("lib/Tinify.php");

class ImageProcessor{

public $rutaOri;
public $imgInfo;

public function __construct($key) {

    \Tinify\setKey($key);

}

public function makeStandardResponsiveImageRepository($baseRoute){
    $sizes=[360,720,1080,1440,1800,2160,2880,3600,4320];

    $this->makeResponsiveImageRepository($baseRoute, $sizes);

}


public function makeResponsiveImageRepository($baseRoute, $sizes){
    
    $parentDir=NameHelper::getFileOrDirName($baseRoute);

    $items = scandir($baseRoute);

    $imagesFiles=[];

    $dirFiles=[];

    if ($items === false) {
        throw new Exception("Error al leer el directorio.");
    } 
  
    foreach ($items as $item) {

        $itemRoute=NameHelper::concatenateRoutes($baseRoute,$item);
        // Ignora los directorios "." y ".."
        if ($item == "." || $item == "..") {
            continue;
        }
        if (is_file($itemRoute) )
        {
            if($this->isImageFile($itemRoute) && !$this->isImageNameVariation(NameHelper::getFileOrDirName($itemRoute))){
                $imagesFiles[]=$item;
            }
            
        } else {
            $dirFiles[]=$item;

        }
    }

    // echo json_encode([$imagesFiles]);
    
    foreach ($imagesFiles as $imageFile) {

        $imageFileRoute=NameHelper::concatenateRoutes($baseRoute,$imageFile);
        
        if(
            $parentDir
            ==
            NameHelper::generateRouteToConvetionalImageDirInBaseRoute($imageFile)
        ){
            $this->generateResponsivesImages($imageFileRoute,$sizes, false);
        }else{
            $this->generateResponsivesImages($imageFileRoute,$sizes, true);
        }

    }

    foreach ($dirFiles as $dir) {

        $dirRoute=NameHelper::concatenateRoutes($baseRoute,$dir);

        // echo "\n\n".$dirRoute;

        $this->makeResponsiveImageRepository($dirRoute, $sizes);

    }

    

}

public function generateStandardResponsivesImages($fileRoute, $inFolder=true){
    
    $sizes=[360,720,1080,1440,1800,2160,2880,3600,4320];


    $this->generateResponsivesImages($fileRoute,$sizes, $inFolder);

}

public function generateResponsivesImages($fileRoute,$sizes, $inFolder=true){

    echo "Procesando el archivo $fileRoute\n";

    $destDirRoute=null;

    $fileName=NameHelper::getFileOrDirName($fileRoute);

    $finalFileRoute=$fileRoute;

    if($inFolder){

        $destDirRoute=NameHelper::generateRouteToConvetionalImageDirInBaseRoute(
            $fileRoute,
            dirname($fileRoute)
        );

        mkdir($destDirRoute);

        $finalFileRoute=NameHelper::concatenateRoutes($destDirRoute,$fileName);

    }


    $source = \Tinify\fromFile($fileRoute);
    $source->toFile(
        $finalFileRoute
    );

    if($inFolder){

       unlink($fileRoute);

    }


    foreach($sizes as $size){

        if(!file_exists(
            NameHelper::concatenateRoutes(
                dirname($finalFileRoute),
                $this->getImageNameVariation(
                    $fileName,
                    $size,
                )
            )
        )){
            echo "Generando la variacion ".NameHelper::concatenateRoutes(
                dirname($finalFileRoute),
                $this->getImageNameVariation(
                    $fileName,
                    $size,
                )
            )."\n";

            $this->scaleImage($finalFileRoute,$size,null,$destDirRoute);
        }

    }

}

public function scaleImage($fileRoute,$width=null,$height=null,$destDirRoute=null){

    assert(!($width==null && $height==Null),"El ancho y alto no pueden ser nulos a la vez");
    assert(!($width==null || $height==Null),"No puedes dar el ancho y alto al mismo tiempo");

    $fileName=NameHelper::getFileOrDirName($fileRoute);

    if($destDirRoute==null){

        $destDirRoute=dirname($fileRoute);

    }
    $source = \Tinify\fromFile($fileRoute);
    
    if($width!=null){
        $resized = $source->resize(array(
            "method" => "scale",
            "width" => $width,
        ));
        $resized->toFile(
            NameHelper::concatenateRoutes(
                $destDirRoute,
                $this->getImageNameVariation(
                    $fileName,
                    $width,
                    null
                )
            )
        );
    }else{
        $resized = $source->resize(array(
            "method" => "scale",
            "height" => $height,
        ));
        $resized->toFile(
            NameHelper::concatenateRoutes(
                $destDirRoute,
                $this->getImageNameVariation(
                    $fileName,
                    null,
                    $height
                )
            )
        );
    }

}

public function compressImage($fileRoute)
{
    $fileName=NameHelper::getFileOrDirName($fileRoute);

    $fileDir = dirname($fileRoute);

    $source = \Tinify\fromFile($fileRoute);
    $source->toFile($fileDir . "/compress-" . $fileName);
}


public function isImageFile($route){

    try{

    $ext=NameHelper::getExtOfFile($route);

    }catch(Exception $e){
        return false;
    }

    $imgExt=["jpg","jpeg","png","gif"];

    if(in_array($ext,$imgExt)){
        return true;
    }

    return false;
}

public function getImageNameVariation($fileName,$width=null,$height=null){
    assert(!($width==null && $height==Null),"El ancho y alto no pueden ser nulos a la vez");
    assert(!($width==null || $height==Null),"No puedes dar el ancho y alto al mismo tiempo");

    if($width){

        return "$width-$fileName";

    }else{

        return "$height-$fileName";
    
    }
    
}

public function isImageNameVariation($fileName){

    $patron = '/^[0-9]{3,4}-.+\.[a-zA-Z]+$/';

    if (preg_match($patron,$fileName)) {
        return true;
    }
        
    return false;
  
}

        
   
}


?>