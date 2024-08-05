// Added: Actual Bootstrap JavaScript dependency
// import "bootstrap";
import { Modal } from "bootstrap";

// Added: Popper.js dependency for popover support in Bootstrap
import "@popperjs/core";

// Default Laravel bootstrapper, installs axios

import "./bootstrap";
console.log('test')
// Wait until the DOM is fully loaded

// document.addEventListener("DOMContentLoaded", function () {
//     // Configure Axios with CSRF token
//     axios.defaults.headers.common["X-CSRF-TOKEN"] = document
//         .querySelector('meta[name="csrf-token"]')
//         .getAttribute("content");

//     function checkUserStatus(callback) {
//         axios
//             .get("/isAuth") // Correct URL for API routes
//             .then((response) => {
//                 const { authenticated, cookiePresent } = response.data;
//                 callback(authenticated, cookiePresent);
//             })
//             .catch((error) =>
//                 console.error("Error checking authentication:", error)
//             );
//     }

//     function buildQueryString(event) {
//         event.preventDefault();

//         checkUserStatus((authenticated, cookiePresent) => {
//             if (authenticated || cookiePresent) {
//                 submitFilterForm();
//             } else {
//                 console.log("User is not authenticated and cookie not found.");
//                 const modal = new Modal(document.getElementById("infoUser"));
//                 modal.show();
//             }
//         });
//     }

//     function submitFilterForm() {
//         const form = document.getElementById("filterForm");
//         const inputs = form.querySelectorAll("input[name]");
//         const queryParams = Array.from(inputs)
//             .filter((input) => input.value.trim() !== "")
//             .map(
//                 (input) =>
//                     `${encodeURIComponent(input.name)}=${encodeURIComponent(
//                         input.value.trim()
//                     )}`
//             )
//             .join("&");

//         const action = form.getAttribute("action");
//         const queryString = queryParams ? `?${queryParams}` : "";
//         window.location.href = `${action}${queryString}`;
//     }

//     function submitUserInfo() {
//         const form = document.getElementById("userInfoForm");
//         const formData = new FormData(form);

//         axios
//             .post(form.action, formData)
//             .then((response) => {
//                 if (response.data.success) {
//                     // After saving user info, submit the filter form
//                     submitFilterForm();
//                 } else {
//                     alert("Failed to save user info.");
//                 }
//             })
//             .catch((error) => console.error("Error saving user info:", error));
//     }

//     // Add event listener to the form submission
//     const filterForm = document.getElementById("filterForm");
//     if (filterForm) {
//         filterForm.addEventListener("submit", buildQueryString);
//     }

//     // Add event listener to the modal form button
//     const userInfoFormButton = document.querySelector("#infoUser .btn-primary");
//     if (userInfoFormButton) {
//         userInfoFormButton.addEventListener("click", submitUserInfo);
//     }
// });
document.addEventListener("DOMContentLoaded", function () {
    // Configure Axios with CSRF token
    axios.defaults.headers.common["X-CSRF-TOKEN"] = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    // function validateFilterForm() {
    //     const form = document.getElementById("filterForm");
    //     const inputs = form.querySelectorAll("input[name]");
    //     const requiredFields = Array.from(inputs).filter((input) =>
    //         input.hasAttribute("required")
    //     );
    //     let isValid = true;

    //     // Clear previous validation styles
    //     inputs.forEach((input) => (input.style.borderColor = ""));

    //     // Validate required fields
    //     requiredFields.forEach((input) => {
    //         if (input.value.trim() === "") {
    //             isValid = false;
    //             input.style.borderColor = "red"; // Highlight empty required fields
    //         }
    //     });

    //     return isValid;
    // }

    function showAlert(message) {
        const alert = document.getElementById("validationAlert");
        alert.textContent = message; // Set the message text
        alert.classList.remove("d-none"); // Show the alert
    }

    function hideAlert() {
        const alert = document.getElementById("validationAlert");
        alert.classList.add("d-none"); // Hide the alert
    }

    function checkUserStatus(callback) {
        axios
            .get("/isAuth") // Correct URL for API routes
            .then((response) => {
                const { authenticated, cookiePresent } = response.data;
                callback(authenticated, cookiePresent);
            })
            .catch((error) =>
                console.error("Error checking authentication:", error)
            );
    }

    function buildQueryString(event) {
        event.preventDefault();
        checkUserStatus((authenticated, cookiePresent) => {
            if (authenticated || cookiePresent) {
                submitFilterForm();
            } else {
                console.log("User is not authenticated and cookie not found.");
                const modal = new Modal(document.getElementById("infoUser"));
                modal.show();
            }
        });
    }

    function submitFilterForm() {
        const form = document.getElementById("filterForm");
        const inputs = form.querySelectorAll("input[name]");
        // const queryParams = Array.from(inputs)
        //     .filter((input) => input.value.trim() !== "")
        //     .map(
        //         (input) =>
        //             `${encodeURIComponent(input.name)}=${encodeURIComponent(
        //                 input.value.trim()
        //             )}`
        //     )
        //     .join("&");
        // Collect form inputs into a query string
        const queryParams = Array.from(inputs)
            .filter((input) => input.value.trim() !== "")
            .map((input) => {
                // Special case handling for 'Toute-la-France'
                if (
                    input.name === "location" &&
                    input.value.trim() === "Toute-la-France"
                ) {
                    return null; // Exclude this parameter from the query string
                }
                return `${encodeURIComponent(input.name)}=${encodeURIComponent(
                    input.value.trim()
                )}`;
            })
            .filter((param) => param !== null) // Remove null values
            .join("&");

        const action = form.getAttribute("action");
        const queryString = queryParams ? `?${queryParams}` : "";
        window.location.href = `${action}${queryString}`;
    }

    function submitUserInfo() {
        const form = document.getElementById("userInfoForm");
        const formData = new FormData(form);

        axios
            .post(form.action, formData)
            .then((response) => {
                if (response.data.success) {
                    // After saving user info, validate and submit the filter form
                    submitFilterForm();
                } else {
                    alert("Failed to save user info.");
                }
            })
            .catch((error) => console.error("Error saving user info:", error));
    }

    // Add event listener to the form submission
    const filterForm = document.getElementById("filterForm");
    if (filterForm) {
        filterForm.addEventListener("submit", buildQueryString);
    }

    // Add event listener to the modal form button
    const userInfoFormButton = document.querySelector("#infoUser .btn-primary");
    if (userInfoFormButton) {
        userInfoFormButton.addEventListener("click", submitUserInfo);
    }
});
