<table border="1">
	<tr>
		<th>Student ID</th>
		<th>Student Name</th>
		<th>Student Address</th>
	</tr>
<?php 

include 'library_db.php';
//follow the library soon

$sql = mysqli_query($con,"SELECT * FROM student "); 

while($row=mysqli_fetch_array($sql))
{
	echo "<tr>";
	echo "<td>$row[Student_ID]</td>";
	echo "<td>$row[Student_Name]</td>";
	echo "<td>$row[Student_Address]</td>";
	echo "</tr>";
}
?>
</table>