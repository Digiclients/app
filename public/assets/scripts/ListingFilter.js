// Save form values to localStorage
document.getElementById('filterSearchForm').addEventListener('submit', function() {
    const formData = new FormData(this);
    const values = {};
    
    // Create an array for checkbox values
    const checkboxValues = {};

    formData.forEach((value, key) => {
        if (checkboxValues[key]) {
            checkboxValues[key].push(value);
        } else {
            checkboxValues[key] = [value];
        }
    });

    // Handle checkboxes and radio buttons separately
    const checkboxData = {};
    document.querySelectorAll('input[type="checkbox"]').forEach((checkbox) => {
        if (checkbox.checked) {
            if (!checkboxData[checkbox.name]) {
                checkboxData[checkbox.name] = [];
            }
            checkboxData[checkbox.name].push(checkbox.value);
        }
    });

    // Combine both checkbox and other form values
    Object.assign(values, checkboxData, formDataToJSON(formData));
    localStorage.setItem('formValues', JSON.stringify(values));
});

// Convert FormData to JSON
function formDataToJSON(formData) {
    const values = {};
    formData.forEach((value, key) => {
        if (values[key]) {
            values[key] = Array.isArray(values[key]) ? values[key] : [values[key]];
            values[key].push(value);
        } else {
            values[key] = value;
        }
    });
    return values;
}

// Populate form fields with saved values
document.addEventListener('DOMContentLoaded', () => {
    const savedValues = JSON.parse(localStorage.getItem('formValues'));
    if (savedValues) {
        for (const [key, value] of Object.entries(savedValues)) {
            const fields = document.querySelectorAll(`[name="${key}"]`);
            if (fields.length > 0) {
                fields.forEach(field => {
                    if (field.type === 'checkbox') {
                        field.checked = value.includes(field.value);
                    } else if (field.type === 'radio') {
                        field.checked = value === field.value;
                    } else {
                        field.value = value;
                    }
                });
            }
        }
        // Clear localStorage after loading data
        localStorage.removeItem('formValues');
    }
});

















// document.getElementById('filterSearchForm').addEventListener('submit', function(event) {
//     // Perform any custom actions before form submission if needed
//     // For now, just let the form submit as GET request
// });

document.getElementById('resetButton').addEventListener('click', function() {
    // Select all .info-selected elements
    const infoSelectedElements = document.querySelectorAll('.info-selected');

    // Iterate through each .info-selected element and set the text content to "Tout"
    infoSelectedElements.forEach(selectedP => {
        selectedP.textContent = 'Tout';
    });
});





document.addEventListener("DOMContentLoaded", function() {
    const MAX_ITEMS = 2; // Set your max items limit here
    const canvasedElements = document.querySelectorAll(".canvased");
    const offcanvasElement = document.getElementById("offcanvasRight");
    const offcanvasBody = offcanvasElement.querySelector(".offcanvas-body");
    const validateSelectionBtn = document.getElementById("validateSelection");

    let activeRealInputs; // To store the currently active .RealInputs div

    canvasedElements.forEach(canvased => {
        const realInputs = canvased.querySelector(".RealInputs");
        const inputs = realInputs.querySelectorAll("input[type='radio'], input[type='checkbox']");
        const labelMain = canvased.querySelector(".canvasedMainLabel").innerHTML;

        // Function to update .infos div
        function updateInfosDiv() {
            const infosDiv = canvased.querySelector(".infos");
            if (infosDiv) {
                const selectedLabels = Array.from(inputs)
                    .filter(input => input.checked)
                    .map(input => input.nextElementSibling.textContent);

                const selectedP = infosDiv.querySelector('.info-selected');
                selectedP.textContent = selectedLabels.length ? selectedLabels.join(", ") : "Tout";
            }
        }

        if (inputs.length > MAX_ITEMS) {
            // Hide the RealInputs div
            realInputs.style.display = "none";

            // Use the template to create the .infos div
            const template = document.getElementById("infos-template");
            const clone = template.content.cloneNode(true);
            const infosDiv = clone.querySelector(".infos");
            const titleP = infosDiv.querySelector(".info-title");
            const valuesP = infosDiv.querySelector(".info-values");
            const selectedP = infosDiv.querySelector(".info-selected");

            // Set the main label
            titleP.textContent = labelMain;

            // Get the first three labels
            const firstThreeLabels = Array.from(inputs)
                .slice(0, 3)
                .map(input => input.nextElementSibling.textContent)
                .join(", ");
            valuesP.textContent = firstThreeLabels || "Tout";

            // Set initial selected text
            selectedP.textContent = "Tout";

            // Append the infos div to the canvased div
            canvased.appendChild(infosDiv);

            // Update infos div with initial input states
            updateInfosDiv();

            // Add event listener to the infos div to open the Offcanvas
            infosDiv.addEventListener("click", function() {
                // Set the active RealInputs for the current canvased div
                activeRealInputs = realInputs;

                // Copy the RealInputs HTML to the Offcanvas body
                offcanvasBody.innerHTML = realInputs.innerHTML;

                // Sync the checked state of inputs in the Offcanvas with the hidden RealInputs
                const offcanvasInputs = offcanvasBody.querySelectorAll(
                    "input[type='radio'], input[type='checkbox']");
                offcanvasInputs.forEach((offcanvasInput, index) => {
                    offcanvasInput.checked = inputs[index].checked;
                });

                // Set the Offcanvas header
                document.getElementById("offcanvasRightLabel").innerText =
                    `Sélectionner ${labelMain}`;

                // Show the Offcanvas
                const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
                offcanvas.show();
            });
        } else {
            // Update infos div if there are not too many items
            updateInfosDiv();
        }
    });

    // Add event listener to the "Valider" button
    validateSelectionBtn.addEventListener("click", function() {
        if (activeRealInputs) {
            // Get the inputs inside the active RealInputs
            const realInputs = activeRealInputs.querySelectorAll(
                "input[type='radio'], input[type='checkbox']");
            const offcanvasInputs = offcanvasBody.querySelectorAll(
                "input[type='radio'], input[type='checkbox']");

            // Update the original RealInputs based on the selections made in the Offcanvas
            offcanvasInputs.forEach((input, index) => {
                realInputs[index].checked = input.checked;
            });

            // Update the info-selected text
            const selectedLabels = Array.from(realInputs)
                .filter(i => i.checked)
                .map(i => i.nextElementSibling.textContent);

            const selectedP = activeRealInputs.closest('.canvased').querySelector('.info-selected');
            selectedP.textContent = selectedLabels.length ? selectedLabels.join(", ") : "Tout";

            // Hide the Offcanvas
            const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
            offcanvas.hide();
        }
    });
});






// START code to make the  label works inside the  offcanvasRight to change the check
document.addEventListener("DOMContentLoaded", function() {
    // Select the static parent element #offcanvasRight
    const offcanvasRight = document.querySelector("#offcanvasRight");

    // Delegate click event for labels within #offcanvasRight
    offcanvasRight.addEventListener("click", function(event) {
        // Check if the clicked element is a label
        if (event.target && event.target.matches(".form-check-label")) {
            // Prevent default behavior of the label click
            event.preventDefault();

            // Find the associated input element within #offcanvasRight
            const inputId = event.target.getAttribute('for');
            const input = document.querySelector(`#offcanvasRight #${inputId}`);

            // Toggle the checked state of the input
            if (input) {
                input.checked = !input.checked;
            }
        }
    });
});

// END code to make the  label works inside the  offcanvasRight to change the check
















































// ********** start  **********

// document.addEventListener('DOMContentLoaded', function () {
//     // Function to get URL parameters
//     function getUrlParams() {
//         const params = new URLSearchParams(window.location.search);
//         const result = {};
//         for (const [key, value] of params.entries()) {
//             if (result[key]) {
//                 // Convert to array if it is not already
//                 if (!Array.isArray(result[key])) {
//                     result[key] = [result[key]];
//                 }
//                 result[key].push(value);
//             } else {
//                 result[key] = value;
//             }
//         }
//         return result;
//     }

//     // Function to populate form fields with values
//     function populateFormValues(values) {
//         const form = document.getElementById('filterSearchForm');
//         if (!form) return;

//         Object.keys(values).forEach(key => {
//             const fieldValues = Array.isArray(values[key]) ? values[key] : [values[key]];

//             // Find all fields with the name matching the key
//             const fields = form.querySelectorAll(`[name="${key}"]`);

//             fields.forEach(field => {
//                 if (field.type === 'checkbox') {
//                     // For checkboxes, check if the value is in the array of values
//                     field.checked = fieldValues.includes(field.value);
//                 } else if (field.type === 'radio') {
//                     // For radio buttons, check if the value matches
//                     field.checked = fieldValues.length === 1 && field.value === fieldValues[0];
//                 } else {
//                     // For other input types (e.g., text, number)
//                     field.value = fieldValues[0];
//                 }
//             });
//         });
//     }

//     // Check local storage for formValues
//     const storedValues = localStorage.getItem('formValues');
//     if (storedValues) {
//         // Parse and populate form with stored values
//         populateFormValues(JSON.parse(storedValues));
//     } else {
//         // No stored values, use URL parameters
//         const urlParams = getUrlParams();
//         populateFormValues(urlParams);
//     }
// });

/// this code will check if the local storage value that store the form data is empty
// and the link loaded has some values and queries to fill the form
// +++++ provide .infos rendering

document.addEventListener('DOMContentLoaded', function () {
    // Function to get URL parameters
    function getUrlParams() {
        const params = new URLSearchParams(window.location.search);
        const result = {};
        for (const [key, value] of params.entries()) {
            if (result[key]) {
                // Convert to array if it is not already
                if (!Array.isArray(result[key])) {
                    result[key] = [result[key]];
                }
                result[key].push(value);
            } else {
                result[key] = value;
            }
        }
        return result;
    }

    // Function to populate form fields with values
    function populateFormValues(values) {
        const form = document.getElementById('filterSearchForm');
        if (!form) return;

        Object.keys(values).forEach(key => {
            const fieldValues = Array.isArray(values[key]) ? values[key] : [values[key]];

            // Find all fields with the name matching the key
            const fields = form.querySelectorAll(`[name="${key}"]`);

            fields.forEach(field => {
                if (field.type === 'checkbox') {
                    // For checkboxes, check if the value is in the array of values
                    field.checked = fieldValues.includes(field.value);
                } else if (field.type === 'radio') {
                    // For radio buttons, check if the value matches
                    field.checked = fieldValues.length === 1 && field.value === fieldValues[0];
                } else {
                    // For other input types (e.g., text, number)
                    field.value = fieldValues[0];
                }
            });
        });
    }

    // Function to update .info-selected elements
    function updateInfoSelected() {
        const canvasedElements = document.querySelectorAll('.canvased');

        canvasedElements.forEach(canvased => {
            const realInputs = canvased.querySelector('.RealInputs');
            const inputs = realInputs.querySelectorAll('input[type="radio"], input[type="checkbox"]');
            const infosDiv = canvased.querySelector('.infos');

            if (infosDiv) {
                const selectedLabels = Array.from(inputs)
                    .filter(input => input.checked)
                    .map(input => input.nextElementSibling.textContent);

                const selectedP = infosDiv.querySelector('.info-selected');
                if (selectedP) {
                    selectedP.textContent = selectedLabels.length ? selectedLabels.join(', ') : 'Tout';
                }
            }
        });
    }

    // Check local storage for formValues
    const storedValues = localStorage.getItem('formValues');
    if (!storedValues) {
                // No stored values, use URL parameters
                const urlParams = getUrlParams();
                populateFormValues(urlParams);
        
                // Update .info-selected elements after populating form
                updateInfoSelected();
    }
});


// ********** end  **********



