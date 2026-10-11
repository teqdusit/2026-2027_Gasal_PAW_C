<?php
// 2.1
$fruit = array(
    "Avocado",
    "Blueberry",
    "Cherry",
);
$new_fruit = array(
    "Durian",
    "Elderberry",
    "Fig",
    "Grape",
    "Honeydew"
);

for ($i = 0; $i < count($new_fruit); $i++) {
    $fruit[] = $new_fruit[$i];
}
echo "Panjang array saat ini adalah: " . count($fruit) . "<br><br>";
$arrlength = count($fruit);
for ($x = 0; $x < $arrlength; $x++) {
    echo $fruit[$x];
    echo "<br>";
}
echo "<br>";
echo "---------------------------------" . "<br>";
// 2.2
$vegles = array(
    "Carrot",
    "Broccoli",
    "Spinach",
);
$jml_vegles = count($vegles);
for ($i = 0; $i < $jml_vegles; $i++) {
    echo $vegles[$i] . "<br>";
}
?>