# lab09

Web Technology Lab 09 - Hassan Abbas (106689188)

## Lab 09 - MySQL & PHP
- `settings.php` - database connection details for XAMPP (localhost, root, no password, exhibition_db)
- `cars.php` - connects to exhibition_db and shows every car in an HTML table
- `database/exhibition_db.sql` - export of the exhibition_db database (table `cars`)

## PHP + MySQL Search
- `search_form.php` - search form using the GET method
- `search_result.php` - searches the cars table by model and shows the matching cars

The search form uses GET because searching only reads data, and the search term shows in the URL so the results page can be bookmarked or shared.
