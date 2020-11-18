<?php include('propertyTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of propertys and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>PropertyID</th>
                                <th>Seller ID</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('propertyBottomHalf.php'); ?>