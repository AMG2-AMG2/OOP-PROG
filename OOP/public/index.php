
<?php

class Rolex {
    private $model;
    private $materiaal;
    private $prijs;

    public function __construct($model, $materiaal, $prijs) {
        $this->model = $model;
        $this->materiaal = $materiaal;
        $this->prijs = $prijs;
    }

    public function geefInformatie() {
        echo "Check deze vette Rolex {$this->model}! Gemaakt van {$this->materiaal} en kost je maar liefst {$this->prijs} euro. Niet verkeerd voor zo een waarde stijgend horloge?\n";
    }
}

$myRolex = new Rolex("Datejust", "Gold", 14950);
$myRolex = new Rolex("Daydate", "White Gold", 37500);
$myRolex = new Rolex("Submariner", "Silver", 10950);
$myRolex = new Rolex("GMT Master 2", "Rose gold", 21900);
$mijnRolex->geefInformatie();

class LuxeRolex extends Rolex {
    private $edelstenen;

    public function __construct($model, $materiaal, $prijs, $edelstenen) {
        parent::__construct($model, $materiaal, $prijs);
        $this->edelstenen = $edelstenen;
    }

    public function voegEdelstenenToe($aantal) {
        if ($aantal > 0) {
            echo "We hebben zojuist {$aantal} edelstenen aan deze luxe Rolex toegevoegd. Dat maakt hem extra bijzonder!\n";
        } else {
            echo "We kunnen geen negatief aantal edelstenen toevoegen. Probeer het opnieuw?\n";
        }
    }

    public function geefInformatie() {
        parent::geefInformatie();
        echo "Deze luxe Rolex heeft wat extra bling met {$this->edelstenen} edelstenen erin verwerkt.\n";
    }
}

$luxeRolex = new LuxeRolex("Daytona", "Goud", 30000, 20);
$luxeRolex->geefInformatie();

$luxeRolex->voegEdelstenenToe(10);
$luxeRolex->geefInformatie();

$luxeRolex->voegEdelstenenToe(-5);
$luxeRolex->geefInformatie();
?>
