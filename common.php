<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  /*
   * Mariella Gauvreau
   * CSE 154
   * CP 5
   * Configuration file and helper functions for the colorgenerator web service. Common.php
   * comments and file taken from Professor Bricker and Hovik.
   */

  /**
   * Returns a PDO object connected to the bmstore database. Throws
   * a PDOException if an error occurs when connecting to database.
   * @return {PDO}
   */
  function get_PDO() {
    $host =  "localhost";
    $port = "9999";
    $user = "root";
    $password = "root";
    $dbname = "colorgenerator";

    $debug = FALSE;

    $ds = "mysql:host={$host}:{$port};dbname={$dbname};charset=utf8";

    try {
      $db = new PDO($ds, $user, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;
    } catch (PDOException $ex) {
      handle_error("Can not connect to the database. Please try again later.", $ex);
    }
  }

  /**
   * Prints out a plain text 400 error message given $msg. If given a second (optional) argument as
   * an PDOException, prints details about the cause of the exception.
   * @param $msg {string} - Plain text 400 message to output
   * @param $ex {PDOException} - (optional) Exception object with additional exception details to print
   */
  function handle_error($msg, $ex=NULL) {
    header("HTTP/1.1 400 Invalid Request");
    header("Content-type: text/plain");
    if ($debug) {
      $msg .= "\n Error details: $ex \n";
    }
    print($msg);
    die();
  }

?>
