<?PHP
$titel=str_replace("_"," ",substr(__FILE__,strpos(__FILE__,"opdracht"),-4));
include('opdracht_begin.php');
/****************************
TYP HIERONDER JOUW PHPCODE
****************************/

$tekst="Ik heb een bijbaantje bij de Aldi. De Aldi betaalt goed.";
echo $tekst;
$tekst=str_replace('Aldi','Albert Heijn',$tekst);
echo "<h1> $tekst </h1>";
$tekst=str_replace('Albert Heijn','Aldi',$tekst);
echo "<h4>".$tekst."</h4>";

$lengte = strlen($tekst); 
echo "<I> De string $tekst bestaat uit </I>".$lengte." karakters.";

/****************************
EINDE VAN JOUW PHPCODE
****************************/
include('opdracht_eind.php');
?>