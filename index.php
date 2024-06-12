lii<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="staly.css">
    <title> RGB.ING </title>
  
</head>

<body>
    <nav>
        <ul>
            <li><img src="enel.jpg" alt="Descripción de la imagen"></li>
            <li><a href="index.php">HOME</a></li>
            <li><a href="view.php">VIEW</a></li>
        </ul>
    </nav>
   
<section class="masthead">
    <div>
      <h1>ENEL GREEN POWER EMPLOYMENT BANK</h1>
    </div>
    <img src="green enregy.jpg" alt="image">
  </section>
  <main class="container">
    <section class="form-row row justify-content-center">
      <!-- the add.php will execute our CREATE function -->
      <form method="post" action="add.php" class="form-horizontal col-md-6 col-md-offset-3">
        <!-- I am using the wrong input types so that we can test our php validation with no road blocks -->
        <p><input type="text" name="name" placeholder="Your Name"></p>
        <p><input type="text" name="career" placeholder="Your Career"></p>
        <p><input type="number" name="years_experience" placeholder="Your years_experience"></p>
        <p><input type="text" name="email" placeholder="Your Email"></p>
        <p><input type="number" name="cell_phone" placeholder="Your contact Number"></p>
        <input class="btn btn-primary order" type="submit" name="Submit" value="Add">
        <input class="btn btn-dark reset" type="reset" value="Clear">
      </form>
    </section>
    
  </main>
    <footer>
        <center><h2>WWW.ENEL GREEN POWER</h2></center>
    </footer>
</body>
</html>