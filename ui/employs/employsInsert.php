<?php include('employsTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> Enter the information for a newly hired or transferred agent.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Agent ID</th>
                                <th>Branch ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div class = "form-check">
                                    <form method = "POST" action="employsInsert.php">
                                        <input type="hidden" id="insertTupleRequest" name="insertTupleRequest">
                                                                                   <div class = "form-row">
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="agentid" name="agentid"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input class = "form-control" type="text" id="branchid" name="branchid"> </td>
                                            </div>  
                                            <div class = "col" >
                                                <td> <input type="submit" class="btn btn-warning" value="Update" name = "update"> </td>
                                            </div>  
                                        </div>  
                                    </form>
                                </div>
                            </tr>
                            <?php include('employsOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('../includes/bottomhalf.php'); ?>