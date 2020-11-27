document.getElementById("form-zip").addEventListener("input", validateForm);

// Checks for name null if null -> shows warning message
function validateForm() {

  // Var dump
  let zip = document.getElementById("form-zip");
  let submit = document.getElementById("form-submit");
  let zipAlert = document.getElementById("alert-zip-incorrect");
  let zipLength = document.getElementById("form-zip").value;
  let zipRequired = document.getElementById("invalid-zip");

  //Check zip for 98030, 98031, 98032, 98042, 98058
  if (zipLength.length > 4 && (zip.value != "98030" && zip.value != "98031" && zip.value != "98032" && zip.value != "98042" && zip.value != "98058")) {
      zip.className = "form-control border-danger";
      submit.disabled = true;
      submit.className = "btn btn-danger btn-lg float-right";
      zipAlert.style.display = "inline-block";
      zipRequired.style.display = "inline-block";
      
  } else if (zipLength.length > 4 && !(zip.value != "98030" && zip.value != "98031" && zip.value != "98032" && zip.value != "98042" && zip.value != "98058")) {
    // Shows green font for go
    zip.className = "form-control border-success";
    submit.disabled = false;
    submit.className = "btn btn-light btn-lg float-right";
    zipAlert.style.display = "none";
    zipRequired.style.display = "none";

  } else if (zip.value == "") {
    zip.className = "form-control border-white";
    submit.disabled = false;
    submit.className = "btn btn-light btn-lg float-right";
    zipAlert.style.display = "none";
    zipRequired.style.display = "none";

  }

}