<?php
ob_start();
include('../includes/dbconnection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM tbloutwoodlist where id=".$_GET['id'];
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>

<head>
	<title>Update Vehicle</title>
	<link href="../assets/css/outwood.css" rel="stylesheet" type="text/css"> </head>

<body>
	<?php
	function decodeString($str) {
        $str = str_replace('&!@#&', "'", $str);
        $str = str_replace('*!@#*', '"', $str);
        return $str;
      }
      if (!empty($result) && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

			$Pic1 = '.' . substr($row["Pic1"], (strripos($row["Pic1"], '/upload/')), strlen($row["Pic1"]) );
			$Pic2 = '.' . substr($row["Pic2"], (strripos($row["Pic2"], '/upload/')), strlen($row["Pic2"]) );
			$Pic3 = '.' . substr($row["Pic3"], (strripos($row["Pic3"], '/upload/')), strlen($row["Pic3"]) );
			$Pic4 = '.' . substr($row["Pic4"], (strripos($row["Pic4"], '/upload/')), strlen($row["Pic4"]) );

    ?>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="formReplace" enctype="multipart/form-data">
		<div align="center">
			<h2 style="text-align: center">Update the Vehicle's Details</h2>
			<table width="500" border="0" align="center" cellpadding="2" cellspacing="2">
				<tr bgcolor="#CCCCCC">
					<td width="145" bgcolor="#CCCCCC" class="tableleft">ID</td>
					<td width="341" bgcolor="#FFFFFF" class="tableright">
						<input name="ID" type="text" readonly="true" value='<?php echo $row["id"]; ?>'> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Marque</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Marque" type="text" value='<?php echo decodeString($row["Marque"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Category</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Category" type="text" value='<?php echo $row["Category"]; ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Model</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Model" type="text" value='<?php echo decodeString($row["Model"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Year</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="VYear" type="text" value='<?php echo decodeString($row["VYear"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Miles</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Miles" type="text" value='<?php echo decodeString($row["Miles"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description1</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description1" type="text" value='<?php echo decodeString($row["Description1"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description2</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description2" type="text" value='<?php echo decodeString($row["Description2"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description3</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description3" type="text" value='<?php echo decodeString($row["Description3"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description4</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description4" type="text" value='<?php echo decodeString($row["Description4"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description5</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description5" type="text" value='<?php echo decodeString($row["Description5"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description6</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description6" type="text" value='<?php echo decodeString($row["Description6"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description7</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description7" type="text" value='<?php echo decodeString($row["Description7"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description8</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description8" type="text" value='<?php echo decodeString($row["Description8"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description9</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description9" type="text" value='<?php echo decodeString($row["Description9"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description10</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description10" type="text" value='<?php echo decodeString($row["Description10"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description11</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description11" type="text" value='<?php echo decodeString($row["Description11"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description12</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description12" type="text" value='<?php echo decodeString($row["Description12"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description13</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description13" type="text" value='<?php echo decodeString($row["Description13"]); ?>' size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Price</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Price" type="text" value='<?php echo decodeString($row["Price"]); ?>' size="32"> </td>
				</tr>
				<tr>
					<td bgcolor="#CCCCCC" class="tableleft">Featured</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Sold" type="text" value='<?php echo $row["Sold"]; ?>' size="32"> </td>
				</tr>
				<tbody>
					<tr>
						<td bgcolor="#CCCCCC" class="tableleft">Pic1</td>
						<td bgcolor="#FFFFFF" class="tableright">
							<input type="text" name="Pic1link" value="<?php echo $row["Pic1"]; ?>" hidden>
							<input type="text" name="Pic1" value="<?php echo $Pic1; ?>" hidden>
							<img src='<?php echo $Pic1; ?>' width="350" height="252" alt="" /> 
							<input name="uPic1" type="file" id="uPic1">
						</td>
					</tr>
					<tr>
						<td bgcolor="#CCCCCC" class="tableleft">Pic2</td>
						<td bgcolor="#FFFFFF" class="tableright">
							<input type="text" name="Pic2" value="<?php echo $Pic2; ?>" hidden>
							<input type="text" name="Pic2link" value="<?php echo $row["Pic2"]; ?>" hidden>
							<img src='<?php echo $Pic2; ?>' width="350" height="252" alt="" />
							<input name="uPic2" type="file" id="uPic2"> </td>
					</tr>
					<tr>
						<td bgcolor="#CCCCCC" class="tableleft">Pic3</td>
						<td bgcolor="#FFFFFF" class="tableright">
							<input type="text" name="Pic3" value="<?php echo $Pic3; ?>" hidden>
							<input type="text" name="Pic3link" value="<?php echo $row["Pic3"]; ?>" hidden>
							<img src='<?php echo $Pic3; ?>' width="350" height="252" alt="" /> 
							<input name="uPic3" type="file" id="uPic3">
						</td>
					</tr>
					<tr>
						<td bgcolor="#CCCCCC" class="tableleft">Pic4</td>
						<td bgcolor="#FFFFFF" class="tableright">
							<input type="text" name="Pic4" value="<?php echo $Pic4; ?>" hidden>
							<input type="text" name="Pic4link" value="<?php echo $row["Pic4"]; ?>" hidden>
							<img src='<?php echo $Pic4; ?>' width="350" height="252" alt="" /> 
							<input name="uPic4" type="file" id="uPic4">
						</td>
					</tr>
					<tr>
						<td bgcolor="#CCCCCC" class="tableleft">Active</td>
						<td bgcolor="#FFFFFF" class="tableright">
							<input name="VActive" type="text" value="initial"> </td>
					</tr>
				</tbody>
				<tr>
					<td align="right" valign="middle" nowrap></td>
					<td>
						<input type="submit" value="Update Record" width="300"> </td>
				</tr>
			</table>
			
		</div>
	</form>

	<?php
			}
		}
		function encodeString($str) {
			$str = str_replace("'", '&!@#&', $str);
			$str = str_replace('"', '*!@#*', $str);
			return $str;
		}
		if ($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$ID = $_POST['ID'];
	        $Marque = $_POST['Marque'];
	        $Category = $_POST['Category'];
	        $Model = $_POST['Model'];
	        $VYear = $_POST['VYear'];
	        $Miles = $_POST['Miles'];
	        $Description1 = $_POST['Description1'];
	        $Description2 = $_POST['Description2'];
	        $Description3 = $_POST['Description3'];
	        $Description4 = $_POST['Description4'];
	        $Description5 = $_POST['Description5'];
	        $Description6 = $_POST['Description6'];
	        $Description7 = $_POST['Description7'];
	        $Description8 = $_POST['Description8'];
	        $Description9 = $_POST['Description9'];
	        $Description10 = $_POST['Description10'];
	        $Description11 = $_POST['Description11'];
	        $Description12 = $_POST['Description12'];
	        $Description13 = $_POST['Description13'];
	        $Price = $_POST['Price'];
	        $Sold = $_POST['Sold'];

	        $Marque = encodeString($Marque);
	        $Model = encodeString($Model);
	        $VYear = encodeString($VYear);
	        
	        $Miles = encodeString($Miles);
	        $Description1 = encodeString($Description1);
	        $Description2 = encodeString($Description2);
	        $Description3 = encodeString($Description3);
	        $Description4 = encodeString($Description4);
	        $Description5 = encodeString($Description5);
	        $Description6 = encodeString($Description6);
	        $Description7 = encodeString($Description7);
	        $Description8 = encodeString($Description8);
	        $Description9 = encodeString($Description9);
	        $Description10 = encodeString($Description10);
	        $Description11 = encodeString($Description11);
	        $Description12 = encodeString($Description12);
	        $Description13 = encodeString($Description13);
	        $Sold = encodeString($Sold);
	        $Price = encodeString($Price);

	        // root file path getting
        $roottemppath = str_split(dirname(__FILE__));
        $rootPath = '';
        foreach ($roottemppath as $value) {
          $tt = "'".$value."'";
          if ($tt === "'\'") {
            $value = '/';
          }
          $rootPath .= $value;
        }
        $target_dir = $rootPath."/upload/";
        $currentdatetime = date("Ymdhis");
        $uPic1 = ''; $uPic2 = ''; $uPic3 = ''; $uPic4 = ''; 
        $uPic1 = basename($_FILES["uPic1"]["name"]);
        $Pic1 = $_POST['Pic1'];
        $Pic2 = $_POST['Pic2'];
        $Pic3 = $_POST['Pic3'];
        $Pic4 = $_POST['Pic4'];
        if (!empty($uPic1)) {
        	$uPic1FileType = strtolower(pathinfo($uPic1, PATHINFO_EXTENSION));
            $uPic1 = $target_dir . $currentdatetime . "_1.".$uPic1FileType;
            unlink($Pic1);
        	move_uploaded_file($_FILES["uPic1"]["tmp_name"], $uPic1);
        }
        elseif (empty($uPic1)) {
         	$uPic1 = $_POST['Pic1link'];
        }
        $uPic2 = basename($_FILES["uPic2"]["name"]);
        if (!empty($uPic2) && $uPic2 != "") {
        	$uPic2FileType = strtolower(pathinfo($uPic2, PATHINFO_EXTENSION));
            $uPic2 = $target_dir . $currentdatetime . "_2.".$uPic2FileType;
            unlink($Pic2);
        	move_uploaded_file($_FILES["uPic2"]["tmp_name"], $uPic2);
        }
        elseif (empty($uPic2)) {
         	$uPic2 = $_POST['Pic2link'];
        }
        $uPic3 = basename($_FILES["uPic3"]["name"]);
        if (!empty($uPic3) && $uPic3 != "") {
        	$uPic3FileType = strtolower(pathinfo($uPic3, PATHINFO_EXTENSION));
            $uPic3 = $target_dir . $currentdatetime . "_3.".$uPic3FileType;
            unlink($Pic3);
        	move_uploaded_file($_FILES["uPic3"]["tmp_name"], $uPic3);
        }
        elseif (empty($uPic3)) {
         	$uPic3 = $_POST['Pic3link'];
        }
        $uPic4 = basename($_FILES["uPic4"]["name"]);
        if (!empty($uPic4) && $uPic4 != "") {
        	$uPic4FileType = strtolower(pathinfo($uPic4, PATHINFO_EXTENSION));
            $uPic4 = $target_dir . $currentdatetime . "_4.".$uPic4FileType;
            unlink($Pic4);
        	move_uploaded_file($_FILES["uPic4"]["tmp_name"], $uPic4);
        }
        elseif (empty($uPic4)) {
         	$uPic4 = $_POST['Pic4link'];;
        }
        	$VActive = $_POST['VActive'];
	        $sql = "UPDATE `tbloutwoodlist` SET `Marque`='$Marque',`Category`='$Category',`Model`='$Model',`VYear`='$VYear',`Miles`='$Miles',`Description1`='$Description1',`Description2`='$Description2',`Description3`='$Description3',`Description4`='$Description4',`Description5`='$Description5',`Description6`='$Description6',`Description7`='$Description7',`Description8`='$Description8',`Description9`='$Description9',`Description10`='$Description10',`Description11`='$Description11',`Description12`='$Description12',`Description13`='$Description13',`Price`='$Price',`Sold`='$Sold',`Pic1`='$uPic1',`Pic2`='$uPic2',`Pic3`='$uPic3',`Pic4`='$uPic4',`VActive`='$VActive' WHERE id=$ID";
	        
	        if ($conn->query($sql) === TRUE) {
			    header("Location: ./index.php");
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
		}
		$conn->close();
	?>
</body>

</html>