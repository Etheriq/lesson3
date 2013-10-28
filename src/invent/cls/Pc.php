<?php
/**
 * Created by JetBrains PhpStorm.
 * File: class.pc.php
 * User: Yuriy Tarnavskiy
 * Date: 18.10.13
 * Time: 11:48
 */

namespace invent\cls;

class Pc extends AbstractInventory implements InventoryInterface
{
    private $cpu;
    private $hdd;
    private $ram;

    public function getInventNumber()
    {
        return $this->inv_number;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getHdd()
    {
        return $this->hdd;
    }

    public function getRam()
    {
        return $this->ram;
    }

    public function setInventoryNumber($newInventNumber)
    {
        $this->inv_number = $newInventNumber;
    }

    public function setCpu($newCpu)
    {
        $this->cpu = $newCpu;
    }

    public function setHdd($newHdd)
    {
        $this->hdd = $newHdd;
    }

    public function setRam($newRam)
    {
        $this->ram = $newRam;
    }

    public function __toString()
    {
        return "Invent number=".$this->getInventNumber()." cpu=".$this->getCpu()." hdd=".$this->getHdd()." Ram=".$this->getRam();
    }
    public function sendToService()
    {
        $result = "PC with inventory number ".$this->getInventNumber()." sent to service organization\n";

        return $result;
    }

    public function showFullInfo()
    {
        $result = "Full information about PC: \n
            Inventory number: ".$this->getInventNumber()." \n
            Type of main processor: ".$this->getCpu()."; \n
            Volume of HDD: ".$this->getHdd()."; \n
            Volume of RAM: ".$this->getRam()."; \n ";

        return $result;
    }
}
