<?php include('propertyOverseesTopHalf.php'); ?>

<div class = "row">
    <label class = "m-3" for="exampleFormControlSelect1"> Choose a selection for an propertyOversees</label>
</div>

<form method = "POST" action = "propertyOverseesSelect.php">
    <input type="hidden" id="selectTupleRequest" name="selectTupleRequest">
    <div class = "row">
            <div class = "col">
                    <div class="form-group">
                        <select class="form-control" id="attriubte" name = "attribute">
                            <option value="0"> Property ID </option>
                            <option value="1"> Seller ID </option>
                            <option value="2"> Buyer ID </option>
                            <option value="3"> Agent ID</option>
                        </select>
                    </div>          
            </div>

            <div class = "col">
                <div class="form-group">
                    <select class="form-control" id="selection" name = "comparison">
                        <option value="0"> equal </option>
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
                                <th>Property ID</th>
                                <th>Seller ID</th>
                                <th>Buyer ID</th>
                                <th>Agent ID</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyOverseesOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('propertyOverseesBottomHalf.php'); ?>