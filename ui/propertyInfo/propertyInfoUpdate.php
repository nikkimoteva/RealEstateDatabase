<?php include('propertyInfoTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the address of the property you would like to update. Enter a new value in one cell corresponding to the infomration you want to update.</label>
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Address</th>
                                <th>Floors</th>
                                <th>Square Feet</th>
                                <th>Listed Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                 <div class = "form-check">
                                    <form method = "POST" action="propertyInfoUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
                                        <div class = "form-row">
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="address" name="address"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="floors" name="floors"> </td>
                                            </div>  
                                            <div class = "col" >
                                              <td>  <input class = "form-control" type="text" id="sqft" name="sqft"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="listedprice" name="listedprice"> </td>
                                            </div>   
                                            <div class = "col" >
                                                <td> <input type="submit" class="btn btn-warning" value="Update" name = "update"> </td>
                                            </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('propertyInfoOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('propertyInfoBottomHalf.php'); ?>