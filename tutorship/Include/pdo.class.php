<?php 
  
// 数据库连接类
class Database{
  
    private $host      = DB_HOST;
    private $user      = DB_USER;
    private $pass      = DB_PASS;
    private $dbname    = DB_NAME;
 
    private $dbh;
    private $error;
    private $stmt;

  /**
   * 构造函数
   */
    public function __construct(){
        // 设置DSN
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        // 设置选项
        $options = array(
            PDO::ATTR_PERSISTENT    => true,
            PDO::ATTR_ERRMODE       => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_PERSISTENT  => true,
      PDO::ATTR_ERRMODE     => PDO::ERRMODE_EXCEPTION,
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );
        // 创建一个新的PDO实例
        try{
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        }
        // 捕捉错误
        catch(PDOException $e){
            $this->error = $e->getMessage();
        }
    }
   
    /**
     * 查询
     * @param  string $query 查询语句
     * @return object        
     */
    public function prepare($query){
      $this->stmt = $this->dbh->prepare($query);
  }

  /**
   * 绑定一个值到参数 
   * @param  [type] $param [description]
   * @param  [type] $value [description]
   * @param  [type] $type  [description]
   * @return [type]        [description]
   */
  public function bind($param, $value, $type = null){
      if (is_null($type)) {
          switch (true) {
              case is_int($value):
                  $type = PDO::PARAM_INT;
                  break;
              case is_bool($value):
                  $type = PDO::PARAM_BOOL;
                  break;
              case is_null($value):
                  $type = PDO::PARAM_NULL;
                  break;
              default:
                  $type = PDO::PARAM_STR;
          }
      }
      $this->stmt->bindValue($param, $value, $type);
  }

  public function execute(){
      return $this->stmt->execute();
  }

  public function resultset(){
      $this->execute();
      return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function single(){
      $this->execute();
      return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }   

  // 获取影响函数
  public function rowCount(){
      return $this->stmt->rowCount();
  }

  // 获取最后插入id
  public function lastInsertId(){
      return $this->dbh->lastInsertId();
  }

  public function query($sql){
    return $this->dbh->query($sql);
  }

}














