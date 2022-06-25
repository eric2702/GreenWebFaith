
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- JS -->
    <!-- <script src="tutorial.js"></script> -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!-- Custom CSS -->
    <link href="tutorialDIY.css" rel="stylesheet" >
    <title>Tutorial DIY</title>
</head>
<style>
    .effect {
    text-shadow: 0px 0px 15px #70a99d, 0px 0px 17px #70a99d;
    font-family: 'Rancho', cursive;
    text-align: center;
    color: white;
    font-size: 100px;
}
    body {
    /* background-color: #094b65; */
    background-image: url("assets/bg.png");
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
    /*display: flex;*/
}
</style>
<body>
<?php include('navbar.php'); ?>

<!-- <img class="bg" src="assets/forest.jpg" alt=""> -->
<section>
<div class="container d-flex justify-content-center">
<div class="row">
            <div class="col-12">
                <h1 class="effect">Tutorial</h1>
            </div>
        </div>
</div>
<div class="container">
  <h2 style="display: flex; justify-content: center; padding-top: 8%; color: #094b65 !important;"><b>Here Is A Few DIY Tutorial To Follow!</b></h2>

</div>
<ul class="navigation">
    <li id="show" onclick="go('https://www.youtube.com/embed/dS3tvvx4LIg?autoplay=1&enablejsapi=1')"><a href="#slider"><img class="img-fluid" src="http://img.youtube.com/vi/dS3tvvx4LIg/0.jpg" alt=""></a></li>
    <li id="show" onclick="go('https://www.youtube.com/embed/qST-tWStGnk?autoplay=1&enablejsapi=1')"><a href="#slider"><img class="img-fluid" src="http://img.youtube.com/vi/qST-tWStGnk/0.jpg" alt=""></a></li>
    <li id="show" onclick="go('https://www.youtube.com/embed/D-MbEbhT3fM?autoplay=1&enablejsapi=1')"><a href="#slider"><img class="img-fluid" src="http://img.youtube.com/vi/D-MbEbhT3fM/0.jpg" alt=""></a></li>
</ul>

<div id="hide" style="display:none;">
<div class="video-container d-flex justify-content-center align-items-center">
    <iframe id="slider" width="560" height="315" src="https://www.youtube.com/embed/dS3tvvx4LIg?autoplay=1&enablejsapi=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
</div>
</div>
</section>



        
    <script>
        function go(loc) {
            document.getElementById('slider').src = loc;
            var x = document.getElementById("hide");
                if (x.style.display === "none") {
                    x.style.display = "block";
                }
        }
    </script>
    
</body>
</html>