<!DOCTYPE html>
<html lang='en'>

<head>
        <?php
        include 'post-validation.php';
        include 'tools.php';
        ?>
      
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
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!--Google Font Reference: Ulanovsky, J, Matas, S, Pablo del Peral,J, Le Bailly, J, c2023, "Montserrat", Google Fonts, viewed 6th July 2023,
     <https://fonts.google.com/specimen/Montserrat?query=+Montserrat>!-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Peta:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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


        <div class="navbar">
            <nav>


                <ul class="links">
                    <li><a href="#butter">
                            <p class="logoThree">Home</p>
                        </a></li>

                    <li><a href="#nowShowing">
                            <p class="logoThree">Now showing</p>
                        </a></li>
                    <li><a href="#aboutUs">
                            <p class="logoThree">About Us</p>
                        </a></li>
                </ul>
            </nav>
        </div>


      
           <main>
    <div class="grid-container">
       
            
                <!--start responsive!-->


                <!--note this is the grid header-the sticky wouldn't work in the grid. I tried to get it to work for several days, to no avail!-->
                <div class="header">
                          
                </div>



                <div class="left"></div>

                <div class="middle">
                    <article id="nowShowing">
                    <section class="nowShowing">
                        <div class="first">
                            <div class="extra">
                                <h1>Now Showing</h1>
                            </div><br><br>
                            <div class="inner-grid-container large">

                                <div class='card3D'>
                                    <div><img src="../../media/barbie.jpg" alt="Barbie movie poster" class="poster-card">
                                        <div class="tANDr moreSpace bitLeft"><strong class="bitMore">Barbie</strong><br><strong class="littleBitMore">Rated: PG</strong></div>
                                    </div>
                                    <div>
                                        <div class="descriptive littleSpace"><strong class="bitMore">Synopsis:</strong>
                                            <p class="littleSpace littlePG">From IMDb: Barbie suffers a crisis that leads her to question her world and her existence.</p><br>
                                            <div class="times">
                                                <table class="times">
                                                    <tr>
                                                        <th></th>
                                                        <th>Times:</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Mon Tues</th>
                                                        <th>Wed Fri</th>
                                                        <th>Sat Sun</th>
                                                    </tr>
                                                    <tr>
                                                        <td>NA</td>
                                                        <td>12 pm</td>
                                                        <td>3 pm</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div id="BarbieBtn" class="bookNow"><button class="booking" onclick="aFunction()"><strong>Book now</strong></button></div>
                                        </div>
                                    </div>
                                </div>
                                <!--refereces
poster-card
Anonymous, c2023, "Untitled", IMDb, viewed 6th July 2023,
<https://www.imdb.com/title/tt1517268/?ref_=fea_emb_em00026_item-1_poster_sm>
Synopsis and title
Anonymous, c2023,"Barbie", IMBd, viewed 5th July 2023,
<https://www.imdb.com/title/tt1517268>
end references-->
                                <div class='card3D'>
                                    <div><img src="../../media/Teenage_Mutant_Ninja_Turtles_-_Mutant_Mayhem.jpg" alt="Teenage Mutant Ninja Turtles: Mutant Mayhem movie poster-card" class="poster-card">
                                        <div class="tANDr littleSpace"><strong class="bitMore">Teenage Mutant Ninja Turtles: Mutant Mayhem</strong><br><strong class="littleBitMore">Rated: PG</strong></div>
                                    </div>
                                    <div>
                                        <div class="descriptive littleSpace"><strong class="bitMore">Synopsis:</strong>
                                            <p class="littleSpace littlePG">From IMDb: The Turtle brothers as they work to earn the love of New York City while facing down an army of mutants.</p>
                                            <div class="times littleSpace">
                                                <table class="times">
                                                    <tr>
                                                        <th></th>
                                                        <th>Times:</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Mon Tues</th>
                                                        <th>Wed Fri</th>
                                                        <th>Sat Sun</th>
                                                    </tr>
                                                    <tr>
                                                        <td>12 pm</td>
                                                        <td>6 pm</td>
                                                        <td>12 pm</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="bookNow"><button id="TmntBtn" onclick="aFunction()" class="booking"><strong>Book now</strong></button></div>
                                        </div>
                                    </div>
                                </div>
                                <!--references
poster-card-card
Anonymous, c2023, "Untitled", self-published, viewed 6th July 2023,
<https://upload.wikimedia.org/wikipedia/en/e/ea/Teenage_Mutant_Ninja_Turtles_-_Mutant_Mayhem.jpg>
Synopsis and title
Anonymous, c2023,"eenage Mutant Ninja Turtles: Mutant Mayhem", IMBd, viewed 5th July 2023,
<https://www.imdb.com/title/tt8589698>
end references-->

                                <div class='card3D'>
                                    <div><img src="../../media/indianajones_dialofdestiny.jpg" alt="Indiana Jones and the Dial of Destiny movie poster card" class="poster-card">
                                        <div class="tANDr littleSpace"><strong class="bitMore">Indiana Jones and the Dial of Destiny</strong><br><strong class="littleBitMore">Rated: PG</strong></div>
                                    </div>
                                    <div>
                                        <div class="descriptive littleSpace"><strong class="bitMore">Synopsis:</strong>
                                            <p class="littleSpace littlePG">From IMDb: Archaeologist Indiana Jones races against time to retrieve a legendary artifact that can change the course of history.</p><br>
                                            <div class="times">
                                                <table class="times">
                                                    <tr>
                                                        <th></th>
                                                        <th>Times:</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Mon Tues</th>
                                                        <th>Wed Fri</th>
                                                        <th>Sat Sun</th>
                                                    </tr>
                                                    <tr>
                                                        <td>9 pm</td>
                                                        <td>6 pm</td>
                                                        <td>6 pm</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="bookNow"><button id="IjBtn" class="booking" onclick="aFunction()"><strong>Book now</strong></button></div>
                                        </div>
                                    </div>
                                </div>
                                <!--references
poster
Anonymous, c2023, "Untitled", self-published, viewed 6th July 2023,
<https://lumiere-a.akamaihd.net/v1/images/au_movies_poster_indianajones_dialofdestiny_clean_5506f13f.png>
Synopsis and title 
Anonymous, c2023,"Oppenheimer", IMBd, viewed 5th July 2023,
<https://www.imdb.com/title/tt1462764 >
end references-->
                                <!--<div class="oval">
                                <div class="card largeOnly">Hello</div></div>!-->
                                <div class='card3D'>
                                    <div><img src="../../media/Oppenheimer_(film).jpg" alt="Oppenheimer movie poster card" class="poster-card">
                                        <div class="tANDr moreSpace bitLeft goLeft"><strong class="bitMore">Oppenheimer</strong><br><strong class="littleBitMore miniGoLeft">Rated: R</strong></div>
                                    </div>
                                    <div>
                                        <div class="descriptive littleSpace"><strong class="bitMore">Synopsis:</strong>
                                            <p class="littleSpace littlePG">From IMDb: The story of American scientist J. Robert Oppenheimer and his role in the development of the atomic bomb.</p><br>
                                            <div class="times">
                                                <table class="times">
                                                    <tr>
                                                        <th></th>
                                                        <th>Times:</th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th>Mon Tues</th>
                                                        <th>Wed Fri</th>
                                                        <th>Sat Sun</th>
                                                    </tr>
                                                    <tr>
                                                        <td>6 pm</td>
                                                        <td>NA</td>
                                                        <td>9 pm</td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="bookNow"><button id="OpBtn" class="booking" onclick="aFunction()"><strong>Book now</strong></button></div>
                                        </div>
                                    </div>
                                </div>
                                <!--references
poster-card-card
Anonymous, c2023, "J. Robert Oppenheimer in a hat and suit stands in front of the nuclear bomb", Universal Pictures via Wikkipedia,
<https://en.wikipedia.org/w/index.php?curid=71354716>
Synopsis and title
Anonymous, c2023,"Oppenheimer", IMBd, viewed 5th July 2023,
<https://www.imdb.com/title/tt15398776/>
end references-->


                            </div>
                        </div>
                    </section>


                    <!--references
poster
Anonymous, c2023, "Untitled", IMDb, viewed 6th July 2023,
<https://www.imdb.com/title/tt1517268/?ref_=fea_emb_em00026_item-1_poster_sm>
Synopsis and title
Anonymous, c2023,"Barbie", IMBd, viewed 5th July 2023,
<https://www.imdb.com/title/tt1517268>
end references-->

                    <section id="aboutUs">
                        <div class="theRest">
                            <div class="second">
                                <div class="extra eggs">
                                    <h2>About Us</h2>
                                </div>
                                <!--history section!-->
                                
                                <p><img src='../../media/cinema.jpg' class="responsive half" alt='the Lunardo cinema'></p>
                                <!--Reference for the image of the former Star Theatre in Burnie, North West Tasmania
            Anonymous, c2010, "69 Mount Street, Burnie: constructed as a cinema in the 1950s, known as the Star Theatre and perhaps later as Cinema One. 
            It's now a bar and café; Otis Room and Run Rabbit Run.", Our Tasmania, viewed 30th June 2023,
            <http://www.ourtasmania.com.au/northwest/burnie-sense-place.html>
            !-->
                                <p class="extra">Our cinema has proudly served Atown since 1953.

                                    We're here for the moments. Perhaps a moment where you come and see your favourite star on the screen. Maybe it was your 8th birthday party. Or your first date.

                                    The movie experience is set to get even better. Why? We took the opportunity to upgrade our equipment and furniture during lockdowns. Keep scrolling to find out more.
                                    We can't wait to see you! (And if you're new, welcome!)
                                </p>
                            </div>
                            <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
                            <div class="third">
                                <!-- chair section!-->
                                
                                <!--Big  reg chair table!-->
                                <div id="bottom" class="logo yellow">
                                        <table>
                                                <tr class="bigRow">
                                                        <td>
                                    <span class="logo">
                                        <img src='../../media/Profern-Standard-Twin.png' class='half' alt='a photo of a Profern Standard Twin couch'>
                                    </span>
                                    </td>
                                            <td>
                                    <div class="chair"><h2>Are those NEW chairs???</h2><br><p>They sure are! Gone are the classic orange chairs (well…apart from the one in our logo). Instead we now have Profern Standard Twin couch seating. So comfy!</p></div>
                                
                                        </td>
                                            </tr>
                                        </table>
                                        </div>
                                <br>
                                     <!--End big chair table!-->
                                      <!--start luxury big chair!-->
                                <div id="top" class="logo yellow">
                                          <table class="bigTable">
                                                <tr>
                                                <td>
                                    <div class="chair leftPadding"><h2>Wow!!! What are these??</h2><br><p>Our premium experience has been upgraded too. We now offer Profern Verona Twin couch seating. These lift your feet off the ground………..and they RECLINE (ahhhh….).</p></div>
                               </td>
                                       <td>
                                        <span class="logo microLeft">
                                        <img src='../../media/Profern-Verona-Twin.png' class="half tinyLeft" alt='a photo of a Profern Verona Twin couch'>
                                    </span>
                                    </td>
                                     </tr>
                                      </table>
                                      <!--End luxury big chair!-->
                                          <!--start luxury small chair!-->
                                          <table class="smallTable">
                                                <tr>
                                    <div class="chair leftPadding"><h2>Wow!!! What are these??</h2><br><p>Our premium experience has been upgraded too. We now offer Profern Verona Twin couch seating. These lift your feet off the ground………..and they RECLINE (ahhhh….).</p></div>
                                </tr>
                                        <tr>
                                        <span class="logo microLeft">
                                        <img src='../../media/Profern-Verona-Twin.png' class="half tinyLeft" alt='a photo of a Profern Verona Twin couch'>
                                    </span>
                                     </tr>
                                      </table>
                                </div>
                                       <!--end luxury small chair!-->     
                            </div>
                                                
                                       
                        </div>
                        <div class="fourth">
           
                            <div id="otherBottom" class="logo">
                                             <!--start big dolby!-->
                                  <table class="bigTable">
                                                <tr>
                                                <td>
                                <span class="logo">
                                    <img src='../../media/dolby-logo.png' class='half microLeft' alt='the double d Dolby logo'>
                                </span>
                                </td>
                                <td>
                                <div class="chair extraChair"><h2>What's that I can see?</h2><br><p>We also now have a new projector. This projector features Dolby Amos AND Dolby 3D technology. Dolby Amos permits sound to be broadcast at an exact location. This creates a more immersive and realistic audio experience.
                                    You can read more about it <a href="https://www.dolby.com/technologies/dolby-atmos/#gref">HERE</a>.</p>
                                    </div>
                                    
                                                    </td>
                            </tr>
                                      </table>
                                        <!--end big dolby!-->
                                        
                                 <!--start small dolby!-->
                                  <table class="smallTable">
                                                <tr>
                                <span class="logo">
                                    <img src='../../media/dolby-logo.png' class='half microLeft' alt='the double d Dolby logo'>
                                </span>
                                </tr>
                                <tr>
                                <div class="chair extraChair"><h2>What's that I can see?</h2><br><p>We also now have a new projector. This projector features Dolby Amos AND Dolby 3D technology. Dolby Amos permits sound to be broadcast at an exact location. This creates a more immersive and realistic audio experience.
                                    You can read more about it <a href="https://www.dolby.com/technologies/dolby-atmos/#gref">HERE</a>.</p>
                                    </div>
                                    
                           
                            </tr>
                                      </table>
                                        <!--end small dolby!-->
                                       </div>
                            <br>
                            <div id="otherTop" class="logo">
                                <!--start big audience!-->
                                  <table class="bigTable">
                                                <tr>
                                                <td>
                                <div class="chair leftPadding"><h2>....and what's that sound?</h2><br><p>Dolby 3D features a unique full spectrum colour technology that provides extremely crisp, clear images. Such technology permits a visual experience
                                    completely faithful to what the movie creators had envisioned. You can read more about it <a href="https://professional.dolby.com/product/dolby-cinema-imaging-products/dolby-3d-bundles/#gref" class="ash">HERE</a> </p></div></td>
                                <!--Image reference
           Dolby, 2023, "Create and deliver in Dolby", Dolby Laboratories, viewed 4th July 2023,
           <https://professional.dolby.com/>
           !-->
                               <td>
                                <span class="logo verySmall">
                                   <img src='../../media/movies.png' class='half tinyLeft' alt='Some cinema enthusiasts enjoying a movie'>
                                    <!--Image reference
                    Anonymous, c2020, "Photo: Before the movie (the screen is huge)", Trip Adviser, viewed 15th July 2023,
                    <https://www.tripadvisor.com.au/LocationPhotoDirectLink-g255100-d1943573-i167836880-IMAX_Melbourne_Museum-Melbourne_Victoria.html>!-->
                                </span>
                                </td>
                                      </tr>
                                </table>
                                 <!--end big audience!-->
                                            <!--start small audience!-->
                                  <table class="bigTable">
                                                <tr>
                                               
                                <div class="chair leftPadding"><h2>....and what's that sound?</h2><br><p>Dolby 3D features a unique full spectrum colour technology that provides extremely crisp, clear images. Such technology permits a visual experience
                                    completely faithful to what the movie creators had envisioned. You can read more about it <a href="https://professional.dolby.com/product/dolby-cinema-imaging-products/dolby-3d-bundles/#gref" class="ash">HERE</a> </p></div></tr>
                                <!--Image reference
           Dolby, 2023, "Create and deliver in Dolby", Dolby Laboratories, viewed 4th July 2023,
           <https://professional.dolby.com/>
           !-->
                               <tr>
                                <span class="logo verySmall">
                                   <img src='../../media/movies.png' class='half tinyLeft' alt='Some cinema enthusiasts enjoying a movie'>
                                    <!--Image reference
                    Anonymous, c2020, "Photo: Before the movie (the screen is huge)", Trip Adviser, viewed 15th July 2023,
                    <https://www.tripadvisor.com.au/LocationPhotoDirectLink-g255100-d1943573-i167836880-IMAX_Melbourne_Museum-Melbourne_Victoria.html>!-->
                                </span>
                              
                                      </tr>
                                </table>
                                 <!--end small audience!-->
                            </div>

                            
                        </div>
                    </section>
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
                    </script> By Brearne Gibson, s3496168. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
                <div>
                    <p>GitHub Repo link can be found <a href="https://github.com/s3496168/wp.git">here</a></p>
                </div>
                <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
                <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
            
        </footer>
         </div>
               </div>
            </main>

   
        <script type="text/javascript" src="script.js"> </script>
    </body>
</html>
