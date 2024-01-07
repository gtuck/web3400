# PHP code examples:

## Creating & using variables

Creating and using variables in PHP is a fundamental part of programming in this language. Variables in PHP are used to store data, like strings, integers, arrays, etc., and they start with a `$` sign. Here are three examples that illustrate different ways of creating and using variables in PHP:

**Example 1: Working with variables**

   ```php
    /* In this example, a string variable `$name` is created and assigned the value 
    `"John Doe"` It's then concatenated with another string and displayed. */

    // Creating a string variable
    $name = "John Doe";

    // Using the variable
    echo "Hello, my name is " . $name;
    // Outputs: Hello, my name is John Doe
   ```

**Example 2: Performing Mathematical Operations with Integer Variables**

   ```php
    /* Here, two integer variables `$number1` and `$number2` are created.
    A third variable `$sum` is used to store the result of their addition.
    The result is then displayed.*/

    // Creating integer variables
    $number1 = 10;
    $number2 = 20;

    // Performing a mathematical operation
    $sum = $number1 + $number2;

    // Using the variable
    echo "The sum of " . $number1 . " and " . $number2 . " is " . $sum;
    // Outputs: The sum of 10 and 20 is 30
   ```

**Example 3: Using Arrays**

   ```php
    /* In this example, an array variable `$colors` is created with three elements.
    Individual elements of the array are accessed using their index and displayed. */

    // Creating an array variable
    $colors = array("Red", "Green", "Blue");

    // Using the array
    echo "The first color is " . $colors[0] . ", and the third color is " . $colors[2];
    // Outputs: The first color is Red, and the third color is Blue
   ```

## Basic PHP data types:

1. **Boolean (bool)**: Represents true or false.
2. **Integer (int)**: A whole number.
3. **Floating Point Number (float)**: A number with decimals.
4. **String**: A sequence of characters.
5. **Array**: A collection of key-value pairs in a specific order.
6. **Object**: An entity created from a predefined class.
7. **Callable**: A reference to a function in PHP.
8. **Iterable**: Any array or object compatible with the Traversable interface.
9. **Resource**: A link to an external resource.
10. **NULL**: A variable without any value.

Data types in PHP are not explicitly declared; rather, they are determined at runtime based on the context. There are multiple methods to identify a variable's type.

**Identifying Type and Value**

- **Using var_dump()**: This function displays both the type and value of a variable.

  Example:
  ```php
   $text = "PHP";
   var_dump($text);
   // Output: string(3) "PHP"
  ```

- **Using gettype()**: This function returns a string describing the variable's type.

  Example:
  ```php
   $text = "PHP";
   echo(gettype($text));
   // Output: string
  ```

**Type Checking Functions**

PHP provides specific functions to check a variable's type:

- `is_bool($value)`: Checks if the value is a boolean.
- `is_int($value)`: Verifies if the value is an integer (also `is_integer()`).
- `is_float($value)`: Determines if the value is a floating-point number.
- `is_string($value)`: Confirms if the value is a string.
- `is_array($value)`: Checks if the value is an array.
- `is_object($value)`: Asserts if the value is an object.
- `is_iterable($value)`: Verifies if the value is iterable.
- `is_resource($value)`: Checks if the value is a resource.
- `is_null($value)`: Determines if the value is NULL.

## String concatenation

String concatenation in PHP is the process of joining one or more strings together. PHP uses the dot `.` operator for concatenation. You can concatenate strings enclosed in either single quotes `' '` or double quotes `" "`. Here are three examples demonstrating these concepts:

**Example 1: Concatenation with Single Quotes**

Using single quotes `' '` for string literals:

  ```php
   /* In this example, two string variables `$firstName` and `$lastName` are concatenated with a space in between, using single quotes. */

   $firstName = 'John';
   $lastName = 'Doe';

   // Concatenation with single quotes
   $fullName = $firstName . ' ' . $lastName;

   echo $fullName;
   // Outputs: John Doe
  ```

**Example 2: Concatenation with Double Quotes**

Using double quotes `" "` allows for variable interpolation:

  ```php
   /* Here, `$city` and `$country` are enclosed in double quotes. PHP automatically interpolates the variables within the string. */

   $city = "New York";
   $country = "USA";

   // Concatenation with double quotes
   $location = "$city, $country";

   echo $location;
   // Outputs: New York, USA
  ```

**Example 3: Mixed Usage of Single and Double Quotes**

Combining both single and double quotes in concatenation:

  ```php
   /* In this example, single quotes are used for the string literals, and variables are concatenated using the `.` operator. This approach is useful when you want to prevent variable interpolation in certain parts of the string. */

   $item = "apple";
   $quantity = 3;

   // Mixed usage of single and double quotes
   $message = 'You have ' . $quantity . ' ' . $item . 's.';

   echo $message;
   // Outputs: You have 3 apples.
  ```

## String functions

**Replace Text in a String**
   ```php
    $newString = str_replace("oldText", "newText", $string);
   ```

**Replace Multiple Words in a String**
   ```php
    $search  = ['word1', 'word2'];
    $replace = ['replace1', 'replace2'];
    $newString = str_replace($search, $replace, $string);
   ```

**Declare an Array of Strings**
   ```php
    $stringArray = ['string1', 'string2', 'string3'];
   ```

**Check if a String Contains a Specific Word**
   ```php
    if (strpos($string, 'word') !== false) {
        echo "Word found!";
    }
   ```

## Conditional statements

Conditional statements are a crucial part of any programming language, including PHP, as they allow you to perform different actions based on different conditions. Here are three examples demonstrating the use of `if`, `if-else`, and `if-elseif-else` in PHP:

**Using `if` Statement**

The `if` statement is used to execute a block of code only if a specified condition is true.

   ```php
    /* In this example, the message "It's warm outside!" is printed only if `$temperature` is greater than 25. */

    $temperature = 30;

    // Simple if statement
    if ($temperature > 25) {
        echo "It's warm outside!";
    }
    // Outputs: It's warm outside!
   ```

**Using `if-else` Statement**

The `if-else` statement is used to execute one block of code if a condition is true and another block if the condition is false.

   ```php
    /* Here, the code checks if `$age` is 18 or more. If true, it prints "You are an adult."; otherwise, it prints "You are a minor." */
    $age = 18;

    // if-else statement
    if ($age >= 18) {
        echo "You are an adult.";
    } else {
        echo "You are a minor.";
    }
    // Outputs: You are an adult.
   ```

**Using `if-elseif-else` Statement**

The `if-elseif-else` statement is used to specify several conditions to check, executing different blocks of code for each condition.

   ```php
    /* In this example, the code checks the `$score` variable against multiple conditions to determine and print a grade. */

    $score = 75;

    // if-elseif-else statement
    if ($score >= 90) {
        echo "Grade: A";
    } elseif ($score >= 80) {
        echo "Grade: B";
    } elseif ($score >= 70) {
        echo "Grade: C";
    } else {
        echo "Grade: F";
    }
    // Outputs: Grade: C
    ?>
   ```

## Database Connectivity

**Use PDO to connect to a database then use a try/catch to test the connection**
   ```php
    function pdo_connect_mariadb()
    {
        $servername = "localhost";
        $dbname = "database";
        $username = "username";
        $password = "password";

        try {
            return new PDO(
                'mysql:host=' . $servername .
                    ';dbname=' . $dbname .
                    ';charset=utf8',
                $username,
                $password
            );
        } catch (PDOException $exception) {
            die("PDO failed to connect to the database: $exception");
        }
    }
   ```
**Create a PDO databse connection object by calling a function**
   ```php
    $pdo = pdo_connect_mariadb();
   ```

## Database CRUD operations

**Create (INSERT)**
   ```php
    //In this example, `'value1'` and `'value2'` are the values to be inserted into `column1` and `column2` respectively.
    $sql = "INSERT INTO table_name (column1, column2) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['value1', 'value2']);
   ```
**Read (SELECT)**
   ```php
    //Here, `'value1'` is the value used in the WHERE clause to filter results from `table_name`.
    $sql = "SELECT * FROM table_name WHERE column1 = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['value1']);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    //A foreach loop is used to access each row returned
    foreach ($results as $row) {
        // process each row
    }
   ```
**Update**
   ```php
    //In this case, `column1` is updated to `'newValue1'` where `column2` equals `'value2'`.
    $sql = "UPDATE table_name SET column1 = ? WHERE column2 = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['newValue1', 'value2']);
   ```
**Delete**
   ```php
    //This deletes rows from `table_name` where `column1` equals `'value1'`.
    $sql = "DELETE FROM table_name WHERE column1 = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['value1']);
   ```

## Other Database operations

**Retrieve Number of Affected Rows**
   ```php
    $affectedRows = $stmt->rowCount();
    echo $affectedRows;
   ```
**Get the ID for the last record inserted**
   ```php
    $lastId = $pdo->lastInsertId();
   ```
**Close Query and Database Connection**
   ```txt
    PDO and prepared statements do not require explicit closing.
    They are closed automatically when the variable is no longer in use.
   ```

## Working with Arrays

**Creating an Array**
   ```php
    $array = ['item1', 'item2', 'item3'];
   ```

**Inserting New Items into an Array**
   ```php
    $array[] = 'newItem';
   ```

**Remove Item from an Array**
   ```php
    unset($array[$key]);
   ```

**Reindex Values after Removing an Item**
   ```php
    $array = array_values($array);
   ```

**Reverse an Array**
   ```php
    $reversedArray = array_reverse($array);
   ```

**Merge Two or More Arrays**
   ```php
    $mergedArray = array_merge($array1, $array2);
   ```

**Return Only the Array Keys**
   ```php
    $keys = array_keys($array);
   ```

**Sort an Array in Ascending Order**
   ```php
    sort($array);
   ```

**Sort an Array in Reverse Order**
   ```php
    rsort($array);
   ```

**Check if an Item Exists in an Array**
   ```php
    if (in_array('item', $array)) {
        echo "Item found!";
    }
   ```

**Check if the Key Exists in an Array**
   ```php
    if (array_key_exists('key', $array)) {
        echo "Key exists!";
    }
   ```

**Count the Number of Items in an Array**
   ```php
    $count = count($array);
   ```

**Convert Comma-Separated List to Array**
   ```php
    $array = explode(',', $commaSeparatedList);
   ```

**Convert an Array to a Comma-Separated List**
   ```php
    $commaSeparatedList = implode(',', $array);
   ```

## GET and POST Requests
**Check if the $_GET Request Variable Exists**
   ```php
    if (isset($_GET['param'])) {
        // Do something
    }
   ```

**Check if the $_POST Variable Exists**
   ```php
    if (isset($_POST['param'])) {
        // Do something
    }
   ```

## Working with Password Hashing
**Create a Password Hash**
   ```php
    $hash = password_hash("password", PASSWORD_DEFAULT);
   ```

**Verify Hashed Password**
   ```php
    if (password_verify('password', $hash)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
    }
   ```

## Session Handling
**Create a New Session**
   ```php
    session_start();
   ```

**Free All Session Variables**
   ```php
    session_unset();
   ```

**Destroy All Session Variables**
   ```php
    session_destroy();
   ```

## Introduction to the header() Function
**Redirect the URL**
   ```php
    header("Location: https://www.example.com");
    exit();
   ```

## Determining the Current Date
**Get the Date from a Timestamp:**
   ```php
    echo date("Y-m-d H:i:s");
   ```

## Create and Parse JSON
   ```php
    // Create JSON
    $array = ['key' => 'value'];
    $json = json_encode($array);

    // Parse JSON
    $parsedArray = json_decode($json, true);
  ```

## Using the ternary operator

   The ternary operator in PHP is a shorthand for the `if-else` statement.
   It is used to execute different code based on the evaluation of a condition.
   The syntax of the ternary operator is:
    
      condition ? exprIfTrue : exprIfFalse;

**Basic Usage**:
   ```php
   //In this example, `$isAdult` will be `"Yes"` if `$age` is greater than or equal to 18, and `"No"` otherwise.
   $age = 20;
   $isAdult = ($age >= 18) ? "Yes" : "No";
   echo $isAdult; // Outputs: Yes
   ```

**Nested Ternary**:
   ```php
   //Here, we use a nested ternary operator to determine a grade based on the score. If `$score` is 90 or above, `$grade` is "A". If it's between 80 and 89, `$grade` is "B". Otherwise, it's "C".
   $score = 85;
   $grade = ($score >= 90) ? "A" : (($score >= 80) ? "B" : "C");
   echo $grade; // Outputs: B
   ```

**Using Ternary with Functions**:
   ```php
   //In this example, if `$user` is "Alice", it calls the `greet` function with `$user` as a parameter. If `$user` is not "Alice", it outputs "Unknown user".
   $user = "Alice";
   echo ($user === "Alice") ? greet($user) : "Unknown user";

   function greet($name) {
       return "Hello, " . $name;
   }
   // Outputs: Hello, Alice
   ```