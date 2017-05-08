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

  var myIndex = 0;
  carousel();

function carousel() 
{
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) 
    {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) 
      {
        myIndex = 1
      }    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change l'image toutes les 5 secondes
};
