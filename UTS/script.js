document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const notification = document.getElementById("notification");

    form.addEventListener("submit", function (event) {
        event.preventDefault();
        setTimeout(function () {
            notification.style.display = "block";
            form.reset();
            setTimeout(() => {
                notification.style.display = "none";
            }, 3000);
        }, 500);
    });
});
