<?php include('moversTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "moversDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the movers you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="moversID" name = "moversid" placeholder="Mover ID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> MoverID </th>
                                <th> Rating </th>
                                <th> Price </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('moversOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('moversBottomHalf.php'); ?>