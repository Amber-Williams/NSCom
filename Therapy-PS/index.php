<?php include('../deepPageHeader.php'); ?>

<hr class="hr-indi" />

  <div class="container">

    <div class="row">

      <div class="col-2 d-flex flex-column"> 
        <div class="p-2 hide-md">
          <img src="../img/ps-indi-product1.jpg" class="float-left" onclick="pictureChangeFirst()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/nc-indi-product2.jpg" class="float-left" onclick="pictureChangeSecond()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/nc-indi-product3.jpg" class="float-left" onclick="pictureChangeThird()"/>
        </div>
      </div>

      <div class="col-md-5">
        <div class="d-flex align-items-center indi-display">
          <img id="indi-display-img" src="../img/TL-packaging-web/Therapy.Psoriasis.Group-WithBox-SMALL.jpg" class="float-right"/>
        </div>
      </div>

      <div class="row show-md mx-auto">
        <div class="col-12 d-flex">
            <div class="p-2">
              <img src="../img/ps-indi-product1.jpg" class="indi-pictureChanger" onclick="pictureChangeFirst()"/>
            </div>
            <div class="p-2">
              <img src="../img/nc-indi-product2.jpg" class="indi-pictureChanger" onclick="pictureChangeSecond()"/>
            </div>
            <div class="p-2">
              <img src="../img/nc-indi-product3.jpg" class="indi-pictureChanger" onclick="pictureChangeThird()"/>
            </div>
        </div>
      </div>

      <div class="col-md-5">
        <h1 class="h1-indi text-uppercase">NeriumRX Psoriasis Relief Therapy </h1>
        <h4 class="h4-indi">30ml / 1 fl.oz</h4>
        <h2 class="h2-indi mb-4">$120<h2>
            
        <h3 class="h3-indi benefits-line">BENEFITS</h3>
        <ul class="h4-indi ul-hexbullets">
          <li>Antioxidant Cell Protection</li>
          <li>Anti-Inflammatory</li>
          <li>Anti-microbial Activity</li>
          <li>Restores Skin Integrity</li>
          <li>Damaged Skin Repair Cream</li>
          <li>Immuno-Regulating Support</li>
        </ul>
        <button>SHOPIFY BUTTON HERE</button>
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
                      Symptoms &amp; Causes
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
        This fast-acting Psoriasis relief cream is a powerful formula designed to help relieve and sooth skin’s itching, irritation, redness, flakiness and scaling, along with other symptoms associated with psoriasis and seborrheic dermatitis. Formulated for ultra-strength, this cream performs as a skin protectant while enhancing rejuvenation of the skin, reducing active flare-ups, and delaying future recurrences.
        <br/><br/>
        Dermatologist Tested.
        <br/><br/>
        FDA-registered, over-the counter (OTC), formula. Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.
        </p>
      </div>
      <div class="col-md-5 bg-c-grey">
      <h2 class="h2-indi">THERAPY COLLECTION</h2>
        <p class="p-indi">Introduce Cold Sore duo and Dermal Pain cream here with stylized group shot.</p>
        <button>See Cold Sore Duo</button>  <button>See Dermal Pain</button>
      </div>
    </div>

    <!--RECOMMENDED TEXT SECTION-->
    <div id="recommended-text">
      <div class="row mb-5">
        <div class="col-md-7">
          <h3 class="h3-indi">Symptoms and Causes</h3>
          <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 text-center">
              <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.1.Dryness.png" width="50%"/>
              <p>Dryness</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
              <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.2.Rashes.png" width="50%"/>
              <p>Rashes</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
              <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.3.flaking.png" width="50%"/>
              <p>Flaking</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
              <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.4.Thickness.png" width="50%"/>
              <p>Thickness</p>
            </div>
            <div class="col-sm-6 col-md-4 text-center">
              <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.5.JointPain.png" width="50%"/>
              <p>Joint Pain</p>
            </div>
          </div>

          <h3 class="h3-indi mt-4">Causes</h3>
          <p>Psoriasis is a chronic inflammatory condition characterized by pink to salmon-colored plaques with characteristic silver-white scales. The condition results from increased cell turnover in the epidermis (the superficial layer of the skin) resulting in marked skin thickening with associated scale formation.</p>
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
              <div class="col-sm-2">
                <img src="../img/indi-stuff/RXStep1.png"/>
              </div>
              <div class="col-sm-10 d-flex align-items-center">
                <p class="p-indi mb-0">Apply to affected areas 1 to 4 times daily until condition subsides.</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-2">
                <img src="../img/indi-stuff/RXStep2.png"/>
              </div>
              <div class="col-sm-10 d-flex align-items-center">
                <p class="p-indi mb-0">Rub product in a circular motion for 20 seconds or until fully absorbed.</p>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-2">
                <img src="../img/indi-stuff/RXStep3.png"/>
              </div>
              <div class="col-sm-10 d-flex align-items-center">
                <p class="p-indi mb-0">For optimal results, use apply before bed.</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-c-grey">
            <h2 class="h2-indi">ADVANCED COLLECTION</h2>
            <p class="p-indi">Introduce night cream and day cream here with stylized group shot.</p>
            <button>See Night Cream</button>  <button>See Day Cream</button>
          </div>
        </div>
      </div>
    
      <!--INGREDIENTS TEXT SECTION-->
      <div id="ingredients-text">
      <h3 class="h3-indi">Key Ingredients</h3>
        <div class="row text-center">
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/NAE-8.png" alt="Nerium Oleander Extract"/>
            <p class="p-indi ">Powerful antioxidant to reduce the impact of inflammation.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/SalicylicAcid.png" alt="Salicylic Acid"/>
            <p class="p-indi">Exfoliates the skin by softening and dissolving keratin (protein that causes the skin cells to stick together)</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/BiovaDerm.png" alt="Peptide Matrix"/>
            <p class="p-indi">Relief of pain and works to normalize collagen and elastin skin structures.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/PB8.png" alt="Parsely Basil Extract"/>
            <p class="p-indi">As a source of vitamin A, this key ingredient encourages healthy skin cell production.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/CollidalOatmeal.png" alt="Collidal Oatmeal"/>
            <p class="p-indi">helps smooth and comfort skin that is itchy and dry.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/CasterSeedOil.png" alt="Caster Seed Oil"/>
            <p class="p-indi">Works to condition the skin giving it moisture and softness.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/SheaButter.png" alt="Shea Butter"/>
            <p class="p-indi">Replenishes and nourishes the skin with natural vitamin and essential fatty acids.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/CoconutExtract.png" alt="Coconut Extract"/>
            <p class="p-indi">Derived from the meat of the coconut, this extract is highly absorbent while it moisturizes, nourishing moisture into the skin effectively.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/ApricotExtract.png" alt="Apricot Extract"/>
            <p class="p-indi">Soften and smooth the skin when activated by the skin’s oils</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/OregonGrapeRootExtract.png" alt="Oregon Grape Root Extract"/>
            <p class="p-indi">This grape root extract grown in Oregon helps combat skin irritants associated with psoriasis and other atopic dermatitis illnesses.</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-12">
            <h3 class="h3-indi">Full ingredients</h3> 
            <p class="p-indi">SALICYLIC ACID (2%), <br/>
            ALOE BARBADENSIS LEAF JUICE, NERIUM OLEANDER (OLEANDER) LEAF EXTRACT, PROPANEDIOL, HYDROLYZED EGG SHELL MEMBRANE, WATER (AQUA), CETYL ALCOHOL, GLYCERIN, GLYCERYL STEARATE, POTASSIUM CETYL PHOSPHATE, CAPRYLIC/CAPRIC TRIGLYCERIDE, GLYCERYL CAPRYLATE, CETEARYL OLIVATE, DIMETHICONE, OCIMUM BASILICUM (BASIL) EXTRACT, RICINUS COMMUNIS (CASTOR) SEED OIL, SORBITAN OLIVATE, LYSOLECITHIN, SCLEROTIUM GUM, ALLANTOIN, ARGININE, BUTYROSPERMUM PARKII (SHEA) BUTTER, CARUM PETROSELINUM (PARSLEY) EXTRACT, COLLOIDAL OATMEAL, OLEA EUROPAEA (OLIVE) FRUIT OIL, PELARGONIUM GRAVEOLENS FLOWER OIL, PRUNUS ARMENIACA (APRICOT) FRUIT EXTRACT, TOCOPHEROL, XANTHAN GUM, LEUCONOSTOC/RADISH ROOT FERMENT FILTRATE, PULLULAN, AQUA, LINUM USITATISSIMUM (LINSEED) SEED OIL, SODIUM BENZOATE, BENZYL ALCOHOL, POTASSIUM SORBATE, CITRIC ACID, DIPOTASSIUM GLYCYRRHIZATE, GLYCERYL UNDECYLENATE, LECITHIN, MAHONIA AQUIFOLIUM ROOT EXTRACT, SEA SALT, BUTTER EXTRACT, COCOS NUCIFERA (COCONUT) FRUIT EXTRACT, CUCUMIS MELO CANTALUPENSIS FRUIT EXTRACT, MUSA SAPIENTUM (BANANA) FRUIT EXTRACT, PIMPINELLA ANISUM (ANISE) FRUIT EXTRACT, PLANKTON EXTRACT, PYRUS MALUS (APPLE) FRUIT EXTRACT, SANTALUM ALBUM (SANDALOWOOD) EXTRACT, VACCINIUM MACROCARPON (CRANBERRY) FRUIT EXTRACT, VANILLA PLANIFOLIA FRUIT EXTRACT</p>
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
              This fast-acting Psoriasis relief cream is a powerful formula designed to help relieve and sooth skin’s itching, irritation, redness, flakiness and scaling, along with other symptoms associated with psoriasis and seborrheic dermatitis. Formulated for ultra-strength, this cream performs as a skin protectant while enhancing rejuvenation of the skin, reducing active flare-ups, and delaying future recurrences.
              <br/><br/>
              Dermatologist Tested.
              <br/><br/>
              FDA-registered, over-the counter (OTC), formula. Produced in accordance to FDA Good Manufacturing Practices (cGMP) guidelines.
              </p>
            </div>
            <div class="col-12 bg-c-grey">
            <h2 class="h2-indi">ADVANCED COLLECTION</h2>
              <p class="p-indi">Introduce night cream and body cream here with stylized group shot.</p>
              <button>See Daily Cream</button>  <button>See Body Cream</button>
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
              <div class="col-md-7">
                <h3 class="h3-indi">Symptoms and Causes</h3>
                <div class="row justify-content-center">
                  <div class="col-12 text-center">
                    <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.1.Dryness.png" width="35%"/>
                    <p>Dryness</p>
                  </div>
                  <div class="col-12 text-center">
                    <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.2.Rashes.png" width="35%"/>
                    <p>Rashes</p>
                  </div>
                  <div class="col-12 text-center">
                    <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.3.flaking.png" width="35%"/>
                    <p>Flaking</p>
                  </div>
                  <div class="col-12 text-center">
                    <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.4.Thickness.png" width="35%"/>
                    <p>Thickness</p>
                  </div>
                  <div class="col-12 text-center">
                    <img src="../img/indi-stuff/psoriasis-symptoms/NSC.TL.Website.Symptoms_PS.5.JointPain.png" width="35%"/>
                    <p>Joint Pain</p>
                  </div>
                </div>
                
                <h3 class="h3-indi mt-4">Causes</h3>
                <p>Psoriasis is a chronic inflammatory condition characterized by pink to salmon-colored plaques with characteristic silver-white scales. The condition results from increased cell turnover in the epidermis (the superficial layer of the skin) resulting in marked skin thickening with associated scale formation.</p>
              </div>

              <div class="col-12 bg-c-grey">
                <p class="p-indi">
                Before/After photos
                </p>
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
                    <img src="../img/indi-stuff/RXStep1.png"/>
                  </div>
                  <div class="col-12 d-flex align-items-center">
                    <p class="p-indi mb-0">Apply to affected areas 1 to 4 times daily until condition subsides.</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <img src="../img/indi-stuff/RXStep2.png"/>
                  </div>
                  <div class="col-sm-10 d-flex align-items-center">
                    <p class="p-indi mb-0">Rub product in a circular motion for 20 seconds or until fully absorbed.</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <img src="../img/indi-stuff/RXStep3.png"/>
                  </div>
                  <div class="col-12 d-flex align-items-center">
                    <p class="p-indi mb-0">For optimal results, use apply before bed.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 bg-c-grey">
                <h2 class="h2-indi">ADVANCED COLLECTION</h2>
                <p class="p-indi">Introduce night cream and day cream here with stylized group shot.</p>
                <button>See Daily Cream</button>  <button>See Night Cream</button>
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
                <img src="../img/indi-stuff/ingredients/therapy/NAE-8.png" alt="Nerium Oleander Extract"/>
                <p class="p-indi ">Powerful antioxidant to reduce the impact of inflammation.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/SalicylicAcid.png" alt="Salicylic Acid"/>
                <p class="p-indi">Exfoliates the skin by softening and dissolving keratin (protein that causes the skin cells to stick together)</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/BiovaDerm.png" alt="Peptide Matrix"/>
                <p class="p-indi">Relief of pain and works to normalize collagen and elastin skin structures.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/PB8.png" alt="Parsely Basil Extract"/>
                <p class="p-indi">As a source of vitamin A, this key ingredient encourages healthy skin cell production.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/CollidalOatmeal.png" alt="Collidal Oatmeal"/>
                <p class="p-indi">helps smooth and comfort skin that is itchy and dry.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/CasterSeedOil.png" alt="Caster Seed Oil"/>
                <p class="p-indi">Works to condition the skin giving it moisture and softness.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/SheaButter.png" alt="Shea Butter"/>
                <p class="p-indi">Replenishes and nourishes the skin with natural vitamin and essential fatty acids.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/CoconutExtract.png" alt="Coconut Extract"/>
                <p class="p-indi">Derived from the meat of the coconut, this extract is highly absorbent while it moisturizes, nourishing moisture into the skin effectively.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/ApricotExtract.png" alt="Apricot Extract"/>
                <p class="p-indi">Soften and smooth the skin when activated by the skin’s oils</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/OregonGrapeRootExtract.png" alt="Oregon Grape Root Extract"/>
                <p class="p-indi">This grape root extract grown in Oregon helps combat skin irritants associated with psoriasis and other atopic dermatitis illnesses.</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-12">
                <h3 class="h3-indi">Full ingredients</h3> 
                <p class="p-indi">SALICYLIC ACID (2%), <br/>
                ALOE BARBADENSIS LEAF JUICE, NERIUM OLEANDER (OLEANDER) LEAF EXTRACT, PROPANEDIOL, HYDROLYZED EGG SHELL MEMBRANE, WATER (AQUA), CETYL ALCOHOL, GLYCERIN, GLYCERYL STEARATE, POTASSIUM CETYL PHOSPHATE, CAPRYLIC/CAPRIC TRIGLYCERIDE, GLYCERYL CAPRYLATE, CETEARYL OLIVATE, DIMETHICONE, OCIMUM BASILICUM (BASIL) EXTRACT, RICINUS COMMUNIS (CASTOR) SEED OIL, SORBITAN OLIVATE, LYSOLECITHIN, SCLEROTIUM GUM, ALLANTOIN, ARGININE, BUTYROSPERMUM PARKII (SHEA) BUTTER, CARUM PETROSELINUM (PARSLEY) EXTRACT, COLLOIDAL OATMEAL, OLEA EUROPAEA (OLIVE) FRUIT OIL, PELARGONIUM GRAVEOLENS FLOWER OIL, PRUNUS ARMENIACA (APRICOT) FRUIT EXTRACT, TOCOPHEROL, XANTHAN GUM, LEUCONOSTOC/RADISH ROOT FERMENT FILTRATE, PULLULAN, AQUA, LINUM USITATISSIMUM (LINSEED) SEED OIL, SODIUM BENZOATE, BENZYL ALCOHOL, POTASSIUM SORBATE, CITRIC ACID, DIPOTASSIUM GLYCYRRHIZATE, GLYCERYL UNDECYLENATE, LECITHIN, MAHONIA AQUIFOLIUM ROOT EXTRACT, SEA SALT, BUTTER EXTRACT, COCOS NUCIFERA (COCONUT) FRUIT EXTRACT, CUCUMIS MELO CANTALUPENSIS FRUIT EXTRACT, MUSA SAPIENTUM (BANANA) FRUIT EXTRACT, PIMPINELLA ANISUM (ANISE) FRUIT EXTRACT, PLANKTON EXTRACT, PYRUS MALUS (APPLE) FRUIT EXTRACT, SANTALUM ALBUM (SANDALOWOOD) EXTRACT, VACCINIUM MACROCARPON (CRANBERRY) FRUIT EXTRACT, VANILLA PLANIFOLIA FRUIT EXTRACT</p>
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
<script src="../js/independentPages.js"></script>
<?php include('../deepPageFooter.php'); ?>