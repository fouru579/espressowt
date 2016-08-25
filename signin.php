<!DOCTYPE HTML>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<script type="text/javascript" >
function val(){
	if((form.password.value).length < 8)
	{
		alert("password too Short(mininum 8 letters)");
		form.password.focus();
		return false;
	}
	if(form.repass.value != form.password.value)
	{
		alert("Password Entered Do not match");
		return false;
	}
}
</script>

<style>
.demoHeaders {
		margin-top: 2em;
	}
div.company {
height:80px;
width:1250px;
position:relative;
left:35px;
}
body{
background-image:url(books.jpg);
width:1250px;
height:800px;
}

h1{
height:50px;
width:350px;;
font-weight:bold;
position:relative;
left:450px;
font-size:40px;
border-radius:10px;
}

div.content{
position:relative;
left:10px;
}
form{
height:500px;
width:500px;
color:gold;
font-size: 20px;
position:relative;
left:15px;
}
input{
position:relative;
left:20px;
float:right;
width:250px;
border-radius:5px;
}
input.sig{
width:60px;
color:gold;
border-radius:10px;
background-color:maroon;
float:left;
}
input.sig:hover{
color:white;
}
input.ch{
width:10px; 
position:relative;
float:left;
}

a.cat {
float:left;
position:relative;
left:25px;
}
</style>

<title>
signin
</title>
</head>
<body>
<h1><font color="gold" class="col">QWERTYUIOPASDFGHJK
</font></h1>
<hr/>
<div class="content">
<p><font size="20px" color="gold">
Enter your details:
</font>
<p>
</div>
<form autocomplete="on" method="post">
<label for="Name"> What do we call you?</label>
<input type="text" name="Name" placeholder="         First                    Last " required /> 
<br/><br/>
<label for="college"> Your College Name: </label>
<input type="text" name="college" required />
<br/><br/>
<label for="age">Your Birthdate:</label>
<input type="date" name="age"  class="date" required /> 
<br/><br/>
<label for="cont">Contact Number</label>
<input type="tel" name="cont" id="datepicker" maxlength="15" required />
<br/>
<br/>
<label for="Email"> Your Email-Id:</label>
<input type="text" name="Email" placeholder="abc@xyz.com" required /> 
<br/><br/>
<label for="password">Your password please:</label> 
<input type="password" name="password" id="pass" maxlength="20" required />
<br/><br/>
<label for="repass">Please enter your<br/> Password again:</label>
<input type="password" name="repass" id="repass" minlength="8" maxlength="20" required />
<br/><br/>
<label for="gender">You Are a:</label> 
<br/>
<input type="radio" name="gender" value="male" required class="ch"/><a class="cat">Gentle man</a>
<br/>
<input type="radio" name="gender" value="female" required class="ch"/><a class="cat">Gentle lady</a>
<br/><br/>
<label for="post">Designation:</label> 
<br/>
<input type="radio" name="post" value="Professor" required class="ch"/><a class="cat">Professor</a>
<br/>
<input type="radio" name="post" value="Student" required class="ch"/><a class="cat">Student</a>
<br/><br/>
<input type="checkbox" name="Agree" required class="ch" /><a class="cat">By Ticking Here You Agree Our Terms<br/> and Conditions of use*</a> 
<br/><br/><br/>
<input type="submit" name="submit" value="Sign up" autofocus class="sig" onclick="return val();" />
</form>
<?php
if($_post["submit"]=="submit")
{
	$Name=$_POST["Name"];
	$college=$_POST["college"];
	$age=$_POST["age"];
	$cont=$_POST["cont"];
	$Email=$_POST["Email"];
	$password=$_POST["password"];
	$repass=$_POST["repass"];
	$gender=$_POST["gender"];
	$post=$_POST["post"];
	
	mysql_connect("localhost","root","");
	mysql_select_db("form");
	
	$s="INSERT INTO formdata(Name,college,age,cont,Email,password,gender,post) values('".Name."','".college."','".age."','".cont."','".Email."','".password."','".gender."','".post."')";
	
	}
	if(mysql_query($s))
		echo "You Are In";
	else
		echo msql_error();

?>
<script type="text/javascript" src="events.js"></script>
<script type="text/javascript" src="datePicker.js"></script>
</body>	
	
