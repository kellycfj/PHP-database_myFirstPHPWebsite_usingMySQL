<?php include('session.php');?>

<?php include 'header.php' ?>
  
<!--get css style-->
<link rel="stylesheet" href="./css/header-footer.css" type="text/css">
<link rel="stylesheet" href="./css/main.css" type="text/css">
<link rel="stylesheet" href="./css/forms.css" type="text/css">

<body>

<!-- starts container - page content------------------>
<div class="informations">

    <div class="tableplaces">
        &nbsp;
        <?php
            //logout button link
            echo '<div class="column" style="text-align:right" vertical-align: middle;>
            <a class="logout" href="logout.php">logout</a> </div>';
            
            echo '<h1 id="title-toppage">Employees</h1>';
            echo '<p>What is the employee number?</p><br>';
        ?>
        
        <p id="messageIndex"> Employee List </p>
        <!--search starts--->
        <form action="" method="post">
        <!--user type an employee number and press enter to --->
        <input type="text" id="myInput" name="search" placeholder="Employee number and enter">       
        </form>

        <table> <!--create employee table -->
            <tr>
            <th>Employee Number</th>
            <th>Department Number</th>
            <th>From_Date</th>
            <th>To_Date</th>
            </tr>

            <?php
              //get search input
              if (isset($_POST['search'])) {
                $search = $_POST['search']; 
             }
                //setect from database
                $sql = "SELECT * FROM sql1111.dept_emp WHERE emp_no LIKE '%$search%'";
                
                $result = $connection-> query($sql);
                                

                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        
                        echo "<tr>"; 
                        echo "<td>" . $row["emp_no"] . "</td>";
                        echo "<td>" . $row["dept_no"] . "</td>";
                        echo "<td>" . $row["from_date"] . "</td>";
                        echo "<td>" . $row["to_date"] . "</td></tr>";
                    }
                }
                    

                    $connection->close();

            ?>
        </table>
    </div>

</div>

<br>
    <?php include 'footer.php' ?>
            
</body>
</html>     