<?php
// $connection = mysqli_connect('localhost', 'root');

// mysqli_select_db($connection, 'travle');

// $email = $_POST['email'];
// $pass = $_POST['password'];


// $data= "SELECT * FROM new_list";
// $query= mysqli_query($connection,$data);
// $data1= mysqli_fetch_array($query);

// while ($data1= mysqli_fetch_array($query)){
//     $data2= $_post["EMAIL"];
// }
// while ($data1= mysqli_fetch_array($query)){
//     $data3= $_post["PASSWD"];
// }

// if ($email == $data2) {
//     if($pass == $data3){
//     header('location:travel.php');
//     }else{
//         ?>
//         <script>
//             alert('Password Incorrect');
//         </script>
//         <?php
//     }else{
//         ?>
//         <script>
//             alert('ID Incorrect');
//         </script>
//         <?php
    }
}
// mysqli_query ($connection, $data, "$data2");


?>



<?php

$connection = mysqli_connect('localhost', 'root');

mysqli_select_db($connection, 'travle');

if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $password= $_POST['password'];

    $email_search= "SELECT * FROM new_list WHERE EMAIL='$email'";
    $query = mysqli_query($connection, $email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['PASSWD'];

        $pass_decode= password_verify($password, $db_pass);
        
        if($pass_decode){
            header('location:travel.php');
        }else{
            ?>
        <script>
            alert('Password Incorrect');
        </script>
        <?php
        }
    }else{
        ?>
        <script>
            alert('ID Incorrect');
        </script>
        <?php
    }
}

?>