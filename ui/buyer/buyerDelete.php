<?php include('buyerTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "buyerDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the buyer you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="buyerID" name = "buyerid" placeholder="BuyerID">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> Buyer ID </th>
                                <th> Full Name </th>
                                <th> Salary </th>
                                <th> Budget </th>
                                <th> Email </th>
                                <th> Phone </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('buyerOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('buyerBottomHalf.php'); ?>