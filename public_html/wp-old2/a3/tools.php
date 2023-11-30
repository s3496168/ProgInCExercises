<?php
  session_start();

  $moviesObject = [
<<<<<<< HEAD
    'ACT' => [
      'title' => 'Indiana Jones and the Dial of Destiny',
      'rating' => 'PG-13',
      'genre' => 'Action, Adventure',
      'summary' => 'Experience the return of legendary hero, Indiana Jones, in the fifth installment of this beloved swashbuckling series of films.',
      'plot' => 'Finding himself in a new era, approaching retirement, Indy wrestles with fitting into a world that seems to have outgrown him. But as the tentacles of an all-too-familiar evil return in the form of an old rival, Indy must don his hat and pick up his whip once more to make sure an ancient and powerful artifact doesn&apos;t fall into the wrong hands.',
      'imdb' => 'tt1462764',
=======
    'ACT' => [/* Put structured Action movie details here */],
    'DRM' => [
      'title' => 'Napoleon',
      'rating' => 'PG-15',
      'genre' => 'Action, Adventure',
      'summary' => 'An epic that details the checkered rise and fall of French Emperor Napoleon Bonaparte and his relentless journey to power through the prism of his addictive, volatile relationship with his wife, Josephine.',
      'plot' => 'Napoleon is a spectacle-filled action epic that details the checkered rise and fall of the iconic French Emperor Napoleon Bonaparte, played by Oscar®-winner Joaquin Phoenix. Against a stunning backdrop of large-scale filmmaking orchestrated by legendary director Ridley Scott, the film captures Bonapartes relentless journey to power through the prism of his addictive, volatile relationship with his one true love, Josephine, showcasing his visionary military and political tactics against some of the most dynamic practical battle sequences ever filmed.',
      'imdb' => 'tt13287846',
>>>>>>> 61574f6a06bbf021cbaee39a979b055303f92af1
      'screening-summary' => 'Monday - Tuesday: 9pm, Wednesday - Friday: 9pm, Saturday - Sunday: 6pm',
      'screenings' => [
        'MON' => [
          'time' => '9pm',
<<<<<<< HEAD
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
      'rating' => 'PG-13',
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
      'rating' => 'PG-13',
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
      'rating' => 'R',
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

/* Put your PHP variables, functions and modules here.
   Many will be provided in the teaching materials,
   keep a look out for them!
*/
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

  /*server to client side code generation-thanks Trev*/

  function php2js( $arr, $arrName ) {
        $arrJSON = json_encode($arr, JSON_PRETTY_PRINT);
          echo <<<"CDATA"
                  /* Variable generated with Trev's handy php2js() function */
                  var $arrName = $arrJSON;
        CDATA;
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
  
  <iframe width="821" height="462" src="https://www.youtube.com/embed/pBk4NYhWNMM" title="Barbie | Main Trailer" allowfullsb-screen></iframe>
                      //          <!--
               //// Reference for iframe with security features
              //  Hamadeh, Y, 2023, ' 'Barbie' trailer: Even Barbie has an existential crisis sometimes "Do you guys ever think about dying?" ', "Mashable" (blog), May 25th,
              //  viewed 6th July 2023,
              //  <https://mashable.com/video/barbie-trailer>
              //  !-->
  <h2>{$moviesObject[$movieID]['title']}</h2>
  <img src='../../media/classifications/{$moviesObject[$movieID]['classification']}.png'.../>
  <p class='summary'>{$moviesObject[$movieID]['summary']}</p>
  <p class='plot'>{$moviesObject[$movieID]['plot']}</p>
  <div>
    <span class='rating'> ... </span>
    <button class='film-info' ... > ... </button>
  </div>
  </div>
  CDATA;

  }

function moviePanel( $movieID ) {
global $moviesObject;
  echo <<<"CDATA"
  <div class='movie-panel' id='panel_$movieID'>
  <img class='poster' src='../../media/posters/poster_$movieID.png' .../>
  <iframe width="821" height="462" src="https://www.youtube.com/embed/pBk4NYhWNMM" title="Barbie | Main Trailer" allowfullsb-screen></iframe>
                      //          <!--
               //// Reference for iframe with security features
              //  Hamadeh, Y, 2023, ' 'Barbie' trailer: Even Barbie has an existential crisis sometimes "Do you guys ever think about dying?" ', "Mashable" (blog), May 25th,
              //  viewed 6th July 2023,
              //  <https://mashable.com/video/barbie-trailer>
              //  !-->
  <h2>{$moviesObject[$movieID]['title']}</h2>
  <img src='../../media/classifications/{$moviesObject[$movieID]['classification']}.png'.../>
  <p class='summary'>{$moviesObject[$movieID]['summary']}</p>
  <p class='plot'>{$moviesObject[$movieID]['plot']}</p>
  <div>
    <span class='rating'> ... </span>
    <button class='film-info' ... > ... </button>
  </div>
  </div>
  CDATA;

  }
?>
<!-- can only get here if the movie code is valid!-->
=======
          'rate' => 'DISC'
        ],
        'TUE' => [
          'time' => '9pm',
          'rate' => 'FULL'
        ],
        'WED' => [
          'time' => '9pm',
          'rate' => 'FULL'
        ],
        'THU' => [
          'time' => '9pm',
          'rate' => 'FULL'
        ],
        'FRI' => [
          'time' => '9pm',
          'rate' => 'FULL'
        ],
        'SAT' => [
          'time' => '6pm',
          'rate' => 'FULL'
        ],
        'SUN' => [
          'time' => '6pm',
          'rate' => 'FULL'
        ]
      ]
    ],
    'RMT' => [/* Put structured Romantic Thriller movie details here */],
    'FAM' => [/* Put structured Family movie details here */]
    
  ];

/* Put your PHP functions and modules here.
   Many will be provided in the teaching materials,
   keep a look out for them!
*/

?>
>>>>>>> 61574f6a06bbf021cbaee39a979b055303f92af1
