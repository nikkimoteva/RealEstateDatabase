<?php include('buyerTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> Enter the information for a new buyer.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> Buyer ID </th>
                                <th> Full Name </th>
                                <th> Salary </th>
                                <th> Budget </th>
                                <th> Email </th>
                                <th> Phone </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div class = "form-check">
                                    <form method = "POST" action="buyerInsert.php">
                                        <input type="hidden" id="insertTupleRequest" name="insertTupleRequest">
                                            <div class = "form-row">
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="buyerid" name="buyerid"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="fullname" name="fullname"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td>  <input class = "form-control" type="text" id="salary" name="salary"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="budget" name="budget"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td>  <input class = "form-control" type="text" id="email" name="email"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="phone" name="phone"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input type="submit" class="btn btn-warning" value="Insert" name = "insert"> </td>
                                                </div>  
                                            </div>      
                                    </form>
                                </div>
                            </tr>
                            <?php include('buyerOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('../includes/bottomhalf.php'); ?>