# A PHP APP
A multi language site built in PHP. The solution is a simple site which has 2 languages ENG/DK. The idea was to show a PHP app with an efficient responsive design and have a language switcher.  

## How to run it


These are the instruction how to run the solution on your machine:

Clone the repo to your www folder or where you prefer `git clone https://github.com/Jakub41/Simple-PHP-Web-App.git `

This project was built in **PHP/MySQL** and need to be run under an app like **MAMP/WAMP/XAMP** 

If you use one of the app above be aware to clone the repo under your htdocs folder for have access through the localhost or configure your virtualhost and hosts file accordingly to your needs

Configure the **connection.php** file with yours DB info.

Make sure to create an empty database as the app will create a table for you.


## What was used

- PHP
- MySQL
- Materialize a CSS framework [Link](http://materializecss.com/)
- Jquery 
- HTML

## The app

**MultiLanguage** site, Its contain two languages, English and Danish. 
I am handling multi language from jquery. I have created langauge.js for this purpose. The onclick function is called when the user hit change language and then using jquery I just replace the text.

**Form**. All the validation is carried out in client side.
After you submit a form Data goes to DB and also email to pre define email address

**Responsiveness**. For a Responsive website, I used New Framework MaterilizeCss which is from Google.
