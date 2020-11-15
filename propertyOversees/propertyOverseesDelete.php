<?php include('propertyOverseesTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "propertyOverseesDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the property you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="propertyid" name = "propertyid" placeholder="propertyID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Property ID</th>
                                <th>Seller ID</th>
                                <th>Buyer ID</th>
                                <th>Agent ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyOverseesOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('propertyOverseesBottomHalf.php'); ?>