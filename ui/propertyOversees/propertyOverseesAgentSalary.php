<?php include('propertyOverseesTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of buyers and number of properties they are interested in.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Agent Rating</th>
                                <th>Agent Salary</th>
                            </tr>
                        </thead>
                      <tbody>
                            <tr>
                                <div class = "form-check">
                                    <form method = "POST" action="propertyOverseesAgentSalary.php">
                                        <input type="hidden" id="ratingMore" name="ratingMore">
                                            <div class = "form-row">
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="Rating" name="Rating"> </td>
                                                </div>
                                                <div class = "col" >
                                                    <td> <input type="submit" class="btn btn-warning" value="Submit" name = "ratingMore"> </td>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </tr>
                            <?php include('propertyOverseesOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('propertyOverseesBottomHalf.php'); ?>