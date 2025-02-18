<?php

namespace Israeldavidvm\ImageProcessor;

use Symfony\Component\Console\Command\Command;
use Israeldavidvm\ImageProcessor\ImageProcessor;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Console\Input\InputArgument; // Para agregar un argumento


use Exception;
use Dotenv\Dotenv;

class GenerateRICommand extends Command
{

    protected function configure()
    {
        // Define el nombre del comando
        $this->setName('generate-responsive-images')
            ->setDescription(
                'Este comando te permite generar una serie de variaciones'.
                'de una imagen de acuerdo a medidas comunes en el diseño web responsivo'.
                ' rwd o las que les pases como parametro para una imagen en particular' 
            )
            ->setHelp(
                'Este comando te permite generar una serie de variaciones'.
                ' de una imagen de acuerdo a medidas comunes en el diseño web responsivo'.
                ' rwd o las que les pases como parametro para una imagen en particular' 
            )->addArgument(
                'pathToImage', 
                InputArgument::REQUIRED, 
                'Especifica la ruta al archivo de imagen del que se quieren generar las versiones responsivas', 
        
            )
            ->addArgument(
                'sizes', 
                InputArgument::OPTIONAL, 
                'Cadena que especifica los distintos tamaños maximos horizontales en pixeles'.
                ' separados por coma, por ejemplo 360,720,1080,1440,1800,2160,2880,3600,4320',
            )->addArgument(
                'pathToEnvWithKey', 
                InputArgument::OPTIONAL, 
                'Especifica la ruta al archivo .env que contiene la clave de la API de TinyPNG', 
                './.env',
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

          $pathToEnvWithKey = $input->getArgument('pathToEnvWithKey');
          
          if (!file_exists($pathToEnvWithKey)) {
              $output->writeln("<error>El archivo .env en la ruta proporcionada no existe.</error>\n");
              return Command::FAILURE;
          }

          $pathToImage= $input->getArgument('pathToImage');

          if(!file_exists($pathToImage)){
              $output->writeln("<error>El archivo de imagen en la ruta proporcionada no existe.</error>\n");
              return Command::FAILURE;
          }

        $sizes=null;

        // throw new Exception($input->getArgument('sizes'));

        if($input->getArgument('sizes')){
        
            $sizes= explode(
                ',', 
                $input->getArgument('sizes'),
            );

        }

    
        $dotenv = Dotenv::createImmutable(
            dirname($pathToEnvWithKey),
            basename($pathToEnvWithKey),
        );
        $dotenv->load();
        $dotenv->required(['API_KEY_TINYPNG']);
        
        // Configuración de la conexión a la base de datos
        

        $imageProcessor = new ImageProcessor($_ENV['API_KEY_TINYPNG']);

        if($sizes){

            $imageProcessor->generateResponsivesImages($pathToImage,$sizes);
        
        }else{

            $imageProcessor->generateStandardResponsivesImages($pathToImage);

        }
        // Mostrar mensaje de éxito
        // $output->writeln('Se ha ejecutado los algoritmos de validacion');

        // Devolver un código de estado (éxito)
        return Command::SUCCESS;
    }

}