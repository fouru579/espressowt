
function val(){
	if((frm.password.value).lenght < 8)
	{
		alert("password too Short(mininum 8 letters)");
		frm.password.focus();
		return false;
	}
	if(frm.repass.value != frm.password.value)
	{
		alert("Password Entered Do not match");
		return false;
	}
}