<?php
//	Change this to the correct path if required
require_once("amslib/Amslib.php");

Amslib::autoloader();
Amslib::showErrors();

//	If you need language support, follow this pattern
Amslib_Router_Language::add("en_GB","en",true);
Amslib_Router_Language::add("es_ES","es");
Amslib_Router_Language::initialise("en");

//	Here we create a normal router object
$xml = Amslib_Router::getObject("source:xml");
$xml->load("amslib_router.xml");
Amslib_Router::setSource($xml);
Amslib_Router::execute();

//	This is how to obtain the language catalogue, using the language system linked ot the router
$locale = Amslib_Translator_XML::getInstance();
$locale->load("translations/".Amslib_Router_Language::getCode().".xml",true);

//	Get the resource from the route detected
$resource = $router->getResource();

//	Here you should put what you need to do in order to complete the work
?>