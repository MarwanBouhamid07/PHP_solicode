

<?php
echo "<div style='font-size:30px; font-weight:900; width:100%;height:100%; text-align: center;'>";
function sub($a,$b){
    
    if ( $a !== 0 && $b !== 0) {
        return "$a / $b = <span style=' color:green;'>". $a / $b."</span>";
        }else{
            return "<p style='color:red'>you can't substract 0 </p>";
            }
            
            }
            
           echo sub(5,0);



           

$compteur = 0;

function incrementer() {
    static $compteur = 0;
    $compteur++;
    echo $compteur ."<br>";
}
incrementer(); 
incrementer(); 
incrementer(); 
incrementer(); 

echo "</div>";
