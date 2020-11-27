// Catches when form submitted
document.getElementById("btn-without").addEventListener("click", disableElements);

// Checks for name null if null -> shows warning message
function disableElements() {

  let street = document.getElementById("form-street");
  let city = document.getElementById("form-city");
  let zip = document.getElementById("form-zip");
  let withoutResidence = document.getElementById("btn-without");
  let submit = document.getElementById("form-submit");

  // Makes name warning invisible
  street.disabled = false;
  city.disabled = false;
  zip.disabled = false;
  submit.disabled = false;
  submit.className = "btn btn-light btn-lg float-right";

  //Check zip for 98030, 98031, 98032, 98042, 98058
    if (withoutResidence.checked === true) {
      street.disabled = true;
      city.disabled = true;
      zip.disabled = true;

    } else {
      // Keeps flipped
      street.disabled = false;
      city.disabled = false;
      zip.disabled = false;

    }

}