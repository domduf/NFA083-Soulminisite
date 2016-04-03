//alert( 'kapcha.js  ' );//test

//creation de deux nombres aléatoires
var $rand1=Math.random();
var $rand2=Math.random();

//créationde deux kapcha entre 0 et 100
var $kapcha1= ($rand1*10).toFixed(0);
var $kapcha2= ($rand2*10).toFixed(0);

//solution de l'addition
var $addition = parseInt($kapcha1)+parseInt($kapcha2);


//récupération des adresses des champs
$bloc1=document.getElementById("n1");
$bloc2=document.getElementById("n2");
//alert( $bloc1 );//test


$bloc1.innerHTML=( $kapcha1 );
$bloc2.innerHTML=( $kapcha2 );

