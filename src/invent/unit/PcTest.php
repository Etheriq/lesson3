<?php
/**
 * Created by PhpStorm.
 * File: PcTest.php
 * User: Yuriy Tarnavskiy
 * Date: 27.10.13
 * Time: 21:24
 * To change this template use File | Settings | File Templates.
 */

namespace invent\unit;

use PHPUnit_Framework_TestCase;
use invent\cls\Pc;

//include "../cls/Pc.php";
/*
include "../cls/AbstractInventory.php";
include "../cls/InventoryInterface.php";
*/
class PcTest extends PHPUnit_Framework_TestCase
{

    public function testTrue()
    {
        $this->assertTrue(true);
    }

    public function testFailure()
    {
        $pc = new Pc();
        $pc->setCpu("300");
        $pc->setHdd("150");
        $pc->setRam("2");

        $this->assertClassHasAttribute('cpu', 'invent\cls\Pc');

        $this->assertContains(2, array($pc->getCpu(), $pc->getHdd(), $pc->getRam()));

        $pc->sendToService();
    }
} 