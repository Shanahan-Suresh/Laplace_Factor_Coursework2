<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Customers</title>
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

<h2>Search Rental</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by ID..." title="Type in a name">

<?php
require_once('dbconnection.php');
$test_sql =  "SELECT rental.rental_id, rental.rental_date, rental.inventory_id,customer.last_name,customer.first_name,
			  rental.return_date,staff.username
			  FROM customer
			  INNER JOIN rental ON customer.customer_id=rental.customer_id
			  INNER JOIN staff ON rental.staff_id=staff.staff_id";
		 
$result = mysqli_query($con,$test_sql);

echo "<table id='myTable'>";
echo "<tr><th>Rental ID</th><th>Customer Name</th><th>Staff Username</th><th>Rental date</th><th>Return Date</th><th>Inventory ID</th></tr>";

while ($row = mysqli_fetch_array($result))
{
	$Rental_Id = $row['rental_id'];
    $Rental_Date = $row['rental_date'];
	$Inventory_Id = $row['inventory_id'];
	$First_Name = $row['first_name'];
	$Last_Name = $row['last_name'];
	$Return_Date = $row['return_date'];
	$Staff_Username = $row['username'];
	
    echo "<tr>";
	echo "<td><font size='4' color = '#006dea'>".$Rental_Id."</td>";
	echo "<td><font size='4' color = 'black'>".$First_Name." ".$Last_Name."</td>";
	echo "<td><font size='4' color = 'black'>".$Staff_Username."</td>";
    echo "<td><font size='4' color = 'black'>".$Rental_Date."</td>";
	echo "<td><font size='4' color = 'black'>".$Return_Date."</td>";
	echo "<td><font size='4' color = '#ff7403'>".$Inventory_Id."</td>";
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
