<?php 
$title = 'Explore travel destinations from your friends\' photos!';
include 'include\header.php'
 ?>
   <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                FB.init({appId: '334745573285940', status: true, cookie: true, xfbml: true});
 
                /* All the events registered */
                FB.Event.subscribe('auth.login', function(response) {
                    // do something with response
                    login();
                });
                FB.Event.subscribe('auth.logout', function(response) {
                    // do something with response
                    logout();
                });
 
                FB.getLoginStatus(function(response) {
                    if (response.session) {
                        // logged in and connected user, someone you know
                        login();
                    }
                });
            };
            (function() {
                var e = document.createElement('script');
                e.type = 'text/javascript';
                e.src = document.location.protocol +
                    '//connect.facebook.net/en_US/all.js';
                e.async = true;
                document.getElementById('fb-root').appendChild(e);
            }());
 
            function login(){
               window.location="map.php";
            }
            function logout(){
              window.location="index.php";
            }

        </script>
 <div class="main-content">
        <header class="landing-header">
            <a href="" title="TravelExpo">TravelExpo is a facebook application that helps you to explore travel destinations through your friends travel photos.
            </a>
        </header>
    <div class="container">

        <div class="hero-unit">
            <div class="row-fluid">
                 <div class="span4">
                    <img class="thumbnail" src="img/example.jpg" alt="">
            </div>
                <div class="span8">
                    <h1>Explore the best travel destinations</h1>
                    <p>through your friends facebook photos and make it more fun to plan future trips!</p>
                    <p><fb:login-button autologoutlink="true" perms="email,user_birthday,status_update,publish_stream"></fb:login-button></p>
                </div>
               
        </div>
    </div>
    <div class="well row-fluid landing-des">
        <div class="span4">
            <h2>Map</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
        <div class="span4">
            <h2>Friends</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
        <div class="span4">
            <h2>Fun</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>
        </div>
    </div>


</div> <!-- /container -->
<?php include 'include/footer.php' ?>
