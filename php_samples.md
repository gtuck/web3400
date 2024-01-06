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

### Escape HTML Entities
    ```php
    $escapedString = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
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
1. **Creating an Array**
   ```php
   $array = ['item1', 'item2', 'item3'];
   ```

2. **Inserting New Items into an Array**
   ```php
   $array[] = 'newItem';
   ```

3. **Remove Item from an Array**
   ```php
   unset($array[$key]);
   ```

4. **Reindex Values after Removing an Item**
   ```php
   $array = array_values($array);
   ```

5. **Reverse an Array**
   ```php
   $reversedArray = array_reverse($array);
   ```

6. **Merge Two or More Arrays**
   ```php
   $mergedArray = array_merge($array1, $array2);
   ```

7. **Return Only the Array Keys**
   ```php
   $keys = array_keys($array);
   ```

8. **Sort an Array in Ascending Order**
   ```php
   sort($array);
   ```

9. **Sort an Array in Reverse Order**
   ```php
   rsort($array);
   ```

10. **Check if an Item Exists in an Array**
    ```php
    if (in_array('item', $array)) {
        echo "Item found!";
    }
    ```

11. **Check if the Key Exists in an Array**
    ```php
    if (array_key_exists('key', $array)) {
        echo "Key exists!";
    }
    ```

12. **Count the Number of Items in an Array**
    ```php
    $count = count($array);
    ```

13. **Convert Comma-Separated List to Array**
    ```php
    $array = explode(',', $commaSeparatedList);
    ```

14. **Convert an Array to a Comma-Separated List**
    ```php
    $commaSeparatedList = implode(',', $array);
    ```

### GET and POST Requests
1. **Retrieve a GET Request Parameter**
   ```php
   $param = $_GET['param'] ?? 'default';
   ```

2. **Check if the $_GET Request Variable Exists**
   ```php
   if (isset($_GET['param'])) {
       // Do something
   }
   ```

3. **Check if the $_POST Variable Exists**
   ```php
   if (isset($_POST['param'])) {
       // Do something
   }
   ```

### Working with Password Hashing
1. **Create a Password Hash**
   ```php
   $hash = password_hash("password", PASSWORD_DEFAULT);
   ```

2. **Verify Hashed Password**
   ```php
   if (password_verify('password', $hash)) {
       echo 'Password is valid!';
   } else {
       echo 'Invalid password.';
   }
   ```

### Session Handling
1. **Create a New Session**
   ```php
   session_start();
   ```

2. **Free All Session Variables**
   ```php
   session_unset();
   ```

3. **Destroy All Session Variables**
   ```php
   session_destroy();
   ```

### Introduction to the header() Function
**Redirect the URL**
```php
header("Location: https://www.example.com");
exit();
```

### Working with $_SERVER
```php
$serverInfo = $_SERVER['SERVER_NAME'];
```

### Get the Contents of a URL File curl_init()
```php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.example.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);
```

### Using the PHP file_get_contents Function
```php
$content = file_get_contents('http://www.example.com');
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

### Get the Full URL
```php
$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
```

### Format Numbers
1. **Format Integers**
   ```php
   echo number_format(123456789);
   ```

2. **Format Number with Decimals**
   ```php
   echo number_format(123456.789, 2);
   ```

These snippets cover a broad range of basic and intermediate PHP functionalities, suitable for various web development scenarios. Remember to always tailor these snippets to the specific requirements and context of your project.