
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
	var s = document.getElementsByClassName('child');
	for (var i = s.length - 1; i >= 0; i--) {
		s[i].style.display = 'none';
	}
	s[num].style.display = 'block';
}

function choose(num){
	var c = document.getElementById('category');
	c.value = num;
}