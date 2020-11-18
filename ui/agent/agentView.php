<?php include('agentTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of agents and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>AgentID</th>
                                <th>LawyerID</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Rating</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('agentOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('agentBottomHalf.php'); ?>