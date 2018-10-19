<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>確認フォーム</title>
</head>

<body>
  <h1>確認画面</h1>
  <?php

    $name=htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8");
    if (empty($name)) {
        echo "名前が未入力";
        exit;
    }
    $email=htmlspecialchars($_POST["email"], ENT_QUOTES, "UTF-8");
    if (empty($email)) {
        echo "メールアドレスが未入力";
        exit;
    }

    $job=htmlspecialchars($_POST["job"], ENT_QUOTES, "UTF-8");
    if (empty($job)) {
        echo "仕事が未入力";
        exit;
    }

    $message=htmlspecialchars($_POST["message"], ENT_QUOTES, "UTF-8");
    if (empty($message)) {
        echo "メッセージが未入力";
        exit;
    }
    session_start();
    $_SESSION["name"]=$name;
    $_SESSION["email"]=$email;
    $_SESSION["job"]=$job;
    $_SESSION["message"]=$message;
  ?>
  <form action="submit.php" method="post">
    <table border=1>
      <tr>
        <td>名前</td>
        <td>
          <?php echo $name;?>
        </td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td>
          <?php echo $email;?>
        </td>
      </tr>
      <tr>
        <td>仕事</td>
        <td>
          <?php echo $job;?>
        </td>
      </tr>
      <tr>
        <td>メッセージ</td>
        <td>
          <?php echo $message;?>
        </td>
      </tr>
      <tr>
        <td align="right" colspan=2><input type="submit" value="確認する"></td>
      </tr>
    </table>
  </form>
</body>

</html>