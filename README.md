## Description
This script displays the date and time of the last update of a post on the WordPress website in the footer section of the homepage.

It uses the wp_get_recent_posts() function to retrieve the date of the last update of a post, and the date_i18n() function to format the date according to the desired format.

The function is then hooked to the wp_footer event using the add_action() function to display the date in the footer section of the website.

Finally, the date displayed is centered using CSS.

With this code, each time a post is updated on the WordPress website, the date of the update is displayed in the footer section of the website.

## Usage
Copy the code to the functions.php file of your WordPress theme.
Customize the date format to fit your needs (by default it's F j, Y, g:i a).
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
