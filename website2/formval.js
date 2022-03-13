




function validateForm() {
  var one = document.forms["form1"]["eventName"].value;
  var two = document.forms["form1"]["eventLocation"].value;
  var three = document.forms["form1"]["eventDate"].value;
  var four = document.forms["form1"]["eventTime"].value;
  var five = document.forms["form1"]["eventPlayers"].value;

  if (one == "" || two == "" || three == "" || four == "" || five == "") {
    alert("Please Fill out All fields");
    return false;
  }
}



function validateForm2() {
  var one = document.forms["loginFormc"]["userNamec"].value;
  var two = document.forms["loginFormc"]["passwordc"].value;
  

  if (one == "" || two == "") {
    alert("Please Fill out all feilds");
    return false;
  }
}  

function validateForm3() {
  var one = document.forms["loginForm"]["userName"].value;
  var two = document.forms["loginForm"]["password"].value;
  

  if (one == "" || two == "") {
    alert("Please Fill out all feilds");
    return false;
  }
}  
