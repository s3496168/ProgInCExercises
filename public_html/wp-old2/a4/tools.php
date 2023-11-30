<?php
  session_start();
  setcookie("customer-since", date("Y-m-d@H:i:s"), time()+60*60*24*365.25*100); 

  $moviesObject = [
    'ACT' => [
      'title' => 'Indiana Jones and the Dial of Destiny',
      'classification' => 'PG-13',
      'genre' => 'Action, Adventure',
      'summary' => 'Experience the return of legendary hero, Indiana Jones, in the fifth installment of this beloved swashbuckling series of films.',
      'plot' => 'Finding himself in a new era, approaching retirement, Indy wrestles with fitting into a world that seems to have outgrown him. But as the tentacles of an all-too-familiar evil return in the form of an old rival, Indy must don his hat and pick up his whip once more to make sure an ancient and powerful artifact doesn&apos;t fall into the wrong hands.',
      'imdb' => 'tt1462764',
      'screening-summary' => 'Monday - Tuesday: 9pm, Wednesday - Friday: 9pm, Saturday - Sunday: 6pm',
      'screenings' => [
        'MON' => [
          'time' => '9pm',
          'rate' => 'discprice'
        ],
        'TUE' => [
          'time' => '9pm',
          'rate' => 'fullprice'
        ],
        'WED' => [
          'time' => '9pm',
          'rate' => 'fullprice'
        ],
        'THU' => [
          'time' => '9pm',
          'rate' => 'fullprice'
        ],
        'FRI' => [
          'time' => '9pm',
          'rate' => 'fullprice'
        ],
        'SAT' => [
          'time' => '6pm',
          'rate' => 'fullprice'
        ],
        'SUN' => [
          'time' => '6pm',
          'rate' => 'fullprice'
        ]
      ]
    ],
    'RMC' => [/* Put structured Rom-Com movie details here */
     'title' => 'Barbie',
      'classification' => 'PG-13',
      'genre' => 'Romance, Comedy',
      'summary' => 'Barbie suffers a crisis that leads her to question her world and her existence.',
      'plot' => 'Barbie and Ken are having the time of their lives in the colorful and seemingly perfect world of Barbie Land. However, when they get a chance to go to the real world, they soon discover the joys and perils of living among humans.',
      'imdb' => 'tt1517268',
      'screening-summary' => 'Monday - Tuesday: NA, Wednesday - Friday: 12pm, Saturday - Sunday: 3pm',
      'screenings' => [
        'MON' => [
          'time' => 'NA',
          'rate' => 'NA'
        ],
        'TUE' => [
          'time' => 'NA',
          'rate' => 'NA'
        ],
        'WED' => [
          'time' => '12pm',
          'rate' => 'discprice'
        ],
        'THU' => [
          'time' => '12pm',
          'rate' => 'discprice'
        ],
        'FRI' => [
          'time' => '12pm',
          'rate' => 'discprice'
        ],
        'SAT' => [
          'time' => '3pm',
          'rate' => 'fullprice'
        ],
        'SUN' => [
          'time' => '3pm',
          'rate' => 'fullprice'
        ]
      ]
    ],
    'ANM' => [/* Put structured Animation movie details here */
     'title' => 'Teenage Mutant Ninja Turtles: Mutant Mayhem',
      'classification' => 'PG-13',
      'genre' => 'Animation',
      'summary' => 'The film follows the Turtle brothers as they work to earn the love of New York City while facing down an army of mutants.',
      'plot' => 'After years of being sheltered from the human world, the Turtle brothers set out to win the hearts of New Yorkers and be accepted as normal teenagers. Their new friend, April O\'Neil, helps them take on a mysterious crime syndicate, but they soon get in over their heads when an army of mutants is unleashed upon them.',
      'imdb' => 'tt8589698',
      'screening-summary' => 'Monday - Tuesday: 12pm, Wednesday - Friday: 6pm, Saturday - Sunday: 12pm',
      'screenings' => [
        'MON' => [
          'time' => '12pm',
          'rate' => 'discprice'
        ],
        'TUE' => [
          'time' => '12pm',
          'rate' => 'discprice'
        ],
        'WED' => [
          'time' => '6pm',
          'rate' => 'fullprice'
        ],
        'THU' => [
          'time' => '6pm',
          'rate' => 'fullprice'
        ],
        'FRI' => [
          'time' => '6pm',
          'rate' => 'fullprice'
        ],
        'SAT' => [
          'time' => '12pm',
          'rate' => 'fullprice'
        ],
        'SUN' => [
          'time' => '12pm',
          'rate' => 'fullprice'
        ]
      ]
    ],
    'DRM' => [/* Put structured Drama movie details here */
     'title' => 'Oppenheimer',
      'classification' => 'R',
      'genre' => 'Drama',
      'summary' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
      'plot' => 'During World War II, Lt. Gen. Leslie Groves Jr. appoints physicist J. Robert Oppenheimer to work on the top-secret Manhattan Project. Oppenheimer and a team of scientists spend years developing and designing the atomic bomb. Their work comes to fruition on July 16, 1945, as they witness the world\'s first nuclear explosion, forever changing the course of history.',
      'imdb' => 'tt15398776',
      'screening-summary' => 'Monday - Tuesday: 6pm, Wednesday - Friday: NA, Saturday - Sunday: 9pm',
      'screenings' => [
        'MON' => [
          'time' => '6pm',
          'rate' => 'discprice'
        ],
        'TUE' => [
          'time' => '6pm',
          'rate' => 'fullprice'
        ],
        'WED' => [
          'time' => 'NA',
          'rate' => 'NA'
        ],
        'THU' => [
          'time' => 'NA',
          'rate' => 'NA'
        ],
        'FRI' => [
          'time' => 'NA',
          'rate' => 'NA'
        ],
        'SAT' => [
          'time' => '9pm',
          'rate' => 'fullprice'
        ],
        'SUN' => [
          'time' => '9pm',
          'rate' => 'fullprice'
        ]
      ]
    ],
  ];

//not working
//  if ( !isset($moviesObject[ $_GET['movie'] ]) ) {
 //   header("Location: index.php"); // redirect if movie code invalid
 //   exit();
 // }

// can only get here if the movie code is valid

php2js( $moviesObject, 'moviesObjectJS' );
/* Put your PHP variables, functions and modules here.
   Many will be provided in the teaching materials,
   keep a look out for them!
*/

    function php2js( $arr, $arrName ) {

  $arrJSON = json_encode($arr, JSON_PRETTY_PRINT);

  echo <<<"CDATA"

    <script>

    /* Variable generated with Trev's handy php2js() function */

    var $arrName = $arrJSON;

    </script>

CDATA;
    }

  /*Debug module*/

  function debugModule() {    
        echo "<pre id='debug'>";     
          print_r($_POST);    
          echo "</pre>";    
  }

  /*code printer*/
  function printMyCode() {
        $allLinesOfCode = file($_SERVER['SCRIPT_FILENAME']);
          echo "<pre id='myCode'><ol>"; 
          foreach($allLinesOfCode as $oneLineOfCode) {
                  echo "<li>" .rtrim(htmlentities($oneLineOfCode)) . "</li>";
                    }
            echo "</ol></pre>";
  }


/*redirection for invalid or not supplied code!*/
 function redir(){
if ( !isset($moviesObject[ $_GET['movie']]) ) {
  header("Location: index.php"); // redirect if movie code invalid
  exit();
  }
}

/*function to check for "checked" keyword*/
function unsetFB(&$str, $fallback = '') {
    return (isset($str) ? $str : $fallback);
}
$movie = unsetFB($_GET['movie'], 'XXX');
$email = unsetFB($_POST['email']);


/*function to check for "set" keyword*/
function setSelected (&$str, $val) {
      return ( isset($str) && $str == $val ? 'selected' : '' ); 
}

function moviePanelVideo( $movieID ) {
global $moviesObject;
  echo <<<"CDATA"
  <div class='movie-panel' id='panel_$movieID'>
  <h2>{$moviesObject[$movieID]['title']}</h2>
  <div id="widths">
      <div id='stupidIframeContainer'>
        <iframe id="barbieFrame" src="https://www.youtube.com/embed/pBk4NYhWNMM" title="Barbie | Main Trailer"></iframe>
    </div>
  </div>              
               <!-- Reference for iframe with security features
              //  Hamadeh, Y, 2023, ' 'Barbie' trailer: Even Barbie has an existential crisis sometimes "Do you guys ever think about dying?" ', "Mashable" (blog), May 25th,
              //  viewed 6th July 2023,
              //  <https://mashable.com/video/barbie-trailer>!-->
         <br><br>
         <p class='summary'>{$moviesObject[$movieID]['summary']}</p>
        <p class='plot'>{$moviesObject[$movieID]['plot']}</p>
        <div>
            <span class='rating'> <img src="../../media/{$moviesObject[$movieID]['classification']}.png" alt="{$moviesObject[$movieID]['classification']}"/> </span>
        </div>
  </div>
  CDATA;

  }

function moviePanel( $movieID ) {
global $moviesObject;
  echo <<<"CDATA"
  <div class='movie-panel' id='panel_$movieID'>
   <h2>{$moviesObject[$movieID]['title']}</h2>
  <img class='poster' src='../../media/{$moviesObject[$movieID]['imdb']}.png'/>
  <p class='summary'>{$moviesObject[$movieID]['summary']}</p>
  <p class='plot'>{$moviesObject[$movieID]['plot']}</p>
  <div>
    <span class='rating'> <img src="../../media/{$moviesObject[$movieID]['classification']}.png" alt="{$moviesObject[$movieID]['classification']}"/></span>
  </div>
  </div>
  CDATA;

  }

//booking
 function showAllCartItems(){
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("post-validation.php");
    $errorMsgs = findBookingErrors();
    if (count($errorMsgs) == 0) {
    // ie no problems with user input
      $_SESSION = $_POST;
      header("Location: receipt.php"); 
      exit();
    }
  }
 }

//eliminates minor errors
error_reporting( E_ERROR | E_WARNING | E_PARSE );
?>

<!--old
    //<button class='film-info' ... > ... </button>
   //<button class='film-info' ...  ... </button>
!-->
<!-- can only get here if the movie code is valid!-->
