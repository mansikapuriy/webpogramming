<?php
echo "<h3>indext array:</h3>";
$student=array("krina","vasani","B1",58,220801344,15612422959,6354694714,"atmiya","university","rajkot");
print_r($student);
echo "<br>";

foreach($student as $stud)
{
		echo $stud;
		echo "<br>";
}
echo "<br>";

echo "<h3>associative array:</h3>";
$student_details=array("name"=>"krina","surname"=>"vasani","div"=>"B1","rollno"=>58,"enrollment no."=>220801344,"registration no"=>156124222798,"department"=>"cs&it","faculty"=>"faculty of science","collage"=>"atmiya university","location"=>"rajkot");
print_r($student_details);
echo "<br>";
foreach($student_details as $stud_d)
{
		echo $stud_d;
		echo "<br>";
}

echo "<h3>multidiamentional array:</h3>";
$student_master=array
(array("name"=>"krina","surname"=>"vasani","div"=>"B1","rollno"=>58,"enrollment no."=>220801344,"registration no"=>156124222798,"department"=>"cs&it","faculty"=>"faculty of science","collage"=>"atmiya university","location"=>"rajkot"),
array("name"=>"krina","surname"=>"vasani","div"=>"B1","rollno"=>58,"enrollment no."=>220801344,"registration no"=>156124222798,"department"=>"cs&it","faculty"=>"faculty of science","collage"=>"atmiya university","location"=>"rajkot"),
array("name"=>"krina","surname"=>"vasani","div"=>"B1","rollno"=>58,"enrollment no."=>220801344,"registration no"=>156124222798,"department"=>"cs&it","faculty"=>"faculty of science","collage"=>"atmiya university","location"=>"rajkot"),
array("name"=>"krina","surname"=>"vasani","div"=>"B1","rollno"=>58,"enrollment no."=>220801344,"registration no"=>156124222798,"department"=>"cs&it","faculty"=>"faculty of science","collage"=>"atmiya university","location"=>"rajkot"),
array("name"=>"krina","surname"=>"vasani","div"=>"B1","rollno"=>58,"enrollment no."=>220801344,"registration no"=>156124222798,"department"=>"cs&it","faculty"=>"faculty of science","collage"=>"atmiya university","location"=>"rajkot"),
array("name"=>"krina","surname"=>"vasani","div"=>"B1","rollno"=>58,"enrollment no."=>220801344,"registration no"=>156124222798,"department"=>"cs&it","faculty"=>"faculty of science","collage"=>"atmiya university","location"=>"rajkot"),
array("name"=>"krina","surname"=>"vasani","div"=>"B1","rollno"=>58,"enrollment no."=>220801344,"registration no"=>156124222798,"department"=>"cs&it","faculty"=>"faculty of science","collage"=>"atmiya university","location"=>"rajkot"));
print_r($student_master);

echo "<br>";

echo "<h3>array in table:</h3>";
echo "<table border=1>";	
echo "<tr><th>name</th>,<th>surname</th>,<th>div</th>,<th>roll no</th>,<th>enrollment no</th>,<th>registration no</th>,<th>department</th>,<th>faculty</th>,<th>collage</th>,<th>location</th></tr>";
foreach($student_master as $stud_m)
{
	echo "<tr>";

	foreach($stud_m as $value)
	{
		echo '<td>'.$value.'</td>';
	}
	echo "</tr>";
}
echo "</table>";





	

?>
