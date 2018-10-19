<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>回答完了フォーム</title>
</head>

<body>
  <h1>回答完了</h1>
  <?php
    require_once(dirname(__FILE__)."./DatabaseManagerClass/DatabaseManager.php");
    session_start();
    $answer=array(
      "name"=>$_SESSION["name"],
      "email"=>$_SESSION["email"],
      "job"=>$_SESSION["job"],
      "message"=>$_SESSION["message"],
    );
    $db=new DatabaseManager;
    $db->DBinsert($answer);
  ?>
</body>

</html>