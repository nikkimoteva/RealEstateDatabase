<?php include('propertyOverseesTopHalf.php'); ?>

<label for="exampleFormControlSelect1">The agent with the most number of properties they oversee.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Agent ID</th>
                                <th>Number of Properties they oversee</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyOverseesOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('propertyOverseesBottomHalf.php'); ?>