<?php
$ceu = array(
    "Italy" => "Rome",
    "Luxembourg" => "Luxembourg",
    "Belgium" => "Brussels",
    "Denmark" => "Copenhagen",
    "Finland" => "Helsinki",
    "France" => "Paris",
    "Slovakia" => "Bratislava",
    "Slovenia" => "Ljubljana",
    "Germany" => "Berlin",
    "Greece" => "Athens",
    "Ireland" => "Dublin",
    "Netherlands" => "Amsterdam",
    "Portugal" => "Lisbon",
    "Spain" => "Madrid",
    "Sweden" => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus" => "Nicosia",
    "Lithuania" => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia" => "Tallin",
    "Latvia" => "Riga",
    "Malta" => "Valetta",
    "Hungary" => "Budapest",
    "Austria" => "Vienna",
    "Poland" => "Warsaw"
);

// Sort the array by capital names
asort($ceu);

foreach ($ceu as $country => $capital) {
    echo "The capital of $country is $capital.<br>";
}
?>

// output is :
The capital of Netherlands is Amsterdam.
The capital of Greece is Athens.
The capital of Germany is Berlin.
The capital of Slovakia is Bratislava.
The capital of Belgium is Brussels.
The capital of Hungary is Budapest.
The capital of Denmark is Copenhagen.
The capital of Ireland is Dublin.
The capital of Finland is Helsinki.
The capital of Portugal is Lisbon.
The capital of Slovenia is Ljubljana.
The capital of United Kingdom is London.
The capital of Luxembourg is Luxembourg.
The capital of Spain is Madrid.
The capital of Cyprus is Nicosia.
The capital of France is Paris.
The capital of Czech Republic is Prague.
The capital of Latvia is Riga.
The capital of Italy is Rome.
The capital of Sweden is Stockholm.
The capital of Estonia is Tallin.
The capital of Malta is Valetta.
The capital of Austria is Vienna.
The capital of Lithuania is Vilnius.
The capital of Poland is Warsaw.