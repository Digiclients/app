
// // START CODE FOR SEE MORE TEXT I DID USE THE HTML DEMO IN SINGLELISTINGPAGE
document.addEventListener('DOMContentLoaded', function () {
  const textElement = document.getElementById('text');
  const seeMoreLink = document.getElementById('seeMoreLink');
  const maxWords = 50; // Number of words to show initially

  // Get the full text from the paragraph element's innerHTML
  const fullText = textElement.innerHTML.trim(); // Use trim() to remove any extra whitespace
  const words = fullText.split(' ');

  // Create spans
  const truncatedSpan = document.createElement('span');
  const fullTextSpan = document.createElement('span');

  if (words.length > maxWords) {
    // Set truncated text
    const truncatedText = words.slice(0, maxWords).join(' ') + '...';
    truncatedSpan.innerText = truncatedText;

    // Set full text
    fullTextSpan.innerText = fullText;

    // Clear the paragraph and append spans
    textElement.innerHTML = ''; // Clear existing content
    textElement.appendChild(truncatedSpan);
    textElement.appendChild(fullTextSpan);

    // Hide full text initially
    fullTextSpan.style.display = 'none';

    // Show "Voir tout" link
    seeMoreLink.style.display = 'block';

    // Add click event listener to show full text
    seeMoreLink.addEventListener('click', function (e) {
      e.preventDefault();
      truncatedSpan.style.display = 'none'; // Hide truncated text
      fullTextSpan.style.display = 'inline'; // Show full text
      this.style.display = 'none'; // Hide the "Voir tout" link
    });
  } else {
    // If text doesn't need truncation, just show it all
    textElement.innerText = fullText;
    seeMoreLink.style.display = 'none'; // Hide the link if no truncation needed
  }
});

// // END CODE FOR SEE MORE TEXT


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
