 <?php
session_start();
//print_r($_SESSION);
?>   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Feed | Instaclone</title>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="/Instagram/views/images/favicon.ico" type="image/x-icon">
        <link href="/Instagram/views/css/style.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    </head> 
       <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){

    $('.heart').click(function(){
       
        var pid = $(this).data('id');
        // alert(pid);
       // $_SESSION['post_id']=pid;
        var arr={post_id:pid};
        $.ajax({
            url:'/Instagram/models/like.php',
            data: {'post_id':pid},
            type: 'POST',
           

            //data: JSON.stringify(arr),
            //contentType: 'application/json; charset=utf-8',
            //dataType: 'json',
            success:function(response)
            {
                $('#get_lk').text(response);
               // alert(response);
            }
        });
    });
});
    </script>

    <body>
        <nav class="navigation">
            <a href="feed.php">
                <img 
                    src="/Instagram/views/images/navLogo.png"
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
                <a href="explore" class="navigation__link">
                    <i class="fa fa-compass"></i>
                </a>
                <a href="#" class="navigation__link">
                    <i class="fa fa-heart-o"></i>
                </a>
                <a href="view_profile" class="navigation__link">
                    <i class="fa fa-user-o"></i>
                </a>
            </div>
        </nav>
        <main class="feed">
            <?php
            foreach($result as $d)

           {?>
            <section class="photo">
                <header class="photo__header">
                    <div class="photo__header-column">
                        <img
                            class="photo__avatar"
                            src="/Instagram/views/profiles/<?php echo  $d['user_dp'];?>"
                        />
                    </div>
                    <div class="photo__header-column">
                        <span class="photo__username"><?php echo $d['user_name']; ?></span>
                        
                    </div>
                </header>
                <div class="photo__file-container">
                    <img
                        class="photo__file"
                        src="/Instagram/views/post_upl/<?php echo $d['post'];?>"
                    />
                </div>
                <div class="photo__info">
                    <div class="photo__icons">
                        <span class="photo__icon" >
                            <i class="fa fa-heart-o heart fa-lg" data-id="<?= $d['post_id']; ?>"></i>
                        </span>
                        <span class="photo__icon">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                    </div>
                    <label id="get_lk"></label> likes
                    <ul class="photo__comments">
                        <li class="photo__comment">
                            <span class="photo__comment-author"><?php echo  $d['user_name'];?></span><?php echo  $d['caption'];?>
                        </li>
                       <!--  <li class="photo__comment">
                            <span class="photo__comment-author">lynn</span>no is not!

                            post comments
                        </li> -->
                    </ul>
                    <span class="photo__time-ago">11 hours ago</span>
                    <div class="photo__add-comment-container">
                        <textarea placeholder="Add a comment..." class="photo__add-comment"></textarea>
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                </div>
            </section>
           <?php
       }
       ?>
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