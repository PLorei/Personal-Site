# Project2
CS1520 Project2

##General Updates
* Updated site color theme
* Used Google fonts for more diverse typefaces
* Header links now navigate to new php file instead of using js to change views
* Implemented Materialize staggered list transition on list elements
* Added fade-ins transitions on each page
* Updated sections from Home, About, and Contact to Home, Site Info, and Contact
  * moved the About page's content to the Home page
* Implemented interaction with mySQL DB (in submit.php file)
* Added php function to build popout lists - buildPopoutList()
* Added php function to build chip elements - buildChip()
* Updated getScripts() function to take an array parameter for the script urls (previously hardcoded)
* Added favicon
* Added my name to the header

###Home Page Updates
* Added Cathedral Banner image with my name in a transbox
* Added Parallax images and captions with transitions
* Broke up text content and placed in between Parallaxes
* Added popoutlist of programming languages, work experience/skills, and coursework

###Contact Page Updates
* Added background image
* Made card elements semi-transparent
* Added form that submits to php file (submit.php) to handle DB interaction
 * Used HTML form attributes to ensure all fields are filled out
 * Used form validation to ensure email is in correct format

###Submit Page (new)
* Interfaces with mySQL DB
* If Database _myData_ does not exist it will create it
* If table _messages_ does not exist it will create it
* Uses _$_POST_ variable to insert form data into DB
* Displays error or success message
* * _Issue_ : if the textarea for field *message_text* contains an apostrophe character, the operation fails *
