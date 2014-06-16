// 总体的js
// 获取class的dom值

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

// 注册检查用户名

function showName() {

    var username = document.getElementsByClassName("username");
    var nameVal = username[0].value;
    var checkU = document.getElementsByClassName("checkU");

    //正则匹配由6-20位字母、数字和下划线组成，字母和数字开头
    if (!nameVal.match(/^[A-Za-z0-9][A-Za-z0-9_]{5,21}$/)) {
        checkU[0].style.display = "block";
        checkU[0].style.background = "url(/Public/Image/pwd_sprite.png) no-repeat 2px -283px";
        checkU[0].innerHTML = "<p>用户名由6-20位字母、数字和下划线组成，字母和数字开头</p>"
        return;
    } else {
        checkU[0].style.display = "none";
    }
    // ajax判断用户名是否已注册
    
    // div = checkU[0];
    // option = username;
    // optionVal = nameVal;
    // ajax_check(div,option,optionVal);
    // 调用ajax函数    
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            checkU[0].style.display = "block";
            checkU[0].innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "/Admin/controllers/register_name.php?username=" + nameVal, true);
    xmlhttp.send();


}
function ajax_check(div,option,optionVal){

    // 调用ajax函数    
    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            div.style.display = "block";
            div.innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "/Admin/controllers/register_name.php?"+option+"=" + optionVal, true);
    xmlhttp.send();
}

// 注册检查邮箱是否注册

function showEmail() {
    var email = document.getElementsByClassName("email");
    var emailVal = email[0].value;
    var checkU = document.getElementsByClassName("checkU");

    if (emailVal.search(/@/) === -1) {
        checkU[1].style.display = "block";
        checkU[1].style.background = "url(/Public/Image/pwd_sprite.png) no-repeat 2px -283px";
        checkU[1].innerHTML = "<span class='check_email'>请输入正确的邮箱格式</span>"
        return;
    } else {
        checkU[1].style.display = "none";
    }


    if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            checkU[1].style.display = "block";
            checkU[1].innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "/Admin/controllers/register_name.php?email=" + emailVal, true);
    xmlhttp.send();

}


// 注册检查密码

function showPass() {

    var pass = document.getElementsByClassName("password");
    var passVal = pass[0].value;
    var checkU = document.getElementsByClassName("checkU");

    if (passVal.length < 6 || passVal.length >20) {
        checkU[2].style.display = "block";
        checkU[2].style.background = "url(/Public/Image/pwd_sprite.png) no-repeat 2px -283px";
        checkU[2].innerHTML = "<p>密码由6-20位字母、数字、小数点和下划线组成</p>"
        return;
    };
    //正则匹配由6-20位字母、数字和特殊字符组成
    if (!passVal.match(/[A-Za-z0-9_.]{5,21}$/)) {
        checkU[2].style.display = "block";
        checkU[2].style.background = "url(/Public/Image/pwd_sprite.png) no-repeat 2px -283px";
        checkU[2].innerHTML = "<p>密码由6-20位字母、数字、小数点和下划线组成</p>"
        return;
    } else {
        checkU[2].style.display = "block";
        checkU[2].innerHTML = "<span class=\"success\">正确</span>"
    }

}


// 判断两个密码是否相同

function ShowInfo() {
    // 获得密码框里的值 
    var pass = document.getElementsByClassName("password");
    var passVal = pass[0].value;
    // 获得重复密码框里的值 
    var repass = document.getElementsByClassName("repass");
    var repassVal = repass[0].value;


    var checkU = document.getElementsByClassName("checkU");

    if (passVal === '') {
        return;
    }

    if (passVal === repassVal) {
        checkU[3].style.display = "block";
        checkU[3].innerHTML = "<span class=\"success\">两次输入的密码一样</span>";
    } else {
        checkU[3].style.display = "block";
        checkU[3].style.background = "url(/Public/Image/pwd_sprite.png) no-repeat 2px -283px";
        checkU[3].innerHTML = "<p>两次输入的密码不一样</p>"
        return;
    }
}

// 判断检查验证码

function showVerify() {
    var verify = document.getElementsByClassName("verify");
    var verifyVal = verify[0].value;
    var checkU = document.getElementsByClassName("checkU");
    
    if (verifyVal == "") {
        checkU[4].style.display = "block";
        checkU[4].innerHTML = "<span class=\"check_name\">请输入验证码</span>";
        return;
    }

   if (window.XMLHttpRequest) { // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            checkU[4].style.display = "block";
            checkU[4].innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "/Admin/controllers/register_name.php?verify=" + verifyVal, true);
    xmlhttp.send();

}


//必须每一个都通过了，才能进行表单提交
function checkAll(){
    var checkB=document.getElementById("checkB");
    if(!checkB.checked){
        return false;
    }
    var success  = document.getElementsByClassName("success");
    if (success.length < 5) {
        return false;
    }
   return true;
  
}

