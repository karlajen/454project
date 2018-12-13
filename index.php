<?php
        include_once 'header.php';
?>

<section class="main-content">
        <div class="main">      
        </div>
</section>


  <div class="login-form">
                                                        <?php
                                                if(isset($_SESSION['user_id']))
                                                {echo '<a href="account.php">' . 'Welcome, ' . $_SESSION['user_fname'] . '</a><form action="logout.action.php" method="POST">
                                                                <button type="submit" name="logout_button">Log Out</button>
                                                                </form>';
                                                }
                                                else

                                                {

                                                        echo ' <font size=6><font color=black>Login</font></font>
                                                                 <form action="login.action.php" method="POST"> <div class="login_err">'. $_SESSION['login_error']. '</div>
                                                                <input type="text" name="login_user" placeholder="Enter Username">
                                                                <input type="password" name="login_password" placeholder="Enter Password">
                                                                <button type="submit" name="login_header_submit">Login</button></form>
                                                         <form action="register.php" method="POST"><button type="register" name="register">Register</button>';
                                                                $_SESSION['login_error']="";



        }
                                                ?>



                                        </div>



<?php
        include_once 'footer.php';
?>