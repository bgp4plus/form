<?php
require_once(dirname(__FILE__)."./DatabaseInformation.php");
class DatabaseManager
{
    private $mypdo;

    private function DBconnect()
    {
        try {
            $dbinfo=new DatabaseInformation();
            $this->mypdo=new PDO("mysql:dbname=$dbinfo->dbname;dbhost=$dbinfo->dbhost;charset=utf8mb4", $dbinfo->dbuser, $dbinfo->dbpass,array(PDO::ATTR_EMULATE_PREPARES => false));
        } catch (PDOException $e) {
            echo "データベース接続エラー。".$e->getMessage();
            throw $e;
        }
    }

    private function DBdisconnect()
    {
        unset($this->mypdo);
    }

    public function DBinsert($data)
    {
        try {
            $this->DBconnect($data);
            $stmt=$this->mypdo->prepare("insert into enquete values(:name,:email,:job,:message);");
            $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $data["email"], PDO::PARAM_STR);
            $stmt->bindParam(":job", $data["job"], PDO::PARAM_STR);
            $stmt->bindParam(":message", $data["message"], PDO::PARAM_STR);
            $stmt->execute();
            echo "登録完了";
        } catch (PDOException $e) {
            echo "情報登録失敗。".$e->getMessage();
            throw $e;
        }
    }
}
