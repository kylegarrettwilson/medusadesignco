<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Medusa Design Co.</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />

    <!-- animate.css -->
    <link rel="stylesheet" href="../assets/animate/animate.css" />
    <link rel="stylesheet" href="../assets/animate/set.css" />




    <!-- gallery -->
    <link rel="stylesheet" href="../assets/gallery/blueimp-gallery.min.css">



    <link rel="stylesheet" href="../assets/style.css">


    <link rel="stylesheet" href="style.css">

</head>







<body>

    <?php include_once("../analyticstracking.php") ?>

    <div class="topbar animated fadeInLeftBig"></div>

    <!-- Header Starts -->
    <div class="navbar-wrapper">
        <div class="container">

            <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Logo Starts -->

                        <!-- logo must be 228 X 54 px -->
                        <a class="navbar-brand" href="../index.html"><img src="../images/mini_logo.png" alt="logo"></a>
                        <!-- #Logo Ends -->


                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>


                    <!-- Nav Starts -->
                    <div class="navbar-collapse  collapse">
                        <ul class="nav navbar-nav navbar-right scroll">
                            <li class="active" style="cursor: pointer"><a id="navhome">Home</a></li>
                            <li ><a href="#main">Info</a></li>
                            <li ><a id="navcontact" style="cursor: pointer">Contact</a></li>
                        </ul>



                        <script>
                            document.getElementById("navhome").onclick = function () {
                                location.href = "../index.html";
                            };

                            document.getElementById("navcontact").onclick = function () {
                                location.href = "../index.html#contact";
                            };

                        </script>

                    </div>
                    <!-- #Nav Ends -->

                </div>
            </div>

        </div>
    </div>
    <!-- #Header Starts -->










    <div id="home">
        <!-- Slider Starts -->
        <div class="banner">


            <!-- image must be 1900 by 900 px -->
            <img src="images/custom_header.jpg" alt="banner" id="header_background" class="img-responsive">


            <div class="caption">
                <div class="caption-wrapper">
                    <div class="caption-info">
                        <i class="fa fa-5x animated bounceInDown"></i>
                        <img class="animated bounceInUp img-responsive center-block" style="padding-top: 50px;" src="../images/large_logo.png">
                        <a href="#menu" class="explore animated bounceInDown"><i class="fa fa-angle-down  fa-3x"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- #Slider Ends -->
    </div>





    <!-- Circle Starts -->
    <div id="menu"  class="container spacer about">
        <h1 class="text-center">Custom Website Development</h1><br><br>

    </div>










    <section id="main">





        <article>


            <h2> <i class="fa fa-dollar fa-1x"></i>75/hr</h2>

            <h3>Don't see a template that fits just right? Not a problem! Lets Collaborate!</h3><br>

            <p>
                Medusa is first and foremost a company of web developers who simply love to create stunning website designs.
                If you do not see a template that fits your needs, we do offer a custom coding option in which we create
                the website together with you. At this point in time, we do not offer any e-commerce websites, however
                that will be a service in the near future. So, if you need a webpage that operates on an e-commerce basis,
                please seek development elsewhere.
            </p>

            <p>
                We are happy to create business websites that operate as a source of
                information for your customer. Want a video to automatically play as the website is loaded on the browser?
                We can do that! Need a website that is multiple pages? We can do that! <strong> We strongly recommend
                    before buying this package that you call us at (541) 788-7601 or email us <a
                        href="mailto:medusadesignco@gmail.com">HERE</a> and let us know what design you have
                    in mind.</strong>
            </p>




        </article>











    </section>







    <div id="contact" class="spacer">
        <!--Contact Starts-->
        <div class="container contactform center">
            <h2 class="text-center  wowload fadeInUp">Interested? Contact Us Here!</h2>
            <div class="row wowload fadeInLeftBig">
                <div class="col-sm-6 col-sm-offset-3 col-xs-12">


                    <form method="post" name="contact_form" action="../php/mail_handler.php">


                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <input type="text" name="last_name"  class="form-control" placeholder="Last Name">
                        </div>

                        <div class="form-group">
                            <input type="text" name="email"  class="form-control" placeholder="Email">
                        </div>


                        <div class="form-group">
                            <textarea rows="5" name="message"  class="form-control" placeholder="Message"></textarea>
                        </div>



                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">



                    </form>


                </div>
            </div>



        </div>

    </div>











































    <!-- Footer Starts -->
    <div class="footer">
        <div class="overlay spacer text-center">
            <div class="container">
                <h2>We are <b>Medusa Design Co.</b></h2>
                <p>Artistically Professional Websites For Small Independent Businesses</p><br>

                <p>114 W Magnolia St. Suite #505<br>Bellingham, WA 98225</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-1x" style="padding-bottom:15px;"></i><a href="tel:541-788-7601">(541) 788 7601</a></li>
                    <li><i class="fa fa-envelope-o fa-1x" style="padding-bottom:15px;"></i><a href="mailto:medusadesignco@gmail.com">Email Us</a>
                    <li><i class="fa fa-gavel fa-1x" style="padding-bottom:15px;"></i><a href="../legal.php">Legal</a>
                    </li>
                </ul>
                <br>


                <div class="wowload fadeInUp social"><a href="https://www.facebook.com/bootstraproadmap/"><i class="fa fa-facebook fa-2x"></i></a> <a href="https://www.instagram.com/bootstrap_roadmap/"><i class="fa fa-instagram fa-2x"></i></a> <a href="https://twitter.com/BootstrapRdMap?lang=en"><i class="fa fa-twitter fa-2x"></i></a> </div><br>

                <div class="text-center copyright">Medusa Design Co. Copyright 2016</div>

            </div>
        </div>
    </div>









    <!-- jquery -->
    <script src="../assets/jquery.js"></script>

    <!-- wow script -->
    <script src="../assets/wow/wow.min.js"></script>


    <!-- boostrap -->
    <script src="../assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>

    <!-- jquery mobile -->
    <script src="../assets/mobile/touchSwipe.min.js"></script>
    <script src="../assets/respond/respond.js"></script>

    <!-- gallery -->
    <script src="../assets/gallery/jquery.blueimp-gallery.min.js"></script>

    <!-- custom script -->
    <script src="../assets/script.js"></script>




</body>
</html>