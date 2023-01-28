<head><title>ExpoNG Online File Tagger.</title>
</head>

<div class="group2">
<?php 
$url = $_POST['url']; $name = $_POST['name']; $fileExt = end(explode('.', $url)); 
$folder = "./"; 
if(!file_exists($folder.$datepath)) 
{ 
mkdir($folder.$datepath, 0777, true); 
} 
$filesaveName = str_replace(" ","-",$name); $filesaveName = preg_replace('/[^a-zA-Z0-9_-]/', '', $filesaveName); 
$savename = $filesaveName.'.'.$fileExt; 
$destination_folder = $folder.$datepath.$savename; 


if (isset($_POST['unzip'])) { $zip = new ZipArchive; 
$res = $zip->open("$url"); 
if ($res === TRUE) { 
$zip->extractTo('./'); 
$zip->close(); 
echo "zip file extracted!"; 
} else { 
echo "ERROR: FILE NOT EXTRACTED!"; 
} 
} if (isset($_POST['import'])) { copy("$url","$destination_folder"); echo "<center><title>ExpoNG Online File Tagger.</title><div>The File Has Been Copied</div><p><strong>COPY FILE LINK</strong><br><textarea>http://net.netbaba.online/".$savename."</textarea></p><br><a href='http://net.netbaba.online/".$savename."'><b>DOWNLOAD NOW</b></a><br></center>"; } ?> 
<div class="myexamscampus"> <center><h3>Follow Instructions Carefully</h3></center></div>  

<div> 


<center> 
<div class="examscampus"> 
<u><b>IMPORT</b></u><br> 
<form method="post" action="">URL:<br> 
<input type="text" name="url" size="40" value="http://"><br>
<br> 


<br>SAVE AS:<br> 
<input value="" name="name" size="40"><br><small>e.g ExpoNG</small><br><br><input type="submit" name="import"></form> 
</br></div> 


<div> 
<center></div>

<div class="dl">DOWNLOAD</div>