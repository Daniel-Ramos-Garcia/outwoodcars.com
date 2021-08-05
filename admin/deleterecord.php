<?php
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<?php
include('../includes/dbconnection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM tbloutwoodlist where id=".$_GET['id'];
$result = $conn->query($sql);


?>
	<title>Delete Record</title>
	<link href="../assets/css/outwood.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php
      if (!empty($result) && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $Pic1 = '.' . substr($row["Pic1"], (strripos($row["Pic1"], '/upload/')), strlen($row["Pic1"]) );
          $Pic2 = '.' . substr($row["Pic2"], (strripos($row["Pic2"], '/upload/')), strlen($row["Pic2"]) );
          $Pic3 = '.' . substr($row["Pic3"], (strripos($row["Pic3"], '/upload/')), strlen($row["Pic3"]) );
          $Pic4 = '.' . substr($row["Pic4"], (strripos($row["Pic4"], '/upload/')), strlen($row["Pic4"]) );

    ?>
<div align="center" style="width:500px; margin-left:auto; margin-right:auto;"><h2>Delete Record</h2><br>
<table width="500" border="0" align="center" cellpadding="2" cellspacing="2">
      <tr bgcolor="#CCCCCC">
      <td width="145" bgcolor="#CCCCCC" class="tableleft">ID</td>
      <td width="341" bgcolor="#FFFFFF" class="tableright"><?php echo $row["id"]; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Marque</td>
      <td bgcolor="#FFFFFF" class="tableright"><?php echo $row["Marque"]; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Category</td>
      <td bgcolor="#FFFFFF" class="tableright"><?php echo $row["Category"]; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Model</td>
      <td bgcolor="#FFFFFF" class="tableright"><?php echo $row["Model"]; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Year</td>
      <td bgcolor="#FFFFFF" class="tableright"><?php echo $row["VYear"]; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Miles</td>
      <td bgcolor="#FFFFFF" class="tableright"><?php echo $row["Miles"]; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC" valign="top">
      <td bgcolor="#CCCCCC" class="tableleft">Description</td>
      <td bgcolor="#FFFFFF" class="tableright">
      		  <?php echo $row["Description1"]; ?><br>
            <?php echo $row["Description2"]; ?><br>
            <?php echo $row["Description3"]; ?><br>
            <?php echo $row["Description4"]; ?><br>
            <?php echo $row["Description5"]; ?><br>
            <?php echo $row["Description6"]; ?><br>
            <?php echo $row["Description7"]; ?><br>
            <?php echo $row["Description8"]; ?><br>
            <?php echo $row["Description9"]; ?><br>
            <?php echo $row["Description10"]; ?><br>
            <?php echo $row["Description11"]; ?><br>
            <?php echo $row["Description12"]; ?><br>
            <?php echo $row["Description13"]; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Price</td>
      <td bgcolor="#FFFFFF" class="tableright"><?php echo $row["Price"]; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Sold</td>
      <td bgcolor="#FFFFFF" class="tableright"><?php echo $row["Sold"]; ?></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Picture 1</td>
      <td bgcolor="#FFFFFF" class="tableright">
        
        <img src='<?php echo $Pic1; ?>' width="350" height="252" alt="" /></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Picture 2</td>
      <td bgcolor="#FFFFFF" class="tableright">
        
        <img src='<?php echo $Pic2; ?>' width="350" height="252" alt="" /></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Picture 3</td>
      <td bgcolor="#FFFFFF" class="tableright">
        
        <img src='<?php echo $Pic3; ?>' width="350" height="252" alt="" /></td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td bgcolor="#CCCCCC" class="tableleft">Picture 4</td>
      <td bgcolor="#FFFFFF" class="tableright">
        
        <img src='<?php echo $Pic4; ?>' width="350" height="252" alt="" /></td>
    </tr>
</table>
<form name="form1" method="POST" action="">
    <input type="hidden" name="MM_delete" value="form1">
    <input type="text" name="Pic1" value="<?php echo $Pic1; ?>" hidden>
    <input type="text" name="Pic2" value="<?php echo $Pic2; ?>" hidden>
    <input type="text" name="Pic3" value="<?php echo $Pic3; ?>" hidden>
    <input type="text" name="Pic4" value="<?php echo $Pic4; ?>" hidden>
    <input type="hidden" name="MM_recordId" value='<?php echo $id; ?>'>
    <input type="submit" name="Submit" value="Are you sure you want to delete?">
</form>
</div>
</body>

<?php
      }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $ID = $_POST['MM_recordId'];
      $Pic1 = $_POST['Pic1'];
      $Pic2 = $_POST['Pic2'];
      $Pic3 = $_POST['Pic3'];
      $Pic4 = $_POST['Pic4'];
      $sql = "DELETE FROM `tbloutwoodlist` WHERE id=$ID";
      if ($conn->query($sql) === TRUE) {
          unlink($Pic1);
          unlink($Pic2);
          unlink($Pic3);
          unlink($Pic4);
          header("Location: index.php");
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
?>
</html>