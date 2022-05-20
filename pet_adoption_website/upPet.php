<?php 
if(!isset($_COOKIE['username'])){
    header("refresh:0;url=login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>up pet</title>
</head>
<body>
<div class="content">
			<div class="cont-title">
				<h2>上架宠物</h2>
			</div>
			<div class="cont-inner">
			<form action="php/uploadPet.php" method="post" enctype="multipart/form-data">
				<table>
					<tr class="inner-main">
						<td>picture：</td>
						<td><input type="file" name="pet-submit"></td>
					</tr>
					<tr class="inner-main">
						<td>type：</td>
						<td><input type="text" name="petType"/></td>
					</tr>
                    <tr class="inner-main">
						<td>pet name：</td>
						<td><input type="text" name="petName"/></td>
					</tr>
					<tr class="inner-main">
						<td>sex：</td>
						<td><input type="text" name="sex"/></td>
					</tr>
					<tr class="inner-main">
						<td>age：</td>
						<td><input type="text" name="age"/></td>
					</tr>
                    <tr class="inner-main">
						<td>place：</td>
						<td><input type="text" name="place"/></td>
					</tr>
					<tr class="inner-main">
						<td>是否注射疫苗：</td>
						<td><input type="text" name="vacc"/></td>
					</tr>
					<tr class="inner-main">
						<td>tel：</td>
						<td><input type="text" name="tel"/></td>
					</tr>
					<tr class="inner-main">
						<td>remark：</td>
						<td><input type="text" name="remark"/></td>
					</tr>
				</table>
				<div class="cont-btn">
					<input class="button" type="submit" value="submit">
				</div>
				</form>
		</div>
	</div>
</body>
</html>