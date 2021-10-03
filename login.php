<?php
include_once 'navbar.php';
?>
<main>
<div class="background">
    <h1 class="page-title">Login</h1>

    <div class="signup-form">
        <form action="includes/login.inc.php" method="post" class="myForm">
            <?php
            if (isset($_GET["signup"])) {
                echo "<div class='success'>";
                echo "<p>User registered successfully</p>";
                echo "</div>";
            }
            ?>
            <div class="errors">
    <?php
    if(isset($_GET['error'])){
        if($_GET['error']=="emptyInputs"){
            echo "<p class='msg'>Some fields are missing.</p>";
        }
        if($_GET['error']=="userdoesnotexist"){
            echo "<p class='msg'>User does not exists</p>";
        }
        if($_GET['error']=="incorrectpassword"){
            echo "<p class='msg'>Incorrect password</p>";
        }
        if($_GET['error']=="queryError"){
            echo "<p>Query Error</p>";
        }
        if($_GET['error']=="inactiveaccount"){
            echo "<p>Your account is deactivated</p>";
        }
    }

    if(isset($_GET['user'])){
        echo "<p class='msg'>User is not authorized</p>";
    }
    ?>
     <script>
        $('.msg').delay(3000).fadeOut();
    </script>
    
    </div>
            <div class="form-element">

                <div class="form-element">
                    <label for="username" class="form-label">Username</label><br />
                    <input type="text" id="username" name="username1" />
                </div>

                <div class="form-element">
                    <label for="password" class="form-label">Password</label><br />
                    <input type="password" id="password" name="password1" />
                </div>
                <div class="">
                    <button type="submit" class="btn-submit" name="submit">Login</button>
                </div>
        </form>

    </div>
</div>
</main>
<?php
include_once('footer.php');
?>