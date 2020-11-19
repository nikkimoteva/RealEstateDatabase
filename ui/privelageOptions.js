
function doIt() {
    var privilegeType = document.getElementsByName("dropdown-menu")[0].value;
    var resetToggle = document.getElementById("Reset");
    localStorage.setItem('label', privilegeType);
    resetToggle.click();
}

function  doStuff2() {
    var privelegeType = localStorage.getItem('label');
    document.getElementById("dropdown-menu").value = privelegeType;
    if(["Agent"].includes(privelegeType)) {
        document.getElementById("agentT").style.display = "none";
    }
    if(["Agent", "Manager"].includes(privelegeType)) {
        document.getElementsByName("insert")[0].style.display = "block";
        document.getElementsByName("update")[0].style.display = "block";
        document.getElementsByName("delete")[0].style.display = "block";
    }
    if("Customer" == privelegeType) {
        document.getElementById("agentLink").setAttribute('href', '../agent/agentProject.php')
        document.getElementsByName("insert")[0].style.display = "none";
        document.getElementsByName("update")[0].style.display = "none";
        document.getElementsByName("delete")[0].style.display = "none";
        document.getElementById("buyerT").style.display = "none";
        document.getElementById("sellerT").style.display = "none";
        document.getElementById("wantsT").style.display = "none";
        document.getElementById("propertyOverseesT").style.display = "none";
    }
}

function  doStuff3() {
    var privelegeType = localStorage.getItem('label');
    document.getElementById("dropdown-menu").value = privelegeType;
    if(["Agent"].includes(privelegeType)) {
        document.getElementsByName("insert")[0].style.display = "none";
        document.getElementsByName("update")[0].style.display = "none";
        document.getElementsByName("delete")[0].style.display = "none";
        document.getElementById("agentT").style.display = "none";
    }

    if(["Manager"].includes(privelegeType)) {
        document.getElementsByName("insert")[0].style.display = "block";
        document.getElementsByName("update")[0].style.display = "block";
        document.getElementsByName("delete")[0].style.display = "block";
    }
    if("Customer" == privelegeType) {
        document.getElementById("agentLink").setAttribute('href', '../agent/agentProject.php')
        document.getElementsByName("insert")[0].style.display = "none";
        document.getElementsByName("update")[0].style.display = "none";
        document.getElementsByName("delete")[0].style.display = "none";
        document.getElementById("buyerT").style.display = "none";
        document.getElementById("sellerT").style.display = "none";
        document.getElementById("wantsT").style.display = "none";
        document.getElementById("propertyOverseesT").style.display = "none";
    }
}