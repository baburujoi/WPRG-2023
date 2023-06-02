<?php

class NoweAutko
{
    protected $made;
    protected $cena;
    protected $kurs = 4.51;

    public function obliczCene($cena){
        $autko = new NoweAutko();
        return $cena* $autko->kurs;
    }
    public function setCena($cena)
    {
        $this->cena = $cena;
    }



}