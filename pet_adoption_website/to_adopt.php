<?php 
    if(!isset($_COOKIE['username'])){
        header("refresh:0;url=loginpage.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adoption</title>
</head>
<body>
    <div>
        <form action="php/adopt.php" method="post">
            <table>
                <tr>
                    <td>name : </td>
                    <td><input type="text" name="adoption_name"></td>
                </tr>
                <tr>
                    <td>age : </td>
                    <td><input type="text" name="adoption_age"></td>
                </tr>
                <tr>
                    <td>tel : </td>
                    <td><input type="text" name="adoption_tel"></td>
                </tr>
                <tr>
                    <td>place : </td>
                    <td><input type="text" name="adoption_place"></td>
                </tr>
            </table>
            <div>
				<input class="button" type="submit" value="submit">
			</div>
        </form>
    </div>
</body>
</html>