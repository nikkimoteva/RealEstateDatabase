<?php include('pricingTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of pricings and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Price</th>
                                <th>Number of Movers</th>
                                <th>Truck Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('pricingOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('pricingBottomHalf.php'); ?>