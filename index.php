<!DOCTYPE html>
<html>
    <head>

        <title>Andy Davis</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/base.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



    </head>

    <body>
<!--navbar-->
<?php include("include/nav.php"); ?>

<!--header-->
        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <h1>Codez Academy</h1>
                        <h2>We teach coding skills to everyone</h2>
                        <button type="button" class="btn btn-light mt-3">Sign up Today  <i class="fas fa-caret-right"></i></button>
                            
                    </div>
                    <div class="col-6">
                            <img src="assets/img/fingerprint.svg" class="img-fluid">
                    </div>
                </div>
            </div>
        </header>

<!--header-->
<section class="mt--16 text-center">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="box">
                    <img src="assets/img/portfolio.svg" class="img-fluid">
                    <h3>I'm</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque amet exercitationem                   </p>
                    <a href="#">Read More </a>
                </div>
            </div>
            <div class="col-3">
                <div class="box">
                        <img src="assets/img/security.svg" class="img-fluid">
                    <h3>learning</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque amet exercitationem                   </p>
                    <a href="#">Read More </a>
                </div>
            </div>
            <div class="col-3">
                <div class="box">
                        <img src="assets/img/sport.svg" class="img-fluid">
                     <h3>awesome</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque amet exercitationem                   </p>
                     <a href="#">Read More </a>
                </div>
            </div>
            <div class="col-3">
                <div class="box">
                     <img src="assets/img/404.svg" class="img-fluid">
                     <h3>code</h3>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque amet exercitationem                   </p>
                     <a href="#">Read More </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!--about-->
<section class="bg-white" id="about">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2> About us</h2>
                <hr class="margin-top: 1rem;
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid rgb(97, 36, 246)">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero minima quos dolor mollitia ducimus id</p>
            </div>
        </div>
    <div class="p-tb-50">
        <div class="row">
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-3">
                            <h2><i class="fas fa-atom fa-3x fa-color"></i></h2>
                        </div>
                        <div class="col-9">
                                <h2>Atom</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptates tenetur, </p>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="row">
                            <div class="col-3">
                                <h2><i class="fas fa-bomb fa-3x fa-color"></i></h2>
                            </div>
                            <div class="col-9">
                                    <h2>Bomb</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptates tenetur, </p>
                        </div>                     
                    </div>
                </div>
         </div>
         <div class="row mt-4">
                <div class="col-6 ">
                    <div class="row">
                        <div class="col-3">
                            <h2><i class="fab fa-android fa-3x fa-color"></i></h2>
                        </div>
                        <div class="col-9">
                                <h2>Android</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptates tenetur, </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-6">
                    <div class="row">
                            <div class="col-3">
                                <h2><i class="fab fa-atlassian fa-3x fa-color"></i></h2>
                            </div>
                            <div class="col-9">
                                    <h2>Logo</h2>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat voluptates tenetur, </p>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
        </div>
    

</section>

<!--video-->
<section class="video">
    <div class="container">
        <div class="row">
            <div class="col-7">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/110239274"></iframe>
                </div>
            </div>
            <div class="col-5">
                <h2>Funky patterns!!</h2>
                <ul class="mt-4 font-20">
                    <li>Lorum ipsum </li>
                    <li>Lorum ipsum </li>
                    <li>Lorum ipsum </li>
                    <li>Lorum ipsum </li>
                    <li>Lorum ipsum </li>
                </ul>
            </div>
        </div>

    </div>

</section>

<div class="bg-grey footer-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    <img src="assets/img/sdc_logo.png" alt="logo" class="img-fluid img-centre">
            </div>
        </div>
    </div>
</div>

<?php include("include/footer.php"); ?>










        


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>