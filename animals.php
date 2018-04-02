<?php

//Array of continents and animals

$continents = [
    'Eurasia' => ['Ursus arctos', 'Canis lupus', 'Halichoerus grypus', 'Rangifer tarandus'],
    'Africa' => ['Kobus vardonii', 'Giraffa camelopardalis', 'Pangolins', 'Panthera leo'],
    'North America' => ['Bison', 'Procyon lotor', 'Haliaeetus leucocephalus'],
    'South America' => ['Lama glama', 'Panthera onca', 'Puma concolor', 'Platyrrhini'],
    'Australia' => ['Macropus rufus', 'Phascolarctos cinereus', 'Sarcophilus harrisii', 'Dromaius'],
];

//Select animals which names consist of two words

foreach ($continents as $continent => $animals) {
	foreach ($animals as $animal) {
		$twoWordAnimal = strpbrk($animal, ' ');
		if ($twoWordAnimal != false) { 
			$twoWordAnimals[] = $animal;
		}
	}
}

//Separate names

foreach ($twoWordAnimals as $animal) { 
	$values[] = explode(' ', $animal);
}

// Create two separate arrays of first part of animals' name and second part of animals' names

$firstWords = [];
$secondWords = [];

foreach ($values as $value) {
	foreach ($value as $key => $name) {
		if ($key % 2 == 0) {
			$firstWords[] = $name;
		}
		else {
			$secondWords[] = $name;
		}
	}
}

//Shuffle names in two arrays and create new array of animals 

shuffle($firstWords);
shuffle($secondWords);

$magicAnimals = [];

$arrayLength = count($firstWords);

for ($i = 0; $i < $arrayLength; $i++) {
	
	$magicAnimals[] = $firstWords[$i] . ' ' . $secondWords[$i];
}

//Print the result

foreach ($magicAnimals as $key => $magicAnimal) {
	if ($key == $arrayLength - 1) {
		echo ('<p>' . $magicAnimal . '. ' . '</p>');
	}
	else {
		echo ('<p>' . $magicAnimal . ', ' . '</p>');	
	}
	
}

?>