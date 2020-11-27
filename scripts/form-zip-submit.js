// Catches when form submitted
document.getElementById("form-submit").addEventListener("click", validateForm);

// Checks for name null if null -> shows warning message
function validateForm() {

  // Var dump
  let zip = document.getElementById("form-zip");
  let zipAlert = document.getElementById("alert-zip");
  let zipRequired = document.getElementById("invalid-zip");
  let withoutResidence = document.getElementById("btn-without");

  //Check zip for 98030, 98031, 98032, 98042, 98058
  if (withoutResidence.checked == false && zip.value != "98030" && zip.value != "98031" && zip.value != "98032" && zip.value != "98042" && zip.value != "98058") {
    zipRequired.style.display = "inline-block";
    zipAlert.style.display = "block";
  } 
  
  // To catch if someone checked off without perm residence
  else if (withoutResidence.checked == false) {
    zipRequired.style.display = "none";
    zipAlert.style.display = "none";
  }

  else {
    zipRequired.style.display = "none";
    zipAlert.style.display = "none";
  }

}
