<?php
// definire una classe ‘Movie’
// all'interno della classe dichiarare delle variabili d'istanza
// all'interno della classe definire un costruttore
// all'interno della classe definire almeno un metodo
// istanziare almeno due oggetti ‘Movie’ e stampare a schermo i valori delle relative proprietà

class Movie {
    public $titolo;
    public $regista;
    public $genere;
    public $anno;

    // definito costruttore
    function __construct($_titolo, $_regista) {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
    }

    public function getTitolo() {
        return $this->titolo;
    }

    public function getRegista() {
        return $this->regista;
    }
}

// definito oggetto 1
$titanic = new Movie('Titanic', 'James Cameron');


// // stampo a schermo valori prorpietà film 1
echo 'FILM 1'.'<br>';
echo $titanic->getTitolo().'<br>';
echo $titanic->getRegista().'<br>';
echo $titanic->genere = 'Drammatico'.'<br>';
echo $titanic->anno = '1997'.'<br>';


// // definito oggetto 2
$perlHarbor = new Movie('Perl Harbor', 'Michael Bay');
echo 'FILM 2'.'<br>';
echo $perlHarbor->getTitolo().'<br>';
echo $perlHarbor->getRegista().'<br>';
echo $perlHarbor->genere = 'Storico'.'<br>';
echo $perlHarbor->anno = '2001';


?>
