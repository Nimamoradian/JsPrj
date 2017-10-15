var rnd= Math.floor((Math.random() * 89999) + 10000);
document.getElementById("spmNum").innerHTML=rnd;

function myFunction(){
    var menus = document.getElementsByClassName('hideMenu');
    var bar= document.getElementById('hideBar');
    for(i=0 ; i<menus.length; i++){
	    if (menus[i].style.display === 'none') {
	        menus[i].style.display = 'block';
	        bar.style.width='100%';
	        
	    } else {
	        menus[i].style.display = 'none';
	        bar.style.width='0%';
	    }
	}
   
}


var d = new Date().getFullYear();
document.getElementById("date").innerHTML = "Copy right by Nima Moradianzadeh &copy; 2010-" + d;

function validation(){
	var errNum=0;
	var name= document.contactF.namef.value;
	var mail=document.contactF.mail.value;
	var spmNum=document.contactF.spmNum.value;
	var x = mail.indexOf("@");
	var y = mail.lastIndexOf(".");
	if (name == ""){
		document.getElementById("Verrn").innerHTML = "please write your name";
		errNum++; 
	} else
	if (name.match(/^[0-9&._-]+$/)){
		document.getElementById("Verrn").innerHTML = "name only contains letter";
		errNum++; 
	}  else   {
			document.getElementById("Verrn").innerHTML = "";
	}
	if (x<1 || y<x+2 || y+2>=mail.length || mail == "") {
		document.getElementById("Verrm").innerHTML = "please type correct mail";
		errNum++; 
    } else   {
		document.getElementById("Verrm").innerHTML = "";
    }
	
	if (spmNum != rnd){
    	document.getElementById("spmMsg").innerHTML = "Wrong Number Please Try again";
		errNum++; 
    }else {    	
		document.getElementById("spmMsg").innerHTML = "";
    }
	
	
	if (errNum <=0 ){
		return true;
	}	else{
		return false;
	}
}