<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>PHP 테스트</title>
    <meta charset="utf-8">
  </head>
  <body>
  <?php
    print $_POST["oname"]." 님 안녕하세요!";
    print "<br><br>";
    print "본문 : <br>";
    print nl2br($_POST["honbun"]);
   ?>
  </body>
</html>
