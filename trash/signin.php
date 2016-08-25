<!DOCTYPE HTML>
<head>
<?php

<style>
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
</div>
<?php echo validation_errors(); ?>

<form autocomplete="on" method="post" action="verify.html">
<label for="name"> What do we call you?</label>
<input type="text" name="Name" placeholder="           First                    Last "  value="<?php echo set_value('Name'); ?>" required /> 
<br/><br/>
<label for="college"> Your College Name: </label>
<input type="text" name="College"required />
<br/><br/>
<label for="age">Your Birthdate:</label>
<input type="date" name="age"   required /> 
<br/><br/>
<label for="cont">Contact Number</label>
<input type="tel" name="cont" required />
<br/>
<br/>
<label for="e-mail"> Your Email-Id:</label>
<input type="text" name="Email" placeholder="abc@xyz.com" required /> 
<br/><br/>
<label for="password">Your password please:</label> 
<input type="password" name="password"value="<?php echo set_value('password'); ?>" maxlength="20" required />
<br/><br/>
<label for="repass">Please enter your<br/> Password again:</label>
<input type="password" name="repass" maxlength="20" value="<?php echo set_value('repass'); ?>" required />
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
<input type="submit" value="sign up" autofocus class="sig" />
</form>
</body>