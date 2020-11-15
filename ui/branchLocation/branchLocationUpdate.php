<?php include('branchLocationTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the address of the branchLocation you would like to Update. Enter a new value in one cell corresponding to the infomration you want to update.</label>
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Country</th>
                                <th>City</th>
                                <th>Address</th>
                                <th>Postal Code</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                 <div class = "form-check">
                                    <form method = "POST" action="branchLocationUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
                                        <div class = "form-row">
                                               <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="country" name="country"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="city" name="city"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td>  <input class = "form-control" type="text" id="address" name="address"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="postalcode" name="postalcode"> </td>
                                                </div>                      
                                                <div class = "col" >
                                                    <td> <input type="submit" class="btn btn-warning" value="Update" name = "update"> </td>
                                                </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('branchLocationOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('branchLocationBottomHalf.php'); ?>