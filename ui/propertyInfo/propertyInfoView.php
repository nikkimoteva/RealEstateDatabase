<?php include('propertyInfoTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of properties and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Address</th>
                                <th>Floors</th>
                                <th>Square Feet</th>
                                <th>Listed Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyInfoOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('propertyInfoBottomHalf.php'); ?>