// JavaScript Document
function number(e)
	
	{
		if(e.keyCode>=48 && e.keyCode<=57)
		{
			return true;
		}
		else
		{
		alert("Enter Numbers Only")
			return false;
		}
	}

	function character(e)
	{
		if((e.keyCode>=65 && e.keyCode<=91)||(e.keyCode>=97 && e.keyCode<=121))
		{
			return true;
		}
		else
		{alert("Enter Character Only")
			return false;
		}
	}
	function validateContact(contact1)
{
	var reg=/^([7-9]{1})+([0-9]{9})$/;
	if((contact1.value==false) && (contact1.value.length>0))
	{
		alert("Invalid Contact Number.");
		contact1.focus();
		return false;
	}
	return true;
}
function Emailid(Email)
{
	var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if(Email.value==false) && Email.value.length>0))
	{
		alert("Invalid Email Address.");
		return false;
	}
	return true;
}
