<?php include('buyerTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of buyers and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> Buyer ID </th>
                                <th> Full Name </th>
                                <th> Salary </th>
                                <th> Budget </th>
                                <th> Email </th>
                                <th> Phone </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('buyerOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('buyerBottomHalf.php'); ?>