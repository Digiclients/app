// Added: Actual Bootstrap JavaScript dependency
// import "bootstrap";

// Added: Popper.js dependency for popover support in Bootstrap
import { Modal } from "bootstrap";
// Default Laravel bootstrapper, installs axios

import "./bootstrap";
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import "@popperjs/core";

console.log("test");
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
// document.addEventListener("DOMContentLoaded", function () {
//     // Configure Axios with CSRF token
//     axios.defaults.headers.common["X-CSRF-TOKEN"] = document
//         .querySelector('meta[name="csrf-token"]')
//         .getAttribute("content");

//     // function validateFilterForm() {
//     //     const form = document.getElementById("filterForm");
//     //     const inputs = form.querySelectorAll("input[name]");
//     //     const requiredFields = Array.from(inputs).filter((input) =>
//     //         input.hasAttribute("required")
//     //     );
//     //     let isValid = true;

//     //     // Clear previous validation styles
//     //     inputs.forEach((input) => (input.style.borderColor = ""));

//     //     // Validate required fields
//     //     requiredFields.forEach((input) => {
//     //         if (input.value.trim() === "") {
//     //             isValid = false;
//     //             input.style.borderColor = "red"; // Highlight empty required fields
//     //         }
//     //     });

//     //     return isValid;
//     // }

//     function showAlert(message) {
//         const alert = document.getElementById("validationAlert");
//         alert.textContent = message; // Set the message text
//         alert.classList.remove("d-none"); // Show the alert
//     }

//     function hideAlert() {
//         const alert = document.getElementById("validationAlert");
//         alert.classList.add("d-none"); // Hide the alert
//     }

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
//         // const queryParams = Array.from(inputs)
//         //     .filter((input) => input.value.trim() !== "")
//         //     .map(
//         //         (input) =>
//         //             `${encodeURIComponent(input.name)}=${encodeURIComponent(
//         //                 input.value.trim()
//         //             )}`
//         //     )
//         //     .join("&");
//         // Collect form inputs into a query string
//         const queryParams = Array.from(inputs)
//             .filter((input) => input.value.trim() !== "")
//             .map((input) => {
//                 // Special case handling for 'Toute-la-France'
//                 if (
//                     input.name === "location" &&
//                     input.value.trim() === "Toute-la-France"
//                 ) {
//                     return null; // Exclude this parameter from the query string
//                 }
//                 return `${encodeURIComponent(input.name)}=${encodeURIComponent(
//                     input.value.trim()
//                 )}`;
//             })
//             .filter((param) => param !== null) // Remove null values
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
//                     // After saving user info, validate and submit the filter form
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

function incrementSearchCounter(callback) {
    axios
        .get("/increment-search-count")
        .then((response) => {
            const searchCount = response.data.searchCount;
            callback(searchCount);
        })
        .catch((error) => {
            console.error("Error incrementing search count:", error);
        });
}

document.addEventListener("DOMContentLoaded", function () {
    axios.defaults.headers.common["X-CSRF-TOKEN"] = document
        .querySelector('meta[name="csrf-token"]')
        .getAttribute("content");

    function checkUserStatus(callback) {
        axios
            .get("/isAuth")
            .then((response) => {
                const { authenticated, cookiePresent } = response.data;
                callback(authenticated, cookiePresent);
            })
            .catch((error) => {
                console.error("Error checking authentication:", error);
            });
    }

    function showValidationAlert(message) {
        const alertDiv = document.getElementById("validationAlert");
        alertDiv.textContent = message;
        alertDiv.classList.remove("d-none"); // Show the alert
    }

    function validateForm() {
        const anneeModeleInput = document.querySelector(
            'input[name="annee_modele"]'
        );
        const kilometrageInput = document.querySelector(
            'input[name="kilometrage"]'
        );
        const marqueInput = document.querySelector('input[name="marque"]');

        // Initialize error messages
        let errorMessage = "";

        // Validate annee_modele if it contains a value
        if (anneeModeleInput.value.trim()) {
            const [anneeMin, anneeMax] = anneeModeleInput.value
                .split("-")
                .map(Number);

            if (
                !(anneeMin >= 1850 && anneeMax <= 2025 && anneeMin <= anneeMax)
            ) {
                errorMessage +=
                    "L'année modèle doit être comprise entre 1850 et 2025, et la valeur minimum doit être inférieure ou égale à la valeur maximum. ";
            }
        }

        // Validate kilometrage if it contains a value
        if (kilometrageInput.value.trim()) {
            const [kilometrageMin, kilometrageMax] = kilometrageInput.value
                .replace(/\s+/g, "")
                .split("-")
                .map(Number);

            if (
                !(
                    kilometrageMin >= 0 &&
                    kilometrageMax <= 1000000 &&
                    kilometrageMin <= kilometrageMax
                )
            ) {
                errorMessage +=
                    "Le kilométrage doit être compris entre 0 et 1 000 000, et la valeur minimum doit être inférieure ou égale à la valeur maximum. ";
            }
        }

        // Validation for marque field
        if (!marqueInput.value.trim()) {
            errorMessage += "Le champ 'Marque' est requis. ";
        }

        // If there are any error messages, show them and return false
        if (errorMessage) {
            showValidationAlert(errorMessage.trim());
            return false;
        }

        // Hide the alert if everything is valid
        const alertDiv = document.getElementById("validationAlert");
        alertDiv.classList.add("d-none");
        return true;
    }

    function buildQueryString(event) {
        event.preventDefault();
        if (!validateForm()) {
            return; // Stop execution if form validation fails
        }
        incrementSearchCounter((searchCount) => {
            if (searchCount >= 3) {
                checkUserStatus((authenticated, cookiePresent) => {
                    if (authenticated || cookiePresent) {
                        console.log(
                            "User is authenticated or cookie is present."
                        );
                        submitFilterForm();
                    } else {
                        console.log(
                            "User is not authenticated and cookie not found."
                        );
                        const modal = new Modal(
                            document.getElementById("infoUser")
                        );
                        modal.show();
                    }
                });
            } else {
                submitFilterForm();
            }
        });
    }

    function submitFilterForm() {
        const form = document.getElementById("filterForm");
        const inputs = form.querySelectorAll("input[name]");
        const selects = form.querySelectorAll("select[name]"); // Select all <select> elements

        // Collect query parameters from inputs
        const queryParams = Array.from(inputs)
            .filter((input) => input.value.trim() !== "")
            .map((input) => {
                if (
                    input.name === "location" &&
                    input.value.trim() === "Toute-la-France"
                ) {
                    return null;
                }
                return `${encodeURIComponent(input.name)}=${encodeURIComponent(
                    input.value.trim()
                )}`;
            })
            .filter((param) => param !== null);

        // Collect query parameters from selects
        const selectParams = Array.from(selects)
            .filter((select) => select.value.trim() !== "")
            .map((select) => `${encodeURIComponent(select.name)}=${encodeURIComponent(select.value.trim())}`);

        // Combine parameters from both inputs and selects
        const allParams = queryParams.concat(selectParams);

        const action = form.getAttribute("action");
        const queryString = allParams.length ? `?${allParams.join("&")}` : "";
        window.location.href = `${action}${queryString}#PrixMoyen`;
    }
    // function submitFilterForm() {
    //     const form = document.getElementById("filterForm");
    //     const inputs = form.querySelectorAll("input[name]");

    //     const queryParams = Array.from(inputs)
    //         .filter((input) => input.value.trim() !== "")
    //         .map((input) => {
    //             if (
    //                 input.name === "location" &&
    //                 input.value.trim() === "Toute-la-France"
    //             ) {
    //                 return null;
    //             }
    //             return `${encodeURIComponent(input.name)}=${encodeURIComponent(
    //                 input.value.trim()
    //             )}`;
    //         })
    //         .filter((param) => param !== null)
    //         .join("&");

    //     const action = form.getAttribute("action");
    //     const queryString = queryParams ? `?${queryParams}` : "";
    //     window.location.href = `${action}${queryString}#PrixMoyen`;
    // }

    function submitUserInfo() {
        const form = document.getElementById("userInfoForm");
        const formData = new FormData(form);

        axios
            .post(form.action, formData)
            .then((response) => {
                if (response.data.success) {
                    submitFilterForm();
                } else {
                    alert("Failed to save user info.");
                }
            })
            .catch((error) => {
                console.error("Error saving user info:", error);
            });
    }

    const filterForm = document.getElementById("filterForm");
    if (filterForm) {
        filterForm.addEventListener("submit", buildQueryString);
    }

    const userInfoFormButton = document.querySelector("#infoUser .btn-primary");
    if (userInfoFormButton) {
        userInfoFormButton.addEventListener("click", submitUserInfo);
    }
});


























































