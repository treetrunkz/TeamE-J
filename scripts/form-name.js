// Catches when form submitted
document.getElementById("form-submit").addEventListener("click", validateForm);

// Checks for name null if null -> shows warning message
function validateForm() {
    
  //Check name for null
  let fNameRequired = document.getElementById("invalid-fName");
  let lNameRequired = document.getElementById("invalid-lName");
  let fName = document.getElementById("form-first-name").value;
  let lName = document.getElementById("form-last-name").value;
  let nameAlert = document.getElementById("alert-name");

  // Flips error for corresponding name element
  if (fName == "") {
    fNameRequired.style.display = "inline-block";
    nameAlert.style.display = "block";
  } 

  else if (fName != "" && lName == "") {
    fNameRequired.style.display = "none";
    lNameRequired.style.display = "inline-block"; 
    nameAlert.style.display = "block";
  }
  
  if (lName == "") {
    lNameRequired.style.display = "inline-block"; 
    nameAlert.style.display = "block";
  } 

  else if (lName != "" && fName == "") {
    lNameRequired.style.display = "none";
    fNameRequired.style.display = "inline-block";
    nameAlert.style.display = "block";
  } 

  if (lName != ""  & fName != "") {
    // Makes name warning invisible
    fNameRequired.style.display = "none";
    lNameRequired.style.display = "none";
    nameAlert.style.display = "none";
  }

}