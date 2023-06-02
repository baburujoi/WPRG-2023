<?php
require_once "Dodatki.php";
class Ubezpieczenie extends Dodatki
{
    private $ubezpieczenie = 0.01;
    private $lataUżytku;

    public function obliczCene($cena)
    {
        $cena= parent::obliczCene($cena);
        return ($this->ubezpieczenie *($cena*(100-$this->getLataUżytku())/100));
    }
    public function getLataUżytku()
    {
        return $this->lataUżytku;
    }
    public function setLataUżytku($lataUżytku)
    {
        $this->lataUżytku = $lataUżytku;
    }


}