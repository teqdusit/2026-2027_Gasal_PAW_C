<?php
$fruit = [
    "Avocado",
    "Blueberry",
    "Cherry",
    "Durian",
    "Elderberry",
    "Fig",
    "Grape",
    "Honeydew"
];
// 1.1
echo "Fruit = (" . $fruit[0] . ", " . $fruit[1] . ", " . $fruit[2] . ", " . $fruit[3] . ", " . $fruit[4] . ", " . $fruit[5] . ", " . $fruit[6] . ", " . $fruit[7] . ")" . "<br>";
echo "Nilai dengan indeks tertinggi:" . $fruit[7] . "<br>";
echo "---------------------------------" . "<br>";
// 1.2
unset($fruit[1]);
echo "Data Blueberry dihapus <br>";
echo "Fruit = (" . $fruit[0] . ", " . $fruit[2] . ", " . $fruit[3] . ", " . $fruit[4] . ", " . $fruit[5] . ", " . $fruit[6] . ", " . $fruit[7] . ")" . "<br>";
echo "Nilai dengan indeks tertinggi:" . $fruit[7] . "<br>";
?>