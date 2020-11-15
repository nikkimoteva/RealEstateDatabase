<?php include('apartmentTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of apartments and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Property ID</th>
                                <th>Floor Number</th>
                                <th>Association</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('apartmentOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('apartmentBottomHalf.php'); ?>