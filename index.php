<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
 <?php echo '<h2>Hello PHP</h2>'; ?>
 <?php
  $ch = curl_init();
  $str ='http://www.baidu.com';
  curl_setopt($ch, CURLOPT_URL, $str);
  curl_setopt($ch, CURLOPT_HEADER, 1);  
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
  #curl_setopt($ch,CURLOPT_HTTPGET,true);
  $output = curl_exec($ch);
  curl_close($ch);  
  print_r($output);
 ?>
 <?#php phpinfo(); ?>
 </body>
</html>
