<?php include('wantsTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the buyer you would like to Update. Enter a new value corresponding to the information you want to update.</label>
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Buyer ID</th>
                                <th>Property ID</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                 <div class = "form-check">
                                    <form method = "POST" action="wantsUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
                                        <div class = "form-row">
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="buyerid" name="buyerid"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="propertyid" name="propertyid"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input type="submit" class="btn btn-warning" value="Update" name = "update"> </td>
                                            </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('wantsOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('wantsBottomHalf.php'); ?>