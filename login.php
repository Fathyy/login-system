<?php $title ='login page';
include_once('includes/header.php');
?>
<div class="container">
<div class="d-flex flex-column justify-content-center align-items-center mt-5">
<h2>Log in</h2>
<form action="includes/login.inc.php" method="post" class="d-flex flex-column">
        <input type="text" name="uid" placeholder="Username/Email" class="m-2 form-control">
        <input type="password" name="pwd" placeholder="Your Password" class="m-2 form-control">
        <button type="submit" name="submit" class="m-2 btn btn-success form-control">Log in </button>
        
</form>
</div>
</div>
<?php
if(isset($_GET['error'])){
        if($_GET['error'] == "emptyinput"){
                echo "<p> Fill in all fields!</p>";
        }
        else if($_GET['error'] == "wronglogin"){
        echo "<p>Incorrect login information!</p>";    
        }

}
?>

<?php include_once('includes/footer.php');?>
    