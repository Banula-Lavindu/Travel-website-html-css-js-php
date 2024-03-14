 
 <?php

 session_start();

    
            $conn = mysqli_connect("localhost", "root", "", "travel_db");
        
            if($conn === false){
                die("ERROR: Could not connect" . mysqli_connect_error());
            }
        
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            mysqli_select_db($conn, "travel_db");
        
            $sqlq = "select * from users where username = '$username' ";
        
            $result = mysqli_query($conn,$sqlq);
            
            $num = mysqli_num_rows($result);

            if ($num == 1) {
                echo" username Already taken";
            } else {
                $reg = "insert into users(username,email,password) values ('$username','$email','$password') ";
                mysqli_query($conn, $reg);
                header('location: login.html ');
                exit;
               
               
            }
            
        
        
    

         
        ?>