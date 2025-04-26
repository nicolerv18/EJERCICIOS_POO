<?php
include("Student.php");
include("License.php");
include("LicenseA.php");
include("LicenseB.php");
include("LicenseC.php");

echo "Driving license course ";
echo "<br>";
$selectedLicense = "LicenseB";
echo "Select a:  " . $selectedLicense. "<br>";

$student = new Student("John Doe", "Ramirez", "1075795034", "Call 25a #36A 60", "317 503 5818", "O+");

if($selectedLicense== "LicenseA") {
    $LicenseA = new LicenseA();
    echo "Name: " . $LicenseA->getPrice();
    echo "<br>";
    echo "Duration " . $LicenseA->getDuration(). " Meses";
    echo "<br>";
    echo "Type " . $LicenseA->getType();
    echo "<br>";
} elseif ( $selectedLicense == "LicenseB") {
    $licenseB = new LicenseB();
    echo "Name: ". $licenseB->getPrice(); 
    echo"<br>";
    echo "Duration: ". $licenseB->getDuration(). " Meses"; 
    echo"<br>";
    echo "Type ". $licenseB->getType(); 
    echo"<br>";
}else{
    $licenseC = new LicenseC();
    echo "Name: ". $licenseC->getPrice(); 
    echo "<br>";
    echo "Duration: ". $licenseC->getDuration(). " Meses"; 
    echo "<br>";
    echo "Type  ". $licenseC->getType(); 
}
?>
