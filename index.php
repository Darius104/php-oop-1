<!-- 
    - è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
    - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<?php 

class Movie {
    public $title;
    public $type;
    public $age;

    public function __construct($a){
        $this->age = $a;
    }


    public function getFilm(){
        $fullname = $this->title . ' ' . $this->type . ' ' . $this->age;
        return $fullname;
    }
}

$after = new Movie(12);
$after->title = 'After';
$after->type = 'Horror';


$lol = new Movie(22);
$lol->title = 'Lol';
$lol->type = 'Comic';

?>
<div>
    <ul>
        <li>Nome: <?php echo $after->title; ?></li>
        <li>Type: <?php echo $after->type; ?></li>
        <li>Age: <?php echo $after->age; ?></li>
        <li>Full Name: <?php echo $after->getFilm(); ?></li>
    </ul>
</div>

<div>
    <ul>
        <li>Nome: <?php echo $lol->title; ?></li>
        <li>Type: <?php echo $lol->type; ?></li>
        <li>Age: <?php echo $lol->age; ?></li>
        <li>Full Name: <?php echo $lol->getFilm(); ?></li>
    </ul>
</div>