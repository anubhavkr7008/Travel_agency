<?php
$connection = mysqli_connect('localhost', 'root');


mysqli_select_db($connection, 'travle');

$firstname = mysqli_real_escape_string($connection, $_POST['first_name']);
$lastname = mysqli_real_escape_string($connection, $_POST['last_name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$ph = mysqli_real_escape_string($connection, $_POST['phone']);
$pass = mysqli_real_escape_string($connection, $_POST['password']);

$h_pass = password_hash($pass,PASSWORD_BCRYPT);
// $str_pass = password_hash($pass,PASSWORD_BCRYPT);

$emailquery= "SELECT * FROM new_list WHERE EMAIL='$email'";
$query= mysqli_query($connection, $emailquery);

$emailcount= mysqli_num_rows($query);

if ($emailcount>0){
    // echo "Email already exists";
    ?>
    
    <script>
        alert('Email already exists');
    </script>
    <?php
}else{
    $data = "INSERT INTO new_list (FNAME, LNAME, EMAIL, PHONE, PASSWD) VALUES ('$firstname', '$lastname', '$email', '$ph', '$h_pass')";
    mysqli_query ($connection, $data);
    header('location:login.php');
}

?>