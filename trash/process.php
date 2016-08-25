<?php include 'database.php ;?>
<?php  
//creating a variable

$first_name=$_POST['Name']; 
$college=$_POST['college'];
$age=$_POST['age'];
$cont=$_POST['cont'];
$Email=$_POST['Email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$posts=$_POST['posts'];

//Executing the query

mysqli_query($connect,"INSERT INTO FORM(Name,college,age,cont,Email,password,gender,posts)
VALUES ('$first_name','$college','$age','$cont','$Email','$password','$gender','$posts')");
if(mysqli_affected_rows($connect)!=0)
{
echo "Error submitting Data<br/>"
echo mysqli_error($connect);
}


