<?php include('propertyOverseesTopHalf.php'); ?>

<label for="exampleFormControlSelect1"></label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                          <form method="POST" action="propertyOverseesNoProperties.php">
                                       <button type="submit" class="btn btn-light m-4" name = "NO-PROP">Find buyers and number of properties they are interested in</button>
                           </form>
                           <form method="POST" action="propertyOverseesAgentSalary.php">
                               <button type="submit" class="btn btn-light m-4" name = "AgentSalary">Find the average salary agents make as their rating increases, and who have a rating higher than</button>
                           </form>
                           <form method="POST" action="propertyOverseesAgentMostNumber.php">
                               <button type="submit" class="btn btn-light m-4" name = "AgentMostNumber">Find the agent with the most number of properties they oversee</button>
                           </form>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyOverseesOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('propertyOverseesBottomHalf.php'); ?>