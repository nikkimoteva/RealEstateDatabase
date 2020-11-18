<?php include('lawyerTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of lawyers and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>LawyerID</th>
                                <th>Rating</th>
                                <th>Cost</th>
                                <th>Law School</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('lawyerOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('lawyerBottomHalf.php'); ?>