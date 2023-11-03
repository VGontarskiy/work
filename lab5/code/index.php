<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <style>
        .my_select{
            width: 100px;
            height: 30px;
        }
    </style>
</head>
<body>
<form action="db.php" method="post">
    <label>Email: <input type="email" name="email" required></label>
    <label>Title: <input type="text" name="title" required></label>
    <label>Description: <textarea rows="10" name="description" required></textarea></label>
    <label>Category <select name="category" required>
            <?php
            $categories = array("car", "boat", "helicopter");
            foreach ($categories as $category) {
                echo "<option value=\"$category\">$category</option>";
            }
            ?>
        </select>
    </label>
    <input type="submit" value="Save" class="my_button"><br>
    <br>
</form>
</body>
</html>