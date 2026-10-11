<?php
// 1. array_push
$arr_push = ["A"];
echo "Array awal: (\"A\")<br>";
array_push($arr_push, "B");
echo "Hasil array_push: " . implode(" ", $arr_push) . "<br><br>";

// 2. array_merge
$arr1 = ["A", "B"];
$arr2 = ["C"];
echo "Array awal: (\"A\", \"B\") digabung dengan (\"C\")<br>";
$result_merge = array_merge($arr1, $arr2);
echo "Hasil array_merge: " . implode(" ", $result_merge) . "<br><br>";

// 3. array_values
$arr_assoc = ["x" => 1, "y" => 2];
echo "Array awal: (\"x\" => 1, \"y\" => 2)<br>";
$result_values = array_values($arr_assoc);
echo "Hasil array_values: " . implode(" ", $result_values) . "<br><br>";

// 4. array_search
$arr_search = ["A", "B", "C"];
echo "Mencari \"B\" pada array: (\"A\", \"B\", \"C\")<br>";
$posisi = array_search("B", $arr_search);
echo "Hasil array_search: " . $posisi . "<br><br>";

// 5. array_filter
$arr_filter = [0, 1, false, 2, "", 3, "array"];
echo "Array awal: (0, 1, false, 2, \"\", 3, \"array\")<br>";
$result_filter = array_filter($arr_filter);
echo "Hasil array_filter: " . implode(" ", $result_filter) . "<br><br>";

// 6. Sorting Array Terindeks (sort & rsort)
$arr_num = [3, 1, 2];
echo "Array awal: (3, 1, 2)<br>";

sort($arr_num);
echo "Hasil sort: " . implode(" ", $arr_num) . "<br>";

rsort($arr_num);
echo "Hasil rsort: " . implode(" ", $arr_num) . "<br><br>";

// 7. Sorting Array Asosiatif (asort, ksort, arsort, krsort)
$age = ["Peter" => 35, "Ben" => 37, "Joe" => 43];
echo "Array awal: (\"Peter\"=>35, \"Ben\"=>37, \"Joe\"=>43)<br>";

// Fungsi bantuan untuk memformat tampilan array asosiatif
function format_assoc($arr)
{
    $formatted = [];
    foreach ($arr as $key => $val) {
        $formatted[] = "$key=> $val";
    }
    return implode(", ", $formatted);
}

$asort_arr = $age;
asort($asort_arr);
echo "Hasil asort: " . format_assoc($asort_arr) . "<br>";

$ksort_arr = $age;
ksort($ksort_arr);
echo "Hasil ksort: " . format_assoc($ksort_arr) . "<br>";

$arsort_arr = $age;
arsort($arsort_arr);
echo "Hasil arsort: " . format_assoc($arsort_arr) . "<br>";

$krsort_arr = $age;
krsort($krsort_arr);
echo "Hasil krsort: " . format_assoc($krsort_arr) . "<br>";
?>