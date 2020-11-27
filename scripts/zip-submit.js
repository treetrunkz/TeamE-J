// Catches when form submitted
document.getElementById("zip-submit").addEventListener("click", validateForm);

// Checks for name null if null -> shows warning message
function validateForm() {

  // Var dump
  let zip = document.getElementById("zip-input");
  let zipWarning = document.getElementById("zip-submit");
  let zipAlert = document.getElementById("zip-success");
  let zipAlertOutside = document.getElementById("zip-outside");

  //Check zip for 98030, 98031, 98032, 98042, 98058
  if (zip.value != "98030" && zip.value != "98031" && zip.value != "98032" && zip.value != "98042" && zip.value != "98058") {
      zipAlertOutside.style.display = "block";
      zipAlert.style.display = "none";
      zip.className = "form-control border-danger";
      zipWarning.className = "btn-inline btn-md btn-danger rounded-right m-0 px-3 py-1 z-depth-0 waves-effect";
  } else {
    // Shows green font for go
    zipAlertOutside.style.display = "none";
    zipAlert.style.display = "block";
    zip.className = "form-control border-success";
    zipWarning.className = "btn-inline btn-md btn-success rounded-right m-0 px-3 py-1 z-depth-0 waves-effect";
  }

}