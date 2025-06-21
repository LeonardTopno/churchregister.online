# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Conventional Commits](https://www.conventionalcommits.org)
and this changelog is manually maintained.

---

## [0.1.0] - 2025-06-20

### ✨ Features
- **session:** added `includes/session.php` for unified session handling
  - Checks if it is running locally or in live server
  - Sets custome path for production  #TODO: This needs to be done only if the default path is broken as in our case in our cpanel 
  - Supports localhost and production via dynamic environment detection
  - Output buffering for safe headers ( ob_start() )	✅
  - Safe session path for production	                ✅
  - Local vs live path handling	                        ✅
  - Secure session cookie settings	                    ✅
  - Redirects if user not logged in	                    ✅
  - Base URL generation	                                ✅
  - Works on both localhost & server	                ✅

### 🛠 Changed
- **admin:** protected `admin/index.php` using `session.php` to enforce login redirection

