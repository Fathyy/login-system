<?php
session_start();
?>
<?php include_once "header.php";?>

    <nav>
        <div class="wrapper">
            <a href="index.php" class="login-text">Login System</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">About us</a></li>
                <li><a href="blog.php">Blog</a></li>
                <?php
                if(isset($_SESSION['useruid'])){
                    echo '<li><a href="profile.php">Profile page</a></li>';
                    echo '<li><a href="includes/logout.inc.php">Log out</a></li>';
                }
                else{
                    echo '<li><a href="signup.php">Sign up</a></li>';
                    echo '<li><a href="Login.php">Login</a></li>';

                }
                ?>
                
        
            </ul>
        </div>
    </nav>
    <?php include_once "footer.php";?>

    