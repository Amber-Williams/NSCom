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
          <img src="../img/indi-stuff/116x116-Eye-Cream-Bottle-Carton-Shadow.jpg" class="float-left" onclick="pictureChangeFirstEye()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/116x116-Eye-Cream-Smear.jpg" class="float-left" onclick="pictureChangeSecondEye()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/116x116-Eye-Cream-Drug-Facts.jpg" class="float-left" onclick="pictureChangeThirdEye()"/>
        </div>
      </div>

      <div class="col-md-5">
        <div class="d-flex align-items-center indi-display">
          <img id="indi-display-img" src="../img/indi-stuff/357x500-Eye-Cream-Bottle-Carton-Shadow.png" class="float-right"/>
        </div>
      </div>

      <div class="row show-md mx-auto">
        <div class="col-12 d-flex">
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-Eye-Cream-Bottle-Carton-Shadow.jpg" class="indi-pictureChanger" onclick="pictureChangeFirstEye()"/>
            </div>
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-Eye-Cream-Smear.jpg" class="indi-pictureChanger" onclick="pictureChangeSecondEye()"/>
            </div>
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-Eye-Cream-Drug-Facts.jpg" class="indi-pictureChanger" onclick="pictureChangeThirdEye()"/>
            </div>
        </div>
      </div>

      <div class="col-md-5">
        <h1 class="h1-indi">NERIUM ADVANCED EYE CREAM</h1>
        <h4 class="h4-indi">10ml / 0.3 fl.oz</h4>
        <h2 class="h2-indi mb-4">$60<h2>
            
        <h3 class="h3-indi benefits-line">BENEFITS</h3>
        <ul class="h4-indi ul-hexbullets">
          <li>Reduce puffiness</li>
          <li>Reduce the appearance of dark circles</li>
          <li>Smoothes out fine lines and wrinkles</li>
          <li>Improves moisture retention and hydrates the skin</li>
          <li>Provides nutrients essential for protein synthesis</li>
          <li>Enhanced tissue collagen integrity</li>
          <li>Anti-redness care for sensitive skin</li>
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
        Nerium Advanced Eye Cream is an essential formula designed to rejuvenate the delicate skin around your eyes. With key ingredients designed to nourish and hydrate the skin, this cream reduces the appearance of puffiness, wrinkles and dark circles while providing a more revitalized, youthful looking appearance. 
        </p>
      </div>
      <div class="col-md-5 bg-c-grey">
          <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
          <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
          <div class="move-center">
            <a href="../Advanced-Day/index.php">
              <button class="shop-btn m-2">Day Cream</button>  
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
            <li>Under eye bags</li>
            <li>Puffiness</li>
            <li>Dark circles</li>
            <li>Signs of aging</li>
            <li>Wrinkles around eyes</li>
            <li>Improving tissue suppleness</li>
            <li>Dryness and Dehydration</li>
            <li>Pollution Prevention Care</li>
            <li>Sun Damage</li>
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
                <p class="p-indi mb-0">After cleansing skin thoroughly, apply one or two pumps. </p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-2">
                <img src="../img/indi-stuff/Step2.png"/>
              </div>
              <div class="col-sm-10 d-flex align-items-center">
                <p class="p-indi mb-0">Gently massage into the soft tissue around each eye.</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-2">
                <img src="../img/indi-stuff/Step3.png"/>
              </div>
              <div class="col-sm-10 d-flex align-items-center">
                <p class="p-indi mb-0">Apply once every morning and every evening. To enjoy Healthy Skin for Life, use with Advanced Day Cream and Nightly Face Treatment.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-c-grey">
            <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
            <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
            <div class="move-center">
              <a href="../Advanced-Day/index.php">
                <button class="shop-btn m-2">Day Cream</button>  
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
            <p class="p-indi ">Delivers powerful antioxidants to target free radical damage and to boost the skin rejuvenating processes. Studies show Nerium Oleander Extract help induce specific cytokines in dermal fibroblasts (skin support cells), known to be relevant in restoring damaged skin.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/NB-Peptide-Matrix.png" alt="BiovaDerm"/>
            <p class="p-indi">Provides anti-aging benefits while restoring and maintaining the skin's youthful appearance! Benefits include collagen, elastin and glycosaminoglycan; provides essential nutrients to the skin.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/DN-Niacinamide.png" alt="Niacinamide"/>
            <p class="p-indi">Enhances and maintains the skin collagenous structure, as shown in studies, thereby reducing the emergence of fine lines and wrinkles, and helping the skin appear smoother, tighter and younger. Its essential nutrient, Vitamin B3, has been shown to mitigate oxidative stress and rejuvenate the skin’s regenerating processes.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/CollidalOatmeal-adv.png" alt="Collidal Oatmeal"/>
            <p class="p-indi">With key anti-inflammatory properties, this ingredient minimizes the inflammatory response that may lead to tissue destruction, redness, and irritation.   With powerful antioxidants and humectants, this ingredient provides powerful restorative and hydrating properties to the skin.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/Aesculus-Hippocastanum-Extract.jpg" alt="Aesculus Hippocastanum (Horse Chestnut) Flower Extract"/>
            <p class="p-indi">Studies show that horse chestnut contains a unique chemical (aescin) that improves the structural support of skin blood vessels.  In essence, this supportive action of horse chestnut along with its powerful anti-inflammatory properties minimizes the permeability or leakiness of blood vessels that leads to swelling and or puffiness.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/advanced/Ascophyllum-Nodosum-Extract.jpg" alt="Ascophyllum Nodosum (Brown Algae) Extract"/>
            <p class="p-indi">A novel anti-pollution ingredient, studies show that its inhibits the AhR pathway in cells. The AhR pathway is activated by environmental pollutants and has been implicated in pollution associated skin damage such as inflammation, loss of barrier function and increase in dark spots.</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="h3-indi">Full ingredients</h3> 
            <p class="p-indi">Water (Aqua), Dimethicone, Cyclopentasiloxane, Polysilicone-11, Isododecane, Hydrolyzed Egg Shell Membrane (Peptide Matrix – Collagen & Elastin), Niacinamide, Polymethylsilsesquioxane/Silica Crosspolymer, Glycerin, Nerium Oleander Leaf Extract (NAE8®), Colloidal Oatmeal, Aesculus Hippocastanum (Horse Chestnut) Extract, Ascophyllum Nodosum (Brown Algae) Extract, Butylene Glycol, Palmitoyl Tripeptide-5, Aloe Barbadensis Leaf Juice, Phenethyl Alcohol, Caprylyl Glycol, Leuconostoc/Radish Root Ferment Filtrate, Fructose, Sodium Hyaluronate, Dunaliella Salina Extract, Panthenol, HDI/Trimethylol Hexyllactone Crosspolymer, Polymethylsilsesquioxane, Pantolactone, Carbomer, Sodium Benzoate, Potassium Sorbate, Polysorbate 40, Ethylhexylglycerin, Laureth-12, Phenoxyethanol, Citric Acid, Aminomethyl Propanediol.</p>
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
              Nerium Advanced Eye Cream is an essential formula designed to rejuvenate the delicate skin around your eyes. With key ingredients designed to nourish and hydrate the skin, this cream reduces the appearance of puffiness, wrinkles and dark circles while providing a more revitalized, youthful looking appearance. 
              </p>
            </div>
            <div class="col-12 bg-c-grey">
              <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
              <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
              <div class="move-center">
                <a href="../Advanced-Day/index.php">
                  <button class="shop-btn m-2">Day Cream</button>  
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
                <li>Under eye bags</li>
                <li>Puffiness</li>
                <li>Dark circles</li>
                <li>Signs of aging</li>
                <li>Wrinkles around eyes</li>
                <li>Improving tissue suppleness</li>
                <li>Dryness and Dehydration</li>
                <li>Pollution Prevention Care</li>
                <li>Sun Damage</li>
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
                    <p class="p-indi mb-0">After cleansing skin thoroughly, apply one or two pumps.</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <img src="../img/indi-stuff/Step2.png"/>
                  </div>
                  <div class="col-sm-10 d-flex align-items-center">
                    <p class="p-indi mb-0">Gently massage into the soft tissue around each eye.</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <img src="../img/indi-stuff/Step3.png"/>
                  </div>
                  <div class="col-12 d-flex align-items-center">
                    <p class="p-indi mb-0">Apply once every morning and every evening. To enjoy Healthy Skin for Life, use with Advanced Day Cream and Nightly Face Treatment.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 bg-c-grey">
                <h2 class="h2-indi move-center">NERIUM ADVANCED COLLECTION</h2>
                <img src="../img/indi-stuff/385x420-Advanced-Products.png" width="100%"/>
                <div class="move-center">
                  <a href="../Advanced-Day/index.php">
                    <button class="shop-btn m-2">Day Cream</button>  
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
                <p class="p-indi ">Delivers powerful antioxidants to target free radical damage and to boost the skin rejuvenating processes. Studies show Nerium Oleander Extract help induce specific cytokines in dermal fibroblasts (skin support cells), known to be relevant in restoring damaged skin.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/NB-Peptide-Matrix.png" alt="BiovaDerm"/>
                <p class="p-indi">Provides anti-aging benefits while restoring and maintaining the skin's youthful appearance! Benefits include collagen, elastin and glycosaminoglycan; provides essential nutrients to the skin.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/DN-Niacinamide.png" alt="Niacinamide"/>
                <p class="p-indi">Enhances and maintains the skin collagenous structure, as shown in studies, thereby reducing the emergence of fine lines and wrinkles, and helping the skin appear smoother, tighter and younger. Its essential nutrient, Vitamin B3, has been shown to mitigate oxidative stress and rejuvenate the skin’s regenerating processes.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/CollidalOatmeal-adv.png" alt="Collidal Oatmeal"/>
                <p class="p-indi">With key anti-inflammatory properties, this ingredient minimizes the inflammatory response that may lead to tissue destruction, redness, and irritation.   With powerful antioxidants and humectants, this ingredient provides powerful restorative and hydrating properties to the skin.</p>              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/Aesculus-Hippocastanum-Extract.jpg" alt="Aesculus Hippocastanum (Horse Chestnut) Flower Extract"/>
                <p class="p-indi">Studies show that horse chestnut contains a unique chemical (aescin) that improves the structural support of skin blood vessels.  In essence, this supportive action of horse chestnut along with its powerful anti-inflammatory properties minimizes the permeability or leakiness of blood vessels that leads to swelling and or puffiness.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/advanced/Ascophyllum-Nodosum-Extract.jpg" alt="Ascophyllum Nodosum (Brown Algae) Extract"/>
                <p class="p-indi">A novel anti-pollution ingredient, studies show that its inhibits the AhR pathway in cells. The AhR pathway is activated by environmental pollutants and has been implicated in pollution associated skin damage such as inflammation, loss of barrier function and increase in dark spots.</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="h3-indi">Full ingredients</h3> 
                <p class="p-indi">Water (Aqua), Dimethicone, Cyclopentasiloxane, Polysilicone-11, Isododecane, Hydrolyzed Egg Shell Membrane (Peptide Matrix – Collagen & Elastin), Niacinamide, Polymethylsilsesquioxane/Silica Crosspolymer, Glycerin, Nerium Oleander Leaf Extract (NAE8®), Colloidal Oatmeal, Aesculus Hippocastanum (Horse Chestnut) Extract, Ascophyllum Nodosum (Brown Algae) Extract, Butylene Glycol, Palmitoyl Tripeptide-5, Aloe Barbadensis Leaf Juice, Phenethyl Alcohol, Caprylyl Glycol, Leuconostoc/Radish Root Ferment Filtrate, Fructose, Sodium Hyaluronate, Dunaliella Salina Extract, Panthenol, HDI/Trimethylol Hexyllactone Crosspolymer, Polymethylsilsesquioxane, Pantolactone, Carbomer, Sodium Benzoate, Potassium Sorbate, Polysorbate 40, Ethylhexylglycerin, Laureth-12, Phenoxyethanol, Citric Acid, Aminomethyl Propanediol.</p>
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