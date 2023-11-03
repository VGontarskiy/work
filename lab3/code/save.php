<?php

if(false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
{
    header('Location:/');
    exit();
}


$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$file_path = "categories/{$category}/{$title}.txt";
if(false === file_put_contents($file_path,$description))
{
    throw new Exception("Smth wrong!");
}

header('Location:/');
exit();