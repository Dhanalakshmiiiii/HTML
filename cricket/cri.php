<?php
  $cri=array();
  $crick=array("a"=>"Virat","b"=>"Dhoni","c"=>"Sachin","d"=>"Sanju");
?>
<html>
<body>
  <center>
   <table border="1" align="center" height="500" width="500">
   <tr bgcolor="green">
	<th>Name of cricketers</th>
   </tr>
   <tr>
	<td align="center"><?php echo $crick["a"];?></td>
   </tr>
   <tr>
	<td align="center"><?php echo $crick["b"];?></td>
   </tr>
   <tr>
	<td align="center"><?php echo $crick["c"];?></td>
   </tr>
   <tr>
	<td align="center"><?php echo $crick["d"];?></td>
   </tr>
  </table>
  </center>
</body>
</html>