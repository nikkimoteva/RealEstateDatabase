    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            Real Estate Database
        </title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="styling.js"> </script>
        <script type="text/javascript">
            function doIt() {
               var privilegeType = document.getElementsByName("dropdown-menu")[0].value;
               var linkAgent = document.getElementById("agentLink");
               localStorage.setItem('label', privilegeType);
               localStorage.setItem("setYet", "0");
                if(privilegeType == "Agent") {
                   document.getElementById("agentT").style.display = "none";
                   document.getElementById("lawyerT").style.display = "block";
                   document.getElementById("propertyOverseesT").style.display = "block";
                }

                if("Customer" == privilegeType) {
                    linkAgent.setAttribute('href', 'agent/agentProject.php');
                    document.getElementById("agentT").style.display = "block";
                    document.getElementById("buyerT").style.display = "none";
                    document.getElementById("sellerT").style.display = "none";
                    document.getElementById("wantsT").style.display = "none";
                    document.getElementById("lawyerT").style.display = "none";
                    document.getElementById("propertyOverseesT").style.display = "none";
                }
                if("Manager" == privilegeType) {
                    linkAgent.setAttribute('href', 'agent/agentView.php');
                    document.getElementById("agentT").style.display = "block";
                    document.getElementById("buyerT").style.display = "block";
                    document.getElementById("sellerT").style.display = "block";
                    document.getElementById("wantsT").style.display = "block";
                      document.getElementById("lawyerT").style.display = "block";
                    document.getElementById("propertyOverseesT").style.display = "block";
                }
            }
             function  doStuff2() {
                localStorage.setItem("setYet", "0");
                var privilegeType = localStorage.getItem('label');
                document.getElementById("dropdown-menu").value = privilegeType;
                var linkAgent = document.getElementById("agentLink");
                if(privilegeType == "Agent") {
                   document.getElementById("agentT").style.display = "none";
                   document.getElementById("buyerT").style.display = "block";
                   document.getElementById("sellerT").style.display = "block";
                   document.getElementById("wantsT").style.display = "block";
                    document.getElementById("lawyerT").style.display = "block";
                   document.getElementById("propertyOverseesT").style.display = "block";
                }

                if("Customer" == privilegeType) {
                    linkAgent.setAttribute('href', 'agent/agentProject.php');
                    document.getElementById("agentT").style.display = "block";
                    document.getElementById("buyerT").style.display = "none";
                    document.getElementById("sellerT").style.display = "none";
                    document.getElementById("wantsT").style.display = "none";
                    document.getElementById("lawyerT").style.display = "none";
                    document.getElementById("propertyOverseesT").style.display = "none";
                }
                if("Manager" == privilegeType) {
                    linkAgent.setAttribute('href', 'agent/agentView.php');
                    document.getElementById("agentT").style.display = "block";
                    document.getElementById("buyerT").style.display = "block";
                    document.getElementById("sellerT").style.display = "block";
                    document.getElementById("wantsT").style.display = "block";
                   document.getElementById("lawyerT").style.display = "block"; document.getElementById("propertyOverseesT").style.display = "block";
                }
            }
        </script>
        <!-- <button type="button" onclick="hiddenDiv('programming language');" id="skills_submit">Programming Language</button>

        function hiddenDiv(val) {
            document.getElementById('to-hide').style.display = 'none';
            if (val === "programming language") {
                if (!pl){
                    console.log(1);
                    document.getElementById('hidden_div1').style.display = 'block';
                    document.getElementById('hidden_div2').style.display = 'none';
                    document.getElementById('hidden_div3').style.display = 'none';
                    document.getElementById('hidden_div4').style.display = 'none';
                    pl = true;
                    dm = false;
                    ide = false;
                    lang = false;
                }
                else {
                    document.getElementById('hidden_div1').style.display = 'none';
                    document.getElementById('to-hide').style.display = 'block';
                    pl = false;
                }
            }
        }

        FOR HIDING /buTTONS WHEN DIFFERENT USER IS SELECTEd -->
    </head>
    <body onload = "doStuff2()">

    <nav class = "navbar navbar-dark sticky-top bg-dark flex-mid-nowrap p-0 shadow">
        <a href = "index.php" id = "Reset"> <h1 class = "display-3 m-4 text-light">Real Estate</h1> </a>
    </nav>



    <div class = "container-fluid">

        <div class = "row">

            <nav id = "sidebarMenu" class = "col-md-3 d-md-block bg-light" >
                <div class = "sidebar-sticky pt-3">
                        <ul class = "nav flex-column mb-2">
                         <select class="form-control" name="dropdown-menu" id="dropdown-menu" onchange="doIt()" >
                              <option value="Manager">Manager</option>
                              <option value="Agent">Agent</option>
                              <option value="Customer">Customer</option>
                         </select>
                        <li class = "nav-item" id = "agentT"> <a class = "nav-link mb-2 text-muted" id = "agentLink" >Agent Represents</a> </li>
                            <li class = "nav-item" id = "amenityT"> <a class = "nav-link mb-2 text-muted" href = "amenity/amenityView.php">Amenity</a> </li>
                            <li class = "nav-item" id = "apartmentsT"> <a class = "nav-link mb-2 text-muted" href = "apartments/apartmentView.php">Appartments</a> </li>
                            <li class = "nav-item" id = "appointsT" > <a class = "nav-link mb-2 text-muted" href = "appoints/appointsView.php">Appoints</a> </li>
                            <li class = "nav-item" id = "branchT" > <a class = "nav-link mb-2 text-muted" href = "branch/branchViews.pgh">Branch</a> </li>
                            <li class = "nav-item" id = "branchLocationT"> <a class = "nav-link mb-2 text-muted" href = "branchLocation/branchLocation.php">Branch Location</a> </li>
                            <li class = "nav-item" id = "buyerT" > <a class = "nav-link mb-2 text-muted" href = "buyer/buyerView.php">Buyer</a> </li>
                            <li class = "nav-item" id = "employsT" > <a class = "nav-link mb-2 text-muted" href = "employs/employsView.php">Employs</a> </li>
                            <li class = "nav-item" id = "houseT" > <a class = "nav-link mb-2 text-muted" href = "house/houseView.php">House</a> </li>
                            <li class = "nav-item" id = "lawyerT" > <a class = "nav-link mb-2 text-muted" href = "lawyer/lawyerView.php">Lawyer</a> </li>
                            <li class = "nav-item" id = "moversT" > <a class = "nav-link mb-2 text-muted" href = "movers/moversView.php">Movers</a> </li>
                            <li class = "nav-item" id = "pricingT"> <a class = "nav-link mb-2 text-muted" href = "pricing/pricingView.php">Pricing</a> </li>
                            <li class = "nav-item" id = "propertyT"> <a class = "nav-link mb-2 text-muted" href = "property/propertyView.php">Property</a> </li>
                            <li class = "nav-item" id = "propertyInfoT"> <a class = "nav-link mb-2 text-muted" href = "propertyInfo/propertyInfoView.php">PropertyInfo</a> </li>
                            <li class = "nav-item" id = "propertyOverseesT"> <a class = "nav-link mb-2 text-muted" href = "propertyOversees/propertyOverseesView.php">PropertyOversees </a></li>
                            <li class = "nav-item" id = "providesT"> <a class = "nav-link mb-2 text-muted" href = "provides/providesView.php">Provides</a> </li>
                            <li class = "nav-item" id = "sellerT"> <a class = "nav-link mb-2 text-muted" href = "seller/sellerView.php">Seller</a> </li>
                            <li class = "nav-item" id = "wantsT"> <a class = "nav-link mb-2 text-muted" href = "wants/wantsView.php">Wants</a> </li>
                    </ul>
                </div>
            </nav>

            <main role = "main" class = "col-md-9 ml-sm-auto px-md-4">
