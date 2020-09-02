function abc(){
aside = document.getElementById("rightbar");
if(XMLHttpRequest) var x = new XMLHttpRequest();
else var x = new ActiveXObject("Microsoft.XMLHTTP");
x.open("GET", "user_list.php", true);
x.send();
x.onreadystatechange = function(){
    if(x.readyState == 4){
        if(x.status == 200) aside.innerHTML = x.responseText;
        else aside.innerHTML = "Error loading document";
        }
    }
}

function def(){
aside = document.getElementById("rightbar");
if(XMLHttpRequest) var x = new XMLHttpRequest();
else var x = new ActiveXObject("Microsoft.XMLHTTP");
x.open("GET", "userCreate.php", true);
x.send();
x.onreadystatechange = function(){
    if(x.readyState == 4){
        if(x.status == 200) aside.innerHTML = x.responseText;
        else aside.innerHTML = "Error loading document";
        }
    }
}
function efg(){
	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	var email = document.getElementById('email').value;
	var xhttp = new XMLHttpRequest();

	xhttp.open('POST', '../ajaxPhp/user_create.php', true);
	xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhttp.send('username='+username+'&password='+password+'&email='+email);
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById('data').innerHTML =  this.responseText;

		}
	}
}