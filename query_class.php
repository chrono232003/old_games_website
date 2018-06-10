<?php

//SQL QUERIES
$genres = "SELECT DISTINCT Genre FROM games_DOS";
$home_list = "SELECT Title, Pic, Description, GameFile, ID FROM games_DOS Where ID IN (1393, 1389, 1390, 1391, 1392, 849)";
$games_by_category = "SELECT Title, Pic, Description, GameFile, ID FROM games_DOS WHERE Genre = '" . $_GET['cat'] . "'";

//Footer
$footer_pics = "SELECT ID, Pic, Title FROM games_DOS Where Pic <> '' ORDER BY DateAdded DESC LIMIT 9";

class Query {

  private $conn;

   public function __construct($conn) {
     $this->conn = $conn;
   }

   /***
   *PAGES: HOME
   */
   function get_home_list() {
    global $conn, $home_list;
     return mysqli_query($conn,$home_list);
   }

  /***
  *PAGES: HOME, CATEGORIES
  */
  //GRAB GENRE
  function grab_genres() {
    global $conn, $genres;
    return mysqli_query($conn,$genres);
  }

  //GET GAME LIST BY CATEGORY
  function get_games_by_category() {
      global $conn, $games_by_category;
      return mysqli_query($conn,$games_by_category);
    }

    //GET GAME LIST BY CATEGORY
    function get_footer_pics() {
        global $conn, $footer_pics;
        return mysqli_query($conn,$footer_pics);
      }
}

?>
