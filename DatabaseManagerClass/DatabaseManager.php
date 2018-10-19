<?php
class DatabaseManager
{
    private $dbname="guestbook";
    private $dbhost="localhost";
    private $dbuser="root";
    private $dbpass="";
    private $mypdo;

    private function DBconnect()
    {
        try {
            $this->mypdo=new PDO("mysql:dbname=$this->dbname;dbhost=$this->dbhost;charset=utf8mb4", $this->dbuser, $this->dbpass);
        } catch (PDOException $e) {
            echo "データベース接続エラー。".$e->getMessage();
            throw $e;
        }
    }

    private function DBdisconnect()
    {
        unset($this->mypdo);
    }

    public function DBinsert($dbinfo)
    {
        try {
            $this->DBconnect($dbinfo);
            $stmt=$this->mypdo->prepare("insert into enquete values(:name,:email,:job,:message);");
            $stmt->bindParam(":name", $dbinfo["name"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $dbinfo["email"], PDO::PARAM_STR);
            $stmt->bindParam(":job", $dbinfo["job"], PDO::PARAM_STR);
            $stmt->bindParam(":message", $dbinfo["message"], PDO::PARAM_STR);
            $stmt->execute();
            echo "登録完了";
        } catch (PDOException $e) {
            echo "情報登録失敗。".$e->getMessage();
            throw $e;
        }
    }
}
