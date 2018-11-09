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
    $answer=array(
      "name"=>$_POST["name"],
      "email"=>$_POST["email"],
      "job"=>$_POST["job"],
      "message"=>$_POST["message"],
    );
    $db=new DatabaseManager;
    $db->DBinsert($answer);
  ?>
</body>

</html>