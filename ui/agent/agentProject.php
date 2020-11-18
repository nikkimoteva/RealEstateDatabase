<?php include('agentTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of agents and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('agentOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('agentBottomHalf.php'); ?>