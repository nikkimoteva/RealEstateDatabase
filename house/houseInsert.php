<?php include('houseTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> Enter the information for a new house.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> Property ID </th>
                                <th> Rental Units </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div class = "form-check">
                                    <form method = "POST" action="houseInsert.php">
                                        <input type="hidden" id="insertTupleRequest" name="insertTupleRequest">
                                                <div class = "form-row">
                                                   <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="propertyID" name="propertyID"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="rentalunits" name="rentalunits"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input type="submit" class="btn btn-warning" value="Insert" name = "insert"> </td>
                                                </div>  
                                            </div>      
                                    </form>
                                </div>
                            </tr>
                            <?php include('houseOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('../includes/bottomhalf.php'); ?>