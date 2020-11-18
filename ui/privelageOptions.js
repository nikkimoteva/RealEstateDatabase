
function doIt() {
    var privilegeType = document.getElementsByName("dropdown-menu")[0].value;
    var viewToggle = document.getElementsByName("view");
    localStorage.setItem('label', privilegeType);
    viewToggle[0].click();
}

function  doStuff2() {
    var privelegeType = localStorage.getItem('label');
    document.getElementById("dropdown-menu").value = privelegeType;
    if(["Agent", "Manager"].includes(privelegeType)) {
        document.getElementsByName("insert")[0].style.display = "block";
        document.getElementsByName("update")[0].style.display = "block";
        document.getElementsByName("delete")[0].style.display = "block";
    }
    if("Customer" == privelegeType) {
        document.getElementsByName("insert")[0].style.display = "none";
        document.getElementsByName("update")[0].style.display = "none";
        document.getElementsByName("delete")[0].style.display = "none";
    }
}