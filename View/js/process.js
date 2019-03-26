function showMessage() {
    var x = document.getElementById("submit");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
  }