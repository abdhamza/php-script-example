# php-script-example
serves as a tool to check if a web server is configured to execute PHP scripts
This is a simple PHP script example that demonstrates how to create a web page with a form for users to enter their name. The script then displays a greeting message using PHP.

# Check Web Server Configuration

This PHP script serves as a tool to check if a web server is configured to execute PHP scripts. When you upload and access this script on a web server, it can provide insights into the server's PHP configuration.

## Purpose

The primary purpose of this script is to determine whether a web server is set up to process PHP files. If the script is executed as intended, it implies that the server is configured to execute PHP scripts, as the PHP code within the script will be executed.

## How to Use

1. **Upload the Script**: Upload the provided PHP script (usually named something like `php-config-check.php`) to the web server you want to check.

2. **Access the Script**: In your web browser, navigate to the URL where you uploaded the script. For example, if you uploaded it to your server's root directory, you can access it by entering `http://yourdomain.com/php-config-check.php` in your browser's address bar.

3. **Observations**:
   - If the PHP script executes and displays output in your browser, it indicates that the web server is configured to process PHP scripts.
   - If you encounter an error or see the raw PHP code, it suggests that PHP execution might not be properly configured on the server.

## Important Notes

- Use this script responsibly and only on servers where you have permission to perform such checks. Unauthorized testing on servers you do not own or have explicit permission to access may be considered unethical and potentially illegal.

- This script does not perform an exhaustive security audit. It only checks if PHP script execution is enabled. Always respect the security and privacy of other systems.

- Do not leave this script on a server after you have completed your testing. Remove it promptly to prevent any security risks.

## Disclaimer

The use of this script is for diagnostic purposes only and should not be used to exploit vulnerabilities on remote servers without proper authorization. Always adhere to ethical guidelines and applicable laws when testing server configurations.

## How It Works

1. **HTML Structure:**
   - The code starts with the HTML5 doctype declaration (`<!DOCTYPE html>`) to specify that this is an HTML document.
   - The `<html>` tag defines the beginning of the HTML document, and the `lang` attribute is set to "en" to specify that the document is in English.
   - The `<head>` section contains metadata about the document, such as character encoding and the viewport settings. The title of the page is set to "PHP SCRIPT EXAMPLE."
   - The `<body>` section contains the content of the web page.

2. **PHP Script:**
   - Inside the `<body>` section, PHP code is embedded between `<?php ... ?>` tags.
   - `$name` is initialized as an empty string.
   - The script checks if the form has been submitted by examining the `$_SERVER["REQUEST_METHOD"]` variable. If the method is POST, it means the form has been submitted.
   - If the form is submitted, the script retrieves the value entered in the "name" input field and assigns it to the `$name` variable.

3. **HTML Form:**
   - A form is created using the `<form>` tag with the `method` attribute set to "post." This means the form data will be submitted via HTTP POST method when the user clicks the "Submit" button.
   - The `action` attribute of the form is set to `htmlspecialchars($_SERVER["PHP_SELF"])`. This attribute specifies the URL to which the form data will be submitted. In this case, it submits the data back to the same PHP script (`$_SERVER["PHP_SELF"]`) that rendered the form. The use of `htmlspecialchars` helps prevent cross-site scripting (XSS) attacks by encoding special characters in the URL.

4. **Form Input:**
   - Inside the form, there's an `<input>` element with `type="text"` and `name="name"`. This is where the user can enter their name.
   - A `<label>` element is used to provide a description for the input field.
   - The `required` attribute is added to the input field to ensure that the user must enter their name before submitting the form.

5. **Submit Button:**
   - A submit button is added to the form with `type="submit"` and a value of "Submit." This button allows the user to submit the form.

6. **PHP Display:**
   - After the form, there is another PHP block that checks if the `$name` variable is not empty. If it's not empty, it means the user has submitted the form, and a greeting message is displayed using `echo`.