function myFunction() {
    var x = document.getElementById("topnav");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}

function openImg(imgs) {
    var expandImg = document.getElementById("expandedImg");
    expandImg.src = imgs.src;
    expandImg.parentElement.style.display = "block";
}

function detailFunc(imgs) {
    var expandImg = document.getElementById("expandedImg");
    var bod = document.getElementById("hdr");
    var elem = document.getElementById("ovrly");
    expandImg.parentElement.style.display = "block";
    elem.style.display = "block";
	trgtimg.src = imgs.src;
}

function ovrlyFunc() {
    var elem = document.getElementById("ovrly");
    var cond = document.getElementById("condet");
    var bod = document.getElementById("hdr");
    elem.style.display = "none";
    cond.style.display = 'none';
    bod.style.overflow = "auto";
}

function validate() {
    var pw = document.getElementById("pw");
    var rpw = document.getElementById("rpw");
    
        if (pw.value != rpw.value) {
            alert("Passwords don't match!");
		alert("000");
        } else {
		alert("589");
		document.getElementById('sbmt').setAttribute('formaction', "<?php echo $_SERVER['PHP_SELF']; ?>");
        }
}