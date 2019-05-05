// Function was created
function openTab(tabName) {
  // variables are added
    var i, x;
    // getting the class element by name
    x = document.getElementsByClassName("containerTab");
    // application of for loop
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    document.getElementById(tabName).style.display = "block";
}
