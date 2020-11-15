
<?php include('providesTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the provides you would like to Update. Enter a new value in one cell corresponding to the infomration you want to update.</label>
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Branch ID</th>
                                <th>Mover ID</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                 <div class = "form-check">
                                    <form method = "POST" action="providesUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
                                        <div class = "form-row">
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="branchid" name="branchid"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="moverid" name="moverid"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input type="submit" class="btn btn-warning" value="Update" name = "update"> </td>
                                            </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('providesOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('providesBottomHalf.php'); ?>