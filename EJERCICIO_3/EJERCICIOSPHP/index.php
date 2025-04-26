<?php
include("newtonsLaw.php");
include("firstLaw.php");
include("secondlaw.php");
include("trhidLaw.php");

echo "Newton's Laws ";
echo "<br>";
$selectedClass = "FirstLaw";
echo "Select a:  " . $selectedClass. "<br>";


//Primera Ley
if($selectedClass== "FirstLaw") {
    $firstLaw = new FirstLaw(0);
    echo "Name: " . $firstLaw->getName();
    echo "<br>";
    echo "Descriptión: " . $firstLaw->getDescription();
    echo "<br>";
    echo "Force: " . $firstLaw->getForce();
    echo "<br>";
    echo "" .$firstLaw->calculateLaw();

    //Segunda ley 
} elseif ( $selectedClass == "SecondLaw") {
    $secondLaw = new Secondlaw($force, 5, 2);
    echo "Name: ". $secondLaw->getName();
    echo"<br>";
    echo "Description: ". $secondLaw->getDescription() ;
    echo"<br>";
    echo "Force: ". $secondLaw->calculateLaw() ;
    echo"<br>";

    //Tercera Ley
}else{
    $trhidlaw= new TrhidLaw(10);
    echo "Name: ". $trhidlaw->getName();
    echo "<br>";
    echo "Description: ". $trhidlaw->getDescription() ;
    echo "<br>";
    echo "Action:  ". $trhidlaw->getAction();
    echo "<br>";
    echo "Reaction:  ". $trhidlaw->calculateLaw() ;
}
?>