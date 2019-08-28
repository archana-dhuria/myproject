<?php
//Validate the request brought

// if(isset($_POST["page"]) && !empty($_POST["page"]))
// {
	$first_name = trim(strip_tags($_POST["firstname"]));
	$last_name = trim(strip_tags($_POST["lastname"]));
	$gender = trim(strip_tags($_POST['gender']));
	$marks = trim(strip_tags($_POST['marks']));
 
		
	if($first_name == "" || $last_name == "" || $gender == "" || $marks == "") //Be sure that all the fields are filled then proceed
	{
		echo "<div class='info'>Sorry, you have to fill in all the fields to proceed. Thanks.</div>";
	}
	// else if(strlen($last_name) < 5)
	// {
	// 	echo "<div class='info'>Sorry, your lastname must not be less than 5 characters in length please. Thanks.</div>";
	// }
	/*else if(ereg('[^A-Za-z0-9]', $last_name))  //Be sure that lastname is properly formatted then proceed
	{
		echo "<div class='info'>Sorry, <font color='blue'>".$last_name."</font> is not in the proper format for a lastname. <br>lastname should only contain letters and numbers.<br>Example formats: <font color='blue'>comfort</font>, <font color='blue'>victor18</font>, <font color='blue'>chuks29</font>, <font color='blue'>lemdy</font>, <font color='blue'>joyce</font>, <font color='blue'>prisca</font>, <font color='blue'>ibrahim</font>, <font color='blue'>Ahmad</font> etc</div>";
	}*/
	else
	{
		$db = new SQLite3('company.db');
		$db->exec("CREATE TABLE if not exists users(user_id INTEGER ,firstname varchar(10),lastname varchar(10),gender varchar(10), marks varchar(30))");
		$db->exec("INSERT INTO users(user_id,firstname,lastname,gender,marks) VALUES(20,'$first_name','$last_name','$gender','$marks')");

		//Check your database for already existing lastname and/or Email address to avoid duplicates and save this info to your database if you wish before you can then display a success message to your users as shown below
		?>
       <br clear="all"><br clear="all"><div class="vpb_main_wrapper" style="width:380px;"><br clear="all">
       <div class="info" style="width:340px;float:left;">You have registered successfully and below are your registration information!</div><br clear="all"><br clear="all">
       

        <div style="width:100px;float:left;" align="left">firstname:</div>
        <div style="width:230px;float:left;" align="left"><?php echo $first_name; ?></div><br clear="all"><br clear="all">
        
        
        <div style="width:100px;float:left;" align="left">lastname:</div>
        <div style="width:230px;float:left;" align="left"><?php echo $last_name; ?></div><br clear="all"><br clear="all">
        
        
        <div style="width:100px;float:left;" align="left">Gender:</div>
        <div style="width:230px;float:left;" align="left"><?php echo $gender; ?></div><br clear="all"><br clear="all">
        
        
        <div style="width:100px;float:left;" align="left">Marks:</div>
        <div style="width:230px;float:left;" align="left"><?php echo $marks; ?></div><br clear="all"><br clear="all">
                
        

        <?php
	}
// }
// else
// {
// 	echo "<div class='info'>Sorry, the operation was unsuccessful.<br>Please try again or contact this website admin to report this error message if the problem persist. Thanks.</div>";
// }
echo"<div><input type='button' value ='Export Data'></div>";
$res = $db->query('SELECT * FROM users');
$filename = "data_" . date('Ymd') . ".xls";
$fp = fopen('php://output', 'w');
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
echo"<div>
<table border =2px>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
	<th>Marks</th>
  </tr>";

while ($row = $res->fetchArray()) {
	echo "<tr><td>".$row['firstname']."</td><td>". $row['lastname']."</td><td>". $row['gender']."</td><td>".$row['marks']."</td></tr>";
	$header[] = $row[0];
}

exit;




?>
        <br clear="all">
        
        </div><br clear="all">

