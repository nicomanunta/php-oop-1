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

        public function scritturaInfo(){
            echo $this-> titolo;
            echo " è un film ".$this-> genere;
            echo " uscito nel ".$this-> anno;
            echo " diretto da ".$this-> regista;
            echo " con protagonista ".$this-> protagonista."<br>"; 
        }
    };
    $film_1 = new Movie("Christian Bale e Hugh Jackman");
    $film_1 -> titolo = "The Prestige";
    $film_1 -> genere = "Thriller";
    $film_1 -> anno = 2006;
    $film_1 -> regista = "Christopher Nolan";
    $film_1 -> scritturaInfo();
    
    $film_2 = new Movie("Leaonardo DiCaprio");
    $film_2-> titolo = "Killers of the flower moon";
    $film_2-> genere = "Drammatico";
    $film_2-> anno = "2023";
    $film_2-> regista = "Martin Scorsese";
    $film_2 -> scritturaInfo();

    $film_3 = new Movie("Aldo, Giovanni e Giacomo");
    $film_3 -> titolo = "Chiedimi se sono felice";
    $film_3 -> genere = "Commedia";
    $film_3 -> anno = "2000";
    $film_3 -> regista = "Massimo Venier";
    $film_3 -> scritturaInfo();
?>


