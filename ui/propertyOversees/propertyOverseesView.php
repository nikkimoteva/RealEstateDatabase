<?php include('propertyOverseesTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of properties and the information related to the parties involved.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Property ID</th>
                                <th>Seller ID</th>
                                <th>Buyer ID</th>
                                <th>Agent ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyOverseesOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('propertyOverseesBottomHalf.php'); ?>