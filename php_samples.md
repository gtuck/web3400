# Helpful PHP code samples:

### Database Connectivity

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

### Database CRUD operations

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

### Other Database operations

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

### Working with Strings

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

### Working with Arrays

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

### GET and POST Requests
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

### Working with Password Hashing
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

### Session Handling
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

### Introduction to the header() Function
**Redirect the URL**
   ```php
    header("Location: https://www.example.com");
    exit();
   ```

### Determining the Current Date
**Get the Date from a Timestamp:**
   ```php
    echo date("Y-m-d H:i:s");
   ```

### Create and Parse JSON
   ```php
    // Create JSON
    $array = ['key' => 'value'];
    $json = json_encode($array);

    // Parse JSON
    $parsedArray = json_decode($json, true);
  ```