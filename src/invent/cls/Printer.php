<?php
/**
 * Created by JetBrains PhpStorm.
 * File: class.printer.php
 * User: Yuriy Tarnavskiy
 * Date: 18.10.13
 * Time: 14:00
 */

namespace invent\cls;

class Printer extends AbstractInventory implements InventoryInterface
{
    private $model;
    private $type;
    private $cartridge;

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

    public function getCartridge()
    {
        return $this->cartridge;
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

    public function setCartridge($newCartridge)
    {
        $this->cartridge = $newCartridge;
    }

    public function __toString()
    {
        return " Invent number=".$this->getInventNumber()." Model=".$this->getModel()." Type=".$this->getType()." Cartridge=".$this->getCartridge();
    }

    public function sendToService()
    {
        $result = "Printer with inventory number ".$this->getInventNumber()." sent to service organization\n";
        return $result;
    }

    public function showFullInfo()
    {
        $result = "Full information about Printer model: ".$this->getModel()." \n
            Inventory number: ".$this->getInventNumber().";\n
            Type of printer: ".$this->getType().";\n
            Model of cartridge for current printer: ".$this->getCartridge().";\n";
        return $result;
    }
}