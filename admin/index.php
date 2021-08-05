<!DOCTYPE html>
<html>
<?php 
    include('../includes/dbconnection.php'); 

    $sql = "SELECT * FROM tbloutwoodlist ORDER BY id ASC";
    $result = $conn->query($sql);


?>
<head>
  <title>Database List</title>
  <link href="../assets/css/outwood.css" rel="stylesheet" type="text/css"> 
</head>

<body>
  <div align="center">
    <a href="adminnewrecord.php" target="_self" class="admintoplink">
      <br> Click here to enter a new record
      <br>
      <br> </a>
  </div>
  <center>
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
    <div style="width:600px; display:<?php echo $row["Description1"]; ?>; margin:0 auto;" align="center">
      <table width="500" border="0" align="center" cellpadding="2" cellspacing="2">
        <tr bgcolor="#CCCCCC">
          <td width="145" bgcolor="#CCCCCC" class="tableleft">ID</td>
          <td width="341" bgcolor="#FFFFFF" class="tableright"><?php echo $row["id"]; ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Marque</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Marque"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Category</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo $row["Category"]; ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Model</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Model"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Year</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["VYear"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Miles</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Miles"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 1</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description1"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 2</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description2"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 3</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description3"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 4</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description4"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 5</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description5"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 6</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description6"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 7</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description7"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 8</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description8"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 9</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description9"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 10</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description10"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 11</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description11"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 12</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description12"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Description 13</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Description13"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Price</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo decodeString($row["Price"]); ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Featured</td>
          <td bgcolor="#FFFFFF" class="tableright"><?php echo $row["Sold"]; ?></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Picture 1</td>
          <td bgcolor="#FFFFFF"><img src='<?php echo $Pic1; ?>' width="350" height="252" alt="" /></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Picture 2</td>
          <td bgcolor="#FFFFFF"><img src='<?php echo $Pic2; ?>' width="350" height="252" alt="" /></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Picture 3</td>
          <td bgcolor="#FFFFFF"><img src='<?php echo $Pic3; ?>' width="350" height="252" alt="" /></td>
        </tr>
        <tr bgcolor="#CCCCCC">
          <td bgcolor="#CCCCCC" class="tableleft">Picture 4</td>
          <td bgcolor="#FFFFFF"><img src='<?php echo $Pic4; ?>' width="350" height="252" alt="" /></td>
        </tr>
      </table>
      <table width="500" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr align="center">
          <td><a href='adminupdate.php?id=<?php echo $row["id"]; ?>' class="adminbottomlink"><strong>Update Record&nbsp;&nbsp;</strong></a> <a href='deleterecord.php?id=<?php echo $row["id"]; ?>' class="adminbottomlink">
            &nbsp;&nbsp;Delete Record&nbsp;&nbsp;</a> <a href='../vehicle.php?id=<?php echo $row["id"]; ?>' class="adminbottomlink" target="_blank">&nbsp;&nbsp;Preview Vehicle</a>
            <br>
            <br> </td>
        </tr>
      </table>
    </div>

    <?php
        }
      }
      $conn->close();
    ?>
  </center>
</body>

</html>