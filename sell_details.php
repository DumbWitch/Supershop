<?php
include("master.php");
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="Home.php">Home</a></li>
                <li><a href="admin.php">Admin</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="add_product.php">Add Product</a></li>
                <li><a href="view_product.php">View Products</a></li>
                <li><a href="sell_product.php">Sell Products</a></li>
                <li><a href="staff.php">See Staffs</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li class="active"><a href="sell_details.php">Sell details</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="table-scrol">
    <h1 align="center"></h1>

    <div class="table-responsive">


        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
            <thead>
            <tr>
                <th colspan="2"><center>Date & Time</center></th>
                <th colspan="2"><center>Sold By</center></th>
                <th><center>Buying Price</center></th>
                <th><center>Selling Price</center></th>
                <th><center>Quantity</center></th>
                <th><center>Profit</center></th>
                <th><center>Unit Number</center></th>
            </tr>
            </thead>

            <?php
            include("database/db_conection.php");
            if(isset($_POST['submit']))
            {
                ?>

                <h3 align="center">Sell Details</h3>
                <?php
                //$user_type  = $_POST['type'];

                $view_sell_query="select * from sell";
                $run=mysqli_query($dbcon,$view_sell_query);

                while($row=mysqli_fetch_array($run))
                {
                    $user_soldby  = $row['soldby'];
                    $user_profit  = $row['profit'];
                    $user_bprice  = $row['bprice'];
                    $user_sprice = $row['sprice'];
                    $user_date = $row['date'];
                    $user_quantity = $row['quantity'];
                    $user_unumber = $row['unumber'];
                    ?>

                    <tr>
                        <td colspan="2"><?php echo $user_date;  ?></td>
                        <td colspan="2"><?php echo $user_soldby;  ?></td>
                        <td><?php echo $user_bprice;  ?></td>
                        <td><?php echo $user_sprice;  ?></td>
                        <td><?php echo $user_quantity;  ?></td>
                        <td><?php echo $user_profit;  ?></td>
                        <td><?php echo $user_unumber;  ?></td>
                    </tr>
                <?php }?>


            <?php }
            else
            {
                ?>
                <h3 align="center" style="color: #2aabd2">Sell Details</h3>
                <?php
                $view_sell_query="select * from sell";
                $run=mysqli_query($dbcon,$view_sell_query);

                while($row=mysqli_fetch_array($run))
                {
                    $user_soldby  = $row['soldby'];
                    $user_profit  = $row['profit'];
                    $user_bprice  = $row['bprice'];
                    $user_sprice = $row['sprice'];
                    $user_date = $row['date'];
                    $user_quantity = $row['quantity'];
                    $user_unumber = $row['unumber'];
                    ?>

                    <tr>
                        <td colspan="2"><?php echo $user_date;  ?></td>
                        <td colspan="2"><?php echo $user_soldby;  ?></td>
                        <td><?php echo $user_bprice;  ?></td>
                        <td><?php echo $user_sprice;  ?></td>
                        <td><?php echo $user_quantity;  ?></td>
                        <td><?php echo $user_profit;  ?></td>
                        <td><?php echo $user_unumber;  ?></td>
                    </tr>

                <?php } ?>
            <?php } ?>

        </table>
    </div>
</div>

<footer class="container-fluid text-center">
    <p>powered by rhythm,armin,peu</p>
</footer>

</body>
</html>
