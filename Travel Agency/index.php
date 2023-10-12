<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
        background-image: url('1.png');
        color: #ff9898;;
		font-family: 'Roboto', sans-serif;
        text-align: center;
        }
        .signup-form h1 {
		color: #ff9898;;
		font-weight: bold;
        margin-top: 40px;
        margin-bottom: 30px;
        font-size: 3.5rem;
        text-align: center;
        }
        .box {
            border: 1px solid #ff9898;;
            height: 750px;
            width: 600px;
            margin: auto;
            margin-top: 100px;
            text-align: center;

        }
        .bar{
            /* margin: top 15px; */
            padding: 20px;
            text-align: center;
            /* font-size:20px; */

        }
        .form-control{
            font-size:17px;
            padding: 10px;
            margin: top 15px;
        }
        p{
            text-align: center;
        }
        .btn{
            padding: 10px
        }
        .hint-text{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
    <div class="signup-form">
        <div class="box">
            <form action="signupcode.php" method="POST">
                <h1>Sign Up</h1>
                <p>Please fill in this form to create an account!</p>
                <hr>
                <div class="row">
                    <div class="bar"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
                    <div class="bar"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>            	
                </div>
                <div class="bar">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <div class="bar">
                    <input type="tel" class="form-control" name="phone" placeholder="Number" required="required">
                </div>
                <div class="bar">
                    <input type="password" class="form-control" name="password" placeholder="Password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                </div>        
                <div class="bar">
                    <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn"> <a href="login.php"></a>Sign Up</button>
                </div>
            </form>
        </div>
        <div class="hint-text">Already have an account? <a href="login.php">Login here</a></div>
    </div>
</body>
</html>