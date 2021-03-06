<?php include('../deepPageHeader.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script>
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
<hr class="hr-indi" />

  <div class="container mt-3">

    <div class="row">

      <div class="col-2 d-flex flex-column"> 
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/116x116-Day-Cream-Bottle-Carton-Shadow.jpg" class="float-left" onclick="pictureChangeFirstDC()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/116x116-Day-Cream-Smear.jpg" class="float-left" onclick="pictureChangeSecondDC()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/116x116-ADV-Drug-Facts.jpg" class="float-left" onclick="pictureChangeThirdDC()"/>
        </div>
      </div>

      <div class="col-md-5">
        <div class="d-flex align-items-center indi-display">
          <img id="indi-display-img" src="../img/Updated-Advanced-Packaging/NSC.ADV.DC.BottleAndCarton.HR.CMYK.V1.png" class="float-right"/>
        </div>
      </div>

      <div class="row show-md mx-auto">
        <div class="col-12 d-flex">
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-Day-Cream-Bottle-Carton-Shadow.jpg" class="indi-pictureChanger" onclick="pictureChangeFirstDC()"/>
            </div>
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-Day-Cream-Smear.jpg" class="indi-pictureChanger" onclick="pictureChangeSecondDC()"/>
            </div>
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-ADV-Drug-Facts.jpg" class="indi-pictureChanger" onclick="pictureChangeThirdDC()"/>
            </div>
        </div>
      </div>

      <div class="col-md-5">
        <h1 class="h1-indi text-uppercase">Nerium Advanced Daily Face Cream</h1>
        <h4 class="h4-indi">30ml / 1 fl.oz</h4>
        <h2 class="h2-indi mb-4">$90<h2>
            
        <h3 class="h3-indi benefits-line">BENEFITS</h3>
        <ul class="h4-indi ul-hexbullets">
          <li>Sun Protection</li>
          <li>Enhanced Collagen Production</li>
          <li>Reduces Collagen Breakdown</li>
          <li>Moisturizing and Normalizing</li>
          <li>Light-Weight</li>
          <li>Restores Youthful Appearance</li>
          <li>Enlarged Pores</li>
          <li>Discoloration</li>
        </ul>
        <div class="move-center">
          <!--Shopify buy button
          <div id='product-component-01196be7393'></div>  
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
        Advanced Daily Face Cream is a multi-dimensional skin moisturizing formula designed to help protect skin against sun damage/environmental stressors, improve moisture retention and skin hydration while helping to normalize and restore skin to its youthful appearance. For application to the face, neck, and other areas of the body, this skin protecting and hydrating day cream combines revolutionary key ingredients that actively work together to awaken and refresh your skin’s youthful, luminous tone.
        <br/><br/>
        Dermatologist Tested.
        <br/><br/>
        FDA-registered, over-the counter (OTC), formula. Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.
        </p>
      </div>
      <div class="col-md-5 bg-c-grey">
        <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
        <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
        <div class="move-center">
          <a href="../Advanced-Night/index.php">
            <button class="shop-btn m-2">Night Cream</button>  
          </a>
          <a href="../Advanced-Body/index.php">
            <button class="shop-btn m-2">Body Firming Cream</button>
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
          <img src="../img/indi-stuff/Day-Cream-Before-After-Image.jpg" width="100%"/>
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
                <p class="p-indi mb-0">Apply generously before moisturizing and sun exposure and as needed to face and other areas of the body.</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-2">
                <img src="../img/indi-stuff/Step3.png"/>
              </div>
              <div class="col-sm-10 d-flex align-items-center">
                <p class="p-indi mb-0">Reapply throughout day as needed. For optimal results, follow with Nerium ADVANCED Nightly Face Treatment.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-c-grey">
            <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
            <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
            <div class="move-center">
              <a href="../Advanced-Night/index.php">
                <button class="shop-btn m-2">Night Cream</button>  
              </a>
              <a href="../Advanced-Body/index.php">
                <button class="shop-btn m-2">Body Firming Cream</button>
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
            <img src="../img/indi-stuff/ingredients/advanced/D-Zinc-Oxide.png" alt="Zinc Oxide"/>
            <p class="p-indi">This popular ingredient is used primary to shield and protect the skin from UVB, UVA II and UVA I rays, as it is considered as one of the safest to use sun-protecting ingredient on the market. Zinc oxide is also used to be a soothing agent and an antioxidant.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/NB-Peptide-Matrix.png" alt="Peptide Matrix"/>
            <p class="p-indi">This advanced technology process retains the natural ratios of key elements found in nature’s potent life source of proteins and peptides from water soluble egg membrane (WSEM) that are beneficial to skin.</p>
          </div>
          <!--DK wanted AW to remove this July 26 2018               
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/DN-Niacinamide.png" alt="Niacinamide"/>
            <p class="p-indi">Vitamin B3</p>
          </div>
          -->
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/D-Hyaluronic-Acid.png" alt="Hyaluronic Acid"/>
            <p class="p-indi">Powerful skin moisturizer</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/D-SD.png" alt="Superoxide Dismutase"/>
            <p class="p-indi">Antioxidant Enzyme</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="h3-indi">Full ingredients</h3> 
            <p class="p-indi">Zinc Oxide, <br/>
            Water, C12-15 Alkyl Benzoate, Glycerin, Aloe Barbadenis Leaf Juice, Cetearyl Alcohol, Ceteth-20 Phosphate, Oleth-3 Phosphate, Isostearic Acid, Silica, Nerium Oleander Leaf Extract, Hydrolyzed Egg Shell Membrane, (Peptide Matrix - Collagen & Elastin), Caprylyl Glycol, Leuconostoc/Radish Root Ferment Filtrate, Superoxide Dismutase, Polygonum Aviculare Extract, Dimethicone, Cetearyl Glucoside, Niacinamide, Sodium Hyaluronate, Tetrahexyldecyl Ascorbate, Glyceryl Caprylate, Avena Sativa (Oat) Kernel Extract, Chamomilla Recutita (Matricaria) Flower Extract, Rosmarinus Officinalis (Rosemary) Leaf Extract, Tocopheryl Acetate, Dipotassium Glycyrrhizinate, Palmitoyl Dipeptide-5 Diaminobutyroyl Hydroxythreonine, Palmitoyl Tripeptide-5, Tetradecyl Aminobutyroylvalylaminobutyric Urea Trifluoroacetate, Glyceryl Stearate Citrate, Magnesium Chloride, Xanthan Gum, Disodium EDTA, Phenylpropanol, Dicetyl Phosphate, Polyhydroxystearic Acid, Potassium Sorbate, Fragrance, Mica, Titanium Dioxide, Pentylene Glycol, Phenoxyethanol, Sodium Benzoate, Tromethamine</p>
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
              Advanced Daily Face Cream is a multi-dimensional skin moisturizing formula designed to help protect skin against sun damage/environmental stressors, improve moisture retention and skin hydration while helping to normalize and restore skin to its youthful appearance. For application to the face, neck, and other areas of the body, this skin protecting and hydrating day cream combines revolutionary key ingredients that actively work together to awaken and refresh your skin’s youthful, luminous tone.
              <br/><br/>
              Dermatologist Tested.
              <br/><br/>
              FDA-registered, over-the counter (OTC), formula. Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.
              </p>
            </div>
            <div class="col-12 bg-c-grey">
              <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
              <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
              <div class="move-center">
                <a href="../Advanced-Night/index.php">
                  <button class="shop-btn m-2">Night Cream</button>  
                </a>
                <a href="../Advanced-Body/index.php">
                  <button class="shop-btn m-2">Body Firming Cream</button>
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
                <img src="../img/indi-stuff/Day-Cream-Before-After-Image.jpg" width="100%"/>
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
                    <p class="p-indi mb-0">Apply generously before moisturizing and sun exposure and as needed to face and other areas of the body.</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <img src="../img/indi-stuff/Step3.png"/>
                  </div>
                  <div class="col-12 d-flex align-items-center">
                    <p class="p-indi mb-0">Reapply throughout day as needed. For optimal results, follow with Nerium ADVANCED Nightly Face Treatment.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 bg-c-grey">
                <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
                <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
                <div class="move-center">
                  <a href="../Advanced-Night/index.php">
                    <button class="shop-btn m-2">Night Cream</button>  
                  </a>
                  <a href="../Advanced-Body/index.php">
                    <button class="shop-btn m-2">Body Firming Cream</button>
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
                <img src="../img/indi-stuff/ingredients/advanced/D-Zinc-Oxide.png" alt="Zinc Oxide"/>
                <p class="p-indi">This popular ingredient is used primary to shield and protect the skin from UVB, UVA II and UVA I rays, as it is considered as one of the safest to use sun-protecting ingredient on the market. Zinc oxide is also used to be a soothing agent and an antioxidant.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/NB-Peptide-Matrix.png" alt="Peptide Matrix"/>
                <p class="p-indi">This advanced technology process retains the natural ratios of key elements found in nature’s potent life source of proteins and peptides from water soluble egg membrane (WSEM) that are beneficial to skin.</p>
              </div>
              <!--DK wanted AW to remove this July 26 2018 
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/DN-Niacinamide.png" alt="Niacinamide"/>
                <p class="p-indi">Vitamin B3</p>
              </div>
              -->
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/D-Hyaluronic-Acid.png" alt="Hyaluronic Acid"/>
                <p class="p-indi">Powerful skin moisturizer</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/D-SD.png" alt="Superoxide Dismutase"/>
                <p class="p-indi">Antioxidant Enzyme</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="h3-indi">Full ingredients</h3> 
                <p class="p-indi">Zinc Oxide, <br/>
                Water, C12-15 Alkyl Benzoate, Glycerin, Aloe Barbadenis Leaf Juice, Cetearyl Alcohol, Ceteth-20 Phosphate, Oleth-3 Phosphate, Isostearic Acid, Silica, Nerium Oleander Leaf Extract, Hydrolyzed Egg Shell Membrane, (Peptide Matrix - Collagen & Elastin), Caprylyl Glycol, Leuconostoc/Radish Root Ferment Filtrate, Superoxide Dismutase, Polygonum Aviculare Extract, Dimethicone, Cetearyl Glucoside, Niacinamide, Sodium Hyaluronate, Tetrahexyldecyl Ascorbate, Glyceryl Caprylate, Avena Sativa (Oat) Kernel Extract, Chamomilla Recutita (Matricaria) Flower Extract, Rosmarinus Officinalis (Rosemary) Leaf Extract, Tocopheryl Acetate, Dipotassium Glycyrrhizinate, Palmitoyl Dipeptide-5 Diaminobutyroyl Hydroxythreonine, Palmitoyl Tripeptide-5, Tetradecyl Aminobutyroylvalylaminobutyric Urea Trifluoroacetate, Glyceryl Stearate Citrate, Magnesium Chloride, Xanthan Gum, Disodium EDTA, Phenylpropanol, Dicetyl Phosphate, Polyhydroxystearic Acid, Potassium Sorbate, Fragrance, Mica, Titanium Dioxide, Pentylene Glycol, Phenoxyethanol, Sodium Benzoate, Tromethamine</p>
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