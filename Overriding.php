<!-- Jenris Simamora
13321037
D-III Teknologi komputer -->

<?php

//Class
class Coba{ 

  private $name; //Property
  private $marga; //Property
  private $tgglhr; //Property
  private $tptlhr; //Property
  private $tipe; //Property


  public function __construct($name, $marga, $tptlhr, $tgglhr, $tipe){ //Magic Method
    $this -> name = $name; // object type
    $this -> marga = $marga; // object type
    $this -> tptlhr = $tptlhr; // object type
    $this -> tgglhr = $tgglhr; // object type
    $this -> tipe = $tipe; // object type
    
  }
  public function getRetrunLengkap(){ //Method
    $str = "Nama : {$this->name} {$this->marga} <br> Tempat Tanggal Lahir : {$this->tptlhr}/{$this->tgglhr} <br>Hobi : {$this->tipe}";  // object type
    return $str;
  }

}
class hobby extends Coba{
    public function getRetrunLengkap(){
        $str = parent::getRetrunLengkap();
        return $str;
    }
}
class gender extends Coba{
    public function getRetrunLengkap(){
        $str = parent::getRetrunLengkap();
        return $str;
    }
}

//Object
$ObjectResult1 = new hobby('Jenris', 'Simamora', 'Pantis', '04-02-2004',"Main-Game");
echo $ObjectResult1 -> getRetrunLengkap();
$ObjectResult2 = new gender('David', 'Tambunan', 'Medan', '23-09-2003', "Laki-Laki");
echo "<br><hr>";
echo $ObjectResult2 -> getRetrunLengkap();
?>