  <?php
        include 'post-validation.php';
        include 'tools.php';
        $postErrors = validateBooking();
 session_start(); // NB: Don't worry, this won't "restart" an existing session

    ?>
<!DOCTYPE html>
<html lang='en'>
  
<head>
   

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Lunardo Cinema</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">


    <!-- Company logo based on the cinema's traditional orange seats! -->
    <link rel="icon" href="../../media/MovieLogo.ico" type="image/x-icon">
    <script src='../wireframe.js'></script>

    <!--google font Reference: Shaver-Troup, B, Jockin, T,Orozco, S, Gómez, H, Superunion c2023, "Lexend Peta", Google Fonts, viewed 6th July 2023,
    <https://fonts.google.com/specimen/Lexend+Peta>!-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta:wght@90;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--Google Font Reference: Ulanovsky, J, Matas, S, Pablo del Peral,J, Le Bailly, J, c2023, "Montserrat", Google Fonts, viewed 6th July 2023,
     <https://fonts.google.com/specimen/Montserrat?query=+Montserrat>!-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta:wght@90;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,90;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,90;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>

<body>
  
          <header>

            <div id="butter" class="popcorn">
                <a href="index.php">

                    <span class="logo">
                        <img src="../../media/Logo.svg" alt="cinema logo" height=56>
                    </span>
                    <div class="logo">
                        <p class = "logoOne">Lunardo</p>
                        <p class = "logoTwo">C i n e m a </p>

                    </div>
                </a>
            </div>

        </header>


        <div class="navbar two">
            <nav>


                <ul class="links justOne">
                    <li><a href="index.php">
                           <p class="logoThree">Home</p>
                        </a></li>

                </ul>
            </nav>
        </div>

  
    <main>
           <!--barbie section!-->
                    
        <div class="grid-container">
   

            <!--start responsive!-->


            <!--note this is the grid header-the sticky wouldn't work in the grid. I tried to get it to work for several days, to no avail!-->
            <div class="header">
            </div>


            <div class="left">

            </div>

            <div id="bookings" class="middle">
            <article id="articleForm">
                <form name="form" id="theForm" method="post" class="submit" onsubmit="validateBooking()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" novalidate>
                   <section id="radioS">

                    <?php
        $code = $_GET['code'];
        $movie = $_GET['movie'];
        if($code != "RMC" && ($code == "ANM" || $code == "ACT" || $code == "DRM")){
       moviePanel($_GET['code']); 
          }else{
        moviePanelVideo($_GET['code']);     
}
?>
                 
                        <div id="allRadios">


                            <!--PHP warning!-->

                            <div class="testPHP">

                            </div>
                            <div class='code screening'>
                   
                                <fieldset>
                                    <?php

foreach ( $moviesObject[ $code ]['screenings'] as $screening => $details ) {
     $rate = $details['rate'];
     $time = $details['time'];
     $radioId = $code.'_'. $screening.'_'.$time.'_'.$rate;
   if (isset($details['time'] )&& $details['time']!="NA"){
     
  
    echo "<input type='radio' name='week' id='$radioId' value='$screening' onclick='showParaBarbie(\"$radioId\", moviesObjectJS)'><label for='$radioId'>$screening</label>\n";
   }
}
     
        
?>


                                    <!--end php phew!-->

                                </fieldset>

                            </div>
                            <div id="smallTableForRBs">
                                <fieldset>
                                    <table>
                                        <?php

foreach ( $moviesObject[ $code ]['screenings'] as $screening => $details ) {
     $rate = $details['rate'];
     $time = $details['time'];
     $radioId = $code.'_'. $screening.'_'.$time.'_'.$rate.'_smallBtn';
    if (isset($details['time'] )&& $details['time']!="NA"){
    echo "<tr><td><input type='radio' name='week' id='$radioId' value='$screening' onclick='showParaBarbie(\"$radioId\", moviesObjectJS)'><label for='$radioId'>$screening</label></td></tr>\n";
   
    }
}
     
?>

                                      

                                    </table>
                                </fieldset>

                            </div>
                        <div id="timeMovie">
                            <p id="movieTimeTitle">Times<br>BTW...Weekday matinees and Mondays are discounted.</p>
                            <p id="movieTime"></p>
                        </div>
                        </div>
 </section>
                    <!--end barbie section!-->
                    <!--dropdowns section for cinema!-->
                   
                        <section id="BigDDownsForCinema">
                            <!--Table for seat types!-->
                            <table id="standardTable">
                                <tr>
                                    <th>Quantity</th>
                                    <th>Type</th>
                                    <th>Price</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[STA]" id="sb-scrollbarOne-fullprice" data-fullprice="21.5" data-discprice="16">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                    <td>Standard Adult</td>
                                    <td id="paradSA">$21.50</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[CON]" id="sb-scrollbarTwo-fullprice" data-fullprice="19" data-discprice="14.5">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                    <td>Adult Concession</td>
                                    <td id="AdCon">$19.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[CHI]" id="sb-scrollbarThree-fullprice" data-fullprice="17.5" data-discprice="13">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                    <td>Standard Child</td>
                                    <td id="paradChild">$17.50</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[FCL]" id="sb-scrollbarFour-fullprice" data-fullprice="31" data-discprice="25">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                    <td>First Class Adult</td>
                                    <td id="paradFC">$31.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[FAC]" id="sb-scrollbarFive-fullprice" data-fullprice="28" data-discprice="23.5">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                    <td>First Class Adult Concession</td>
                                    <td id="paradFCC">$28.00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[FCC]" id="sb-scrollbarSix-fullprice" data-fullprice="25" data-discprice="22">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                    <td>First Class Child</td>
                                    <td id="paradFCCH">$25.00</td>
                                </tr>
                            </table>
                            <!--End table for seat types!-->
                        </section>
                        <!--end standard tables!-->
                        <!--responsive tables!-->
                        
                        <section id="smallDdownsForCinema">
                            <!--standard adult!-->
                            <table id="SAmini" class="belowFifty">
                                <tr>
                                    <th>Standard Adult</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[STA]" id="sb-scrollbarThirteen-fullprice" data-fullprice="21.5" data-discprice="16">
                                                    <!--Please select label!-->
                                                    <option value="Number" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="paradSAmini">$21.50</td>
                                </tr>

                            </table>

                            <!--end standard adult!-->
                            <br>
                            <!--concession adult!-->
                            <table id="CAmini" class="belowFifty">
                                <tr>
                                    <th>Concession Adult</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[CON]" id="sb-scrollbarFourteen-fullprice" data-fullprice="19" data-discprice="14.5">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="miniAdCon">$19.00</td>
                                </tr>

                            </table>

                            <!--end concession adult!-->
                            <br>
                            <!--child!-->
                            <table id="childMini" class="belowFifty">
                                <tr>
                                    <th>Child</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[CHI]" id="sb-scrollbarFifteen-fullprice" data-fullprice="17.5" data-discprice="13">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="paradChildMini">$17.50</td>
                                </tr>

                            </table>
                            <!--end child!-->
                            <br>
                            <!--first class adult!-->
                            <table id="FCAmini" class="belowFifty">
                                <tr>
                                    <th>First Class Adult</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[FCL]" id="sb-scrollbarSixteen-fullprice" data-fullprice="31" data-discprice="25">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="paradFCmini">$31.00</td>
                                </tr>

                            </table>
                            <br>
                            <!--end first class adult!-->
                            <!-- first class concession adult!-->
                            <table id="FCCmini" class="belowFifty">
                                <tr>
                                    <th>First Class Conccession Adult</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[FAC]" id="sb-scrollbarSeventeen-fullprice" data-fullprice="28" data-discprice="23.5">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="paradFCCmini">$28.00</td>
                                </tr>

                            </table>

                            <!--end first class concession adult!-->
                            <br>
                            <!--first class child!-->
                            <table id="FCCHmini" class="belowFifty">
                                <tr>
                                    <th>First Class Conccession Child</th>
                                </tr>
                                <tr>
                                    <td>
                                        <p><label>Number:
                                                <select name="seatNo[FAC]" id="sb-scrollbarSixtyOne-fullprice" data-fullprice="28" data-discprice="23.5">
                                                    <!--Please select label!-->
                                                    <option value="Please select" disabled selected>Please select</option>
                                                    <script>
                                                        var one = 1;
                                                        for (var i = one; i <= (one + 9); i++)
                                                            document.write('<option value="' + i + '">' + i + '</option>');
                                                    </script>
                                                </select>
                                            </label></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td id="paradFCCHmini">$25.00</td>
                                </tr>
                            </table>
                        </section>
               <!--end dropdowns section for cinema!-->
                    <!--Remainder of form!-->
                        <section id="gridDetailBox">
                            <div class="box">
                                <label class='moreLeft' for='username'>Name: </label><br>
                               
                                <input type='text' id='username' name='username' value='<?=$username?>'/><br>

                                <label class='formLabel' for='phoneNo'>Phone Number: </label><br>
                               
                                <input type='tel' id='phoneNo' name='phoneNo' value='<?=$phoneNo ?>'/><br>
                                <label class='moreLeft' for='email'>Email: </label><br>
                              
                                <input type='email' name='email' value='<?=$email ?>'/> <br>
                           

                                <input type="hidden" id="Bid" name="Barbie" value="RMC"><br>
                                <input type="submit" value="Submit" id="inputSubmit" action="showAllCartItems()" onclick="calculatePrice()" formnovalidate>
                                
                            </div>
                        </section>
              <!--End remainder of form!-->
                </form>
              <div><p id="movieTotal"></p>
               
               <!--booking section!-->
               <div id='cart'><?php
if ( isset($_SESSION['cart']) && count($_SESSION['cart']) > 0 )
  showAllCartItems(); // you need to write this function :-)
else
  echo "Your cart is empty, <a href='shop.php'>click here to go to the shop</a>.";
?></div>
               
              < /div>
                <!--end booking section!-->
                  <//div>
                </div>
                </article>
             </div>
            
            <div class="right"></div>


            <div class="footer">
                <footer>

                    <div>
                        <h4>We are located at 123 Something Street, Atown <br> Phone: (03) 3496 4168</h4>
                    </div>
                    <div>&copy;<script>
                            document.write(new Date().getFullYear());
                        </script> By Brearne Gibson, s3496168. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['script_FILENAME'])); ?>.</div>
                    <div>
                        <p>GitHub Repo link can be found <a href="https://github.com/s3496168/wp.git">here</a></p>
                    </div>
                    <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
                    <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>

                </footer>
                
            </div>
            
           
            
            <!--end responsive!-->
            
          
        </div>
  
    </main>
    <!--script is now external!-->
    <script src="script.js"></script>
   
    <aside id="debug">
        <hr>
        <h3>Debug Area</h3>
        <pre>
GET Contains:
<?php print_r($_GET) ?>
POST Contains:
<?php print_r($_POST) ?>
SESSION Contains:
<?php print_r($_SESSION) ?>
      </pre>
    </aside>

</body>

</html>
