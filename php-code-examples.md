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

- **Boolean (bool)**: Represents true or false.
- **Integer (int)**: A whole number.
- **Floating Point Number (float)**: A number with decimals.
- **String**: A sequence of characters.
- **Array**: A collection of key-value pairs in a specific order.
- **Object**: An entity created from a predefined class.
- **Callable**: A reference to a function in PHP.
- **Iterable**: Any array or object compatible with the Traversable interface.
- **Resource**: A link to an external resource.
- **NULL**: A variable without any value.

PHP data types are not explicitly declared; rather, they are determined at runtime based on the context. There are multiple methods to identify a variable's type.

**Identifying Type and Value**

- **Using var_dump()**: This function displays a variable's type and value.

  Example:
  ```php
   $text = "PHP";
   var_dump($text);
   // Output: string(3) "PHP"
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

Assignment operators in PHP are used to write a value to a variable. The basic assignment operator is `=`, but there are several others that combine assignment with arithmetic or string operations. Let's go through some examples to illustrate these operators:

## Basic PHP assignment operators:

**Assignment Operator `=`**

The `=` operator assigns the value on the right to the variable on the left.

  ```php
   $number = 10; // Assigns 10 to $number
   $text = "Hello, PHP!"; // Assigns the string "Hello, PHP!" to $text
  ```

**Arithmetic Assignment Operators**

These operators combine arithmetic operations with assignments.

**Addition Assignment `+=`**

Adds the right-hand operand to the left-hand operand and assigns the result to the left-hand operand.

  ```php
   $a = 10;
   $a += 5; // Equivalent to $a = $a + 5; Now $a is 15
  ```

**Subtraction Assignment `-=`**

Subtracts the right-hand operand from the left-hand operand and assigns the result to the left-hand operand.

  ```php
   $a = 10;
   $a -= 5; // Equivalent to $a = $a - 5; Now $a is 5
  ```

**Multiplication Assignment `*=`**

Multiplies the right-hand operand with the left-hand operand and assigns the result to the left-hand operand.

  ```php
   $a = 10;
   $a *= 2; // Equivalent to $a = $a * 2; Now $a is 20
  ```

**Division Assignment `/=`**

Divides the left-hand operand by the right-hand operand and assigns the result to the left-hand operand.

  ```php
   $a = 10;
   $a /= 2; // Equivalent to $a = $a / 2; Now $a is 5
  ```

**Modulus Assignment `%=`**

Takes modulus using two operands and assigns the result to the left-hand operand.

  ```php
   $a = 10;
   $a %= 3; // Equivalent to $a = $a % 3; Now $a is 1
  ```

**String Concatenation Assignment Operator `.=`**

Concatenates the right-hand operand to the left-hand operand and assigns the result to the left-hand operand.

  ```php
   $text = "Hello, ";
   $text .= "World!"; // Equivalent to $text = $text . "World!"; Now $text is "Hello, World!"
  ```

## Comparison operators

Comparison operators in PHP compare two values (numbers or strings) against each other. These operators are essential for controlling the flow of the program through conditional statements like `if`. Let's look at some of the basic comparison operators in PHP, along with examples:

**Equal `==`**

Checks if two values are equal. It returns `true` if the values are equal, and `false` otherwise.

  ```php
   if (3 == "3") {
       echo "Yes, they are equal."; // This will be executed
   }
  ```

Here, `3` (an integer) and `"3"` (a string) are considered equal because `==` compares only the values, not the types.

**Identical `===`**

Checks if two values are equal and of the same type. It returns `true` only if both the value and the type are the same.

  ```php
   if (3 === "3") {
       echo "Yes, they are identical.";
   } else {
       echo "No, they are not identical."; // This will be executed
   }
  ```

In this case, although `3` and `"3"` have the same value, they are of different types (integer and string), so they are not identical.

**Not Equal `!=`**

Checks if the two values are not equal. It returns `true` if the values are not equal, and `false` otherwise.

  ```php
   if (3 != 4) {
       echo "Yes, they are not equal."; // This will be executed
   }
  ```

Here, `3` and `4` are different values, so the condition is true.

**Not Identical `!==`**

Checks if two values are not equal or not of the same type.

  ```php
   if (3 !== "3") {
       echo "Yes, they are not identical."; // This will be executed
   }
  ```

In this case, `3` (integer) and `"3"` (string) are considered not identical because they are of different types.

**Greater Than `>`**

Checks if the value on the left is greater than the value on the right.

  ```php
   if (5 > 3) {
       echo "Yes, 5 is greater than 3."; // This will be executed
   }
  ```

**Less Than `<`**

Checks if the value on the left is less than the value on the right.

  ```php
   if (2 < 3) {
       echo "Yes, 2 is less than 3."; // This will be executed
   }
  ```

**Greater Than or Equal To `>=`**

Checks if the value on the left is greater than or equal to the value on the right.

  ```php
   if (5 >= 5) {
       echo "Yes, 5 is greater than or equal to 5."; // This will be executed
   }
  ```

**Less Than or Equal To `<=`**

Checks if the value on the left is less than or equal to the value on the right.

  ```php
   if (3 <= 5) {
       echo "Yes, 3 is less than or equal to 5."; // This will be executed
   }
  ```

## String concatenation

String concatenation in PHP is joining one or more strings together. PHP uses the dot `.` operator for concatenation. You can concatenate strings enclosed in single quotes `' '` or double quotes `" "`. Here are three examples demonstrating these concepts:

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
   /* In this example, single quotes are used for the string literals, and variables are concatenated using the `.` operator. This approach is useful when preventing variable interpolation in certain parts of the string. */

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

Conditional statements are crucial to any programming language, including PHP, as they allow you to perform different actions based on different conditions. Here are three examples demonstrating the use of `if`, `if-else`, and `if-elseif-else` in PHP:

**Using `if` Statement**

The `if` statement executes a block of code only if a specified condition is true.

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
    /* Here, the code checks if `$age` is 18 or more. If true, it prints, "You are an adult."; otherwise, it prints "You are a minor." */
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

## Working with the PHP Date function
The `date()` function in PHP is used to format a local date and time, and it is extremely useful for all kinds of date-related operations. Here are three common examples of working with the `date()` function in PHP:

**Example 1: Displaying the Current Date**

You can use the `date()` function to display the current date in a specific format. Here's how to display the date in the format of year-month-day (YYYY-MM-DD):

  ```php
   // Displaying the current date in YYYY-MM-DD format
   $currentDate = date("Y-m-d");
   echo "Today's date is: " . $currentDate;
   // Might output: Today's date is: 2024-01-06
  ```

**Example 2: Displaying the Current Time**

The `date()` function can also format the current time. Here's an example of how to display the current time in the format of hours:minutes:seconds (HH:MM:SS):

  ```php
   // Displaying the current time in HH:MM:SS format
   $currentTime = date("H:i:s");
   echo "Current time is: " . $currentTime;
   // Might output: Current time is: 15:30:45
  ```

**Example 3: Formatting a Specific Timestamp**

If you have a specific timestamp, you can format it using the `date()` function. This is useful for converting timestamps into more readable date formats. Here's an example:

  ```php
   /* In this example, we're formatting a Unix timestamp into a more readable string, including the month name, day, year, and time. */
   // A specific timestamp
   $timestamp = 1672915200; // Represents 2023-01-05 00:00:00
   
   // Formatting the timestamp into a readable date
   $formattedDate = date("F j, Y, g:i a", $timestamp);
   echo "Formatted date: " . $formattedDate;
   // Might output: Formatted date: January 5, 2023, 12:00 am
  ```

## Create and Parse JSON
   ```php
    // Create JSON
    $array = ['key' => 'value'];
    $json = json_encode($array);

    // Parse JSON
    $parsedArray = json_decode($json, true);
  ```
