
  //Script for changing Individual display images
  function pictureChangeFirstNC() {
    document.getElementById("indi-display-img").src="../img/Updated-Advanced-Packaging/NSC.ADV.NC.BottleAndCarton.HR.CMYK.V1.png";
    }
  function pictureChangeSecondNC() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Night-Cream-Smear.jpg";
    }
  function pictureChangeThirdNC() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Night-Cream-Drug-Facts.jpg";
    }


  function pictureChangeFirstDC() {
    document.getElementById("indi-display-img").src="../img/Updated-Advanced-Packaging/NSC.ADV.DC.BottleAndCarton.HR.CMYK.V1.png";
    }
  function pictureChangeSecondDC() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Day-Cream-Smear.jpg";
    }
  function pictureChangeThirdDC() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-DayCream-Drug-Facts.jpg";
    }


  function pictureChangeFirstBody() {
    document.getElementById("indi-display-img").src="../img/Updated-Advanced-Packaging/1800x2160-NSC.ADV.BF.Tube.Carton.Front.200ml.png";
    }
  function pictureChangeSecondBody() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Body-Firm-Smear.jpg";
    }
  function pictureChangeThirdBody() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Body-Firm-Drug-Facts.jpg";
    }


  function pictureChangeFirstPS() {
    document.getElementById("indi-display-img").src="../img/TL-packaging-web/1800x2160-Psoriasis-Bottle-Carton-Shadow.jpg";
    }
  function pictureChangeSecondPS() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Psoriasis-Smear.jpg";
    }
  function pictureChangeThirdPS() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Psoriasis-Drug-Facts.jpg";
    }


  function pictureChangeFirstDermal() {
    document.getElementById("indi-display-img").src="../img/TL-packaging-web/1800x2160-Dermal-Bottle-Carton-Shadow.jpg";
    }
  function pictureChangeSecondDermal() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Dermal-Smear.jpg";
    }
  function pictureChangeThirdDermal() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Dermal-Drug-Facts.jpg";
    }


  function pictureChangeFirstCS() {
    document.getElementById("indi-display-img").src="../img/TL-packaging-web/1800x2160-Cold-Sore-Lip-Bottle-Carton-Shadow.jpg";
    }
  function pictureChangeSecondCS() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Cold-Sore-Lip-Smear.jpg";
    }
  function pictureChangeThirdCS() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Cold-Sore-Lip-Drug-Facts.jpg";
    }


  function pictureChangeSecond() {
    document.getElementById("indi-display-img").src="../img/nc-indi-display2.jpg";
    }
  function pictureChangeThird() {
    document.getElementById("indi-display-img").src="../img/nc-indi-display3.jpg";
    }

  //Script for changing indi-sub sections
    $(document).ready(function(){
        $("#details").click(function(){
            $("#details-text").show();
            $("#recommended-text").hide();
            $("#howTo-text").hide();
            $("#ingredients-text").hide();
            $("#details-bullet").show();
            $("#recommended-bullet").hide();
            $("#howTo-bullet").hide();
            $("#ingredients-bullet").hide();
        });
        $("#recommended").click(function(){
            $("#details-text").hide();
            $("#recommended-text").show();
            $("#howTo-text").hide();
            $("#ingredients-text").hide();
            $("#details-bullet").hide();
            $("#recommended-bullet").show();
            $("#howTo-bullet").hide();
            $("#ingredients-bullet").hide();
            
        });
        $("#howTo").click(function(){
            $("#details-text").hide();
            $("#recommended-text").hide();
            $("#howTo-text").show();
            $("#ingredients-text").hide();
            $("#details-bullet").hide();
            $("#recommended-bullet").hide();
            $("#howTo-bullet").show();
            $("#ingredients-bullet").hide();
        });
        $("#ingredients").click(function(){
            $("#details-text").hide();
            $("#recommended-text").hide();
            $("#howTo-text").hide();
            $("#ingredients-text").show();
            $("#details-bullet").hide();
            $("#recommended-bullet").hide();
            $("#howTo-bullet").hide();
            $("#ingredients-bullet").show();
        });
    });

        //Script for changing More About - sub sections
        $(document).ready(function(){
          $("#story-nav").click(function(){
              $("#story-text").show();
              $("#products-text").hide();
              $("#farms-text").hide();
              $("#philosophy-text").hide();
              $("#ingredients-text").hide();
              $("#leadership-text").hide();
          });
          $("#products-nav").click(function(){
            $("#story-text").hide();
            $("#products-text").show();
            $("#farms-text").hide();
            $("#philosophy-text").hide();
            $("#ingredients-text").hide();
            $("#leadership-text").hide();
          });
          $("#farms-nav").click(function(){
            $("#story-text").hide();
            $("#products-text").hide();
            $("#farms-text").show();
            $("#philosophy-text").hide();
            $("#ingredients-text").hide();
            $("#leadership-text").hide();
          });
          $("#philosophy-nav").click(function(){
            $("#story-text").hide();
            $("#products-text").hide();
            $("#farms-text").hide();
            $("#philosophy-text").show();
            $("#ingredients-text").hide();
            $("#leadership-text").hide();
          });
          $("#ingredients-nav").click(function(){
            $("#story-text").hide();
            $("#products-text").hide();
            $("#farms-text").hide();
            $("#philosophy-text").hide();
            $("#ingredients-text").show();
            $("#leadership-text").hide();
          });
          $("#leadership-nav").click(function(){
            $("#story-text").hide();
            $("#products-text").hide();
            $("#farms-text").hide();
            $("#philosophy-text").hide();
            $("#ingredients-text").hide();
            $("#leadership-text").show();
          });
      });
      //Script to make more-about page banner change per subject clicked with a fade out/in 
      var eOutIn = document.querySelector('#elementOutIn');

        function fadeOutIn(){
            // Fade out
            eOutIn.style.opacity = 0;
            // Fade in 
            setTimeout(function(){ 
                eOutIn.style.opacity = 0.1;
            },50);
            setTimeout(function(){ 
                eOutIn.style.opacity = 0.2;
            },100);
            setTimeout(function(){ 
                eOutIn.style.opacity = 0.3;
            },150);
            setTimeout(function(){ 
                eOutIn.style.opacity = 0.4;
            },200);
            setTimeout(function(){ 
                eOutIn.style.opacity = 0.5;
            },250);
            setTimeout(function(){ 
                eOutIn.style.opacity = 0.6;
            },300);
            setTimeout(function(){ 
                eOutIn.style.opacity = 0.7;
            },350);
            setTimeout(function(){ 
                eOutIn.style.opacity = 0.8;
            },400);
            setTimeout(function(){ 
                eOutIn.style.opacity = 0.9;
            },450);
            setTimeout(function(){ 
                eOutIn.style.opacity = 1;
            },500);
        }

        var currentBanner = 1;

        var mobileImg = "";
        var desktopImg = "";
        var lgDesktopImg = "";

        function bannerInnerHTML(){ document.getElementById("bannerChangeHere").innerHTML = '<img src="../img/'+ mobileImg + '" class="move-center d-block d-sm-block d-md-none" width="100%"/><img src="../img/'+ desktopImg +'" class="move-center d-none d-md-block d-lg-block d-xl-none" width="100%"/><img src="../img/'+ lgDesktopImg +'" class="banner-container move-center d-none d-xl-block" width="100%"/>';
        } 

        function bannerChange(num){
            if(num == 1){
                mobileImg = "515x278-About-Us-Main-Banner.jpg";
                desktopImg = "1366x500-About-Us-Main-Banner.jpg";
                lgDesktopImg = "1150x310-About-Us-Main-Banner.jpg";
                bannerInnerHTML();
                if(currentBanner != 1){
                    fadeOutIn();
                    currentBanner = 1;
                }
            
            } else if (num == 2){
                mobileImg = "515x278-About-Us-Products-Banner.jpg";
                desktopImg = "1366x500-About-Us-Products-Banner.jpg";
                lgDesktopImg = "1150x310-About-Us-Products-Banner.jpg";
                bannerInnerHTML();
                if(currentBanner != 2){
                    fadeOutIn();
                    currentBanner = 2;
                }

            } else if (num == 3){
                mobileImg = "515x278-Our-Story-Farm-Banner.jpg";
                desktopImg = "1366x500-Our-Story-Farm-Banner.jpg";
                lgDesktopImg = "1150x310-Our-Story-Farm-Banner.jpg";
                bannerInnerHTML();
                if(currentBanner != 3){
                    fadeOutIn();
                    currentBanner = 3;
                }

            } else if (num == 4){
                mobileImg = "515x278-About-Us-Philosophy-Banner.jpg";
                desktopImg = "1366x500-About-Us-Philosophy-Banner.jpg";
                lgDesktopImg = "1150x310-About-Us-Philosophy-Banner.jpg";
                bannerInnerHTML();
                if(currentBanner != 4){
                    fadeOutIn();
                    currentBanner = 4;
                }

            } else if (num == 5){
                mobileImg = "515x278-Our-Story-Ingredients-Banner.jpg";
                desktopImg = "1366x500-Our-Story-Ingredients-Banner.jpg";
                lgDesktopImg = "1150x310-Our-Story-Ingredients-Banner.jpg";
                bannerInnerHTML();
                if(currentBanner != 5){
                    fadeOutIn();
                    currentBanner = 5;
                }

            } else{
                mobileImg = "515x278-Our-Story-Leadership-Banner.jpg";
                desktopImg = "1366x500-Our-Story-Leadership-Banner.jpg";
                lgDesktopImg = "1150x310-Our-Story-Leadership-Banner.jpg";
                bannerInnerHTML();
                if(currentBanner != 6){
                    fadeOutIn();
                    currentBanner = 6;
                }
            }
        }

  //Script to change Plus Minus Symbols on Collapse for Indi-Mobile-Buttons  
  function btnMinusPlusChange() {
    const isMinus = this.dataset.isminus;
    const el = this.getElementsByClassName('minusPlus')[0];

    if (isMinus == "false") {
      el.innerText = "-";
      this.dataset.isminus = "true";
    } else {
      el.innerText = "+";
      this.dataset.isminus = "false";
    }
  }

  const buttons = document.getElementsByClassName('myButton');

  Array.from(buttons).forEach(button => {
      button.addEventListener('click', btnMinusPlusChange);
  });
