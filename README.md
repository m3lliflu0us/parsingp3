# Parsing Website

This is a parsing website developed by **Bryce van der Werf**.

## Description

This website is designed to parse various types of data. Reading it then putting it inside of a HTML table based on the data's relation.

## Usage

1. **File Upload**: The website provides an interface for users to upload a file. The file data will be sent to `upload.php` for processing when the form is submitted.

2. **File Selection**: Users can select a file to upload using the file input element. The `updateFilename()` function is called whenever a file is selected.

3. **File Name Display**: The `updateFilename()` function updates the text content of the `filename` span element to display the name of the selected file. If no file is selected, it displays 'Bestand'.

4. **Form Submission**: Users can submit the form (and thus upload the file) by clicking the submit button. There's also an event listener added to the label for the submit button that programmatically clicks the submit button when the label is clicked.

5. **Styling**: The website uses a CSS file (`styles/styles.css`) for styling, and Google Fonts for typography.

6. **Server-side Processing**: Once the form is submitted, the server-side script (`upload.php`) will handle the uploaded file for further processing, such as parsing the file content.

Please note that this explanation is based on the provided HTML and JavaScript code. The actual functionality might vary depending on the server-side script (`upload.php`) and the CSS styles.
