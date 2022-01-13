<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/cart.png" type="image/icon">
    <title>Smart Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
</head>

<body>
    <nav>
        <a href="index.php"><img src="images/cart.png"></a>

        <div class="nav-links" id="navLinks">

            <i class="fa fa-times" onclick="hideMenu()"></i>

            <!-----menu contents-->

            <ul>
                <li><a href="index.php"><i class="fa fa-home"></i> HOME</a></li>
                <li><a href="About.php"><i class="fa fa-book"></i> ABOUT</a></li>
                <li><a href="Contact.php"><i class="fa fa-address-book"></i> CONTACT</a></li>
            </ul>

        </div>

        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Smart Shopping Cart</h1>

    <section class="about" id="about">

            <div class="max-width">

                <h2 class="title">My team</h2>

                <div class="carousel owl-carousel">


                    <div class="card">

                        <div class="box">

                            <a href="https://utkarsh-dixit-git.github.io/utkarshdixit/" target="_blank">
                                <img src="images/UD.jpeg" alt="" height="200px" width="200px">
                            </a>
                            <div class="text">Utkarsh Dixit</div>
                            <p>Front end Developer</p>

                        </div>

                    </div>

                    <div class="card">

                        <div class="box">

                            <a href="https://github.com/Aryan-os" target="_blank">
                                <img src="images/AS.png" alt="" height="200px" width="200px">
                            </a>
                            <div class="text">Aryan Singh</div>
                            <p>Project Manager and Hardware Expert</p>

                        </div>

                    </div>

                    <div class="card">

                        <div class="box">

                            <a href="https://github.com/Satis123sahu" target="_blank">
                                <img src="images/SS1.jpeg" alt="" height="200px" width="200px">
                            </a>
                            <div class="text">Satish Sahu</div>
                            <p>Backend Developer</p>

                        </div>

                    </div>

                    <div class="card">

                        <div class="box">

                            <a href="https://www.linkedin.com/in/sakshi-verma-33aa3521b/" target="_blank">
                                <img src="images/SS2.jpeg" alt="">
                            </a>
                            <div class="text">Sakshi Verma</div>
                            <p>Team Coordinator and User Request Handler</p>

                        </div>

                    </div>


                </div>


            </div>
    </section>
    <div class="footer">
        <p>Created by <a target="_blank" href="https://utkarsh-dixit-git.github.io/utkarshdixit/">Utkarsh Dixit</a> &
            team</p>
    </div>


    <script src="script.js"></script>
</body>

</html>