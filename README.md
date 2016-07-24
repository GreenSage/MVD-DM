# MVD-DM
MVD-DM (Model, View, Data, Design Model)

_Please note: This is an open source project I'm creating from scratch._
_The idea here is to include all functions needed within a mvd.php and call it in an include at the top of every php file._

## Precursor
- Before the actual MVD classes in the mvd.php file all the database connection information is included.
```
/* + STRING CONTAINER */
$db = mysqli_connect('localhost', '[USER]', '[PASS]', '[DB NAME]');
$pdo = new PDO("mysql:host=localhost;dbname=[DB NAME]", '[USER]', '[PASS]');
/* - STRING CONTAINER */
```

## Model
- Provides all the containers and the re-usable functions.

## View
- Provides the changes and enhancements to the view (primarily javascript right now.)
- The view is assumed to be whatever resource is being used to view the content such as a screen or watch or printer.

## Data
- Provides for SQL, displays data, works with the data (transformations.)
