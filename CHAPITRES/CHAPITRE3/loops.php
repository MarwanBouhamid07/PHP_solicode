 <?php

$numDays = 7;

for ($i=1; $i <= $numDays ; $i++) { 
    echo "Day: ". $i ."<br>";
}

/*========================*/echo '<br>';/*========================*/

$numMonthes = 12;

$index = 1;

while ($index <= $numMonthes) { 
    echo "Month: ". $index. "<br>";
    $index++;
    }
    
    
/*========================*/echo '<br>';/*========================*/

$family = array("grandamather","grandfather","brother","uncle","aunt");


foreach ($family as $fam) {
    echo "i have ". $fam ." and ";
}
