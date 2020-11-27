// Catches when check other clicked
document.getElementById("chk-other").addEventListener("click", showOther);

// Checks to see if other services is checked if so shows txt box
function showOther() {
  let otherForm = document.getElementById("other-form");
  let other = document.getElementById("chk-other");

  // Makes name warning invisible
    otherForm.style.display = "none";


  //Check to see if there's any text in other form
    if (other.checked == true) {
    otherForm.style.display = "block";

    } 

}