<?php include('../deepPageHeader.php'); ?>
<style>
.bg-c-grey {
  background:#D3D3D3;
}
</style>
<hr class="hr-indi" />

<div class="container">
  <div class="container">

    <div class="row">
      <div class="col-sm-5 col-md-2 d-flex flex-column"> 
        <div class="p-2">
          <img src="../img/nc-indi-product1.jpg" onclick="pictureChangeFirst()"/>
        </div>
        <div class="p-2">
          <img src="../img/nc-indi-product2.jpg" onclick="pictureChangeSecond()"/>
        </div>
        <div class="p-2">
          <img src="../img/nc-indi-product3.jpg" onclick="pictureChangeThird()"/>
        </div>
      </div>
      <div class="col-sm-7 col-md-4">
        <div class="d-flex align-items-center indi-display">
          <img id="indi-display-img" src="../img/Updated-Advanced-Packaging/NSC.ADV.NC.BottleAndCarton.HR.CMYK.V1.png" width="80%"/>
        </div>
      </div>
      <div class="col-md-6">
        <h1>ADVACNED NIGHTLY FACE CREAM</h1>
        <p>30ml / 1 fl.oz</p>
        <h2>$120<h2>
        
        <h4>BENEFITS</h4>
        <ul>
          <li>Skin Protectant</li>
          <li>Fine Lines and Wrinkles</li>
          <li>Sagging Skin</li>
          <li>Restores Radiance Over-night</li>
          <li>Fights Signs of Aging</li>
          <li>Blemised and Sun Damaged Skin</li>
        </ul>
        <button>SHOPIFY BUTTON HERE</button>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
            <ul class="navigation-menu navigation-menu-indi move-center">
              <li id="details" class="text-center"><a href="#story">Details</a></li>
              <li id="recommended" class="text-center"><a href="#products">Recommended for</a></li>
              <li id="howTo" class="text-center"><a href="#farms">How to Use</a></li>
              <li id="ingredients" class="text-center"><a href="#philosophy">Ingredients</a></li>
            </ul>
      </div>
    </div>

    <!--DETAILS SECTION-->
    <div id="details-text" class="row mb-5">
      <div class="col-md-7">
        <h4>Product Details</h4>
        <p>
        Advanced Nightly Face Treatment is a rich, concentrated age-defying skin protection formula designed to fight oxidative stress and improve the appearance of aging and sun damaged skin while promoting healthy skin of face, neck, and décolletage. This treatment is infused with a matrix of skin revitalizing key ingredients which work in synergy to reduce the appearance of fine lines and wrinkles, enhance and restore your skin’s ability to look fresh, natural, and radiant overnight.
        <br/><br/>
        Dermatologist Tested.
        <br/><br/>
        FDA-registered, over-the counter (OTC), formula. Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.
        </p>
      </div>
      <div class="col-md-5 bg-c-grey">
      <h4>ADVANCED COLLECTION</h4>
        <p>Introduce night cream and body cream here with stylized group shot.</p>
        <button>See Daily Cream</button>  <button>See Body Cream</button>
      </div>
    </div>

    <!--RECOMMENDED TEXT SECTION-->
    <div id="recommended-text">
      <div class="row mb-5">
        <div class="col-md-7">
          <h4>Recommended For</h4>
          <ul>
            <li>Sun Damaged Skin</li>
            <li>Signs of Aging</li>
            <li>Blemishes/Spots/Discoloration</li>
            <li>Skin Elasticity</li>
            <li>Cellulite</li>
            <li>Urban/Environmental stressor factors</li>
            <li>Underlying factors that damage skin</li>
          </ul>
        </div>
        <div class="col-md-5 bg-c-grey">
          <p>
          Before/After photos
          </p>
        </div>
      </div>
    </div>

      <!--HOW TO TEXT SECTION-->
      <div id="howTo-text">
        <div class="row mb-5">
          <div class="col-md-7">
            <h4>How to Use</h4>
            <div class="row">
              <div class="col-2">
                <img src="../img/indi-stuff/Step1.png"/>
              </div>
              <div class="col-10">
                <p>Clean skin throughly from excess dirt and debris.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <img src="../img/indi-stuff/Step2.png"/>
              </div>
              <div class="col-10">
                <p>Apply as needed. Recommended to apply four (+/-) pumps to face, neck and décolletage.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-2">
                <img src="../img/indi-stuff/Step3.png"/>
              </div>
              <div class="col-10">
                <p>Rinse skin in the morning following usage. For optimal results, follow with Nerium ADVANCED Daily Face Cream.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-c-grey">
            <h4>ADVANCED COLLECTION</h4>
            <p>Introduce night cream and body cream here with stylized group shot.</p>
            <button>See Daily Cream</button>  <button>See Body Cream</button>
          </div>
        </div>
      </div>

      <!--INGREDIENTS TEXT SECTION-->
      <div id="ingredients-text">
      <h4>Key Ingredients</h4>
        <div class="row">
          <div class="col-sm-3">
            <img src="../img/indi-stuff/ingredients/advanced/DNB-Nerium.png"/>
            <p>Text here text here</p>
          </div>
          <div class="col-sm-3">
            <img src="../img/indi-stuff/ingredients/advanced/NB-Peptide-Matrix.png"/>
            <p>Text here text here</p>
          </div>
          <div class="col-sm-3">
            <img src="../img/indi-stuff/ingredients/advanced/DN-Niacinamide.png"/>
            <p>Text here text here</p>
          </div>
          <div class="col-sm-3">
            <img src="../img/indi-stuff/ingredients/advanced/NB-Dimethicone.png"/>
            <p>Text here text here</p>
          </div>
          <div class="col-sm-3">
            <img src="../img/indi-stuff/ingredients/advanced/N-Chia-Seed-Oil.png"/>
            <p>Text here text here</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-12">
            <h4>Full ingredients</h4> 
            <p>Dimethicone, Water (Aqua), Aloe Barbadensis Leaf Juice, Hydrolyzed Egg Shell Membrane (Peptide Matrix - Collagen and Elastin), Nerium Oleander Leaf Extract, Niacinamide, Glycerin, Propanediol, Butylene Glycol, Glyceryl Stearate, Hydroxyethyl Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Hydrogenated Polydecene, Cocos Nucifera (Coconut) Oil, Caprylic/Capric Triglyceride, Helianthus Annuus (Sunflower) Seed Oil, Squalane, Cetearyl Olivate, Sorbitan Olivate, C12-15 Alkyl Benzoate, Stearic Acid, Leuconostoc/Radish Root Ferment Filtrate, Butyrospermum Parkii (Shea) Butter, Theobroma Cacao (Cocoa) Seed Butter, Polysorbate 80, Caprylyl Glycol, Salvia Hispanica (Chia) Seed Oil, Rosmarinus Officinalis (Rosemary) Leaf Extract, Sodium Lactate, Tocopheryl Acetate, Xanthan Gum, Cymbopogon Schoenanthus Extract, Disodium EDTA, Acetyl Hexapeptide-30, Alteromonas Ferment Extract, Arginine, Caramel, Potassium Sorbate, Glyceryl Caprylate, Phenylpropanol, Limonene, Citral, Hydroxycitronellal, Linalool</p>
          </div>
        </div>
      </div>



  <!--END Container Div-->
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script>
  //Script for changing display images
  function pictureChangeFirst() {
    document.getElementById("indi-display-img").src="../img/Updated-Advanced-Packaging/NSC.ADV.NC.BottleAndCarton.HR.CMYK.V1.png";
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
    });
    $("#recommended").click(function(){
    		$("#details-text").hide();
        $("#recommended-text").show();
        $("#howTo-text").hide();
        $("#ingredients-text").hide();
    });
    $("#howTo").click(function(){
    		$("#details-text").hide();
        $("#recommended-text").hide();
        $("#howTo-text").show();
        $("#ingredients-text").hide();
    });
    $("#ingredients").click(function(){
    		$("#details-text").hide();
        $("#recommended-text").hide();
        $("#howTo-text").hide();
        $("#ingredients-text").show();
    });
});
</script>
<?php include('../deepPageFooter.php'); ?>