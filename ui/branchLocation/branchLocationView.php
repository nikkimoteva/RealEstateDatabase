<?php include('branchLocationTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of branches and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Country</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Postal Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('branchLocationOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('branchLocationBottomHalf.php'); ?>