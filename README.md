# SecureAppDevelopment

## Introduction
This repository is dedicated to providing resources and guidance on developing secure applications, focusing on understanding and mitigating common cyber attacks like Cross-Site Scripting (XSS) and various types of vulnerabilities.

## Learning Objectives
* Understanding Cyber Attacks: Gain insights into different types of cyber attacks, including XSS, SQL injection, CSRF, etc.
* Mitigation Techniques: Learn about various mitigation techniques to prevent these attacks.
* Code Sanitization: Understand the importance of writing secure code and implementing sanitization techniques to protect against attacks.

## Cyber Attacks
### Cross Site Scripting & Other common attacks
* Reflected XSS: Occurs when an attacker injects a payload that is reflected off a web server.
* Stored XSS: The injected malicious script is stored on the server and is later displayed to users who access the affected page.
* DOM-based XSS: The vulnerability exists within the client-side code rather than the server-side code.

## Mitigation Techniques
* Input Validation: Validate and sanitize user input to prevent malicious input from being executed.
* Output Encoding: Encode output to prevent XSS attacks by converting potentially dangerous characters into their HTML entity equivalents.
* Parameterized Queries: Use parameterized queries or prepared statements to prevent SQL injection attacks.
* CSRF Tokens: Implement CSRF tokens to validate requests and prevent CSRF attacks.

## Code Sanitisation 
When writing code, it's essential to prioritize security and implement proper sanitization techniques. Some key practices include:

* Validate Input: Check input data for type, length, format, and range.
* Escape Output: Encode output data to prevent XSS attacks by escaping special characters.
* Use Frameworks and Libraries: Utilize trusted frameworks and libraries that offer built-in security features.
* Regular Security Audits: Regularly review and audit code for vulnerabilities and security weaknesses.

## Additional Resources
Zap Proxy for web app scanning: https://www.zaproxy.org/

Xampp for open-source cross-platform web server solution stack packages https://www.apachefriends.org/
