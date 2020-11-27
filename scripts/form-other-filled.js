// Catches if user input any text into other
document.getElementById("form-submit").addEventListener("click", validateForm);

// Checks to see if other services is checked if so shows txt box
function validateForm() {
  let other = document.getElementById("chk-other").checked;
  let otherRequired = document.getElementById("invalid-other");
  let otherText = document.getElementById("txt-other");

  // Makes name warning invisible
    otherRequired.style.display = "none";


  //Check to see if there's any text in other form
    if (otherText.value == "" && other) {
    otherRequired.style.display = "block";
    }
    
    if (!other) {
      // Keeps flipped
    otherRequired.style.display = "none";
    }

}