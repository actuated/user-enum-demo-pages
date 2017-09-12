# user-enum-demo-pages
PHP pages to demonstrate user enumeration via HTTP responses.

## reset1.php
* Mock password reset page returns "Instructions have been emailed to you" or "Email address not found", depending on whether the submitted account is valid.

## reset2.php
* Mock password reset page that returns the same apparent message for valid and invalid accounts, but contains extra spaces for invalid submissions.
* Good to demonstrate a situation where the admin attempted to fix the problem by taking away the differentiating error message, but left behind a difference in response length.

## response.php
* Mock login page that returns "Password incorrect" or "User not found", depending on whether the submitted account is valid.

## timing.php
* Mock login page that bcrypts login attempts for valid users, creating a consistent difference in response times for valid users.

# Sample Accounts
* The login pages use the usernames below.
* The password reset pages use the same usernames with "@example.com".
* Valid accounts:
  - demo
  - admin
  - asmith
  - csmith
  - esmith
