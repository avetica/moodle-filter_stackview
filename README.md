# Moodle - filter_stackview

This filter converts stackview `[[stackview 3]]` shortcode to an iframe.

##### Features:

- GDPR null_provider
- Converting shortcodes `[[stackview 3]]`

##### Tested in:

![moodle405](https://img.shields.io/badge/moodle-4.5-blue.svg)
![moodle394](https://img.shields.io/badge/moodle-3.94-green.svg)
![moodle403](https://img.shields.io/badge/moodle-4.3-green.svg)
![workplace311](https://img.shields.io/badge/workplace-3.11-blue.svg)
![workplace403](https://img.shields.io/badge/workplace-4.3-blue.svg)

### Dependencies

- mod_stackviewer -> https://github.com/avetica/moodle-mod_stackview

### Installation

1. Copy this plugin to the `filter\stackview` folder on the server
2. Login as administrator
3. Go to Site Administrator > Notification
4. Install the plugin
5. Enable the filter on global level `/admin/filters.php`.

##### Requirements:

* Recommended Moodle version: **4.5**
* Recommended PHP version: **8.1**
* Required Moodle version: **4.3 Moodle**
* Required PHP version: **8.0**

---
### Changelog

##### 4.5.0 (18.10.2025)
* Moodle 4.5 compatibility
* Added type hints to all methods
* Updated PHPDoc blocks to modern standards
* Improved code quality and compliance

##### 4.3 (Apr 15, 2024)
* Update/tested in Moodle 4.3

##### 3.9.0 (09.05.2021)
* Original release 

---
### Security Vulnerabilities
If you discover any security vulnerabilities, please send an e-mail to Avetica via security@avetica.nl.

---
### License

This project is licensed under the **GNU General Public License v3.0**. - http://www.gnu.org/licenses or see
the [LICENSE](LICENSE.md) file.

---
### Copyright

<img src="https://avetica.nl/logo.svg" alt="avetica logo" width="250px">

Copyright © 2025 Avetica :: [avetica.nl](https://avetica.nl/)

##### Author:
* Luuk Verhoeven :: [Ldesign Media](https://ldesignmedia.nl/) - [luuk@ldesignmedia.nl](luuk@ldesignmedia.nl)

<img src="https://ldesignmedia.nl/themes/ldesignmedia/assets/images/logo/logo.svg" alt="ldesignmedia" height="70px">
