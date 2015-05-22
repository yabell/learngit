<?php
 echo '微信！测试用';
 $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

 file_put_contents('demo.txt',$postStr);
 //dome
 //调用微信注释;
