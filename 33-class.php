<?php

class person{

    // property adalah variabel yang ada di dalam class
    public string $name;
    public string $address;
    
    // method adalah function yang ada di dalam class
    public function sayHello(string $name){
        echo "Hello, $name!,"." Alamat di: " . $this->address;
    }
    
    // constructor adalah method yang akan dijalankan pertama kali ketika kita membuat object dari class tersebut
    public function __construct(){
        echo "Kita coba dulu ya!" . PHP_EOL;
    }
}

// membuat object dari class person
$mahasiswa = new person();
$mahasiswa->address = "Kadindi";
$mahasiswa->sayHello("Putra");