# Project2
CS1520 Project Part 2

##General Updates
* Updated site color theme (blue and gold)
* Used Google fonts for more diverse typefaces
* Added Google's Material Icons
* Header links now navigate to new PHP file instead of using JS to change views
* Implemented Materialize staggered list transition on list elements
* Added fade-in transitions on each page
* Removed About Page
  * Moved the About page's content to the Home page
* Added Site Info and Submit pages
* Implemented interaction with mySQL DB (in submit.php file)
* Added PHP function to build popout lists - buildPopoutList()
* Added PHP function to build chip elements - buildChip()
* Updated getScripts() function to take an array parameter for the script urls (previously hardcoded)
* Commented Code

---

###Header Updates
* Added favicon
* Added my name to the header
 * On index page, fades in (and out) once you have scrolled past my name in the transbox
 * On all other pages always shows
* Updated header link font (Montserrat)
* Added transition to make text gold when hovering on header links

###Footer Updates
* Used new getScripts() prototype to conditionally add page-specific JavaScript based on the URL

###Home Page Updates
* Added Cathedral Banner image with my name in a transbox
* Added Parallax images
* Broke up text content and placed in between Parallaxes
* Added Image captions 
* Added popoutlist of programming languages, work experience/skills, and coursework
 * Utilized Materialize's _Chip_ for each entry
* Now contains content previously found on About page
* Moved Home Page specific JavaScript functions to their own separate file (index.js)
 * Added function callback to window scroll event, fires JavaScript transitions based on window scroll offset

###Contact Page Updates
* Added background image
* Made card elements semi-transparent
* Added slide-in effect for the list of links
* Added form that submits to PHP file (submit.php) to handle DB interaction
 * Used HTML form attributes to ensure all fields are filled out
 * Used form validation to ensure email is in correct format
 * Used Material Icon prefixes for inputs
 * Implemented transition to change color of form label, icon, and underline based on focus and validation state

###Submit Page (new)
* Interfaces with mySQL DB
* If Database _myData_ does not exist it will create it
* If table _messages_ does not exist it will create it
* Uses _$_POST_ variable to insert form data into DB
* Displays error or success message
* _Issue_ : if the textarea for field *message_text* contains an apostrophe character, the operation fails
 * I believe this is because the apostrophe closes a php string somewhere in the submit logic, breaking the php
 * The site will catch this and display a formatted error, but nothing will be saved to the DB
 
###Site Info Page (new)
* Contains updated site information text previously on Home page
* Added background image
* Added slide-in effect for list of links
* Added a link to this github repo
* Made cards semi-transparent


