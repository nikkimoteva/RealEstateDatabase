<?php include('providesTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "providesDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the provides you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="providesID" name = "providesid" placeholder="Mover ID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                             <tr>
                                <th>Branch ID</th>
                                <th>Mover ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('providesOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('providesBottomHalf.php'); ?>