<!-- get connection and login commands-->
<?php include('session.php');?>

<?php include 'header.php' ?>

<!--get css style-->
<link rel="stylesheet" href="./css/header-footer.css" type="text/css">
<link rel="stylesheet" href="./css/main.css" type="text/css">
<link rel="stylesheet" href="./css/forms.css" type="text/css">

<!--https://developers.google.com/speed/libraries-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
// animation to show and hide department table
$(document).ready(function(){
    $("button").click(function(){
      $("table").toggle();
    });
  });
</script>
<body>

<div class="informations">
    
    <div class="tableplaces">
        &nbsp;
        <?php
            //logout button link
            echo '<div class="column" style="text-align:right" vertical-align: middle;>
            <a class="logout" href="logout.php">logout</a> </div>';
            
            echo '<h1 id="title-toppage">Departments</h1>';
            echo '<p>dept_no and dept_name</p><br>';
        ?>
        <!-- button show and hide table -->
        <button class="form-btn" type="button">Departments</button>
        
        <!--create departments table -->
        <table>
            <tr><th>Department Number</th><th>Department Name</th></th></tr>
            <?php
               

                //select dapartments table from the database
                $sql = "SELECT * FROM sql1111.departments;";
                $result = $connection-> query($sql);
                     
                    //to return the fetched row in the table
                    while($row = $result->fetch_assoc()){
                    
                    //create columns an rows in the table
                    echo "<tr>"; 
                    echo "<td>" . $row["dept_no"] . "</td>";
                    echo "<td>" . $row["dept_name"] . "</td>";
                    echo "</tr>"; 
                    }

                //end connection
                $connection->close();

            ?>
        </table>
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