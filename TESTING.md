# Test checklist

Use this checklist before submission.

| Area | Expected result |
|---|---|
| Login | Valid user signs in; an invalid password is rejected; sign-out ends the session. |
| Roles | Students cannot open the admin page or upload resources. |
| Notices/events | Admin can publish records and they appear on the student dashboard. |
| Timetable | Admin can assign a class; it is visible only on that student's dashboard. |
| Resources | Admin can upload permitted files; students can download them. Invalid types and files over 10 MB are rejected. |
| Feedback | Student can submit feedback; admin can update its status. |
| Responsive UI | Check login, dashboard, resources and admin at mobile width. |
| Theme | Theme toggle persists after a page reload. |
| Security | Confirm forms reject a modified/missing CSRF token and output is HTML escaped. |

## Deployment notes

- Use HTTPS and set session cookies to `secure` in production.
- Remove `setup.php` after first use.
- Make `uploads/` non-executable at the web-server level and keep regular database/file backups.
- Set a production database account with only the permissions required by this application.
