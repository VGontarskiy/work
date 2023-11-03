<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <style>
        .my-select {
            width: 100px;
            height: 30px;
        }
    </style>
</head>
<body>
    <form action="db.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="title">Title:</label>
        <input type="text" name="title" required><br>
        
        <label for="description">Description:</label>
        <textarea name="description" rows="10" required></textarea><br>
        
        <label for="category">Category:</label>
        <select name="category" required class="my-select">
            <?php
            $categories = array("car", "boat", "helicopter");
            foreach ($categories as $category) {
                echo "<option value=\"$category\">$category</option>";
            }
            ?>
        </select><br>
        
        <input type="submit" value="Save" class="my-button"><br>
        <br>
    </form>
</body>
</html>