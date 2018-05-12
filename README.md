# WebPortals

## Main SplitScreen

All projects here united here by same goal. Create awesome WebPortal on php. 
Main index here is simple website with double split screen choice.
Be careful, before use this projects you need download and install
[xampp](https://www.apachefriends.org/ru/index.html){:target="_blank"}

![alt text](https://raw.githubusercontent.com/dmitryblackwell/WebPortals/master/img/index.jpg)

## GameDevPortal
Site with one game article and Snake. Also it have simple registration for saving resutlts 

### PHP code to create DB
```php
$query = "CREATE TABLE ScoreList(
                _id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY,
                name VARCHAR(32),
                token VARCHAR(32),
                score INT UNSIGNED)";
mysqli_query($dbc, $query);

```

![alt text](https://raw.githubusercontent.com/dmitryblackwell/WebPortals/master/img/GameDev.jpg)

![alt text](https://raw.githubusercontent.com/dmitryblackwell/WebPortals/master/img/snake.jpg)



## PI_ZNO_score

Site to make ZNO score table and save it to database. 
Also it have approval all result by admin and to get to admin panel you need to enter username and password.

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


![alt text](https://raw.githubusercontent.com/dmitryblackwell/WebPortals/master/img/pi_zno_score.jpg)

