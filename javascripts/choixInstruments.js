function afficheInstru() {

$violon = document.preInscription.violon.checked;
$violoncelle = document.preInscription.violoncelle.checked;
$trompette = document.preInscription.trompette.checked;
$trombone = document.preInscription.trombone.checked;
$tuba = document.preInscription.tuba.checked;
$triangle = document.preInscription.triangle.checked;

if ($violon) {
  $violon = 'le beau violon, '
} else $violon = '';
if ($violoncelle) {
  $violoncelle = 'le majestueux violoncelle, '
} else $violoncelle = '';
if ($trompette) {
  $trompette = 'la brillante trompette, '
} else $trompette = '';
if ($trombone) {
  $trombone = 'le roi trombone, '
} else $trombone = '';
if ($tuba) {
  $tuba = 'le bon gros tuba, '
} else $tuba = '';
if ($triangle) {
  $triangle='le petit triangle, '
} else $triangle = '';

  
if ($violon || $violoncelle || $trompette || $trombone || $tuba || $triangle) {
  alert('Vous avez choisi ' + ($violon) + ($violoncelle) + ($trompette) + ($trombone) + ($tuba) + ($triangle) + 'merci de votre choix.');
};
}
