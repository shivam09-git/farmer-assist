// assets/js/auth.js

document.addEventListener("DOMContentLoaded", () => {
  const authLinks = document.getElementById("auth-links");
  if (!authLinks) return; // skip if not present on page

  const user = JSON.parse(localStorage.getItem("user"));

  if (user && user.email) {
    authLinks.innerHTML = `
      <span>👋 Hello, ${user.name}</span>
      <button id="logout-btn" class="btn" style="margin-left:10px;">Logout</button>
    `;

    document.getElementById("logout-btn").addEventListener("click", () => {
      localStorage.removeItem("user");
      alert("Logged out successfully!");
      window.location.href = "index.html";
    });
  } else {
    authLinks.innerHTML = `
      <a href="login.html">Login</a> /
      <a href="signup.html">Signup</a>
    `;
  }
});
