<?php
//les conditions
//if
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









?>

