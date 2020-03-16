function selectClassType()
{
    var selectedClassType = document.getElementById("classtypelist").value, nextPage;

    if (selectedClassType == "classa")
        nextPage = "form_class_a.php";
    else if (selectedClassType == "classab")
        nextPage = "form_class_ab.php";
    else if (selectedClassType == "classc")
        nextPage = "form_class_c.php";

    document.querySelector("#chooseclasstype").setAttribute("action", nextPage);
}

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("btn1");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}