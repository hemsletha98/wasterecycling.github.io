
function loginWarningTextHide()
{
	var warningBlock=document.getElementsByClassName('warningText')[0];
	warningBlock.classList.remove('warningTextShow');

}

function loginValidate()
{
	var email=document.forms[0]['username'].value;
	var password=document.forms[0]['pass'].value;
	var warningBlock=document.getElementsByClassName('warningText')[0];


	if(email==0)
	{
		var nameDiv=document.getElementsByClassName('name')[0];
		warningBlock.innerHTML="user name is empty";
		warningBlock.classList.add('warningTextShow');
		nameDiv.style.border="2px solid red";
		setTimeout(loginWarningTextHide,5000);
		return false;
	}else if(password==0)
	{
		var passDiv=document.getElementsByClassName('password')[0];
		warningBlock.innerHTML="password is empty";
		warningBlock.classList.add('warningTextShow');
		passDiv.style.border="2px solid red";
		setTimeout(loginWarningTextHide,5000);
		return false;
	}
}

function removeWarning()
{
	var nameDiv=document.getElementsByClassName('name')[0];
	var passDiv=document.getElementsByClassName('password')[0];
	nameDiv.style.border="none";
	passDiv.style.border="none";
}