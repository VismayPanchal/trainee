<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login | Instaclone</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="/Instagram/views/images/favicon.ico" type="image/x-icon">
        <link href="/Instagram/views/css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <style type="text/css">
            #forimg
            {
                position: relative;
                width: 70px;
                height: 70px;
                left:160px;

            }
            #rndmtext
            {
                position: relative;
                align-self: center;
                color: black;
                font-size: 20px;
               margin: 15px;
            }
            #rndmtext2
            {
                position: relative;
                align-self: center;
                color:gray;
                font-size: 15px;
                margin-bottom:15px;
                margin-top: 15px;
                margin-left: 30px;
                margin-right: 30px;
            }
        </style>
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
                        <div>
                            <img src="/Instagram/views/images/forgot.png"
                            id="forimg">
                        </div>
                          <div id="rndmtext">
                            <p><center>Trouble in Login?</center></p>
                        </div>
                        <div id="rndmtext2">
                            <p>Enter your email, or username and we'll send you a link to get back into your account.
                            </p>
                        </div>
                        <div class="login__input-container">
                            <input 
                                type="text"
                                name="username"
                                id= "username"
                                placeholder="Email or username"
                                required
                                class="login__input"
                            />
                        </div>
                      
                        <div class="login__input-container">
                            <input
                                type="submit"
                                value="Log in"
                                class="login__input login__input--btn"
                            />
                        </div>
                    </form>
                    <span class="login__divider">or</span>
                    <a class="login__fb-link" href="#">
                        <i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i> Log in with Facebook
                    </a>
                </div>
             
                <div class="login__section login__section--transparent login__app">
                    
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
        <script src="/Instagram/views/js/app.js"></script>
    </body>
</html>