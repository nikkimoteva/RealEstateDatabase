<?php include('branchLocationTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "branchLocationDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the address of the branchlocation you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="address" name = "address" placeholder="address">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Country</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Postal Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('branchLocationOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('branchLocationBottomHalf.php'); ?>