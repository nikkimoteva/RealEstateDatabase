    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="styling.js"> </script>
        <script type="text/javascript" src="../privelageOptions.js"> </script>
        
    </head>


     <body onload="doStuff2()">

    <nav class = "navbar navbar-dark sticky-top bg-dark flex-mid-nowrap p-0 shadow">
        <a href = "../index.php" id = "Reset"> <h1 class = "display-3 m-4 text-light">Real Estate</h1> </a>
    </nav>
        
        
        
    <div class = "container-fluid">
    
        <div class = "row">
            
            <nav id = "sidebarMenu" class = "col-md-3 d-md-block bg-light" >
                <div class = "sidebar-sticky pt-3">
                        <ul class = "nav flex-column mb-2"> 
                        <li class="nav-item dropdown">
                        <select class="form-control" name="dropdown-menu" id="dropdown-menu" onchange="doIt()" >
                              <option value="Manager">Manager</option>
                              <option value="Agent">Agent</option>
                              <option value="Customer">Customer</option>
                         </select>
                         <li class = "nav-item" id = "agentT"> <a class = "nav-link mb-2 text-muted" id = "agentLink" href = "../agent/agentView.php">Agent Represents</a> </li>
                        <li class = "nav-item" id = "amenityT"> <a class = "nav-link mb-2 text-muted" href = "../amenity/amenityView.php">Amenity</a> </li>
                        <li class = "nav-item" id = "apartmentsT"> <a class = "nav-link mb-2 text-muted" href = "../apartments/apartmentView.php">Apartments</a> </li>
                        <li class = "nav-item" id = "appointsT"> <a class = "nav-link mb-2 text-muted" href = "../appoints/appointsView.php">Appoints</a> </li>
                        <li class = "nav-item" id = "branchT"> <a class = "nav-link mb-2 text-muted" href = "../branch/branchView.php">Branch</a> </li>
                        <li class = "nav-item" id = "branchT"> <a class = "nav-link mb-2 text-muted" href = "../branchLocation/branchLocationView.php">Branch Location</a> </li>
                        <li class = "nav-item" id = "buyerT"> <a class = "nav-link mb-2 text-muted" href = "../buyer/buyerView.php">Buyer</a> </li>
                        <li class = "nav-item" id = "employsT"> <a class = "nav-link mb-2 text-muted" href = "../employs/employsView.php">Employs</a> </li>
                        <li class = "nav-item" id = "houseT"> <a class = "nav-link mb-2 text-muted" href = "../house/houseView.php">House</a> </li>
                        <li class = "nav-item" id = "lawyerT"> <a class = "nav-link mb-2 text-muted" href = "../lawyer/lawyerView.php">Lawyer</a> </li>
                        <li class = "nav-item" id = "moversT"> <a class = "nav-link mb-2 text-muted" href = "../movers/moversView.php">Movers</a> </li>
                        <li class = "nav-item" id = "pricingT"> <a class = "nav-link mb-2 text-muted" href = "../pricing/pricingView.php">Pricing</a> </li>
                        <li class = "nav-item" id = "propertyT"> <a class = "nav-link mb-2 text-muted" href = "../property/propertyView.php">Property</a> </li>
                        <li class = "nav-item" id = "propertyInfoT"> <a class = "nav-link mb-2 text-muted" href = "../propertyInfo/propertyInfoView.php">PropertyInfo</a> </li>
                        <li class = "nav-item" id = "propertyOverseesT"> <a class = "nav-link mb-2 text-muted" href = "../propertyOversees/propertyOverseesView.php">PropertyOversees </a></li>
                        <li class = "nav-item" id = "providesT"> <a class = "nav-link mb-2 text-muted" href = "../provides/providesView.php">Provides</a> </li>
                        <li class = "nav-item" id = "sellerT"> <a class = "nav-link mb-2 text-muted" href = "../seller/sellerView.php">Seller</a> </li>
                        <li class = "nav-item" id = "wantsT"> <a class = "nav-link mb-2 text-muted" href = "../wants/wantsView.php">Wants</a> </li>  
                    </ul>
                </div>
            </nav>


            
            <main role = "main" class = "col-md-9 ml-sm-auto px-md-4">

                <div class="row">
                        <p class= "display-4 m-2">Amenity</p>
                        <form method="POST" action="amenitySelect.php">
                            <button type="submit" class="btn btn-light m-4" name = "select" >Select</button>
                        </form>
                        <form method="POST" action="amenityInsert.php">
                            <button type="submit" class="btn btn-light m-4" name = "insert">Insert</button>
                        </form>
                        <form method="POST" action="amenityUpdate.php">
                            <button type="submit" class="btn btn-light m-4" name = "update">Update</button>
                        </form>
                        <form method="POST" action="amenityDelete.php">
                            <button type="submit" class="btn btn-light m-4" name = "delete">Delete</button>
                        </form>
                        <form method="POST" action="amenityView.php">
                            <button type="submit" class="btn btn-light m-4" name = "view">View</button>
                        </form>
                        <form method="POST" action="amenityPriceMore.php">
                             <button type="submit" class="btn btn-light m-4" name = "priceMore">Show amenity type of a property that has price more than </button>
                       </form>
                </div>
