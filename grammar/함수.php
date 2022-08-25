<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>function</title>
  </head>
  <body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit.

    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
    echo $str;
     ?>
     <h2>strlen()</h2>
     <?php
     echo strlen($str);
      ?>
      <h2>nl2br</h2>
      <?php
     echo nl2br($str);
       ?>
  </body>
</html> -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>WEB</h1>
    <ol>
      <li><a href="index.php?id=HTML">HTML</a></li>
      <li><a href="index.php?id=CSS">CSS</a></li>
      <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
      <?php
        echo $_GET['id'];
      ?>
    </h2>
    <?php
    echo file_get_contents("data/".$_GET['id']);
    // 파일에 있는 내용을 출력한다.
     ?>
  </body>
</html>
