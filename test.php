<?php

$wdClass = array(

    array(
        "name" => "kst",
        "age" => 18,
        "ph" => "09147852359",
        "mark" => 60,
        "money" => 564,
        "major" => "Myanmar",
    ),
    array(
        "name" => "kyaw kyaw",
        "age" => 21,
        "ph" => "09445451515",
        "mark" => 90,
        "money" => 123,
        "major" => "English",


    ),
    array(
        "name" => "maw maw",
        "age" => 24,
        "ph" => "09856912545",
        "mark" => 45,
        "money" => 125,
        "major" => "Physic",


    ),
    array(
        "name" => "aung aung",
        "age" => 17,
        "ph" => "09548411565",
        "mark" => 35,
        "money" => 178,
        "major" => "Math",
    ),

);
$addIdArr = end($wdClass);
$addIdArr["id"] = 5;

$keysArr = array_keys($wdClass[0]);
array_unshift($keysArr,'id');

function mark($mark){
    if ($mark >= 80){
        return "Gone Htoo";
    }else if ($mark >= 40){
        return "Aung Tal";
    }else{
        return "Kya Tal";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table,tr,th,td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px 15px;
        }
    </style>
</head>
<body>

<table>
    <thead>
    <tr>
        <?php foreach($keysArr as $k){ ?>
            <th><?php echo ucfirst($k) ?></th>
        <?php } ?>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($wdClass as $k => $w){
            $w['id'] = $k+1;
            ?>
            <tr>
                <?php foreach ($keysArr as $k){ ?>
                    <td>
                        <?php
                        if ($k == 'mark'){
                            echo mark($w[$k]);
                        }else{
                            echo $w[$k];
                        }
                        ?>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </tbody>
</table>

</body>
</html>