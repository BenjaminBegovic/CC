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
    <header>
        <img src="logotip.png" width="300px" height="100px" alt="">
</header>
    <div class="wrapper">
    <div class="container">
    <img src="logotip.png" width="439px" height="130px" alt="">
        <div class="nav-item">
           <div class="nav-container">
               <nav>
                   <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">Contact</a></li>
                       <li><a href="#">FAQ</a></li>
                       <li><a href="#">About</a></li>
                   </ul>
               </nav>
           </div>
        </div>
        <?php
      include 'model.php';
      $model = new Model();
      $insert = $model->insert();
        ?>
        <form action="" method="POST">
            <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" required placeholder="Type you'r nickname">
            <br>
            <label for="">Email</label>
            <input type="email" name="email" required placeholder="Type you'r email address">
            <br>
            <label for="">Mobile</label>
            <input type="text" name="mobile" placeholder="type you'r phone member" >
            <br>
            <label for="">Address</label>
            <textarea name="address" id="" cols="" rows="3"></textarea>
            <button class="btn-btn-submit" type="submit" name="submit">Submit</button>
            <?php
            
if(isset($_GET["message"]) && !empty($_GET["message"])){
    echo "<p> " . $_GET["message"] . "</p>";
}
?>
            </div>

        </form>
    </div>
    </div>
    </div>

<footer>
    <h3>CopyRight: <span>Benjamin Begovic</span></h3>
</footer>
</body>
</html>