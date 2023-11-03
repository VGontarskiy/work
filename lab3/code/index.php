<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
</head>
<body>
    <div id = "form">

        <form action = "save.php" method = "post">
        <label for = "email"> Email</label>
        <input type = "email" name = "email" required>
        <label for = "category"> Category</label>
        <select name = "category" required>
            <?php
                $folders = scandir("/code/categories/");

                foreach ($folders as $folder) 
                {
                    if ($folder != "." && $folder != "..") 
                    {
                        echo "<option value=\"$folder\">$folder</option>";
                    }
                }
        
            ?>
        </select>

        <label for ="title"> Title</label>
        <input type = "text" name = "title" required>

        <label for ="description"> Description</label>
        <textarea rows = "9" name ="description"></textarea>

        <input type = "submit" value ="save">
        </form>
    </div>
    <div id = "table">
        <table>
            <thread>
                <th> Category</th>
                <th> Title</th>
                <th> Description</th>
            </thread>
            <tbody>
                <tr>
                    <?php
                $categories = scandir("/code/categories/");
                foreach ($categories as $category) 
                {
                    if ($category != "." && $category != "..") 
                    {
                        $announcements = scandir("/code/categories/{$category}");
                        foreach ($announcements as $announcement) 
                        {
                            if ($announcement != "." && $announcement != "..") 
                            {
                                $title = pathinfo($announcement, PATHINFO_FILENAME);
                                $text = file_get_contents("/code/categories/{$category}/{$announcement}");
                                echo "<tr><td>$category</td><td>$title</td><td>$text</td></tr>";
                            }
                        }
                    }
                }
                ?>
                </tr>
            </tbody>
         </table>

</body>
</html>