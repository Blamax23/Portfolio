<?php require_once "BDD.php"; 
$NomValeurs = array();
$Valeurs = array();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nb = $_POST['nb'];
    $NomValeurs[0] = $_POST['nomvalue1'];
    $NomValeurs[1] = $_POST['nomvalue2'];
    $NomValeurs[2] = $_POST['nomvalue3'];
    $Valeurs[0] = $_POST['value1'];
    $Valeurs[1] = $_POST['value2'];
    $Valeurs[2] = $_POST['value3'];
    $json = array();
    for($i = 0; $i < $nb; $i++){
        $json[$i] = array();
        for($j = 0; $j < count($NomValeurs); $j++){
            if($Valeurs[$j] == "prenom"){
                $json[$i][$NomValeurs[$j]] = $PrenomsGarconsBruts[rand(0, count($PrenomsGarconsBruts) - 1)];
                $prenom = $json[$i][$NomValeurs[$j]];
            }elseif($Valeurs[$j] == "nom"){
                $json[$i][$NomValeurs[$j]] = $NomsFamilleBruts[rand(0, count($NomsFamilleBruts) - 1)];
                $nom = $json[$i][$NomValeurs[$j]];
            }else{
                if($prenom != null && $nom != null){
                    $json[$i][$NomValeurs[$j]] = $prenom . "." . $nom . "@gmail.com";
                }else{
                $json[$i][$NomValeurs[$j]] = $PrenomsGarconsBruts[rand(0, count($PrenomsGarconsBruts) - 1)] . "." . $NomsFamilleBruts[rand(0, count($NomsFamilleBruts) - 1)] . "@gmail.com";
                }
            }
        }
    }
    $json = json_encode($json, JSON_UNESCAPED_UNICODE);
    // Spécifier le nom de fichier
    $filename = 'FichierAutomatique.json';

    // Définir l'en-tête de réponse pour télécharger le fichier
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Disposition: attachment; filename="' . $filename . '"');
    header('Content-Length: ' . strlen($json));

    // Envoyer la chaîne JSON en tant que téléchargement de fichier
    echo $json;
    exit;
}
?>