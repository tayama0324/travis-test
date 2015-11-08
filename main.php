<?php
require_once(__DIR__ . "/vendor/autoload.php");
require_once(__DIR__ . "/gen_code/dataset.php");

$small = new loadtest\SmallDataset();
echo $small->getValue() . "\n";
$small->setValue("Hello, world.");
echo $small->getValue() . "\n";
?>
