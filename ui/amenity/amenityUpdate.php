<?php include('amenityTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the property whose type you want to update. Enter a new value in one cell corresponding to the infomration you want to update.</label>
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Type</th>
                                <th>Property ID/th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                 <div class = "form-check">
                                    <form method = "POST" action="amenityUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
                                        <div class = "form-row">
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="typeID" name="typeID"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="propertyID" name="propertyID"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input type="submit" class="btn btn-warning" value="Insert" name = "insert"> </td>
                                            </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('amenityOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('amenityBottomHalf.php'); ?>