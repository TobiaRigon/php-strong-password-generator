## Repository: php-strong-password-generator

This repository contains a web page allowing users to generate (reasonably) secure passwords using our password generator.

### Milestone 1:
Create a form that sends the password length via `GET`. A function will use this data to generate a random password (comprising lowercase letters, uppercase letters, numbers, and symbols) to return to the user. Write both logic and layout in a single file `index.php`.

### Milestone 2:
After verifying the correct functioning of our code, move the logic to a `functions.php` file, which we will then include in the main page.

### [BONUS] Milestone 3:
Instead of displaying the password in `index.php`, redirect to a dedicated page. This page will retrieve the password using `$_SESSION` and display it to the user.

### [BONUS] Milestone 4:
Handle additional parameters for the password, such as which characters to use among numbers, letters, and symbols. Users can choose individually (e.g., only numbers) or combine them (e.g., numbers and symbols, or all three together). Also, give users the option to allow or disallow the repetition of identical characters.
