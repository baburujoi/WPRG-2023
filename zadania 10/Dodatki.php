<?php
require_once "NoweAutko.php";
class Dodatki extends NoweAutko
{
    protected $alarm=550;
    protected $radio;
    protected $ac;
    public function getAlarm()
    {
        return $this->alarm;
    }
    public function getRadio()
    {
        return $this->radio;
    }
    public function getAc()
    {
        return $this->ac;
    }
    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;
    }
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }
    public function setAc($ac)
    {
        $this->ac = $ac;
    }

    public function obliczCene($cena)
    {
        $cena += $this->getAc();
        $cena += $this->getAlarm();
        $cena += $this->getRadio();

        return parent::obliczCene($cena);
    }
}