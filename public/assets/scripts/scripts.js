// START CODE FOR SEE MORE TEXT I DID USE THE HTML DEMO IN SINGLELISTINGPAGE
document.addEventListener('DOMContentLoaded', function () {
  const textElement = document.getElementById('text');
  const maxWords = parseInt(textElement.getAttribute('data-max-words'), 10);
  const fullText = textElement.innerText;
  const words = fullText.split(' ');

  if (words.length > maxWords) {
    const initialText = words.slice(0, maxWords).join(' ') + '...';
    textElement.innerText = initialText;

    document.getElementById('seeMoreLink').addEventListener('click', function (e) {
      e.preventDefault();
      textElement.innerText = fullText;
      this.style.display = 'none';
    });
  } else {
    document.getElementById('seeMoreLink').style.display = 'none';
  }
});
// END CODE FOR SEE MORE TEXT





   
        // START Function to restrict input to numeric values and decimal point
        function restrictToNumericAndDecimal(event) {
          const input = event.target;
          const key = event.key;

          // Allow control keys (e.g., backspace, delete, arrow keys, tab)
          if (['Backspace', 'ArrowLeft', 'ArrowRight', 'Delete', 'Tab'].includes(key)) {
              return;
          }

          // Allow numeric keys and decimal point
          if (/\d/.test(key) || key === '.') {
              return;
          }

          // Prevent default action for non-numeric and non-decimal keys
          event.preventDefault();
      }

      // Function to clean up any non-numeric and non-decimal characters
      function cleanInput(event) {
          const input = event.target;
          let value = input.value;

          // Allow only numeric characters and a single decimal point
          value = value.replace(/[^0-9.]/g, ''); // Remove non-numeric and non-decimal characters
          const parts = value.split('.');
          if (parts.length > 2) {
              // If there are multiple decimal points, keep only the first one
              value = parts[0] + '.' + parts.slice(1).join('');
          }
          input.value = value;
      }

      // Select all input elements of type "number"
      const numericInputs = document.querySelectorAll('input[type="number"]');

      // Add event listeners to each input
      numericInputs.forEach(input => {
          input.addEventListener('keydown', restrictToNumericAndDecimal);
          input.addEventListener('input', cleanInput);
      });
        // END Function to restrict input to numeric values and decimal point
