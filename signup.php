<?php $title ='Signup page';
include_once('includes/header.php');
?>
       
<div class="d-flex flex-column justify-content-center align-items-center mt-5">
<h2>Sign up</h2>
<form action="includes/signup.inc.php" method="post" class="d-flex flex-column">
    <input type="text" name="name" placeholder="Full name" class="m-2 form-control">
    <input type="text" name="email" placeholder="Your email" class="m-2 form-control">
    <input type="text" name="uid" placeholder="Username" class="m-2 form-control"> 
    <input type="password" name="pwd" placeholder="Your Password" class="m-2 form-control">
    <input type="password" name="pwdrepeat" placeholder="Repeat Password" class="m-2 form-control">
    <button type="submit" name="submit" class="m-2 btn btn-success form-control">Sign up</button>
        
</form>
</div>
<?php
if(isset($_GET['error'])){
    if($_GET['error'] == "emptyinput"){
            echo "<p> Fill in all fields!</p>";
    }
    else if($_GET['error'] == "invaliduid"){
        echo "<p> Choose a proper username!</p>";    
    }

    else if($_GET['error'] == "invalidemail"){
        echo "<p> Choose a proper email!</p>";    
    }

    else if($_GET['error'] == "passworddontmatch"){
        echo "<p>Passwords dont match!</p>";    
    }

    else if($_GET['error'] == "stmtfailed"){
        echo "<p>Something went wrong try again!</p>";    
    }

    else if($_GET['error'] == "usernametaken"){
        echo "<p>Username already taken!</p>";    
    }

    else if($_GET['error'] == "none"){
        echo "<p>You have signed up!</p>";    
    }
}

?>
        

        

<?php
include_once('includes/footer.php');
?>
    