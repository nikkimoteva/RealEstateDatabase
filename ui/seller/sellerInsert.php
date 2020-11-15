<?php include('sellerTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> Enter the information for a new seller.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>Seller ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Target Price</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <div class = "form-check">
                                    <form method = "POST" action="sellerInsert.php">
                                        <input type="hidden" id="insertTupleRequest" name="insertTupleRequest">
                                            <div class = "form-row">
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="sellerid" name="sellerid"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="fullname" name="fullname"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td>  <input class = "form-control" type="text" id="email" name="email"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input class = "form-control" type="text" id="targetprice" name="targetprice"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td>  <input class = "form-control" type="text" id="phone" name="phone"> </td>
                                                </div>  
                                                <div class = "col" >
                                                    <td> <input type="submit" class="btn btn-warning" value="Insert" name = "insert"> </td>
                                                </div>  
                                            </div>      
                                    </form>
                                </div>
                            </tr>
                            <?php include('sellerOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('../includes/bottomhalf.php'); ?>