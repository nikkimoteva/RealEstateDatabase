<?php include('providesTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of providess and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Branch ID</th>
                                <th>Mover ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('providesOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('providesBottomHalf.php'); ?>