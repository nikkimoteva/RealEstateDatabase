<?php include('houseTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "houseDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the property ID of the house you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="propertyID" name = "propertyID" placeholder="Property ID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> Property ID </th>
                                <th> Rental Units </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('houseOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('houseBottomHalf.php'); ?>