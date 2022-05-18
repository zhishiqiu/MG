

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption</title>
</head>
<body>
    <div>
        <div>
            <?php

                require_once 'connect.php';
                $sql = "SELECT petName, petType, sex from pet where id = 1";
                $result = $conn -> query($sql);
                if($result -> num_rows > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "Name: " . $row["petName"] . " Type " . $row["petType"] . " Sex: " . $row["sex"] . "";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>