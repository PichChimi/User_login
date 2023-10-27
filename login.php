<?php
include('layout/header.php');

if(isset($_SESSION['login']) && $_SESSION['login'] == 1 ){
    header('location: index.php');
}

?>
    <body>
        <section class="container forms">
            <div class="form login">
                <div class="form-content">
                    <header>Login</header>
                    <form action="<?php baseUrl('action/action_login.php') ?>" method="post">
                     <?php  
                     if(isset($_SESSION['error'])){
                        echo ' <div class="alert alert-danger" role="alert">
                        '. $_SESSION['error'] .'
                      </div>';
                      unset($_SESSION['error']);
                     }
                     ?>
                        <div class="field input-field">
                            <input type="text" name="number" placeholder="number" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button name="login">Login</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="<?php baseUrl('assets/img/google.png') ?>" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>

            <!-- Signup Form -->

            <div class="form signup">
                <div class="form-content">
                    <header>Signup</header>
                    <form action="<?php baseUrl('action/register.php') ?>" method="post">
                    <?php  
                     if(isset($_SESSION['success'])){
                        echo ' <div class="alert alert-danger" role="alert">
                        '. $_SESSION['success'] .'
                      </div>';
                      unset($_SESSION['success']);
                     }
                     ?>
                        <div class="field input-field">
                            <input type="text" name="number" placeholder="number" class="input">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="password" placeholder="Create password" class="password">
                        </div>

                        <div class="field input-field">
                            <input type="password" name="confirm" placeholder="Confirm password" class="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="field button-field">
                            <button name="signup">Signup</button>
                        </div>
                    </form>

                    <div class="form-link">
                        <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                    </div>
                </div>

                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="#" class="field google">
                        <img src="<?php baseUrl('assets/img/google.png') ?>" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>
        </section>

        <!-- JavaScript -->
        <script src="assets/js/script.js"></script>
    </body>
</html>