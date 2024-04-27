<?php 

/* ESERCIZIO 1---------- */

/* CONTINENTE--------- */
class Continent
{
 public $nameContinent;

 public function __construct($continent){
  $this->nameContinent = $continent; 
 }
}

/* COUNTRY------- */
class Country extends Continent
{
 public $nameCountry;

 public function __construct($continent, $country){
    parent::__construct($continent);
  $this->nameCountry = $country; 
 }
}

/* REGION------ */
class Region extends Country
{
 public $nameRegion;

 public function __construct($continent, $country, $region){
    parent::__construct($continent, $country);
  $this->nameRegion = $region; 
 }
}


/* PROVINCE----- */
class Province extends Region
{
 public $nameProvince;

 public function __construct($continent, $country, $region, $province){
    parent::__construct($continent, $country, $region);
  $this->nameProvince = $province; 
 }
}


/* CITY------- */
class City extends Province
{
 public $nameCity;

 public function __construct($continent, $country, $region, $province, $city){
    parent::__construct($continent, $country, $region, $province);
  $this->nameCity = $city; 
 }
}


/* STREET-------- */
class Street extends City
{
 public $nameStreet;

 public function __construct($continent, $country, $region, $province, $city, $street){
    parent::__construct($continent, $country, $region, $province, $city);
  $this->nameStreet = $street; 
 }
}

$luogo = new Street('Europa','Italia','Puglia','Ba','Bari','Strada San Giorgio 2D');

echo "mi trovo in".$luogo->nameContinent.", ".$luogo->nameCountry.", ".$luogo->nameRegion.", ".$luogo->nameProvince.", ".$luogo->nameCity.", ".$luogo->nameStreet;

/* ESERCIZIO 2----------- */

/* VERTEBRATI-------- */
class Vertebrates {
    private $typeAnimal;

    protected  function __construct($type){
        $this->typeAnimal = $type; 
    }
    public function animal(){
        echo "Sono un animale ".$this->typeAnimal;
    }
}

/* TYPE-BLOODED----- */
class typeBlooded extends Vertebrates{
    protected  $typeBlood;
    public function __construct ($type, $blood){
        parent::__construct($type);
        $this->typeBlood = $blood;
    }
    public function blood(){
        echo "Sono un animale a ".$this->typeBlood;
    }
}



/* ANIMALS------ */
class Animals extends typeBlooded{
    protected $typeSpecie;
    public function __construct ($type, $blood, $specie){
        parent::__construct($type, $blood);
        $this->typeSpecie = $specie;
    }

    public function specie(){
        echo "Sono un ".$this->typeSpecie;
    }
}

$animal= new Animals("vertebrato", "sangue freddo", "pesce");
var_dump($animal);
echo $animal->animal()."\n";
echo $animal->blood()."\n";
echo $animal->specie()."\n";


/* TRACCIA 3--------- */

class Car {
    protected $targa;
    protected $num_telaio;
    public function __construct($numero, $telaio){
        $this-> targa =$numero;
        $this->num_telaio=$telaio;
    }
  }
    
  class Fiat extends Car {
    protected $nome;
    protected $license;
    protected $color;
    public function __construct($numero, $telaio, $nome, $license, $color){
     parent ::__construct($numero, $telaio);
     $this-> nome =$nome;
     $this-> license =$license;
     $this-> color =$color;

    }

    public function stampa(){
        echo "La mia macchina è ".$this->nome.", con targa ".$this->targa." e numero di Telaio ".$this->num_telaio;
    }
  }

  $car = new Fiat("ND 123 OJ","1234","Opel","prova","grigio");
  echo $car->stampa();
  