<?php include_once('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <style>
        table{
            border-collapse: collapse;
            height: 200px;
            width: 600px;
            text-align: center;
        }

    </style>
</head>
<body>
    <h2>STUDENT LIST</h2>
    <?php 

      $data = $con -> query("SELECT * FROM students");
    //   while($row = $data->fetch_assoc()){
    //     echo $row['name'], "<br>";
    //   }
   echo '<table border=1">';
   ?>        <tr style="background-color: aqua;">
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
        </tr>
        <?php
    foreach($data as $data){ ?>
        

        <tr>
            <td><?php echo $data['id'] ."<br>";?> </td>
            <td><?php echo $data['name'] ."<br>";?> </td>
            <td><?php echo $data['email'] ."<br>";?> </td>
            <td><?php echo $data['phone'] ."<br>";?> </td>
        </tr>
        <?php  }?>
    </table>
   
</body>
</html>