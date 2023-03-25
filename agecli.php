<?php

$name = $argv[1];
$birthYear = $argv[2];

// Compute age
$age = date('Y') - $birthYear;

// Check if already a voter
if ($age >= 18) {
    echo "You are a voter\n";
}elseif ($age >= 60) {
    echo "You are a senior citizen\n";
// Check if already a senior citizen
}else {
	echo "You Cannot Vote Yet\n";
}
echo "Your name is $name, and your age is $age years old\n";
?>
