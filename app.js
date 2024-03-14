function validateForm() {
  var username = document.forms["myform2"]["uname1"].value;
  var email = document.forms["myform2"]["email"].value;
  var password1 = document.forms["myform2"]["upswd1"].value;
  var password2 = document.forms["myform2"]["upswd2"].value;

  if (username == "") {
    swal("Error", "Please enter a username", "error");
    return false;
  }

 
  var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (email == "" || !emailPattern.test(email)) {
    swal("Error", "Please enter a valid email address", "error");
    return false;
  }

  if (password1 == "" || password2 == "") {
    swal("Error", "Please enter a password", "error");
    return false;
  }

  if (password1 != password2) {
    swal("Error", "Passwords do not match", "error");
    return false;
  }

  if (password1.length < 8) {
    swal("Error", "Password must be at least 8 characters long", "error");
    return false;
  }

  return true;
}

document.forms["myform2"].addEventListener("submit", function(e) {
  if (!validateForm()) {
    e.preventDefault();
  }
});
