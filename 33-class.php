<?php

class person{
    public string $name;
    public int $address;
    public function sayHello(string $name){
        echo "Hello, $name!" . PHP_EOL;
    }
    
}

$mahasiswa = new person();
$mahasiswa->sayHello("Putra");