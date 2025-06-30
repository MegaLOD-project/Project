# Omeka-S Application

This directory contains an [Omeka S](https://omeka.org/s/) application, a web publishing platform for sharing digital collections and creating media-rich online exhibits.

## Directory Structure

- `application/`  
  Main Omeka-S application code, including modules, themes, and language files.
- `modules/`  
  Additional Omeka-S modules for extended functionality.
- `themes/`  
  Custom or third-party Omeka-S themes.
- `files/`  
  Uploaded files and media managed by Omeka-S.

## Installation

1. **Requirements**
   - PHP 7.4 or higher
   - MySQL 5.7+ or MariaDB 10.2+
   - Web server (Apache, Nginx, etc.)

2. **Setup**
   - Clone or copy this repository to your web server.
   - Create a database and user for Omeka-S.
   - Copy `config/database.ini.dist` to `config/database.ini` and update with your database credentials.
   - Set correct permissions for the `files/` directory:
     ```sh
     chmod -R 775 files/
     chown -R www-data:www-data files/
     ```
   - Install dependencies (if using Composer):
     ```sh
     composer install
     ```

3. **Web Installation**
   - Visit your site in a browser and follow the installation wizard.

## Usage

- Access the admin dashboard at `/admin`
- Add items, item sets, and media
- Manage users, modules, and themes

## Customization

- Add or update modules in the `modules/` directory.
- Add or update themes in the `themes/` directory.
- Language files are in `application/language/`.

## Documentation

- [Omeka S User Manual](https://omeka.org/s/docs/user-manual/)
- [Omeka S Developer Documentation](https://omeka.org/s/docs/developer/)
