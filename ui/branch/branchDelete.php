<?php include('branchTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "branchDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the branch you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="branchID" name = "branchid" placeholder="Branch ID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> Branch ID </th>
                                <th> ManagerID </th>
                                <th> Rating </th>
                                <th> Address </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('branchOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('branchBottomHalf.php'); ?>