<html>
 <head>
  <title>PHP 测试</title>
 </head>
 <body>
 <?php echo '<h2>Hello PHP</h2>'; ?>
 <?php
  $ch = curl_init();
  #$str ='http://117.78.50.133:32123/';
  $str ='http://peter-spring-mesher-demo/';
  curl_setopt($ch, CURLOPT_URL, $str);
  curl_setopt($ch, CURLOPT_HEADER, 1);  
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt ($ch, CURLOPT_PROXY,'127.0.0.1:30101');
  #curl_setopt($ch,CURLOPT_HTTPGET,true);
  $output = curl_exec($ch);
  curl_close($ch);  
  print_r($output);
 ?>
 <?#php phpinfo(); ?>
 </body>
</html>
