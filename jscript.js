function character(e)
{
	alert(e.keyCode);
if((e.keyCode>=65 && e.keyCode<=91)||(e.keyCode>=97 && e.keyCode<=122) || e.keyCode==32 ||e.keyCode==46)
    {
        return true;
    }
    else
    {
        e.keyCode=0;
        return false;
    }
    
}
function clearall(me)
{
	if(me.value!="")
	{
		document.getElementById("msg1").value="";
	}			
}

function  number(e)
{
    if(e.keyCode>=48 && e.keyCode<=57 || ||e.keyCode==46)
    {
        return true;
    }
    else
    {
        e.keyCode=0;
        return false;
    }
}
function  both(e)
{
    if((e.keyCode>=48 && e.keyCode<=57)||(e.keyCode>=65 && e.keyCode<=91)||(e.keyCode>=97 && e.keyCode<=122) || e.keyCode==46)
    {
        return true;
    }
    else
    {
        e.keyCode=0;
        return false;
    }

}

function checkEmail(ee) {

    var email = ee;// document.getElementById('txtEmail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
        alert('Please provide a valid email address');
        email.focus();
        return false;
    }
}