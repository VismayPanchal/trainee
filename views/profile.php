<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Profile | Instaclone</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link href="css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head>
    <body>
        <nav class="navigation">
            <a href="feed.php">
                <img 
                    src="images/navLogo.png"
                    alt="logo"
                    title="logo"
                    class="navigation__logo"
                />
            </a>
            <div class="navigation__search-container">
                <i class="fa fa-search"></i>
                <input type="text" placeholder="Search">
            </div>
            <div class="navigation__icons">
                <a href="explore.php" class="navigation__link">
                    <i class="fa fa-compass"></i>
                </a>
                <a href="#" class="navigation__link">
                    <i class="fa fa-heart-o"></i>
                </a>
                <a href="profile.php" class="navigation__link">
                    <i class="fa fa-user-o"></i>
                </a>
            </div>
        </nav>
        <main class="profile-container">
            <section class="profile">
                <header class="profile__header">
                    <div class="profile__avatar-container">
                        <img 
                            src="images/avatar.jpg"
                            class="profile__avatar"
                        />
                    </div>
                    <div class="profile__info">
                        <div class="profile__name">
                            <h1 class="profile__title">serranoarevalo</h1>
                            <a href="edit-profile.php" class="profile__button u-fat-text">Edit profile</a>
                            <i class="fa fa-cog fa-2x" id="cog"></i>
                        </div>
                        <ul class="profile__numbers">
                            <li class="profile__posts">
                                <span class="profile__number u-fat-text">10</span> posts
                            </li>
                            <li class="profile__followers">
                                <span class="profile__number u-fat-text">40</span> followers
                            </li>
                            <li class="profile__following">
                                <span class="profile__number u-fat-text">134</span> following
                            </li>
                        </ul>
                        <div class="profile__bio">
                            <span class="profile__full-name u-fat-text">Nicolás Serrano Arévalo</span>
                            <p class="profile__full-bio">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit rerum consequuntur aperiam, dicta delectus nihil voluptas explicabo sapiente quisquam. Eius ipsam asperiores excepturi maiores, atque voluptatum sed fuga esse molestiae.</p>
                            <a href="http://serranoarevalo.com" class="profile__link u-fat-text">serranoarevalo.com</a>
                        </div>
                    </div>
                </header>
                <div class="profile__pictures">
                    <a href="image-detail.php" class="profile-picture">
                        <img
                            src="images/feedPhoto.jpg"
                            class="profile-picture__picture"
                        />
                        <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                            <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                        </div>
                    </a>
                    <a href="image-detail.php" class="profile-picture">
                        <img
                            src="images/feedPhoto.jpg"
                            class="profile-picture__picture"
                        />
                        <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                            <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                        </div>
                    </a>
                    <a href="image-detail.php" class="profile-picture">
                        <img
                            src="images/feedPhoto.jpg"
                            class="profile-picture__picture"
                        />
                        <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                            <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                        </div>
                    </a>
                    <a href="image-detail.php" class="profile-picture">
                        <img
                            src="images/feedPhoto.jpg"
                            class="profile-picture__picture"
                        />
                        <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                            <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                        </div>
                    </a>
                    <a href="image-detail.php" class="profile-picture">
                        <img
                            src="images/feedPhoto.jpg"
                            class="profile-picture__picture"
                        />
                        <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                            <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                        </div>
                    </a>
                    <a href="image-detail.php" class="profile-picture">
                        <img
                            src="images/feedPhoto.jpg"
                            class="profile-picture__picture"
                        />
                        <div class="profile-picture__overlay">
                            <span class="profile-picture__number">
                                <i class="fa fa-heart"></i> 450
                            </span>
                            <span class="profile-picture__number">
                                <i class="fa fa-comment"></i> 39
                            </span>
                        </div>
                    </a>
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
        <div class="popUp">
            <i class="fa fa-times fa-2x" id="closePopUp"></i>
            <div class="popUp__container">
                <div class="popUp__buttons">
                    <a href="index.php" class="popUp__button">Log Out</a>
                    <a href="#" class="popUp__button" id="cancelPopUp">Cancel</a>
                </div>
            </div>
        </div>
        <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
        <script src="js/app.js"></script>
    </body>
</html>