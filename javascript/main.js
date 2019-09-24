function buy()
{
	var popUpBox=document.querySelector('.popUpBox');
	var form=document.querySelector('.buyersForm');

	popUpBox.classList.add('show');
	form.classList.add('formShow');
	sform.classList.remove('formShow');
}

function sell()
{
	var popUpBox=document.querySelector('.popUpBox');
	var form=document.querySelector('.sellerForm');

	popUpBox.classList.add('show');
	form.classList.add('formShow');
	bform.classList.remove('formShow');
}


function hideIt()
{
	var popUpBox=document.querySelector('.popUpBox');
	var bform=document.querySelector('.buyersForm');
	var sform=document.querySelector('.sellerForm');

	popUpBox.classList.remove('show');
	bform.classList.remove('formShow');
	sform.classList.remove('formShow');

}

