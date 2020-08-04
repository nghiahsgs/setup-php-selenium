<?php

// An example of using php-webdriver.
// Do not forget to run composer install before. You must also have Selenium server started and listening on port 4444.

namespace Facebook\WebDriver;

use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;

require_once('vendor/autoload.php');

$options = new \Facebook\WebDriver\Chrome\ChromeOptions();
$options->addArguments( [ 'headless','--no-sandbox' ] );

// This is where Selenium server 2/3 listens by default. For Selenium 4, Chromedriver or Geckodriver, use http://localhost:4444/
$host = 'http://localhost:4444/wd/hub';
$host = 'http://localhost:4444/';

$capabilities = DesiredCapabilities::chrome();

$capabilities->setCapability( \Facebook\WebDriver\Chrome\ChromeOptions::CAPABILITY, $options );

$driver = RemoteWebDriver::create($host, $capabilities);

// navigate to Selenium page on Wikipedia
$driver->get('https://en.wikipedia.org/wiki/Selenium_(software)');

echo "The title is '" . $driver->getTitle() . "'\n";

$driver->quit();


?>