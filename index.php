<?php

/*

$nom='jo';
$sexe='homme';

if($sexe=='homme'){
    echo'vous etes bien un homme';
}else{
    echo'vous etes pas eun homme';
}

?>

<br/>

<?php
//switch

$nombre=100;
switch($nombre){
    case '1': echo'lundi';
             break;
    case'2': echo'mardi';
            break;
    case'3':echo 'mercredi';
             break;  
    case'4':echo 'jeudi';
             break; 
    case'5':echo 'vendredi';
             break; 
    case'6':echo 'samedi';
             break; 
    case'7':echo 'dimanche';
             break;   
    default: echo'ce chiffre ne correspond a aucun jour';                                                       
}
?>

<br/>
<?php
//les boucles

//la boucle while:

    echo'la boucle while'.'<br/>';
    $nbre=1;
    while($nbre<=10){
        echo'le nombre ='.$nbre.'<br/>';
        $nbre++;
    }


    '<br/><br/>';
    echo'la boucle do while'.'<br>';
     $nb=1;
    do{
        echo'le nombre ='.$nb.'<br/>';
        $nb++;
    }while($nb<=10);

    //la boucle for

    echo'la boucle for'.'<br/>';

    $n=1;
    for($n=1;$n<=10;$n++){
        echo'le nombre ='.$n.'<br>';
    }



    //les tableaux:

    $noms=array('dan','ben','marc','dorcas');

    $ages=array(
        'dan'=>20,
        'ben'=>22,
        'marc'=>25,
        'dorcas'=>'non specifique'
    );
 foreach($ages as $key => $valeurs ){
    echo $key.'=>'.$valeurs.'<br/>';
 }

 

 // TABLEAUX MULTIDIMENSIONNEL
 
 $membres=array(
   array('dan',20,'danielciroy87@gmail.com','M'),
   array('ben',23,'banaw@gmail.com',"M"),
   array('marc',25,'marc@gmail.com',"M")
 );

 for($i=0;$i<3;$i++){
    for($ii=0;$ii<4;$ii++){
        echo $membres[$i][$ii].'<br/>';
    }
 }


function Somme($a,$b){
    $S=$a+$b;
    echo$S;
    return($S);
    
}

Somme(50,50);

function Salutation($nom){
    echo'bonjour '.$nom.' comment allez vous?';
}
Salutation('daniel');

*/

try{
    $serverhost="localhost";
    $servername="root";
    $serverpass="";

    $rappel= new PDO("msql:host=$serverhost;dbname=rappel_pdo",$servername,$serverpass);
    $rappel->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo'ERROR'.$e->getMessage();
}

if(isset($_POST['valider'])){
    $nom=$_POST['nom'];
    $mdp=$_POST['mdp'];

    $requete=$rappel-> prepare("INSERT INTO util VALUES(:0, :nom, :mdp)");
    $req->execute(array(
        "nom"=>$nom,
        "mdp"=>$mdp
    ));
    echo 'vous etes inscrit';

}else{
    echo'inscrivez vous';
}







?>

