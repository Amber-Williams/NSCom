<?php include('../deepPageHeader.php'); ?>

<style>
    .grid-wrapper {
        display: grid;
    }
    @media only screen and (min-width:734px) {
          .grid-wrapper {
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 50%;
            grid-column-gap: 3%;
            /* Dev note: grid row below only works across browsers if defined in px's instead of % */
            grid-row-gap:20px;
          }

    }
    @media only screen and (min-width: 470px) and (max-width: 735px) {
        .grid-wrapper {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 50%;
            grid-column-gap: 3%;
            /* Dev note: grid row below only works across browsers if defined in px's instead of % */
            grid-row-gap:20px;
        }
    }
    @media only screen and (max-width: 470px) {
        .grid-wrapper {
            grid-template-columns: 1fr;
            grid-template-rows: 20%;
            /* Dev note: grid row below only works across browsers if defined in px's instead of % */
            grid-row-gap:20px;
        }
    }

    .box-front,
    .box-back {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 200px;
        max-height: 200px;
        min-width: 100%;
        max-width: 250px;
    }
    .box-front {
        border: 1px solid #e2e2e2;
        background: white;
        flex-flow: column;
    }
    .box-front img {
        margin:5px;
    }
    .box-back {
        border: 1px solid #e2e2e2;
        background: white;
        font-size: .8em;
        padding:10px;
        text-align: justify;
    }

    .ingredients-grid-text {
        color: #47322e;
        text-transform: uppercase;
        font-size: 1.2em;
        font-weight: normal;
        line-height: 27px;
        text-align: center;
    }
    .box-front span{
        border-bottom: 1px solid #47322e;
    }
    .hoverable {
        cursor:default;
        color:#000;
        text-decoration:none;
        }
    .hoverable .hover {
        display:none;
        }
    .hoverable:hover .normal {
        display:none;
        }
    .hoverable:hover .hover {
        display:grid;
        }
    a:hover {
        text-decoration:  none;
    }
</style>
  <div class="row">
    <div class="col-12 px-0 mb-2">
      <img src="../img/about-us/1152x584-About-Page.jpg" width="100%"/>
    </div>
  </div>

  <div class="container">
    <div class="row mt-3">
      <div class="col-12">
            <ul class="navigation-menu  move-center">
              <li id="story-nav">Our Story</li>
              <li id="products-nav">Products</li>
              <li id="farms-nav">Farm</li>
              <li id="philosophy-nav">Philosophy</li>
              <li id="ingredients-nav">Ingredients</li>
              <li id="leadership-nav">Leadership</li>
            </ul>
      </div>
    </div>

    <!--OUR STORY SECTION-->
    <div id="story-text" class="row">
      <div class="col-12"> 
        <h1> Our Story</h1>
        <p>Nerium SkinCare, Inc. is dedicated to offering health and beauty solutions that are based on scientific research and actual customer success. Our natural products are founded on the result of years of continuing research at leading medical institu- tions, using the latest scientific methods and technology. Utilizing biotechnology research and new breakthrough extraction technology, Nerium SkinCare has formulated and developed a complete line of products that harnesses the unique and ef- fective properties of the Nerium oleander plant.<br/>

        Our vision is to consistently bring “first-in-class” products to market based on our firm belief in three tenets:<br/>
        Core Science<br/>
        Real Results<br/>
        Continuous Advancement<br/><br/>

        Our mission is to develop health and beauty solutions that provide unparalleled well-being to the consumer.
        Nerium SkinCare utilizes the Nerium Biotechnology research and technology in the development, formulation, clinical test- ing, manufacturing, regulatory compliance, and product commercialization of its "best-in-class" natural skin care products. It’s this technology, core science, and continuing research on which Nerium SkinCare bases its products and defines their benefits.</p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <h1>History</h1>
          <p>We observed skin healing properties when researching the Nerium oleander plant in our labs. The history of Nerium SkinCare begins with groundbreaking research conducted by Dr. Robert Newman during his time with our parent company, Nerium Biotechnology. Dr. Newman’s research with natural botanical compounds led to the re-discovery, identification, isolation, and further development of core ingredients from the Nerium oleander plant. Continuing research and utilization of proprietary technologies has provided us the opportunity to develop a series of prod- ucts that you know today as the NeriumAD® line of skin care.<br/>
          Historical use of the Nerium oleander plant has been re- ported in ancient texts and folklore for more than 1,500 years. In fact, the Nerium oleander plant has been used traditionally as folk remedies for a wide variety of condi- tions. Over the last decade, there has been a considerable increase in the number of peer-reviewed studies in science journals that substantiate the properties of the Nerium ole- ander plant and its benefits.</p>
        </div>
        <div class="col-md-6">
          <img src="../img/about-us/AboutUsHistory-B.jpg" width="100%"/>
        </div>
      </div>
    </div>


    <!--PRODUCTS SECTION-->
    <div id="products-text" class="row">
      <div class="col-12"> 
        <h1> Products</h1>
        <p>Nerium SkinCare, Inc. is dedicated to offering solutions that are based on scientific research and actual customer success. Our natural products offered to the consumer are founded on the continuing research at leading medical institutions using the latest scientific methods and technology. Utilizing biotechnology research and new breakthrough extraction technology, Nerium SkinCare has formulated and is developing a complete line of products that harnesses Nerium oleander's unique and effective properties.<br/>

        Utilization of the Patented Nerium Oleander Extract ingredient and additional proprietary ingredients provides the opportu- nity for Nerium SkinCare to formulate and develop a complete line of unique "first in class" skin care cosmetic and US FDA OTC topical drug products. Additional products are constantly under development.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h1>Quality</h1>
          <p>As a commitment to quality, Nerium SkinCare does not compromise on what goes into our products. The quality of Nerium Skincare's products is a direct result of the in- vestment into the people, scientific research, new tech- nology development, natural farming methods, biomass processing, cGMP production facilities, and product safety testing.<br/>

          The Nerium FarmsTM is the largest Nerium oleander op- eration of its kind in the world. Using environmentally re- sponsible and sustainable techniques, these naturally grown Nerium oleander plants, provide the raw material that make Nerium SkinCare’s products revolutionary. Abiding by strict protocols, the Nerium oleander farm provides a dedicated and renewable biomass resource that is reserved exclusively for Nerium SkinCare.</p>
        </div>
        <div class="col-md-6">
          <img src="../img/about-us/533x652-Quality-Image-B.jpg" width="100%"/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img src="../img/about-us/573x649-Quality-Image-A1.jpg" width="100%"/>
        </div>
        <div class="col-md-6">
          <p>Considering that there were no historical accounts of Nerium oleander farming, it was imperative for Nerium SkinCare to de- velop our own farming operations in order to broaden and commercialize access to the plant. Initially, transitioning of the plant from the nursery environment into a commercial environ- ment involved the establishment of a research entity that al- lowed scientists to understand the growth patterns properly. Over time, as the physiology of Nerium oleander became more evident, planting and irrigation techniques, along with harvest- ing and planting equipment, had to be newly developed. Nerium SkinCare is proud to say that we built our current farm- ing operations from the ground up. <br/>

          After a decade of experience in Nerium oleander commercial farming, Nerium SkinCare continues to focus on new technolo- gy and research that will allow us to enhance our farming oper- ations. We are very proud of our all natural approach and ad- herence to strict biomedical field protocols. We continually seek ways to increase land utilization and field plant capacity through the development of improved planting and irrigations</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <h1>Safety</h1>
          <p>Nerium SkinCare formulators, developers and researchers are dedicated to offering new unique skincare solutions that are based on review of ingredient use experience, specific in vitro product testing, clinical research, pre/post consumer testing, scientific and the actual customer use reports and success. We strongly believe in sustainable, honest, health focused practices, and maximum disclosure of safety information. <br/>
          Nerium SkinCare is constantly seeking new ways to educate our customers about our ingredients and products, how they were designed to work, and how to use them properly.
          Nerium SkinCare makes every effort to ensure our products are safe and effective. If you have any specific health relat- ed questions, please consult your healthcare provider, and/or contact: <a href="../about/#contact">Contact Us</a></p>
        </div>
      </div>
    </div>
    
    <!--FARMS SECTION-->
    <div id="farms-text" class="row">
      FARMS CONTENT HERE
    </div>

    <!--PHILOSOPHY SECTION-->
    <div id="philosophy-text" class="row">
      <div class="col-12">
        <h1>Philosophy</h1>
        <p>Our vision is to consistently bring “first-in-class” products to market based on our firm belief in three tenets: Core Science, Real Results, and Continuous Advancement.</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img src="../img/about-us/529x677-Core-Science.jpg" width="100%"/>
        </div>
        <div class="col-md-6">
          <h1>Core Science</h1>
          <p>Nerium SkinCare, Inc. is dedicated to offering skin care solutions based on scientific research and validation. We are proud that our products were developed based on the re- search conducted at leading medical institutions. Utilizing patented technology, Nerium SkinCare now is effective,re- sult oriented skincare able to develop the novel Nerium Aloe extract which has been the core ingredient in our cov- eted product line.<br/>

          Our Science team is dedicated to continuous ongoing re- search of the Nerium oleander plant, and our products are founded on the commitment to further develop new ingre- dient technology. This has provided Nerium SkinCare with the unique opportunity to formulate and develop for the consumer an innovative and high-quality line (from farm to consumers) natural skin care products.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h1>Real Result</h1>
          <p>Nerium SkinCare, Inc. stands behind the results of our flagship products, NeriumAD® Age-Defying Night Cream and Neriu- mAD® Age-Defying Day Cream, and our exclusive, patented NAE-8® extract. No other skin care line can produce similar real results. <br/>
          NeriumAD® Age-Defying products dramatically reduce the appearance of:</p>
          <ul>
            <li>Fine lines and wrinkles </li>
            <li>Discoloration</li>
            <li>Uneven skin texture</li>
            <li>Enlarged pores</li>
            <li>Aged and sagging skin</li>
          </ul>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/9MbR-pBu0SI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <h1>Real Result</h1>
          <p>Nerium SkinCare, Inc. stands behind the results of our flagship products, NeriumAD® Age-Defying Night Cream and Neriu- mAD® Age-Defying Day Cream, and our exclusive, patented NAE-8® extract. No other skin care line can produce similar real results. <br/>
          NeriumAD® Age-Defying products dramatically reduce the appearance of:</p>
          <ul>
            <li>Fine lines and wrinkles </li>
            <li>Discoloration</li>
            <li>Uneven skin texture</li>
            <li>Enlarged pores</li>
            <li>Aged and sagging skin</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img src="../img/about-us/529x677-Real-Results.jpg" width="100%"/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <img src="../img/about-us/573x576-Real-Promises.jpg" width="100%"/>
        </div>
        <div class="col-md-6">
          <p>REAL RESULTS</p>
          <p>Independently conducted clinical trials show:</p>
          <ul>
            <li>93% of participants had a significant increase in skin moisture.</li>
            <li>86% of participants had an improvement in uneven skin tex- ture.</li>
            <li>86% of participants noted a reduction in pore size.</li>
          </ul>
          <p>REAL BREAKTHROUGH INGREDIENTS</p>
          <p>Our patented extract, derived from a proprietary formulation consistency of Nerium oleander and Aloe vera is proprietary and only found in Nerium SkinCare products. This powerful ingredient works in three key ways:</p>
          <ul>
            <li>By targeting not just the signs of aging but also the underly- ing cause.</li>
            <li>By delivering powerful antioxidants to target free radical damage.</li>
            <li>By boosting the skin rejuvenating process to reveal young- er-looking skin.</li>
          </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <h1>Continuous Advancedment</h1>
          <img src="../img/about-us/1152x560-Continuous-Advancement.jpg" width="100%"/>
          <p>ADVANCEMENT</p>
          <p>Nerium SkinCare, Inc. is committed to advancing skin care science through clinical research. We will never stop innovating or waiver in our promise to deliver “best-in-class” products to the consumer.</p>

          <p>OUR TECHNOLOGY</p>
          <p>Nerium SkinCare created the patented technology that is used to develop our line of skin care products. This technology uti- lizes pure liquid Aloe vera as the medium to extract the natural components of the Nerium oleander plant in a way that pre- serves the unique and beneficial properties of both plants.</p>

          <p>PRODUCT DEVELOPMENT</p>
          <p>Initial product development included our flagship products, NeriumAD® Age-Defying Night Cream, NeriumAD® Age-Defy- ing Day Cream, and NeriumAD® Age-Defying Firming Body Contour Cream. Additional products are under development including research into a future line of over-the-counter products called NeriumRx®.</p>
        </div>
      </div>
      
    </div>

    <div id="ingredients-text" class="row">
            
        <div class="row">
            <div class="col-sm-12">
                <div class="grid-wrapper">

                    <div class="box1">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Nerium oleander</span>
                                    <img src="../img/about-us/neriumoleander.jpg" alt="Nerium Oleander" width="70%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Targets not just the signs of aging but also the underlying cause. Delivers powerful antioxidants to target free radical damage. Boosts the skin rejuvenating process to reveal younger-looking skin. Research has shown that NAE-14® possesses potent antioxidant and anti-inflammatory properties, while also inducing specific cytokines in dermal fibroblasts of relevance to wound healing.</p>
                                </div>
                            </span>
                        </a>
                    </div>
                    
                    <div class="box2">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>BiovaDerm</span>
                                    <img src="../img/about-us/biova.jpg" alt="BiovaDerm" width="50%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>This advanced technology process retains the natural ratios of key elements found in nature’s potent life source of proteins and peptides from water soluble egg membrane (WSEM) that are beneficial to skin. These peptides include collagen, elastin, desmosine, isodesmosine and glycosaminoglycans (GAGs). </p>
                                </div>
                            </span>
                        </a>
                    </div>
                    
                    <div class="box3">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Parsley Basil</span>
                                    <img src="../img/about-us/basil.jpg" alt="Parsley Basil" width="50%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>When basil and parsley are extracted and combined in the correct way it creates a unique synergy, which is extremely efficacious on the skin.</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box4">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Zinc Oxide</span>
                                    <img src="../img/about-us/zincoxide.png" alt="Zinc Oxide" width="50%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>This popular ingredient is used primary to shield and protect the skin from UVB, UVA II and UVA I rays, as it is considered as one of the safest to use sun-protecting ingredient on the market. Zinc oxide is also used to be a soothing agent and an antioxidant.</p>
                                </div>
                            </span>
                        </a>
                    </div>
                    
                    <div class="box5">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Dimethicone</span>
                                    <img src="../img/about-us/dimethicone.png" alt="Dimethicone" width="60%"/>
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>One of the most commonly found skin care ingredient is a silicon-based polymer used to condition the skin while protecting the skin, working to prevent water loss by forming a hydrating barrier on the skin. Fills in wrinkles and lines on the face to give it a temporary plumped appearance.</p>
                                </div>
                            </span>
                        </a>
                    </div>
                    
                    <div class="box6">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Hyaluronic Acid </span>

                                    <img src="../img/about-us/hyaluronicacid.png" alt="Hyaluronic Acid" width="70%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Powerful skin moisturizer</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box7">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Aloe Vera</span>
                                    <img src="../img/about-us/Aloe.png" alt="Aloe Vera" width="50%"/>                               
                                 </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Antioxidant and antibacterial properties</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box8">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Niacinamide </span>
                                    <img src="../img/about-us/niacinamide.png" alt="Niacinamide" width="70%"/>                               
                                 </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Vitamin B3</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box9">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Superoxide Dismutase</span>
                                    <img src="../img/about-us/superoxidedismutase.png" alt="Superoxide Dismutase" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Antioxidant Enzyme</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box10">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Camphor</span>

                                    <img src="../img/about-us/camphor.png" alt="Camphor" width="70%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Works upon application to relieve pain</p> 
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box11">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Menthol</span>

                                    <img src="../img/about-us/menthol.jpg" alt="Menthol" width="40%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Topical Analgesic</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box12">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Allantoin</span>
                                    <img src="../img/about-us/placeholder-3.jpg" alt="Allantoin" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Works to protect the skin from environmental stressors and bacteria</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box13">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Salicylic Acid</span>
                                    <img src="../img/about-us/placeholder-2.jpg" alt="Salicylic Acid" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>May work by helping the skin to shed dead cells from the top layer and by decreasing redness and swelling (inflammation). In addition, may help decrease the apperance of pimples that form and speeds healing.</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box14">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Green Tea</span>
                                    <img src="../img/about-us/greentea.jpg" alt="Green Tea" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Green tea has been shown to be the most effective agent against skin inflammation</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box15">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Collidal Oatmeal</span>
                                    <img src="../img/about-us/oatmeal.jpg" alt="Collidal Oatmeal" width="70%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">Works to smooth and comfort skin that is itchy and dry</div>
                            </span>
                        </a>
                    </div>

                    <div class="box16">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Coconut Extract</span>
                                    <img src="../img/about-us/coconut.jpg" alt="Coconut Extract" width="50%"/>                                
                                </div>
                            </span>
                            
                            <span class="hover">
                                <div class="box-back">
                                    <p>Delivers non-irritating moisturizing and conditioning benefits effectively to the skin</p>
                                </div>
                            </span>
                        </a>
                    </div>

                    <div class="box17">
                        <a href="#" class="hoverable">
                            <span class="normal ingredients-grid-text">
                                <div class="box-front">
                                    <span>Caffeine</span>
                                    <img src="../img/about-us/caffeine.jpg" alt="Caffeine" width="70%"/>                                
                                </div>
                            </span>
                             
                            <span class="hover">
                                <div class="box-back">
                                    <p>Antioxidant</p>
                                </div>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div> 
    </div>

    <div id="leadership-text" class="row"></div>
    <hr/>
  <!--END Container Div-->
  </div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
    <script>
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
  </script>
<?php include('../deepPageFooter.php'); ?>