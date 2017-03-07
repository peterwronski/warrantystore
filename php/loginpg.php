<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 2/26/17
 * Time: 4:05 P
 */
session_start();?>

<?php include('header.html') ?>


<div class=" container">
    <div class="row">
        <div class=" col-lg-6 col-lg-offset-3 loginform">
            <?php if (isset($_SESSION['loginmessage'])){
                echo $_SESSION['loginmessage'];
            } ?>
            <?php if (isset($_SESSION['passmsg'])){
                echo $_SESSION['passmsg'];
            }
            ?>
            <?php if (isset($_SESSION['usernamemsg'])){
                echo $_SESSION['usernamemsg'];
            }
            ?>
            <?php if (isset($_SESSION['emailmsg'])){
                echo $_SESSION['emailmsg'];
            };
            ?>
            <?php if (isset($_SESSION['sqlmsg'])){
                echo $_SESSION['sqlmsg'];
            }
            ?>
            <?php if (isset($_SESSION['errormsg'])){
                echo $_SESSION['errormsg'];
            }
            ?>
            <ul class="nav nav-tabs">
                <li class="active col-lg-3"><a href="#login" data-toggle="pill">Login</a></li>
                <li class=" col-lg-3"><a href="#signup"  data-toggle="pill" >Sign up</a></li>
            </ul>
            <div class="tab-content">
                <div id="login" class="tab-pane fade in active">
                    <form id="login" action ="login.php" method="post">
                        <div class="form-group">
                            <label for="email1">Email address</label>
                            <input type="email" class="form-control" id="email1" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password" placeholder="Password">
                        </div>

                        <button type="submit" name="login-btn" class="btn btn-default">Submit</button>
                    </form>
                </div>
                <div id="signup" class="tab-pane fade">
                    <form id="signup" action ="signup.php" method="post">
                        <div class="form-group">
                            <label for="email1">Email address</label>
                            <input type="email" class="form-control" id="email1" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label for="password1">Password</label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirm Password</label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="Password">
                        </div>

                        <button type="submit" name ="signup-btn" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    </body>
    </html>