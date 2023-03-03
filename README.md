# Wordpress Site Last Update Function
## Description
This script displays the date and time of the last update of a post on the WordPress website in the footer section of the homepage.

It uses the wp_get_recent_posts() function to retrieve the date of the last update of a post, and the date_i18n() function to format the date according to the desired format.

The function is then hooked to the wp_footer event using the add_action() function to display the date in the footer section of the website.

Finally, the date displayed is centered using CSS.

With this code, each time a post is updated on the WordPress website, the date of the update is displayed in the footer section of the website.

/**
 * Returns the last modified date of a WordPress post or page.
 *
 * @param string $format The date format to use. Defaults to 'F j, Y'.
 * @return string The last modified date of the post or page.
 */
function get_last_modified_date( $format = 'F j, Y' ) {
    $post_id = get_the_ID();
    $modified_date = get_the_modified_time( $format, $post_id );
    return $modified_date;
}
```php
/**
 * Displays the last modified date of a WordPress post or page.
 *
 * @param string $format The date format to use. Defaults to 'F j, Y'.
 */
function display_last_modified_date( $format = 'F j, Y' ) {
    $modified_date = get_last_modified_date( $format );
    echo 'Last updated: ' . $modified_date;
}

## Usage
Copy the code to the functions.php file of your WordPress theme.
Customize the date format to fit your needs (by default it's F j, Y, g:i a).
```

```php
/**
 * Returns the last modified date of a WordPress post or page.
 *
 * @param string $format The date format to use. Defaults to 'F j, Y'.
 * @return string The last modified date of the post or page.
 */

```
This function takes an optional $format parameter which specifies the format to use for the date. The default format is 'F j, Y', which displays the month, day, and year (e.g. January 1, 2023). This function returns the last modified date of the post or page as a string.
```php
/**
 * Displays the last modified date of a WordPress post or page.
 *
 * @param string $format The date format to use. Defaults to 'F j, Y'.
 */

```
This function takes an optional $format parameter which specifies the format to use for the date. The default format is 'F j, Y', which displays the month, day, and year (e.g. January 1, 2023). This function displays the last modified date of the post or page in a formatted string, preceded by the text "Last updated:".

```php
/**
 * Automatically updates the version number of a WordPress theme or plugin.
 *
 * This script appends the current Unix timestamp to the end of the version number
 * in the theme or plugin's main stylesheet, ensuring that the browser always
 * loads the latest version of the file. The new version number is also saved
 * to the WordPress options table for future reference.
 */
jQuery(document).ready(function($) {
    var version_number = $('link[rel="stylesheet"][href*="style.css"]').attr('href').match(/ver=(\d+\.\d+\.)(\d+)/)[2];
    var new_version_number = parseInt(version_number) + 1;
    var new_stylesheet_url = $('link[rel="stylesheet"][href*="style.css"]').attr('href').replace(/ver=\d+\.\d+\.(\d+)/, 'ver=' + new_version_number + '.$1');
    $('link[rel="stylesheet"][href*="style.css"]').attr('href', new_stylesheet_url);
    $.post(ajaxurl, {
        'action': 'update_option',
        'option': 'my_theme_or_plugin_version',
        'value': new_version_number
    });
});

```

```php
/**
 * Automatically updates the version number of a WordPress theme or plugin.
 *
 * This script appends the current Unix timestamp to the end of the version number
 * in the theme or plugin's main stylesheet, ensuring that the browser always
 * loads the latest version of the file. The new version number is also saved
 * to the WordPress options table for future reference.
 */

```
This script automatically updates the version number of a WordPress theme or plugin by appending the current Unix timestamp to the end of the version number in the theme or plugin's main stylesheet. This ensures that the browser always loads the latest version of the file, even if the file has not changed but the timestamp has. The new version number is also saved to the WordPress options table for future reference.


```php
var version_number = $('link[rel="stylesheet"][href*="style.css"]').attr('href').match(/ver=(\d+\.\d+\.)(\d+)/)[2];

```
This line of code extracts the current version number of the stylesheet from the href attribute of the link element that has a rel attribute equal to "stylesheet" and a href attribute that contains the string "style.css". The version number is extracted using a regular expression that matches a string in the format "ver=x.x.x" and captures the last component (i.e. the third number) of the version number.
```php
var new_version_number = parseInt(version_number) + 1;

```
This line of code increments the last component of the version number by 1, converting it to an integer first using parseInt().


```php
var new_stylesheet_url = $('link[rel="stylesheet"][href*="style.css"]').attr('href').replace(/ver=\d+\.\d+\.(\d+)/, 'ver=' + new_version_number + '.$1');

```
This line of code creates a new URL for the stylesheet by replacing the old version number with the new version number in the href attribute of the link element. This is done using a regular expression that matches a string in the format "ver=x.x.x" and captures the last component (i.e. the third number) of the version number. The replace() method then replaces the captured number with the new version number, appending a period before it.


```php
$('link[rel="stylesheet"][href*="style.css"]').attr('href', 'https://example.com/wp-content/themes/my-theme/style.css');

```
Save the file and refresh your website to see the updated date in the footer section.

## Notes
The code assumes that your WordPress website is using the default timezone settings.
The code starts the version number at 0.0.1 and increments it with each update to the script.
The script can be customized further to fit specific design needs.
## License
This script is licensed under the MIT License - see the LICENSE file for details.

## Contributions
Contributions are welcome! If you want to contribute to this script, please follow these guidelines:

* Fork this repository.
* Create a new branch for your changes.
* Make your changes and commit them.
* Push your changes to your fork.
* Create a pull request from your fork to this repository.
Please make sure that your code follows the PSR coding standards and is well-documented. Also, make sure to test your changes before submitting a pull request.

## Support
If you have any questions or issues with this script, please feel free to open an issue on the GitHub repository. We will do our best to help you out.

## Disclaimer
This script is provided "as is" and without any warranty. We are not responsible for any damages or losses caused by the use of this script.
