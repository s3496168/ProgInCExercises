<<<<<<< HEAD
 <!DOCTYPE html>
=======
<?php 
  $title = "Home";
  // this helps to eliminate CSS caching issues
  $lastModTime = filemtime("style.css"); 
?>
<!DOCTYPE html>
>>>>>>> 61574f6a06bbf021cbaee39a979b055303f92af1
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< HEAD
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
              <section class="home">
                <div  id="butter" class="popcorn">
                <a href="index.php"> 
     
    <span class="logo">
       <img src="../../media/Logo.svg" alt="cinema logo" height=56 >
    </span>
      <div class="logo">
         <h1 style="margin:0;">Lunardo</h1>
         <h2 style="margin:0;">C i n e m a </h2> 
      
        </div>
    </a>
                   </header>  
             

                   <div class="navbar two">
            <nav>
             
           
<ul class="links">
           <li><a href="#butter"><h3>Home</h3></a></li>  
              <li><a href="#bookings"><h3>Booking</h3></a></li>            
     </ul>
               </nav>
              </div>
   
              </section>
                  <main>
                    <article id="nowShowing">
                     <!--start responsive!-->
                    <div class="grid-container">
         
   <!--note this is the grid header-the sticky wouldn't work in the grid. I tried to get it to work for several days, to no avail!-->
           <div class="header">
                </div>
             
                </div>
            <div class="left"></div>
          
            <div id="bookings" class="middle">
		    <form action="..." method="post" id="submit" onsubmit="validateData()">
	  <!--barbie section!-->
              <div id="barbie"><h1>Barbie</h1>
              <iframe width="821" height="462" src="https://www.youtube.com/embed/pBk4NYhWNMM" title="Barbie | Main Trailer" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <!--
                Reference for iframe with security features
                Hamadeh, Y, 2023, ' 'Barbie' trailer: Even Barbie has an existential crisis sometimes "Do you guys ever think about dying?" ', "Mashable" (blog), May 25th,
                viewed 6th July 2023,
                <https://mashable.com/video/barbie-trailer>
                !-->

              <!--radio buttons!-->
		     <div class="most">
                <fieldset>
		<legend>Times<br>BTW...Weekday matinees and Mondays are discounted.</legend><br>
	
		<input type="radio" id="sundayBarbie" name="week" onclick="showParaBSu()" value="sunday" checked>
		  <label for="sundayBarbie">Sunday</label>
		<input type="radio" id="mondayBarbie" name="week" onclick="showParaBMo()" value="monday">
		  <label for="mondayBarbie">Monday</label>
		<input type="radio" id="tuesdayBarbie" name="week" onclick="showParaBTu()" value="tuesday">
		  <label for="tuesdayBarbie">Tuesday</label>
		<input type="radio" id="wednesdayBarbie" name="week" onclick="showParaBWe()" value="wednesday">
		  <label for="wednesdayBarbie">Wednesday</label>
		<input type="radio" id="thursdayBarbie" name="week" onclick="showParaBTh()" value="thursday">
		  <label for="thursdayBarbie">Thursday</label>
		<input type="radio" id="fridayBarbie" name="week" onclick="showParaBFr()" value="friday">
		  <label for="fridayBarbie">Friday</label>
		<input type="radio" id="saturdayBarbie" name="week" onclick="showParaBSa()" value="saturday">
		  <label for="saturdayBarbie">Saturday</label>
	  </fieldset>
		     </div>

		      <!--Table for small screens!-->
		      <div class="small">
			<fieldset>      
		<table>
			
			<tr><th>Times<br>BTW...Weekday matinees and Mondays are discounted.</th></tr>
			<tr><td><input type="radio" id="sundayBarbieMini" name="week" onclick="showParaBSu()" value="sunday" checked>
		  <label for="sundayBarbieMini">Sunday</label></td></tr>
			<tr><td><input type="radio" id="mondayBarbieMini" name="week" onclick="showParaBMo()" value="monday">
		  <label for="mondayBarbieMini">Monday</label></td></tr>
			<tr><td><input type="radio" id="tuesdayBarbieMini" name="week" onclick="showParaBTu()" value="tuesday">
		  <label for="tuesdayBarbieMini">Tuesday</label></td></tr>
			<tr><td><input type="radio" id="wednesdayBarbieMini" name="week" onclick="showParaBWe()" value="wednesday">
		  <label for="wednesdayBarbieMini">Wednesday</label></td></tr>
			<tr><td><input type="radio" id="thursdayBarbieMini" name="week" onclick="showParaBTh()" value="thursday">
		  <label for="thursdayBarbieMini">Thursday</label></td></tr>
			<tr><td><input type="radio" id="fridayBarbieMini" name="week" onclick="showParaBFr()" value="friday">
		  <label for="fridayBarbieMini">Friday</label></td></tr>
			<tr><td><input type="radio" id="saturdayBarbieMini" name="week" onclick="showParaBSa()" value="saturday">
		  <label for="saturdayBarbieMini">Saturday</label></td></tr>
				 
		</table>
			     </fieldset>
			      
		      </div>
		  <p id="bsu">3pm</p>
		  <p id="bmo">NA</p>
		  <p id="btu">NA</p>
		  <p id="bwe">12pm</p>
		  <p id="bth">12pm</p>
		  <p id="bfr">12PM</p>
		  <p id="bsa">3pm</p>

		      <!--Table for seat types!-->
		     <table id="bst">
			     <tr><th>Quantity</th><th>Type</th><th>Price</th></tr>
			     <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult</td><td>$21.50</td></tr>
			 <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult Concession</td><td>$19.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Child</td><td>$17.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult</td><td>$31.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult Concession</td><td>$28.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Child</td><td>$25.00</td></tr>
		     </table>
		            <!--End table for seat types!-->
		
		        <!--Table for discount seat types!-->

		     <table  id="bdt">
			     <tr><th>Quantity</th><th>Type</th><th>Price</th></tr>
			     <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult</td><td>$16.00</td></tr>
			 <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult Concession</td><td>$14.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Child</td><td>$13.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult</td><td>$25.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult Concession</td><td>$23.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Child</td><td>$22.00</td></tr>
		     </table>
		            <!--End table for discount seat types!-->
		      <!--responsive tables!-->
		      <!--standard adult!-->
		      		     <table id="ssabst">
			     <tr><th>Standard Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$21.50</td></tr>
					     
				     </table>
		
		        <!--end standard adult!-->
		            <!--concession adult!-->
		      		     <table id="sscbst">
			     <tr><th>Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$19.00</td></tr>
					     
				     </table>
		       		  
		        <!--end concession adult!-->
		      	            <!--child!-->
		      		     <table id="sskbst">
			     <tr><th>Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$17.50</td></tr>
					     
				     </table>
		        <!--end child!-->
		      	            <!--first class adult!-->
		      		     <table id="sfabst">
			     <tr><th>First Class Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$31.00</td></tr>
					     
				     </table>
		       		   
		        <!--end first class adult!-->
		      	            <!-- first class concession adult!-->
		      		     <table id="sfcbst">
			     <tr><th>First Class Conccession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$28.00</td></tr>
					     
				     </table>
		       		     
		        <!--end first class concession adult!-->

		      	            <!--first class child!-->
		      		     <table id="sfkbst">
			     <tr><th>First Class Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$25.00</td></tr>
					     
				     </table>
		       		    
		        <!--end first class child!-->
		      <!--Small Discount Start !-->
		            <!--standard adult!-->
		      		     <table id="ssabdt">
			     <tr><th>Standard Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$16.00</td></tr>
					     
				     </table>
		
		        <!--end standard adult!-->
		            <!--concession adult!-->
		      		     <table id="sscbdt">
			     <tr><th>Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$14.50</td></tr>
					     
				     </table>
		       		  
		        <!--end concession adult!-->
		      	            <!--child!-->
		      		     <table id="sskbdt">
			     <tr><th>Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$13.00</td></tr>
					     
				     </table>
		        <!--end child!-->
		      	            <!--first class adult!-->
		      		     <table id="sfabdt">
			     <tr><th>First Class Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$25.00</td></tr>
					     
				     </table>
		       		   
		        <!--end first class adult!-->
		      	            <!-- first class concession adult!-->
		      		     <table id="sfcbdt">
			     <tr><th>First Class Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$23.50</td></tr>
					     
				     </table>
		       		     
		        <!--end first class concession adult!-->

		      	            <!--first class child!-->
		      		     <table id="sfkbdt">
			     <tr><th>First Class Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$22.00</td></tr>
					     
				     </table>
		       		    
		        <!--end first class child!-->
		      <!--end small discount!-->
		            <!--end responsive tables!-->
		      <div class="box">
		      <label for="name">Name: </label><br>
		      <input type="text" id="name" name="name" value=""><br>
		          <label for="name">Phone Number: </label><br>
		     <input type="tel" id="phoneNo" name="phoneNo" value=""><br>
		         <label for="email">Email: </label><br>
		       <input type="email" id="email" name="email" value=""><br>
		      </div>
		     
                </div>
		    <!--end barbie section!-->
		    <!--tmnt section!-->
               <div id="tmnt"><h1>TMNT</h1>
	       <img src="../../media/Teenage_Mutant_Ninja_Turtles_-_Mutant_Mayhem.jpg" alt="Teenage Mutant Ninja Turtles: Mutant Mayhem movie poster" class="poster">
	         <!--radio buttons for days!-->
		     <div class="most">
                <fieldset>
		<legend>Times<br>BTW...Weekday matinees and Mondays are discounted.</legend><br>
	
		<input type="radio" id="sundayTMNT" name="week" onclick="showParaTSu()" value="sunday" checked>
		  <label for="sundayTMNT">Sunday</label>
		<input type="radio" id="mondayTMNT" name="week" onclick="showParaTMo()" value="monday">
		  <label for="mondayTMNT">Monday</label>
		<input type="radio" id="tuesdayTMNT" name="week" onclick="showParaTTu()" value="tuesday">
		  <label for="tuesdayTMNT">Tuesday</label>
		<input type="radio" id="wednesdayTMNT" name="week" onclick="showParaTWe()" value="wednesday">
		  <label for="wednesdayTMNT">Wednesday</label>
		<input type="radio" id="thursdayTMNT" name="week" onclick="showParaTTh()" value="thursday">
		  <label for="thursdayTMNT">Thursday</label>
		<input type="radio" id="fridayTMNT" name="week" onclick="showParaTFr()" value="friday">
		  <label for="fridayTMNT">Friday</label>
		<input type="radio" id="saturdayTMNT" name="week" onclick="showParaTSa()" value="saturday">
		  <label for="saturdayTMNT">Saturday</label>
	  </fieldset>
		     </div>
		   <!--Table for small screens!-->
		      <div class="small">
			<fieldset>      
		<table>
			
			<tr><th>Times<br>BTW...Weekday matinees and Mondays are discounted.</th></tr>
			<tr><td><input type="radio" id="sundayTMNTMini" name="week" onclick="showParaTSu()" value="sunday" checked>
		  <label for="sundayTMNTMini">Sunday</label></td></tr>
			<tr><td><input type="radio" id="mondayTMNTMini" name="week" onclick="showParaTMo()" value="monday">
		  <label for="mondayTMNTMini">Monday</label></td></tr>
			<tr><td><input type="radio" id="tuesdayTMNTMini" name="week" onclick="showParaTTu()" value="tuesday">
		  <label for="tuesdayTMNTMini">Tuesday</label></td></tr>
			<tr><td><input type="radio" id="wednesdayTMNTMini" name="week" onclick="showParaTWe()" value="wednesday">
		  <label for="wednesdayTMNTMini">Wednesday</label></td></tr>
			<tr><td><input type="radio" id="thursdayTMNTMini" name="week" onclick="showParaTTh()" value="thursday">
		  <label for="thursdayTMNTMini">Thursday</label></td></tr>
			<tr><td><input type="radio" id="fridayTMNTMini" name="week" onclick="showParaTFr()" value="friday">
		  <label for="fridayTMNTMini">Friday</label></td></tr>
			<tr><td><input type="radio" id="saturdayTMNTMini" name="week" onclick="showParaTSa()" value="saturday">
		  <label for="saturdayTMNTMini">Saturday</label></td></tr>
				 
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

		         <!--Table for seat types!-->
		     <table id="tst">
			     <tr><th>Quantity</th><th>Type</th><th>Price</th></tr>
			     <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult</td><td>$21.50</td></tr>
			 <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult Concession</td><td>$19.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Child</td><td>$17.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult</td><td>$31.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult Concession</td><td>$28.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Child</td><td>$25.00</td></tr>
		     </table>
		            <!--End table for seat types!-->
		
		        <!--Table for discount seat types!-->

		     <table  id="tdt">
			     <tr><th>Quantity</th><th>Type</th><th>Price</th></tr>
			     <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult</td><td>$16.00</td></tr>
			 <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult Concession</td><td>$14.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Child</td><td>$13.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult</td><td>$25.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult Concession</td><td>$23.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Child</td><td>$22.00</td></tr>
		     </table>
		            <!--End table for discount seat types!-->
		          <!--responsive tables!-->
		      <!--standard adult!-->
		      		     <table id="ssatst">
			     <tr><th>Standard Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$21.50</td></tr>
					     
				     </table>
		
		        <!--end standard adult!-->
		            <!--concession adult!-->
		      		     <table id="ssctst">
			     <tr><th>Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$19.00</td></tr>
					     
				     </table>
		       		  
		        <!--end concession adult!-->
		      	            <!--child!-->
		      		     <table id="ssktst">
			     <tr><th>Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$17.50</td></tr>
					     
				     </table>
		        <!--end child!-->
		      	            <!--first class adult!-->
		      		     <table id="sfatst">
			     <tr><th>First Class Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$31.00</td></tr>
					     
				     </table>
		       		   
		        <!--end first class adult!-->
		      	            <!-- first class concession adult!-->
		      		     <table id="sfctst">
			     <tr><th>First Class Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$28.00</td></tr>
					     
				     </table>
		       		     
		        <!--end first class concession adult!-->

		      	            <!--first class child!-->
		      		     <table id="sfktst">
			     <tr><th>First Class Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$25.00</td></tr>
					     
				     </table>
		       		    
		        <!--end first class child!-->
		      <!--Small Discount Start !-->
		            <!--standard adult!-->
		      		     <table id="ssatdt">
			     <tr><th>Standard Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$16.00</td></tr>
					     
				     </table>
		
		        <!--end standard adult!-->
		            <!--concession adult!-->
		      		     <table id="ssctdt">
			     <tr><th>Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$14.50</td></tr>
					     
				     </table>
		       		  
		        <!--end concession adult!-->
		      	            <!--child!-->
		      		     <table id="ssktdt">
			     <tr><th>Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$13.00</td></tr>
					     
				     </table>
		        <!--end child!-->
		      	            <!--first class adult!-->
		      		     <table id="sfatdt">
			     <tr><th>First Class Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$25.00</td></tr>
					     
				     </table>
		       		   
		        <!--end first class adult!-->
		      	            <!-- first class concession adult!-->
		      		     <table id="sfctdt">
			     <tr><th>First Class Concdession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$23.50</td></tr>
					     
				     </table>
		       		     
		        <!--end first class concession adult!-->

		      	            <!--first class child!-->
		      		     <table id="sfktdt">
			     <tr><th>First Class Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$22.00</td></tr>
					     
				     </table>
		       		    
		        <!--end first class child!-->
		      <!--end small discount!-->
		            <!--end responsive tables!-->
		           <div class="box">
		      <label for="name">Name: </label><br>
		      <input type="text" id="name" name="name" value=""><br>
		          <label for="name">Phone Number: </label><br>
		      <input type="tel" id="phoneNo" name="phoneNo" value=""><br>
		         <label for="email">Email: </label><br>
		       <input type="email" id="email" name="email" value=""><br>
		      </div>
	       </div>
		    <!--end tmnt section!-->
		    <!--IJ section!-->
               <div id="ij"><h1>Indiana Jones</h1>
		       <img src="../../media/indianajones_dialofdestiny.jpg" alt="Indiana Jones and the Dial of Destiny movie poster" class="poster">
	        <div class="most">
		       <!--radio buttons!-->
	       <fieldset>
		<legend>Times<br>BTW...Weekday matinees and Mondays are discounted.</legend><br>
	
		<input type="radio" id="sundayIJ" name="week" onclick="showParaISu()" value="sunday" checked>
		  <label for="sundayIJ">Sunday</label>
		<input type="radio" id="mondayIJ" name="week" onclick="showParaIMo()" value="monday">
		  <label for="mondayIJ">Monday</label>
		<input type="radio" id="tuesdayIJ" name="week" onclick="showParaITu()" value="tuesday">
		  <label for="tuesdayIJ">Tuesday</label>
		<input type="radio" id="wednesdayIJ" name="week" onclick="showParaIWe()" value="wednesday">
		  <label for="wednesdayIJ">Wednesday</label>
		<input type="radio" id="thursdayIJ" name="week" onclick="showParaITh()" value="thursday">
		  <label for="thursdayIJ">Thursday</label>
		<input type="radio" id="fridayIJ" name="week" onclick="showParaIFr()" value="friday">
		  <label for="fridayIJ">Friday</label>
		<input type="radio" id="saturdayIJ" name="week" onclick="showParaISa()" value="saturday">
		  <label for="saturdayIJ">Saturday</label>
	  </fieldset>
		     </div>

		      <div class="small">
			<fieldset>      
		<table>
			
			<tr><th>Times<br>BTW...Weekday matinees and Mondays are discounted.</th></tr>
			<tr><td><input type="radio" id="sundayIJMini" name="week" onclick="showParaISu()" value="sunday" checked>
		  <label for="sundayIJMini">Sunday</label></td></tr>
			<tr><td><input type="radio" id="mondayIJMini" name="week" onclick="showParaIMo()" value="monday">
		  <label for="mondayIJMini">Monday</label></td></tr>
			<tr><td><input type="radio" id="tuesdayIJMini" name="week" onclick="showParaITu()" value="tuesday">
		  <label for="tuesdayIJMini">Tuesday</label></td></tr>
			<tr><td><input type="radio" id="wednesdayIJMini" name="week" onclick="showParaIWe()" value="wednesday">
		  <label for="wednesdayIJMini">Wednesday</label></td></tr>
			<tr><td><input type="radio" id="thursdayIJMini" name="week" onclick="showParaITh()" value="thursday">
		  <label for="thursdayIJMini">Thursday</label></td></tr>
			<tr><td><input type="radio" id="fridayIJMini" name="week" onclick="showParaIFr()" value="friday">
		  <label for="fridayIJMini">Friday</label></td></tr>
			<tr><td><input type="radio" id="saturdayIJMini" name="week" onclick="showParaISa()" value="saturday">
		  <label for="saturdayIJMini">Saturday</label></td></tr>
				 
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
			      <!--Table for seat types!-->
		     <table id="ist">
			     <tr><th>Quantity</th><th>Type</th><th>Price</th></tr>
			     <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult</td><td>$21.50</td></tr>
			 <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult Concession</td><td>$19.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Child</td><td>$17.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult</td><td>$31.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult Concession</td><td>$28.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Child</td><td>$25.00</td></tr>
		     </table>
		            <!--End table for seat types!-->
		

		        <!--Table for discount seat types!-->

		     <table  id="idt">
			     <tr><th>Quantity</th><th>Type</th><th>Price</th></tr>
			     <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult</td><td>$16.00</td></tr>
			 <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult Concession</td><td>$14.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Child</td><td>$13.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult</td><td>$25.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult Concession</td><td>$23.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Child</td><td>$22.00</td></tr>
		     </table>
	          <!--responsive tables!-->
		      <!--standard adult!-->
		      		     <table id="ssaist">
			     <tr><th>Standard Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$21.50</td></tr>
					     
				     </table>
		
		        <!--end standard adult!-->
		            <!--concession adult!-->
		      		     <table id="sscist">
			     <tr><th>Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$19.00</td></tr>
					     
				     </table>
		       		  
		        <!--end concession adult!-->
		      	            <!--child!-->
		      		     <table id="sskist">
			     <tr><th>Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$17.50</td></tr>
					     
				     </table>
		        <!--end child!-->
		      	            <!--first class adult!-->
		      		     <table id="sfaist">
			     <tr><th>First Class Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$31.00</td></tr>
					     
				     </table>
		       		   
		        <!--end first class adult!-->
		      	            <!-- first class concession adult!-->
		      		     <table id="sfcist">
			     <tr><th>First Class Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$28.00</td></tr>
					     
				     </table>
		       		     
		        <!--end first class concession adult!-->

		      	            <!--first class child!-->
		      		     <table id="sfkist">
			     <tr><th>First Class Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$25.00</td></tr>
					     
				     </table>
		       		    
		        <!--end first class child!-->
		      <!--Small Discount Start !-->
		            <!--standard adult!-->
		      		     <table id="ssaidt">
			     <tr><th>Standard Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$16.00</td></tr>
					     
				     </table>
		
		        <!--end standard adult!-->
		            <!--concession adult!-->
		      		     <table id="sscidt">
			     <tr><th>Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$14.50</td></tr>
					     
				     </table>
		       		  
		        <!--end concession adult!-->
		      	            <!--child!-->
		      		     <table id="sskidt">
			     <tr><th>Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$13.00</td></tr>
					     
				     </table>
		        <!--end child!-->
		      	            <!--first class adult!-->
		      		     <table id="sfaidt">
			     <tr><th>First Class Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$25.00</td></tr>
					     
				     </table>
		       		   
		        <!--end first class adult!-->
		      	            <!-- first class concession adult!-->
		      		     <table id="sfcidt">
			     <tr><th>First Class Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$23.50</td></tr>
					     
				     </table>
		       		     
		        <!--end first class concession adult!-->

		      	            <!--first class child!-->
		      		     <table id="sfkidt">
			     <tr><th>First Class Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$22.00</td></tr>
					     
				     </table>
		       		    
		        <!--end first class child!-->
		      <!--end small discount!-->
		            <!--end responsive tables!-->
		           <div class="box">
		      <label for="name">Name: </label><br>
		      <input type="text" id="name" name="name" value=""><br>
		          <label for="name">Phone Number: </label><br>
		     <input type="tel" id="phoneNo" name="phoneNo" value=""><br>
		         <label for="email">Email: </label><br>
		       <input type="email" id="email" name="email" value=""><br>
		      </div>
	       
	       </div>
		            <!--End table for discount seat types!-->
			    <!--End IJ Section!-->
			    
	      <!--OP!-->
               <div id="op"><h1>Oppenheimer</h1>
		      <img src="../../media/Oppenheimer_(film).jpg" alt="Oppenheimer movie poster" class="poster">
	        <div class="most">
	       	       <fieldset>
		<legend>Times<br>BTW...Weekday matinees and Mondays are discounted.</legend><br>
	
		<input type="radio" id="sundayOP" name="week" onclick="showParaOSu()" value="sunday" checked>
		  <label for="sundayOP">Sunday</label>
		<input type="radio" id="mondayOP" name="week" onclick="showParaOMo()" value="monday">
		  <label for="mondayOP">Monday</label>
		<input type="radio" id="tuesdayOP" name="week" onclick="showParaOTu()" value="tuesday">
		  <label for="tuesdayOP">Tuesday</label>
		<input type="radio" id="wednesdayOP" name="week" onclick="showParaOWe()" value="wednesday">
		  <label for="wednesdayOP">Wednesday</label>
		<input type="radio" id="thursdayOP" name="week" onclick="showParaOTh()" value="thursday">
		  <label for="thursdayOP">Thursday</label>
		<input type="radio" id="fridayOP" name="week" onclick="showParaOFr()" value="friday">
		  <label for="fridayOP">Friday</label>
		<input type="radio" id="saturdayOP" name="week" onclick="showParaOSa()" value="saturday">
		  <label for="saturdayOP">Saturday</label>
	  </fieldset>
		     </div>

		      <div class="small">
			<fieldset>      
		<table>
			
			<tr><th>Times<br>BTW...Weekday matinees and Mondays are discounted.</th></tr>
			<tr><td><input type="radio" id="sundayOPMini" name="week" onclick="showParaOSu()" value="sunday" checked>
		  <label for="sundayOPMini">Sunday</label></td></tr>
			<tr><td><input type="radio" id="mondayOPMini" name="week" onclick="showParaOMo()" value="monday">
		  <label for="mondayOPMini">Monday</label></td></tr>
			<tr><td><input type="radio" id="tuesdayOPMini" name="week" onclick="showParaOTu()" value="tuesday">
		  <label for="tuesdayOPMini">Tuesday</label></td></tr>
			<tr><td><input type="radio" id="wednesdayOPMini" name="week" onclick="showParaOWe()" value="wednesday">
		  <label for="wednesdayOPMini">Wednesday</label></td></tr>
			<tr><td><input type="radio" id="thursdayOPMini" name="week" onclick="showParaOTh()" value="thursday">
		  <label for="thursdayOPMini">Thursday</label></td></tr>
			<tr><td><input type="radio" id="fridayOPMini" name="week" onclick="showParaOFr()" value="friday">
		  <label for="fridayOPMini">Friday</label></td></tr>
			<tr><td><input type="radio" id="saturdayOPMini" name="week" onclick="showParaOSa()" value="saturday">
		  <label for="saturdayOPMini">Saturday</label></td></tr>
				 
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

			      <!--Table for seat types!-->
		     <table id="ost">
			     <tr><th>Quantity</th><th>Type</th><th>Price</th></tr>
			     <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult</td><td>$21.50</td></tr>
			 <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult Concession</td><td>$19.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Child</td><td>$17.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult</td><td>$31.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult Concession</td><td>$28.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Child</td><td>$25.00</td></tr>
		     </table>
		            <!--End table for seat types!-->
		

		        <!--Table for discount seat types!-->

		     <table  id="odt">
			     <tr><th>Quantity</th><th>Type</th><th>Price</th></tr>
			     <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult</td><td>$16.00</td></tr>
			 <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Adult Concession</td><td>$14.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>Standard Child</td><td>$13.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult</td><td>$25.00</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Adult Concession</td><td>$23.50</td></tr>
			      <tr><td>
  <p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td><td>First Class Child</td><td>$22.00</td></tr>
		     </table>
		            <!--End table for discount seat types!-->
		          <!--responsive tables!-->
		      <!--standard adult!-->
		      		     <table id="ssaost">
			     <tr><th>Standard Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$21.50</td></tr>
					     
				     </table>
		
		        <!--end standard adult!-->
		            <!--concession adult!-->
		      		     <table id="sscost">
			     <tr><th>Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$19.00</td></tr>
					     
				     </table>
		       		  
		        <!--end concession adult!-->
		      	            <!--child!-->
		      		     <table id="sskost">
			     <tr><th>Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$17.50</td></tr>
					     
				     </table>
		        <!--end child!-->
		      	            <!--first class adult!-->
		      		     <table id="sfaost">
			     <tr><th>First Class Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$31.00</td></tr>
					     
				     </table>
		       		   
		        <!--end first class adult!-->
		      	            <!-- first class concession adult!-->
		      		     <table id="sfcost">
			     <tr><th>First Class Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$28.00</td></tr>
					     
				     </table>
		       		     
		        <!--end first class concession adult!-->

		      	            <!--first class child!-->
		      		     <table id="sfkost">
			     <tr><th>First Class Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$25.00</td></tr>
					     
				     </table>
		       		    
		        <!--end first class child!-->
		      <!--Small Discount Start !-->
		            <!--standard adult!-->
		      		     <table id="ssaodt">
			     <tr><th>Standard Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$16.00</td></tr>
					     
				     </table>
		
		        <!--end standard adult!-->
		            <!--concession adult!-->
		      		     <table id="sscodt">
			     <tr><th>Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$14.50</td></tr>
					     
				     </table>
		       		  
		        <!--end concession adult!-->
		      	            <!--child!-->
		      		     <table id="sskodt">
			     <tr><th>Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$13.00</td></tr>
					     
				     </table>
		        <!--end child!-->
		      	            <!--first class adult!-->
		      		     <table id="sfaodt">
			     <tr><th>First Class Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$25.00</td></tr>
					     
				     </table>
		       		   
		        <!--end first class adult!-->
		      	            <!-- first class concession adult!-->
		      		     <table id="sfcodt">
			     <tr><th>First Class Concession Adult</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$23.50</td></tr>
					     
				     </table>
		       		     
		        <!--end first class concession adult!-->

		      	            <!--first class child!-->
		      		     <table id="sfkodt">
			     <tr><th>First Class Child</th></tr>
					     <tr><td><p><label>Please select:
  <select name='seatNo'>
  <script>
    var zero = 0;
    for ( var i=zero; i<=(zero+10); i++ )
            document.write('<option value="'+i+'">'+i+'</option>');
  </script>
  </select>
</label></p></td></tr>
					     <tr><td>$22.00</td></tr>
					     
				     </table>
		       		    
		        <!--end first class child!-->
		      <!--end small discount!-->
		            <!--end responsive tables!-->
		           <div class="box">
		      <label for="name">Name: </label><br>
		      <input type="text" id="name" name="name" value=""><br>
		          <label for="name">Phone Number: </label><br>
		       <input type="tel" id="phoneNo" name="phoneNo" value=""><br>
		         <label for="email">Email: </label><br>
		       <input type="email" id="email" name="email" value=""><br>
		      </div>
	       </div>
			    <input type="submit" value="Submit">
                </form>
		       
	 </div>
		    
           <div class="right"></div>
                

         </div>
                     </article> 
   
            <footer>
            <div class="footer">
              <div><h4>We are located at 123 Something Street, Atown <br> Phone: (03) 3496 4168</h4></div>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> By Brearne Gibson, s3496168. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div><p>GitHub Repo link can be found <a href="https://github.com/s3496168/wp.git">here</a></p></div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
            </div>
      </footer>
	  </main> 
  <script>
// Retrieve the URL parameter
var urlParams = new URLSearchParams(window.location.search);
var displayBarbie = urlParams.get('displayBarbie');
var displayTmnt = urlParams.get('displayTmnt');
var displayIj = urlParams.get('displayIj');
var displayOp = urlParams.get('displayOp');

// Check each dispaly parameter is true
    // Barbie
if (displayBarbie === 'true') {
  var b= document.getElementById("barbie");
  b.style.display = "block";
}

    //TMNT
    if (displayTmnt === 'true') {
  var t= document.getElementById("tmnt");
  t.style.display = "block";
}

    //Indiana Jones
    if (displayIj === 'true') {
  var ij= document.getElementById("ij");
  ij.style.display = "block";
}

  //Oppenheimer
  if (displayOp === 'true') {
  var op= document.getElementById("op");
  op.style.display = "block";
}
	  //barbie
function showParaBSu(){
	var bsu = document.getElementById("bsu");
	var bmo = document.getElementById("bmo");
 	var btu = document.getElementById("btu");
	var bwe = document.getElementById("bwe");
	var bth = document.getElementById("bth");
	var bfr = document.getElementById("bfr");
	var bsa = document.getElementById("bsa");
	var bst = document.getElementById("bst");
	var bdt = document.getElementById("bdt");
	var ssabst = document.getElementById("ssabst");
	var sscbst = document.getElementById("sscbst");
	var sskbst = document.getElementById("sskbst");
	var sfabst = document.getElementById("sfabst");
	var sfcbst = document.getElementById("sfcbst");
	var sfkbst = document.getElementById("sfkbst");
	var ssabdt = document.getElementById("ssabdt");
	var sscbdt = document.getElementById("sscbdt");
	var sskbdt = document.getElementById("sskbdt");
	var sfabdt = document.getElementById("sfabdt");
	var sfcbdt = document.getElementById("sfcbdt");
	var sfkbdt = document.getElementById("sfkbdt");
	var w = window.innerWidth;
	ssabst.style.display = "none";
	sscbst.style.display = "none";
	sskbst.style.display = "none";
	sfabst.style.display = "none";
	sfcbst.style.display = "none";
	sfkbst.style.display = "none";
	ssabdt.style.display = "none";
	sscbdt.style.display = "none";
	sskbdt.style.display = "none";
	sfabdt.style.display = "none";
	sfcbdt.style.display = "none";
	sfkbdt.style.display = "none";
	bmo.style.display = "none";
	bwe.style.display = "none";
	bth.style.display = "none";
	bfr.style.display = "none";
	bsa.style.display = "none";
	btu.style.display = "none";
	bdt.style.display = "none";
	bsu.style.display = "block";
	bst.style.display = "block";
	if(w<480){
		bst.style.display = "none";
	ssabst.style.display = "block";
	sscbst.style.display = "block";
	sskbst.style.display = "block";
	sfabst.style.display = "block";
	sfcbst.style.display = "block";
	sfkbst.style.display = "block";
	}
	
}

	  function showParaBMo(){
	var bsu = document.getElementById("bsu");
	var bmo = document.getElementById("bmo");
 	var btu = document.getElementById("btu");
	var bwe = document.getElementById("bwe");
	var bth = document.getElementById("bth");
	var bfr = document.getElementById("bfr");
	var bsa = document.getElementById("bsa");
	var bst = document.getElementById("bst");
	var bdt = document.getElementById("bdt");
	var ssabst = document.getElementById("ssabst");
	var sscbst = document.getElementById("sscbst");
	var sskbst = document.getElementById("sskbst");
	var sfabst = document.getElementById("sfabst");
	var sfcbst = document.getElementById("sfcbst");
	var sfkbst = document.getElementById("sfkbst");
	var ssabdt = document.getElementById("ssabdt");
	var sscbdt = document.getElementById("sscbdt");
	var sskbdt = document.getElementById("sskbdt");
	var sfabdt = document.getElementById("sfabdt");
	var sfcbdt = document.getElementById("sfcbdt");
	var sfkbdt = document.getElementById("sfkbdt");
	var w = window.innerWidth;
	ssabst.style.display = "none";
	sscbst.style.display = "none";
	sskbst.style.display = "none";
	sfabst.style.display = "none";
	sfcbst.style.display = "none";
	sfkbst.style.display = "none";
	ssabdt.style.display = "none";
	sscbdt.style.display = "none";
	sskbdt.style.display = "none";
	sfabdt.style.display = "none";
	sfcbdt.style.display = "none";
	sfkbdt.style.display = "none";
	bdt.style.display = "none";
	bst.style.display = "none";
	bsu.style.display = "none";
	bwe.style.display = "none";
	bth.style.display = "none";
	bfr.style.display = "none";
	bsa.style.display = "none";
	btu.style.display = "none";
	bmo.style.display = "block";
		}
	  
	  function showParaBTu(){
	var bsu = document.getElementById("bsu");
	var bmo = document.getElementById("bmo");
 	var btu = document.getElementById("btu");
	var bwe = document.getElementById("bwe");
	var bth = document.getElementById("bth");
	var bfr = document.getElementById("bfr");
	var bsa = document.getElementById("bsa");
	var bst = document.getElementById("bst");
	var bdt = document.getElementById("bdt");
	var ssabst = document.getElementById("ssabst");
	var sscbst = document.getElementById("sscbst");
	var sskbst = document.getElementById("sskbst");
	var sfabst = document.getElementById("sfabst");
	var sfcbst = document.getElementById("sfcbst");
	var sfkbst = document.getElementById("sfkbst");
	var ssabdt = document.getElementById("ssabdt");
	var sscbdt = document.getElementById("sscbdt");
	var sskbdt = document.getElementById("sskbdt");
	var sfabdt = document.getElementById("sfabdt");
	var sfcbdt = document.getElementById("sfcbdt");
	var sfkbdt = document.getElementById("sfkbdt");
	var w = window.innerWidth;
	ssabst.style.display = "none";
	sscbst.style.display = "none";
	sskbst.style.display = "none";
	sfabst.style.display = "none";
	sfcbst.style.display = "none";
	sfkbst.style.display = "none";
	ssabdt.style.display = "none";
	sscbdt.style.display = "none";
	sskbdt.style.display = "none";
	sfabdt.style.display = "none";
	sfcbdt.style.display = "none";
	sfkbdt.style.display = "none";
	bmo.style.display = "none";
	bst.style.display = "none";
	bsu.style.display = "none";
	bmo.style.display = "none"; 
	bwe.style.display = "none";
	bth.style.display = "none";
	bfr.style.display = "none";
	bsa.style.display = "none";
	bdt.style.display = "none";
	btu.style.display = "block";
		}

	   function showParaBWe(){
	var bsu = document.getElementById("bsu");
	var bmo = document.getElementById("bmo");
 	var btu = document.getElementById("btu");
	var bwe = document.getElementById("bwe");
	var bth = document.getElementById("bth");
	var bfr = document.getElementById("bfr");
	var bsa = document.getElementById("bsa");
	var bst = document.getElementById("bst");
	var bdt = document.getElementById("bdt");
	var ssabst = document.getElementById("ssabst");
	var sscbst = document.getElementById("sscbst");
	var sskbst = document.getElementById("sskbst");
	var sfabst = document.getElementById("sfabst");
	var sfcbst = document.getElementById("sfcbst");
	var sfkbst = document.getElementById("sfkbst");
	var ssabdt = document.getElementById("ssabdt");
	var sscbdt = document.getElementById("sscbdt");
	var sskbdt = document.getElementById("sskbdt");
	var sfabdt = document.getElementById("sfabdt");
	var sfcbdt = document.getElementById("sfcbdt");
	var sfkbdt = document.getElementById("sfkbdt");
	var w = window.innerWidth;
	ssabst.style.display = "none";
	sscbst.style.display = "none";
	sskbst.style.display = "none";
	sfabst.style.display = "none";
	sfcbst.style.display = "none";
	sfkbst.style.display = "none";
	ssabdt.style.display = "none";
	sscbdt.style.display = "none";
	sskbdt.style.display = "none";
	sfabdt.style.display = "none";
	sfcbdt.style.display = "none";
	sfkbdt.style.display = "none";
	bst.style.display = "none";
	bsu.style.display = "none";
	bmo.style.display = "none"; 
	bth.style.display = "none";
	bfr.style.display = "none";
	bsa.style.display = "none";
	btu.style.display = "none";
	bwe.style.display = "block";
	bdt.style.display = "block";
		   if(w<480){
	bdt.style.display = "none";
	ssabdt.style.display = "block";
	sscbdt.style.display = "block";
	sskbdt.style.display = "block";
	sfabdt.style.display = "block";
	sfcbdt.style.display = "block";
	sfkbdt.style.display = "block";
	}
		}

	     function showParaBTh(){
	var bsu = document.getElementById("bsu");
	var bmo = document.getElementById("bmo");
 	var btu = document.getElementById("btu");
	var bwe = document.getElementById("bwe");
	var bth = document.getElementById("bth");
	var bfr = document.getElementById("bfr");
	var bsa = document.getElementById("bsa");
	var bst = document.getElementById("bst");
	var bdt = document.getElementById("bdt");
	var ssabst = document.getElementById("ssabst");
	var sscbst = document.getElementById("sscbst");
	var sskbst = document.getElementById("sskbst");
	var sfabst = document.getElementById("sfabst");
	var sfcbst = document.getElementById("sfcbst");
	var sfkbst = document.getElementById("sfkbst");
	var ssabdt = document.getElementById("ssabdt");
	var sscbdt = document.getElementById("sscbdt");
	var sskbdt = document.getElementById("sskbdt");
	var sfabdt = document.getElementById("sfabdt");
	var sfcbdt = document.getElementById("sfcbdt");
	var sfkbdt = document.getElementById("sfkbdt");
	var w = window.innerWidth;
	ssabst.style.display = "none";
	sscbst.style.display = "none";
	sskbst.style.display = "none";
	sfabst.style.display = "none";
	sfcbst.style.display = "none";
	sfkbst.style.display = "none";
	ssabdt.style.display = "none";
	sscbdt.style.display = "none";
	sskbdt.style.display = "none";
	sfabdt.style.display = "none";
	sfcbdt.style.display = "none";
	sfkbdt.style.display = "none";
	bst.style.display = "none";
	bsu.style.display = "none";
	bmo.style.display = "none"; 
	bfr.style.display = "none";
	bsa.style.display = "none";
	btu.style.display = "none";
	bwe.style.display = "none";
	bdt.style.display = "block";
	bth.style.display = "block";
		        if(w<480){
	bdt.style.display = "none";
	ssabdt.style.display = "block";
	sscbdt.style.display = "block";
	sskbdt.style.display = "block";
	sfabdt.style.display = "block";
	sfcbdt.style.display = "block";
	sfkbdt.style.display = "block";
	}
	}

	function showParaBFr(){
	var bsu = document.getElementById("bsu");
	var bmo = document.getElementById("bmo");
 	var btu = document.getElementById("btu");
	var bwe = document.getElementById("bwe");
	var bth = document.getElementById("bth");
	var bfr = document.getElementById("bfr");
	var bsa = document.getElementById("bsa");
	var bst = document.getElementById("bst");
	var bdt = document.getElementById("bdt");
	var ssabst = document.getElementById("ssabst");
	var sscbst = document.getElementById("sscbst");
	var sskbst = document.getElementById("sskbst");
	var sfabst = document.getElementById("sfabst");
	var sfcbst = document.getElementById("sfcbst");
	var sfkbst = document.getElementById("sfkbst");
	var ssabdt = document.getElementById("ssabdt");
	var sscbdt = document.getElementById("sscbdt");
	var sskbdt = document.getElementById("sskbdt");
	var sfabdt = document.getElementById("sfabdt");
	var sfcbdt = document.getElementById("sfcbdt");
	var sfkbdt = document.getElementById("sfkbdt");
	var w = window.innerWidth;
	ssabst.style.display = "none";
	sscbst.style.display = "none";
	sskbst.style.display = "none";
	sfabst.style.display = "none";
	sfcbst.style.display = "none";
	sfkbst.style.display = "none";
	ssabdt.style.display = "none";
	sscbdt.style.display = "none";
	sskbdt.style.display = "none";
	sfabdt.style.display = "none";
	sfcbdt.style.display = "none";
	sfkbdt.style.display = "none";
	bst.style.display = "none";
	bsu.style.display = "none";
	bmo.style.display = "none"; 
	bsa.style.display = "none";
	btu.style.display = "none";
	bwe.style.display = "none";
	bth.style.display = "none";
	bdt.style.display = "block";
	bfr.style.display = "block";
		   if(w<480){
		bdt.style.display = "none";
	ssabdt.style.display = "block";
	sscbdt.style.display = "block";
	sskbdt.style.display = "block";
	sfabdt.style.display = "block";
	sfcbdt.style.display = "block";
	sfkbdt.style.display = "block";
	}
		}

	   function showParaBSa(){
	var bsu = document.getElementById("bsu");
	var bmo = document.getElementById("bmo");
 	var btu = document.getElementById("btu");
	var bwe = document.getElementById("bwe");
	var bth = document.getElementById("bth");
	var bfr = document.getElementById("bfr");
	var bsa = document.getElementById("bsa");
	var bst = document.getElementById("bst");
	var bdt = document.getElementById("bdt");
	var ssabst = document.getElementById("ssabst");
	var sscbst = document.getElementById("sscbst");
	var sskbst = document.getElementById("sskbst");
	var sfabst = document.getElementById("sfabst");
	var sfcbst = document.getElementById("sfcbst");
	var sfkbst = document.getElementById("sfkbst");
	var ssabdt = document.getElementById("ssabdt");
	var sscbdt = document.getElementById("sscbdt");
	var sskbdt = document.getElementById("sskbdt");
	var sfabdt = document.getElementById("sfabdt");
	var sfcbdt = document.getElementById("sfcbdt");
	var sfkbdt = document.getElementById("sfkbdt");
	var w = window.innerWidth;
	ssabst.style.display = "none";
	sscbst.style.display = "none";
	sskbst.style.display = "none";
	sfabst.style.display = "none";
	sfcbst.style.display = "none";
	sfkbst.style.display = "none";
	ssabdt.style.display = "none";
	sscbdt.style.display = "none";
	sskbdt.style.display = "none";
	sfabdt.style.display = "none";
	sfcbdt.style.display = "none";
	sfkbdt.style.display = "none";
	bdt.style.display = "none";
	bst.style.display = "block";
	bsu.style.display = "none";
	bmo.style.display = "none"; 
	btu.style.display = "none";
	bwe.style.display = "none";
	bth.style.display = "none";
	bfr.style.display = "none";
	bsa.style.display = "block";
		   if(w<480){
	bst.style.display = "none";
	ssabst.style.display = "block";
	sscbst.style.display = "block";
	sskbst.style.display = "block";
	sfabst.style.display = "block";
	sfcbst.style.display = "block";
	sfkbst.style.display = "block";
	}
		}
		/*end barbie*/
  //tmnt
function showParaTSu(){
	var tsu = document.getElementById("tsu");
	var tmo = document.getElementById("tmo");
 	var ttu = document.getElementById("ttu");
	var twe = document.getElementById("twe");
	var tth = document.getElementById("tth");
	var tfr = document.getElementById("tfr");
	var tsa = document.getElementById("tsa");
	var tst = document.getElementById("tst");
	var tdt = document.getElementById("tdt");
	var ssatst = document.getElementById("ssatst");
	var ssctst = document.getElementById("ssctst");
	var ssktst = document.getElementById("ssktst");
	var sfatst = document.getElementById("sfatst");
	var sfctst = document.getElementById("sfctst");
	var sfktst = document.getElementById("sfktst");
	var ssatdt = document.getElementById("ssatdt");
	var ssctdt = document.getElementById("ssctdt");
	var ssktdt = document.getElementById("ssktdt");
	var sfatdt = document.getElementById("sfatdt");
	var sfctdt = document.getElementById("sfctdt");
	var sfktdt = document.getElementById("sfktdt");
	var w = window.innerWidth;
	ssatst.style.display = "none";
	ssctst.style.display = "none";
	ssktst.style.display = "none";
	sfatst.style.display = "none";
	sfctst.style.display = "none";
	sfktst.style.display = "none";
	ssatdt.style.display = "none";
	ssctdt.style.display = "none";
	ssktdt.style.display = "none";
	sfatdt.style.display = "none";
	sfctdt.style.display = "none";
	sfktdt.style.display = "none";
	tdt.style.display = "none";
	tst.style.display = "block";
	tmo.style.display = "none";
	twe.style.display = "none";
	tth.style.display = "none";
	tfr.style.display = "none";
	tsa.style.display = "none";
	ttu.style.display = "none";
	tsu.style.display = "block";
	   if(w<480){
		tst.style.display = "none";
	ssatst.style.display = "block";
	ssctst.style.display = "block";
	ssktst.style.display = "block";
	sfatst.style.display = "block";
	sfctst.style.display = "block";
	sfktst.style.display = "block";
	}
}

	  function showParaTMo(){
	var tsu = document.getElementById("tsu");
	var tmo = document.getElementById("tmo");
 	var ttu = document.getElementById("ttu");
	var twe = document.getElementById("twe");
	var tth = document.getElementById("tth");
	var tfr = document.getElementById("tfr");
	var tsa = document.getElementById("tsa");
	var tst = document.getElementById("tst");
	var tdt = document.getElementById("tdt");
	var ssatst = document.getElementById("ssatst");
	var ssctst = document.getElementById("ssctst");
	var ssktst = document.getElementById("ssktst");
	var sfatst = document.getElementById("sfatst");
	var sfctst = document.getElementById("sfctst");
	var sfktst = document.getElementById("sfktst");
	var ssatdt = document.getElementById("ssatdt");
	var ssctdt = document.getElementById("ssctdt");
	var ssktdt = document.getElementById("ssktdt");
	var sfatdt = document.getElementById("sfatdt");
	var sfctdt = document.getElementById("sfctdt");
	var sfktdt = document.getElementById("sfktdt");
	var w = window.innerWidth;
	ssatst.style.display = "none";
	ssctst.style.display = "none";
	ssktst.style.display = "none";
	sfatst.style.display = "none";
	sfctst.style.display = "none";
	sfktst.style.display = "none";
	ssatdt.style.display = "none";
	ssctdt.style.display = "none";
	ssktdt.style.display = "none";
	sfatdt.style.display = "none";
	sfctdt.style.display = "none";
	sfktdt.style.display = "none";
	tst.style.display = "none";
	tdt.style.display = "block";
	tsu.style.display = "none";
	twe.style.display = "none";
	tth.style.display = "none";
	tfr.style.display = "none";
	tsa.style.display = "none";
	ttu.style.display = "none";
	tmo.style.display = "block";
		  if(w<480){
		tdt.style.display = "none";
	ssatdt.style.display = "block";
	ssctdt.style.display = "block";
	ssktdt.style.display = "block";
	sfatdt.style.display = "block";
	sfctdt.style.display = "block";
	sfktdt.style.display = "block";
	}
		}
	  
	  function showParaTTu(){
		/*var rBsu = document.getElementById("sundayBarbie");*/
	var tsu = document.getElementById("tsu");
	var tmo = document.getElementById("tmo");
 	var ttu = document.getElementById("ttu");
	var twe = document.getElementById("twe");
	var tth = document.getElementById("tth");
	var tfr = document.getElementById("tfr");
	var tsa = document.getElementById("tsa");
	var tst = document.getElementById("tst");
	var tdt = document.getElementById("tdt");
	var ssatst = document.getElementById("ssatst");
	var ssctst = document.getElementById("ssctst");
	var ssktst = document.getElementById("ssktst");
	var sfatst = document.getElementById("sfatst");
	var sfctst = document.getElementById("sfctst");
	var sfktst = document.getElementById("sfktst");
	var ssatdt = document.getElementById("ssatdt");
	var ssctdt = document.getElementById("ssctdt");
	var ssktdt = document.getElementById("ssktdt");
	var sfatdt = document.getElementById("sfatdt");
	var sfctdt = document.getElementById("sfctdt");
	var sfktdt = document.getElementById("sfktdt");
	var w = window.innerWidth;
	ssatst.style.display = "none";
	ssctst.style.display = "none";
	ssktst.style.display = "none";
	sfatst.style.display = "none";
	sfctst.style.display = "none";
	sfktst.style.display = "none";
	ssatdt.style.display = "none";
	ssctdt.style.display = "none";
	ssktdt.style.display = "none";
	sfatdt.style.display = "none";
	sfctdt.style.display = "none";
	sfktdt.style.display = "none";
	tdt.style.display = "none";
	tst.style.display = "block";
	tsu.style.display = "none";
	tmo.style.display = "none"; 
	twe.style.display = "none";
	tth.style.display = "none";
	tfr.style.display = "none";
	tsa.style.display = "none";
	ttu.style.display = "block";
		    if(w<480){
		tst.style.display = "none";
	ssatst.style.display = "block";
	ssctst.style.display = "block";
	ssktst.style.display = "block";
	sfatst.style.display = "block";
	sfctst.style.display = "block";
	sfktst.style.display = "block";
	}
		}

	function showParaTWe(){
	var tsu = document.getElementById("tsu");
	var tmo = document.getElementById("tmo");
 	var ttu = document.getElementById("ttu");
	var twe = document.getElementById("twe");
	var tth = document.getElementById("tth");
	var tfr = document.getElementById("tfr");
	var tsa = document.getElementById("tsa");
	var tst = document.getElementById("tst");
	var tdt = document.getElementById("tdt");
	var ssatst = document.getElementById("ssatst");
	var ssctst = document.getElementById("ssctst");
	var ssktst = document.getElementById("ssktst");
	var sfatst = document.getElementById("sfatst");
	var sfctst = document.getElementById("sfctst");
	var sfktst = document.getElementById("sfktst");
	var ssatdt = document.getElementById("ssatdt");
	var ssctdt = document.getElementById("ssctdt");
	var ssktdt = document.getElementById("ssktdt");
	var sfatdt = document.getElementById("sfatdt");
	var sfctdt = document.getElementById("sfctdt");
	var sfktdt = document.getElementById("sfktdt");
	var w = window.innerWidth;
	ssatst.style.display = "none";
	ssctst.style.display = "none";
	ssktst.style.display = "none";
	sfatst.style.display = "none";
	sfctst.style.display = "none";
	sfktst.style.display = "none";
	ssatdt.style.display = "none";
	ssctdt.style.display = "none";
	ssktdt.style.display = "none";
	sfatdt.style.display = "none";
	sfctdt.style.display = "none";
	sfktdt.style.display = "none";
	tdt.style.display = "none";
	tst.style.display = "block";
	tsu.style.display = "none";
	tmo.style.display = "none"; 
	tth.style.display = "none";
	tfr.style.display = "none";
	tsa.style.display = "none";
	ttu.style.display = "none";
	twe.style.display = "block";
		  if(w<480){
		tst.style.display = "none";
	ssatst.style.display = "block";
	ssctst.style.display = "block";
	ssktst.style.display = "block";
	sfatst.style.display = "block";
	sfctst.style.display = "block";
	sfktst.style.display = "block";
	}
		}

	function showParaTTh(){
	var tsu = document.getElementById("tsu");
	var tmo = document.getElementById("tmo");
 	var ttu = document.getElementById("ttu");
	var twe = document.getElementById("twe");
	var tth = document.getElementById("tth");
	var tfr = document.getElementById("tfr");
	var tsa = document.getElementById("tsa");
	var tst = document.getElementById("tst");
	var tdt = document.getElementById("tdt");
	var ssatst = document.getElementById("ssatst");
	var ssctst = document.getElementById("ssctst");
	var ssktst = document.getElementById("ssktst");
	var sfatst = document.getElementById("sfatst");
	var sfctst = document.getElementById("sfctst");
	var sfktst = document.getElementById("sfktst");
	var ssatdt = document.getElementById("ssatdt");
	var ssctdt = document.getElementById("ssctdt");
	var ssktdt = document.getElementById("ssktdt");
	var sfatdt = document.getElementById("sfatdt");
	var sfctdt = document.getElementById("sfctdt");
	var sfktdt = document.getElementById("sfktdt");
	var w = window.innerWidth;
	ssatst.style.display = "none";
	ssctst.style.display = "none";
	ssktst.style.display = "none";
	sfatst.style.display = "none";
	sfctst.style.display = "none";
	sfktst.style.display = "none";
	ssatdt.style.display = "none";
	ssctdt.style.display = "none";
	ssktdt.style.display = "none";
	sfatdt.style.display = "none";
	sfctdt.style.display = "none";
	sfktdt.style.display = "none";
	tdt.style.display = "none";
	tst.style.display = "block";
	tsu.style.display = "none";
	tmo.style.display = "none"; 
	tfr.style.display = "none";
	tsa.style.display = "none";
	ttu.style.display = "none";
	twe.style.display = "none";
	tth.style.display = "block";
		  if(w<480){
		tst.style.display = "none";
	ssatst.style.display = "block";
	ssctst.style.display = "block";
	ssktst.style.display = "block";
	sfatst.style.display = "block";
	sfctst.style.display = "block";
	sfktst.style.display = "block";
	}
		}

	function showParaTFr(){
	var tsu = document.getElementById("tsu");
	var tmo = document.getElementById("tmo");
 	var ttu = document.getElementById("ttu");
	var twe = document.getElementById("twe");
	var tth = document.getElementById("tth");
	var tfr = document.getElementById("tfr");
	var tsa = document.getElementById("tsa");
	var tst = document.getElementById("tst");
	var tdt = document.getElementById("tdt");
	var ssatst = document.getElementById("ssatst");
	var ssctst = document.getElementById("ssctst");
	var ssktst = document.getElementById("ssktst");
	var sfatst = document.getElementById("sfatst");
	var sfctst = document.getElementById("sfctst");
	var sfktst = document.getElementById("sfktst");
	var ssatdt = document.getElementById("ssatdt");
	var ssctdt = document.getElementById("ssctdt");
	var ssktdt = document.getElementById("ssktdt");
	var sfatdt = document.getElementById("sfatdt");
	var sfctdt = document.getElementById("sfctdt");
	var sfktdt = document.getElementById("sfktdt");
	var w = window.innerWidth;
	ssatst.style.display = "none";
	ssctst.style.display = "none";
	ssktst.style.display = "none";
	sfatst.style.display = "none";
	sfctst.style.display = "none";
	sfktst.style.display = "none";
	ssatdt.style.display = "none";
	ssctdt.style.display = "none";
	ssktdt.style.display = "none";
	sfatdt.style.display = "none";
	sfctdt.style.display = "none";
	sfktdt.style.display = "none";
	tdt.style.display = "none";
	tst.style.display = "block";
	tsu.style.display = "none";
	tmo.style.display = "none"; 
	tsa.style.display = "none";
	ttu.style.display = "none";
	twe.style.display = "none";
	tth.style.display = "none";
	tfr.style.display = "block";
		  if(w<480){
		tst.style.display = "none";
	ssatst.style.display = "block";
	ssctst.style.display = "block";
	ssktst.style.display = "block";
	sfatst.style.display = "block";
	sfctst.style.display = "block";
	sfktst.style.display = "block";
	}
		}

	function showParaTSa(){
	var tsu = document.getElementById("tsu");
	var tmo = document.getElementById("tmo");
 	var ttu = document.getElementById("ttu");
	var twe = document.getElementById("twe");
	var tth = document.getElementById("tth");
	var tfr = document.getElementById("tfr");
	var tsa = document.getElementById("tsa");
	var tst = document.getElementById("tst");
	var tdt = document.getElementById("tdt");
	var ssatst = document.getElementById("ssatst");
	var ssctst = document.getElementById("ssctst");
	var ssktst = document.getElementById("ssktst");
	var sfatst = document.getElementById("sfatst");
	var sfctst = document.getElementById("sfctst");
	var sfktst = document.getElementById("sfktst");
	var ssatdt = document.getElementById("ssatdt");
	var ssctdt = document.getElementById("ssctdt");
	var ssktdt = document.getElementById("ssktdt");
	var sfatdt = document.getElementById("sfatdt");
	var sfctdt = document.getElementById("sfctdt");
	var sfktdt = document.getElementById("sfktdt");
	var w = window.innerWidth;
	ssatst.style.display = "none";
	ssctst.style.display = "none";
	ssktst.style.display = "none";
	sfatst.style.display = "none";
	sfctst.style.display = "none";
	sfktst.style.display = "none";
	ssatdt.style.display = "none";
	ssctdt.style.display = "none";
	ssktdt.style.display = "none";
	sfatdt.style.display = "none";
	sfctdt.style.display = "none";
	sfktdt.style.display = "none";
	tdt.style.display = "none";
	tst.style.display = "block";
	tsu.style.display = "none";
	tmo.style.display = "none"; 
	ttu.style.display = "none";
	twe.style.display = "none";
	tth.style.display = "none";
	tfr.style.display = "none";
	tsa.style.display = "block";
		  if(w<480){
		tst.style.display = "none";
	ssatst.style.display = "block";
	ssctst.style.display = "block";
	ssktst.style.display = "block";
	sfatst.style.display = "block";
	sfctst.style.display = "block";
	sfktst.style.display = "block";
	}
	   }
	  //end tmnt
	  
	  //ij
	function showParaISu(){
	var isu = document.getElementById("isu");
	var imo = document.getElementById("imo");
 	var itu = document.getElementById("itu");
	var iwe = document.getElementById("iwe");
	var ith = document.getElementById("ith");
	var ifr = document.getElementById("ifr");
	var isa = document.getElementById("isa");
	var ist = document.getElementById("ist");
	var idt = document.getElementById("idt");
	var ssaist = document.getElementById("ssaist");
	var sscist = document.getElementById("sscist");
	var sskist = document.getElementById("sskist");
	var sfaist = document.getElementById("sfaist");
	var sfcist = document.getElementById("sfcist");
	var sfkist = document.getElementById("sfkist");
	var ssaidt = document.getElementById("ssaidt");
	var sscidt = document.getElementById("sscidt");
	var sskidt = document.getElementById("sskidt");
	var sfaidt = document.getElementById("sfaidt");
	var sfcidt = document.getElementById("sfcidt");
	var sfkidt = document.getElementById("sfkidt");
	var w = window.innerWidth;
	ssaist.style.display = "none";
	sscist.style.display = "none";
	sskist.style.display = "none";
	sfaist.style.display = "none";
	sfcist.style.display = "none";
	sfkist.style.display = "none";
	ssaidt.style.display = "none";
	sscidt.style.display = "none";
	sskidt.style.display = "none";
	sfaidt.style.display = "none";
	sfcidt.style.display = "none";
	sfkidt.style.display = "none";
	idt.style.display = "none";
	ist.style.display = "block";
	imo.style.display = "none";
	iwe.style.display = "none";
	ith.style.display = "none";
	ifr.style.display = "none";
	isa.style.display = "none";
	itu.style.display = "none";
	isu.style.display = "block";
		  if(w<480){
		ist.style.display = "none";
	ssaist.style.display = "block";
	sscist.style.display = "block";
	sskist.style.display = "block";
	sfaist.style.display = "block";
	sfcist.style.display = "block";
	sfkist.style.display = "block";
	}
}

	  function showParaIMo(){
	var isu = document.getElementById("isu");
	var imo = document.getElementById("imo");
 	var itu = document.getElementById("itu");
	var iwe = document.getElementById("iwe");
	var ith = document.getElementById("ith");
	var ifr = document.getElementById("ifr");
	var isa = document.getElementById("isa");
	var ist = document.getElementById("ist");
	var idt = document.getElementById("idt");
	var ssaist = document.getElementById("ssaist");
	var sscist = document.getElementById("sscist");
	var sskist = document.getElementById("sskist");
	var sfaist = document.getElementById("sfaist");
	var sfcist = document.getElementById("sfcist");
	var sfkist = document.getElementById("sfkist");
	var ssaidt = document.getElementById("ssaidt");
	var sscidt = document.getElementById("sscidt");
	var sskidt = document.getElementById("sskidt");
	var sfaidt = document.getElementById("sfaidt");
	var sfcidt = document.getElementById("sfcidt");
	var sfkidt = document.getElementById("sfkidt");
	var w = window.innerWidth;
	ssaist.style.display = "none";
	sscist.style.display = "none";
	sskist.style.display = "none";
	sfaist.style.display = "none";
	sfcist.style.display = "none";
	sfkist.style.display = "none";
	ssaidt.style.display = "none";
	sscidt.style.display = "none";
	sskidt.style.display = "none";
	sfaidt.style.display = "none";
	sfcidt.style.display = "none";
	sfkidt.style.display = "none";
	ist.style.display = "none";
	idt.style.display = "block";
	isu.style.display = "none";
	iwe.style.display = "none";
	ith.style.display = "none";
	ifr.style.display = "none";
	isa.style.display = "none";
	itu.style.display = "none";
	imo.style.display = "block";
		   if(w<480){
		idt.style.display = "none";
	ssaidt.style.display = "block";
	sscidt.style.display = "block";
	sskidt.style.display = "block";
	sfaidt.style.display = "block";
	sfcidt.style.display = "block";
	sfkidt.style.display = "block";
	}
		}
	  
	  function showParaITu(){
	var isu = document.getElementById("isu");
	var imo = document.getElementById("imo");
 	var itu = document.getElementById("itu");
	var iwe = document.getElementById("iwe");
	var ith = document.getElementById("ith");
	var ifr = document.getElementById("ifr");
	var isa = document.getElementById("isa");
	var ist = document.getElementById("ist");
	var idt = document.getElementById("idt");
	var ssaist = document.getElementById("ssaist");
	var sscist = document.getElementById("sscist");
	var sskist = document.getElementById("sskist");
	var sfaist = document.getElementById("sfaist");
	var sfcist = document.getElementById("sfcist");
	var sfkist = document.getElementById("sfkist");
	var ssaidt = document.getElementById("ssaidt");
	var sscidt = document.getElementById("sscidt");
	var sskidt = document.getElementById("sskidt");
	var sfaidt = document.getElementById("sfaidt");
	var sfcidt = document.getElementById("sfcidt");
	var sfkidt = document.getElementById("sfkidt");
	var w = window.innerWidth;
	ssaist.style.display = "none";
	sscist.style.display = "none";
	sskist.style.display = "none";
	sfaist.style.display = "none";
	sfcist.style.display = "none";
	sfkist.style.display = "none";
	ssaidt.style.display = "none";
	sscidt.style.display = "none";
	sskidt.style.display = "none";
	sfaidt.style.display = "none";
	sfcidt.style.display = "none";
	sfkidt.style.display = "none";
	idt.style.display = "none";
	ist.style.display = "block";
	isu.style.display = "none";
	imo.style.display = "none"; 
	iwe.style.display = "none";
	ith.style.display = "none";
	ifr.style.display = "none";
	isa.style.display = "none";
	itu.style.display = "block";
	if(w<480){
	ist.style.display = "none";
	ssaist.style.display = "block";
	sscist.style.display = "block";
	sskist.style.display = "block";
	sfaist.style.display = "block";
	sfcist.style.display = "block";
	sfkist.style.display = "block";
	}
	}

	   function showParaIWe(){
	var isu = document.getElementById("isu");
	var imo = document.getElementById("imo");
 	var itu = document.getElementById("itu");
	var iwe = document.getElementById("iwe");
	var ith = document.getElementById("ith");
	var ifr = document.getElementById("ifr");
	var isa = document.getElementById("isa");
	var ist = document.getElementById("ist");
	var idt = document.getElementById("idt");
	var ssaist = document.getElementById("ssaist");
	var sscist = document.getElementById("sscist");
	var sskist = document.getElementById("sskist");
	var sfaist = document.getElementById("sfaist");
	var sfcist = document.getElementById("sfcist");
	var sfkist = document.getElementById("sfkist");
	var ssaidt = document.getElementById("ssaidt");
	var sscidt = document.getElementById("sscidt");
	var sskidt = document.getElementById("sskidt");
	var sfaidt = document.getElementById("sfaidt");
	var sfcidt = document.getElementById("sfcidt");
	var sfkidt = document.getElementById("sfkidt");
	var w = window.innerWidth;
	ssaist.style.display = "none";
	sscist.style.display = "none";
	sskist.style.display = "none";
	sfaist.style.display = "none";
	sfcist.style.display = "none";
	sfkist.style.display = "none";
	ssaidt.style.display = "none";
	sscidt.style.display = "none";
	sskidt.style.display = "none";
	sfaidt.style.display = "none";
	sfcidt.style.display = "none";
	sfkidt.style.display = "none";
	idt.style.display = "none";
	ist.style.display = "block";
	isu.style.display = "none";
	imo.style.display = "none"; 
	ith.style.display = "none";
	ifr.style.display = "none";
	isa.style.display = "none";
	itu.style.display = "none";
	iwe.style.display = "block";
	  if(w<480){
		ist.style.display = "none";
	ssaist.style.display = "block";
	sscist.style.display = "block";
	sskist.style.display = "block";
	sfaist.style.display = "block";
	sfcist.style.display = "block";
	sfkist.style.display = "block";
	}
		}

	function showParaITh(){
	var isu = document.getElementById("isu");
	var imo = document.getElementById("imo");
 	var itu = document.getElementById("itu");
	var iwe = document.getElementById("iwe");
	var ith = document.getElementById("ith");
	var ifr = document.getElementById("ifr");
	var isa = document.getElementById("isa");
	var ist = document.getElementById("ist");
	var idt = document.getElementById("idt");
	var ssaist = document.getElementById("ssaist");
	var sscist = document.getElementById("sscist");
	var sskist = document.getElementById("sskist");
	var sfaist = document.getElementById("sfaist");
	var sfcist = document.getElementById("sfcist");
	var sfkist = document.getElementById("sfkist");
	var ssaidt = document.getElementById("ssaidt");
	var sscidt = document.getElementById("sscidt");
	var sskidt = document.getElementById("sskidt");
	var sfaidt = document.getElementById("sfaidt");
	var sfcidt = document.getElementById("sfcidt");
	var sfkidt = document.getElementById("sfkidt");
	var w = window.innerWidth;
	ssaist.style.display = "none";
	sscist.style.display = "none";
	sskist.style.display = "none";
	sfaist.style.display = "none";
	sfcist.style.display = "none";
	sfkist.style.display = "none";
	ssaidt.style.display = "none";
	sscidt.style.display = "none";
	sskidt.style.display = "none";
	sfaidt.style.display = "none";
	sfcidt.style.display = "none";
	sfkidt.style.display = "none";
	idt.style.display = "none";
	ist.style.display = "block";
	isu.style.display = "none";
	imo.style.display = "none"; 
	ifr.style.display = "none";
	isa.style.display = "none";
	itu.style.display = "none";
	iwe.style.display = "none";
	ith.style.display = "block";
	  if(w<480){
		ist.style.display = "none";
	ssaist.style.display = "block";
	sscist.style.display = "block";
	sskist.style.display = "block";
	sfaist.style.display = "block";
	sfcist.style.display = "block";
	sfkist.style.display = "block";
	}
	}

	function showParaIFr(){
	var isu = document.getElementById("isu");
	var imo = document.getElementById("imo");
 	var itu = document.getElementById("itu");
	var iwe = document.getElementById("iwe");
	var ith = document.getElementById("ith");
	var ifr = document.getElementById("ifr");
	var isa = document.getElementById("isa");
	var ist = document.getElementById("ist");
	var idt = document.getElementById("idt");
	var ssaist = document.getElementById("ssaist");
	var sscist = document.getElementById("sscist");
	var sskist = document.getElementById("sskist");
	var sfaist = document.getElementById("sfaist");
	var sfcist = document.getElementById("sfcist");
	var sfkist = document.getElementById("sfkist");
	var ssaidt = document.getElementById("ssaidt");
	var sscidt = document.getElementById("sscidt");
	var sskidt = document.getElementById("sskidt");
	var sfaidt = document.getElementById("sfaidt");
	var sfcidt = document.getElementById("sfcidt");
	var sfkidt = document.getElementById("sfkidt");
	var w = window.innerWidth;
	ssaist.style.display = "none";
	sscist.style.display = "none";
	sskist.style.display = "none";
	sfaist.style.display = "none";
	sfcist.style.display = "none";
	sfkist.style.display = "none";
	ssaidt.style.display = "none";
	sscidt.style.display = "none";
	sskidt.style.display = "none";
	sfaidt.style.display = "none";
	sfcidt.style.display = "none";
	sfkidt.style.display = "none";
	idt.style.display = "none";
	ist.style.display = "block";
	isu.style.display = "none";
	imo.style.display = "none"; 
	isa.style.display = "none";
	itu.style.display = "none";
	iwe.style.display = "none";
	ith.style.display = "none";
	ifr.style.display = "block";
	  if(w<480){
		ist.style.display = "none";
	ssaist.style.display = "block";
	sscist.style.display = "block";
	sskist.style.display = "block";
	sfaist.style.display = "block";
	sfcist.style.display = "block";
	sfkist.style.display = "block";
	}
		}

	function showParaISa(){
	var isu = document.getElementById("isu");
	var imo = document.getElementById("imo");
 	var itu = document.getElementById("itu");
	var iwe = document.getElementById("iwe");
	var ith = document.getElementById("ith");
	var ifr = document.getElementById("ifr");
	var isa = document.getElementById("isa");
	var ist = document.getElementById("ist");
	var idt = document.getElementById("idt");
	var ssaist = document.getElementById("ssaist");
	var sscist = document.getElementById("sscist");
	var sskist = document.getElementById("sskist");
	var sfaist = document.getElementById("sfaist");
	var sfcist = document.getElementById("sfcist");
	var sfkist = document.getElementById("sfkist");
	var ssaidt = document.getElementById("ssaidt");
	var sscidt = document.getElementById("sscidt");
	var sskidt = document.getElementById("sskidt");
	var sfaidt = document.getElementById("sfaidt");
	var sfcidt = document.getElementById("sfcidt");
	var sfkidt = document.getElementById("sfkidt");
	var w = window.innerWidth;
	ssaist.style.display = "none";
	sscist.style.display = "none";
	sskist.style.display = "none";
	sfaist.style.display = "none";
	sfcist.style.display = "none";
	sfkist.style.display = "none";
	ssaidt.style.display = "none";
	sscidt.style.display = "none";
	sskidt.style.display = "none";
	sfaidt.style.display = "none";
	sfcidt.style.display = "none";
	sfkidt.style.display = "none";
	idt.style.display = "none";
	ist.style.display = "block";
	isu.style.display = "none";
	imo.style.display = "none"; 
	itu.style.display = "none";
	iwe.style.display = "none";
	ith.style.display = "none";
	ifr.style.display = "none";
	isa.style.display = "block";
	  if(w<480){
		ist.style.display = "none";
	ssaist.style.display = "block";
	sscist.style.display = "block";
	sskist.style.display = "block";
	sfaist.style.display = "block";
	sfcist.style.display = "block";
	sfkist.style.display = "block";
	}
	 }
	  //end ij
	  
	  //start op
function showParaOSu(){
	var osu = document.getElementById("osu");
	var omo = document.getElementById("omo");
 	var otu = document.getElementById("otu");
	var owe = document.getElementById("owe");
	var oth = document.getElementById("oth");
	var ofr = document.getElementById("ofr");
	var osa = document.getElementById("osa");
	var ost = document.getElementById("ost");
	var odt = document.getElementById("odt");
	var ssaost = document.getElementById("ssaost");
	var sscost = document.getElementById("sscost");
	var sskost = document.getElementById("sskost");
	var sfaost = document.getElementById("sfaost");
	var sfcost = document.getElementById("sfcost");
	var sfkost = document.getElementById("sfkost");
	var ssaodt = document.getElementById("ssaodt");
	var sscodt = document.getElementById("sscodt");
	var sskodt = document.getElementById("sskodt");
	var sfaodt = document.getElementById("sfaodt");
	var sfcodt = document.getElementById("sfcodt");
	var sfkodt = document.getElementById("sfkodt");
	var w = window.innerWidth;
	ssaost.style.display = "none";
	sscost.style.display = "none";
	sskost.style.display = "none";
	sfaost.style.display = "none";
	sfcost.style.display = "none";
	sfkost.style.display = "none";
	ssaodt.style.display = "none";
	sscodt.style.display = "none";
	sskodt.style.display = "none";
	sfaodt.style.display = "none";
	sfcodt.style.display = "none";
	sfkodt.style.display = "none";
	odt.style.display = "none";
	ost.style.display = "block";
	omo.style.display = "none";
	owe.style.display = "none";
	oth.style.display = "none";
	ofr.style.display = "none";
	osa.style.display = "none";
	otu.style.display = "none";
	osu.style.display = "block";
	  if(w<480){
		ost.style.display = "none";
	ssaost.style.display = "block";
	sscost.style.display = "block";
	sskost.style.display = "block";
	sfaost.style.display = "block";
	sfcost.style.display = "block";
	sfkost.style.display = "block";
	}
}

	  function showParaOMo(){
	var osu = document.getElementById("osu");
	var omo = document.getElementById("omo");
 	var otu = document.getElementById("otu");
	var owe = document.getElementById("owe");
	var oth = document.getElementById("oth");
	var ofr = document.getElementById("ofr");
	var osa = document.getElementById("osa");
	var ost = document.getElementById("ost");
	var odt = document.getElementById("odt");
	var w = window.innerWidth;
	ost.style.display = "none";
	odt.style.display = "block";
	osu.style.display = "none";
	owe.style.display = "none";
	oth.style.display = "none";
	ofr.style.display = "none";
	osa.style.display = "none";
	otu.style.display = "none";
	omo.style.display = "block";
		   if(w<480){
		odt.style.display = "none";
	ssaodt.style.display = "block";
	sscodt.style.display = "block";
	sskodt.style.display = "block";
	sfaodt.style.display = "block";
	sfcodt.style.display = "block";
	sfkodt.style.display = "block";
	}
		}
	  
	  function showParaOTu(){
	var osu = document.getElementById("osu");
	var omo = document.getElementById("omo");
 	var otu = document.getElementById("otu");
	var owe = document.getElementById("owe");
	var oth = document.getElementById("oth");
	var ofr = document.getElementById("ofr");
	var osa = document.getElementById("osa");
	var ost = document.getElementById("ost");
	var odt = document.getElementById("odt");
	var w = window.innerWidth;
	odt.style.display = "none";
	ost.style.display = "block";
	osu.style.display = "none";
	omo.style.display = "none"; 
	owe.style.display = "none";
	oth.style.display = "none";
	ofr.style.display = "none";
	osa.style.display = "none";
	otu.style.display = "block";
	if(w<480){
	ost.style.display = "none";
	ssaost.style.display = "block";
	sscost.style.display = "block";
	sskost.style.display = "block";
	sfaost.style.display = "block";
	sfcost.style.display = "block";
	sfkost.style.display = "block";
	}
		}

	   function showParaOWe(){
	var osu = document.getElementById("osu");
	var omo = document.getElementById("omo");
 	var otu = document.getElementById("otu");
	var owe = document.getElementById("owe");
	var oth = document.getElementById("oth");
	var ofr = document.getElementById("ofr");
	var osa = document.getElementById("osa");
	var ost = document.getElementById("ost");
	var odt = document.getElementById("odt");
	var w = window.innerWidth;
	odt.style.display = "none";
	ost.style.display = "block";
	osu.style.display = "none";
	omo.style.display = "none"; 
	oth.style.display = "none";
	ofr.style.display = "none";
	osa.style.display = "none";
	otu.style.display = "none";
	owe.style.display = "block";
	 if(w<480){
		ost.style.display = "none";
	ssaost.style.display = "block";
	sscost.style.display = "block";
	sskost.style.display = "block";
	sfaost.style.display = "block";
	sfcost.style.display = "block";
	sfkost.style.display = "block";
	}
		}

	function showParaOTh(){
	var osu = document.getElementById("osu");
	var omo = document.getElementById("omo");
 	var otu = document.getElementById("otu");
	var owe = document.getElementById("owe");
	var oth = document.getElementById("oth");
	var ofr = document.getElementById("ofr");
	var osa = document.getElementById("osa");
	var ost = document.getElementById("ost");
	var odt = document.getElementById("odt");
	var w = window.innerWidth;
	odt.style.display = "none";
	ost.style.display = "block";
	osu.style.display = "none";
	omo.style.display = "none"; 
	ofr.style.display = "none";
	osa.style.display = "none";
	otu.style.display = "none";
	owe.style.display = "none";
	oth.style.display = "block";
	 if(w<480){
		ost.style.display = "none";
	ssaost.style.display = "block";
	sscost.style.display = "block";
	sskost.style.display = "block";
	sfaost.style.display = "block";
	sfcost.style.display = "block";
	sfkost.style.display = "block";
	}
		}

	       function showParaOFr(){
	var osu = document.getElementById("osu");
	var omo = document.getElementById("omo");
 	var otu = document.getElementById("otu");
	var owe = document.getElementById("owe");
	var oth = document.getElementById("oth");
	var ofr = document.getElementById("ofr");
	var osa = document.getElementById("osa");
	var ost = document.getElementById("ost");
	var odt = document.getElementById("odt");
	var w = window.innerWidth;
	odt.style.display = "none";
	ost.style.display = "block";
	osu.style.display = "none";
	omo.style.display = "none"; 
	osa.style.display = "none";
	otu.style.display = "none";
	owe.style.display = "none";
	oth.style.display = "none";
	ofr.style.display = "block";
	 if(w<480){
		ost.style.display = "none";
	ssaost.style.display = "block";
	sscost.style.display = "block";
	sskost.style.display = "block";
	sfaost.style.display = "block";
	sfcost.style.display = "block";
	sfkost.style.display = "block";
	}
		}

	   function showParaOSa(){
	var osu = document.getElementById("osu");
	var omo = document.getElementById("omo");
 	var otu = document.getElementById("otu");
	var owe = document.getElementById("owe");
	var oth = document.getElementById("oth");
	var ofr = document.getElementById("ofr");
	var osa = document.getElementById("osa");
	var ost = document.getElementById("ost");
	var odt = document.getElementById("odt");
	var w = window.innerWidth;
	odt.style.display = "none";
	ost.style.display = "block";
	osu.style.display = "none";
	omo.style.display = "none"; 
	otu.style.display = "none";
	owe.style.display = "none";
	oth.style.display = "none";
	ofr.style.display = "none";
	osa.style.display = "block";
	 if(w<480){
	ost.style.display = "none";
	ssaost.style.display = "block";
	sscost.style.display = "block";
	sskost.style.display = "block";
	sfaost.style.display = "block";
	sfcost.style.display = "block";
	sfkost.style.display = "block";
	}
	   }
	  //end op
	  </script>

          
          
    <!--end responsive!-->

   
=======
    <title>Lunardo - <?= $title ?></title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= $lastModTime ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <div>Put company logo and name here</div>
    </header>

    <nav>
      <div>Put website navigation links here</div>
    </nav>

    <main>
      <article id='Website Under Construction'>
    <!-- Creative Commons image sourced from https://pixabay.com/en/maintenance-under-construction-2422173/ and used for educational purposes only -->
        <img src='../../media/website-under-construction.png' alt='Website Under Construction' />
      </article>
    </main>
    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
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

>>>>>>> 61574f6a06bbf021cbaee39a979b055303f92af1
  </body>
</html>
