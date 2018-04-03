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

$twoWordAnimals = [];

foreach ($continents as $continent => $animals) {
	foreach ($animals as $animal) {
		$twoWordAnimal = explode(' ', $animal);
		if (count($twoWordAnimal) > 1) { 
			$twoWordAnimals[] = $twoWordAnimal;
		}
	}
}

// Create two separate arrays of first part of animals' name and second part of animals' names

$firstWords = [];
$secondWords = [];

foreach ($twoWordAnimals as $value) {
	$firstWords[] = $value[0];
	$secondWords[] = $value[1];
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

$commaList = implode(', ', $magicAnimals);
echo($commaList);

?>
