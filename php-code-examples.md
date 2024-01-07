# PHP code examples:

## Commenting code

Commenting code is an important practice in programming, allowing developers to annotate code sections for readability and maintainability. PHP supports single-line comments, multi-line comments, and documentation comments. Here are three examples illustrating each type:

### Single-Line Comments

Single-line comments in PHP are made using either `//` or `#.` Anything following these symbols on the same line is treated as a comment and is not executed.

**Example using `//`:**

 ```php
  // This is a single-line comment
  echo "Hello, World!"; // This part of the line is a comment
 ```

**Example using `#`:**

 ```php
  # This is also a single-line comment
  echo "Hello, World!"; # This part of the line is a comment
 ```

### Multi-Line Comments

Multi-line comments are used to comment out blocks of code. They start with `/*` and end with `*/`. Everything in between is considered a comment.

 ```php
  /* This is a multi-line comment
     and it spans over multiple
     lines. */
  echo "This is not a comment.";
 ```

This method is commonly used for temporarily disabling a block of code or for providing detailed descriptions that span multiple lines.

### Documentation Comments

Documentation comments (or DocComments) are a special type of comment that's used for generating API documentation and is structured in a way that documentation generation tools can parse. They start with `/**` and end with `*/`. Inside, you often find annotations in a specific format.

 ```php
  /**
   * Function to greet a user
   *
   * @param string $name The name of the user
   * @return void
   */
  function greet($name) {
      echo "Hello, " . $name . "!";
  }
 ```

DocComments are particularly useful in large projects and frameworks, where automated documentation generation becomes a crucial part of the workflow.

## Basic data types:

PHP data types are not explicitly declared; they are determined at runtime based on the context. In other words, PHP is a *Dynamically Typed Language*.

- **Boolean (bool)**: Represents true or false.
- **Integer (int)**: A whole number.
- **Floating Point Number (float)**: A number with decimals.
- **String**: A sequence of characters.
- **Array**: A collection of key-value pairs in a specific order.
- **Object**: An entity created from a predefined class.
- **NULL**: A variable without any value.

There are multiple methods to identify a variable's type.

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
- `is_null($value)`: Determines if the value is NULL.

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

## Basic PHP assignment operators:

Assignment operators in PHP are used to write a value to a variable. The basic assignment operator is `=`, but several others combine assignment with arithmetic or string operations. Let's go through some examples to illustrate these operators:

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

## Working with strings

Working with strings is fundamental to any programming language, including PHP. Strings are used to store and manipulate text. Here's a basic example of creating a string variable in PHP and performing some common operations with it:

**Creating a String Variable**

```php
 // Creating a string variable
 $greeting = "Hello, World!";
```

In this example, `$greeting` is a string variable that holds the text `"Hello, World!"`.

## Basic String Operations

**Concatenation** - Joining strings together:
   ```php
    $firstName = "John";
    $lastName = "Doe";
    $fullName = $firstName . " " . $lastName; // Outputs: John Doe
   ```

**String Length** - Getting the length of a string:
   ```php
    $length = strlen($greeting); // Outputs: 13
   ```

**String Replacement** - Replacing part of a string with another string:
   ```php
    $newGreeting = str_replace("World", "PHP", $greeting); // Outputs: Hello, PHP!
   ```

**String Case Conversion** - Converting a string to upper or lower case:
   ```php
    $upperCase = strtoupper($greeting); // Outputs: HELLO, WORLD!
    $lowerCase = strtolower($greeting); // Outputs: hello, world!
   ```

**Substring Extraction** - Extracting a part of a string:
   ```php
    $subString = substr($greeting, 7, 5); // Outputs: World
   ```

In this example, `$greeting` demonstrates various string operations like concatenation, finding the length, replacing text within the string, changing case, and extracting a substring. These operations are common in PHP programming, especially when dealing with text processing and manipulation.

## More about String Concatenation

String concatenation in PHP is joining one or more strings together. PHP uses the dot `.` operator for concatenation. You can concatenate strings enclosed in single quotes `' '` or double quotes `" "`. Here are three examples demonstrating these concepts:

**Concatenation with Single Quotes**

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

**Concatenation with Double Quotes**

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

## Working with Numbers

Working with numbers is a fundamental aspect of programming in PHP, as in most programming languages. PHP supports different types of numbers, including integers and floating-point numbers (or doubles). Here's a basic example of creating number variables in PHP and performing some common operations with them:

### Creating Number Variables

```php
 // Creating integer and floating-point number variables
 $integerNumber = 10;
 $floatingNumber = 20.5;
```

In this example, `$integerNumber` is an integer variable that holds the value `10`, and `$floatingNumber` is a floating-point number that holds the value `20.5`.

**Basic Number Operations**

**Arithmetic Operations** - Performing calculations like addition, subtraction, multiplication, and division:
   ```php
    $sum = $integerNumber + $floatingNumber; // Addition, Outputs: 30.5
    $difference = $floatingNumber - $integerNumber; // Subtraction, Outputs: 10.5
    $product = $integerNumber * 2; // Multiplication, Outputs: 20
    $quotient = $floatingNumber / $integerNumber; // Division, Outputs: 2.05
   ```

**Increment and Decrement** - Increasing or decreasing a number by one:
   ```php
    $integerNumber++; // Increment, $integerNumber is now 11
    $integerNumber--; // Decrement, $integerNumber is back to 10
   ```

**Rounding Numbers** - Rounding floating-point numbers:
   ```php
    $roundedNumber = round($floatingNumber); // Round to nearest whole number, Outputs: 21
    $floorNumber = floor($floatingNumber); // Round down, Outputs: 20
    $ceilNumber = ceil($floatingNumber); // Round up, Outputs: 21
   ```

**Working with Random Numbers** - Generating random numbers:
   ```php
    $randomNumber = rand(1, 100); // Random number between 1 and 100
   ```

In these examples, `$integerNumber` and `$floatingNumber` demonstrate various operations like arithmetic calculations, incrementing/decrementing, rounding, and generating random numbers. These operations are commonly used in PHP programming for handling numerical data and calculations.

## Control statements

Control statements are crucial to any programming language, including PHP, as they allow you to perform various actions based on different conditions. Here are three examples demonstrating the use of `if`, `if-else`, and `if-elseif-else` in PHP:

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
    
      `condition ? exprIfTrue : exprIfFalse;`

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

## Switch statement

The `switch` statement in PHP is used to perform different actions based on different conditions. It's similar to a series of `if` statements but is often more concise and easier to read, particularly when you have several different conditions to check against the same value. Here's an example of a `switch` statement:

**Example: `switch` Statement to Display a Weekday**

Suppose you want to display the name of a weekday based on a numeric input (where `1` is Monday, `2` is Tuesday, and so on).

```php
 $dayNumber = 4;
 
 switch ($dayNumber) {
     case 1:
         echo "Monday";
         break;
     case 2:
         echo "Tuesday";
         break;
     case 3:
         echo "Wednesday";
         break;
     case 4:
         echo "Thursday"; // This will be executed
         break;
     case 5:
         echo "Friday";
         break;
     case 6:
         echo "Saturday";
         break;
     case 7:
         echo "Sunday";
         break;
     default:
         echo "Invalid day number";
 }
```

In this example, the `switch` statement is used to check the value of `$dayNumber`. Each `case` represents a possible value of `$dayNumber`, and the corresponding code block is executed if `$dayNumber` matches that case. The `break` statement prevents the code from running into the next case accidentally. The `default` case is executed if none of the cases match the value of `$dayNumber`. In this scenario, since `$dayNumber` is `4`, the output will be `"Thursday"`.

## Database Connectivity

**Use PDO to connect to a database, then use a try/catch to test the connection**
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

## Examples of blending PHP and HTML to display records

Using `foreach` syntax in PHP, which utilizes a colon `:` and `endforeach;`, can make the code more readable, especially in templates or embedded HTML. Here are the same three examples of outputting data from a PDO recordset, reformatted using this style:

**Output in HTML Text Format**

Displaying each record's information in plain HTML text format:

 ```php
  <?php foreach ($records as $record) : ?>
      Name: <?php echo $record['name']; ?>, Email: <?php echo $record['email']; ?><br>
  <?php endforeach; ?>
 ```

**Output in an HTML Table**

Creating a table to present the data in a structured format:

 ```php
  <table border="1">
      <tr>
          <th>Name</th>
          <th>Email</th>
      </tr>
      <?php foreach ($records as $record) : ?>
          <tr>
              <td><?php echo $record['name']; ?></td>
              <td><?php echo $record['email']; ?></td>
          </tr>
      <?php endforeach; ?>
  </table>
 ```

Each user's name and email are displayed in separate table rows in this example.

**Output in an HTML List**

Using an unordered list to display each record:

 ```php
  <ul>
      <?php foreach ($records as $record) : ?>
          <li>Name: <?php echo $record['name']; ?>, Email: <?php echo $record['email']; ?></li>
      <?php endforeach; ?>
  </ul>
 ```

This code creates an unordered list where each user's name and email are shown as list items.

---

In these examples, `$records` represents the PDO recordset obtained from a database query. The `foreach` loop iterates over each row in the recordset, and the data is inserted into HTML elements for display. The exact structure of `$record` (`$record['name']`, `$record['email']`) depends on the columns returned by your SQL query.

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
The `date()` function in PHP is used to format a local date and time, and it is beneficial for all kinds of date-related operations. Here are three common examples of working with the `date()` function in PHP:

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
