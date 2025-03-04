<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$directory = __DIR__;
$images = glob("$directory/*.{jpg,jpeg,png,gif}", GLOB_BRACE);
?>
</body>
</html>