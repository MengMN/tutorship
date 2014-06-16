|--models
	|--model.php Model层实体的基础类
	|--modelManage.php Model层进行实体管理的基础类
	|--PDO.php 数据库连接类
	|--










文件0：(Model.php)Model层实体的基础类

<?php
//用来包装信息实体的基础类
class Model{
    //这个实体类的数据，
    //example: array("id"=>1, "name"=>"this is name");
    var $data;
    //这个实体类的数据约束信息，用来判断加入的$data数据的准确性
    //see: ClassModel
    var $match;
    //与该实体对应的数据库中表的名称
    var $table;
    //初始化
    function Model(&$data){
        $this->data = &$data;
    }
    //设置该实体的某个数据是值
    function set($key, $value){
        $this->data[$key] = $value;
    }
    //获取该实体的某个数据
    function get($key){
        return $this->data[$key];
    }
    //获取该实体的全部数据
    function getData(){
     return $this->data;
    }
    //获取该实体的约束信息
    function getMatch(){
     return $this->match;
    }
    //验证实体数据的准确性和完整性
    function isValid(){
        foreach($this->match as $key=>$value){
            if(!isset($value["null"]) && !isset($this->data[$key])) die("$key 的数值不能为空");
            //.....可以在加其他的判断，例如是否超过如许的最大数值，或长度过长.....
        }
    }
}
?>
 


文件1：(Manager.php)Model层进行实体管理的基础类

<?php
//对实体信息进行管理的基础类
class Manager{
    //数据库管理类对象
    var $db;
    //初始化
    function Manager(){
     $this->db = new Db();
    }
    //用来向数据库中插入实体信息
    function insert(&$model){
     $model->isvalid();
        $table = $model->table;
        $match = $model->getMatch();
        $data = $model->getData();
        $str1 = $str2 = array();
        foreach($match as $key=>$value){
         if(isset($data[$key])){
             $str1[] = $key;
                $str2[] = ($value["type"]=="C")? """.$data[$key].""": $data[$key];
            }
        }
        $sql = "INSERT INTO $table (".implode(",", $str1).") VALUES(".implode(",", $str2).")";
        return $this->db->execute($sql);
    }
}
?>
 

 文件6：(Db.php)数据库联接管理类，用于共享并管理数据的访问。由于这个类涉及的内容不是本章要讨论的内容，所以这个类模拟了“真实的数据库管理类的方法”，借口是和正常的类是一样的，但是接口函数里面的内容是不对的，只是模拟的数据。网上有很多这种类的做法，可以自己到晚上找找，（**另外本系列文章的第二章里也有详细的介绍**）。

<?php
//数据库操作管理类
class Db{
   //数据库联接
   var $con;
   //初始化
   function Db(){
       //$this->con=mysql_connect(********************);...........
   }
   //执行数据查询语句
   function &query($sql){
       //$result = mysql_query($sql); ..................
       //return $result;
       if($sql=="SELECT * FROM student WHERE stu_clsid=2")
        return array("0"=>array("stu_id"=>1, "stu_clsid"=>2, "stu_name"=>"student1"),
                      "1"=>array("stu_id"=>2, "stu_clsid"=>2, "stu_name"=>"student2")
                         );
       die("空班级");
   }
   //获取一条数查询结果
   function getOne($sql){
       //$result = mysql_query($sql); .............
       //return $result[0];
       if($sql=="SELECT * FORM class WHERE cls_id=1")
        return null;
       if($sql=="SELECT * FORM class WHERE cls_id=2")
        return array("cls_id"=>2, "cls_name"=>"classname", "cls_address"=>"classaddress");
   }
   //执行数据库更新/添加/删除语句
   function execute($sql){
      //mysql_query($sql);
      echo "<br>正在进行插入操作<br>...<br>插入操作完成<br>";
      return true;
   }
}
?>