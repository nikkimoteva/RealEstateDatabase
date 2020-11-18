<?php include('propertyInfoTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> Enter the information for a new propertyInfo.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                             <tr>
                                <th>Address</th>
                                <th>Floors</th>
                                <th>Square Feet</th>
                                <th>Listed Price</th>
                                 <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div class = "form-check">
                                    <form method = "POST" action="propertyInfoInsert.php">
                                        <input type="hidden" id="insertTupleRequest" name="insertTupleRequest">
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
                                                    <td> <input type="submit" class="btn btn-warning" value="Insert" name = "insert"> </td>
                                                </div>  
                                            </div>      
                                    </form>
                                </div>
                            </tr>
                            <?php include('propertyInfoOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('../includes/bottomhalf.php'); ?>