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
    <div class="background">
        <div class="row">
            <h1>TEST DEVELOP</h1>
            <hr>
    </div>
    <div class="wrapper">
    <div class="container">
        <?php
      include 'model.php';
      $model = new Model();
      $id = $_REQUEST["id"];
      $row = $model->edit($id);
      if(isset($_POST["update"])){
        if(isset($_POST["name"]) 
        && isset($_POST["email"]) 
        && isset($_POST["mobile"]) 
        && isset($_POST["address"])){
     
     
         if(!empty($_POST["name"])
          && !empty($_POST["email"]) 
          && !empty($_POST["mobile"]) 
          && !empty($_POST["address"])){
     
        $data["id"] = $id;
        $data["name"] = $_POST ["name"];
        $data["mobile"] = $_POST ["mobile"];
        $data["email"] = $_POST ["email"];
        $data["address"] = $_POST ["address"];
     
         $update = $model->update($data);
        }else{
            header("Location:edit.php?id=$id");
        }
        }
    }
        ?>
        <form action="" method="POST">
            <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" value="<?php echo $row["name"]; ?>"required>
            <br>
            <label for="">Email</label>
            <input type="email" name="email"value="<?php echo $row["email"]; ?>" required>
            <br>
            <label for="">Mobile</label>
            <input type="text" name="mobile"value="<?php echo $row["mobile"]; ?>" >
            <br>
            <label for="">Address </label>
            <textarea name="address" value="<?php echo $row["address"]; ?>"id="" cols="" rows="3"></textarea>
            <button type="update" name="update">update</button>
            <?php
if(isset($_GET["message"]) && !empty($_GET["message"])){
    echo "<p> " . $_GET["message"] . "</p>";
}
?>
 <a class="blue"href="records.php?id=<?php echo $row["id"]; ?>">READ</a>
            </div>

        </form>
       


    </div>
    </div>
    </div>
</body>
</html>