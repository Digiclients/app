// let filtersData = {
//     location: [],
//     marques: [],
//     models: [],
//     type_de_vehicule: [],
//     carburant: [],
//     boite_vitesse: [],
//     crit_air: [],
//     etat_du_vehicule: [],
//     nombre_de_portes: [],
//     nombre_de_place: [],
//     couleur: [],
//     permis: [],
//     type_de_vendeur: ["particulier", "professionnel"],
// };

// document.addEventListener("DOMContentLoaded", () => {
//     const modelListDiv = document.querySelector(".model-list");

//     // Show the loader before making the request
//     modelListDiv.innerHTML = `
//     <div class="spinner-border text-primary" role="status">
//         <span class="sr-only">Loading...</span>
//     </div>`;


//     // Fetch getLocations
//     axios.get('{{ route('getLocations') }}')
//         .then(locationsResponse => {
//             filtersData.location = [...new Set(locationsResponse.data.map((item) => item
//                 .Localization))];

//             document.querySelectorAll(".autocompleteInput").forEach((container) => {
//                 CreateAutocompleteInput(container);
//             });

//         }).catch(error => {
//             console.error("Error fetching data:", error);
//         });

//     // Fetch getMarques
//     axios.get('{{ route('getMarques') }}').then(marquesResponse => {
//             filtersData.marques = [...new Set(marquesResponse.data.map((item) => item.category_name))];
//             populateCheckboxesById('marques', filtersData.marques);
//         })
//         .catch(error => {
//             console.error("Error fetching Marques data:", error);
//         });

//     // Fetch getAttributesOptions
//     axios.get('{{ route('getAttributesOptions') }}').then(attributesOptionsResponse => {
//             filtersData.type_de_vehicule = attributesOptionsResponse.data.type_vehicule;
//             filtersData.carburant = attributesOptionsResponse.data.carburant;
//             filtersData.boite_vitesse = attributesOptionsResponse.data.boite_vitesse;
//             filtersData.crit_air = attributesOptionsResponse.data.crit_air;
//             filtersData.etat_du_vehicule = attributesOptionsResponse.data.etat_du_vehicule;
//             filtersData.nombre_de_portes = attributesOptionsResponse.data.nombre_porte;
//             filtersData.nombre_de_place = attributesOptionsResponse.data.nombre_place;
//             filtersData.couleur = attributesOptionsResponse.data.couleur;
//             filtersData.permis = attributesOptionsResponse.data.permis;

//             // Populate checkboxes
//             populateCheckboxesById('type_de_vehicule', filtersData.type_de_vehicule);
//             populateCheckboxesById('carburant', filtersData.carburant);
//             populateCheckboxesById('boite_vitesse', filtersData.boite_vitesse);
//             populateCheckboxesById('crit_air', filtersData.crit_air);
//             populateCheckboxesById('etat_du_vehicule', filtersData.etat_du_vehicule);
//             populateCheckboxesById('nombre_de_portes', filtersData.nombre_de_portes);
//             populateCheckboxesById('nombre_de_place', filtersData.nombre_de_place);
//             populateCheckboxesById('couleur', filtersData.couleur);
//             populateCheckboxesById('permis', filtersData.permis);
//             populateCheckboxesById('typeVendeurs', filtersData.type_de_vendeur);

//         })
//         .catch(error => {
//             console.error("Error fetching getAttributesOptions:", error);
//         });



// });



// function populateCheckboxesById(containerId, options) {
//     const container = document.getElementById(containerId);
//     container.innerHTML = ""; // Clear any existing content

//     options.forEach(option => {
//         let optionId, optionValue;

//         // Check if the option is an object or a string
//         if (typeof option === 'object') {
//             optionId = option.id;
//             optionValue = option.value;
//         } else {
//             optionId = option;
//             optionValue = option;
//         }

//         const inputType = containerId === 'marques' ? 'radio' : 'checkbox';
//         const inputName = containerId === 'marques' ? 'marque' : `${containerId}[]`;
//         const inputId = `${containerId}_${optionId}`; // Unique ID for the input

//         const inputHTML = `
//     <div class="form-check">
//         <input class="form-check-input" type="${inputType}" name="${inputName}" id="${inputId}" value="${optionValue}">
//         <label class="form-check-label" for="${inputId}">${optionValue}</label>
//     </div>`;
//         container.innerHTML += inputHTML;
//     });

//     // Add event listener for the container (event delegation)
//     if (containerId === 'marques') {
//         container.addEventListener('change', handleMarqueChange);
//     }
// }

// function handleMarqueChange(event) {
//     if (event.target.classList.contains('form-check-input')) {
//         const selectedMarque = event.target.value;
//         console.log("Selected Marque:", selectedMarque);

//         // Send a GET request to fetch models for the selected marque
//         axios.get(`/api/models/${encodeURIComponent(selectedMarque)}`)
//             .then(response => {
//                 // Verify the response data structure
//                 console.log("Response Data:", response.data);

//                 // Assuming the response data is an array of models
//                 filtersData.models = response.data.map(item => item
//                     .category_name); // Adjust according to actual response structure

//                 // Update the UI with the received models
//                 updateModelOptions(filtersData.models);
//             })
//             .catch(error => {
//                 console.error("Error fetching models:", error);
//             });
//     }
// }



// function updateModelOptions(models) {
//     const modelContainer = document.getElementById(
//         'models'); // Ensure you have an element with this ID to display models
//     modelContainer.innerHTML = ""; // Clear existing content

//     models.forEach((model, index) => {
//         const modelId = `model_${index}`; // Unique ID for each model input
//         // Check if model is an object and use appropriate properties
//         const modelValue = typeof model === 'object' ? model.value : model;
//         const modelLabel = typeof model === 'object' ? model.value : model;

//         const modelHTML = `
//     <div class="form-check">
//         <input class="form-check-input" type="checkbox" name="modele[]" id="${modelId}" value="${modelValue}">
//         <label class="form-check-label" for="${modelId}">${modelLabel}</label>
//     </div>`;

//         modelContainer.innerHTML += modelHTML;
//     });
// }













// function CreateAutocompleteInput(container) {
//     const dataArrayName = container.querySelector("input").getAttribute("data-array");
//     const dataArray = filtersData[dataArrayName];
//     const modelList = container.querySelector(".model-list");
//     const searchInput = container.querySelector(".search-input");
//     const selectedInput = container.querySelector("input");

//     function renderLocationList(filter = "") {
//         modelList.innerHTML = "";
//         dataArray
//             .filter((item) => item.toLowerCase().includes(filter.toLowerCase()))
//             .forEach((item) => {
//                 const listItem = document.createElement("div");
//                 listItem.classList.add("dropdown-item");
//                 listItem.textContent = item;
//                 listItem.addEventListener("click", () => {
//                     selectedInput.value = item;
//                     container.querySelector(".dropdown-menu").classList.remove("show");
//                 });
//                 modelList.appendChild(listItem);
//             });
//     }

//     searchInput.addEventListener("input", () => {
//         renderLocationList(searchInput.value);
//     });

//     selectedInput.addEventListener("focus", () => {
//         container.querySelector(".dropdown-menu").classList.add("show");
//     });

//     document.addEventListener("click", (event) => {
//         if (!container.contains(event.target)) {
//             container.querySelector(".dropdown-menu").classList.remove("show");
//         }
//     });

//     renderLocationList();
// }




















































// !!!!!!!!!!!!!!   MY CODE !!!!!!!!!!!!!!!!!!


























// // Save form values to localStorage
// document.getElementById('filterSearchForm').addEventListener('submit', function() {
//     const formData = new FormData(this);
//     const values = {};

//     // Create an array for checkbox values
//     const checkboxValues = {};

//     formData.forEach((value, key) => {
//         if (checkboxValues[key]) {
//             checkboxValues[key].push(value);
//         } else {
//             checkboxValues[key] = [value];
//         }
//     });

//     // Handle checkboxes and radio buttons separately
//     const checkboxData = {};
//     document.querySelectorAll('input[type="checkbox"]').forEach((checkbox) => {
//         if (checkbox.checked) {
//             if (!checkboxData[checkbox.name]) {
//                 checkboxData[checkbox.name] = [];
//             }
//             checkboxData[checkbox.name].push(checkbox.value);
//         }
//     });

//     // Combine both checkbox and other form values
//     Object.assign(values, checkboxData, formDataToJSON(formData));
//     localStorage.setItem('formValues', JSON.stringify(values));
// });

// // Convert FormData to JSON
// function formDataToJSON(formData) {
//     const values = {};
//     formData.forEach((value, key) => {
//         if (values[key]) {
//             values[key] = Array.isArray(values[key]) ? values[key] : [values[key]];
//             values[key].push(value);
//         } else {
//             values[key] = value;
//         }
//     });
//     return values;
// }

// // Populate form fields with saved values
// document.addEventListener('DOMContentLoaded', () => {
//     const savedValues = JSON.parse(localStorage.getItem('formValues'));
//     if (savedValues) {
//         for (const [key, value] of Object.entries(savedValues)) {
//             const fields = document.querySelectorAll(`[name="${key}"]`);
//             if (fields.length > 0) {
//                 fields.forEach(field => {
//                     if (field.type === 'checkbox') {
//                         field.checked = value.includes(field.value);
//                     } else if (field.type === 'radio') {
//                         field.checked = value === field.value;
//                     } else {
//                         field.value = value;
//                     }
//                 });
//             }
//         }
//         // Clear localStorage after loading data
//         localStorage.removeItem('formValues');
//     }
// });
















// document.getElementById('resetButton').addEventListener('click', function() {
//     // Select all .info-selected elements
//     const infoSelectedElements = document.querySelectorAll('.info-selected');

//     // Iterate through each .info-selected element and set the text content to "Tout"
//     infoSelectedElements.forEach(selectedP => {
//         selectedP.textContent = 'Tout';
//     });
// });





// document.addEventListener("DOMContentLoaded", function() {
//     const MAX_ITEMS = 2; // Set your max items limit here
//     const canvasedElements = document.querySelectorAll(".canvased");
//     const offcanvasElement = document.getElementById("offcanvasRight");
//     const offcanvasBody = offcanvasElement.querySelector(".offcanvas-body");
//     const validateSelectionBtn = document.getElementById("validateSelection");

//     let activeRealInputs; // To store the currently active .RealInputs div

//     canvasedElements.forEach(canvased => {
//         const realInputs = canvased.querySelector(".RealInputs");
//         const inputs = realInputs.querySelectorAll("input[type='radio'], input[type='checkbox']");
//         const labelMain = canvased.querySelector(".canvasedMainLabel").innerHTML;

//         // Function to update .infos div
//         function updateInfosDiv() {
//             const infosDiv = canvased.querySelector(".infos");
//             if (infosDiv) {
//                 const selectedLabels = Array.from(inputs)
//                     .filter(input => input.checked)
//                     .map(input => input.nextElementSibling.textContent);

//                 const selectedP = infosDiv.querySelector('.info-selected');
//                 selectedP.textContent = selectedLabels.length ? selectedLabels.join(", ") : "Tout";
//             }
//         }

//         if (inputs.length > MAX_ITEMS) {
//             // Hide the RealInputs div
//             realInputs.style.display = "none";

//             // Use the template to create the .infos div
//             const template = document.getElementById("infos-template");
//             const clone = template.content.cloneNode(true);
//             const infosDiv = clone.querySelector(".infos");
//             const titleP = infosDiv.querySelector(".info-title");
//             const valuesP = infosDiv.querySelector(".info-values");
//             const selectedP = infosDiv.querySelector(".info-selected");

//             // Set the main label
//             titleP.textContent = labelMain;

//             // Get the first three labels
//             const firstThreeLabels = Array.from(inputs)
//                 .slice(0, 3)
//                 .map(input => input.nextElementSibling.textContent)
//                 .join(", ");
//             valuesP.textContent = firstThreeLabels || "Tout";

//             // Set initial selected text
//             selectedP.textContent = "Tout";

//             // Append the infos div to the canvased div
//             canvased.appendChild(infosDiv);

//             // Update infos div with initial input states
//             updateInfosDiv();

//             // Add event listener to the infos div to open the Offcanvas
//             infosDiv.addEventListener("click", function() {
//                 // Set the active RealInputs for the current canvased div
//                 activeRealInputs = realInputs;

//                 // Copy the RealInputs HTML to the Offcanvas body
//                 offcanvasBody.innerHTML = realInputs.innerHTML;

//                 // Sync the checked state of inputs in the Offcanvas with the hidden RealInputs
//                 const offcanvasInputs = offcanvasBody.querySelectorAll(
//                     "input[type='radio'], input[type='checkbox']");
//                 offcanvasInputs.forEach((offcanvasInput, index) => {
//                     offcanvasInput.checked = inputs[index].checked;
//                 });

//                 // Set the Offcanvas header
//                 document.getElementById("offcanvasRightLabel").innerText =
//                     `Sélectionner ${labelMain}`;

//                 // Show the Offcanvas
//                 const offcanvas = new bootstrap.Offcanvas(offcanvasElement);
//                 offcanvas.show();
//             });
//         } else {
//             // Update infos div if there are not too many items
//             updateInfosDiv();
//         }
//     });

//     // Add event listener to the "Valider" button
//     validateSelectionBtn.addEventListener("click", function() {
//         if (activeRealInputs) {
//             // Get the inputs inside the active RealInputs
//             const realInputs = activeRealInputs.querySelectorAll(
//                 "input[type='radio'], input[type='checkbox']");
//             const offcanvasInputs = offcanvasBody.querySelectorAll(
//                 "input[type='radio'], input[type='checkbox']");

//             // Update the original RealInputs based on the selections made in the Offcanvas
//             offcanvasInputs.forEach((input, index) => {
//                 realInputs[index].checked = input.checked;
//             });

//             // Update the info-selected text
//             const selectedLabels = Array.from(realInputs)
//                 .filter(i => i.checked)
//                 .map(i => i.nextElementSibling.textContent);

//             const selectedP = activeRealInputs.closest('.canvased').querySelector('.info-selected');
//             selectedP.textContent = selectedLabels.length ? selectedLabels.join(", ") : "Tout";

//             // Hide the Offcanvas
//             const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
//             offcanvas.hide();
//         }
//     });
// });






// // START code to make the  label works inside the  offcanvasRight to change the check
// document.addEventListener("DOMContentLoaded", function() {
//     // Select the static parent element #offcanvasRight
//     const offcanvasRight = document.querySelector("#offcanvasRight");

//     // Delegate click event for labels within #offcanvasRight
//     offcanvasRight.addEventListener("click", function(event) {
//         // Check if the clicked element is a label
//         if (event.target && event.target.matches(".form-check-label")) {
//             // Prevent default behavior of the label click
//             event.preventDefault();

//             // Find the associated input element within #offcanvasRight
//             const inputId = event.target.getAttribute('for');
//             const input = document.querySelector(`#offcanvasRight #${inputId}`);

//             // Toggle the checked state of the input
//             if (input) {
//                 input.checked = !input.checked;
//             }
//         }
//     });
// });

// // END code to make the  label works inside the  offcanvasRight to change the check












































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

//     // Function to update .info-selected elements
//     function updateInfoSelected() {
//         const canvasedElements = document.querySelectorAll('.canvased');

//         canvasedElements.forEach(canvased => {
//             const realInputs = canvased.querySelector('.RealInputs');
//             const inputs = realInputs.querySelectorAll('input[type="radio"], input[type="checkbox"]');
//             const infosDiv = canvased.querySelector('.infos');

//             if (infosDiv) {
//                 const selectedLabels = Array.from(inputs)
//                     .filter(input => input.checked)
//                     .map(input => input.nextElementSibling.textContent);

//                 const selectedP = infosDiv.querySelector('.info-selected');
//                 if (selectedP) {
//                     selectedP.textContent = selectedLabels.length ? selectedLabels.join(', ') : 'Tout';
//                 }
//             }
//         });
//     }

//     // Check local storage for formValues
//     const storedValues = localStorage.getItem('formValues');
//     if (!storedValues) {
//                 // No stored values, use URL parameters
//                 const urlParams = getUrlParams();
//                 populateFormValues(urlParams);

//                 // Update .info-selected elements after populating form
//                 updateInfoSelected();
//     }
// });





















































































































///////////////////////////  MY NEW CODE THAT WILL WORKS WITH THE FAKING AMINE CODE ///////////////////////////

















// Save form values to localStorage

function SaveFormDataToLocalStorageOnSubmit(){
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

}

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
function PopulateFormFieldsWithLocalStorageDataOnDOMContentLoaded(){
 
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

}
















document.getElementById('resetButton').addEventListener('click', function() {
    // Select all .info-selected elements
    const infoSelectedElements = document.querySelectorAll('.info-selected');

    // Iterate through each .info-selected element and set the text content to "Tout"
    infoSelectedElements.forEach(selectedP => {
        selectedP.textContent = 'Tout';
    });
});




function TransformTheForm(){
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

          // ++++++++++++++++++++++++++++++++++++++++++++++++++++
            // START this code is just added to trigger the mark change event
        if ( document.querySelector("#offcanvasRight #marques") != null){
      
            inputElement = document.getElementById('marques'); // Replace with your input's ID
        event = new Event('change', { bubbles: true }); // Create a new event
          inputElement.dispatchEvent(event); // Dispatch the event
        }
          // END this code is just added to trigger the mark change event
            // ++++++++++++++++++++++++++++++++++++++++++++++++++++
     
        });
  

}



function TransformThecanvasedModels(){
    const MAX_ITEMS = 2; // Set your max items limit here
    const canvasedElements = document.querySelectorAll(".canvasedModels");
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

    // // Add event listener to the "Valider" button
    // validateSelectionBtn.addEventListener("click", function() {



    //     if (activeRealInputs) {
    //         // Get the inputs inside the active RealInputs
    //         const realInputs = activeRealInputs.querySelectorAll(
    //             "input[type='radio'], input[type='checkbox']");
    //         const offcanvasInputs = offcanvasBody.querySelectorAll(
    //             "input[type='radio'], input[type='checkbox']");

    //         // Update the original RealInputs based on the selections made in the Offcanvas
    //         offcanvasInputs.forEach((input, index) => {
    //             realInputs[index].checked = input.checked;
    //         });

    //         // Update the info-selected text
    //         const selectedLabels = Array.from(realInputs)
    //             .filter(i => i.checked)
    //             .map(i => i.nextElementSibling.textContent);

    //         const selectedP = activeRealInputs.closest('.canvased').querySelector('.info-selected');
    //         selectedP.textContent = selectedLabels.length ? selectedLabels.join(", ") : "Tout";

    //         // Hide the Offcanvas
    //         const offcanvas = bootstrap.Offcanvas.getInstance(offcanvasElement);
    //         offcanvas.hide();
    //     }

    //                 // ++++++++++++++++++++++++++++++++++++++++++++++++++++
    //     // START this code is just added to trigger the mark change event
    // inputElement = document.getElementById('marques'); // Replace with your input's ID
    // event = new Event('change', { bubbles: true }); // Create a new event
    //   inputElement.dispatchEvent(event); // Dispatch the event
    //     // END this code is just added to trigger the mark change event
    //     // ++++++++++++++++++++++++++++++++++++++++++++++++++++
    // });


}


// START code to make the  label works inside the  offcanvasRight to change the check
function OnloadMakelabelWorkInsideOffcanvasRight(){
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


}

// END code to make the  label works inside the  offcanvasRight to change the check






function PopulateTheformUsingTheURLParams(){
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


             // ++++++++++++++++++++++++++++++++++++++++++++++++++++
            // START this code is just added to trigger the mark change event      
            inputElement = document.getElementById('marques'); // Replace with your input's ID
            event = new Event('change', { bubbles: true }); // Create a new event
            inputElement.dispatchEvent(event); // Dispatch the event
            // END this code is just added to trigger the mark change event
            // ++++++++++++++++++++++++++++++++++++++++++++++++++++
     
    }

}

















// function to populate the models using the URL
function PopulateTheModelsUsingURL() {
    // Get the query string from the URL
    const queryString = window.location.search;

    // Create a URLSearchParams object from the query string
    const urlParams = new URLSearchParams(queryString);

    // Get all 'modele[]' parameters
    const modeleParams = urlParams.getAll('modele[]');

    // Check each checkbox based on the 'modele[]' parameters
    document.querySelectorAll('#models .form-check-input').forEach(checkbox => {
        // Check if the checkbox value is in the array of modeleParams
        checkbox.checked = modeleParams.includes(checkbox.value);
    });
}


