document.addEventListener("DOMContentLoaded", formCheck); 

// Decides if form hides/shows on load
function formCheck() {
  let time = new Date();
  let day = time.getDay(); // Sunday - Saturday : 0 - 6
  let hour = time.getHours(); // 0 - 23
  
  let form = document.getElementById("form-switch");
  let formAlert = document.getElementById("form-closed-alert");

  // Hides form for M & W
  if((day == 1 || day == 3) && (hour >= 13 && hour <= 16)) {
      form.style.display = "flex";
      formAlert.style.display = "none";
      console.log("Mon/Wed");
  }

  // Hides for Tues
  else if((day == 2) && (hour >= 9 && hour <= 12)) {
     form.style.display = "flex";
      formAlert.style.display = "none";
    console.log("Tue");
  }

  // Shows form otherwise
  else {
      form.style.display = "none";
      formAlert.style.display = "block";
        console.log("Not Open");
  }
}