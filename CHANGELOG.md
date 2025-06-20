# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Conventional Commits](https://www.conventionalcommits.org)
and this changelog is manually maintained.

---

## [0.1.0] - 2025-06-20

### ✨ Features
- **session:** added `includes/session.php` for unified session handling
  - Handles output buffering, secure cookie setup, and session path switching
  - Supports localhost and production via dynamic environment detection

### 🛠 Changed
- **admin:** protected `admin/index.php` using `session.php` to enforce login redirection

