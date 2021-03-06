<?php include('../deepPageHeader.php'); ?>
<style>
    /* need a:hover below for ingredients widget*/
    a:hover {
        text-decoration:  none;
    }
</style>
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
  <div class="row" id="elementOutIn">
    <div class="col-12 px-0 mb-2" id="bannerChangeHere">
      <!--Mobile Banner-->
        <img src="../img/515x278-About-Us-Main-Banner.jpg" class="move-center d-block d-sm-block d-md-none" width="100%"/>
      <!--Desktop banner-->
        <img src="../img/1366x500-About-Us-Main-Banner.jpg" class="move-center d-none d-md-block d-lg-block d-xl-none" width="100%"/>
      <!--Larger Screen Banner-->
        <img src="../img/1150x310-About-Us-Main-Banner.jpg" class="banner-container move-center d-none d-xl-block" width="100%"/>
    </div>
  </div>
  <div class="container">
    <div class="row mt-3 hide-xs">
      <div class="col-12">
            <ul class="navigation-menu  move-center">
              <li class="move-center" id="story-nav" onclick="bannerChange(1)"> Our Story </li>
              <li class="move-center" id="products-nav" onclick="bannerChange(2)"> Products </li>
              <li class="move-center" id="farms-nav" onclick="bannerChange(3)"> Farm </li>
              <li class="move-center" id="philosophy-nav" onclick="bannerChange(4)"> Philosophy </li>
              <li class="move-center" id="ingredients-nav" onclick="bannerChange(5)"> Ingredients </li>
              <li class="move-center" id="leadership-nav" onclick="bannerChange(6)"> Leadership </li>
            </ul>
      </div>
    </div>

    <!--Div to hide section during mobile sizing-->
    <div class="hide-xs">
    <!--OUR STORY SECTION-->
    <div id="story-text" class="row">
      <div class="col-12"> 
        <h1>Our Story</h1>
        <p>Nerium SkinCare, Inc. is dedicated to offering health and beauty solutions that are based on scientific research and actual customer success. Our natural products are founded on the result of years of continuing research at leading medical institutions, using the latest scientific methods and technology. Utilizing biotechnology research and new breakthrough extraction technology, Nerium SkinCare has formulated and developed a complete line of products that harnesses the unique and effective properties of the Nerium oleander plant.<br/>
        <br/>
        Our vision is to consistently bring “first-in-class” products to market based on our firm belief in three tenets:
        <br/>
        Core Science<br/>
        Real Results<br/>
        Continuous Advancement<br/><br/>

        Our mission is to develop health and beauty solutions that provide unparalleled well-being to the consumer.
        Nerium SkinCare utilizes the Nerium Biotechnology research and technology in the development, formulation, clinical testing, manufacturing, regulatory compliance, and product commercialization of its "best-in-class" natural skin care products. It’s this technology, core science, and continuing research on which Nerium SkinCare bases its products and defines their benefits.</p>
      <hr/>
      </div>

      <div class="col-12 row">
        <div class="col-md-6">
          <h1>History</h1>
          <p>We observed skin healing properties when researching the Nerium oleander plant in our labs. The history of Nerium SkinCare begins with groundbreaking research conducted by Dr. Robert Newman during his time with our parent company, Nerium Biotechnology. Dr. Newman’s research with natural botanical compounds led to the rediscovery, identification, isolation, and further development of core ingredients from the Nerium oleander plant. Continuing research and utilization of proprietary technologies has provided us the opportunity to develop a series of products that you know today as the NeriumAD® line of skin care.<br/>
          Historical use of the Nerium oleander plant has been reported in ancient texts and folklore for more than 1,500 years. In fact, the Nerium oleander plant has been used traditionally as folk remedies for a wide variety of conditions. Over the last decade, there has been a considerable increase in the number of peer-reviewed studies in science journals that substantiate the properties of the Nerium oleander plant and its benefits.</p>
        </div>
        <div class="col-md-6">
          <img src="../img/about-us/AboutUsHistory-B.jpg" width="100%"/>
        </div>
      </div>
    </div>

    <!--PRODUCTS SECTION-->
    <div class="hide-xs"></div>
    <div id="products-text" class="row">
      <div class="col-12"> 
        <h1> Products</h1>
        <p>Nerium SkinCare, Inc. is dedicated to offering solutions that are based on scientific research and actual customer success. Our natural products offered to the consumer are founded on the continuing research at leading medical institutions using the latest scientific methods and technology. Utilizing biotechnology research and new breakthrough extraction technology, Nerium SkinCare has formulated and is developing a complete line of products that harnesses Nerium oleander's unique and effective properties.<br/>

        Utilization of the Patented Nerium Oleander Extract ingredient and additional proprietary ingredients provides the opportunity for Nerium SkinCare to formulate and develop a complete line of unique "first in class" skin care cosmetic and US FDA OTC topical drug products. Additional products are constantly under development.</p>
      </div>
      
      <hr/>
      <div class="col-12 row">
        <div class="col-md-6">
          <h1>Quality</h1>
          <p>As a commitment to quality, Nerium SkinCare does not compromise on what goes into our products. The quality of Nerium Skincare's products is a direct result of the investment into the people, scientific research, new technology development, natural farming methods, biomass processing, cGMP production facilities, and product safety testing.<br/>

          The Nerium FarmsTM is the largest Nerium oleander operation of its kind in the world. Using environmentally responsible and sustainable techniques, these naturally grown Nerium oleander plants, provide the raw material that make Nerium SkinCare’s products revolutionary. Abiding by strict protocols, the Nerium oleander farm provides a dedicated and renewable biomass resource that is reserved exclusively for Nerium SkinCare.</p>
        </div>
        <div class="col-md-6 mb-4">
          <img src="../img/about-us/533x652-Quality-Image-B.jpg" width="100%"/>
        </div>
      </div>
      

      <div class="col-12 row">
        <div class="col-md-6 mb-4">
          <img src="../img/about-us/573x649-Quality-Image-A1.jpg" width="100%"/>
        </div>
        <div class="col-md-6">
          <p>Considering that there were no historical accounts of Nerium oleander farming, it was imperative for Nerium SkinCare to develop our own farming operations in order to broaden and commercialize access to the plant. Initially, transitioning of the plant from the nursery environment into a commercial environment involved the establishment of a research entity that allowed scientists to understand the growth patterns properly. Over time, as the physiology of Nerium oleander became more evident, planting and irrigation techniques, along with harvesting and planting equipment, had to be newly developed. Nerium SkinCare is proud to say that we built our current farming operations from the ground up. <br/>

          After a decade of experience in Nerium oleander commercial farming, Nerium SkinCare continues to focus on new technology and research that will allow us to enhance our farming operations. We are very proud of our all natural approach and adherence to strict biomedical field protocols. We continually seek ways to increase land utilization and field plant capacity through the development of improved planting and irrigations</p>
        </div>
      </div>

      <hr/>

      <div class="col-12 row">
        <div class="col-12">
          <h1>Safety</h1>
          <p>Nerium SkinCare formulators, developers and researchers are dedicated to offering new unique skincare solutions that are based on review of ingredient use experience, specific in vitro product testing, clinical research, pre/post consumer testing, scientific and the actual customer use reports and success. We strongly believe in sustainable, honest, health focused practices, and maximum disclosure of safety information. <br/>
          Nerium SkinCare is constantly seeking new ways to educate our customers about our ingredients and products, how they were designed to work, and how to use them properly.
          Nerium SkinCare makes every effort to ensure our products are safe and effective. If you have any specific health related questions, please consult your healthcare provider, and/or contact: <a href="../about/#contact">Contact Us</a></p>
        </div>
      </div>
    </div>

    <!--FARMS SECTION-->
    <div id="farms-text" class="row">
        <div class="col-12">
            <h1>Nerium Oleander Farm</h1>
            <p>The Nerium Farms™ is the largest Nerium oleander operation of its kind in the world. With over 100,000 Nerium oleander plants, we employ natural and organic farming practices and our orchard helps to minimize our carbon footprint by eliminating greenhouse gases throughout the year.
            <br/><br/>
            Our science begins at the farm where we use the latest horticulture techniques for watering, farming, and harvesting. For example, by also incorporating the use of the latest analytical instruments, we are better able to determine the optimal time for harvesting. Similar analytic processes are employed in other aspects of farming. From beginning to end, from farm to manufacturer to consumers, Nerium SkinCare is dedicated to providing real science and real results.
            <br/><br/>
            “We’re primarily after the leaves. And that's the reason why we do not want any irrigation water; we do not want any type of chemicals; nothing on the leaves. So it is a very specialized approach, it's extremely laborious, and it's very very expensive. No one has attempted to put in an orchard like this and they still haven’t. It's not that easy to get involved in this industry. It's very complex; there’s a lot of science that goes into it. Science not only starting at the field itself but all the way through the processing as well as to the end use. So it's an extremely complex dynamic approach. There’s no question in my mind that this field is much more than a field of dreams, it's truly is a field of life”– Joel Curtis, Chief Agricultural Officer of Nerium Farms™
            </p>
        </div>
    </div>

    <!--PHILOSOPHY SECTION-->
    <div id="philosophy-text" class="row">
      <div class="col-12">
        <h1>Philosophy</h1>
        <p>Our vision is to consistently bring “first-in-class” products to market based on our firm belief in three tenets: Core Science, Real Results, and Continuous Advancement.</p>
        <div class="move-center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/9MbR-pBu0SI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
          </div>
      </div>
      
      <hr/>
    
      <div class="col-12 row">
        <div class="col-md-6">
          <img src="../img/about-us/529x677-Core-Science.jpg" width="100%"/>
        </div>
        <div class="col-md-6">
          <h1>Core Science</h1>
          <p>Nerium SkinCare, Inc. is dedicated to offering skin care solutions based on scientific research and validation. We are proud that our products were developed based on the research conducted at leading medical institutions. Utilizing patented technology, Nerium SkinCare now is effective,result oriented skincare able to develop the novel Nerium Aloe extract which has been the core ingredient in our coveted product line.<br/>

          Our Science team is dedicated to continuous ongoing research of the Nerium oleander plant, and our products are founded on the commitment to further develop new ingredient technology. This has provided Nerium SkinCare with the unique opportunity to formulate and develop for the consumer an innovative and high-quality line (from farm to consumers) natural skin care products.</p>
        </div>
      </div>

      <hr/>

      <div class="col-12 row">
        <div class="col-md-6">
          <h1>Real Result</h1>
          <p>Nerium SkinCare, Inc. stands behind the results of our flagship products, NeriumAD® Age-Defying Night Cream and NeriumAD® Age-Defying Day Cream, and our exclusive, patented NAE-8® extract. No other skin care line can produce similar real results. <br/>
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

      <div class="col-12 row">
        <div class="col-md-6">
          <img src="../img/about-us/573x576-Real-Promises.jpg" width="100%"/>
        </div>
        <div class="col-md-6">
          <p>Independently conducted clinical trials show:</p>
          <ul>
            <li>93% of participants had a significant increase in skin moisture.</li>
            <li>86% of participants had an improvement in uneven skin texture.</li>
            <li>86% of participants noted a reduction in pore size.</li>
          </ul>

          <p>Our patented extract, derived from a proprietary formulation consistency of Nerium oleander and Aloe vera is proprietary and only found in Nerium SkinCare products. This powerful ingredient works in three key ways:</p>
          <ul>
            <li>By targeting not just the signs of aging but also the underlying cause.</li>
            <li>By delivering powerful antioxidants to target free radical damage.</li>
            <li>By boosting the skin rejuvenating process to reveal younger looking skin.</li>
          </ul>
        </div>
      </div>
      
      <hr/>

      <div class="col-12 row">
        <div class="col-12">
          <h1>Continuous Advancement</h1>
          <img class="mb-3" src="../img/about-us/1152x560-Continuous-Advancement.jpg" width="100%"/>
          <p>ADVANCEMENT</p>
          <p>Nerium SkinCare, Inc. is committed to advancing skin care science through clinical research. We will never stop innovating or waiver in our promise to deliver “best-in-class” products to the consumer.</p>

          <p>OUR TECHNOLOGY</p>
          <p>Nerium SkinCare created the patented technology that is used to develop our line of skin care products. This technology utilizes pure liquid Aloe vera as the medium to extract the natural components of the Nerium oleander plant in a way that preserves the unique and beneficial properties of both plants.</p>

          <p>PRODUCT DEVELOPMENT</p>
          <p>Initial product development included our flagship products, NeriumAD® Age-Defying Night Cream, NeriumAD® Age-Defying Day Cream, and NeriumAD® Age-Defying Firming Body Contour Cream. Additional products are under development including research into a future line of over-the-counter products called NeriumRx®.</p>
        </div>
      </div>
      
    </div>


    <!--ING SECTION-->
    <div id="ingredients-text" class="row">
        <div class="col-12">
            <h1>Ingredients</h1>
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
                                    <p>Targets not just the signs of aging but also the underlying cause. Delivers powerful antioxidants to target free radical damage. Boosts the skin rejuvenating process to reveal younger looking skin. Research has shown that NAE-14® possesses potent antioxidant and anti-inflammatory properties, while also inducing specific cytokines in dermal fibroblasts of relevance to wound healing.</p>
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


    <!--LEADERSHIP SECTION-->
    <div id="leadership-text" class="row">
        <div class="col-12">
            <h1>Scientific Advisory Board</h1>
            <img src="../img2/board.jpg" alt="18 Various Doctors who lead our Scientific Advisory Board" width="100%"/>
        </div>
        <hr/>
        <div class="col-12">
            <h1>Leadership</h1>
            <div class="row">
                <div class="col-lg-2 mb-2">
                    <img src="../img/headshots/knockeD.jpg" alt="Dennis R. Knocke"/>
                </div>
                <div class="col-lg-10">
                    <h4>Dennis R. Knocke, Chief Executive Officer and Chairman of the Board of Directors</h4>  
                    <p>Mr. Knocke attended Sam Houston State University in Huntsville, Texas. He has successfully founded and operated several start-up 
                    healthcare companies that were acquired by national and international business entities listed on the New York and London stock exchanges. Mr. Knocke was
                    previously President of Bexar Credentials Verification, Inc., a start-up software technology company whose principals included the Bexar County Medical 
                    Society, the Texas Medical Liability Trust, and Florida Physicians Insurance Company.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 mb-2">
                    <img src="../img/headshots/nesterJ.jpg" alt="Joseph B. Nester" />
                </div>
                <div class="col-lg-10">
                    <h4>Joseph B. Nester, Executive Vice President and Sec.Treasurer</h4>
                    <p>Mr. Nester graduated from the University of Texas at Austin with a BBA in General Business. He has over 23 years experience in the financial
                    service industry as well as four years experience with a start-up pharmaceutical company, where he was initially the Secretary Treasurer and after four months
                    was named the President. During this time, he led Anvirzel™ in a successful Phase I clinical study, implemented a Compassionate Use Investigational New Drug 
                    (CUIND) program, and had direct involvement with the FDA, among other regulatory agencies.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2 mb-2">
                    <img src="../img/headshots/lorijones.jpg" alt="Lori Jones" />      
                </div>      
                <div class="col-lg-10">
                    <h4>Lori Jones, Chief Financial Officer</h4>
                    <p>Ms. Jones has more than 25 years’ experience in finance and accounting with both private and publicly held entities.  She has served as 
                    Chief Financial Officer and other executive level positions in various industries including biotech, manufacturing, and technology.   Those position included,
                    in part, service as Vice President of Finance of CeloNova BioSciences, Inc, a global medical device manufacturer, CFO of Analytical Surveys, Inc., a publicly 
                    traded geo-spatial mapping company, and was a partner in Tatum CFO, LLP.   Ms. Jones is a CPA and holds an MBA from the University of Texas at San Antonio. </p>
                </div>
            </div>

                <h4 class="mt-3">Peter A. Leininger, M.D, Director</h4>
                <p>Dr. Leininger received his medical degree from Indiana University. Upon graduation, he joined the U.S. Army as an intern and graduated as a Urologist from the Walter 
                Reed Army Medical Center. He served as Staff Urologist at Ft. Carson, Colorado, after which he entered private practice. In 1978, he joined his brother James R. 
                Leininger, M. D. at Kinetic Concepts, Inc. (KCI), a new medical products company in San Antonio, Texas. KCI became internationally recognized for innovation in 
                medical specialty beds and related products, eventually becoming an overwhelming success leading up to an IPO and sale of the company in 1998. Dr. Leininger’s 
                involvement included management of product research and development, medical research, product acquisition, engineering and manufacturing. He has been granted 
                numerous patents and his medical papers have been published in respected medical journals. Dr. Leininger has served KCI in the capacity as General Manager, National 
                Sales Manager, Medical Director, Board Member and Executive Vice President from 1978 to 1998. In recent years, he has been active in various entrepreneurial endeavors
                 and affiliated with various business and community organizations. He currently serves as Chairman and President of The Arbor Group, President of Peak Finance, LP and 
                 various other business and real estate partnerships.</p>
            
                <h4>Gustavo Ulloa, Jr., Director</h4>
                <p>Mr. Ulloa is General Manager and Director for Laboratorios Francelia, a pharmaceutical laboratory and manufacturing facility located in Tegucigalpa, Honduras. The 
                GMP clean room of Nerium is located inside this facility. He is also Country Sales Manager and Director for Distribuidora Francelia, an import and distribution firm 
                focusing on pharmaceuticals, disposables, hospital equipment, and related items. Mr. Ulloa attended the University of Miami where he studied Industrial Engineering. In 
                his various capacities, he interacts with governmental agencies and private entities throughout Central America. Mr. Ulloa is a member of various pharmaceutical trade 
                and producers organizations. He is presently involved in free trade negotiations related to pharmaceuticals between various Central American countries.</p>
            
                <h4> Richard Boxer, Director</h4>
                <p>Mr. Boxer holds a B.A., from Queens University, Kingston, an M.B.A from York University, Toronto and is a Chartered Accountant. His career began with Clarkson
                 Gordon (now Ernst &amp; Young) and moved to the private business sector. During his business career he served as President of Waldec of Canada (a manufacturing 
                 company), acted as financial agent in a variety of equity transactions, founded and started a venture capital fund specializing in bridge loans, and has 
                 functioned as an angel investor in numerous business sectors. Presently Mr. Boxer is involved as a Director and a shareholder in Falls Management Company, which
                  has built and is now managing an $800,000,000 casino in Niagara Falls, Ontario. He currently serves as President of Buckingham Capital Corporation, a privately
                   owned Canadian merchant bank. Buckingham and an associated company, Rosmir Capital is involved in equity and debt financing, either as an agent or as a principal.</p>
            
                <h4> Kerry Mitchell, Director</h4>
                <p>Ms. Mitchell completed the Executive Program at the Tuck School of Business at Dartmouth College in New Hampshire. She is a sought after speaker in Canada and 
                the U.S. on topics including Media, Leadership,Branding, Marketing to Women, and Women in Business. She provides extensive experience as an executive with a strong
                record of building and transforming multi-platform media brands that include some of the most iconic names in Canadian publishing. Her extensive leadership experience
                in brand development, marketing and sales, including in the cosmetics, fashion, and lifestyle industries, will be a great benefit to the development and marketing of
                Nerium’s consumer products.</p>
            
                <h4>J. Peter Nettelfield, Honorary/Founding Director (2007-2012) </h4>
                <p>Mr. Nettelfield attended the University of Manitoba in Winnipeg and prior to graduation joined the prestigious Canadian investment banking firm of Wood Gundy 
                &amp; Company, Limited. During his time there he assisted in the initial development of the Canadian money market. After 10 years with Wood Gundy, Mr. Nettelfield’s
                 interest changed from fixed income securities to equities. He then joined Burns Bros. &amp; Denton, noted for its excellent research department. Mr. Nettelfield 
                 serviced major institutions and commercial accounts. While at Burns Bros., at the invitation of Sir John Templeton, he became a director of the Templeton Growth 
                 Fund. Upon leaving the investment business, he moved to Texas where he became the president of the Texas subsidiary of a Canadian real estate development firm. In 
                 this capacity, he oversaw commercial development in Dallas, Austin, and San Antonio. In recent years, he has been active in various entrepreneurial endeavors. While 
                 Mr. Nettelfield has been a resident of Texas for over 30 years, he is proud of his Canadian heritage and has retained his Canadian citizenship.</p>
                 
                <h4>John Christopher Counsel Wansbrough, Director (Retired 2016)</h4>
                <p>Mr. Wansbrough holds a B.A., from the University of Toronto, and is a Chartered Financial Analyst. His career began with the prestigious Canadian investment banking
                 firm of Wood Gundy &amp; Company, Limited. After 7 years with Wood Gundy he joined National Trust Company Limited, were he served as President of National Trust Company
                  from 1977 to 1986, Vice Chairman from 1986 to 1991 and Lead Director through 1995. Mr. Wansbrough has also served as Chairman of the Board of OMERS Realty Corporation 
                  from 1989 to 1997, Chairman of the R.S. McLaughlin Foundation from 1994 to 2007, and currently serves as Chairman of Rogers Telecommunications Limited from 1997 to the
                   present. His service as a director to many additional business and community affiliations are too numerous to list.</p>
            
                <hr>
                <h1>Advisory Board</h1><br/>
            
                <h4>Robert A. Newman, Ph.D., Scientific Advisor</h4>
                <p>Dr. Newman obtained his M.S. and Ph.D. degrees in Pharmacology and Toxicology from the University of Connecticut and then served in postdoctoral positions at the 
                Medical School of the University of Georgia as well as the Department of Biochemistry at the University of Vermont. He served as a faculty member at the University of 
                Vermont Medical School for seven years and then spent a sabbatical year at Stanford University performing research on immune targeted therapy. He has spent the last 24
                 years at the University of Texas M. D. Anderson Cancer Center in Houston, Texas where he served as the founder and Co-Director of the Pharmaceutical Development Center.
                  He has published over 270 articles dealing with the pharmacology, toxicology and development of anticancer drugs. Dr. Newman has recently retired (September 1, 2008) 
                  from M. D. Anderson, but remains actively involved in continuing research as Scientific Advisor to NBI.</p>
            
                <h4>Keith I. Block, M.D., Medical Advisor</h4>
                <p>Dr. Block is an internationally recognized integrative cancer-care specialist and visiting lecturer. As Medical Director of the Block Center for Integrative Cancer 
                Care in Evanston, Illinois, the Block Center is committed to caring for people with cancer and improving total wellness through the integration of research-based 
                complementary therapies with innovative approaches to conventional medicine. Dr. Block is the Director of Integrative Medical Education and the Clinical Assistant 
                Professor, Department of Medical Education for the College of Medicine, University of Illinois at Chicago. While too numerous to list all governmental, teaching, and
                 professional appointments here, Dr. Block is Editor-In-Chief of Integrated Cancer Therapies, Sage Science Press, a Member of The Editorial Board for Physician Data 
                 Query, CAM, National Cancer Institute, Bethesda, Maryland, and Scientific Director of the Institute for Integrative Cancer Research and Education. He brings first-hand
                  clinical knowledge of Anvirzel™ and its effects through his observations of patients receiving Anvirzel™ therapy.</p>
            
                <h4>Donald E. Baxter, M.D., International Medical Advisor</h4>
                <p>Dr. Baxter is an internationally renowned and board-certified orthopedic surgeon with a private practice in Houston, Texas. He has been a Clinical Professor of 
                Orthopedic Surgery at both Baylor College of Medicine and the University of Texas Health Science Center. While too numerous to list here, Dr. Baxter is the author of
                 many papers and books. He is also an international and visiting lecturer. Additionally, Dr. Baxter is a past president and director of the Texas Neurofibromatosis 
                 Foundation. He brings first hand knowledge of Anvirzel ™ and its effects through his personal observations of family and friends receiving Anvirzel™ therapy.</p>
            
                <h4>Charles R. Hughes, Branding and Marketing Advisor</h4>
                <p>Mr. Hughes is the founder and presently operates Brand Rules, LLC, located in Severna Park, Maryland. Brand Rules is a consulting consortium that applies decades 
                of experience to create, shape, and sustain successful brands. It guides clients in developing a differentiating market strategy, an engaged culture, and effective 
                execution of product, marketing, and retail. Clients include Hyundai, Kia, Ford, and Zodiac as well as start-ups, not-for-profits, and marketing companies. Mr. Hughes 
                was the founder, President, and CEO of Land Rover North America, BMW Group located in Lanham, Maryland. As Chief Executive Officer, he presided over a $1 billion, 
                24,000-unit sales enterprise that successfully introduced the first Range Rover then Land Rover to the North American market. NBI believes that Mr. Hughes’ experience
                 with successfully building, branding, marketing, and expanding start-ups will be invaluable to NBI.</p>
         </div>
    </div>
    <hr/>
    <!--END DESK TOP SECTION-->
    </div>

        <!--START Show on Mobile-->
        <div class="show-xs">
        
        <!--OUR STORY MOBILE BUTTON-->
        <button class="myButton btn indi-m-btn mt-4" onclick="bannerChange(1)" data-isminus="false" type="button" data-toggle="collapse" data-target="#collapseOurStory" aria-expanded="false" aria-controls="collapseExample">
            <span class="float-left">Our Story</span> 
            <span class="float-right minusPlus">+</span>
        </button>

        <div class="collapse" id="collapseOurStory">
            <div class="card card-body">

                <!--OUR STORY TEXT SECTION-->
                <div class="row">
                    <div class="col-12"> 
                        <h3 class="h3-indi"> Our Story</h3>
                        <p class="p-indi">Nerium SkinCare, Inc. is dedicated to offering health and beauty solutions that are based on scientific research and actual customer success. Our natural products are founded on the result of years of continuing research at leading medical institutions, using the latest scientific methods and technology. Utilizing biotechnology research and new breakthrough extraction technology, Nerium SkinCare has formulated and developed a complete line of products that harnesses the unique and effective properties of the Nerium oleander plant.<br/>
                        <br/>
                        Our vision is to consistently bring “first-in-class” products to market based on our firm belief in three tenets:
                        <br/>
                        Core Science<br/>
                        Real Results<br/>
                        Continuous Advancement<br/><br/>

                        Our mission is to develop health and beauty solutions that provide unparalleled well-being to the consumer.
                        Nerium SkinCare utilizes the Nerium Biotechnology research and technology in the development, formulation, clinical testing, manufacturing, regulatory compliance, and product commercialization of its "best-in-class" natural skin care products. It’s this technology, core science, and continuing research on which Nerium SkinCare bases its products and defines their benefits.</p>
                    <hr/>
                    </div>

                    <div class="col-12">
                        <h3 class="h3-indi">History</h3>
                        <p class="p-indi">We observed skin healing properties when researching the Nerium oleander plant in our labs. The history of Nerium SkinCare begins with groundbreaking research conducted by Dr. Robert Newman during his time with our parent company, Nerium Biotechnology. Dr. Newman’s research with natural botanical compounds led to the rediscovery, identification, isolation, and further development of core ingredients from the Nerium oleander plant. Continuing research and utilization of proprietary technologies has provided us the opportunity to develop a series of products that you know today as the NeriumAD® line of skin care.<br/>
                        Historical use of the Nerium oleander plant has been reported in ancient texts and folklore for more than 1,500 years. In fact, the Nerium oleander plant has been used traditionally as folk remedies for a wide variety of conditions. Over the last decade, there has been a considerable increase in the number of peer-reviewed studies in science journals that substantiate the properties of the Nerium oleander plant and its benefits.</p>
                        <img src="../img/about-us/AboutUsHistory-B.jpg" width="100%"/>
                    </div>
                </div>

            </div>
        <!--END OUR STORY M SECTION-->
        </div>

        <!--PRODUCTS MOBILE BUTTON-->
        <button class="myButton btn indi-m-btn mt-4" onclick="bannerChange(2)" data-isminus="false" type="button" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="false" aria-controls="collapseExample">
            <span class="float-left">Product</span> 
            <span class="float-right minusPlus">+</span>
        </button>

        <div class="collapse" id="collapseProducts">
            <div class="card card-body">

                <!--PRODUCTS TEXT SECTION-->
                <div class="row">
                    <div class="col-12"> 
                        <h3 class="h3-indi">Products</h3>
                        <p class="p-indi">Nerium SkinCare, Inc. is dedicated to offering solutions that are based on scientific research and actual customer success. Our natural products offered to the consumer are founded on the continuing research at leading medical institutions using the latest scientific methods and technology. Utilizing biotechnology research and new breakthrough extraction technology, Nerium SkinCare has formulated and is developing a complete line of products that harnesses Nerium oleander's unique and effective properties.
                        <br/>
                        Utilization of the Patented Nerium Oleander Extract ingredient and additional proprietary ingredients provides the opportunity for Nerium SkinCare to formulate and develop a complete line of unique "first in class" skin care cosmetic and US FDA OTC topical drug products. Additional products are constantly under development.</p>
                    </div>
                    <hr/>
                    <div class="col-12">
                        <h3 class="h3-indi">Quality</h3>
                        <p class="p-indi">As a commitment to quality, Nerium SkinCare does not compromise on what goes into our products. The quality of Nerium Skincare's products is a direct result of the investment into the people, scientific research, new technology development, natural farming methods, biomass processing, cGMP production facilities, and product safety testing.
                        <br/>
                        The Nerium FarmsTM is the largest Nerium oleander operation of its kind in the world. Using environmentally responsible and sustainable techniques, these naturally grown Nerium oleander plants, provide the raw material that make Nerium SkinCare’s products revolutionary. Abiding by strict protocols, the Nerium oleander farm provides a dedicated and renewable biomass resource that is reserved exclusively for Nerium SkinCare.</p>
                        <img src="../img/about-us/533x652-Quality-Image-B.jpg" width="100%"/>
                    </div>
                    <div class="col-12">
                        <p class="p-indi">Considering that there were no historical accounts of Nerium oleander farming, it was imperative for Nerium SkinCare to develop our own farming operations in order to broaden and commercialize access to the plant. Initially, transitioning of the plant from the nursery environment into a commercial environment involved the establishment of a research entity that allowed scientists to understand the growth patterns properly. Over time, as the physiology of Nerium oleander became more evident, planting and irrigation techniques, along with harvesting and planting equipment, had to be newly developed. Nerium SkinCare is proud to say that we built our current farming operations from the ground up. 
                        <br/>
                        After a decade of experience in Nerium oleander commercial farming, Nerium SkinCare continues to focus on new technology and research that will allow us to enhance our farming operations. We are very proud of our all natural approach and adherence to strict biomedical field protocols. We continually seek ways to increase land utilization and field plant capacity through the development of improved planting and irrigations</p>
                        <img src="../img/about-us/573x649-Quality-Image-A1.jpg" width="100%"/>
                    </div>
                    <hr/>
                    <div class="col-12">
                        <h3 class="h3-indi">Safety</h3>
                        <p class="p-indi">Nerium SkinCare formulators, developers and researchers are dedicated to offering new unique skincare solutions that are based on review of ingredient use experience, specific in vitro product testing, clinical research, pre/post consumer testing, scientific and the actual customer use reports and success. We strongly believe in sustainable, honest, health focused practices, and maximum disclosure of safety information. 
                        <br/>
                        Nerium SkinCare is constantly seeking new ways to educate our customers about our ingredients and products, how they were designed to work, and how to use them properly.
                        Nerium SkinCare makes every effort to ensure our products are safe and effective. If you have any specific health related questions, please consult your healthcare provider, and/or contact: 
                        <a href="../about/#contact">Contact Us</a></p>
                    </div>
                </div>
                
            </div>
        <!--END PRODUCTS M SECTION-->
        </div>

        <!-- FARM MOBILE BUTTON-->
        <button class="myButton btn indi-m-btn mt-4" onclick="bannerChange(3)" data-isminus="false" type="button" data-toggle="collapse" data-target="#collapseFarm" aria-expanded="false" aria-controls="collapseExample">
            <span class="float-left">Oleander Farm</span> 
            <span class="float-right minusPlus">+</span>
        </button>

        <div class="collapse" id="collapseFarm">
            <div class="card card-body">

                <!-- FARM TEXT SECTION-->
                <div class="row">
                    <div class="col-12">
                        <h3 class="h3-indi">Nerium Oleander Farm</h3>
                        <p class="p-indi">The Nerium Farms™ is the largest Nerium oleander operation of its kind in the world. With over 100,000 Nerium oleander plants, we employ natural and organic farming practices and our orchard helps to minimize our carbon footprint by eliminating greenhouse gases throughout the year.
                        <br/><br/>
                        Our science begins at the farm where we use the latest horticulture techniques for watering, farming, and harvesting. For example, by also incorporating the use of the latest analytical instruments, we are better able to determine the optimal time for harvesting. Similar analytic processes are employed in other aspects of farming. From beginning to end, from farm to manufacturer to consumers, Nerium SkinCare is dedicated to providing real science and real results.
                        <br/><br/>
                        “We’re primarily after the leaves. And that's the reason why we do not want any irrigation water; we do not want any type of chemicals; nothing on the leaves. So it is a very specialized approach, it's extremely laborious, and it's very very expensive. No one has attempted to put in an orchard like this and they still haven’t. It's not that easy to get involved in this industry. It's very complex; there’s a lot of science that goes into it. Science not only starting at the field itself but all the way through the processing as well as to the end use. So it's an extremely complex dynamic approach. There’s no question in my mind that this field is much more than a field of dreams, it's truly is a field of life”– Joel Curtis, Chief Agricultural Officer of Nerium Farms™
                        </p>
                    </div>
                </div>
                
            </div>
        <!--END FARM  M SECTION-->
        </div>

        <!--PHILOSOPHY MOBILE BUTTON-->
        <button class="myButton btn indi-m-btn mt-4" onclick="bannerChange(4)" data-isminus="false" type="button" data-toggle="collapse" data-target="#collapsePhilosophy" aria-expanded="false" aria-controls="collapseExample">
            <span class="float-left">Philosophy</span> 
            <span class="float-right minusPlus">+</span>
        </button>

        <div class="collapse" id="collapsePhilosophy">
            <div class="card card-body">

                <!--PHILOSOPHY TEXT SECTION-->
                <div class="row">
                    <div class="col-12">
                        <h3 class="h3-indi">Philosophy</h3>
                        <p class="p-indi">Our vision is to consistently bring “first-in-class” products to market based on our firm belief in three tenets: Core Science, Real Results, and Continuous Advancement.</p>
                        <div class="move-center">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/9MbR-pBu0SI?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                    <hr/>
                    <div class="col-12">
                        <h3 class="h3-indi">Core Science</h3>
                        <p class="p-indi">Nerium SkinCare, Inc. is dedicated to offering skin care solutions based on scientific research and validation. We are proud that our products were developed based on the research conducted at leading medical institutions. Utilizing patented technology, Nerium SkinCare now is effective,result oriented skincare able to develop the novel Nerium Aloe extract which has been the core ingredient in our coveted product line.
                        <br/>
                        Our Science team is dedicated to continuous ongoing research of the Nerium oleander plant, and our products are founded on the commitment to further develop new ingredient technology. This has provided Nerium SkinCare with the unique opportunity to formulate and develop for the consumer an innovative and high-quality line (from farm to consumers) natural skin care products.</p>
                        <img src="../img/about-us/529x677-Core-Science.jpg" width="100%"/>
                    </div>
                    <hr/>
                    <div class="col-12">
                        <h3 class="h3-indi">Real Result</h3>
                        <p class="p-indi">Nerium SkinCare, Inc. stands behind the results of our flagship products, NeriumAD® Age-Defying Night Cream and NeriumAD® Age-Defying Day Cream, and our exclusive, patented NAE-8® extract. No other skin care line can produce similar real results. <br/>
                        NeriumAD® Age-Defying products dramatically reduce the appearance of:</p>
                        <ul>
                            <li>Fine lines and wrinkles </li>
                            <li>Discoloration</li>
                            <li>Uneven skin texture</li>
                            <li>Enlarged pores</li>
                            <li>Aged and sagging skin</li>
                        </ul>
                        <img src="../img/about-us/529x677-Real-Results.jpg" width="100%"/>
                    </div>
                    <div class="col-12">
                        <p class="p-indi">Independently conducted clinical trials show:</p>
                        <ul>
                            <li>93% of participants had a significant increase in skin moisture.</li>
                            <li>86% of participants had an improvement in uneven skin texture.</li>
                            <li>86% of participants noted a reduction in pore size.</li>
                        </ul>
                        <img src="../img/about-us/573x576-Real-Promises.jpg" width="100%"/>
                        <p class="p-indi">Our patented extract, derived from a proprietary formulation consistency of Nerium oleander and Aloe vera is proprietary and only found in Nerium SkinCare products. This powerful ingredient works in three key ways:</p>
                        <ul>
                            <li>By targeting not just the signs of aging but also the underlying cause.</li>
                            <li>By delivering powerful antioxidants to target free radical damage.</li>
                            <li>By boosting the skin rejuvenating process to reveal younger looking skin.</li>
                        </ul>
                    </div>
                    <hr/>
                    <div class="col-12">
                        <h3 class="h3-indi">Continuous Advancement</h3>
                        <img class="mb-3" src="../img/about-us/1152x560-Continuous-Advancement.jpg" width="100%"/>
                        <p class="p-indi">ADVANCEMENT</p>
                        <p class="p-indi">Nerium SkinCare, Inc. is committed to advancing skin care science through clinical research. We will never stop innovating or waiver in our promise to deliver “best-in-class” products to the consumer.</p>
                        <p class="p-indi">OUR TECHNOLOGY</p>
                        <p class="p-indi">Nerium SkinCare created the patented technology that is used to develop our line of skin care products. This technology utilizes pure liquid Aloe vera as the medium to extract the natural components of the Nerium oleander plant in a way that preserves the unique and beneficial properties of both plants.</p>
                        <p class="p-indi">PRODUCT DEVELOPMENT</p>
                        <p class="p-indi">Initial product development included our flagship products, NeriumAD® Age-Defying Night Cream, NeriumAD® Age-Defying Day Cream, and NeriumAD® Age-Defying Firming Body Contour Cream. Additional products are under development including research into a future line of over-the-counter products called NeriumRx®.</p>
                    </div>
                </div>
                
            </div>
        <!--END PHILOSOPHY M SECTION-->
        </div>

        <!-- ING MOBILE BUTTON-->
        <button class="myButton btn indi-m-btn mt-4" onclick="bannerChange(5)" data-isminus="false" type="button" data-toggle="collapse" data-target="#collapseIng" aria-expanded="false" aria-controls="collapseExample">
            <span class="float-left">Key Ingredients</span> 
            <span class="float-right minusPlus">+</span>
        </button>

        <div class="collapse" id="collapseIng">
            <div class="card card-body">

                <!-- ING TEXT SECTION-->
                <div class="row">
                    <div class="col-12">
                        <h3 class="h3-indi">Ingredients</h3>
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
                                                <p>Targets not just the signs of aging but also the underlying cause. Delivers powerful antioxidants to target free radical damage. Boosts the skin rejuvenating process to reveal younger looking skin. Research has shown that NAE-14® possesses potent antioxidant and anti-inflammatory properties, while also inducing specific cytokines in dermal fibroblasts of relevance to wound healing.</p>
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
                
            </div>
        <!--END ING  M SECTION-->
        </div>

        <!-- LEADERSHIP MOBILE BUTTON-->
        <button class="myButton btn indi-m-btn mt-4" onclick="bannerChange(6)" data-isminus="false" type="button" data-toggle="collapse" data-target="#collapseLeadership" aria-expanded="false" aria-controls="collapseExample">
            <span class="float-left">Leadership</span> 
            <span class="float-right minusPlus">+</span>
        </button>

        <div class="collapse" id="collapseLeadership">
            <div class="card card-body">

                <!-- LEADERSHIP TEXT SECTION-->
                <div class="row">
                    <div class="col-12">
                        <h3 class="h3-indi">Scientific Advisory Board</h3>
                        <div class="row">
                            <div class="col-12">
                                <img src="../img2/SAB-mobile.png" alt="18 Various Doctors who lead our Scientific Advisory Board" width="100%"/>
                            </div>
                        </div>
                        <hr/>
                        <h3 class="h3-indi">Leadership</h3>
                        <div class="row">
                            <div class="col-lg-2 mb-2">
                                <img src="../img/headshots/knockeD.jpg" alt="Dennis R. Knocke"/>
                            </div>
                            <div class="col-lg-10">
                                <h4>Dennis R. Knocke, Chief Executive Officer and Chairman of the Board of Directors</h4>  
                                <p class="p-indi">Mr. Knocke attended Sam Houston State University in Huntsville, Texas. He has successfully founded and operated several start-up 
                                healthcare companies that were acquired by national and international business entities listed on the New York and London stock exchanges. Mr. Knocke was
                                previously President of Bexar Credentials Verification, Inc., a start-up software technology company whose principals included the Bexar County Medical 
                                Society, the Texas Medical Liability Trust, and Florida Physicians Insurance Company.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 mb-2">
                                <img src="../img/headshots/nesterJ.jpg" alt="Joseph B. Nester" />
                            </div>
                            <div class="col-lg-10">
                                <h4>Joseph B. Nester, Executive Vice President and Sec.Treasurer</h4>
                                <p class="p-indi">Mr. Nester graduated from the University of Texas at Austin with a BBA in General Business. He has over 23 years experience in the financial
                                service industry as well as four years experience with a start-up pharmaceutical company, where he was initially the Secretary Treasurer and after four months
                                was named the President. During this time, he led Anvirzel™ in a successful Phase I clinical study, implemented a Compassionate Use Investigational New Drug 
                                (CUIND) program, and had direct involvement with the FDA, among other regulatory agencies.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2 mb-2">
                                <img src="../img/headshots/lorijones.jpg" alt="Lori Jones" />      
                            </div>      
                            <div class="col-lg-10">
                                <h4>Lori Jones, Chief Financial Officer</h4>
                                <p class="p-indi">Ms. Jones has more than 25 years’ experience in finance and accounting with both private and publicly held entities.  She has served as 
                                Chief Financial Officer and other executive level positions in various industries including biotech, manufacturing, and technology.   Those position included,
                                in part, service as Vice President of Finance of CeloNova BioSciences, Inc, a global medical device manufacturer, CFO of Analytical Surveys, Inc., a publicly 
                                traded geo-spatial mapping company, and was a partner in Tatum CFO, LLP.   Ms. Jones is a CPA and holds an MBA from the University of Texas at San Antonio. </p>
                            </div>
                        </div>

                            <h4 class="mt-3">Peter A. Leininger, M.D, Director</h4>
                            <p class="p-indi">Dr. Leininger received his medical degree from Indiana University. Upon graduation, he joined the U.S. Army as an intern and graduated as a Urologist from the Walter 
                            Reed Army Medical Center. He served as Staff Urologist at Ft. Carson, Colorado, after which he entered private practice. In 1978, he joined his brother James R. 
                            Leininger, M. D. at Kinetic Concepts, Inc. (KCI), a new medical products company in San Antonio, Texas. KCI became internationally recognized for innovation in 
                            medical specialty beds and related products, eventually becoming an overwhelming success leading up to an IPO and sale of the company in 1998. Dr. Leininger’s 
                            involvement included management of product research and development, medical research, product acquisition, engineering and manufacturing. He has been granted 
                            numerous patents and his medical papers have been published in respected medical journals. Dr. Leininger has served KCI in the capacity as General Manager, National 
                            Sales Manager, Medical Director, Board Member and Executive Vice President from 1978 to 1998. In recent years, he has been active in various entrepreneurial endeavors
                            and affiliated with various business and community organizations. He currently serves as Chairman and President of The Arbor Group, President of Peak Finance, LP and 
                            various other business and real estate partnerships.</p>
                        
                            <h4>Gustavo Ulloa, Jr., Director</h4>
                            <p class="p-indi">Mr. Ulloa is General Manager and Director for Laboratorios Francelia, a pharmaceutical laboratory and manufacturing facility located in Tegucigalpa, Honduras. The 
                            GMP clean room of Nerium is located inside this facility. He is also Country Sales Manager and Director for Distribuidora Francelia, an import and distribution firm 
                            focusing on pharmaceuticals, disposables, hospital equipment, and related items. Mr. Ulloa attended the University of Miami where he studied Industrial Engineering. In 
                            his various capacities, he interacts with governmental agencies and private entities throughout Central America. Mr. Ulloa is a member of various pharmaceutical trade 
                            and producers organizations. He is presently involved in free trade negotiations related to pharmaceuticals between various Central American countries.</p>
                        
                            <h4> Richard Boxer, Director</h4>
                            <p class="p-indi">Mr. Boxer holds a B.A., from Queens University, Kingston, an M.B.A from York University, Toronto and is a Chartered Accountant. His career began with Clarkson
                            Gordon (now Ernst &amp; Young) and moved to the private business sector. During his business career he served as President of Waldec of Canada (a manufacturing 
                            company), acted as financial agent in a variety of equity transactions, founded and started a venture capital fund specializing in bridge loans, and has 
                            functioned as an angel investor in numerous business sectors. Presently Mr. Boxer is involved as a Director and a shareholder in Falls Management Company, which
                            has built and is now managing an $800,000,000 casino in Niagara Falls, Ontario. He currently serves as President of Buckingham Capital Corporation, a privately
                            owned Canadian merchant bank. Buckingham and an associated company, Rosmir Capital is involved in equity and debt financing, either as an agent or as a principal.</p>
                        
                            <h4> Kerry Mitchell, Director</h4>
                            <p class="p-indi">Ms. Mitchell completed the Executive Program at the Tuck School of Business at Dartmouth College in New Hampshire. She is a sought after speaker in Canada and 
                            the U.S. on topics including Media, Leadership,Branding, Marketing to Women, and Women in Business. She provides extensive experience as an executive with a strong
                            record of building and transforming multi-platform media brands that include some of the most iconic names in Canadian publishing. Her extensive leadership experience
                            in brand development, marketing and sales, including in the cosmetics, fashion, and lifestyle industries, will be a great benefit to the development and marketing of
                            Nerium’s consumer products.</p>
                        
                            <h4>J. Peter Nettelfield, Honorary/Founding Director (2007-2012) </h4>
                            <p class="p-indi">Mr. Nettelfield attended the University of Manitoba in Winnipeg and prior to graduation joined the prestigious Canadian investment banking firm of Wood Gundy 
                            &amp; Company, Limited. During his time there he assisted in the initial development of the Canadian money market. After 10 years with Wood Gundy, Mr. Nettelfield’s
                            interest changed from fixed income securities to equities. He then joined Burns Bros. &amp; Denton, noted for its excellent research department. Mr. Nettelfield 
                            serviced major institutions and commercial accounts. While at Burns Bros., at the invitation of Sir John Templeton, he became a director of the Templeton Growth 
                            Fund. Upon leaving the investment business, he moved to Texas where he became the president of the Texas subsidiary of a Canadian real estate development firm. In 
                            this capacity, he oversaw commercial development in Dallas, Austin, and San Antonio. In recent years, he has been active in various entrepreneurial endeavors. While 
                            Mr. Nettelfield has been a resident of Texas for over 30 years, he is proud of his Canadian heritage and has retained his Canadian citizenship.</p>
                            
                            <h4>John Christopher Counsel Wansbrough, Director (Retired 2016)</h4>
                            <p class="p-indi">Mr. Wansbrough holds a B.A., from the University of Toronto, and is a Chartered Financial Analyst. His career began with the prestigious Canadian investment banking
                            firm of Wood Gundy &amp; Company, Limited. After 7 years with Wood Gundy he joined National Trust Company Limited, were he served as President of National Trust Company
                            from 1977 to 1986, Vice Chairman from 1986 to 1991 and Lead Director through 1995. Mr. Wansbrough has also served as Chairman of the Board of OMERS Realty Corporation 
                            from 1989 to 1997, Chairman of the R.S. McLaughlin Foundation from 1994 to 2007, and currently serves as Chairman of Rogers Telecommunications Limited from 1997 to the
                            present. His service as a director to many additional business and community affiliations are too numerous to list.</p>
                        
                            <hr>
                            <h3 class="h3-indi">Advisory Board</h3>
                            <br/>
                        
                            <h4>Robert A. Newman, Ph.D., Scientific Advisor</h4>
                            <p class="p-indi">Dr. Newman obtained his M.S. and Ph.D. degrees in Pharmacology and Toxicology from the University of Connecticut and then served in postdoctoral positions at the 
                            Medical School of the University of Georgia as well as the Department of Biochemistry at the University of Vermont. He served as a faculty member at the University of 
                            Vermont Medical School for seven years and then spent a sabbatical year at Stanford University performing research on immune targeted therapy. He has spent the last 24
                            years at the University of Texas M. D. Anderson Cancer Center in Houston, Texas where he served as the founder and Co-Director of the Pharmaceutical Development Center.
                            He has published over 270 articles dealing with the pharmacology, toxicology and development of anticancer drugs. Dr. Newman has recently retired (September 1, 2008) 
                            from M. D. Anderson, but remains actively involved in continuing research as Scientific Advisor to NBI.</p>
                        
                            <h4>Keith I. Block, M.D., Medical Advisor</h4>
                            <p class="p-indi">Dr. Block is an internationally recognized integrative cancer-care specialist and visiting lecturer. As Medical Director of the Block Center for Integrative Cancer 
                            Care in Evanston, Illinois, the Block Center is committed to caring for people with cancer and improving total wellness through the integration of research-based 
                            complementary therapies with innovative approaches to conventional medicine. Dr. Block is the Director of Integrative Medical Education and the Clinical Assistant 
                            Professor, Department of Medical Education for the College of Medicine, University of Illinois at Chicago. While too numerous to list all governmental, teaching, and
                            professional appointments here, Dr. Block is Editor-In-Chief of Integrated Cancer Therapies, Sage Science Press, a Member of The Editorial Board for Physician Data 
                            Query, CAM, National Cancer Institute, Bethesda, Maryland, and Scientific Director of the Institute for Integrative Cancer Research and Education. He brings first-hand
                            clinical knowledge of Anvirzel™ and its effects through his observations of patients receiving Anvirzel™ therapy.</p>
                        
                            <h4>Donald E. Baxter, M.D., International Medical Advisor</h4>
                            <p class="p-indi">Dr. Baxter is an internationally renowned and board-certified orthopedic surgeon with a private practice in Houston, Texas. He has been a Clinical Professor of 
                            Orthopedic Surgery at both Baylor College of Medicine and the University of Texas Health Science Center. While too numerous to list here, Dr. Baxter is the author of
                            many papers and books. He is also an international and visiting lecturer. Additionally, Dr. Baxter is a past president and director of the Texas Neurofibromatosis 
                            Foundation. He brings first hand knowledge of Anvirzel ™ and its effects through his personal observations of family and friends receiving Anvirzel™ therapy.</p>
                        
                            <h4>Charles R. Hughes, Branding and Marketing Advisor</h4>
                            <p class="p-indi">Mr. Hughes is the founder and presently operates Brand Rules, LLC, located in Severna Park, Maryland. Brand Rules is a consulting consortium that applies decades 
                            of experience to create, shape, and sustain successful brands. It guides clients in developing a differentiating market strategy, an engaged culture, and effective 
                            execution of product, marketing, and retail. Clients include Hyundai, Kia, Ford, and Zodiac as well as start-ups, not-for-profits, and marketing companies. Mr. Hughes 
                            was the founder, President, and CEO of Land Rover North America, BMW Group located in Lanham, Maryland. As Chief Executive Officer, he presided over a $1 billion, 
                            24,000-unit sales enterprise that successfully introduced the first Range Rover then Land Rover to the North American market. NBI believes that Mr. Hughes’ experience
                            with successfully building, branding, marketing, and expanding start-ups will be invaluable to NBI.</p>
                    </div>
                </div>
                
            </div>
        <!--END LEADERSHIP  M SECTION-->
        </div>


      <!--END Show on Mobile A-->
      </div>
    <!--END Show on Mobile B-->
    </div>



  <!--END Container Div-->
  </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  

<?php include('../deepPageFooter.php'); ?>