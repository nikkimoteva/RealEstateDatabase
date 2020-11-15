<?php include('appointsTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of Lawyer IDs and the ID of the branch they represent.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>                                
                                <th>LawyerID</th>
                                <th>BranchID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('appointsOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('appointsBottomHalf.php'); ?>