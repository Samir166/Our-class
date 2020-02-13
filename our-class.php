<!DOCTYPE html>
<html>
<head>
<title>Title of the document</title>
</head>

<body>
	
<?php

$student = [ ["Ad"=>"Samir","Soyad"=>"Hasratov", "Yash"=>"24"] , 
             ["Ad"=>"Toghrul","Soyad"=>"Jafarli","Yash"=>"20"] ,
             ["Ad"=>"Mirvari","Soyad"=>"Yusifova","Yash"=>"22"],
             ["Ad"=>"Jahangir","Soyad"=>"Osmanov","Yash"=>"19"],
];

echo "<table border='1' width='400px'>";
echo "<th>Ad</th>";
echo "<th>Soyad</th>";
echo "<th>Yash</th>";
foreach ($student as $key => $value) {
	echo "<tr>";
echo "<td>".$value['Ad']."</td>";
echo "<td>".$value['Soyad']."</td>";
if(intval($value['Yash'])%2==1){
	echo "<td bgcolor='red'>".$value['Yash']."</td>";
}
else{
	echo "<td>".$value['Yash']."</td>";
	"</tr>";
}
}
"</table>";

?>

</table>

</body>

</html>