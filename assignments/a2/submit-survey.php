<!-- Garek Dorwin, Created and modified: 15 April 2018, http://chelan.highline.edu/~gdorwin26/116/assignments/a2/submit-survey.php -->
<?php
  // Turn on error reporting
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  // If the submit button was pressed
  if(isset($_POST['submit']))
  {
    // parse out the given data.
    // if the POST variable is set and is not empty, set the variable to its value.
    // if the POST variable is set and is empty, set the variable to "no response"
    // if the POST variable is not set, set the variable to "no response"
    $major = isset($_POST['major']) ? $_POST['major'] : 'no response';
    $majorOther = isset($_POST['major-other']) ? ($_POST['major-other'] == '' ? 'no response' : $_POST['major-other']) : 'no response';
    $yos = isset($_POST['yos']) ? ($_POST['yos'] == '' ? 'no response' : $_POST['yos']) : 'no response';
    $gpa = isset($_POST['gpa']) ? $_POST['gpa'] : 'no response';
    $safety = isset($_POST['safety']) ? $_POST['safety'] : 'no response';
    $safetyFeedback = isset($_POST['safety-feedback']) ? ($_POST['safety-feedback'] == '' ? 'no response' : $_POST['safety-feedback']) : 'no response';
    $friendly = isset($_POST['friendly']) ? $_POST['friendly'] : 'no response';
    $friendlyFeedback = isset($_POST['friendly-feedback']) ? ($_POST['friendly-feedback'] == '' ? 'no response' : $_POST['safety-feedback']) : 'no response';
    $mot = isset($_POST['mot']) ? $_POST['mot'] : 'no response';
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Submitted Student Survey</title>
    <meta name="description" content="Assignment: Student Survey" />
    <meta name="author" content="Garek Dorwin" />

    <link rel="icon" type="image/png" href="../../images/favicon-16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="../../images/favicon-32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../../images/favicon-64.png" sizes="64x64" />
    <link href="https://fonts.googleapis.com/css?family=Unica+One%7CVollkorn" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/a2-form.css" />
  </head>
  <body>
    <header>
      <h1>Student Survey</h1>
    </header>
    <section>
      <h2>Successfully Submitted Survey!</h2>
      <?php
        // Output the given and parsed data.
        echo "<p>Major: $major</p>";
        echo "<p>Major (other): $majorOther</p>";
        echo "<p>Year of Study: $yos</p>";
        echo "<p>GPA: $gpa</p>";
        echo "<p>Campus safety: $safety</p>";
        echo "<p>Campus safety feedback: $safetyFeedback</p>";
        echo "<p>Friendly learning environment: $friendly</p>";
        echo "<p>Friendly learning environment feedback: $friendlyFeedback</p>";
        echo '<p>Mode of transportation: ';
        if($mot == "no response")
        {
          echo $mot; // echo "no response"
        }
        else
        {
          // loop through each variable in the "modes of transportation" array.
          for($i = 0; $i < count($mot); $i++)
          {
            // output the variable.
            // if the index is the count - 1, i.e. the last in the array, do not put a comma and space.
            echo "$mot[$i]".(($i == count($mot) - 1) ? '' : ', ');
          }
        }
        echo '</p>';
      ?>
    </section>
    <footer>
      <a href="https://github.com/gd26/CSCI-116">
        <!-- Copied SVG from Octicon, see https://octicons.github.com/icon/code/ -->
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16">
          <path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5
            3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/>
        </svg>
        View Source
      </a>
    </footer>
  </body>
</html>
