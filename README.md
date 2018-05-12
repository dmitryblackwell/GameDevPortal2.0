# WebPortals

## Main SplitScreen

All projects here united here by same goal. Create awesome WebPortal on php. 
Main index here is simple website with double split screen choice.
Be careful, before use this projects you need download and install 
[xampp](https://www.apachefriends.org/ru/index.html)

## GameDevPortal

### PHP code to create DB


```php
$query = "CREATE TABLE ScoreList(
                _id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
                name VARCHAR(32),
                token VARCHAR(32),
                score INT UNSIGNED)";
mysqli_query($dbc, $query);
```

## PI_ZNO_score

### PHP code to create DB
```php
$query = "CREATE TABLE test_results(
                _id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
                email VARCHAR(32),
                approved TINYINT,
                name VARCHAR(32),
                score INT UNSIGNED)";
mysqli_query($dbc, $query);
```