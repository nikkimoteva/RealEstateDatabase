<?php include('moversTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> Enter the information for a new movers.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> MoverID </th>
                                <th> Rating </th>
                                <th> Price </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div class = "form-check">
                                    <form method = "POST" action="moversInsert.php">
                                        <input type="hidden" id="insertTupleRequest" name="insertTupleRequest">
                                            <div class = "form-row">
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="moverid" name="moverid"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="rating" name="rating"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td>  <input class = "form-control" type="text" id="price" name="price"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input type="submit" class="btn btn-warning" value="Insert" name = "insert"> </td>
                                                </div>  
                                            </div>      
                                    </form>
                                </div>
                            </tr>
                            <?php include('moversOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('../includes/bottomhalf.php'); ?>