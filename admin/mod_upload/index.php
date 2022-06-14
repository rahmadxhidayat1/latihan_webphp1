<?php 
    include_once("uploadCtrl.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/bootstrap5/css/bootstrap-grid.min.css">
</head>
<body>
    <form method="POST" action="mod_upload/uploadCtrl.php" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            <input type="file" name="urlfile" id="urlfile" class="form-control">
        </div>
        <div class="col-md-2">
            <button type="submit" name="btnupload" class="btn btn-primary">simpan</button>
        </div>
    </div>
    </form>
</body>
<script src="../../assets/bootstrap5/js/bootstrap.min.js"></script>
</html>
