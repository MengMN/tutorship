
function getElementsByClassName(n) {
    var classElements = [];
    var allElements = window.document.getElementsByTagName('*');
    for (var i = 0; i < allElements.length; i++) {
        if (allElements[i].className = n) {
            classElements[allElements.length] == allElements[i];
        }
    }
    return classElements;
}


function select(num){
	var nav = window.document.getElementsByClassName('nav');
	for (var i = nav.length - 1; i >= 0; i--) {
		nav[i].style.display = 'none';
	}
	nav[num].style.display = 'block';
}

function ajax(option){
	
	switch (option) {
        case 'M_member':
            option = 'M_member';
            break;
        case 'M_views':
            option = 'M_views';
            break;
        case 'M_upload':
            option = 'M_upload';
            break;
        case 'M_download':
            option = 'M_download';
            break;
        		

	}
     var d = document.getElementById('content');
     d.style.display = 'none';
     if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else { // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
             d.style.display = 'block';
                d.innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "/Home/controllers/web.php?num=" + option, true);
        xmlhttp.send();
  
	
}




// function change(option){
//   switch (option) {
//     case 'm_update':
//       option = 'm_update';
//       break;
//     case 'M_search':
//       option = 'M_search';
//       break;    
//   }
//   var d = document.getElementById('content');
//      d.style.display = 'none';
//      if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
//             xmlhttp = new XMLHttpRequest();
//         } else { // code for IE6, IE5
//             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//         }
//         xmlhttp.onreadystatechange = function() {
//             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//              d.style.display = 'block';
//                 d.innerHTML = xmlhttp.responseText;
//             }
//         }
//         xmlhttp.open("GET", "/Home/controllers/member2.php?num=" + option, true);
//         xmlhttp.send();
// }














