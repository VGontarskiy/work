<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $category = $_POST['category'] ?? '';

    $mysqli = new mysqli('db', 'root', 'qwerty', 'w');

    if (mysqli_connect_errno()) {
        printf('Can not connect to MySQL server. Error code: %s', mysqli_connect_error());
        exit();
    }

    $email = $mysqli->real_escape_string($email);
    $title = $mysqli->real_escape_string($title);
    $description = $mysqli->real_escape_string($description);
    $category = $mysqli->real_escape_string($category);

    $query = "INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')";
    $mysqli->query($query);

    $result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC');
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['category']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <?php
        }
        $result->close();
    }

    $mysqli->close();
}
?>