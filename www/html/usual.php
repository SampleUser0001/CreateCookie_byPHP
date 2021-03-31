<?php setcookie('key', 'hogehoge', time() + (7 * 24 * 60 * 60)); ?>
<!-- setcookieは1行目に書かないといけない。このコメントの後に呼ばれてもNG。 -->
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Example</title>
</head>
<body>
  <?php
    echo 'hoge<br>';
    echo 'unixtime='.time().'<br>';

    date_default_timezone_set('Asia/Tokyo');

    $cookieKey = '_redmine_session'; 
    $cookieValue = 'hogehoge';
    $cookieLimit = time() + (7 * 24 * 60 * 60);
    echo 'cookieLimit='.date('Y-m-d H:i:s', $cookieLimit).'<br>';

    echo '<hr>';
    echo '<h1>cookie</h1>';
    echo '<ul>';
    foreach($_COOKIE as $key => $value ){
      echo '<li>' . $key . ' , ' . $value . '</li>';
    }
    echo '</ul>';

  ?>
</body>
</html>