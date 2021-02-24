<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login | Instaclone</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
       <link rel="icon" href="/Instagram/views/images/favicon.ico" type="image/x-icon">
        <link href="/Instagram/views/css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script>
            $(document).ready(function(){
                $('#sub').click(function(){
                    $pass = $('#password').val();
                    $con = $('#conpass').val();
                    if ($pass != $con)
                    {
                        alert("Password doesn't match.");
                        return false;
                    }
                    else
                        return true;

            
     
                //alert( $('#username').val());
                // var user = $('#username').val();
                // $.ajax({
                //     url:'check_user.php';
                //     type: 'POST';
                //     data: {'uname':user};
                //     success: function(response){
                //         if (response==0)
                //             true;
                //         else
                //             alert("username already exist.");
                //     }
                // });
                    });
            });
        </script>
    </head>
    <body class="no-padding">
        <main class="login">
            
            <section class="login__column">
                <div class="login__section login__sign-in">
                    <img 
                        src="/Instagram/views/images/logo.png"
                        alt="Logo"
                        title="Logo"
                        class="login__logo"
                    />
                    <!-- x   -->
                    <form method="POST" action="" class="login__form">
                        <div class="login__input-container">
                            <input 
                                type="text"
                                id="username"
                                name="username"
                                placeholder="Username"
                                required
                                class="login__input"
                            />
                        </div>
                        <div class="login__input-container">
                            <input type="email" id="email" name="email" placeholder="email" required 
                            class="login__input"/>
                        </div>
                        <div class="login__input-container">
                            <input 
                                type="password"
                                name="password"
                                id="password"
                                placeholder="Password"
                                required
                                class="login__input" 
                            />
                            
                        </div>
                        <div class="login__input-container">
                            <input 
                                type="password"
                                name="conpassword"
                                id="conpass"
                                placeholder="Confirm Password"
                                required
                                class="login__input" 
                            />
                            
                        </div>
                        <div class="login__input-container">
                            <input
                                type="submit"
                                value="Log in"
                                id = "sub"
                                class="login__input login__input--btn"
                            />
                        </div>
                    </form>
                    <span class="login__divider">or</span>
                    <a class="login__fb-link" href="#">
                        <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Log in with Facebook
                    </a>
                </div>
                <div class="login__section login__sign-up">
                    <span class="login__text">
                        Already have an account? 
                        <a href="login.php" class="login__link">
                            Log-in
                        </a>
                    </span>
                </div>
                <div class="login__section login__section--transparent login__app">
                    <span class="login__text">
                        Get the app.
                    </span>
                    <div class="login__appstores">
                        <img 
                            src="/Instagram/views/images/ios.png"
                            alt="iOS"
                            title="Get the app!"
                            class="login__appstore" 
                        />
                        <img 
                            src="/Instagram/views/images/android.png"
                            alt="Android"
                            title="Get the app!"
                            class="login__appstore" 
                        />
                    </div>
                </div>
            </section>
        </main>
        <footer class="footer">
            <nav class="footer__nav">
                <ul class="footer__list">
                    <li class="footer__list-item"><a href="#" class="footer__link">about us</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">support</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">blog</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">press</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">api</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">jobs</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">privacy</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">terms</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">directory</a></li>
                    <li class="footer__list-item"><a href="#" class="footer__link">language</a></li>
                </ul>
            </nav>
            <span class="footer__copyright">© 2017 instagram</span>
        </footer>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>