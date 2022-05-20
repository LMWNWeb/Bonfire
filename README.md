# Bonfire
Error pages are an absolute pain to re-code for every project. So why not have a set of already build, ready to go error pages?

Bonfire works with most web servers, and runs on PHP.

Make sure the .htaccess file is placed in the root directory of your website or else the script will not work.

## Technical Requirements
- A web server such as Apache, Nginx, Litespeed, etc.
- PHP 4.x, 5.x, 7.x or 8.x (We recommend using the latest version of PHP for it's security and bugfix updates).

## Supported HTTP Error Codes

Bonfire supports 26 different HTTP error codes.

The following errors are supported: HTTP 401, 402, 403, 404, 405, 406, 407, 408, 409, 410, 411, 412, 413, 414, 415, 416, 417, 418*, 422, 425, 426, 428, 429, 431, 451

_*418 is not in the htaccess file, if you'd like to use this you'll need to either add it yourself or trigger it manually. See wiki for more info._
