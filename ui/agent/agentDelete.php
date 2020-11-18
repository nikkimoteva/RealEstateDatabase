<?php include('agentTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "agentDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the agent you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="agentID" name = "agentid" placeholder="AgentID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> ID </th>
                                <th> LawyerID </th>
                                <th> Phone </th>
                                <th> Email </th>
                                <th> Rating </th>
                                <th> Salary </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('agentOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('agentBottomHalf.php'); ?>