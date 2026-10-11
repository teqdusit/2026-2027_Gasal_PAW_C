<?php
// 4.1
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
echo implode(", ", $var) . ")" . "<br><br>";
for ($x = 0; $x < count($var); $x++) {
    echo $var[$x] . "<br>";
}
echo "---------------------------------" . "<br>";
// 4.2

$weight = ["Andy" => 70, "Barry" => 65, "Charly" => 75];
$panjang_weight = count($weight);

for ($i = 0; $i < $panjang_weight; $i++) {
    $key = array_keys($weight)[$i];
    $value = $weight[$key];
    echo "$key is $value" . " kg<br>";
}
?>