<?php include('session.php');?>

<?php include 'header.php' ?>

<link rel="stylesheet" href="./css/header-footer.css" type="text/css">
<link rel="stylesheet" href="./css/main.css" type="text/css">

<body>

<div class="informations">
    
    <div class="about">
        &nbsp;<?php
        //logout button link
        echo '<div class="column" style="text-align:right" vertical-align: middle;>
        <a class="logout" href="logout.php">logout</a> </div>';
        
        echo '<h1 id="title-toppage"> WELCOME IN</h1>';
        echo '<p> Welcome to WeFly team!! <br> We have been in operation since 2005 and, today, we are one of the fastest growing airlines in Europe. 
        We are also the airline that serves the most passengers in Ireland, operating around 200 flights every day.</p>';
        ?>
    </div>


    <!-- contact-form-->
    <div class="Contact">
        &nbsp;
        <?php
        echo '<h1 id="title-toppage">Contact</h1>';

        echo '<h2>Get in touch</h2>';
        echo '<p>E-mail: <a href="mailto:info@wefly.ie" target="_blank">
        <i class="fas fa-envelope-square fa-1x" target="_blank" title="E-mail"></i>admin@wefly.ie</a></p>';
        echo '<p>Phone:<a href="tel:+353646631545"><i class="fas fa-phone-square-alt"></i>+353 01 100 1000</a></p>';
        echo '<p>WhatsApp:<a href="https://wa.me/3538011001000" target="_blank"><i class="fab fa-whatsapp-square alt"
        target="_blank" title="WhatsApp"></i>+353 01 100 1000</a></p>';
        echo '<h2>Our Address</h2>';
        echo '<p>Address: Dublin - Ireland</p>';
        ?>
        <br>            
    </div>

</div>

<!-- Container ends-------------------->
<?php
    //back button link
    echo '<div class="titles"><p><a href="index.php">Back</a></p><br></div>';
?>

</body>

<?php include 'footer.php' ?>