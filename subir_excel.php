<?php
include_once("class.curl.php") ;
include_once("class.extract.php") ;
require_once "excel/Classes/PHPExcel.php";
require_once "excel/Classes/PHPExcel/IOFactory.php";
	/*
This script is use to upload any Excel file into database.
Here, you can browse your Excel file and upload it into 
your database.

Download Link: http://www.discussdesk.com/import-excel-file-data-in-mysql-database-using-PHP.htm

Website URL: http://www.discussdesk.com
*/

$uploadedStatus = 0;
	if ( isset($_POST["submit"]) ) {
		if ( isset($_FILES["file"])) {
			//if there was an error uploading the file
			if ($_FILES["file"]["error"] > 0) {
				echo "Codigo de error: " . $_FILES["file"]["error"] . "<br/>";
			}else {
				if (file_exists($_FILES["file"]["name"])) {
					unlink($_FILES["file"]["name"]);
				}
				$storagename = "discussdesk.xlsx";
				move_uploaded_file($_FILES["file"]["tmp_name"],  $storagename);
				$uploadedStatus = 1;
			}
		} else {
			echo "No ha seleccionado un archivo<br />";
		}
	}

?>

<html>

<head>
<title>Subir Archivos</title>
	<meta name="description" content="This tutorial will learn how to import excel sheet data in mysql database using php. Here, first upload an excel sheet into your server and then click to import it into database. All column of excel sheet will store into your corrosponding database table."/>
	<meta name="keywords" content="import excel file data in mysql, upload ecxel file in mysql, upload data, code to import excel data in mysql database, php, Mysql, Ajax, Jquery, Javascript, download, upload, upload excel file,mysql"/>

</head>
<body>
	<table width="600" style="margin:115px auto; background:#f8f8f8; border:1px solid #eee; padding:10px;">
	<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
		<p>Seleccione archivo a subir</p>
		<input type="file" name="file" id="file" />
		<input type="submit" name="submit" /></td>
	</form>
	
<?php if($uploadedStatus==1){
		echo "<p>Archivo a subido perfectamente...</p>";
		?><a href="connect.php">Por favor, de click aqui..</a>
			
   <? } ?>
	
</body>
</html>