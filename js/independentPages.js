
  //Script for changing display images
  function pictureChangeFirst() {
    document.getElementById("indi-display-img").src="../img/Updated-Advanced-Packaging/NSC.ADV.NC.BottleAndCarton.HR.CMYK.V1.png";
    }
  function pictureChangeFirstDC() {
    document.getElementById("indi-display-img").src="../img/Updated-Advanced-Packaging/NSC.ADV.DC.BottleAndCarton.HR.CMYK.V1.png";
    }
  function pictureChangeFirstBody() {
    document.getElementById("indi-display-img").src="../img/Updated-Advanced-Packaging/1800x2160-NSC.ADV.BF.Tube.Carton.Front.200ml.png";
    }
  function pictureChangeFirstPS() {
    document.getElementById("indi-display-img").src="../img/TL-packaging-web/Therapy.Psoriasis.Group-WithBox-SMALL.jpg";
    }
  function pictureChangeFirstDermal() {
    document.getElementById("indi-display-img").src="../img/TL-packaging-web/Therapy.Dermal.Group-SMALL.jpg";
    }
  function pictureChangeFirstCS() {
    document.getElementById("indi-display-img").src="../img/TL-packaging-web/Therapy.CS.LM.Dual.Group-SMALL.jpg";
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

