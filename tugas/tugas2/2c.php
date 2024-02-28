<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
</head>

<style>

    .box {
        border: 1px solid black;
        width:80px;
        height: 80px;
        line-height: 80px;
        text-align: center;
        background-color: cornflowerblue;
    }

    .wrap {
        display: flex;
    }

</style>
<body>

<?php 

for ($no = 10; $no >= 1; $no-- ){
    echo "<div class=\"wrap\">";
    for($ni= 1; $ni <= $no; $ni++ ) {
        echo "<div class=\"box\"> $ni </div>";
    }
    echo "</div>";
}
    
?>
</body>
</html>