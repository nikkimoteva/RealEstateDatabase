<?php include('amenityTopHalf.php'); ?>

<label for="exampleFormControlSelect1"> Find amenity type that has price more than.</label>

<div class = "table-reponsive">
                    <div class = "form-check">
                        <form method = "POST" action="amenityPriceMore.php">
                            <input type="hidden" id="amenityPriceMore" name="amenityPriceMore">
                                <div class = "form-row">
                                    <div class = "col" >
                                        <td> <input class = "form-control" type="text" id="Price" name="Price"> </td>
                                    </div>
                                    <div class = "col" >
                                        <td> <input type="submit" class="btn btn-warning" value="Submit" name = "priceMore"> </td>
                                    </div>
                                </div>
                        </form>
                    </div>
                    <table class = "table table-stripedbordered table-m">
                        <thead class ="thead-dark">
                            <tr>
                                <th>aType</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php include('amenityOperations.php'); ?>
                        </tbody>
                    </table>
                </div>
<?php include('amenityBottomHalf.php'); ?>