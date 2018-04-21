<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
 <?php echo '<h2>Hello PHP</h2>'; ?>
 <?php
  $ch = curl_init();
  $str ='http://peter-spring-mesher-demo';
  curl_setopt($ch, CURLOPT_URL, $str);
  curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
  $output = curl_exec($ch);
  var_dump( $output );
 ?>
 <?php phpinfo(); ?>
 </body>
</html>
