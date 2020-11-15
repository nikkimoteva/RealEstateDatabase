<?php include('pricingTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "pricingDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the pricing you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="price" name = "price" placeholder="Price">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Price</th>
                                <th>Number of Movers</th>
                                <th>Truck Size</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('pricingOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('pricingBottomHalf.php'); ?>