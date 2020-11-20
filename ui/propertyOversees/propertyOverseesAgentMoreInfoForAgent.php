<?php include('propertyOverseesTopHalf.php'); ?>

<label for="exampleFormControlSelect1"></label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                          <form method="POST" action="propertyOverseesNoProperties.php">
                                       <button type="submit" class="btn btn-light m-4" name = "NO-PROP">Find buyers and number of properties they are interested in</button>
                           </form>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('propertyOverseesOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('propertyOverseesBottomHalf.php'); ?>