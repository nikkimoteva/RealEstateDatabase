<?php include('sellerTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "sellerDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the seller you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="sellerID" name = "sellerid" placeholder="Seller ID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Seller ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Target Price</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('sellerOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('sellerBottomHalf.php'); ?>