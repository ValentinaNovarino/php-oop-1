// definire una classe ‘Movie’
// all'interno della classe dichiarare delle variabili d'istanza
// all'interno della classe definire un costruttore
// all'interno della classe definire almeno un metodo
// istanziare almeno due oggetti ‘Movie’ e stampare a schermo i valori delle relative proprietà

<?php
class Movie {
    public $titolo;
    public $regista;
    public $genere;
    public $year;

    // definito costruttore
    function __construct($_titolo, $_genere) {
        $this->titolo = $_titolo;
        $this ->genere = $_genere;
    }
}

// definito oggetto 1
$titanic = new Movie('titanic', 'drammatico');
$titanic->regista = 'James Cameron' ;
$titanic->year = 1997;

// definito oggetto 2
$perlHarbor = new Movie('perl harbor', 'storico');
$perlHarbor->regista = 'michael bay';
$perlHarbor->year = 2001;



?>
