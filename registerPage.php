<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="register.css">
    <link rel="icon" href="icons-stocks.png">

</head>
<body class="center-content">

    <div class="container">
        
        <div class="logo center-content" title='Investor community site'>
            <img src="data:image/png;base64,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">
        </div>

        <div class="org-name center-content">
            
            <h4>Investor Community</h4>
            <p>new way for investment</p>

        </div>

        <div class="login-info">

            <form action='registerPage.php' method='POST'>

                <i class="fa fa-user" aria-hidden="true"></i>
                <input name='FName-User' type="text" placeholder="First name">
                
                <i class="fa fa-address-book" aria-hidden="true"></i>
                <input name='LName-User' type="text" placeholder="Last name">
                
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <input name='Email-User' type="email" placeholder="Enter your email">
                
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input name='Password-User' type="password" placeholder="Enter your password">

                <input  type="submit" value="Sign in">
            </form>
        </div>
    </div>

    <?php

        if(  isset($_POST['FName-User']) && isset($_POST['LName-User']) && isset($_POST['Email-User']) && isset($_POST['Password-User'])   ){
            
            $firstName = $_POST['FName-User'];
            $lastName = $_POST['LName-User'];

            $email = $_POST['Email-User'];
            $password = $_POST['Password-User'];

            $connectionDatabase = mysqli_connect("localhost", "root", "", "investorcommunity");

            if($connectionDatabase){
                
                $query = "INSERT INTO `signin-user` (Fname, Lname, Email, Password) VALUES ('$firstName', '$lastName', '$email', '$password')";
                $connectionQuery = mysqli_query($connectionDatabase, $query);

                if($connectionQuery){
                
                    echo '<script>';
                    echo "window.alert('Added successful!')";
                    echo '</script>';
            
                }else{
                    echo '<script>';
                    echo "window.alert('Sorry but you have an error in addition data process')";
                    echo '</script>';
                }
                
            }else{
                echo '<script>';
                echo "window.alert('Error connecting to database!')";
                echo '</script>';
            }


            mysqli_close($connectionDatabase);
        }

?>

</body>
</html>