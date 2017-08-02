window.onload= showUser;
function showUser(){
	alert("fuck");
	var city = document.getElementById("city").value;
	var category = document.getElementById("category").value;
  if (city=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
		var xmlhttp=new XMLHttpRequest();
  } 
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
		
      document.getElementById("txtHint2").innerHTML=this.responseText;
    }
  }//+"p="+category
  xmlhttp.open("GET","search.php?q="+city,true);
  xmlhttp.send();
}
