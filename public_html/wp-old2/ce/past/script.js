/* Insert your javascript here */
  /*server to client side code generation-thanks Trev*/

//legacy naming here...note that this only displays the days and price-here for the php
function showParaBarbie(one_two_three_four, moviesObjectJS) {
  
     // split the parameter product-variant into product and variant
    let pvArr = one_two_three_four.split("_");

    let one = pvArr[1];
    let two = pvArr[2];
    let three = pvArr[3];
    //JS array used for security reasons
    let time = moviesObjectJS[ pvArr[0] ]['screenings'][ pvArr[1] ]['time'];
    let rate = moviesObjectJS[ pvArr[0] ]['screenings'][ pvArr[1] ]['rate'];
    ///JS for altering prices
    //standard adult variables
        var paradSA = document.getElementById("paradSA");
        var paradSAmini = document.getElementById("paradSAmini");
    //concession
        var paradCon = document.getElementById("miniAdCon");
        var paradConMini = document.getElementById("miniAdCon");
    //child
        var paradparadChild = document.getElementById("paradChild");
        var paradChildMini = document.getElementById("paradChildMini");
      //First Class
     var paradFC = document.getElementById("paradFC");
      var paradFCmini = document.getElementById("paradFCmini");
      //First class concession
       var paradFCC = document.getElementById("paradFCC");
      var paradFCCmini = document.getElementById("paradFCCmini");
      //First class child
      var paradFCCH = document.getElementById("paradFCCH");
      var paradFCCHmini = document.getElementById("paradFCCHmini");
    if(rate==="discprice"){
        //Standard
        paradSA.textContent = "$16.00";
        paradSAmini.textContent = "16.00";
        //Concession
        paradCon.textContent = "$14.50";
        paradConMini.textContent = "$14.50";
        //child
         paradparadChild = "$13.00";
         paradChildMini = "$13.00";
        //First Class
        paradFC = "$25.00";
        paradFCmini = "$25.00";
        //First class concession
        paradFCC = "$23.50";
        paradFCCmini ="$23.50";
        //first class child
        paradFCCH = "$22.00"
        paradFCCHmini = "$22.00"
    }else{
        //standard
         paradSA.textContent = "$21.50";
         paradSAmini.textContent = "$21.50";
        //Concession
         paradCon.textContent = "$19.00";
         paradConMini.textContent = "$19.00";
        //child
         paradparadChild = "$17.50";
         paradChildMini = "$17.50";
         //First class
         paradFC = "$31.00";
         paradFCmini = "$31.00";
         //First class concession
         paradFCC = "$28.00";
         paradFCCmini = "$28.00";
         //First class child
        paradFCCH = "$22.00";
        paradFCCHmini = "$25.00";      
    }
    console.log("Time: "+time);
document.getElementById("movieTime").innerHTML = time;
    //total variables for loop
}

function calculatePrice(){
          let total = 0;
      let totalSeats = 0;
      let totalPrice = 0;
alert("Here");
 let day = document.querySelector('input[name="week"]:checked').value;
    
let qtys = document.querySelectorAll("select[id^='sb-']");

    //console.log("value: "+qtys.length);
     for (let a = 0; a < qtys.length; ++a)

            {

                let selectedOption = qtys[a].options[qtys[a].selectedIndex];
                 if (selectedOption && selectedOption.value !== 'Please select') {
            
                    numberOfSeats = parseInt(selectedOption.value);
              
                    if (!isNaN(numberOfSeats)) {
                  
                        if (one === "MON") {
                            alert("It's Monday!");
                          
                        } else {
                            alert(one);
                            alert("It's not Monday!");
                        
                            totalSeats += numberOfSeats;
                       
                            let zero = qtys[a].id.split("-")[0];
                            let really = qtys[a].id.split("-")[1];
                            let lazy = qtys[a].id.split("-")[2];
                         
                          console.log("really: "+ lazy);
                          let time = moviesObjectJS[ qtys[2] ]['title'];
                           

                      let unitPrice = document.getElementById(zero + "-" + really + "-" + lazy).dataset[lazy];
                            seatPrice = parseFloat(unitPrice);

                            
                            var salePrice = qtys[a].value * seatPrice;
                            totalPrice += seatPrice;
                         

                            total += salePrice;

                           
                        }
                      

                    }
                }
              
            }
          
            document.getElementById("movieTotal").innerHTML = total.toFixed(2);

            console.log(total);
        
      if (total === 0) {
                alert("Please choose your seats!");
                document.getElementById("theForm").addEventListener("click", function(event) {
                    event.preventDefault();
                })
                    return false;                                                
             }
    return true;
/*Here????*/
}
/*end test*/



//script for cards
     
        function aFunction(){
       // Attach a click event listener to button 2
        document.getElementById('BarbieBtn').addEventListener('click', function() {
            // Change the current page's URL to the new page with a parameter
           // window.location.href = 'booking.php?RMC';
             window.location.href = 'booking.php?code=RMC&movie=Barbie';
        });
        // Attach a click event listener to button 2
        document.getElementById('TmntBtn').addEventListener('click', function() {
            // Change the current page's URL to the new page with a parameter
            window.location.href = 'booking.php?code=ANM&movie=Teenage-Mutant-Ninja-Turtles';
        });
        // Attach a click event listener to button 2
        document.getElementById('IjBtn').addEventListener('click', function() {
            // Change the current page's URL to the new page with a parameter
            window.location.href = 'booking.php?code=ACT&movie=Indiana-Jones';
        });
        // Attach a click event listener to button 2
        document.getElementById('OpBtn').addEventListener('click', function() {
            // Change the current page's URL to the new page with a parameter
            window.location.href = 'booking.php?code=DRM&movie=Oppenhiemer';
        });
            }

    // function to etrieve the URL parameter
        var urlParams = new URLSearchParams(window.location.search);
        var displayCode = urlParams.get("code");
        var urlParams = new URLSearchParams(window.location.search);
    
  // validate function
        function validateData() {
            let b = document.forms["form"]["[cust][name]"].value;
            if (b == "") {
                alert("Please fill in a name");
                return false;
            }
        }

  var name = document.getElementById('name').value;
  var namepatt = /^[a-zA-Z '.\-]{1,100}$/g;
  var test = name.match(namepatt);
