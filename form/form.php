<!DOCTYPE html>
<html>
<head>
  <title>Sign Up!</title>
  <link href="css/styles-main.css" rel="stylesheet">
</head>

<body>
  <div id="header"><img src="img/ph-header2.png" width="739"
    height="135"></div>

    <div id="topline"></div>
    <div id="mainContent">

      <h1>Hello The Inside!</h1>

      <form action="form-action.php" method="post" name"signup" id="signup">
        <h2>Media Suggestion</h2>
        <p>
          <label for="name"> Name: </label>
          <input name="name" type="text" id="name" size="60">
          <label for="email"> Email: </label>
          <input name="email" type="text" id="email" size="60">
        </p>
         <p>
          Categories<br>
          <select name="howoftentrack" id="howoftentrack">
            <option value="daily">Music</option>
            <option value="yearly">Books</option>
            <option value="masochistic">Movies</option>
          </select>
        </p>
<p>Title (required)</p>
        <p>
          <label for="name"> </label>
          <input name="name" type="text" id="name" size="60">
        </p>
 <p>
          Format<br>
          <select name="howoftentrack" id="howoftentrack">
            <option value="daily">DVD</option>
            <option value="yearly">CD</option>
            <option value="masochistic">Vinyl</option>
            <option value="masochistic">Hardcover</option>
            <option value="masochistic">Softcover</option>
          </select>
        </p>
 <p>
          Genre<br>
          <select name="howoftentrack" id="howoftentrack">
            <option value="daily">Drama</option>
            <option value="yearly">Horror</option>
            <option value="masochistic">Action</option>
            <option value="masochistic">Comedy</option>
            <option value="masochistic">Rock</option>
            <option value="masochistic">Pop</option>
          </select>
        </p>
<p>Year</p>
        <p>
          <label for="name"> </label>
          <input name="name" type="text" id="name" size="60">
        </p>
 <p>

        <p>Suggest Item Details<br>
          <textarea name="comments" id="comments" cols="52" rows="5">
          </textarea>
        </p>
        <input class="button lgbutton" type="submit" name"submit"
        id="submit" value="Submit!">
      </form>
    </div>
    <div id="footer"><a href="#">FAQ</a><a href="#">Forgot Password?</a>
      <a href="#">Change Your Email</a>
      <a href="#">Contact The Insider</a>
    </div>
  </body>
  </html>
