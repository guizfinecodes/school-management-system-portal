
put my staff up here

<?php
/* Call this file 'hello-world.php' */
require("reciept printer/autoload.php");
use Mike42\Escpos\PrintConnectors\FilePrintConnector;
use Mike42\Escpos\Printer;
$connector = new FilePrintConnector("php://stdout");
$printer = new Printer($connector);
$printer -> text("Hello World!\n");
$printer -> cut();
$printer -> close();
?>