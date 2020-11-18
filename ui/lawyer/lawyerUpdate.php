<?php include('lawyerTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the lawyer you would like to Update. Enter a new value in one cell corresponding to the infomration you want to update.</label>
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>LawyerID</th>
                                <th>Rating</th>
                                <th>Cost</th>
                                <th>Law School</th>
                            </tr>
                        </thead>
                        <tbody>
                             <tr>
                                 <div class = "form-check">
                                    <form method = "POST" action="lawyerUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
                                        <div class = "form-row">
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="lawyerid" name="lawyerid"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="rating" name="rating"> </td>
                                            </div>  
                                            <div class = "col" >
                                              <td>  <input class = "form-control" type="text" id="cost" name="cost"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="lawschool" name="lawschool"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input type="submit" class="btn btn-warning" value="Update" name = "update"> </td>
                                            </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('lawyerOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('lawyerBottomHalf.php'); ?>