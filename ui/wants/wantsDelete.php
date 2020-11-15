<?php include('wantsTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "wantsDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the buyer that is no longer interested in a property.</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="buyerid" name = "buyerid" placeholder="Buyer ID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Buyer ID</th>
                                <th>Property ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('wantsOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('wantsBottomHalf.php'); ?>