
    <?php 
        include_once('dbconfig.php');
            $id = $_GET['id'];

            $con -> query("DELETE FROM students WHERE id = '$id'");

            if($con->affected_rows){
                header('location:index.php');
            }
        
    ?>
