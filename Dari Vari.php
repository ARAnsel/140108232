<!DOCTYPE html>
<html>
<body>
</body>
</html>
<?php
function mio(){
$input = $_POST['name'];
    $x = 0;
    $z = array($_POST['name']);
    
  for( $x = $_POST['name'];$_POST['name'] <= -1; ){
if( $_POST['name'] == -1){
 echo ksort($z);
}
  }echo "your number is : $x";

}
mio();


