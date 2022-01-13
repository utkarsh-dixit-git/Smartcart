<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/cart.png" type="image/icon">
    <title>Smart Shopping Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <nav>
        <a href="index.html"><img src="images/cart.png"></a>

        <div class="nav-links" id="navLinks">

            <i class="fa fa-times" onclick="hideMenu()"></i>

            <!-----menu contents-->

            <ul>
                <li><a href="index.html"><i class="fa fa-home"></i> HOME</a></li>
                <li><a href="About.html"><i class="fa fa-book"></i> ABOUT</a></li>
                <li><a href="Contact.html"><i class="fa fa-address-book"></i> CONTACT</a></li>
            </ul>

        </div>

        <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h1>Smart Shopping Cart</h1>
    <form name="forgot" action="">
        <h2>Enter the email address associated with your account</h2>
        <input type="email" name="email" placeholder="yourmail@gmail.com" id="email" required><br>
        <button type="submit" id="btn">Submit</button>
        </form>

    <div class="footer">
        <p>Created by <a target="_blank" href="https://utkarsh-dixit-git.github.io/utkarshdixit/">Utkarsh Dixit</a> &
            team</p>
    </div>

    <script src="script.js"></script>
</body>

</html>