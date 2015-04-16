<?php



if(isset($_POST["submit"])) {
	$target_dir = "upload/";
	for($j = 0; $j < sizeof($_FILES["fileToUpload"]["name"]) ; $j++){
	for($i = 0; $i < sizeof($_FILES["fileToUpload"]["name"][$j]) ; $i++){
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"][$j][$i]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// cek apakah benar gambar

		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"][$j][$i]);
		    if($check !== false) {
		        // echo "File gambar - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File bukan gambar";
		        $uploadOk = 0;
		    }

		// cek apakah file sudah ada 
		echo "file gambar ".$_FILES["fileToUpload"]["name"][$j][$i]."<br/>"; 
		if (file_exists($target_file)) {
		    echo "Sorry, file sudah ada.<br/>";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["fileToUpload"]["size"][$j][$i] > 500000) {
		    echo "Sorry, ukuran file terlalu besar.<br/>";
		    $uploadOk = 0;
		}
		// format file yang di ijinkan
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" && $imageFileType != "doc" && $imageFileType != "docx"
		&& $imageFileType != "pdf" && $imageFileType != "xls" && $imageFileType != "xlsx") {
		    echo "Sorry, file tidak sesuai<br/>";
		    $uploadOk = 0;
		}
		// Check apakah value $uploadOk = 0 ? jika iya berarti error 
		if ($uploadOk == 0) {
		    echo "File anda tidak terupload.<br/><br/>";
		// Ok
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$j][$i], $target_file)) {
		        echo "file ". basename( $_FILES["fileToUpload"]["name"][$j][$i]). " telah berhasil di upload.";
		    } else {
		        echo "Sorry, terdapat error pada proses upload.<br/><br/>";
		    }
		}
	}
	}
}
?>

<style>
input[type="file"] {
	align-items: baseline;
	color: inherit;
	text-align: start;
	border-radius: 3px;
	border: solid 1px #cdcdcd;
	background-color: yellow;
}
</style>
