<?php
	// 用户操作的控制器
	class User{

		// 用户注册
		public function register(){

			// 跳转到register注册页面
			include '/Admin/views/register.htm';

		}
		public function register2(){

			// 从register注册页面跳转到这里
			
			// 调用registerModel类，实例化对象

		}
		// 用户登录
		 public function login(){
		 	// 从login登录页面跳转到这里

		 		// 从表单那里获取到数据，并且经过一系列的处理
		 		
		 		// 利用PDO连接数据库，这里将数据库连接封装成一个类；也可以将其做成一个控制器
		 		 
		 		// 查询用户表里的用户名和密码是否正确；
		 		
		 			// 正确就赋予session值，这里又有一个session类

		 			// 错误就回到登录错误页面
		 }
		// 用户退出
		 public function logOut(){
		 	



		 }		 
		// 用户留言
		 public function comment(){
		 	
		 }
		
		// 用户上传文件
		 public function upload(){

		 }




















	}

