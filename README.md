soapEasy
========
This is helpfull for call soap cleint easily

Requirements
==============
PHP >=5.3
Installation

Install using composer:
=====================
Add in composer.json

    {
        "require": {
             "shekhar/soap-easy": "dev-master"
        }
    }
    
Code Examples In Core PHP
=========
<?php

//Call Autoload classes
include('vendor/autoload.php');

use soapEasy\SoapEasy\SoapEasy;

echo SoapEasy::rand(6);
?>

License
===========
SoapEasy is licensed under the MIT License.

Copyright 2014 shekhar singh
