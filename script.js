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