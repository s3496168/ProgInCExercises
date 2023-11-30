<?php
include 'post-validation.php';
include 'tools.php';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <!--usually I'd put script tags at the bottom...but here it goes!-->
    <script>
        <?= php2js( $movieObject, 'movieObjectJS' ) ?>
    </script>

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
    <section class="home">
        <header>

            <div id="butter" class="popcorn">

                <span class="logo">
                    <a href="index.php">
                        <img src="../../media/Logo.svg" alt="cinema logo" height=56>
                    </a>
                </span>
                <div class="logo">
                    <a href="index.php">
                        <h1 style="margin:0;">Lunardo</h1>
                        <h2 style="margin:0;">C i n e m a </h2>
                    </a>
                </div>
            </div>
        </header>


        <div class="navbar two">
            <nav>


                <ul class="links">
                    <li><a href="index.php">
                            <h3>Home</h3>
                        </a></li>

                </ul>
            </nav>
        </div>

    </section>
    <main>
        <div class="grid-container">


            <!--start responsive!-->


            <!--note this is the grid header-the sticky wouldn't work in the grid. I tried to get it to work for several days, to no avail!-->
            <div class="header">
            </div>


            <div class="left">
                
            </div>

            <div id="bookings" class="middle">

                <form name="form" id="theForm" method="post" class="submit" onsubmit="validateData()">
                    <?php
$code = $_GET['code'];
if($code==="RMC"){
  <?= moviePaneVideo($_GET['code']) ?>
      }else{

                   <?= moviePanel($_GET['code']) ?> 
}

?>


                    <!--barbie section!-->
                    <article id="barbieArticle">
                        <div id="barbie">

                            <section id="barbieRadio">
                                <h1>Barbie</h1>
                                <iframe width="821" height="462" src="https://www.youtube.com/embed/pBk4NYhWNMM" title="Barbie | Main Trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullsb-screen></iframe>
                                <!--
                Reference for iframe with security features
                Hamadeh, Y, 2023, ' 'Barbie' trailer: Even Barbie has an existential crisis sometimes "Do you guys ever think about dying?" ', "Mashable" (blog), May 25th,
                viewed 6th July 2023,
                <https://mashable.com/video/barbie-trailer>
                !-->



                                <div id="smallTableForRBs">
                                    <fieldset>
                                        <table>

                                            <tr>
                                                <th>Times<br>BTW...Weekday matinees and Mondays are discounted.</th>
                                            </tr>
                                            <?php
foreach ( $moviesObject[ $code ]['screenings'] as $screening => $details ) {
     $rate = $details['rate'];
     $time = $details['time'];
     $radioId = $code.'_'. $screening.'_'.$time.'_'.$rate.'_smallBtn';
  
    echo "<tr><td><input type='radio' name='week' id='$radioId' value='$screening' onclick='showParaBarbie(\"$radioId\")'><label for='$radioId'>$screening</label></td></tr>\n";
   

}
             
?>

                                        </table>
                                    </fieldset>

                                </div>


                                <p id="movieTime"></p>
                            </section>
                           
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
  
    echo "<input type='radio' name='week' id='$radioId' value='$screening' onclick='showParaBarbie(\"$radioId\")'><label for='$radioId'>$screening</label>\n";
   
//onclick="showParaBSun(\"$radioId\")"   
   // onclick='addDesc(\"$radioId\")

}
               
?>


                                    <!--end php phew!-->

                                </fieldset>
                               
                            </div>
                             <p id="movieTotal"></p>
                        </div>

                    </article>



                    <!--end barbie section!-->
                    <!--dropdowns section for cinema!-->
                    <article id="dropdownsForCinema">
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
                        <!--standard adult!-->
                        <section id="smallDdownsForCinema">
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

                        <section id="barbieBox">
                            <div class="box">
                                <label for="nameB">Name: </label><br>
                                <!--<input type="text" id="nameB" name="[cust][name]" value=""><br>!-->
                                <input type="text" id="nameB" name="[cust][name]" value="<php?=$_POST['cust']['name'] ?>"><br>

                                <label for="phoneNoB">Phone Number: </label><br>
                                <!-- <input type="tel" id="phoneNoB" name="[cust][mobile]" value=""><br>!-->
                                <input type="tel" id="phoneNoB" name="[cust][mobile]" value="<php?=$_POST['cust']['mobile'] ?>"><br>
                                <label for="emailB">Email: </label><br>
                                <!--<input type="email" id="emailB" name="[cust][email]" value=""><br>!-->
                                <input type="email" id="emailB" name="[cust][email]" value="<php?=$_POST['cust']['email'] ?>"><br>
                           
                            <input type="hidden" id="Bid" name="Barbie" value="RMC"><br>
                            <input type="submit" value="Submit" action="booking.php" onclick="calculatePrice()">
                                 </div>
                        </section>
                    </article>
                    <!--end dropdowns section for cinema!-->
                    <!--tmnt section!-->
                    <article id="TMNTarticle">
                        <div id="tmnt">

                            <section id="TMNTRadio">
                                <h1>TMNT</h1>
                                <img src="../../media/Teenage_Mutant_Ninja_Turtles_-_Mutant_Mayhem.jpg" alt="Teenage Mutant Ninja Turtles: Mutant Mayhem movie poster" class="poster">
                                <!--radio buttons for days!-->
                                <div class="most">
                                    <fieldset>
                                        <legend>Times<br>BTW...Weekday matinees and Mondays are discounted.</legend><br>

                                        <input type="radio" id="btn_sundayTMNT" name="week" onclick="showParaTSu()" value="sunday" checked data_pricing="fullprice">
                                        <label for="btn_sundayTMNT">Sunday</label>
                                        <input type="radio" id="btn_mondayTMNT" name="week" onclick="showParaTMo()" value="monday" data_pricing="discprice">
                                        <label for="btn_mondayTMNT">Monday</label>
                                        <input type="radio" id="btn_tuesdayTMNT" name="week" onclick="showParaTTu()" value="tuesday" data_pricing="fullprice">
                                        <label for="btn_tuesdayTMNT">Tuesday</label>
                                        <input type="radio" id="btn_wednesdayTMNT" name="week" onclick="showParaTWe()" value="wednesday" data_pricing="fullprice">
                                        <label for="btn_wednesdayTMNT">Wednesday</label>
                                        <input type="radio" id="btn_thursdayTMNT" name="week" onclick="showParaTTh()" value="thursday" data_pricing="fullprice">
                                        <label for="btn_thursdayTMNT">Thursday</label>
                                        <input type="radio" id="btn_fridayTMNT" name="week" onclick="showParaTFr()" value="friday" data_pricing="fullprice">
                                        <label for="btn_fridayTMNT">Friday</label>
                                        <input type="radio" id="btn_saturdayTMNT" name="week" onclick="showParaTSa()" value="saturday" data_pricing="fullprice">
                                        <label for="btn_saturdayTMNT">Saturday</label>
                                    </fieldset>
                                </div>
                                <!--Table for small sb-screens!-->
                                <div class="small">
                                    <fieldset>
                                        <table>

                                            <tr>
                                                <th>Times<br>BTW...Weekday matinees and Mondays are discounted.</th>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_sundayTMNTMini" name="week" onclick="showParaTSu()" value="sunday" checked>
                                                    <label for="btn_sundayTMNTMini">Sunday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_mondayTMNTMini" name="week" onclick="showParaTMo()" value="monday">
                                                    <label for="btn_mondayTMNTMini">Monday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_tuesdayTMNTMini" name="week" onclick="showParaTTu()" value="tuesday">
                                                    <label for="btn_tuesdayTMNTMini">Tuesday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_wednesdayTMNTMini" name="week" onclick="showParaTWe()" value="wednesday">
                                                    <label for="btn_wednesdayTMNTMini">Wednesday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_thursdayTMNTMini" name="week" onclick="showParaTTh()" value="thursday">
                                                    <label for="btn_thursdayTMNTMini">Thursday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_fridayTMNTMini" name="week" onclick="showParaTFr()" value="friday">
                                                    <label for="btn_fridayTMNTMini">Friday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_saturdayTMNTMini" name="week" onclick="showParaTSa()" value="saturday">
                                                    <label for="btn_saturdayTMNTMini">Saturday</label>
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </div>
                                <p id="tsu">12pm</p>
                                <p id="tmo">12pm</p>
                                <p id="ttu">12pm</p>
                                <p id="twe">6pm</p>
                                <p id="tth">6pm</p>
                                <p id="tfr">6pm</p>
                                <p id="tsa">12pm</p>
                            </section>

                            <!--Table for seat types!-->
                            <section id="TMNTBigRegular">

                            </section>
                            <section id="TMNTBigDiscount">

                            </section>
                            <section id="TMNTSmallRegular"></section>

                            <section id="TMNTSmallDiscount">
                            </section>
                            <section id="TMNTBox">
                                <div class="box">
                                    <label for="nameTMNT">Name: </label><br>
                                    <input type="text" id="nameTMNT" name="[cust][name]" value=""><br>
                                    <!--<input type="text" id="nameTMNT" name="[cust][name]" value="?=$_POST['cust']['name'] ?"><br>!-->
                                    <label for="nameTMNT">Phone Number: </label><br>
                                    <input type="tel" id="phoneNoTMNT" name="[cust][mobile]" value=""><br>
                                    <!--<input type="tel" id="phoneNoTMNT" name="[cust][mobile]" value="?=$_POST['cust']['mobile'] ?"><br>!-->
                                    <label for="emailTMNT">Email: </label><br>
                                    <input type="email" id="emailTMNT" name="[cust][email]" value=""><br>
                                    <!-- <input type="email" id="emailTMNT" name="[cust][email]" value="?=$_POST['cust']['email'] ?"><br>!-->
                                </div>
                                <input type="hidden" id="Tid" name="TMNT" value="ANM">
                                <input type="submit" value="Submit" onclick="calculatePrice()">
                            </section>
                        </div>
                    </article>
                    <!--end tmnt section!-->
                    <!--IJ section!-->

                    <article id="IJArticle">
                        <div id="ij">

                            <section id="IJRadio">
                                <h1>Indiana Jones</h1>
                                <img src="../../media/indianajones_dialofdestiny.jpg" alt="Indiana Jones and the Dial of Destiny movie poster" class="poster">
                                <div class="most">
                                    <!--radio buttons!-->
                                    <fieldset>
                                        <legend>Times<br>BTW...Weekday matinees and Mondays are discounted.</legend><br>

                                        <input type="radio" id="btn_sundayIJ" name="week" onclick="showParaISu()" value="sunday" data_pricing="fullprice" checked>
                                        <label for="btn_sundayIJ">Sunday</label>
                                        <input type="radio" id="btn_mondayIJ" name="week" onclick="showParaIMo()" value="monday" data_pricing="discprice">
                                        <label for="btn_mondayIJ">Monday</label>
                                        <input type="radio" id="btn_tuesdayIJ" name="week" onclick="showParaITu()" value="tuesday" data_pricing="fullprice">
                                        <label for="btn_tuesdayIJ">Tuesday</label>
                                        <input type="radio" id="btn_wednesdayIJ" name="week" onclick="showParaIWe()" value="wednesday" data_pricing="fullprice">
                                        <label for="btn_wednesdayIJ">Wednesday</label>
                                        <input type="radio" id="btn_thursdayIJ" name="week" onclick="showParaITh()" value="thursday" data_pricing="fullprice">
                                        <label for="btn_thursdayIJ">Thursday</label>
                                        <input type="radio" id="btn_fridayIJ" name="week" onclick="showParaIFr()" value="friday" data_pricing="fullprice">
                                        <label for="btn_fridayIJ">Friday</label>
                                        <input type="radio" id="btn_saturdayIJ" name="week" onclick="showParaISa()" value="saturday" data_pricing="fullprice">
                                        <label for="btn_saturdayIJ">Saturday</label>
                                    </fieldset>
                                </div>

                                <div class="small">
                                    <fieldset>
                                        <table>

                                            <tr>
                                                <th>Times<br>BTW...Weekday matinees and Mondays are discounted.</th>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_sundayIJMini" name="week" onclick="showParaISu()" value="sunday" checked>
                                                    <label for="btn_sundayIJMini">Sunday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_mondayIJMini" name="week" onclick="showParaIMo()" value="monday">
                                                    <label for="btn_mondayIJMini">Monday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_tuesdayIJMini" name="week" onclick="showParaITu()" value="tuesday">
                                                    <label for="btn_tuesdayIJMini">Tuesday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_wednesdayIJMini" name="week" onclick="showParaIWe()" value="wednesday">
                                                    <label for="btn_wednesdayIJMini">Wednesday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_thursdayIJMini" name="week" onclick="showParaITh()" value="thursday">
                                                    <label for="btn_thursdayIJMini">Thursday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_fridayIJMini" name="week" onclick="showParaIFr()" value="friday">
                                                    <label for="btn_fridayIJMini">Friday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_saturdayIJMini" name="week" onclick="showParaISa()" value="saturday">
                                                    <label for="btn_saturdayIJMini">Saturday</label>
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </div>
                                <p id="isu">6pm</p>
                                <p id="imo">9pm</p>
                                <p id="itu">9pm</p>
                                <p id="iwe">9pm</p>
                                <p id="ith">9pm</p>
                                <p id="ifr">9pm</p>
                                <p id="isa">6pm</p>
                            </section>
                            <!--Table for seat types!-->

                            <section id="IJBigRegular">

                            </section>
                            <!--end first class child!-->
                            <!--end small discount!-->
                            <!--end responsive tables!-->

                            <section id="IJBox">
                                <div class="box">
                                    <label for="nameIJ">Name: </label><br>
                                    <input type="text" id="nameIJ" name=""><br>
                                    <!--<input type="text" id="nameIJ" name="[cust][name]" value="?=$_POST['cust']['name'] ?"><br>!-->
                                    <label for="nameIJ">Phone Number: </label><br>
                                    <input type="tel" id="phoneNoIJ" name="[cust][mobile]" value=""><br>
                                    <!-- <input type="tel" id="phoneNoIJ" name="[cust][mobile]" value="?=$_POST['cust']['mobile'] ?"><br>!-->
                                    <label for="emailIJ">Email: </label><br>
                                    <input type="email" id="emailIJ" name="[cust][email]" value="?=$_POST['cust']['email'] ?"><br>
                                    <!-- <input type="email" id="emailIJ" name="[cust][email]" value="?=$_POST['cust']['email'] ?"><br>!-->
                                </div>
                                <input type="hidden" id="IJid" name="IJ" value="ACT">
                                <input type="submit" value="Submit" onclick="calculatePrice()">
                            </section>


                        </div>

                        <!--End table for discount seat types!-->
                    </article>
                    <!--End IJ Section!-->

                    <!--OP!-->
                    <article id="OPArticle">
                        <div id="op">
                            <section id="OPRadio">
                                <h1>Oppenheimer</h1>
                                <img src="../../media/Oppenheimer_(film).jpg" alt="Oppenheimer movie poster" class="poster">
                                <div class="most">
                                    <fieldset>
                                        <legend>Times<br>BTW...Weekday matinees and Mondays are discounted.</legend><br>

                                        <input type="radio" id="btn_sundayOP" name="week" onclick="showParaOSu()" value="sunday" data_pricing="fullprice" checked>
                                        <label for="btn_sundayOP">Sunday</label>
                                        <input type="radio" id="btn_mondayOP" name="week" onclick="showParaOMo()" value="monday" data_pricing="discprice">
                                        <label for="btn_mondayOP">Monday</label>
                                        <input type="radio" id="btn_tuesdayOP" name="week" onclick="showParaOTu()" data_pricing="fullprice" value="tuesday">
                                        <label for="btn_tuesdayOP">Tuesday</label>
                                        <input type="radio" id="btn_wednesdayOP" name="week" onclick="showParaOWe()" data_pricing="fullprice" value="wednesday">
                                        <label for="btn_wednesdayOP">Wednesday</label>
                                        <input type="radio" id="btn_thursdayOP" name="week" onclick="showParaOTh()" data_pricing="fullprice" value="thursday">
                                        <label for="btn_thursdayOP">Thursday</label>
                                        <input type="radio" id="btn_fridayOP" name="week" onclick="showParaOFr()" data_pricing="fullprice" value="friday">
                                        <label for="btn_fridayOP">Friday</label>
                                        <input type="radio" id="btn_saturdayOP" name="week" onclick="showParaOSa()" data_pricing="fullprice" value="saturday">
                                        <label for="btn_saturdayOP">Saturday</label>
                                    </fieldset>
                                </div>

                                <div class="small">
                                    <fieldset>
                                        <table>

                                            <tr>
                                                <th>Times<br>BTW...Weekday matinees and Mondays are discounted.</th>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_sundayOPMini" name="week" onclick="showParaOSu()" value="sunday" checked>
                                                    <label for="btn_sundayOPMini">Sunday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_mondayOPMini" name="week" onclick="showParaOMo()" value="monday">
                                                    <label for="btn_mondayOPMini">Monday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_tuesdayOPMini" name="week" onclick="showParaOTu()" value="tuesday">
                                                    <label for="btn_tuesdayOPMini">Tuesday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_wednesdayOPMini" name="week" onclick="showParaOWe()" value="wednesday">
                                                    <label for="btn_wednesdayOPMini">Wednesday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_thursdayOPMini" name="week" onclick="showParaOTh()" value="thursday">
                                                    <label for="btn_thursdayOPMini">Thursday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_fridayOPMini" name="week" onclick="showParaOFr()" value="friday">
                                                    <label for="btn_fridayOPMini">Friday</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input type="radio" id="btn_saturdayOPMini" name="week" onclick="showParaOSa()" value="saturday">
                                                    <label for="btn_saturdayOPMini">Saturday</label>
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </div>
                                <p id="osu">9pm</p>
                                <p id="omo">6pm</p>
                                <p id="otu">6pm</p>
                                <p id="owe">NA</p>
                                <p id="oth">NA</p>
                                <p id="ofr">NA</p>
                                <p id="osa">9pm</p>
                            </section>



                            <section id="OPBox">
                                <div class="box">
                                    <label for="nameOP">Name: </label><br>
                                    <input type="text" id="nameOP" name="[cust][name]" value="?=$_POST['cust']['name'] ?"><br>
                                    <!--<input type="text" id="nameOP" name="[cust][name]" value="?=$_POST['cust']['name'] ?"><br>!-->
                                    <label for="phoneNoOP">Phone Number: </label><br>
                                    <input type="tel" id="phoneNoOP" name="[cust][mobile]" value="?=$_POST['cust']['mobile'] ?"><br>
                                    <!--<input type="tel" id="phoneNoOP" name="[cust][mobile]" value="?=$_POST['cust']['mobile'] ?"><br>!-->
                                    <label for="emailOP">Email: </label><br>
                                    <input type="email" id="emailOP" name="[cust][email]" value=""><br>
                                    <!--<input type="email" id="emailOP" name="[cust][email]" value="?=$_POST['cust']['email'] ?"><br>!-->
                                </div>
                                <input type="hidden" id="OPid" name="Oppenheimer" value="DRM">
                                <input type="submit" value="Submit" action="booking.php" onclick="calculatePrice()">
                            </section>

                        </div>

                    </article>

                </form>

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
    <script>
        // Retrieve the URL parameter
        var urlParams = new URLSearchParams(window.location.search);
        var displayRMC = urlParams.get("code");
        var displayTmnt = urlParams.get("displayTmnt");
        var displayIj = urlParams.get("displayIj");
        var displayOp = urlParams.get("displayOp");
        console.log("They are: " + displayRMC);
        var urlParams = new URLSearchParams(window.location.search);

        //Barbie
        if (displayRMC === "RMC") {
            alert("Barbie!!");
            var b = document.getElementById("barbie");
            b.style.display = "block";
        }

        //TMNT
        if (displayTmnt === "true") {
            var t = document.getElementById("tmnt");
            t.style.display = "block";
        }

        //Indiana Jones
        if (displayIj === "true") {
            var ij = document.getElementById("ij");
            ij.style.display = "block";
        }

        //Oppenheimer
        if (displayOp === "true") {
            var op = document.getElementById("op");
            op.style.display = "block";
        }
    </script>

 <!--   <script>
        function calculatePriceOld() {
            let sel = document.querySelectorAll('select');
            let arrow = 0;


            let numberOfSeats = 0;
            let seatPrice = 0;
            let day = document.querySelector('input[name="week"]:checked').value;
            console.log("Day: " + day);
            let qtys = document.querySelectorAll("select[id^='sb-']");
            //getting data from a custom data attribute
            let radios = document.querySelector('input[name="week"]:checked');
            let rdp = radios.getAttribute('data_pricing');

            console.log("Price: " + radios);
            console.log("Pricetest: " + rdp);


            let total = 0;
            let totalSeats = 0;
            let totalPrice = 0;

            for (let a = 0; a < qtys.length; ++a)

            {

                let selectedOption = qtys[a].options[qtys[a].selectedIndex];

                // check if it's selected a number

                if (selectedOption && selectedOption.value !== 'Please select') {

                    numberOfSeats = parseInt(selectedOption.value);
                    if (!isNaN(numberOfSeats)) {
                        if (day === "monday") {
                            console.log("It's Monday!");

                        } else {
                            console.log("It's not Monday!");

                            totalSeats += numberOfSeats;
                            console.log(totalSeats);
                            let zero = qtys[a].id.split("-")[0];
                            let really = qtys[a].id.split("-")[1];
                            let lazy = qtys[a].id.split("-")[2];

                            /*testiing
                             console.log("zero: "+zero);
                            console.log("really: "+really);
                             console.log("lazy: "+lazy);
                            end testing*/


                            let unitPrice = document.getElementById(zero + "-" + really + "-" + lazy).dataset[lazy];
                            seatPrice = parseFloat(unitPrice);

                            console.log(seatPrice);
                            var salePrice = qtys[a].value * seatPrice;
                            totalPrice += seatPrice;
                            console.log("Sale price: " + salePrice);

                            total += salePrice;

                            // console.log("In the loop: "+totalSeats);
                        }
                      }

                  }
                }
                //  console.log("One step down: "+totalSeats);
            }
            console.log("Final total: " + total.toFixed(2));


            console.log(total);
         //   if (total === 0) {
          //      alert("Please choose your seats!");
          //      document.getElementById("theForm").addEventListener("click", function(event) {
          //          event.preventDefault()
           //         return false;
           //     });
                
          //  }

            // return (total > 0);

            return true;

        }*/

       
    </script>!-->
    <script>

         function validateData() {
            let b = document.forms["form"]["[cust][name]"].value;
            if (b == "") {
                alert("Please fill in a name");
                return false;
            }
        }
    </script>
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
