<<<<<<< HEAD
<?php
$tailleTab = readline("Entrer la taille du tableau : ");

for ($i = 0; $i < $tailleTab; $i++) {
    $tab1[$i] = readline("Entrer votre valeur : ");
}
echo "\nListe des valeurs du tableau : ";
for ($i = 0; $i < $tailleTab; $i++) {
    echo $tab1[$i] . " ";
}
$max = $tab1[0];
$position = 0;
for ($i = 0; $i < $tailleTab; $i++) {
    if ($tab1[$i] > $max) {
        $max = $tab1[$i];
        $position = $i;
    }
}
echo "\nLa plus grande valeur est : " . $max;
echo "\nSa position dans le tableau est : " . $position;
=======
<?php
$tailleTab = readline("Entrer la taille du tableau : ");

for ($i = 0; $i < $tailleTab; $i++) {
    $tab1[$i] = readline("Entrer votre valeur : ");
}
echo "\nListe des valeurs du tableau : ";
for ($i = 0; $i < $tailleTab; $i++) {
    echo $tab1[$i] . " ";
}
$max = $tab1[0];
$position = 0;
for ($i = 0; $i < $tailleTab; $i++) {
    if ($tab1[$i] > $max) {
        $max = $tab1[$i];
        $position = $i;
    }
}
echo "\nLa plus grande valeur est : " . $max;
echo "\nSa position dans le tableau est : " . $position;
>>>>>>> 4dd7b61 (maj)
