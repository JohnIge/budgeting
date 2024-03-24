// JavaScript Document


   
   var nameAct = "";
   
   
   function getXMLHTTPRequest() {
   
   
try {
req = new XMLHttpRequest();
} catch(err1) {
  try {
  req = new ActiveXObject("Msxml2.XMLHTTP");
  } catch (err2) {
    try {
    req = new ActiveXObject("Microsoft.XMLHTTP");
    } catch (err3) {
      req = false;
    }
  }
}
return req;
}

var http = getXMLHTTPRequest();





function getServerText(opts){

var oelected = opts;
var optionSelected = "";

if(oelected == 1){
	optionSelected = "Staff";
}

else{
	
	optionSelected = "Student";
}






  var myurl = "clients.php";
//nameAct = "variableSelected";
  //alert(optionSelected);
  var modurl = myurl+"?optss="+optionSelected;
  http.open("GET", modurl, true);
  http.onreadystatechange = useHttpResponse;
  http.send(null); 
}







function useHttpResponse() {
   if (http.readyState == 4) {
    if(http.status == 200) {
      var mytext = http.responseText; 
	 
	 // alert(mytext)
	 
	 var formatter = "";
	 var chats = mytext.split("~");
	 var numofchats = chats.length;
	 
	 
	 
	 for (loopCounter = 0; loopCounter < (numofchats - 1); loopCounter++)
	 {
		 
		 var onechat = chats[loopCounter];
		 
		  //alert(onechat);
		 
		 
		 var messageandsender = onechat.split("|");
		 
		 var message = messageandsender[0];
		// alert(message);
		 var sender = messageandsender[1];
		 formatter = formatter+"<p>"+message+"<b> "+sender+"</b></p>";
		
	 }
	 
	 
	
	 
	 document.getElementById("pulled").innerHTML = formatter;
	 
	 
	 
	 
	 /*
	 
	 
	 document.forms[0].area.options.length = (numoptions -1);
	 
	 
	 
	var thoseoptions = mytext.split("|"); 
	  var numoptions = thoseoptions.length;  
	   
	  for (loopCounter = 0; loopCounter < (numoptions - 1); loopCounter++)
{

var newopts = new Option(thoseoptions[loopCounter], thoseoptions[loopCounter]);


document.forms[0].area.options[loopCounter]= newopts; 
	 
	 }	
	 
	 
	*/ 
	 
	 
	 
	 
	 
	   
    }
  } else {
 
  
  }
  
   }















function getServerTexts(opts){
//var optionSelected = opts;



var oelected = opts;
var optionSelected = "";

if(oelected == 1){
	optionSelected = "Staff";
}

else{
	
	optionSelected = "Student";
}






  var myurl = "clients1.php";
//nameAct = "variableSelected";
  
  
  //alert("Yes");
  var modurl = myurl+"?optss="+optionSelected;
  http.open("GET", modurl, true);
  http.onreadystatechange = useHttpResponses;
  http.send(null); 
}







function useHttpResponses() {
   if (http.readyState == 4) {
    if(http.status == 200) {
      var mytext = http.responseText; 
	 
	 // alert(mytext)
	 
	 var formatter = "";
	 var chats = mytext.split("~");
	 var numofchats = chats.length;
	 
	 
	 
	 for (loopCounter = 0; loopCounter < (numofchats - 1); loopCounter++)
	 {
		 
		 var onechat = chats[loopCounter];
		 
		  //alert(onechat);
		 
		 
		 var messageandsender = onechat.split("|");
		 
		 var message = messageandsender[0];
		// alert(message);
		 var sender = messageandsender[1];
		 formatter = formatter+"<p>"+message+"<b> "+sender+"</b></p>";
		
	 }
	 
	 
	
	 
	 document.getElementById("pulled1").innerHTML = formatter;
	 
	 
	 
	 
	 /*
	 
	 
	 document.forms[0].area.options.length = (numoptions -1);
	 
	 
	 
	var thoseoptions = mytext.split("|"); 
	  var numoptions = thoseoptions.length;  
	   
	  for (loopCounter = 0; loopCounter < (numoptions - 1); loopCounter++)
{

var newopts = new Option(thoseoptions[loopCounter], thoseoptions[loopCounter]);


document.forms[0].area.options[loopCounter]= newopts; 
	 
	 }	
	 
	 
	*/ 
	 
	 
	 
	 
	 
	   
    }
  } else {
 
  
  }
  
   }







