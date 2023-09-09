# PHP Object Injection Demo App - OWASP Top 10

This repository provides a demonstration of PHP Object Injection vulnerability for educational purposes. It is designed to show how serialized objects can be exploited when user input is not sanitized properly.

## Prerequisites

- PHP installed on your machine.
- A local server like XAMPP or WAMP.

## Setup

1. **Installation of Server**:
   If you haven't set up XAMPP or WAMP, install one of them first.
2. **Setting up the Application**:
   - Clone this repository or download the `php-object-injection-app` folder.
   - Move the `php-object-injection-app` folder to the `htdocs` directory of your XAMPP or WAMP installation.

## Running the Application

1. **Start Your Local Server**:
   Launch XAMPP or WAMP and start the Apache service.

2. **Access the Application**:
   Open your browser and navigate to:

   ```
   http://localhost/php-object-injection-app/index.php
   ```

   You should see a form prompting you to enter a serialized payload.

3. **Generating the Payload**:

   - Navigate to the `generate_payload.php` file in your browser by visiting:
     ```
     http://localhost/php-object-injection-app/generate_payload.php
     ```
   - This will display the serialized payload which you can then use.

4. **Using the Payload with `curl`**:
   You can send the payload using the `curl` command as follows:

   ```bash
   curl -X POST -d "payload=O:15:\"VulnerableClass\":1:{s:7:\"command\";s:21:\"echo \"Hello, World!\";\";}" http://localhost/php-object-injection-app/index.php
   ```

5. **Manually Inputting the Payload**:
   Alternatively, you can copy the generated payload from the `generate_payload.php` output and paste it into the form on the `index.php` page, then submit.

## ⚠️ Warning ⚠️

This application is **intentionally vulnerable** and is designed for learning and educational purpose only. It serves to highlight the risks of PHP Object Injection.

- **Do NOT host** this application on a public server.
- **Do NOT use** patterns from this application in any real-world application.
- Always **sanitize and validate user input**.
- Be cautious of using `unserialize()` especially with user-supplied data.
