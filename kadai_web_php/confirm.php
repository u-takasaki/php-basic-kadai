<?php
  session_start();
  $employee_name = $_POST['employee_name'];
  $employee_age = $_POST['employee_age'];
  $department = $_POST['department'];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>入力内容をご確認ください。</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>
  <table border="1">
    <tr>
      <th>項目</th>
      <th>入力内容</th>
    </tr>
    <tr>
      <th>社員名</th>
      <td>
        <?php echo $employee_name; ?>
      </td>
    </tr>
    <tr>
      <th>年齢</th>
      <td>
        <?php echo $employee_age; ?>
      </td>
    </tr>
    <tr>
      <th>所属部署</th>
      <td>
        <?php echo $department; ?>
      </td>
    </tr>
  </table>
  <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
  <button id="cancel-btn" onclick="history.back();">キャンセル</button>
</body>
</html>