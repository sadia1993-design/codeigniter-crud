<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo form_open_multipart('File_upload/upload'); ?>

    <?php 
       echo form_upload('userfile'); 
       echo "<span style='color:red'>". @$msg . "</span>";
    ?>

    <?php echo form_submit('upload', 'save'); ?>

    <?php echo form_close(); ?>



    <img src="<?php echo @$file_name; ?>" alt="">
</body>
</html>