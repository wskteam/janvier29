<?php

define("PI",3.14);


function datefr(){
//  echo date("d/m/y")."<br/>";
//  echo date("H:i:s");
$jour=array(
    " ",
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche"
);
$mois=array(
    " ",
    "Janvier",
    "Fevrier",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aout",
    "Septembre",
    "Octobre",
    "Novembre",
    "Decembre"
);
$datefr=$jour[date("N")].' '.date("d").' '.$mois[date("n")].' '.date("Y");
echo "Date version Francaise ".$datefr;

}
function dateF(){
    setlocale(LC_TIME,'fr_FR');
    echo "Nous sommes le ".strftime("%A %d %B %Y");
}

function testDate(){
    $date1=checkdate(12,10,2020);
    $date2=checkdate(42,10,2020);
    $date3=checkdate(12,10,-2020);

    if($date1)
    echo "La date est valide "."<br/>";
    
    else
    echo "La date n'est pas valide"."<br/>";

    if($date2)
    echo "La date est valide "."<br/>";
    
    else
    echo "La date n'est pas valide"."<br/>";

    if($date3)
    echo "La date est valide "."<br/>";
    
    else
    echo "La date n'est pas valide"."<br/>";
    
}

function constante(){
  echo PI;
  

}










function fill(){
    $color=array("vert","bleu","Jaune","gris");
    $clef=array(0,1);
    echo "<pre>";
    print_r(array_fill(0,3,$color));
    echo "</pre>";
}


function fill_key(){
    $color=array("vert","bleu","Jaune","gris"); 
    $clef=array("2","4","6","8");
    echo "<pre>";
    print_r(array_fill_keys($clef,$color));
    echo "</pre>";
}






























function addition($nb,$nb1){
    echo "Resultat : ".$nb+$nb1;
}

function bonjour(){
    echo "<br/>";
    echo "Hello world";
}

function nom(){
    return "Votre prenom : ";
}

?>