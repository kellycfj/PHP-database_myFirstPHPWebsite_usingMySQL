<?php //include('../private/session.php');?>

<?php include 'header.php' ?>

<link rel="stylesheet" href="./css/header-footer.css" type="text/css">
<link rel="stylesheet" href="./css/main.css" type="text/css">

<!-- container -(class exercises + w3schools)--------------------->
<!-- homepage content starts--------------------->        
<div class= "homepage">
    <div class="content text-highlight"> 
        <?php
        //logout button link
       // echo '<div class="column" style="text-align:right" vertical-align: middle;>
        //<a class="logout" href="logout.php">logout</a> </div>';
        
        echo '<h1><strong> WeFly</strong></h1><p>Helping our clients to plan their next destination!</p><br>';
        ?>
    
    </div>
    <div class="homecontainer">
        <img src="./img/airplane02.jpg" alt="WeFly" style="width:100% ">
        <!--login button link----------------->
        <a target="_blank" href="login.php"><button class="btn">LOG IN</button></a>
    </div>  
      <!-- student information starts--------------------->
    <?php 
    //variables to set information
    $kelly = "Kelly Crystine Ferreira Jesus";
    $numb = "2019375";
    $ca = "Online Resume - Login";
    $lec="Web Development - John Snel";

    echo "<div class='homeinfo'><a href=''></a>Student<br><br>$kelly</div>";
    echo "<div class='homeinfo'>Student number<br><br>$numb</div>";
    echo "<div class='homeinfo'>CA2<br><br>$ca</div>";
    echo "<div class='homeinfo'>CCT Dublin College<br><br>$lec</div>";

    echo "&nbsp";

    //Public Homepage - brief required report about the website
    echo '<p><strong> A brief description of the technology used: </strong></p>
    <p>This web application was created to represent a HR department and some access tools to the HR database, 
    based on my previous CA1 website with some modification.
    The main reference that I used on this website CA2 was the exercise classes, and an important one is 
    website-example and login, where the lecturer John taught us tools to get login and logout working in our website. 
    It was a bit confusing to me at the beginning because I have never done that before using PHP, but once I 
    practiced the exercise a few times I understood better how it works.
    The same happened when connecting to the database, however, in  Databases lecture with Mikhail we were 
    taught about the main commands (this helped a lot) and our Web Development lecture, John guided us to connect 
    using the required/right tools. Even using the database that is hosted in the cloud.
    I tried to organize my website to make it easy to use, it was good practice for thinking about work in a team 
    and having different people involved in the same project.
    
    Coding commands in individual pages: Such as database connection, login, header and footer.
    These are some individual commands/pages that are called when they are required on the pages. 
    Connection and login are in private pages and called inside the pages. This makes the job easier to implement, 
    less typing and error fixing is involved and a more organized website is achieved. 
    
    PHPmyAdmin technology, connecting to MySql using XAMPP as a server  and making use of the FreeMySQLhosting database 
    in the cloud helped me increase my learning. I have to confess that without the lecturer s explanation it would 
    be much more difficult, because of the commands that FreeMySQLhosting does not accept. 
    </p><br>';
    echo '<p><strong> List of the browsers my web application was tested on: </strong></p>
    <p>Google Chrome, Microsoft Edge and Mozilla Firefox.</p><br>';
    echo '<p><strong> Reflection: </strong></p>
    <p>i. Learned from building this web application:</p>
    <p>I expanded my knowledge about database connectivity and how to apply it, as this web application approached a 
    base level of quality for a real company website. The tools that we were required to use and apply makes the user 
    interaction clear and direct. As it was required to combine some different tools it was interesting.  I was aware 
    we did that but due to the requierent, attention taken was much more focused. There is much more to explore in all 
    the technology as an individual student, but the method required here was essential for our foundation.</p><br>
    <p>ii. I would do differently if I had to build it again:</p>
    <p>I suppose I would explore more possibilities in the use of the tools and technology approach hoping to combine 
    them even more efficiently.  </p><br><br>';
    ?>
    

</div>

    <br>
    <?php include 'footer.php' ?>
            
                 
    </body>
</html> 