<?php
    class Movie{
        public $titolo;
        public $genere;
        public $anno;
        public $regista;
        public $protagonista;

        function __construct($_protagonista) {
            $this->protagonista = $_protagonista;
        }
    };
    $film_1 = new Movie("Christian Bale & Hugh Jackman");
    $film_1 -> titolo = "The Prestige";
    $film_1 -> genere = "Thriller";
    $film_1 -> anno = 2006;
    $film_1 -> regista = "Christopher Nolan";
    echo $film_1 -> titolo." è un film ". $film_1 -> genere." uscito nel ".$film_1 -> anno." diretto da ".$film_1 -> regista." con protagonisti ".$film_1 -> protagonista."<br>";
    
    $film_2 = new Movie("Leaonardo DiCaprio");
    $film_2-> titolo = "Killers of the flower moon";
    $film_2-> genere = "Drammatico";
    $film_2-> anno = "2023";
    $film_2-> regista = "Martin Scorsese";
    echo $film_2 -> titolo." è un film ". $film_2 -> genere." uscito nel ".$film_2 -> anno." diretto da ".$film_2 -> regista." con protagonisti ".$film_2 -> protagonista."<br>";

    $film_3 = new Movie("Aldo, Giovanni e Giacomo");
    $film_3 -> titolo = "Chiedimi se sono felice";
    $film_3 -> genere = "Commedia";
    $film_3 -> anno = "2000";
    $film_3 -> regista = "Massimo Venier";
    echo $film_3 -> titolo." è un film ". $film_3 -> genere." uscito nel ".$film_3 -> anno." diretto da ".$film_3 -> regista." con protagonisti ".$film_3 -> protagonista."<br>";
?>

