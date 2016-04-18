<!doctype html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">



<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/mootools/1.5.2/mootools.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script>
function Showalert(info){
	alert(info);
}
</script>
<?
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);
?>

</head>
<body>
	<table width="800">
    <tr>
    	<td width="10%">ID</td>
        <td width="30%">FIRST NAME</td>
        <td width="30%">LAST NAME</td>
        <td width="30%">EMAIL</td>
    </tr>
    <tr>
<?
	foreach ( $people as $person ) { 
     	echo "<tr>"; 
		foreach ( $person as $key => $value ) { 
       		echo "<td>$value</td>";
		}
		$info = $person['first_name'] . " " . $person['last_name'] . " " . $person['email'];
		echo "<td><input type='button' value='Info' id='person_btn' onclick='Showalert(\"$info\");'></td>";
		echo "</tr>";
    } 
?>
    
    </tr>
    </table>
</body>
</html>
