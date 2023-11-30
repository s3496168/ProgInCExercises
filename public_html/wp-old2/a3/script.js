/* Insert your javascript here */
<<<<<<< HEAD
/*a2 script-index.php*/
// Attach a click event listener to button 2

/*a2 script-booking page*/
// barbie
function showParaBSu() {
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
    if (w < 480) {
        bst.style.display = "none";
        ssabst.style.display = "block";
        sscbst.style.display = "block";
        sskbst.style.display = "block";
        sfabst.style.display = "block";
        sfcbst.style.display = "block";
        sfkbst.style.display = "block";
    }
}

/*test*/
/*a2 script-booking page*/
// barbie
function showParaBarbie(one_two_three_four) {
    alert("More Barbie!");
    var w = window.innerWidth;
    if (w < 480) {
    }

     // split the parameter product-variant into product and variant
    let pvArr = one_two_three_four.split("_");
   // console.log(pvArr);
    let one = pvArr[1];
    let two = pvArr[2];
    let three = pvArr[3];
    console.log("One: "+one);
    console.log("Two: "+two);
    console.log("Three: "+three);
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
    if(three==="discprice"){
        console.log("It does!");
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
         console.log("It does! not");
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
document.getElementById("movieTime").innerHTML = three;
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

function showParaBMo() {
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

function showParaBTu() {
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

function showParaBWe() {
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
    if (w < 480) {
        bdt.style.display = "none";
        ssabdt.style.display = "block";
        sscbdt.style.display = "block";
        sskbdt.style.display = "block";
        sfabdt.style.display = "block";
        sfcbdt.style.display = "block";
        sfkbdt.style.display = "block";
    }
}

function showParaBTh() {
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
    if (w < 480) {
        bdt.style.display = "none";
        ssabdt.style.display = "block";
        sscbdt.style.display = "block";
        sskbdt.style.display = "block";
        sfabdt.style.display = "block";
        sfcbdt.style.display = "block";
        sfkbdt.style.display = "block";
    }
}

function showParaBFr() {
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
    if (w < 480) {
        bdt.style.display = "none";
        ssabdt.style.display = "block";
        sscbdt.style.display = "block";
        sskbdt.style.display = "block";
        sfabdt.style.display = "block";
        sfcbdt.style.display = "block";
        sfkbdt.style.display = "block";
    }
}

function showParaBSa() {
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
    if (w < 480) {
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
// tmnt
function showParaTSu() {
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
    if (w < 480) {
        tst.style.display = "none";
        ssatst.style.display = "block";
        ssctst.style.display = "block";
        ssktst.style.display = "block";
        sfatst.style.display = "block";
        sfctst.style.display = "block";
        sfktst.style.display = "block";
    }
}

function showParaTMo() {
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
    if (w < 480) {
        tdt.style.display = "none";
        ssatdt.style.display = "block";
        ssctdt.style.display = "block";
        ssktdt.style.display = "block";
        sfatdt.style.display = "block";
        sfctdt.style.display = "block";
        sfktdt.style.display = "block";
    }
}

function showParaTTu() {
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
    if (w < 480) {
        tst.style.display = "none";
        ssatst.style.display = "block";
        ssctst.style.display = "block";
        ssktst.style.display = "block";
        sfatst.style.display = "block";
        sfctst.style.display = "block";
        sfktst.style.display = "block";
    }
}

function showParaTWe() {
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
    if (w < 480) {
        tst.style.display = "none";
        ssatst.style.display = "block";
        ssctst.style.display = "block";
        ssktst.style.display = "block";
        sfatst.style.display = "block";
        sfctst.style.display = "block";
        sfktst.style.display = "block";
    }
}

function showParaTTh() {
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
    if (w < 480) {
        tst.style.display = "none";
        ssatst.style.display = "block";
        ssctst.style.display = "block";
        ssktst.style.display = "block";
        sfatst.style.display = "block";
        sfctst.style.display = "block";
        sfktst.style.display = "block";
    }
}

function showParaTFr() {
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
    if (w < 480) {
        tst.style.display = "none";
        ssatst.style.display = "block";
        ssctst.style.display = "block";
        ssktst.style.display = "block";
        sfatst.style.display = "block";
        sfctst.style.display = "block";
        sfktst.style.display = "block";
    }
}

function showParaTSa() {
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
    if (w < 480) {
        tst.style.display = "none";
        ssatst.style.display = "block";
        ssctst.style.display = "block";
        ssktst.style.display = "block";
        sfatst.style.display = "block";
        sfctst.style.display = "block";
        sfktst.style.display = "block";
    }
}
// end tmnt

// ij
function showParaISu() {
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
    if (w < 480) {
        ist.style.display = "none";
        ssaist.style.display = "block";
        sscist.style.display = "block";
        sskist.style.display = "block";
        sfaist.style.display = "block";
        sfcist.style.display = "block";
        sfkist.style.display = "block";
    }
}

function showParaIMo() {
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
    if (w < 480) {
        idt.style.display = "none";
        ssaidt.style.display = "block";
        sscidt.style.display = "block";
        sskidt.style.display = "block";
        sfaidt.style.display = "block";
        sfcidt.style.display = "block";
        sfkidt.style.display = "block";
    }
}

function showParaITu() {
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
    if (w < 480) {
        ist.style.display = "none";
        ssaist.style.display = "block";
        sscist.style.display = "block";
        sskist.style.display = "block";
        sfaist.style.display = "block";
        sfcist.style.display = "block";
        sfkist.style.display = "block";
    }
}

function showParaIWe() {
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
    if (w < 480) {
        ist.style.display = "none";
        ssaist.style.display = "block";
        sscist.style.display = "block";
        sskist.style.display = "block";
        sfaist.style.display = "block";
        sfcist.style.display = "block";
        sfkist.style.display = "block";
    }
}

function showParaITh() {
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
    if (w < 480) {
        ist.style.display = "none";
        ssaist.style.display = "block";
        sscist.style.display = "block";
        sskist.style.display = "block";
        sfaist.style.display = "block";
        sfcist.style.display = "block";
        sfkist.style.display = "block";
    }
}

function showParaIFr() {
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
    if (w < 480) {
        ist.style.display = "none";
        ssaist.style.display = "block";
        sscist.style.display = "block";
        sskist.style.display = "block";
        sfaist.style.display = "block";
        sfcist.style.display = "block";
        sfkist.style.display = "block";
    }
}

function showParaISa() {
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
    if (w < 480) {
        ist.style.display = "none";
        ssaist.style.display = "block";
        sscist.style.display = "block";
        sskist.style.display = "block";
        sfaist.style.display = "block";
        sfcist.style.display = "block";
        sfkist.style.display = "block";
    }
}
// end ij

// start op
function showParaOSu() {
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
    if (w < 480) {
        ost.style.display = "none";
        ssaost.style.display = "block";
        sscost.style.display = "block";
        sskost.style.display = "block";
        sfaost.style.display = "block";
        sfcost.style.display = "block";
        sfkost.style.display = "block";
    }
}

function showParaOMo() {
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
    if (w < 480) {
        odt.style.display = "none";
        ssaodt.style.display = "block";
        sscodt.style.display = "block";
        sskodt.style.display = "block";
        sfaodt.style.display = "block";
        sfcodt.style.display = "block";
        sfkodt.style.display = "block";
    }
}

function showParaOTu() {
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
    if (w < 480) {
        ost.style.display = "none";
        ssaost.style.display = "block";
        sscost.style.display = "block";
        sskost.style.display = "block";
        sfaost.style.display = "block";
        sfcost.style.display = "block";
        sfkost.style.display = "block";
    }
}

function showParaOWe() {
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
    ost.style.display = "none";
    osu.style.display = "none";
    omo.style.display = "none";
    oth.style.display = "none";
    ofr.style.display = "none";
    osa.style.display = "none";
    otu.style.display = "none";
    owe.style.display = "block";
    if (w < 480) {
        ost.style.display = "none";
        ssaost.style.display = "none";
        sscost.style.display = "none";
        sskost.style.display = "none";
        sfaost.style.display = "none";
        sfcost.style.display = "none";
        sfkost.style.display = "none";
    }
}

function showParaOTh() {
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
    ost.style.display = "none";
    osu.style.display = "none";
    omo.style.display = "none";
    ofr.style.display = "none";
    osa.style.display = "none";
    otu.style.display = "none";
    owe.style.display = "none";
    oth.style.display = "block";
    if (w < 480) {
        ost.style.display = "none";
        ssaost.style.display = "none";
        sscost.style.display = "none";
        sskost.style.display = "none";
        sfaost.style.display = "none";
        sfcost.style.display = "none";
        sfkost.style.display = "none";
    }
}

function showParaOFr() {
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
    ost.style.display = "none";
    osu.style.display = "none";
    omo.style.display = "none";
    osa.style.display = "none";
    otu.style.display = "none";
    owe.style.display = "none";
    oth.style.display = "none";
    ofr.style.display = "block";
    if (w < 480) {
        ost.style.display = "none";
        ssaost.style.display = "none";
        sscost.style.display = "none";
        sskost.style.display = "none";
        sfaost.style.display = "none";
        sfcost.style.display = "none";
        sfkost.style.display = "none";
    }
}

function showParaOSa() {
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
    if (w < 480) {
        ost.style.display = "none";
        ssaost.style.display = "block";
        sscost.style.display = "block";
        sskost.style.display = "block";
        sfaost.style.display = "block";
        sfcost.style.display = "block";
        sfkost.style.display = "block";
    }
}
// end op
/*end a2 script*/
=======
>>>>>>> 61574f6a06bbf021cbaee39a979b055303f92af1
