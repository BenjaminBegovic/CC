<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="records.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="row">
            <h1>Process...</h1>
            <hr>
         
    </div>
    <div class="row">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                 include 'model.php';
                 $model = new Model();
                 $rows = $model->fetch();
                 $i = 1;
                 if(!empty($rows)){
                     foreach($rows as $row){

                  
                ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["mobile"]; ?></td>
                    <td><?php echo $row["address"]; ?></td>
                    <td>
                    <a class="blue"href="read.php?id=<?php echo $row["id"]; ?>">READ</a>
                    <a class="red"href="delete.php?id=<?php echo $row["id"]; ?>">DELETE</a>
                    <a class="green"href="edit.php?id=<?php echo $row["id"]; ?>">EDIT</a>
                    </td>
                </tr>
                <?php

                }
                }else{
                    echo "no data";
                }
            ?>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>