#!/usr/bin/env php
<?php
  require(dirname(__FILE__) . '/src/functions.php');
  use function FileStats\countBytes;
  use function FileStats\countCharacters;
  use function FileStats\countLines;
  use function FileStats\countWords;
  use function FileStats\formatBytes;

  $file = $argv[1];
  if (!$file) {
    throw new Exception('Specify a file as the first argument');
  }

  printf("File: %s\n", realpath($file));

  $contents = file_get_contents($file);
  if ($contents == false) {
    throw new Exception("Could not read file: $file");
  }

  printf("Lines: %d\n", countLines($contents));
  printf("Words: %d\n", countWords($contents));
  printf("Characters: %d\n", countCharacters($contents));
  printf("Size: %s\n", formatBytes(countBytes($contents)));
?>
