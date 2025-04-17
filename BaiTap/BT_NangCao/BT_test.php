
<?php
// Generate a random positive integer between -10 and 100
$randomNumber = rand(-10, 100);

// Ensure the number is positive
if ($randomNumber < 0) {
    $randomNumber = abs($randomNumber);
}

// Print the value
echo "The random positive integer is: $randomNumber";
?>