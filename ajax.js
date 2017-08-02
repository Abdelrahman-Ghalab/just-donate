/*window.onload = function(){
document.getElementById("signup").onclick=function showUser() {
	var str = document.getElementById("name").value;
   
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("txtHint").innerHTML = this.responseText;
				alert(this.responseText);
            }
        };
        xmlhttp.open("GET","signingup.php?q="+str,true);
        xmlhttp.send();
    }

}
	/*,
lname: $('#lname').val(),
	fname: $('#fname').val(),
	email: $('#email').val(),
	password : $('#password').val(),
	city : $('#city').val()

	*/
	



$(document).ready ( function () {
	
	
	
	
	
	
	
	
$('#signup').click ( function () { 







$.post('signingup.php',{  

"username" : $('#name').val() ,
     "lname":  $('#lname').val(),
	"fname":  $('#fname').val(),
	"email":$('#email').val(),
	"password": $('#password').val(),
	"city": $('#city').val(),
"address": $('#address').val()
}


, function(data){
	
    if(data.exists){
			document.getElementById("txtHint").innerHTML = "user exists! choose another username";
			

    }else{
	
	alert ('Account Created. Log In and Just Donate');
                 			
       
    }
}, 'JSON') }) });