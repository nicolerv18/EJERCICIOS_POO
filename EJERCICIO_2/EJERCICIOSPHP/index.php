<?php
include_once("autoload.php");

// Crear un objeto de la clase Person
$person = new Person("Juan", 25, 1.75, 70);

// Mostrar información de la persona
echo "Nombre: " . $person->getName() . "<br>";
echo "Edad: " . $person->getAge() . "<br>";
echo "Altura: " . $person->getHigh() . " m<br>";
echo "Peso: " . $person->getWeight() . " kg<br>";
echo "<br>Seleccione el plan: <br>";
echo "Plan Básico <br>";
echo "Plan Medium <br>";
echo "Plan Premium <br>";
$basicPlan = new BasicPlan();
$mediumPlan = new MediumPlan();
$premiumPlan = new PremiumPlan();

$select = "Medium Plan"; // Get this from user input

// Determinar el plan seleccionado
if ($select == "Basic Plan") {  
  $plan = $basicPlan; // Assign the correct plan object
} elseif ($select == "Medium Plan") {
  $plan = $mediumPlan; // Assign the correct plan object
} elseif ($select == "Premium Plan") {
  $plan = $premiumPlan; // Assign the correct plan object
} else {
    echo "Seleccione uno de los tres planes.";
    exit; // Exit to prevent further errors
}

// Now $plan is defined (unless no plan was selected)
if (isset($plan)) { // Check if $plan is defined
    echo "<br><strong>Plan Seleccionado:</strong><br>";
    echo "Plan Type: " . $plan->getType() . "<br>";
    echo "Price: $" . $plan->getPrice() . "<br>";
    echo "Services: " . $plan->getServices() . "<br>";
}

?>