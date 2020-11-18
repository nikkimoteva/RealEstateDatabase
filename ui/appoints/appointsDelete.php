<?php include('appointsTopHalf.php'); ?>

<div class = "table-reponsive">                   
                    <form method = "POST" class = "form-inline" action = "appointsDelete.php">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the Lawyer you would like to delete</label>
                        <div class = "form-group">
                            <input type="hidden" id="deleteTupleRequest" name="deleteTupleRequest">
                            <input type="text" class="form-control m-3" id="appointsID" name = "lawyerid" placeholder="lawyerid">
                            <input type="submit" class="btn btn-danger m-3" value="delete" name = "delete">
                        </div>      
                    </form>
                    
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> Lawyer ID </th>
                                <th> Branch ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('appointsOperations.php'); ?>                      
                        </tbody>
                    </table>
                </div>
<?php include('appointsBottomHalf.php'); ?>