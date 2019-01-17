<?php
  namespace FileStats;

  function countBytes($contents) {
    return strlen($contents);
  }

  function countCharacters($contents) {
    return iconv_strlen($contents);
  }

  function countLines($contents) {
    return count(explode(PHP_EOL, $contents));
  }

  function countWords($contents) {
    return str_word_count($contents);
  }

  function formatBytes($bytes, $precision = 2) {
    $units = array('B', 'KB', 'MB', 'GB', 'TB');

    $bytes = max($bytes, 0);
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
    $pow = min($pow, count($units) - 1);

    $bytes /= pow(1024, $pow);

    return round($bytes, $precision) . $units[$pow];
  }
?>
