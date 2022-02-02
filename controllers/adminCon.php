<?php
	$servername = "localhost";
	$db_username="root";
	$db_password="";
    $db_name="p_inventory";
    $conn = mysqli_connect($servername,$db_username,$db_password,$db_name);

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $designation = $_POST['designation'];
        $query = "SELECT * FROM stuffs WHERE email='".$email."' and password='".$password."' and designation='".$designation."'";
        $result= mysqli_query($conn,$query);
        if($result){
            while($row=msqli_fetch_array($result)){
                echo '<script>alert("Login Successfully as '.$row['designation'].'")</script>';
            }
            if(mysqli_num_rows($result)>0){
                ?>
                header("Location: adashboard.php");
                
                <?php
            }
            else{
                ?>
                header("Location: dashboard.php");
                <?php
            }

        }
        else{
            echo '<script>alert("Login Failed!Try Again")</script>';
        }

    }

?>