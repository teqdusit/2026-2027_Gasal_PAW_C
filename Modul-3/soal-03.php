<?php
// 3.1
$height = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charly" => "170",
);
$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

echo "height = (";
$var = [];
foreach ($height as $key => $value) {
    $var[] = $key . " => " . $value;
}
echo implode(", ", $var) . ")" . "<br>";
$lastkey = array_key_last($height);
echo "Nilai dengan indeks terakhir: " . $height[$lastkey] . "<br>";
// 3.2
echo "---------------------------------" . "<br>";
unset($height["Barry"]);
echo "height = (";
$var = [];
foreach ($height as $key => $value) {
    $var[] = $key . " => " . $value;
}
echo implode(", ", $var) . ")" . "<br>";
$lastkeyUnset = array_key_last($height);
echo "Nilai dengan indeks terakhir setelah dihapus: " . $height[$lastkeyUnset] . "<br>";
?>