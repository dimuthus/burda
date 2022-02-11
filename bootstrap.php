<?php
// bootstrap.php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Annotations
$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);
// or if you prefer yaml or XML
// $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
// $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

// database configuration parameters
//$connectionParams  = array(
//            'url' => 'mysql://chip:ZF8WaFhf@localhost:3308/api',
//        );

$connectionParams = array(
    'dbname' => 'api',
    'user' => 'chip',
    'password' => 'ZF8WaFhf',
    'host' => '172.19.0.4',
    'driver' => 'pdo_mysql',
    'serverVersion'=> 'mariaDB-10.6.5'

);

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);


// obtaining the entity manager
$entityManager = EntityManager::create($conn, $config);