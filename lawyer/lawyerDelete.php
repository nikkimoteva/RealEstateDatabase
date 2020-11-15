<?php include('lawyerTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "lawyerDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the lawyer you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="lawyerID" name = "lawyerid" placeholder="Lawyer ID">
                            <input type="submit" class="btn btn-danger m-3" value="Delete" name = "delete">
                        </div>      
                    </form>
                    
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
                            <?php include('lawyerOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('lawyerBottomHalf.php'); ?>