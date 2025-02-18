<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Image-Processor](#image-processor)
  - [License](#license)
  - [Characteristics What does Data-Auditor offer you?](#characteristics-what-does-data-auditor-offer-you)
  - [Planning, Requirements Engineering and Risk Management / Planning, Requirements Engineering and Risk Management](#planning-requirements-engineering-and-risk-management--planning-requirements-engineering-and-risk-management)
    - [Structural perspective](#structural-perspective)
      - [Logical view of software architecture ->](#logical-view-of-software-architecture--)
  - [`` Mermaid](#-mermaid)
  - [Title: Database Auditor](#title-database-auditor)
      - [Schemafromdatabaseusingname.Generatejoinscls Process / SchemaphromDatabaseusingname.GeneratejoinClusters ->](#schemafromdatabaseusingnamegeneratejoinscls-process--schemaphromdatabaseusingnamegeneratejoinclusters--)
  - [Documentation](#documentation)
    - [Conventions used during documentation](#conventions-used-during-documentation)
    - [Use](#use)
      - [Requirements](#requirements)
        - [Facility](#facility)
          - [as a user](#as-a-user)
          - [as a library (only if you want to create a program that uses library)](#as-a-library-only-if-you-want-to-create-a-program-that-uses-library)
        - [File .env (this is necessary when you want to generate a scheme from the database the default behavior)](#file-env-this-is-necessary-when-you-want-to-generate-a-scheme-from-the-database-the-default-behavior)
      - [use from the command line interface](#use-from-the-command-line-interface)
        - [Director Analysis](#director-analysis)
        - [Generate image versions](#generate-image-versions)
    - [Make to Donation. Your Contribution Will Make to Difference.](#make-to-donation-your-contribution-will-make-to-difference)
    - [Find me on:](#find-me-on)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

<!-Start doctoc generated touch please keep comment here to allow Auto Update->
<!-Don's Edit This Section, Instead Re-Run Doctor to Update->
** Table of content ***generated with [doctoc] (https://github.com/thlorenz/doctoc)*

-[Image-Processor] (#Image-Processor)
-[Optimize your database design with data-Auditor!] (#%C2%A1opimiza-tu-dise%c3%b1o-de-base-datos-with-data-Auditor)
- [License] (#license)
-[Characteristics What does Data-Auditor offer you?
-[Planning, Requirements Engineering and Risk Management / Planning, Requirements Engineering and Risk Management] (#Planning-Requirements-Engineering-And-Risk-Management-Planning-Ingenieria-De-Requerlations-Y-Gestion-Del-Riesgo )
- [Documentation] (#Documentation)
-[Conventions used during documentation] (#Conventions-Useas-During-Documentation)
- [Use] (#use)
- [Requirements] (#requirements)
- [Installation] (#installation)
- [as a user] (#as-user)
-[As a library (only if you want to create a program that uses library)] (#as-biblioteca-only-si-want-you-with-a-program-which-your-libreria)
-[ scheme-to-part-of-%C3%B1a-base-datos-the-behavior-by-defect)
-[Use from the command line interface] (#use-from-the-interfaz-of-line-de-compos)
-[Directory analysis] (#Analysis-of-Directories)
-[Generate image versions] (#generate-worsions-of-image)
- [Make to Donation. Your Contribution Will Make A Difference.] (#Make-A-Donation-Your-Contribution-Will-Make-A-Difference)
-[Find me on:] (#Find-me-on)
-[Technologies used / used technologies] (#Technologies-ined-Tecnologias-Usadas)

<!-End doctoc generated touch please keep comment here to allow Auto Update->


# Image-Processor

[Readme version in English] (./ Readme-en.md)

Image-Processor` It is a library and a command line tool (CLI) designed to generate responsive versions of your images quickly and easily. Convert individual images or complete directories to optimize your web designs. Start creating responsive images today!


## License

This Code is licensed under the general public license of GNU version 3.0 or posterior (LGPLV3+). You can find a complete copy of the license at https://www.gnu.org/licenses/lgPl-3.0-standalone.htmlalone.html0-standalone.html

## Characteristics What does Data-Auditor offer you?

Cli to create responsive versions of your images or convert a complete directory

Convert a complete directory into a responsibility of responsive images, following our standard or using the version you consider better

Generates responsive versions of your images following our standard or choosing your own sizes

## Planning, Requirements Engineering and Risk Management / Planning, Requirements Engineering and Risk Management

These sections of the project will be carried out through a site in Notion so that they can be easily accessible by non -technical staff.

Request access link to authorized personnel

<!- ## Software Design / Software Design

### Structural perspective

#### Logical view of software architecture ->
<!-
In the following class diagram, key abstractions will be seen in the system, their responsibilities.


`` Mermaid
---
Title: Database Auditor
---
Class Diagram

class databaseauditor {

}

Note for database auditor "seeks to be the context for the different strategies used
and a medium that encapsulates utilitarian functions
common for all algorithms "

Databaseauditor ..> databaseschemagenerator

class database schema generator {
<< abstract>>
+Databaseauditor
+Generate ()
}

Note for database schema generator "provides the strategy interface
which is common to all concrete strategies
For the generation of
Database schemes "

Databaseschemagenerator ..> schemafromdbusingname
Databaseschemagenerator ..> Schemafromjson

Class Schemafromjson {
+Databaseauditor
+Generate ()
}

Class schemafromdbusingname {
+Databaseauditor
+Generate ()
}

Note for schemafromdbusingname "is one of the specific strategies
that generates the schemes by means of the names
of the name conventions of the database "

Databaseauditor ..> Validationalgorithm

Note for Validation Algorithm "provides the strategy interface
which is common to all concrete strategies
For the generation of
Validations of the database "

Class Validation Algorithm {
<< abstract>>
+Execute ()
}

Validationalgorithm <|- NonadditIVeconcatenation
Validationalgorithm <|- Verificationbcnf


Class Verification Nonadditive Concatenation {
+Databaseauditor
+Execute ()
}


Note for non additive concatenation "encapsulates algorithm 11.1 verification
of the non -additive concatenation property proposed by Ramez Elmasri
and Shamkant B. Navathe "

CLASS VERIFICATIONBCNF {
+Databaseauditor
+Execute ()
}

Note for non additive concatenation "encapsulates the algorithm that validates that each
Decomposition possesses the BCNF
Based on the definition presented
By Ramez Elmasri and Shamkant B. Navathe "

Databaseauditor <.. client

Class client {

}

`` ->

<!- ### Behavior perspective

#### Schemafromdatabaseusingname.Generatejoinscls Process / SchemaphromDatabaseusingname.GeneratejoinClusters ->



## Documentation
The image-processor allows you to generate different versions of your images

### Conventions used during documentation
Notation conventions for grammar:

<> Are used to surround a non -terminal symbol

The :: = Used for production rules

Non -terminal symbols are expressed as a normal chain or characters

The following group of symbolic pairs, should be used together with expressions as follows: the first in each couple is written as suffix after the expression and the second surrounds the expression.

He ? or [] indicate that the expression is optional

The * or {} indicates that the expression is repeated or more times

The + indicates that the expression is repeated 1 or more times

If you want to use one of the previous characters, it must be preceded \ with

### Use

#### Requirements

##### Facility

###### as a user

Composer Install Israeldavidvm/Image-Processor

Global composer requires Israeldavidvm/Image-Processor

Composer requires Israeldavidvm/Image-Processor


###### as a library (only if you want to create a program that uses library)
Composer requires Israeldavidvm/Image-Processor

##### File .env (this is necessary when you want to generate a scheme from the database the default behavior)

Establish a configuration in the .env file. Like the next

``

API_Key_tinypng = <pikey>


``

#### use from the command line interface

In order to use the program you will only need a .Env file with the configuration as specified above and execute the command

##### Director Analysis

** If it is included in a project by required with the global (composer global requires Israeldavidvm/Image-Processor) **

`` ~/.config/composer/vendor/bin/image-processor Make-rri-repositionary <pathtodir> [<sizes> [<pathtoenvwithkey>]] `` `` `` `` `

** If it is included in a project through require without the global (composer requires Israeldavidvm/Image-Processor) **

``.

Description:
This command allows you to analyze a directory and generate a series of variations for each image according to common measures in the RWD responsive web design or those that pass them as parameter

USAGE:
Make-ri-Repositorry <Pathtodir> [<sizes> [<PathtoenvwithKey>]]

Arguments:
Pathtodir specifies the route to the Base Directory Archive
SIZES CHAIN that specifies the different maximum horizontal sizes in pixels separated by coma, for example 360,720,1080,1440,1800,2160,2880,3600,4320
Pathtoenvwithkey specifies the route to the .Env file containing the Tinypng API key [default: "./.env"]

Options:
-H, -Help Display Help for the Given Command. WHEN NO COMMAND IS GIVEN DISPLAY HELP FOR THE LIST COMMAND
-Silent do not output any message
-q, --quie Only Error Displayed. All other output is support
-V, -Version Display This Application Version
`` Ansi | --No-Ansi Force (OR DISABLE --No-Ansi) ANSI OUTPUT
-N, --No-Interaction do not ask any interactive question
-V | VV | VVV, -Verbose Increase The Verbosity of Messages: 1 For Normal Output, 2 For More Verbose Output and 3 for Debug

##### Generate image versions


** If it is included in a project by required with the global (composer global requires Israeldavidvm/Image-Processor) **

`` ~/.config/composer/vendor/bin/image-processor generate-responsive-images <pathtoimage> [<sizes> [<pathtoenvwithkey>]] `` `` `` `

** If it is included in a project through require without the global (composer requires Israeldavidvm/Image-Processor) **

`'.

Description:
This command allows you to generate a series of variations in an image according to common measures in the RWD responsive web design or those that pass them as a parameter for a particular image

USAGE:
Generate-Respect-Images <Pathtoimage> [<SIZES> [<Pathtoenvwithkey>]]

Arguments:
Pathtoimage specifies the route to the image file from which the responsive versions are generated
SIZES CHAIN that specifies the different maximum horizontal sizes in pixels separated by coma, for example 360,720,1080,1440,1800,2160,2880,3600,4320
Pathtoenvwithkey specifies the route to the .Env file containing the Tinypng API key [default: "./.env"]

Options:
-H, -Help Display Help for the Given Command. WHEN NO COMMAND IS GIVEN DISPLAY HELP FOR THE LIST COMMAND
-Silent do not output any message
-q, --quie Only Error Displayed. All other output is support
-V, -Version Display This Application Version
`` Ansi | --No-Ansi Force (OR DISABLE --No-Ansi) ANSI OUTPUT
-N, --No-Interaction do not ask any interactive question
-V | VV | VVV, -Verbose Increase The Verbosity of Messages: 1 For Normal Output, 2 For More Verbose Output and 3 for Debug

### Make to Donation. Your Contribution Will Make to Difference.
[! [ko-fi] (https://ko-fi.com/img/githubutton_sm.svg)] (https://ko-fi.com/israeldavidvm)
[! [PayPal] (https://img.shields.io/badge/paypal-@israeldavidvm-0077b5?style=for-the-badge&ogo=paypal&logocolor=white&labelColor=101010)] (https://paypal.me/israeldavidvm )
[! [Binance] (https://img.shields.io/badge/binance_id-809179020-1010 ?style=for Activity/Referral-Entry/CPa? Ref = CPA_004ZGH9EIS)

### Find me on:
[! [Github] (https://img.shields.io/badge/github-israeldavidvm-gray?
[! [LinkedIn] (https://img.shields.io/badge/linkedIn-israeldavidvm-0077b5?style=for-the-badge&ogo=LinkedI in/Israeldavidvm/)
[! [Twitter] (https://img.shields.io/badge/twitter-@israeldavidvm-1da1f2?style=FOR-the-badge&ogo=twitter&logocolor=white&labelColor=101010)] (https://twitter.com/israeldavidvm )
[! [Facebook] (https://img.shields.io/badge/facebook-israeldavidvm-1877f2? Israeldavidvm)
[! [Instagram] (https://img.shields.io/badge/instagram-@israeldavidvmv-gray?style=for-the-badge&ogo=instagram&logocolor=white&labelcolor=101010)] (https://www.instagram.com /Israeldavidvm/)
[! [Tiktok] (https://img.shields.io/badge/tiktok-@israeldavidvm-e4405f?style=FOR-the-badge&ogo=tiktok&logocolor=white&labelColor=101010)] (https://www.tiktok.com /@Israeldavidvm)
[! [YouTube] (https://img.shields.io/badge/youtube-@israeldavidvm-ff0000?style=FOR-the-badge&ogo=youtube&logocolor=white&labelcolor=101010)] (https://www.youtube.com /Channel/UCMZLFPENPDWPJOHAL0WRY7A)

