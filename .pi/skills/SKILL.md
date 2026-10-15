---
name: php-api
description: Build and maintain secure REST APIs using raw PHP.
---

# Raw PHP API Development

## Guidelines

- Use PHP 8.4+.
- Use strict types.
- Follow PSR-12 coding standards.
- Use PDO prepared statements for database queries.
- Validate all incoming API requests.
- Return consistent JSON responses.
- Handle exceptions without exposing sensitive details.
- Implement authentication and authorization where required.

1. Technology Stack

- Backend: PHP 8.3+
- Database: MySQL
- Database access: PDO with prepared statements
- Frontend: HTML5, CSS3, Bootstrap 5
- JavaScript: Vanilla JavaScript with the Fetch API
- Architecture: Modular, maintainable PHP structure
- Authentication: PHP sessions

2. Authentication Features

Implement the following features:

1. User registration
2. User login
3. User logout
4. Email verification
5. Forgot password
6. Password reset
7. Change password
8. User profile
9. Remember-me functionality using secure persistent tokens
10. Session expiration and regeneration
11. Login attempt rate limiting
12. Server-side and client-side validation

Security Requirements

- Hash passwords using "password_hash()".
- Verify passwords using "password_verify()".
- Use PDO prepared statements for database queries.
- Protect state-changing requests against CSRF attacks.
- Validate and sanitize user input appropriately.
- Escape output to prevent XSS.
- Use secure session configuration.
- Store secrets in environment variables.
- Implement secure password reset tokens with expiration.
- Never store plaintext passwords or password reset tokens.
- Use generic authentication error messages to reduce account enumeration.
- Enforce authorization on protected pages and API endpoints.

3. Bootstrap 5 Responsive Design

Create a modern, professional interface using Bootstrap 5.

Include:

- Responsive navigation
- Login page
- Registration page
- Forgot-password page
- Password-reset page
- Email-verification page
- User dashboard
- Profile page
- Change-password page
- Responsive forms
- Password visibility toggles
- Loading indicators
- Toast notifications
- Inline validation messages
- Accessible labels and keyboard navigation
- Responsive layouts for mobile, tablet, and desktop

Use a consistent visual design with appropriate spacing, typography, cards, buttons, and form controls.

4. Fetch API Integration

Use the native JavaScript Fetch API for all authentication form submissions.

Requirements:

- Submit forms asynchronously without full-page reloads.
- Send JSON requests with appropriate headers.
- Use "credentials: "same-origin"" for same-origin session authentication.
- Include CSRF tokens in state-changing requests.
- Display field-specific validation errors.
- Display success and error notifications.
- Show loading states while requests are processing.
- Disable submit buttons during requests.
- Handle HTTP errors, network failures, invalid JSON, and unexpected responses.
- Redirect users after successful authentication when appropriate.
- Never trust client-side validation alone.

Standardize API responses using this structure:

Success:

{
"success": true,
"message": "Operation completed successfully.",
"data": {}
}

Failure:

{
"success": false,
"message": "Please correct the errors.",
"errors": {
"email": "Enter a valid email address."
}
}

Return appropriate HTTP status codes, such as 200, 201, 400, 401, 403, 404, 409, 422, 429, and 500, depending on the situation.

5. Suggested Project Structure

Create a clean and modular project structure:

project/
├── .pi/
│ └── skills/
│ ├── php-security/
│ │ └── SKILL.md
│ ├── php-authentication/
│ │ └── SKILL.md
│ ├── bootstrap-ui/
│ │ └── SKILL.md
│ └── fetch-api/
│ └── SKILL.md
├── app/
│ ├── Controllers/
│ ├── Middleware/
│ ├── Services/
│ ├── Repositories/
│ ├── Validators/
│ └── Helpers/
├── config/
│ ├── app.php
│ └── database.php
├── database/
│ ├── migrations/
│ └── schema.sql
├── public/
│ ├── assets/
│ │ ├── css/
│ │ └── js/
│ ├── index.php
│ └── .htaccess
├── resources/
│ └── views/
│ ├── auth/
│ ├── dashboard/
│ ├── profile/
│ └── layouts/
├── routes/
│ └── web.php
├── storage/
│ └── logs/
├── tests/
├── .env.example
├── .gitignore
├── composer.json
└── README.md

Adjust the structure when necessary, but keep application code outside the publicly accessible directory.

6. Generate Pi Skills

Create the following skill files under ".pi/skills/".

Skill 1: php-security/SKILL.md

Teach Pi to:

- Review PHP code for authentication vulnerabilities.
- Apply secure session handling.
- Prevent SQL injection, CSRF, XSS, and brute-force attacks.
- Review password hashing and reset flows.
- Validate authorization on every protected endpoint.
- Identify insecure handling of credentials and tokens.

Skill 2: php-authentication/SKILL.md

Teach Pi to:

- Build modular PHP authentication systems.
- Use PDO and prepared statements.
- Implement registration, login, logout, verification, and password recovery.
- Create consistent authentication API responses.
- Enforce server-side validation and authorization.
- Write tests for authentication workflows.

Skill 3: bootstrap-ui/SKILL.md

Teach Pi to:

- Build responsive interfaces using Bootstrap 5.
- Create accessible authentication forms.
- Implement consistent layouts and reusable UI components.
- Add loading states, inline validation, and toast notifications.
- Ensure mobile, tablet, and desktop compatibility.

Skill 4: fetch-api/SKILL.md

Teach Pi to:

- Implement asynchronous form submissions with the Fetch API.
- Handle JSON requests and responses.
- Include CSRF tokens and same-origin credentials.
- Display validation errors and notifications.
- Handle HTTP errors, network failures, and loading states.
- Avoid unsafe DOM manipulation and improper HTML insertion.

Each skill must have valid YAML frontmatter with a descriptive "name" and "description", followed by practical instructions and a clear workflow.

7. Database Design

Create a MySQL schema with appropriate constraints and indexes for:

- "users"
- "email_verification_tokens"
- "password_reset_tokens"
- "remember_tokens"
- "login_attempts"

Include:

- Unique email addresses
- Password hashes
- Account verification status
- Created and updated timestamps
- Token expiration timestamps
- Hashed persistent tokens
- Appropriate foreign keys and indexes

Store only hashed versions of verification, reset, and persistent authentication tokens wherever applicable.

8. Development Workflow

Work in the following order:

1. Inspect the existing repository.
2. Identify existing files and preserve useful code.
3. Create the ".pi/skills/" directory and the four skill files.
4. Establish project configuration and environment variables.
5. Implement the database schema and connection.
6. Build authentication services and validation.
7. Implement authentication routes and API responses.
8. Build Bootstrap 5 pages and Fetch API integration.
9. Add authorization middleware and session protections.
10. Implement email delivery through a configurable mail service.
11. Add automated tests for authentication and security.
12. Document installation, configuration, database setup, and deployment.

Use the generated skills as guidance when working on their corresponding tasks.

9. Quality Requirements

- Produce working, integrated code rather than disconnected examples.
- Follow PHP coding standards and use Composer autoloading where appropriate.
- Keep controllers, services, repositories, and views separate.
- Avoid unnecessary dependencies.
- Do not hardcode credentials or secrets.
- Do not expose internal exceptions or stack traces to users.
- Add appropriate logging without recording passwords, session identifiers, or sensitive tokens.
- Test successful and failed authentication scenarios.
- Verify responsive layouts and Fetch API error handling.
- Document any required environment configuration.
- Do not claim tests passed unless they were actually executed.

Final Deliverables

Generate:

1. The complete PHP authentication application.
2. Four reusable Pi skills under ".pi/skills/".
3. MySQL schema and migration files.
4. Responsive Bootstrap 5 frontend.
5. Fetch API integration.
6. Automated tests.
7. ".env.example" and ".gitignore".
8. A detailed README with setup and deployment instructions.

Begin by inspecting the repository, then implement the project incrementally. After each major stage, validate the changes before continuing.
