<?php include('wantsTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of Buyers and the property they are interested in.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Buyer ID</th>
                                <th>Property ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('wantsOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('wantsBottomHalf.php'); ?>