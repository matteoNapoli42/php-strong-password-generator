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
                <div class="col-6 d-flex flex-column w-25 gap-3">
                    <input type="text" class="w-50">
                    <div class="d-flex flex-column">
                        <span>
                            <input type="radio" name="radioYes"> Si
                        </span>

                        <span>
                            <input type="radio" name="radioNo"> No
                        </span>
                    </div>
                    <div class="d-flex flex-column">
                        <span>
                            <input type="checkbox"> Lettere
                        </span>
                        <span>
                            <input type="checkbox"> Numeri
                        </span>

                        <span>
                            <input type="checkbox"> Simboli
                        </span>
                    </div>




                </div>
            </div>
            <div>
                <button class="btn btn-primary"> Invia</button>
                <button class="btn btn-secondary"> Annulla</button>
            </div>
        </div>
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