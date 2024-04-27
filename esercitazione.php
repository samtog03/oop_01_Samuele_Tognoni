<!-- Crea una classe Company che abbia i seguenti attributi pubblici:
name: nome dell’azienda;
location: stato in cui è ubicata la sede dell’azienda;
tot_employees: numero di dipendenti assunti in quella sede.


Crea 5 istanze di 5 aziende diverse


Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“;


Aggiungi un nuovo attributo chiamato $avg_salary nella Classe Company. Aggiorna poi le aziende che hai già creato nel punto 2.


Implementa un metodo che calcoli la spesa per un numero variabile di mesi (praticamente il metodo deve accettare come parametro N mesi) e poi implementa un altro metodo che stampi a schermo l’informazione (sono due metodi diversi).


Implementa un attributo statico che tenga traccia di quante aziende sono state create.


Implementa un metodo statico che stampi a schermo con una frase quante aziende sono state create. -->
<?php

    class Company {

        public $name;
        public $location;
        public $tot_employees;
        public $avg_salary;
        public static $counter = 0;

        public function __construct ( $_name, $_location, $_tot_employees, $_avg_salary ) {
            $this->name = $_name;
            $this->location = $_location;
            $this->tot_employees = $_tot_employees;
            $this->avg_salary = $_avg_salary;
            
            self::$counter++;
        }

        public function stampAulab () {
            if( $this->tot_employees > 0 ) {
                echo "L azienda $this->name situata in $this->location ha $this->tot_employees dipendenti";
            }
            else {
                echo "L azienda $this->name situata in $this->location non ha dipendenti";
            }
        }

        public function calcSalary( $months ) {
            $total = $this->tot_employees * $this->avg_salary; 
            $totalEmpl = $months * $total;
            echo "L'azienda $this->name spende per i salari per $months mesi un totale di $totalEmpl";
        }

        public static function totCompany() {
            echo "Hai creato " . self::$counter . " aziende";
        }
    }

    $company1 = new Company("Aulab", "Italia", 50, 1300);
    $company2 = new Company("Amazon", "America", 100000, 40);
    $company3 = new Company("Coca-Cola", "America", 50000, 1600);
    $company4 = new Company("ACF Fiorentina", "Firenze", 500, 1800);
    $company5 = new Company("Paperino", "Molise", 0, 15);


    echo $company1 -> stampAulab() . "\n";
    echo $company2 -> calcSalary( 6 ) . "\n";
    echo Company::totCompany(); 
    
