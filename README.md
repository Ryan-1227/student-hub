# Student Hub

PHP 8 + MySQL student portal for the AIUE203 practical project. It includes role-based access, notices/events, personal timetables, resource uploads, feedback, audit logs, responsive pages, and JSON/AJAX APIs.

## Run locally

1. Create a MySQL database and import `database/schema.sql`.
2. Copy `config.example.php` to `config.php` and set the database details.
3. Serve the folder with PHP: `php -S localhost:8000`.
4. Open `http://localhost:8000/setup.php` once to create sample accounts, then delete `setup.php`.

Sample credentials after setup: `admin@hub.test` / `Admin@123`, `student@hub.test` / `Student@123`.

The application expects PHP 8.1+, PDO MySQL and writable `uploads/`.

## Included practical modules

- Accessible responsive login, registration, contact, dashboard, feedback and resources pages.
- Client-side theme switcher, Fetch JSON API, role-aware navigation and CSRF-protected forms.
- Server-side registration/contact validation; contact submissions are retained in `database/data/contact_messages.csv`.
- PDO MySQL schema with prepared statements, password hashing, login session regeneration, 30-minute inactivity timeout, RBAC and audit logs.
- Admin student search/filter/delete/export, resource upload, event CRUD with validated posters, notices, timetables and feedback workflow.

## Important setup note

Import the current `database/schema.sql` into a new database before the first run. If you already imported an older version, recreate the local database or add the new `users` and `events` columns shown in the schema. Copy `config.example.php` to `config.php`, then run `setup.php` once. Remove `setup.php` after demo data is created.
