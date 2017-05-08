function w3_open() 
{
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() 
{
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

document.body.onclick=function(e)
{
	if(e.target != document.getElementById("mySidebar") && e.target != document.getElementById("open_menu"))
	{
		w3_close();
	}
}

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) 
{
  showDivs(slideIndex += n);
}

function currentDiv(n) 
{
  showDivs(slideIndex = n);
}

function showDivs(n) 
{
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) 
  	{
  		slideIndex = 1
  	}    
  if (n < 1) 
  	{
  		slideIndex = x.length
  	}
  for (i = 0; i < x.length; i++)
   {
     x[i].style.display = "none";  
   }
};