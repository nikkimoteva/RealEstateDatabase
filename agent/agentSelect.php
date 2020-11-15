<?php include('agentTopHalf.php'); ?>

<div class = "row">
    <label class = "m-3" for="exampleFormControlSelect1"> Choose a selection for an agent</label>
</div>

<form method = "POST" action = "agentSelect.php">
    <input type="hidden" id="selectTupleRequest" name="selectTupleRequest">
    <div class = "row">
            <div class = "col">
                    <div class="form-group">
                        <select class="form-control" id="attriubte" name = "attribute">
                            <option value="0"> Salary </option>
                            <option value="1"> Rating </option>
                        </select>
                    </div>          
            </div>

            <div class = "col">
                <div class="form-group">
                    <select class="form-control" id="selection" name = "comparison">
                        <option value="0"> greater than </option>
                        <option value="1" > less than </option>
                        <option value="2"> equal </option>
                    </select>
                </div>
            </div>
            
            <div class = "col" >
                <td> <input class = "form-control" type="text" id="value" name="value"> </td>
            </div>  
            <div class = "col">
                <td> <input type="submit" class="btn btn-warning" value="Submit" name = "select"> </td>
            </div>
    </div>
</form>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>LawyerID</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Rating</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('agentOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('agentBottomHalf.php'); ?>