<!DOCTYPE html>
<html>
<?php
include('./includes/dbconnection.php');
$id = $_GET['id'];
$sql = "SELECT * FROM tbloutwoodlist where id=".$_GET['id'];
$result = $conn->query($sql);


?>
<head>
	<title>Vehicle Details</title>
	<link href="assets/css/outwood.css" rel="stylesheet" type="text/css">
	<link href="assets/css/vehicle.css" rel="stylesheet" type="text/css">
</head>
<body>
  <?php
      function decodeString($str) {
        $str = str_replace('&!@#&', "'", $str);
        $str = str_replace('*!@#*', '"', $str);
        return $str;
      }
      if (!empty($result) && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $Pic1 = './admin' . substr($row["Pic1"], (strripos($row["Pic1"], '/upload/')), strlen($row["Pic1"]) );
          $Pic2 = './admin' . substr($row["Pic2"], (strripos($row["Pic2"], '/upload/')), strlen($row["Pic2"]) );
          $Pic3 = './admin' . substr($row["Pic3"], (strripos($row["Pic3"], '/upload/')), strlen($row["Pic3"]) );
          $Pic4 = './admin' . substr($row["Pic4"], (strripos($row["Pic4"], '/upload/')), strlen($row["Pic4"]) );

    ?>
    <div class="vehicle">
    <img src="assets/nav-images/outwood-cars.png" style="margin-top: 20px; margin-bottom: 20px;" class="center" alt=""/>
    <h4><?php echo decodeString($row["Marque"]); ?>&nbsp;<span class="vehiclemodel"><?php echo decodeString($row["Model"]); ?></span></h4>
    </div>

<div align="center">
  <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td>

      	<script type="text/javascript">

/***********************************************
* Fade-in image slideshow script- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

var slideshow_width='900px' //SET IMAGE WIDTH
var slideshow_height='675px' //SET IMAGE HEIGHT
var pause=3000 //SET PAUSE BETWEEN SLIDE (3000=3 seconds)

var fadeimages=new Array()
fadeimages.push('<?php echo $Pic1; ?>', '<?php echo $Pic2; ?>', '<?php echo $Pic3; ?>', '<?php echo $Pic4; ?>');
//SET IMAGE PATHS. Extend or contract array as needed
// <% if(allvehicles.Fields.Item("ID").Value<>"" and allvehicles.Fields.Item("ID").Value<>" ") then Response.Write("fadeimages.push('images/"&(allvehicles.Fields.Item("ID").Value)&"_1.jpg');") end if %>
// <% if(allvehicles.Fields.Item("ID").Value<>"" and allvehicles.Fields.Item("ID").Value<>" ") then Response.Write("fadeimages.push('images/"&(allvehicles.Fields.Item("ID").Value)&"_2.jpg');") end if %>
// <% if(allvehicles.Fields.Item("ID").Value<>"" and allvehicles.Fields.Item("ID").Value<>" ") then Response.Write("fadeimages.push('images/"&(allvehicles.Fields.Item("ID").Value)&"_3.jpg');") end if %>
// <% if(allvehicles.Fields.Item("ID").Value<>"" and allvehicles.Fields.Item("ID").Value<>" ") then Response.Write("fadeimages.push('images/"&(allvehicles.Fields.Item("ID").Value)&"_4.jpg');") end if %>

////NO need to edit beyond here/////////////

var preloadedimages=new Array()
for (p=0;p<fadeimages.length;p++){
preloadedimages[p]=new Image()
preloadedimages[p].src=fadeimages[p]
}

var ie4=document.all
var dom=document.getElementById

if (ie4||dom)
document.write('<div style="position:relative;width:'+slideshow_width+';height:'+slideshow_height+';overflow:hidden"><div  id="canvas0" style="position:absolute;width:'+slideshow_width+';height:'+slideshow_height+';top:0;left:0;filter:alpha(opacity=10);-moz-opacity:10"></div><div id="canvas1" style="position:absolute;width:'+slideshow_width+';height:'+slideshow_height+';top:0;left:0;filter:alpha(opacity=10);-moz-opacity:10;visibility: hidden"></div></div>')
else
document.write('<img name="defaultslide" src="'+fadeimages[0]+'">')

var curpos=10
var degree=10
var curcanvas="canvas0"
var curimageindex=0
var nextimageindex=1


function fadepic(){
if (curpos<100){
curpos+=10
if (tempobj.filters)
tempobj.filters.alpha.opacity=curpos
else if (tempobj.style.MozOpacity)
tempobj.style.MozOpacity=curpos/101
}
else{
clearInterval(dropslide)
nextcanvas=(curcanvas=="canvas0")? "canvas0" : "canvas1"
tempobj=ie4? eval("document.all."+nextcanvas) : document.getElementById(nextcanvas)
tempobj.innerHTML='<img src="'+fadeimages[nextimageindex]+'">'
nextimageindex=(nextimageindex<fadeimages.length-1)? nextimageindex+1 : 0
var tempobj2=ie4? eval("document.all."+nextcanvas) : document.getElementById(nextcanvas)
tempobj2.style.visibility="hidden"
setTimeout("rotateimage()",pause)
}
}

function rotateimage(){
if (ie4||dom){
resetit(curcanvas)
var crossobj=tempobj=ie4? eval("document.all."+curcanvas) : document.getElementById(curcanvas)
crossobj.style.zIndex++
tempobj.style.visibility="visible"
var temp='setInterval("fadepic()",50)'
dropslide=eval(temp)
curcanvas=(curcanvas=="canvas0")? "canvas1" : "canvas0"
}
else
document.images.defaultslide.src=fadeimages[curimageindex]
curimageindex=(curimageindex<fadeimages.length-1)? curimageindex+1 : 0
}

function resetit(what){
curpos=10
var crossobj=ie4? eval("document.all."+what) : document.getElementById(what)
if (crossobj.filters)
crossobj.filters.alpha.opacity=curpos
else if (crossobj.style.MozOpacity)
crossobj.style.MozOpacity=curpos/101
}

function startit(){
var crossobj=ie4? eval("document.all."+curcanvas) : document.getElementById(curcanvas)
crossobj.innerHTML='<img src="'+fadeimages[curimageindex]+'">'
rotateimage()
}

if (ie4||dom)
window.onload=startit
else
setInterval("rotateimage()",pause)

</script>
</td>
    </tr>
  </table>
  <table width="904" border="0" align="center" cellpadding="20" cellspacing="12"rules="rows">
    <tr>
      <td width="200"><span class="vehicletext">Marque</span></td>
      <td width="685"><span class="vehicledescription"><?php echo decodeString($row["Marque"]); ?></span></td>
    </tr>
    <tr>
      <td><span class="vehicletext">Model</span></td>
      <td><span class="vehicledescription"><?php echo decodeString($row["Model"]); ?></span></td>
    </tr>
    <tr>
      <td><span class="vehicletext">Year</span></td>
      <td><span class="vehicledescription"><?php echo decodeString($row["VYear"]); ?></span></td>
    </tr>
    <tr>
      <td><span class="vehicletext">Mileage</span></td>
      <td><span class="vehicledescription"><?php echo decodeString($row["Miles"]); ?></span></td>
    </tr>
    <tr>
      <td><span class="vehicletext">Price</span></td>
      <td><span class="vehicledescription"><?php echo decodeString($row["Price"]); ?></span></td>
    </tr>
    <tr>
      <td valign="top"><span class="vehicletext">Description</span></td>
      <td>
        <span class="vehicledescription" style="margin-top:4px;"><?php echo decodeString($row["Description1"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description2"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description3"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description4"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description5"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description6"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description7"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description8"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description9"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description10"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description11"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description12"]); ?></span><br>
        <span class="vehicledescription"><?php echo decodeString($row["Description13"]); ?></span>
      </td>
    </tr>
  </table>
</div>
<p align="center">&nbsp;</p>
</body>
<?php
      }
    }

?>
</html>