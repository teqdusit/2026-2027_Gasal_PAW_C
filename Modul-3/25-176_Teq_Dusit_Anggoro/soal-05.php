<?php
$student = array(
    ["Alex", "220401", "0812345678"],
    ["Brianca", "220402", "0812345687"],
    ["Candice", "220403", "0812345665"]
);
echo "Data Awal: <br>";
echo "Student = (<br>";
foreach ($student as $s) {
    echo "(" . $s[0] . " - " . $s[1] . " - " . $s[2] . ")" . "<br>";
}
echo ")<br><br>";
array_push(
    $student,
    ["Daniel", "220404", "0812345611"],
    ["Elena", "220405", "0812345622"],
    ["Fiona", "220406", "0812345633"],
    ["Gabe", "220407", "0812345644"],
    ["Hannah", "220408", "0812345655"]
);
echo "Data Setelah Ditambah 5 Data lain: <br>";
echo "Student = (<br>";
foreach ($student as $s) {
    echo "(" . $s[0] . " - " . $s[1] . " - " . $s[2] . ")" . "<br>";
}
echo ")<br><br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menampilkan table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 30%;
        }

        th,
        td {
            border: 1px solid #090909;
            padding: 5px;
            text-align: left;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Name</th>
            <th>NIM</th>
            <th>Mobile</th>
        </tr>
        <?php foreach ($student as $s) { ?>
            <tr>
                <td><?php echo $s[0]; ?></td>
                <td><?php echo $s[1]; ?></td>
                <td><?php echo $s[2]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>