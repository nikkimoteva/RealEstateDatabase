<?php include('branchTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of branches and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Branch ID</th>
                                <th>Manager ID</th>
                                <th>Rating</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('branchOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('branchBottomHalf.php'); ?>