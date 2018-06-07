<?php include('../deepPageHeader.php'); ?>
<style>
body{
  -webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
}
.h1-indi{
  font-size: 2rem;
  font-family: italiana;
}
.h2-indi{
  font-family: italiana;
  font-size: 1.7rem;
}
.h3-indi{
  font-family: italiana;
  font-size:1.2rem;
}
.h4-indi{
  font-size: 0.9rem;
}
.p-indi{
  font-size: 0.85rem;
}
.bg-c-grey {
  background:#D3D3D3;
}

.ul-hexbullets{
    list-style: none;
    padding:0;
    }
.ul-hexbullets li:before{
    content: '';
    width: 20px;
    height: 20px;
    margin-right: 5px;
    padding-bottom: 10px;
    margin-bottom: -3px;
    display: inline-block;
    background: url(../img/bluebullet.svg) no-repeat 0 0;
    background-position: 50%;
}
.benefits-line{
    border-bottom: 1px solid #a2a9ad;
    max-width: 250px;
    padding-bottom: 8px;
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
        <h1 class="h1-indi">ADVANCED NIGHTLY FACE CREAM</h1>
        <h4 class="h4-indi">30ml / 1 fl.oz</h4>
        <h2 class="h2-indi mb-4">$120<h2>
            
        <h3 class="h3-indi benefits-line">BENEFITS</h3>
        <ul class="h4-indi ul-hexbullets">
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

    <div class="row mt-5">
      <div class="col-12">
            <ul class="navigation-menu navigation-menu-indi move-center h3-indi">
              <li id="details" class="text-center">
                      <img src="../img/bluebullet.png" width="15px" id="details-bullet"/>
                      Details
                </li>
              <li id="recommended" class="text-center">
                      <img src="../img/bluebullet.png" width="15px" id="recommended-bullet"/>
                      Recommended for
                </li>
              <li id="howTo" class="text-center">
                      <img src="../img/bluebullet.png" width="15px" id="howTo-bullet"/>
                      How to Use
                </li>
              <li id="ingredients" class="text-center">
                      <img src="../img/bluebullet.png" width="15px" id="ingredients-bullet"/>
                      Ingredients
                </li>
            </ul>
      </div>
    </div>

    <!--DETAILS SECTION-->
    <div id="details-text" class="row mb-5">
      <div class="col-md-7">
        <h3 class="h3-indi">Product Details</h3>
        <p class="p-indi">
        Advanced Nightly Face Treatment is a rich, concentrated age-defying skin protection formula designed to fight oxidative stress and improve the appearance of aging and sun damaged skin while promoting healthy skin of face, neck, and décolletage. This treatment is infused with a matrix of skin revitalizing key ingredients which work in synergy to reduce the appearance of fine lines and wrinkles, enhance and restore your skin’s ability to look fresh, natural, and radiant overnight.
        <br/><br/>
        Dermatologist Tested.
        <br/><br/>
        FDA-registered, over-the counter (OTC), formula. Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.
        </p>
      </div>
      <div class="col-md-5 bg-c-grey">
      <h2 class="h2-indi">ADVANCED COLLECTION</h2>
        <p class="p-indi">Introduce night cream and body cream here with stylized group shot.</p>
        <button>See Daily Cream</button>  <button>See Body Cream</button>
      </div>
    </div>

    <!--RECOMMENDED TEXT SECTION-->
    <div id="recommended-text">
      <div class="row mb-5">
        <div class="col-md-7">
          <h3 class="h3-indi">Recommended For</h3>
          <ul class="h4-indi ul-hexbullets">
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
          <p class="p-indi">
          Before/After photos
          </p>
        </div>
      </div>
    </div>

      <!--HOW TO TEXT SECTION-->
      <div id="howTo-text">
        <div class="row mb-5">
          <div class="col-md-7">
            <h3 class="h3-indi">How to Use</h3>
            <div class="row mb-3">
              <div class="col-2">
                <img src="../img/indi-stuff/Step1.png"/>
              </div>
              <div class="col-10 d-flex align-items-center">
                <p class="p-indi mb-0">Clean skin throughly from excess dirt and debris.</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-2">
                <img src="../img/indi-stuff/Step2.png"/>
              </div>
              <div class="col-10 d-flex align-items-center">
                <p class="p-indi mb-0">Apply as needed. Recommended to apply four (+/-) pumps to face, neck and décolletage.</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-2">
                <img src="../img/indi-stuff/Step3.png"/>
              </div>
              <div class="col-10 d-flex align-items-center">
                <p class="p-indi mb-0">Rinse skin in the morning following usage. For optimal results, follow with Nerium ADVANCED Daily Face Cream.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-c-grey">
            <h2 class="h2-indi">ADVANCED COLLECTION</h2>
            <p class="p-indi">Introduce night cream and body cream here with stylized group shot.</p>
            <button>See Daily Cream</button>  <button>See Body Cream</button>
          </div>
        </div>
      </div>

      <!--INGREDIENTS TEXT SECTION-->
      <div id="ingredients-text">
      <h3 class="h3-indi">Key Ingredients</h3>
        <div class="row text-center">
          <div class="col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/DNB-Nerium.png"/>
            <p class="p-indi ">Targets not just the signs of aging but also the underlying cause. Delivers powerful antioxidants to target free radical damage. Boosts the skin rejuvenating process to reveal younger-looking skin. Research has shown that NAE-14® possesses potent antioxidant and anti-inflammatory properties, while also inducing specific cytokines in dermal fibroblasts of relevance to wound healing.</p>
          </div>
          <div class="col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/NB-Peptide-Matrix.png"/>
            <p class="p-indi">This advanced technology process retains the natural ratios of key elements found in nature’s potent life source of proteins and peptides from water soluble egg membrane (WSEM) that are beneficial to skin. These peptides include collagen, elastin, desmosine, isodesmosine and glycosaminoglycans (GAGs). </p>
          </div>
          <div class="col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/DN-Niacinamide.png"/>
            <p class="p-indi">Vitamin B3</p>
          </div>
          <div class="col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/NB-Dimethicone.png"/>
            <p class="p-indi">One of the most commonly found skin care ingredient is a silicon-based polymer used to condition the skin while protecting the skin, working to prevent water loss by forming a hydrating barrier on the skin. Fills in wrinkles and lines on the face to give it a temporary plumped appearance.</p>
          </div>
          <div class="col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/N-Chia-Seed-Oil.png"/>
            <p class="p-indi">Text here text here</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="h3-indi">Full ingredients</h3> 
            <p class="p-indi">Dimethicone, Water (Aqua), Aloe Barbadensis Leaf Juice, Hydrolyzed Egg Shell Membrane (Peptide Matrix - Collagen and Elastin), Nerium Oleander Leaf Extract, Niacinamide, Glycerin, Propanediol, Butylene Glycol, Glyceryl Stearate, Hydroxyethyl Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Hydrogenated Polydecene, Cocos Nucifera (Coconut) Oil, Caprylic/Capric Triglyceride, Helianthus Annuus (Sunflower) Seed Oil, Squalane, Cetearyl Olivate, Sorbitan Olivate, C12-15 Alkyl Benzoate, Stearic Acid, Leuconostoc/Radish Root Ferment Filtrate, Butyrospermum Parkii (Shea) Butter, Theobroma Cacao (Cocoa) Seed Butter, Polysorbate 80, Caprylyl Glycol, Salvia Hispanica (Chia) Seed Oil, Rosmarinus Officinalis (Rosemary) Leaf Extract, Sodium Lactate, Tocopheryl Acetate, Xanthan Gum, Cymbopogon Schoenanthus Extract, Disodium EDTA, Acetyl Hexapeptide-30, Alteromonas Ferment Extract, Arginine, Caramel, Potassium Sorbate, Glyceryl Caprylate, Phenylpropanol, Limonene, Citral, Hydroxycitronellal, Linalool</p>
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

</script>
<?php include('../deepPageFooter.php'); ?>