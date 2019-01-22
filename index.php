<?php
error_reporting(E_ALL);
include("common.php");
$db = get_PDO();

/* Mariella Gauvreau
 * CSE 154 AB
 * CP 4
 * This API supports GET requests.
 * GET
 * If sent a GET request, a parameter 'mode' is required to:
 * - mode==movies
 *   returns the movie titles, description, year made and ratings
 * If none of the responses correspond to one of the responses on the server,
 * returns a 400 response.
 */

if (isset($_GET["mode"])) {
    $mode = strtolower($_GET["mode"]);
    if ($mode == "movies") {
        get_movie_info($db);
    } else {
        handle_error("Invalid mode passed. Please pass movies");
    }
} else {
    handle_error("Missing required GET or POST parameters.");
}

/**
 * Returns a JSON file containing all of the movies and their respective information
 * @return {object} - JSON-formatted object with schema:
 * {
 *  <movie title> : <movie informaiton>
 * }
 */
function get_movie_info($db) {
  try {
    $output = array();
    foreach ($rows as $rows) {
      $movie_arr = array();
      $movie_info = array();
      $movie_info["description"] =$row["description"];
      $movie_info["year"] =$row["year"];
      $movie_info["rating"] =$row["rating"];
      array_push($movie_arr, $movie_info);
      array_push($output, ($row["title"] => $movie_arr));
    }
      header("Content-Type: application/json");
      print(json_encode($moreColors));

  } catch (PDOException $ex) {
      handle_error("Cannot query the database", $ex);
  }
}

?>
