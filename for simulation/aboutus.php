<?php
    session_start();
    $string='';
    if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
    {
        $string='<li class="nav-item">
                            <a class="nav-link" href="login.php?logout=1">Logg Out</a>
                        </li>';
        
    }
    
    

?>

<!DOCTYPE html>
<html>

<head>
    <title>About Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="navicon.svg">
    <style>

        body{
            font-family: 'Mulish', sans-serif;
            margin: 0;
            padding: 0;
        }
        #nm {
            letter-spacing: 3px;
        }

        .very {
            border-radius: 50%;
            height: 50%
        }

        .fuggy {
            color: rgb(17, 2, 77);
        }
        .page{

background-color: whitesmoke;
        }
        #nm{
	padding-left: 0px;
    letter-spacing: 3px;
}
.nav-link{
	padding-top: 10px;
	letter-spacing: 3px;
}
.dropdown-menu{
	background-color: #007bff;
	border: none !important;
}
.dropdown-item{
	color: #70abff !important;
	letter-spacing: 2px;
}
.dropdown>.dropdown-menu>a:hover {
 	color: #cce5ff !important;
	background-color: transparent;
}
.h1 , h1{
    margin-top: 40px;
}
.pb-5, .py-5{
    margin-top: -60px;
    padding-bottom: 0rem!important;
}

    </style>

</head>

<body>
    <header>
 
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3 ">
            
                <a class="navbar-brand" href="index.php" id="nm">
                    <img src="navicon.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    Apna Bank
                </a>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home
                            </a>
                        </li>
                        <li class="nav-item dropdown bg-primary">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
                              My Account
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="deleteAccount.php">Delete Account</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown bg-primary">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transaction.php">Send Money to own bank</a>
                                <a class="dropdown-item" href="tootherbank.php">Send Money to other bank</a>
                                <a class="dropdown-item" href="balance.php">current balance</a>
                                <a class="dropdown-item" href="#">Raise a Complaint</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <?php echo $string ?>
                    </ul>
                </div>
           
            </div>
        </nav>
    
    <!--  end of navbar -->

        <!-- About us starts -->
        <section>
            <div class="container fluid p-3">
                <h1 class="text-center ">About Us</h1>
                <hr class="w-25 mx-auto pt-5">
            </div>


        </section>
        <!-- about us ends -->
        <!-- Our comapny -->
        <section class="bgone text-center ">
            <article class="py-5 text-center container">
                <div>
                    <h1 class="fuggy">Our company</h1>
                    <p>Our relationships are built on trust that we build every day through every interaction. Our
                        employees
                        are empowered to do the right thing to ensure they share our customers’ vision for success. We
                        work
                        as a partner to provide financial products and services that make banking safe, simple and
                        convenient. We’re here to help navigate important milestones and strengthen futures together.
                    </p>


                </div>
            </article>
        </section>
        <!-- our comapny ends -->
        <!-- Our history -->
        <section>
            <div class="container fluid mt-5">


                <div class="row mb-5">
                    <div class="col-lg-6 col-md-6 col-12">
                        <!-- <img src="history.jpg" class="img-fluid ml-5 mt-0 mb-0 very"> -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-12">
                        <h1 class="fuggy">Our history</h1>
                        <hr>
                        <p>Our history dates back to 1863 when First National Bank of Cincinnati opened for business. As
                            regional banks proliferated across the country in the years that followed, a number of other
                            predecessors were born. After a series of mergers at the turn of the 21st century, we
                            formally
                            took on the U.S. Bank name and established our headquarters in Minnesota. Today, U.S. Bank
                            is
                            the fifth-largest bank in the country, with more than 70,000 employees and $495 billion in
                            assets as of December 31, 2019.</p>

                    </div>
                </div>
            </div>
        </section>

        <!-- out history ends -->

        <!-- our business -->
        <section class="bgone">
            <div class="container fluid mt-5">


                <div class="row mb-5">

                    <div class="col-lg-6 col-md-6 col-12">
                        <h1 class="fuggy">Our business</h1>
                        <hr>
                        <p>Our diverse business mix is fundamental in delivering a consistent, predictable and
                            repeatable
                            financial performance year after year. Our core businesses include Consumer & Business
                            Banking,
                            Corporate & Commercial Banking, Payment Services and Wealth Management & Investment
                            Services.
                            Through our “One U.S. Bank” philosophy, we are able to bring the power of the whole bank to
                            every customer, every single day.</p>

                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <!-- <img src="busi.jpg" class="img-fluid ml-5 mt-0 mb-0 very "> -->

                    </div>

                </div>
            </div>
        </section>
        <!-- our business ends -->

    </header>

    
    <!-- Footer -->
    <footer class="page-footer font-small ">


        <!-- Footer Links -->
        <div class="blue page">

            
        <div style="background-color: #21d192;">
            <div class="container">

                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Get connected with us on social networks!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">

                        <!-- Facebook -->
                        <a class="fb-ic" href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f white-text mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic" href="https://twitter.com/">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!-- Google +-->
                       <!-- <a class="gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-4"> </i>
                        </a>-->
                        <!--Linkedin -->
                        <a class="li-ic" href="https://in.linkedin.com/">
                            <i class="fab fa-linkedin-in white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic" href="https://www.instagram.com/">
                            <i class="fab fa-instagram white-text"> </i>
                        </a>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row-->

            </div>
        </div>
        <div class="container text-center text-md-left mt-5" >

            <!-- Grid row -->
            <div class="row mt-3 dark-grey-text">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Apna Bank</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Please do not believe any entity using Apna Bank logos & branding to request the public for money
                        in exchange for opening a Customer Service Point.</p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <!--<h6 class="text-uppercase font-weight-bold">OUR OFFERINGS</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="dark-grey-text" href="#!">Savings Account</a>
                    </p>
                    <p>
                        <a class="dark-grey-text" href="#!">Current Account</a>
                    </p>-->
                    <!-- <p>
                        <a class="dark-grey-text" href="#!">BrandFlow</a>
                    </p> -->
                    <!-- <p>
                        <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
                    </p> -->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                    <!-- Links -->
                    <!--<h6 class="text-uppercase font-weight-bold">Useful links</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a class="dark-grey-text" href="#!">Your Account</a>
                    </p>-->
                    <!-- <p>
                        <a class="dark-grey-text" href="#!">Become an Affiliate</a>
                    </p> -->
                    <!-- <p>
                        <a class="dark-grey-text" href="#!">Shipping Rates</a>
                    </p> -->
                    <!--<p>
                        <a class="dark-grey-text" href="#!">Help</a>
                    </p>-->

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i>Kumarswamy layout, Bengaluru ,India</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        </div>
        
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center text-black-50 py-3 " style="background-color: grey;">© 2020 Copyright: Apna Bank
            <!--<a  style="color:white;" href="https://mdbootstrap.com/"> ApnaBank.com</a>-->
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- footer ends -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
