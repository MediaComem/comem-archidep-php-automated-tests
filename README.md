# PHP Automated Tests

Sample project to write PHP automated tests.

<!-- START doctoc -->
<!-- END doctoc -->



## Requirements

* [PHP][php] 7+



## Usage

Clone this repository:

```bash
$> git clone https://github.com/MediaComem/comem-archidep-php-automated-tests
```

Run the script:

```bash
$> php file-stats.php data/rainbow.txt
File: /path/to/data/rainbow.txt
Lines: 51
Words: 255
Characters: 1284
Size: 1.25KB

$> php file-stats.php data/japanese.txt
File: /path/to/data/japanese.txt
Lines: 2
Words: 6
Characters: 12
Size: 22B
```



## Exercice

* Install [PHPUnit][phpunit].
* Write at least one unit test per function.
* Write an integration test for `countBytes` and `formatBytes` together.



[php]: http://www.php.net/
[phpunit]: https://phpunit.de
