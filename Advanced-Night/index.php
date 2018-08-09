<?php include('../deepPageHeader.php'); ?>

<hr class="hr-indi" />

  <div class="container mt-3">

    <div class="row">

      <div class="col-2 d-flex flex-column"> 
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/116x116-Night-Cream-Bottle-Carton-Shadow.jpg" class="float-left" onclick="pictureChangeFirstNC()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/116x116-Night-Cream-Smear.jpg" class="float-left" onclick="pictureChangeSecondNC()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/116x116-ADV-Drug-Facts.jpg" class="float-left" onclick="pictureChangeThirdNC()"/>
        </div>
      </div>

      <div class="col-md-5">
        <div class="d-flex align-items-center indi-display">
          <img id="indi-display-img" src="../img/Updated-Advanced-Packaging/NSC.ADV.NC.BottleAndCarton.HR.CMYK.V1.png" class="float-right"/>
        </div>
      </div>

      <div class="row show-md mx-auto">
        <div class="col-12 d-flex">
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-Night-Cream-Bottle-Carton-Shadow.jpg" class="indi-pictureChanger" onclick="pictureChangeFirstNC()"/>
            </div>
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-Night-Cream-Smear.jpg" class="indi-pictureChanger" onclick="pictureChangeSecondNC()"/>
            </div>
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-ADV-Drug-Facts.jpg" class="indi-pictureChanger" onclick="pictureChangeThirdNC()"/>
            </div>
        </div>
      </div>

      <div class="col-md-5">
        <h1 class="h1-indi">NERIUM ADVANCED NIGHTLY FACE TREATMENT</h1>
        <h4 class="h4-indi">30ml / 1 fl.oz</h4>
        <h2 class="h2-indi mb-4">$59.95<h2>
            
        <h3 class="h3-indi benefits-line">BENEFITS</h3>
        <ul class="h4-indi ul-hexbullets">
          <li>Enhanced Collagen Production</li>
          <li>Skin Protectant</li>
          <li>Fine Lines and Wrinkles</li>
          <li>Sagging Skin</li>
          <li>Reduce Collagen Breakdown</li>
          <li>Restores Radiance Over-night</li>
          <li>Fights Signs of Aging</li>
          <li>Blemised and Sun Damaged Skin</li>
        </ul>
        <div class="move-center">
          <!--Shopify buy button
          <div id='product-component-a943bf8198a'></div> 
           -->
          <button class="coming-soon-btn">COMING SOON</button>
        </div>
      </div>
    </div>
  <!--Hide this section on mobile-->
  <div class="hide-xs">
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
        FDA-registered, over-the counter (OTC) formula. Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.
        </p>
      </div>
      <div class="col-md-5 bg-c-grey">
          <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
          <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
          <div class="move-center">
            <a href="../Advanced-Day/index.php">
              <button class="shop-btn m-2">Daily Cream</button>  
            </a>
            <a href="../Advanced-Body/index.php">
              <button class="shop-btn m-2">Body Cream</button>
            </a>
          </div>
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
            <li>Urban/Environmental stressor factors</li>
            <li>Underlying factors that damage skin</li>
          </ul>
        </div>
        <div class="col-md-5">
          <img src="../img/indi-stuff/Night-Cream-Before-After-Image.jpg" width="100%"/>
        </div>
      </div>
    </div>

      <!--HOW TO TEXT SECTION-->
      <div id="howTo-text">
        <div class="row mb-5">
          <div class="col-md-7">
            <h3 class="h3-indi">How to Use</h3>
            <div class="row mb-3">
              <div class="col-sm-2">
                <img src="../img/indi-stuff/Step1.png"/>
              </div>
              <div class="col-sm-10 d-flex align-items-center">
                <p class="p-indi mb-0">Clean skin throughly from excess dirt and debris.</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-2">
                <img src="../img/indi-stuff/Step2.png"/>
              </div>
              <div class="col-sm-10 d-flex align-items-center">
                <p class="p-indi mb-0">Apply as needed. Recommended to apply four (+/-) pumps to face, neck and décolletage.</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-2">
                <img src="../img/indi-stuff/Step3.png"/>
              </div>
              <div class="col-sm-10 d-flex align-items-center">
                <p class="p-indi mb-0">Rinse skin in the morning following usage. For optimal results, follow with Nerium ADVANCED Daily Face Cream.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-c-grey">
            <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
            <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
            <div class="move-center">
              <a href="../Advanced-Day/index.php">
                <button class="shop-btn m-2">Daily Cream</button>  
              </a>
              <a href="../Advanced-Body/index.php">
                <button class="shop-btn m-2">Body Cream</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    
      <!--INGREDIENTS TEXT SECTION-->
      <div id="ingredients-text">
      <h3 class="h3-indi">Key Ingredients</h3>
        <div class="row text-center">
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/DNB-Nerium.png" alt="Nerium Oleander Extract"/>
            <p class="p-indi ">Targets not just the signs of aging but also the underlying cause. Delivers powerful antioxidants to target free radical damage. Boosts the skin rejuvenating process to reveal younger-looking skin.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/NB-Peptide-Matrix.png" alt="BiovaDerm"/>
            <p class="p-indi">This advanced technology process retains the natural ratios of key elements found in nature’s potent life source of proteins and peptides from water soluble egg membrane (WSEM) that are beneficial to skin.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/DN-Niacinamide.png" alt="Nerium Oleander Extract"/>
            <p class="p-indi">Vitamin B3</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/NB-Dimethicone.png" alt="Nerium Oleander Extract"/>
            <p class="p-indi">One of the most commonly found skin care ingredient is a silicon-based polymer used to condition the skin while protecting the skin, working to prevent water loss by forming a hydrating barrier on the skin. Fills in wrinkles and lines on the face to give it a temporary plumped appearance.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/N-Chia-Seed-Oil.png" alt="Nerium Oleander Extract"/>
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
    <!--END Hide on mobile-->
    </div>

    <!--START Show on Mobile-->
    <div class="show-xs">
      <!--DETAILS MOBILE BUTTON-->
      <button class="myButton btn indi-m-btn mt-4" data-isminus="false" type="button" data-toggle="collapse" data-target="#collapseProductDetails" aria-expanded="false" aria-controls="collapseExample">
        <span class="float-left">Product Details</span> 
        <span class="float-right minusPlus">+</span>
      </button>
      <br/>
      <div class="collapse" id="collapseProductDetails">
        <div class="card card-body">

          <!--DETAILS TEXT SECTION-->
          <div class="row">
            <div class="col-12">
              <h3 class="h3-indi">Product Details</h3>
              <p class="p-indi">
              Advanced Nightly Face Treatment is a rich, concentrated age-defying skin protection formula designed to fight oxidative stress and improve the appearance of aging and sun damaged skin while promoting healthy skin of face, neck, and décolletage. This treatment is infused with a matrix of skin revitalizing key ingredients which work in synergy to reduce the appearance of fine lines and wrinkles, enhance and restore your skin’s ability to look fresh, natural, and radiant overnight.
              <br/><br/>
              Dermatologist Tested.
              <br/><br/>
              FDA-registered, over-the counter (OTC) formula. Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.
              </p>
            </div>
            <div class="col-12 bg-c-grey">
              <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
              <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
              <div class="move-center">
                <a href="../Advanced-Day/index.php">
                  <button class="shop-btn m-2">Daily Cream</button>  
                </a>
                <a href="../Advanced-Body/index.php">
                  <button class="shop-btn m-2">Body Cream</button>
                </a>
              </div>
            </div>
          </div>
      
        </div>
      <!--END DETAILS M SECTION-->
      </div>
      

      <!--RECOMMENDED MOBILE BUTTON-->
      <button class="myButton btn indi-m-btn mt-4" data-isminus="false" type="button" data-toggle="collapse" data-target="#collapseRecommended" aria-expanded="false" aria-controls="collapseExample">
        <span class="float-left">Recommended</span> 
        <span class="float-right minusPlus">+</span>
      </button>

      <br/>
      <div class="collapse" id="collapseRecommended">
        <div class="card card-body">

          <!--RECOMMENDED TEXT SECTION-->

            <div class="row">
              <div class="col-12">
                <h3 class="h3-indi">Recommended For</h3>
                <ul class="h4-indi ul-hexbullets">
                  <li>Sun Damaged Skin</li>
                  <li>Signs of Aging</li>
                  <li>Blemishes/Spots/Discoloration</li>
                  <li>Skin Elasticity</li>
                  <li>Urban/Environmental stressor factors</li>
                  <li>Underlying factors that damage skin</li>
                </ul>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/Night-Cream-Before-After-Image.jpg" width="100%"/>
              </div>
            </div>

        </div>
      <!--END RECOMMENDED MOBILE BUTTON-->
      </div>
      

      <!--HOW TO MOBILE BUTTON-->
      <button class="myButton btn indi-m-btn mt-4" type="button" data-isminus="false" data-toggle="collapse" data-target="#collapseHowTo" aria-expanded="false" aria-controls="collapseExample">
        <span class="float-left">How To Use</span> 
        <span class="float-right minusPlus">+</span>
      </button>
      <br/>
      <div class="collapse" id="collapseHowTo">
        <div class="card card-body">

          <!--HOW TO TEXT SECTION-->

            <div class="row">
              <div class="col-12">
                <h3 class="h3-indi">How to Use</h3>

                <div class="row mb-3">
                  <div class="col-12">
                    <img src="../img/indi-stuff/Step1.png"/>
                  </div>
                  <div class="col-12 d-flex align-items-center">
                    <p class="p-indi mb-0">Clean skin throughly from excess dirt and debris.</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <img src="../img/indi-stuff/Step2.png"/>
                  </div>
                  <div class="col-sm-10 d-flex align-items-center">
                    <p class="p-indi mb-0">Apply as needed. Recommended to apply four (+/-) pumps to face, neck and décolletage.</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <img src="../img/indi-stuff/Step3.png"/>
                  </div>
                  <div class="col-12 d-flex align-items-center">
                    <p class="p-indi mb-0">Rinse skin in the morning following usage. For optimal results, follow with Nerium ADVANCED Daily Face Cream.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 bg-c-grey">
                <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
                <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
                <div class="move-center">
                  <a href="../Advanced-Day/index.php">
                    <button class="shop-btn m-2">Daily Cream</button>  
                  </a>
                  <a href="../Advanced-Body/index.php">
                    <button class="shop-btn m-2">Body Cream</button>
                  </a>
                </div>
              </div>
            </div>
          </div>

        </div>
      <!--END HOW TO MOBILE BUTTON-->


      <!--INGREDIENTS MOBILE BUTTON-->
      <button class="myButton btn indi-m-btn mt-4" type="button" data-isminus="false" data-toggle="collapse" data-target="#collapseIng" aria-expanded="false" aria-controls="collapseExample">
        <span class="float-left">Ingredients</span> 
        <span class="float-right minusPlus">+</span>
      </button>
      <br/>
      <div class="collapse" id="collapseIng">
        <div class="card card-body">

          <!--INGREDIENTS TEXT SECTION-->
          <h3 class="h3-indi">Key Ingredients</h3>
            <div class="row text-center">
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/DNB-Nerium.png" alt="Nerium Oleander Extract"/>
                <p class="p-indi ">Targets not just the signs of aging but also the underlying cause. Delivers powerful antioxidants to target free radical damage. Boosts the skin rejuvenating process to reveal younger-looking skin.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/NB-Peptide-Matrix.png" alt="BiovaDerm"/>
                <p class="p-indi">This advanced technology process retains the natural ratios of key elements found in nature’s potent life source of proteins and peptides from water soluble egg membrane (WSEM) that are beneficial to skin.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/DN-Niacinamide.png" alt="Nerium Oleander Extract"/>
                <p class="p-indi">Vitamin B3</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/NB-Dimethicone.png" alt="Nerium Oleander Extract"/>
                <p class="p-indi">One of the most commonly found skin care ingredient is a silicon-based polymer used to condition the skin while protecting the skin, working to prevent water loss by forming a hydrating barrier on the skin. Fills in wrinkles and lines on the face to give it a temporary plumped appearance.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/N-Chia-Seed-Oil.png" alt="Nerium Oleander Extract"/>
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
      <!--END INGREDIENTS MOBILE BUTTON-->
      </div>

      <!--END Show on Mobile A-->
      </div>
    <!--END Show on Mobile B-->
    </div>

<!--END Container Div-->
</div>

      
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<?php include('../deepPageFooter.php'); ?>