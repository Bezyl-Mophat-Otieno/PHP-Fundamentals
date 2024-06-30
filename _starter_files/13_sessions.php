<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start();
// Lets create a login form with email and password
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == 'bezylmophatotieno@gmail.com' && $password == '123456'){
        echo "You are logged in";
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        echo "Session has been set";

        header('Location: /extras/dashboard.php');

    }else{
        echo "Incorrect email or password";
    }
}

?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <input type="email" name="email" id="email" placeholder="Enter Your Email">
    <input type="password" name="password" id="password" placeholder="Enter Your Password">
    <input type="submit" value="Submit" name="submit">
</form>