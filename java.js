document.getElementById("contact-form").addEventListener("submit", function(event) {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;

    if (!name || !email || !message) {
        alert("All fields must be filled out!");
        event.preventDefault(); // Prevent form submission
    }
});
