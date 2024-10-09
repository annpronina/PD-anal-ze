<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <a href="blog.php">Blogs</a>
    <link rel="stylesheet" href="style.css">

    <h1>Piesakies webināram!</h1>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="name">Email:</label>
        <input type="email" name="email" id="email"><br>
        <select name="level">
            <option value="">--Please choose your level--</option>
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>

        <legend>Vau vēlies saņemt blablabla?</legend>
        <label for="info_yes">Yes</label>
        <input type="radio" id="info_yes" name="info" value="yes" />
        <label for="info_no">No</label>
        <input type="radio" id="info_no" name="info" value="no" />
        <br>
        <input type="submit" value="Send">
    </form>
</body>

    <?php
    $ary = [1, 2, 3]; //parasts indeksets masivs

    $person = [ "name" => "Janis",
                "email" => "janis@example.com",
                "level" => "Beginner"
    ]; //asociativs masivs jeb hash map
    
    $names =[
        1 => ["name" => "Janis", "email" => "janis@gmail.com", "level" => "beginner"],
        2 => ["name" => "Anna", "email" => "anna@gmail.com", "level" => "advanced"],
        3 => ["name" => "Olga", "email" => "olga@gmail.com", "level" => "intremediate", "some_info" => "[123]"],
    ]; //daudzdimensionals masivs

    foreach($names as $name){
        echo "Name:" . $name["name"] . "Email: " . $name["email"] . "Level: " . $name["level"];
    };
    ?>
<script src="app.js"></script>

</html>