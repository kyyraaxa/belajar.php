<?php

class Hewan{
    public $name;

    public function __construct(string $name){
        $this->name = $name;
    }

    public function suara(){
        echo $this->name . "bersuara";
    }
}

class Anjing extends Hewan{

    public function suara(){
        echo "{$this->name} bersuara gukguk". PHP_EOL;
    }

    public function ngamukDiKonoha(){
        echo "{$this->name} ngamuk sampai si jajal tewas";
    }
}

$anjing = new Anjing("Zila");
$anjing->suara();
$anjing->ngamukDiKonoha();