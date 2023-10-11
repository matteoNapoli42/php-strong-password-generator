<!--
  Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
leggete le slide sulla session e la documentazione
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.  
-->

<?php
include 'functions.php'
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>STRONG PASSWORD GENERATOR</title>
</head>

<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1>Strong Password Generator</h1>
            <h3>Genera una password sicura</h3>
        </div>
        <div id="presentState">Nessun parametro valido inserito</div>
        <div id="passGen" class="py-5 px-5 mt-3">
            <div class="d-flex justify-content-between">
                <div class="col-6 d-flex flex-column gap-3">
                    <h6>Lunghezza password : </h6>
                    <span>Consenti ripetizioni di uno o più caratteri :</span>
                </div>

                <div>
                    <form action="index.php" method="get">
                        <div class="col-6 d-flex flex-column gap-2">
                            <input type="text" name="passLength">

                            <div class="d-flex flex-column">
                                <span><input type="radio" name="radioYes"> Si</span>
                                <span><input type="radio" name="radioNo"> No</span>
                            </div>

                            <div class="d-flex flex-column">
                                <span><input type="checkbox" name="allowChar"> Lettere</span>
                                <span><input type="checkbox" name="alloqNumb"> Numeri</span>
                                <span><input type="checkbox" name="allowSymb"> Simboli</span>
                            </div>
                        </div>
                </div>
                <div>
                    <input type="submit" value="Invia" class="btn btn-primary">
                </div>
                </form>
            </div>
        </div>
        <h1>LA PASS E' LUNGA <?php echo $passLength; ?></h1>
        <h1><?php echo $allowedChar; ?></h1>
        <h1>LA TUA PASSWORD E' <?php echo $password; ?> </h1>
    </div>
</body>

<style>
    body {
        background-color: darkblue;
    }

    h1 {
        color: grey;
    }

    h3 {
        color: white;
    }

    #presentState {
        padding: 15px 0px 15px 5px;
        background-color: aquamarine;
    }

    #passGen {
        background-color: white;
    }
</style>

</html>