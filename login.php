 
 <?php

session_start();

   
           $conn = mysqli_connect("localhost", "root", "", "travel_db");
       
           if($conn === false){
               die("ERROR: Could not connect" . mysqli_connect_error());
           }
       
           $username = $_POST['email'];
           
           $password = $_POST['password'];
           
           mysqli_select_db($conn, "travel_db");
       
           $sqlq = "select * from users where email = '$username' && password = '$password ' ";
       
           $result = mysqli_query($conn,$sqlq);
           
           $num = mysqli_num_rows($result);

           if ($num == 1) {
               header('location:home.php');
               exit;
           } else {
               echo"<script>alert('Invalid username or password'); 
               window.location.href='login.html';
               </script>";
               exit;
              
              
           }
           
       
       
   

        
       ?>