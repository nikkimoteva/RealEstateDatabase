<?php include('pricingTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the information corresponding to a price that you would like to Update. Enter the new value in a single cell.</label>
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Price</th>
                                <th>Number of Movers</th>
                                <th>Truck Size</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                 <div class = "form-check">
                                    <form method = "POST" action="pricingUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
                                        <div class = "form-row">
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="price" name="price"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="nummovers" name="nummovers"> </td>
                                            </div>  
                                            <div class = "col" >
                                              <td>  <input class = "form-control" type="text" id="trucksize" name="trucksize"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input type="submit" class="btn btn-warning" value="Insert" name = "insert"> </td>
                                            </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('pricingOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('pricingBottomHalf.php'); ?>