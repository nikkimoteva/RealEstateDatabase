<?php include('propertyTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "propertyDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the property you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="propertyID" name = "propertyid" placeholder="Property ID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>PropertyID</th>
                                <th>Seller ID</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('propertyBottomHalf.php'); ?>