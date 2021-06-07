<?php //include ('session.php');?> <!-- it doesn't have to login because this page was create for new HR employees -->

<?php include 'header.php' ?>

<!--get database connection-->
<?php include 'connection.php';?>
  
<!--get css style-->
<link rel="stylesheet" href="./css/header-footer.css" type="text/css">
<link rel="stylesheet" href="./css/main.css" type="text/css">
<link rel="stylesheet" href="./css/forms.css" type="text/css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
// animation to show and hide department table
$(document).ready(function(){
    $("button").click(function(){
      $("form").toggle();
    });
  });
</script>

<body>

<div class="informations">
    
    <div class="tableplaces">
        &nbsp;
        <?php
            //logout button link
            //I chose that this freestyle page will interact with new users
            //echo '<div class="column" style="text-align:right" vertical-align: middle;>
            //<a class="logout" href="logout.php">logout</a> </div>';
            
            echo '<h1 id="title-toppage">WeFly HR Database</h1>';
            echo '<p> If you recevied this link, you are now part of our WeFly Human Resources team.<br> 
            First of all, congratulations and we wish you an amazing career in our company.<br>
            To get access to HR information you are asked to create a New Login... click, start and Welcome!!!</p><br>';
        ?>
        <!-- button show and hide -->
       <button class="form-btn" type="button">Create a login</button>
       
        <?php 
        //get the values from the new user
        if(isset($_POST['submit'])){

            $id           = $_POST['id_users'];
            $username     = $_POST['username'];
            $password     = $_POST['password'];

            //insert new values into users table
            $sql = "INSERT INTO users (id_users, username, password) VALUES ('$id','$username','$password')";
            
            if (mysqli_query($connection, $sql)) {
               echo "New loging successfully created! You are ready to Login.";//success insert in the users table
            } else {
               echo "Error: " . $sql . " 
            " . mysqli_error($connection); //connection error
            }
            mysqli_close($connection);
       }
       ?>
        
        <!--form for the new users input their information-->
        <form action="" class="form-reservation" method="post">

        <input type="text" name="id_users" class="form2" placeholder="ID">
        <input type="text" name="username" class="form2" placeholder="Username">
        <input type="password" name="password" class="form2" placeholder="Password">
        <button class="form-btn" type="submit" name="submit">Confirm</button>
 
        </form>
        <!--login button-->
        <a target="_blank" href="login.php"><button class="form-btn" type="button">Login</button></a>

    </div>


</div>

<!-- Container ends-------------------->
<?php
    //back button link
    echo '<div class="titles"><p><a href="welcomein.php">Back</a></p><br></div>';
?>


    <br>
    <?php include 'footer.php' ?>
            
</body>
</html> 