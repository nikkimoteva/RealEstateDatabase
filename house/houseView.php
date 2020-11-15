<?php include('houseTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of houses and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> Property ID </th>
                                <th> Rental Units </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('houseOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('houseBottomHalf.php'); ?>