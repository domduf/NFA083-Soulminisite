alert( 'nbAleatoire.js  ' );

var $rand1=Math.random();
var $kapcha1= ($rand1*100).toFixed(0);

var $rand2=Math.random(); 
var $kapcha2= ($rand2*100).toFixed(0);

var $addition = parseInt($kapcha1)+parseInt($kapcha2);

$bloc1=document.getElementById("n1");
$bloc2=document.getElementById("n2");
$bloc3=document.getElementById("n3");
//alert( $bloc1 );



$bloc1.innerHTML=('Kaptcha 1: '+ $kapcha1 );
$bloc2.innerHTML=('Kaptcha 2: '+ $kapcha2 );
$bloc3.innerHTML=('Pouvez-vous calculer '+ $kapcha1 + ' \+ '+ $kapcha2+ ' ? (Solution: '+ $addition+ ')');
