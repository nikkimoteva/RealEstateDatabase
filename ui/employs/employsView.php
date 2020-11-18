<?php include('employsTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of agents and the branch they're employed at.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Agent ID</th>
                                <th>Branch ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('employsOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('employsBottomHalf.php'); ?>