<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search City</title>
	<link href="style.css" rel="stylesheet" type="text/css">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #f5e4da;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #f5e4da;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Search City</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by city name.." title="Type in a city">

<?php
require_once('dbconnection.php');
$test_sql =  "SELECT city.city, city.city_id, country.country
			  FROM city
			  INNER JOIN country ON city.country_id=country.country_id";
		 
$result = mysqli_query($con,$test_sql);

echo "<table id='myTable'>";
echo "<tr><th>City</th><th>Country</th><th>City Id</th></tr>";


while ($row = mysqli_fetch_array($result))
{
	$City_Id = $row['city_id'];
	$City = $row['city'];
	$Country = $row['country'];
    	
	
    echo "<tr>";
	echo "<td><font size='4' color = '#006dea'>".$City."</td>";
	echo "<td><font size='4' color = 'black'>".$Country."</td>";
    echo "<td><font size='4' color = '#ff7403'>".$City_Id."</td>";
    echo "</tr>";
	//Printed rows
	
} 
echo "</table>"; 
?>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<button onclick="location.href = 'Index.html'" align="center">Back</button>
</body>
</html>
