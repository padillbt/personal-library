<?php
        echo "<div class=\"modal fade\" id=\"addBookModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">";
        
        echo "  <div id=\"myModal\" class=\"popup-modal modal-dialog modal-vertical-centered\">";
        
        echo "      <div id=\"modal-wrapper-div\">";
        
        echo "          <div id=\"link-box-top\">";
        
        echo "              <div id=\"book-header\">";
        echo "                  <h1>Add Book</h1>";
        echo "              </div>";
        echo "          </div>";
        echo "          <div class=\"description-box\">";
        echo "              <table>";
        echo "                  <tr>";
        echo "                      <td>ISBN Number*: </td>";
        echo "                      <td><input typw=\"text\" class=\"editInput\" id=\"addIsbnInput".$i."\" value=\"\"></input></td>";
        echo "                  </tr>";
        echo "              </table>";
        echo "              <div></div>";
        echo "              <hr />";
        echo "              <p>or</p>";
        echo "              <hr />";
        echo "              <div></div>";
        echo "              <table>";
        echo "                  <tr>";
        echo "                      <td>Book Title*: </td>";
        echo "                      <td><input typw=\"text\" class=\"editInput\" id=\"addBookTitleInput".$i."\" value=\"\"></input></td>";
        echo "                  </tr>";
        echo "                  <tr>";
        echo "                      <td>Author Name*: </td>";
        echo "                      <td><input typw=\"text\" class=\"editInput\" id=\"addAuthorNameInput".$i."\" value=\"\"></input></td>";
        echo "                  </tr>";
        echo "                  <tr>";
        echo "                      <td>Published In: </td>";
        echo "                      <td><input typw=\"text\" class=\"editInput\" id=\"addPublishedYearInput".$i."\" value=\"\"></input></td>";
        echo "                  </tr>";
        echo "                  <tr>";
        echo "                      <td>Total Pages: </td>";
        echo "                      <td><input typw=\"text\" class=\"editInput\" id=\"addTotalPagesInput".$i."\" value=\"\"></input></td>";
        echo "                  </tr>";
        echo "              </table>";
        echo "              <div></div>";
        echo "              <hr />";
        echo "              <div></div>";
        echo "              <table>";
        echo "                  <tr>";
        echo "                      <td>Last Read Page: </td>";
        echo "                      <td><input typw=\"text\" class=\"editInput\" id=\"addBookmarkPageInput".$i."\" value=\"\"></input></td>";
        echo "                  </tr>";
        echo "                  <tr>";
        echo "                      <td>Location: </td>";
        echo "                      <td><input typw=\"text\" class=\"editInput\" id=\"addLocationInput".$i."\" value=\"\"></input></td>";
        echo "                  </tr>";
        echo "                  <tr>";
        echo "                      <td>Rating: </td>";
        echo "                      <td>";
        echo "                          <div class=\"rating\">";
        echo "                          </div>";
        echo "                      </td>";
        echo "                  </tr>";
        echo "              </table>";
        echo "          </div>";
        echo "          <div class=\"link-box\">";
        echo "              <input type=\"submit\" value=\"Add to Library\" class=\"add-book-flat-btn\" />";
        echo "              <input type=\"submit\" value=\"Add to Wishlist\" class=\"add-book-flat-btn\" />";
        echo "          </div>";
        echo "      </div>";
        echo "  </div>";
        echo "</div>";
?>