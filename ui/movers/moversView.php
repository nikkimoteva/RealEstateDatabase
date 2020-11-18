<?php include('moversTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> List of movers and their information.</label>

<div class = "table-reponsive">
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th> MoverID </th>
                                <th> Rating </th>
                                <th> Price </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('moversOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('moversBottomHalf.php'); ?>