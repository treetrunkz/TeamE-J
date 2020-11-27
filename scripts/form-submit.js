// Checks if any alerts showing, if so it doesn't allow for submit       
let submit = document.getElementById("form-submit");

submit.addEventListener("click", validate);

function validate() {
  let valid = true;

  let nameAlert = document.getElementById("alert-name");
  let contactAlert = document.getElementById("alert-contact");
  let zipAlert = document.getElementById("alert-zip");
  let checkAlert = document.getElementById("alert-check");
  let servicesForm = document.getElementById("services-form");
  let submitConfirmation = document.getElementById("form-finished");
  let formSubmit = document.getElementById("form-switch");

  // TODO - FIGURE THIS OUT
  //Check name
 if (nameAlert.style.display == "block" || contactAlert.style.display == "block" || zipAlert.style.display == "block" || checkAlert.style.display == "block") {
    submitConfirmation.style.display = "none";
    valid = false;
    } else {
      formSubmit.style.display = "none";
      submitConfirmation.style.display = "block";
      valid = true;
    }

  return valid;
}