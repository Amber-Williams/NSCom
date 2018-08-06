
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
    document.getElementById("indi-display-img").src="../img/TL-packaging-web/Therapy.Psoriasis.Group-WithBox-SMALL.jpg";
    }
  function pictureChangeSecondPS() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Psoriasis-Smear.jpg";
    }
  function pictureChangeThirdPS() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Psoriasis-Drug-Facts.jpg";
    }


  function pictureChangeFirstDermal() {
    document.getElementById("indi-display-img").src="../img/TL-packaging-web/Therapy.Dermal.Group-SMALL.jpg";
    }
  function pictureChangeSecondDermal() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Dermal-Smear.jpg";
    }
  function pictureChangeThirdDermal() {
    document.getElementById("indi-display-img").src="../img/indi-stuff/1800x2160-Dermal-Drug-Facts.jpg";
    }


  function pictureChangeFirstCS() {
    document.getElementById("indi-display-img").src="../img/TL-packaging-web/Therapy.CS.LM.Dual.Group-SMALL.jpg";
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
