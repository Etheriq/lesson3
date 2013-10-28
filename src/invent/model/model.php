<?php
/**
 * Created by PhpStorm.
 * File: model.php
 * User: Yuriy Tarnavskiy
 * Date: 26.10.13
 * Time: 21:49
 * To change this template use File | Settings | File Templates.
 */

use Symfony\Component\HttpFoundation\Response;
use invent\cls\Pc;
use invent\cls\Printer;
use invent\cls\Monitor;

include "../../../vendor/autoload.php";

function pcInit()
{
    $pc = array();
    $pc1= new Pc();
    $pc1->setInventoryNumber("44003010012356");
    $pc1->setCpu("Pentium 4 3 Ghz");
    $pc1->setHdd("329 Gb");
    $pc1->setRam("2 Gb");
    $pc[] = $pc1;

    $pc2 = new Pc();
    $pc2->setInventoryNumber("44003010056955");
    $pc2->setCpu("Core2Duo E2140 2.13 Ghz");
    $pc2->setHdd("160 Gb");
    $pc2->setRam("2 Gb");
    $pc[] = $pc2;

    return $pc;
}

function monitorInit()
{
    $monitor = array();
    $mon1 = new Monitor();
    $mon1->setInventoryNumber("44003010032655");
    $mon1->setModel("Samsung 710n");
    $mon1->setType("TFT");
    $mon1->setInterf("D-SUB");
    $monitor[] = $mon1;

    $mon2 = new Monitor();
    $mon2->setInventoryNumber("44003010036578");
    $mon2->setModel("Asus BF17g");
    $mon2->setType("TFT");
    $mon2->setInterf("D-SUB");
    $monitor[] = $mon2;

    return $monitor;
}

function printerInit()
{
    $printer = array();

    $printer1 = new Printer();
    $printer1->setInventoryNumber("44003010025541");
    $printer1->setModel("HP 1320");
    $printer1->setType("Laser printer");
    $printer1->setCartridge("Q5949A");
    $printer[] = $printer1;

    $printer2 = new Printer();
    $printer2->setInventoryNumber("44003010025364");
    $printer2->setModel("Canon LBP2900");
    $printer2->setType("Laser printer");
    $printer2->setCartridge("103A");
    $printer[] = $printer2;

    return $printer;
}

function showAll()
{
    $result = array();
    $result[] = pcInit();
    $result[] = monitorInit();
    $result[] = printerInit();

    return $result;
}

function showPc()
{
    return pcInit();
}

function showMonitor()
{
    return monitorInit();
}

function showPrinter()
{
    return printerInit();
}

function showTest()
{
    $pc1= new Pc();
    $pc1->setInventoryNumber("44003010012356");
    $pc1->setCpu("Pentium 4 3 Ghz");
    $pc1->setHdd("329 Gb");
    $pc1->setRam("2 Gb");

    $pcInfo = "<pre>".$pc1->showFullInfo()."</pre><br/><a href='../index.php'>Back to main page</a>";

    $response = new Response();
    $response->setContent($pcInfo);
    $response->headers->set('Content-Type', 'text/html');

    return $response->send();
}