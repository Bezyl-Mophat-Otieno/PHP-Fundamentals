<?php
  /* ----------- File upload ---------- */

  if(isset($_POST['submit'])){
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif',];
    if(!empty($_FILES['file']['name'])){
      $error_message = "";
      $file_name = $_FILES['file']['name'];
      $file_size = $_FILES['file']['size'];
      $file_tmp = $_FILES['file']['tmp_name'];
      $file_type = $_FILES['file']['type'];
      $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
      $target_dir = "./uploads/{$file_name}";
      
      if(in_array($file_extension, $allowed_extensions)){
        $error_message = "<p style='color:green'>File uploaded successfully</p>";
        if(move_uploaded_file($file_tmp, $target_dir)){
          echo "File uploaded successfully";
        }
      }else{
        print_r($file_extension);
        $error_message = "<p style='color:red'>File type not allowed</p>";
      }
    }else{
      $error_message = "<p style='color:red'>Please select a file to upload</p>";
    }
    
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php print_r ($error_message ?? null) ?>
    <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'] ; ?>">
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload" name="submit">
    </form>
</body>

</html>