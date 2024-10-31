<?php
/**
* Asociativní pole
* Deklarujte pole months, které bude mít v hodnotách uložen český název měsíce. Index bude odpovídat pořadovému číslu měsíce.
* a) Za pomocí cyklu zobrazte všechny měsíce.
* b) Za pomocí cyklu zobrazte všechny měsíce z období 6-12.
*/

//reseni

$months = ["Leden",
"Únor", 
"Březen",
"Duben",
"Květen", 
"Červen",
"Červenec",
"Srpen", 
"Září", 
"Říjen",
"Listopad",
"Prosinec"];

foreach ($months as $a){
    echo $a;
}
echo "    ";

for ($i = 6; $i < 12; $i++ ){
    echo $months[$i];
}



?>
