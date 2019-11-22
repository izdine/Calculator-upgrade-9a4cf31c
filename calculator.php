<?php
echo "Welke operatie wil je uitvoeren? (+, -, %, *):\n";
$formule = readline (">");

echo "Eerste getal?\n" ;
$a = readline(">");
echo "Tweede getal?\n" ;
$b = readline('>') ;

if ($formule != "+" && $formule != "-" && $formule != "%" && $formule != "*") {
exit("is geen geldige operatie");
}

if (!is_numeric($a)) {
exit ($a . "is geen getal");
}
if (!is_numeric($b)){
exit ($b . "is geen getal");
}

if ($formule === "+" ) {
echo "dit is je antwoord". ($a + $b) ;
}
if ($formule === "-") {
echo "dit is je antwoord". ($a - $b) ;
}

if ($formule === "%" ) {
echo "dit is je antwoord". ($a % $b) ;
}
if ($formule === "*") {
echo "dit is je antwoord". ($a * $b) ;
}

?>
