function contactfunc() {
    function toggleLabel(input, label) {
        if (input.value.trim()) {
            label.classList.add("visible"); // Show label if input has value
        } else {
            label.classList.remove("visible"); // Hide label if input is empty
        }
    }

    // Target inputs and their respective labels by id
    const nameInput = document.getElementById("nameInput");
    const nameLabel = document.getElementById("nameLabel");
    const emailInput = document.getElementById("emailInput");
    const emailLabel = document.getElementById("emailLabel");
    const messageInput = document.getElementById("autoExpandTextarea");
    const messageLabel = document.querySelector(
        'label[for="autoExpandTextarea"]'
    );

    // Add event listeners for all fields
    nameInput.addEventListener("input", () =>
        toggleLabel(nameInput, nameLabel)
    );
    emailInput.addEventListener("input", () =>
        toggleLabel(emailInput, emailLabel)
    );
    messageInput.addEventListener("input", () => {
        toggleLabel(messageInput, messageLabel);

        // Auto-expand logic for textarea
        messageInput.style.height = "auto"; // Reset height
        messageInput.style.height = messageInput.scrollHeight + "px"; // Adjust height to fit content
    });
}
