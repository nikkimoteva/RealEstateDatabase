<?php include('sellerTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of sellers and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Seller ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Target Price</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('sellerOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('sellerBottomHalf.php'); ?>