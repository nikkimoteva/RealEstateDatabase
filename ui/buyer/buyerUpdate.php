<?php include('buyerTopHalf.php'); ?>

<div class = "table-reponsive">
                    <label class = "m-2" for="exampleFormControlInput1">Enter the ID of the buyer you would like to Update. Enter a new value in one cell corresponding to the infomration you want to update.</label>
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
                                    <form method = "POST" action="buyerUpdate.php">
                                        <input type="hidden" id="updateTupleRequest" name="updateTupleRequest">
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
                                                    <td> <input type="submit" class="btn btn-warning" value="Update" name = "update"> </td>
                                                </div>  
                                        </div>      
                                    </form>

                                </div>
                            </tr>
                            <?php include('buyerOperations.php'); ?>            
                        </tbody>
                    </table>
                </div>
<?php include('buyerBottomHalf.php'); ?>