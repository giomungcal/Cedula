function selectClassType()
{
    var selectedClassType = document.getElementById("classtypelist").value, nextPage;

    if (selectedClassType == "classa")
        nextPage = "form_class_a.html";
    else if (selectedClassType == "classab")
        nextPage = "form_class_ab.html";
    else if (selectedClassType == "classc")
        nextPage = "form_class_c.html";
    else if (selectedClassType == "select")
        nextPage = "#";

    document.querySelector("#chooseclasstype").setAttribute("action", nextPage);
}