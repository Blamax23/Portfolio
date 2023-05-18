<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <title>Générateur fichier json</title>
</head>
<body>
    <div class="retour">
        <a href="../../Projets.html"><div class="firstarrow"></div><div class="secondarrow"></div></a>
    </div>
    <div class="title">
        <h1>Générer vos fichiers</h1>
    </div>
    <div class="generateurs">
        <div class="generatorAuto">
            <div class="generatorAuto__form">
                <form action="GenerateurAuto.php" method="post">
                    <div class="value">
                        <input type="text" name="nomvalue1" id="nomvalue1" class="nomvaleur" placeholder='Nom Valeur : "TelUser"'> 
                        <p>:</p>
                        <select name="value1" id="value1" class="valeur">
                            <option value="prenom">Prénom</option>
                            <option value="nom">Nom</option>
                            <option value="mail">Email</option>
                        </select>
                    </div>
                    <div class="value">
                        <input type="text" name="nomvalue2" id="nomvalue2" class="nomvaleur" placeholder='Nom Valeur : "AdresseFournisseur"'> 
                        <p>:</p>
                        <select name="value2" id="value2" class="valeur">
                            <option value="prenom">Prénom</option>
                            <option value="nom">Nom</option>
                            <option value="mail">Email</option>
                        </select>
                    </div>
                    <div class="value">
                        <input type="text" name="nomvalue3" id="nomvalue3" class="nomvaleur" placeholder='Nom Valeur : "NomMedecin"'> 
                        <p>:</p>
                        <select name="value3" id="value3" class="valeur">
                            <option value="prenom">Prénom</option>
                            <option value="nom">Nom</option>
                            <option value="mail">Email</option>
                        </select>
                    </div>
                    <div class="nbFichiers">
                        <label for="nb">Nombre de lignes à générer : </label>
                        <input type="number" name="nb" id="nb" min="1" max="1000">
                    </div>
                    <input type="submit" class="confirm" value="Générer">
                </form>
            </div>
        </div>
    </div>
</body>
</html>

<style>
    *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    body{
        background-color: rgb(20, 20, 30);
        color: white;
    }

    .retour{
        position: absolute;
        margin: 0;
        margin-top: 15px;
    }

    .title{
        font-size: 40px;
        width: max-content;
        margin: auto;
        color: white;
        padding-top: 50px;
    }

    .generateurs{
        width: 40%;
        height: 60vh;
        margin: auto;
        border: 5px solid rgb(20, 20, 160);
        padding: 15px;
        border-radius: 25px;
    }

    .value{
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        margin-top: 25px;
    }

    .value p{
        font-size: 30px;
        margin: 1px;
        margin-top: 7px;
    }

    .nomvaleur{
        height: 4vh;
        background-color: transparent;
        box-shadow: none;
        border: none;
        border-bottom: 2px solid white;
        color: white;
        font-size: 20px;
    }

    .nomvaleur:focus{
        outline: none;
        border-bottom: 2px solid rgb(20, 20, 160);
    }

    .valeur{
        height: 4.6vh;
        text-align: center;
        font-size: 20px;
        background-color: transparent;
        border: none;
        border-bottom: 2px solid white;
        color: white;
    }

    .valeur option{
        color: black;
    }

    .valeur option::selection{
        color: white;
    }

    .valeur:focus{
        outline: none;
        border-bottom: 2px solid rgb(20, 20, 160);
    }

    .nomvaleur, .valeur{
        width: 48%;
        margin: 5px;
    }

    .nbFichiers{
        width: max-content;
        margin: auto;
        margin-top: 25px;
        font-size: 25px;
    }

    .nbFichiers input{
        height: 50px;
        width: 50px;
        font-size: 25px;
    }

    .confirm{
        width: 100%;
        height: 50px;
        margin-top: 25%;
        font-size: 25px;
        background-color: rgb(20, 20, 160);
        border: none;
        border-radius: 25px;
        color: white;
    }

    .confirm:hover{
        background-color: white;
        color: rgb(20, 20, 160);
    }

    .firstarrow{
        width: 30px;
        height: 30px;
        border-top: 5px solid white;
        border-right: 5px solid white;
        transform: rotate(-135deg);
        margin-left: 25px;
        float: left;
    }

    .secondarrow{
        width: 30px;
        height: 30px;
        border-top: 5px solid white;
        border-right: 5px solid white;
        transform: rotate(-135deg);
        margin-left: -15px;
        float: left;
    }
</style>