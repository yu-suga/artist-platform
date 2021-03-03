<?php
//DB接続クラス
class DB
{
    public function connect()
    {
        $DSN = 'mysql:dbname=test;host=localhost;charset=utf8;unix_socket=/Applications/MAMP/tmp/mysql/mysql.sock';
        $USER = 'root';
        $PASSWORD = 'root';
        $PDO = new PDO($DSN, $USER, $PASSWORD);
        return $PDO;
    }

    //会員登録処理
    public function registerInsert()
    {
        return "insert into test(name,mail,password,genre,area,music,picture,comment)values(?,?,?,?,?,?,?,?)";
    }

    //ログイン処理
    public function loginSelect()
    {
        return "select * from test where mail=? && password=?";
    }

    //first_view.phpにて会員情報全件表示処理
    public function selectUserAll()
    {
        return "select * from test";
    }

    //会員情報変更処理
    public function userUpdate()
    {
        return "update test SET name = ?,mail = ?,comment = ?";
    }

    //メッセージ送受信機能
    public function sendMessage()
    {
        return "insert into message (userid,message)values(?,?)";
    }
}
