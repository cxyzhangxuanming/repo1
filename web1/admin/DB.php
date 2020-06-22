<?php

include 'DbException.php';

class DB{
    public $pdo;
    public $statement;
    public function __construct() {
        $driver_options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT);
        try{
            $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=web1','root','123456',$driver_options);
        }catch(PDOException $p){
            echo '数据库连接出错,原因是:',$p->getMessage();
            exit;
        }
        // echo '数据库连接成功','<br>';
    }

    private function query($sql){
        try{
            $this->statement = $this->pdo->query($sql);
        }catch(PDOException $e){
            echo "查询出错,错误原因是:",$this->pdo->errorInfo()[2],'<br>';
            echo '查询出错,错误代号:',$this->pdo->errorCode(),'<br>';
            exit;
        }
       
        // if($this->statement === false){
        //     echo "查询出错,错误原因是:",$this->pdo->errorInfo()[2],'<br>';
        //     echo '查询出错,错误代号:',$this->pdo->errorCode(),'<br>';
        //     exit;
        // }
    }

    public function get_results($sql,$only = true,$fetch_style = PDO::FETCH_ASSOC){
            $this->query($sql);
        if($only){
            return $this->statement->fetch($fetch_style);
        }else{
            return $this->statement->fetchAll($fetch_style);
        }
    }

    public function exec($sql){

        try{
            $r = $this->pdo->exec($sql);
        }catch(PDOException $e){
            echo '错误编码是:' . $this->pdo->errorCode(),'<br>';
            echo '错误原因是:' . $this->pdo->errorInfo()[2],'<br>';
            exit;
        }
        echo "操作成功!",'<br>';
        echo '受影响的行数是:' . $r . '行','<br>';
        return true+"$r";



        // $r = $this->pdo->exec($sql);
        // if($r === false){
        //     echo '错误编码是:' . $this->pdo->errorCode(),'<br>';
        //     echo '错误原因是:' . $this->pdo->errorInfo()[2],'<br>';
        // }
        // else{
        //     echo "操作成功!",'<br>';
        //     echo '受影响的行数是:' . $r . '行','<br>';
        //     return true+"$r";
        // }
    }




}



?>