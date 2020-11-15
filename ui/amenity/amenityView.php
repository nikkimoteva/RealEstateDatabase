<?php include('amenityTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of amenities and their corresponding properties.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>aType</th>
                                <th>propertyID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('amenityOperations.php'); ?>

                        </tbody>
                    </table>
                </div>
<?php include('amenityBottomHalf.php'); ?>