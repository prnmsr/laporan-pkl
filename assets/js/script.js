document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute("href")).scrollIntoView({
                behavior: "smooth"
            });
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar-fixed");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.style.background = "rgba(0, 0, 0, 0.9)";
        } else {
            navbar.style.background = "rgba(0, 0, 0, 0.8)";
        }
    });
});

//icon password
document.addEventListener("DOMContentLoaded", function () {
    var togglePassword = document.querySelector(".toggle-password");
    var passwordField = document.getElementById("password");

    togglePassword.addEventListener("click", function () {
        if (passwordField.type === "password") {
            passwordField.type = "text";
            this.innerText = "🔒"; // Ubah ikon saat terlihat
        } else {
            passwordField.type = "password";
            this.innerText = "👁"; // Kembalikan ikon awal
        }
    });
});

// Toggle sidebar untuk responsif
document.querySelector('.menu-toggle').addEventListener('click', function() {
    document.querySelector('.sidebar').classList.toggle('active');
});
