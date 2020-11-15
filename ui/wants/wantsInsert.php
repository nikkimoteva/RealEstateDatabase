<?php include('wantsTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> Enter a new property that a buyer is interested in.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Buyer ID</th>
                                <th>Property ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div class = "form-check">
                                    <form method = "POST" action="wantsInsert.php">
                                        <input type="hidden" id="insertTupleRequest" name="insertTupleRequest">
                                            <div class = "form-row">
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="buyerid" name="buyerid"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="propertyid" name="propertyid"> </td>
                                                </div> 
                                                <div class = "col" >
                                                    <td> <input type="submit" class="btn btn-warning" value="Insert" name = "insert"> </td>
                                                </div>  
                                            </div>      
                                    </form>
                                </div>
                            </tr>
                            <?php include('wantsOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('../includes/bottomhalf.php'); ?>