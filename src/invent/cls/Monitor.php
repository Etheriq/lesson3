<?php
/**
 * Created by JetBrains PhpStorm.
 * File: class.monitor.php
 * User: Yuriy Tarnavskiy
 * Date: 18.10.13
 * Time: 11:03
 */

namespace invent\cls;

class Monitor extends AbstractInventory implements InventoryInterface
{
    private $model;
    private $type;
    private $interf;

    public function getInventNumber()
    {
        return $this->inv_number;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getInterf()
    {
        return $this->interf;
    }

    public function setInventoryNumber($newInventNumber)
    {
        $this->inv_number = $newInventNumber;
    }

    public function setModel($newModel)
    {
        $this->model = $newModel;
    }

    public function setType($newType)
    {
        $this->type = $newType;
    }

    public function setInterf($newInterf)
    {
        $this->interf = $newInterf;
    }

    public function __toString()
    {
        return "Invent number=".$this->getInventNumber()." Model=".$this->getModel()." type=".$this->getType()." interface=".$this->getInterf();
    }
    public function sendToService()
    {
        $result = "Monitor with inventory number ".$this->getInventNumber()." and model ".$this->getModel()." sent to service organization.\n";

        return $result;
    }

    public function showFullInfo()
    {
        $result = "Full information about ".$this->getModel()." monitor:\n
            Inventory number: ".$this->getInventNumber().";\n
            Type of monitor: ".$this->getType().";\n
            Interface of monitor: ".$this->getInterf().";\n";

        return $result;
    }
}
