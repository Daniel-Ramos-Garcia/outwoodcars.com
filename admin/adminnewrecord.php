<?php
ob_start();

?>
<!DOCTYPE html>
<html>
<?php include('../includes/dbconnection.php'); ?>
<head>
	<title>New Vehicle</title>
	<link href="../assets/css/outwood.css" rel="stylesheet" type="text/css"> 

</head>

<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="form1" enctype="multipart/form-data">
		<div align="center">
			<h2 style="text-align: center">Enter the New Vehicle's Details</h2>
			<table width="500" border="0" align="center" cellpadding="2" cellspacing="2">
				<!-- <tr bgcolor="#CCCCCC">
					<td width="145" bgcolor="#CCCCCC" class="tableleft">ID</td>
					<td width="341" bgcolor="#FFFFFF" class="tableright">
						<input name="ID" type="text" value=""> </td>
				</tr> -->
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Marque</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Marque" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Category</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<select name="Category" id="Category">
							<option value="5" selected>Specialist</option>
							<option value="6">Classics</option>
						</select>
						</span>
					</td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Model</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Model" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Year</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="VYear" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Miles</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Miles" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description1</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description1" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description2</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description2" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description3</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description3" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description4</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description4" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description5</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description5" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description6</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description6" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description7</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description7" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description8</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description8" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description9</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description9" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description10</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description10" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description11</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description11" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description12</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description12" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Description13</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Description13" type="text" value="" size="32"> </td>
				</tr>
				<tr bgcolor="#CCCCCC">
					<td bgcolor="#CCCCCC" class="tableleft">Price</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<input name="Price" type="text" value="" size="32"> </td>
				</tr>
				<tr>
					<td bgcolor="#CCCCCC" class="tableleft">Featured</td>
					<td bgcolor="#FFFFFF" class="tableright">
						<select name="Sold" id="Sold">
							<option value="0" selected>Standard Listing</option>
							<option value="1">Featured Listing</option>
						</select>
					</td>
				</tr>
				<tbody >
					<tr>
						<td bgcolor="#CCCCCC" class="tableleft">Pic1</td>
						<td bgcolor="#FFFFFF" class="tableright">
							<input name="Pic1" type="file" id="Pic1"> </td>
					</tr>
					<tr>
						<td bgcolor="#CCCCCC" class="tableleft">Pic2</td>
						<td bgcolor="#FFFFFF" class="tableright">
							<input name="Pic2" type="file" id="Pic2"> </td>
					</tr>
					<tr>
						<td bgcolor="#CCCCCC" class="tableleft">Pic3</td>
						<td bgcolor="#FFFFFF" class="tableright">
							<input name="Pic3" type="file" id="Pic3"> </td>
					</tr>
					<tr>
						<td bgcolor="#CCCCCC" class="tableleft">Pic4</td>
						<td bgcolor="#FFFFFF" class="tableright">
							<input name="Pic4" type="file" id="Pic4"> </td>
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
						<input type="submit" value="Insert record" width="300"> </td>
				</tr>
			</table>
			<input type="hidden" name="MM_insert" value="form1">
		</div>
	</form>
</body>
<?php
	
	function encodeString($str) {
		$str = str_replace("'", '&!@#&', $str);
		$str = str_replace('"', '*!@#*', $str);
		return $str;
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// $ID = $_POST['ID'];
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
        $Pic1 = ''; $Pic2 = ''; $Pic3 = ''; $Pic4 = ''; 
        $Pic1 = basename($_FILES["Pic1"]["name"]);
        if (!empty($Pic1)) {
        	$Pic1FileType = strtolower(pathinfo($Pic1, PATHINFO_EXTENSION));
            $Pic1 = $target_dir . $currentdatetime . "_1.".$Pic1FileType;
        	move_uploaded_file($_FILES["Pic1"]["tmp_name"], $Pic1);
        }
        $Pic2 = basename($_FILES["Pic2"]["name"]);
        if (!empty($Pic2)) {
        	$Pic2FileType = strtolower(pathinfo($Pic2, PATHINFO_EXTENSION));
            $Pic2 = $target_dir . $currentdatetime . "_2.".$Pic2FileType;
        	move_uploaded_file($_FILES["Pic2"]["tmp_name"], $Pic2);
        }
        $Pic3 = basename($_FILES["Pic3"]["name"]);
        if (!empty($Pic3)) {
        	$Pic3FileType = strtolower(pathinfo($Pic3, PATHINFO_EXTENSION));
            $Pic3 = $target_dir . $currentdatetime . "_3.".$Pic3FileType;
        	move_uploaded_file($_FILES["Pic3"]["tmp_name"], $Pic3);
        }
        $Pic4 = basename($_FILES["Pic4"]["name"]);
        if (!empty($Pic4)) {
        	$Pic4FileType = strtolower(pathinfo($Pic4, PATHINFO_EXTENSION));
            $Pic4 = $target_dir . $currentdatetime . "_4.".$Pic4FileType;
        	move_uploaded_file($_FILES["Pic4"]["tmp_name"], $Pic4);
        }

        $sql = "INSERT INTO tbloutwoodlist (`Marque`,`Category`,`Model`,`VYear`,`Miles`,`Description1`,`Description2`,`Description3`,`Description4`,`Description5`,`Description6`,`Description7`,`Description8`,`Description9`,`Description10`,`Description11`,`Description12`,`Description13`,`Price`,`Sold`,`Pic1`,`Pic2`,`Pic3`,`Pic4`,`VActive`)
			VALUES ('$Marque','$Category','$Model','$VYear','$Miles','$Description1','$Description2','$Description3','$Description4','$Description5','$Description6','$Description7','$Description8','$Description9','$Description10','$Description11','$Description12','$Description13','$Price','$Sold','$Pic1','$Pic2','$Pic3','$Pic4','initial')";
		if ($conn->query($sql) === TRUE) {
		    header("Location: ./index.php");
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

			
			
	}
$conn->close();
?>
</html>
