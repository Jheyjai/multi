<!DOCTYPE html>
<html>
<head>
<style>
table {
  float : left;
  border-collapse: collapse;
  width: 9%;
  margin-left:50px;
  margin-right:50px;
}

 td,tr {
  text-align: center;
  padding: 4px ;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #00CCFF;
  color: white;
  text-align: center;
  padding: 4px ;
}

</style>
</head>
<body>

<?php

//isset( $_GET['n'] ) ? $n = $_GET['n'] : $n = "";

for ($n=2 ;$n<=12 ;$n++){
	
echo "<table border=1>";
echo "<th colspan=2>สูตรคูณแม่  ${n}<br></th>";

for($i = 1; $i<=12; $i++){
 $sum = $n*$i;
 echo "<tr><td>${i} x ${n}</td> <td >${sum}<br></td></tr>\n"; 
 
}

echo "</table>";

}

?>




</body>
</html>