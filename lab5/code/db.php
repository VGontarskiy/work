<?php

if (isset($_POST))
{
    $email = $_POST['email'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];

}

$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno())
{
    printf('Can not connect to mysql server. Error code: %s', mysqli_connect_error());
    exit();
}


$mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");


if($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC'))
{
    while( $row = $result->fetch_assoc())
    {
        ?>
        <tr><td><?php echo $row['category'];?></td>
            <td><?php echo $row['title'];?>
            </td><td><?php echo $row['description'];?></td>
            <td><?php echo $row['email'];?></td></tr>
        <?php
    }
    $result->close();
}
$mysqli -> close();
?>