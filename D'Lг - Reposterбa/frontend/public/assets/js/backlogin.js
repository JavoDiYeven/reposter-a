document.getElementById("loginForm").addEventListener("submit", function(event) {
  event.preventDefault();

  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  // Realizar una solicitud AJAX al backend
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "login.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      document.getElementById("message").textContent = response.message;

      if (response.success) {
        // Redireccionar al usuario a la página de inicio
        window.location.href = "/views/pages/backend.php";
      }
    }
  };
  xhr.send("username=" + encodeURIComponent(username) + "&password=" + encodeURIComponent(password));
});
