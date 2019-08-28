<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Form</title>

<!-- Required header files -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script language="javascript" type="text/javascript" src="js/vpb_script.js"></script>
<script> 
	var i = 1;
function addmore()
{
my_div.innerHTML = my_div.innerHTML +"<br><input type='text' name='marks"+i+"' class='vpb_textAreaBoxInputs' style ='margin:5px'>"
i++;
} 
</script>


</head>
<body>
<br clear="all">
<center>
<div style="font-family:Verdana, Geneva, sans-serif; font-size:24px;width:800px;">Employee Form</div><br clear="all" /><br clear="all">


<!-- Code Begins -->
<center>
<div class="vpb_main_wrapper"><br clear="all">

<div style="width:115px; padding-top:10px;float:left;" align="left">First Name:</div>
<div style="width:300px;float:left;" align="left"><input type="text" id="firstname" name="firstname" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">Last Name:</div>
<div style="width:300px;float:left;" align="left"><input type="text" id="lastname" name="lastname" value="" class="vpb_textAreaBoxInputs"></div><br clear="all"><br clear="all">


<div style="width:115px; padding-top:10px;float:left;" align="left">Gender:</div>
<div style="width:300px;float:left;" align="left"><input type="radio" id="radio" name="gender" value="male" checked>Male
<input type="radio" id="radio" name="gender" value="female">Female</div><br clear="all"><br clear="all">

<div style="width:115px; padding-top:10px;float:left;" align="left">
<input  class="vpb_general_button" type="button" id="add" name="add" value="Add Marks" onClick="addmore()"></div>
<div style="width:300px;float:left;" ><input type="text" name="marks" value="" id="marks0" class="vpb_textAreaBoxInputs"></div>
<div style="width:300px;float:left;" id="my_div"></div><br clear="all"><br clear="all">
<!-- <div style="width:115px; padding-top:10px;float:left;" align="left">Desired Password:</div> -->


<div style="width:115px; padding-top:10px;float:left;" align="left">&nbsp;</div>
<div style="width:300px;float:left;" align="left">
<a href="javascript:void(0);" class="vpb_general_button" onClick="Users_Registration();">Submit</a></div>

<br clear="all"><br clear="all">

<div align="left" id="signup_status"></div>

</div>
</center>
<!-- Code Ends -->



















</center>
</body>
</html>