# WP Snippet: Login Page Customization

Customizes the WordPress login page with custom logo, URL, and title. Changes default logo link from wordpress.org to your site homepage.

## Features

- Custom logo from WordPress Media Library
- Changes logo URL from wordpress.org to your site homepage
- Custom logo title/tooltip
- Easy to customize (just change attachment ID and site name)
- Lightweight (no database queries)
- No plugin required

## Requirements

- WordPress 5.0 or higher
- PHP 7.4 or higher

## Installation

### Method 1: functions.php

1. Open your theme's `functions.php` file
2. Copy the entire content from `login-page-customization.php`
3. Paste at the end of your `functions.php`
4. Save the file

### Method 2: Code Snippets Plugin

1. Install and activate the [Code Snippets](https://wordpress.org/plugins/code-snippets/) plugin
2. Go to Snippets → Add New
3. Copy content from `login-page-customization.php` **WITHOUT the opening `<?php` tag**
4. Paste into the Code field
5. Activate the snippet

## Configuration

After installation, you need to customize two values in the code:

### 1. Logo Attachment ID

Find this line:
```php
background-image: url("<?php echo wp_get_attachment_url(YOUR_LOGO_ID); ?>");
```

Replace `YOUR_LOGO_ID` with your logo's attachment ID:

**How to find attachment ID:**
1. Go to WordPress admin → Media → Library
2. Click on your logo image
3. Look at the URL in browser address bar
4. Find `post=123` - the number is your attachment ID
5. Replace `YOUR_LOGO_ID` with this number

Example: `wp_get_attachment_url(12345)`

### 2. Site Name

Find this line:
```php
return "YOUR_NAME";
```

Replace `YOUR_NAME` with your site or company name.

Example: `return "My Awesome Site";`

## What This Snippet Changes

- **Logo image:** Replaces default WordPress logo with your custom logo
- **Logo URL:** Changes link from wordpress.org to your site homepage
- **Logo tooltip:** Changes hover text from "Powered by WordPress" to your custom text

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for version history.

## License

GPL v2 or later

## Author

[Torwald45](https://github.com/Torwald45)
