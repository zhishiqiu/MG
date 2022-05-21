<?php
    require_once 'connect.php';
    $sql = "SELECT petName, petType, sex from pet";
    $result = $conn -> query($sql);
?>

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
            <div>
                <div>
                    <p> 
                        <?php if($result -> num_rows > 0){
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "Name: " . $row["petName"] . " Type " . $row["petType"] . " Sex: " . $row["sex"] . "";
                            }
                        }?> 
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>