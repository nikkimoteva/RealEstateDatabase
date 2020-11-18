<?php include('sellerTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the seller you would like to Update. Enter a new value in one cell corresponding to the infomration you want to update.</label>
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
                             <tr>
                                 <div class = "form-check">
                                    <form method = "POST" action="sellerUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
                                        <div class = "form-row">
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="sellerid" name="sellerid"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="fullname" name="fullname"> </td>
                                            </div>  
                                            <div class = "col" >
                                              <td>  <input class = "form-control" type="text" id="email" name="email"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="targetprice" name="targetprice"> </td>
                                            </div>  
                                            <div class = "col" >
                                               <td>  <input class = "form-control" type="text" id="phone" name="phone"> </td>
                                            </div>   
                                            <div class = "col" >
                                                <td> <input type="submit" class="btn btn-warning" value="Update" name = "insert"> </td>
                                            </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('sellerOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('sellerBottomHalf.php'); ?>