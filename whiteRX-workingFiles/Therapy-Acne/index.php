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
          <img src="../img/indi-stuff/116x116-Acne-30mL-Tube-Carton-Shadow.jpg" class="float-left" onclick="pictureChangeFirstAcne()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/116x116-Psoriasis-Smear.jpg" class="float-left" onclick="pictureChangeSecondAcne()"/>
        </div>
        <div class="p-2 hide-md">
          <img src="../img/indi-stuff/white-rx/116x116-Acne-Drug-Facts.jpg" class="float-left" onclick="pictureChangeThirdAcne()"/>
        </div>
      </div>

      <div class="col-md-5">
        <div class="d-flex align-items-center indi-display">
          <img id="indi-display-img" src="../img/indi-stuff/357x500-Acne-30mL-Tube-Carton-Shadow.png" class="float-right"/>
        </div>
      </div>

      <div class="row show-md mx-auto">
        <div class="col-12 d-flex">
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-Acne-30mL-Tube-Carton-Shadow.jpg" class="indi-pictureChanger" onclick="pictureChangeFirstAcne()"/>
            </div>
            <div class="p-2">
              <img src="../img/indi-stuff/116x116-Psoriasis-Smear.jpg" class="indi-pictureChanger" onclick="pictureChangeSecondAcne()"/>
            </div>
            <div class="p-2">
              <img src="../img/indi-stuff/white-rx/116x116-Acne-Drug-Facts.jpg" class="indi-pictureChanger" onclick="pictureChangeThirdAcne()"/>
            </div>
        </div>
      </div>

      <div class="col-md-5">
        <h1 class="h1-indi text-uppercase">NeriumRX Acne Treatment</h1>
        <h4 class="h4-indi">30ml / 1 fl.oz</h4>
        <h2 class="h2-indi mb-4">$39.95<h2>
            
        <h3 class="h3-indi benefits-line">BENEFITS</h3>
        <ul class="h4-indi ul-hexbullets">
          <li>Clears Acne Blemishes allowing skin to heal</li>
          <li>Restores skin texture and reduces outbreaks</li>
          <li>Antimicrobial and anti-inflammatory properties</li>
          <li>Balances sebum (oil) secretion</li>
          <li>Penetrates pores to control acne blemishes</li>
          <li>Immunoregulation support</li>
          <li>Enhanced antioxidant protection rejuvenates and hydrates skin</li>
          <li>Stimulates regenerative properties</li>
        </ul>
        <div class="move-center">
          <!--Shopify buy button-->
          <!-- <div id='product-component-8b4b581f1d5'></div> -->
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
        NeriumRX Acne Treatment is a revolutionary formula designed with key ingredients working in synergy to eliminate and prevent acne breakouts. Infused with Nerium SkinCare’s patented Nerium Aloe Extract, along with other unique key ingredients, this formula not only treats acne but also provides the necessary support to regulate, support and rejuvenate the skin’s physiology.
        </p>
      </div>
      <div class="col-md-5 bg-c-grey">

        <h2 class="h2-indi move-center">THERAPY COLLECTION</h2>
        <img src="../img/indi-stuff/white-rx/385x420-RX-Products-V1.png" width="100%"/>
        <div class="move-center">
          <a href="../SkinHealth/index.php">
            <button class="shop-btn m-2">Shop more NeriumRX</button>  
          </a>
        </div>

      </div>
    </div>

    <!--RECOMMENDED TEXT SECTION-->
    <div id="recommended-text">
      <div class="row mb-5">
        <div class="col-md-7">
          <h3 class="h3-indi">Symptoms and Causes</h3>
          <div class="row justify-content-center">
            <p>Acne is a common skin condition whereby keratinized cells cause blockage of sebaceous follicles (hair follicle surrounded by oil glands).  The resultant blockage causes gradual accumulation of sebum or oil in the canal of the hair follicle. Inflammation results due to irritation caused by the concurrent growth and breakdown of the oils blocked in the canal by the bacteria Propionibacterium acnes.  The inflammation results in the formation of acne pustules, and in severe cases cysts may form.
            </p>
          </div>
        </div>

        <div class="col-md-5">
          <img src="../img/indi-stuff/Psoriasis-Before-After-Image.jpg" width="100%"/>
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
                <p class="p-indi mb-0">For optimal results apply before bed. For pain associated with Psoriasis, use in combination with Dermal Pain Relief Therapy</p>
              </div>
            </div>
          </div>
          <div class="col-md-5 bg-c-grey">

            <h2 class="h2-indi move-center">THERAPY COLLECTION</h2>
            <img src="../img/indi-stuff/white-rx/385x420-RX-Products-V1.png" width="100%"/>
            <div class="move-center">
              <a href="../SkinHealth/index.php">
                <button class="shop-btn m-2">Shop more NeriumRX</button>  
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
            <img src="../img/indi-stuff/ingredients/therapy/NAE-8.png" alt="Nerium Oleander Extract"/>
            <p class="p-indi ">Powerful in its activity and novel in its design, this patented and proprietary ingredient of Nerium SkinCare delivers powerful antioxidants to target free radical damage and to boost the skin rejuvenating processes. Studies show Nerium Aloe Extract helps induce specific cytokines in dermal fibroblasts (skin support cells), known to be relevant in restoring damaged skin.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/SalicylicAcid.png" alt="Salicylic Acid"/>
            <p class="p-indi">Salicylic Acid is a FDA approved over the counter ingredient in the treatment of acne.  As an ingredient it is a keratolytic, meaning it is an exfoliant that dissolves keratin.  It has further been shone to dissolve lipids such as fat and oils.  Since acne is due to blockage of keratinized cells and accumulation of oil, in its mechanism to dissolve both keratin and skin cells, salicylic acid works as effective active ingredient in acne treatment and management.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/BiovaDerm.png" alt="Peptide Matrix"/>
            <p class="p-indi">BiovaDerm contains collagen, elastin and glycosaminoglycans in natural harmony to provide essential nutrients to the skin.  Studies show that BiovaDerm provides potent cellular protection against oxidative injury that may result from inflammatory cells.  Combined with its in-vitro demonstration for inducing skin cell to make connective tissue, this ingredient has the potential in minimizing acne associated inflammation while enhancing associated healing.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/PB8.png" alt="Parsely Basil Extract"/>
            <p class="p-indi">Parsley Basil Extract are natural sources of vitamin A. Vitamin A and its derivatives and precursors, collectively called retinoids, are well documented in treatment of acne.  Along with providing rich antioxidants, the natural parsley basil extract offers a safe, holistic approach for delivery of natural retinoids in management of acne.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/CollidalOatmeal.png" alt="Collidal Oatmeal"/>
            <p class="p-indi">Colloidal Oatmeal is well recognized in the scientific community as topical ingredient to help reduce skin redness and irritation.  Studies show it has rich antioxidant and anti-inflammatory activity.  Furthermore, rich in beta-glucans and saponins, it has hydrating and cleansing properties, respectively.  All these functional properties allow colloidal oatmeal to serve as an effective supporting ingredient in the management of acne conditions. </p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/LinseedOil.png" alt="Linseed Oil"/>
            <p class="p-indi">Linseed oil is renowned for its enrichment in omega-3 fatty acids.  Omega-3 fatty acids have well-established anti-inflammatory activity.  As such, linseed oil has the properties to potentially minimize the severity of acne lesions (due to inflammation) and reduce outbreaks.</p>
          </div>
          <div class="col-sm-6 col-md-3">
            <img src="../img/indi-stuff/ingredients/therapy/GeraniumOil.png" alt="Geranium Flower Oil"/>
            <p class="p-indi">Geranium Flower Oil is highly regarded in herbal medicine for its antimicrobial properties.  In consideration, it has traditionally been used as an antiseptic for wound care and to treat infections.  In addition, numerous studies cite the potent anti-inflammatory properties of this ingredient.  In respect, the combination of antibacterial and anti-inflammatory property of this oil is why it has been traditionally regarded as an effective antiacne therapy.  </p>
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
              NeriumRX Acne Treatment is a revolutionary formula designed with key ingredients working in synergy to eliminate and prevent acne breakouts. Infused with Nerium SkinCare’s patented Nerium Aloe Extract, along with other unique key ingredients, this formula not only treats acne but also provides the necessary support to regulate, support and rejuvenate the skin’s physiology.
              </p>
            </div>
            <div class="col-12 bg-c-grey">

              <h2 class="h2-indi move-center">THERAPY COLLECTION</h2>
              <img src="../img/indi-stuff/white-rx/385x420-RX-Products-V1.png" width="100%"/>
              <div class="move-center">
                <a href="../SkinHealth/index.php">
                  <button class="shop-btn m-2">Shop more NeriumRX</button>  
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
              <div class="col-md-7">
                <h3 class="h3-indi">Symptoms and Causes</h3>
                <div class="row justify-content-center">
                  <p>Acne is a common skin condition whereby keratinized cells cause blockage of sebaceous follicles (hair follicle surrounded by oil glands).  The resultant blockage causes gradual accumulation of sebum or oil in the canal of the hair follicle. Inflammation results due to irritation caused by the concurrent growth and breakdown of the oils blocked in the canal by the bacteria Propionibacterium acnes.  The inflammation results in the formation of acne pustules, and in severe cases cysts may form.
                  </p>
                </div>   
              </div>

              <div class="col-12">
                <img src="../img/indi-stuff/Psoriasis-Before-After-Image.jpg" width="100%"/>
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
                    <p class="p-indi mb-0">For optimal results apply before bed. For pain associated with Psoriasis, use in combination with Dermal Pain Relief Therapy</p>
                  </div>
                </div>
              </div>
              <div class="col-12 bg-c-grey">

                <h2 class="h2-indi move-center">THERAPY COLLECTION</h2>
                <img src="../img/indi-stuff/white-rx/385x420-RX-Products-V1.png" width="100%"/>
                <div class="move-center">
                  <a href="../SkinHealth/index.php">
                    <button class="shop-btn m-2">Shop more NeriumRX</button>  
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
                <img src="../img/indi-stuff/ingredients/therapy/NAE-8.png" alt="Nerium Oleander Extract"/>
                <p class="p-indi ">Powerful in its activity and novel in its design, this patented and proprietary ingredient of Nerium SkinCare delivers powerful antioxidants to target free radical damage and to boost the skin rejuvenating processes. Studies show Nerium Aloe Extract helps induce specific cytokines in dermal fibroblasts (skin support cells), known to be relevant in restoring damaged skin.  </p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/SalicylicAcid.png" alt="Salicylic Acid"/>
                <p class="p-indi">Salicylic Acid is a FDA approved over the counter ingredient in the treatment of acne.  As an ingredient it is a keratolytic, meaning it is an exfoliant that dissolves keratin.  It has further been shone to dissolve lipids such as fat and oils.  Since acne is due to blockage of keratinized cells and accumulation of oil, in its mechanism to dissolve both keratin and skin cells, salicylic acid works as effective active ingredient in acne treatment and management.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/BiovaDerm.png" alt="Peptide Matrix"/>
                <p class="p-indi">BiovaDerm contains collagen, elastin and glycosaminoglycans in natural harmony to provide essential nutrients to the skin.  Studies show that BiovaDerm provides potent cellular protection against oxidative injury that may result from inflammatory cells.  Combined with its in-vitro demonstration for inducing skin cell to make connective tissue, this ingredient has the potential in minimizing acne associated inflammation while enhancing associated healing.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/PB8.png" alt="Parsely Basil Extract"/>
                <p class="p-indi">Parsley Basil Extract are natural sources of vitamin A. Vitamin A and its derivatives and precursors, collectively called retinoids, are well documented in treatment of acne.  Along with providing rich antioxidants, the natural parsley basil extract offers a safe, holistic approach for delivery of natural retinoids in management of acne.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/CollidalOatmeal.png" alt="Collidal Oatmeal"/>
                <p class="p-indi">Colloidal Oatmeal is well recognized in the scientific community as topical ingredient to help reduce skin redness and irritation.  Studies show it has rich antioxidant and anti-inflammatory activity.  Furthermore, rich in beta-glucans and saponins, it has hydrating and cleansing properties, respectively.  All these functional properties allow colloidal oatmeal to serve as an effective supporting ingredient in the management of acne conditions. </p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/LinseedOil.png" alt="Linseed Oil"/>
                <p class="p-indi">Linseed oil is renowned for its enrichment in omega-3 fatty acids.  Omega-3 fatty acids have well-established anti-inflammatory activity.  As such, linseed oil has the properties to potentially minimize the severity of acne lesions (due to inflammation) and reduce outbreaks.</p>
              </div>
              <div class="col-12">
                <img src="../img/indi-stuff/ingredients/therapy/GeraniumOil.png" alt="Geranium Flower Oil"/>
                <p class="p-indi">Geranium Flower Oil is highly regarded in herbal medicine for its antimicrobial properties.  In consideration, it has traditionally been used as an antiseptic for wound care and to treat infections.  In addition, numerous studies cite the potent anti-inflammatory properties of this ingredient.  In respect, the combination of antibacterial and anti-inflammatory property of this oil is why it has been traditionally regarded as an effective antiacne therapy.  </p>
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
   
<?php include('../deepPageFooter.php'); ?>