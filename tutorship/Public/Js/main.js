

// 总体的js
// 获取class的dom值
	function getElementsByClassName(n){
		var classElements = [];
		var allElements = window.document.getElementsByTagName('*');
		for (var i = 0; i < allElements.length; i++) {
			if ( allElements[i].className = n) {
				classElements[allElements.length] == allElements[i];
			}			
		}
		return classElements;
	}





	// 隐藏栏目
	function get_value () {
		var a = document.getElementById("header-bar");
		a.setAttribute("hidden",true);
	}
	
	// 没有成功的折叠
	function level_show(){

		var cts = document.getElementsByClassName("ct");
		for (var i = 0; i < cts.length; i++) {
			cts[i].onclick = function(){
				this.setAttribute("hidden",true);
			}
		}
	}
	//名称、格式
	function choice() {
			var c = document.getElementsByClassName("opt");
			c[0].style.display = "block";
		}

	function div_close(){
		var div = document.getElementsByClassName("discuzz");
		div[0].setAttribute("hidden",true);
	}

		
		

	

















