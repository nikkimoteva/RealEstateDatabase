<?php include('branchTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the branch you would like to Update. Enter a new value in one cell corresponding to the infomration you want to update. When updating manager or address ensure sure that the updated values exist in there corresponding tables.</label>
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Branch ID</th>
                                <th>Manager ID</th>
                                <th>Rating</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                 <div class = "form-check">
                                    <form method = "POST" action="branchUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
                                        <div class = "form-row">
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="branchid" name="branchid"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="managerid" name="managerid"> </td>
                                            </div>  
                                            <div class = "col" >
                                              <td>  <input class = "form-control" type="text" id="rating" name="rating"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="address" name="address"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input type="submit" class="btn btn-warning" value="update" name = "update"> </td>
                                            </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('branchOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('branchBottomHalf.php'); ?>