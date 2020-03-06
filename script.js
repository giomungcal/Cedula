function selectClassType()
{
    var selectedClassType = document.getElementById("classtypelist").value, nextPage;

    if (selectedClassType == "classa")
        nextPage = "form_class_a.php";
    else if (selectedClassType == "classab")
        nextPage = "form_class_ab.php";
    else if (selectedClassType == "classc")
        nextPage = "form_class_c.php";
    else if (selectedClassType == "select")
        nextPage = "#";

    document.querySelector("#chooseclasstype").setAttribute("action", nextPage);
}

// test getelementbyid
function myFunction()
{
    document.getElementById("hidden").innerHTML = "Hello Dear Visitor!</br> We are happy that you've chosen our website to learn programming languages. We're sure you'll become one of the best programmers in your country. Good luck to you!";
}

function confirms()
{
  var a;
  a = confirm("Are you sure?");

  if (a)
    window.location.href="classainsert.php"
}