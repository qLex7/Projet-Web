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

var yIndex = 0;
carouse();
function carouse()
{
    var i;
    var x = document.getElementsByClassName("slides");
    for (i = 0; i < x.length; i++)
    {
       x[i].style.display = "none";
    }
    yIndex++;
    if (yIndex > x.length)
      {
        yIndex = 1
      }
    x[yIndex-1].style.display = "block";
    setTimeout(carouse, 5000); // Change l'image toutes les 5 secondes
}

function myFunction() {
    var open = document.getElementById("demo");
    if (open.className.indexOf("w3-show") == -1) 
    {
        open.className += " w3-show";
    } 
    else 
    { 
        open.className = open.className.replace(" w3-show", "");
    }
}

function verifAge(n)
{
  if((n > 0) && (n < 150))
  {
    //window.alert("Votre âge est valide");
    return true;
  }
  else
  {
    window.alert("Votre âge est invalide, veuillez entrez une valeur entre 1 et 150 ans.")
    return false;
  }
}

function verifMail(champ)
{
   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;
   if(!regex.test(champ.value))
   {
      //alert("Ce n'est pas l'adressse demandé : xx@univ-avignon.fr")
      return false;
   }
   else
   {  
      return true;
   }
}

function send() 
{
  if ((verifAge(document.getElementById('age1').value)) && (verifMail(document.getElementById('email').value))) 
  {
    document.getElementById('form1').submit();
  } 
};




