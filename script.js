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

// testing store form data
function storedata()
{
    if(typeof(Storage) !== "undefined") {
    var name = document.getElementById("name").value;
    var password = document.getElementById("password").value;

    if (sessionStorage.name && sessionStorage.password) {
      document.getElementById("name").value = name;
      document.getElementById("password").value = password;
    } else {
      sessionStorage.name = name;
      sessionStorage.password = password;
    }
    document.getElementById("res").innerHTML = "Your datas restored";
  } else {
    document.getElementById("res").innerHTML = "Sorry, your browser does not support web storage...";
  }
}

// test getelementbyid
function myFunction()
{
    document.getElementById("hidden").innerHTML = "Hello Dear Visitor!</br> We are happy that you've chosen our website to learn programming languages. We're sure you'll become one of the best programmers in your country. Good luck to you!";
}