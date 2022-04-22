<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <?php
 include "model.php";
 $model = new Model();
 $id = $_REQUEST["id"];
 $row = $model->fetch_single($id);
 if(!empty($row)){
?>
        <div class="card">
            <h2>Single Record</h2>
           <br>
            <div class="card-body">
                <p><?php echo $row["name"]; ?></p>
                <p><?php echo $row["email"]; ?></p>
                <p><?php echo $row["mobile"]; ?></p>
                <p><?php echo $row["address"]; ?></p>
            </div>
        </div>
        <?php
 }else{
     echo "No data";
 } 
        ?>
    </div>
</body>
</html>