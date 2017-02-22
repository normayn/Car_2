<?php
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 

$link = mysql_connect('localhost', 'root', '')
   or die('Could not connect: ' . mysql_error());
     
mysql_select_db('cars') or die('Could not select database');
  
$dataArray=array();
  
//get data from database
$sql="SELECT name, COUNT(*) AS 'count' FROM sales GROUP BY name";
$result = mysql_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysql_fetch_assoc($result)) {
      $salesgroup=$row["name"];
      $count=$row["count"];
      //add to data areray
      $dataArray[$salesgroup]=$count;
  }
}
//configure graph
$graph->addData($dataArray);
$graph->setTitle("STOCK LEVELS");
$graph->setGradient("lime", "blue");
$graph->setBarOutlineColor("black");
$graph->createGraph();
?>

<html>
<h3><center>This is where I want to display my graph</h3>
<div align="center">
  <table width="200" border="1" bordercolor="#3399FF">
    <tr>
      <td><div align="center"><img src="graph.php" /></div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</html>

