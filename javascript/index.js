function leftClick()
{
	var slider=document.querySelector('.peopleWrapper');
	var personName=document.getElementsByClassName('personName');
	var personImage=document.getElementsByClassName('personImage')
	var personNameText=document.getElementsByClassName('pH3');
	var personImageSize=document.getElementsByClassName('personImageSize');
	var presentState=slider.style.marginLeft;
	if(presentState==0)
	{
		slider.style.marginLeft="-300px";
		personName[1].classList.add('anima');
		personImage[1].classList.add('anima');
		personNameText[1].classList.add('aniText');
		personImageSize[1].classList.add('aniImage');

	}else if(presentState=='-300px')
	{	
		personName[1].classList.remove('anima');
		personImage[1].classList.remove('anima');
		personName[2].classList.add('anima');
		personImage[2].classList.add('anima');
		personNameText[2].classList.add('aniText');

		

		slider.style.marginLeft="-600px";
	}else if(presentState=='-600px')
	{
		personName[2].classList.remove('anima');
		personImage[2].classList.remove('anima');
		personName[3].classList.add('anima');
		personImage[3].classList.add('anima');
		personNameText[3].classList.add('aniText');
		slider.style.marginLeft="-900px";
	}else if(presentState=='-900px')
	{
		
	}
}

function rightClick()
{
	var slider=document.querySelector('.peopleWrapper');
	var personName=document.getElementsByClassName('personName');
	var personImage=document.getElementsByClassName('personImage')
	var personNameText=document.getElementsByClassName('pH3');
	var personImageSize=document.getElementsByClassName('personImageSize');

	var presentState=slider.style.marginLeft;
	if(presentState==0)
	{
		
		
	}else if(presentState=='-1200px')
	{
		personName[3].classList.add('anima');
		personImage[3].classList.add('anima');
		personName[4].classList.remove('anima');
		personImage[4].classList.remove('anima');
		personNameText[3].classList.add('aniText');
		slider.style.marginLeft="-900px";
	}else if(presentState=='-900px')
	{
		personName[2].classList.add('anima');
		personImage[2].classList.add('anima');
		personName[3].classList.remove('anima');
		personImage[3].classList.remove('anima');
		personNameText[2].classList.add('aniText');
		slider.style.marginLeft="-600px";
	}else if(presentState=='-600px')
	{
		personName[1].classList.add('anima');
		personImage[1].classList.add('anima');
		personName[2].classList.remove('anima');
		personImage[2].classList.remove('anima');
		personNameText[1].classList.add('aniText');
		slider.style.marginLeft="-300px";
	}else if(presentState=='-300px')
	{
		personName[0].classList.add('anima');
		personImage[0].classList.add('anima');
		personName[1].classList.remove('anima');
		personImage[1].classList.remove('anima');
		personNameText[0].classList.add('aniText');
		personImageSize[0].classList.add('aniImage');
		slider.style.marginLeft=null;
	}

}