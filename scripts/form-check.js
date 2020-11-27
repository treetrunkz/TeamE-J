// chk-utility chk-rent chk-gas chk-thrift chk-id chk-goods alert-check

// Catches when form submitted
document.getElementById("form-submit").addEventListener("click", validateForm);

// Checks for...er checks and if none == false
function validateForm() {

  // Var dump (Been calling it this since I started programming)
  let checkAlert = document.getElementById("alert-check");
  let utility = document.getElementById("chk-utility");
  let rent = document.getElementById("chk-rent");
  let gas = document.getElementById("chk-gas");
  let thrift = document.getElementById("chk-thrift");
  let id = document.getElementById("chk-id");
  let goods = document.getElementById("chk-goods");
  let other = document.getElementById("chk-other");

  // Makes name warning invisible
  checkAlert.style.display = "none";

  //Check if any checked
    if (utility.checked == false && rent.checked == false && gas.checked == false && thrift.checked == false && id.checked == false && goods.checked == false && other.checked == false) {
      checkAlert.style.display = "inline-block";
    }
    
}