<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>入力フォーム</title>
</head>

<body>
  <h1>入力フォーム</h1>
  <form action="check.php" method="post">
    <table border=1>
      <tr>
        <td>名前</td>
        <td><input type="text" name="name"></td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td>仕事</td>
        <td>
          <select name="job">
            <option values="">▼選択</option>
            <option>学生</option>
            <option>会社員</option>
            <option>その他</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>メッセージ</td>
        <td><textarea name="message" cols="40" rows="5"></textarea></td>
      </tr>
      <tr>
        <td align="right" colspan=2><input type="submit" value="確認する"></td>
      </tr>
    </table>
  </form>
</body>

</html>