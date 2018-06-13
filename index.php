<?php include('homeHeader.php'); ?>

    <style>
        .container {
            position: relative;
        }

        .bottom-left {
            position: absolute;
            bottom: 8px;
            left: 16px;
        }

        .top-left {
            position: absolute;
            top: 8px;
            left: 16px;
        }

        .top-right {
            position: absolute;
            top: 8px;
            right: 16px;
        }

        .bottom-right {
            position: absolute;
            bottom: 8px;
            right: 16px;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .test{
            
        }
    </style>
    <!--Slider/Carousel Start-->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/index-slider1-placeholder-sm.jpg" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
              <h5>First slide label would be here</h5>
              <p>Text and more text</p>
              <button>Read More</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/index-slider2-placeholder-sm.jpg" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some supporting text here</p>
              <button>Buy Now!</button>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/index-slider3-placeholder-sm.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!--END Slider/Carousel Start-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="italiana text-center mt-2"> Our Best Sellers </h1>
            </div>
        </div>

        <div class="shopifyButton-container mb-4"> 

            <div id='product-component-8683e9dba0a'>
              <a href="../newProducts-Advanced-Night/index.php">
                <img src="img/Updated-Advanced-Packaging/NSC.ADV.NC.Bottle.HR.CMYK.V2.png" alt="Advanced Nightly Face Treatment" height="300px" class="productImg-responsive"/>
                <p class="p-index">Nerium Advanced Nightly Face Treatment</p>
                <p class="p-index">$120</p>
              </a>
            </div>

            <div id='product-component-c857cfc0b09'>
              <a href="../newProducts-Advanced-Day/index.php">
                <img src="img/Updated-Advanced-Packaging/NSC.ADV.DC.Bottle.HR.CMYK.V2.png" alt="Advanced Daily Face Cream" height="300px"class="productImg-responsive"/>
                <p class="p-index">Nerium Advanced Daily <br/>Face Cream</p>
                <p class="p-index">$100</p>
              </a>
            </div>

            <div id='product-component-f6809364766!!DELETEWHENAVAILABLE'>
              <a href="../newProducts-Advanced-Firm/index.php">
                <img src="img/Updated-Advanced-Packaging/NSC.NADA.BF.Tube.Front.200ml.LR.RGB.jpg" alt="Advanced Firming Cream" height="300px"class="productImg-responsive"/>
                <p class="p-index">NeriumFirm Advanced <br/>Firming Body Cream</p>
                <p class="p-index">$120</p>
              </a>
              <div class="coming-soon-btn-container">
                <button class="coming-soon-btn">COMING SOON</button>
              </div>
            </div>

        </div>
    </div>

    <!--Call to action images-->
    <div class="container mb-4">
        <img src="img/index-shopnow-placeholder.jpg" alt="Norway" style="width:100%;">
        <div class="bottom-left">Bottom Left <button>Hi there</button></div>
        <div class="top-left">Top Left</div>
        <div class="top-right">Top Right</div>
        <div class="bottom-right">Bottom Right</div>
        <div class="centered">Centered</div>
    </div>
    
    <div class="container hide-md">
        <div class="row">
          <div class="col-4"> 
            <img src="img/index-core-placeholder.jpg" alt="Core Science" style="width:100%;"> 
          </div>
          <div class="col-4"> 
              <img src="img/index-real-placeholder.jpg" alt="Real Results" style="width:100%;"> 
            </div>
            <div class="col-4"> 
                <img src="img/index-ing-placeholder.jpg" alt="Ingredients" style="width:100%;"> 
              </div>
        </div>

        <div class="row">
          <div class="col-4 mt-2"> 
            <h1 class="italiana float-left">CORE SCIENCE</h1>
           </div>
          <div class="col-4 mt-2">
            <h1 class="italiana float-left">REAL RESULTS</h1>
          </div>
          <div class="col-4 mt-2"> 
            <h1 class="italiana float-left">INGREDIENTS</h1>
           </div>
        </div>

      <div class="row">
        <div class="col-4 text-justify"> 
          <p>The foundation of Nerium SkinCare is established in biotechnology research, and on our commitment to core science. We are a company founded by scientists and guided by a board of elite scientific advisory members. It is no wonder that as a company, we are dedicated to offering skin care solutions based on the latest scientific research and breakthrough technology.</p>
        </div>
        <div class="col-4 text-justify">
          <p>Nerium SkinCare’s success is the direct result of the company’s dedication to making products that are based on rigorous scientific research and results. By sharing our knowledge and research results with the consumer, our studies, we are fostering honest transparent communications. </p>
        </div>
        <div class="col-4 text-justify"> 
          <p>Nerium SkinCare created the patented technology that is used to develop our line of skin care products. This technology utilizes pure liquid Aloe vera as the medium to extract the natural components of the Nerium oleander plant in a way that preserves the unique and beneficial properties of both plants.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-4"> 
            <a href="#"><p>Read More >></p></a>
        </div>
        <div class="col-4">
            <a href="#"><p>Read More >></p></a>
        </div>
        <div class="col-4"> 
            <a href="#"><p>Read More >></p></a>
        </div>
      </div>
    </div>

    <div class="container show-md">
        <div class="row">
            <div class="col-sm-4"> 
                <img class="mb-3" src="img/index-core-placeholder.jpg" alt="Core Science" style="width:100%;"> 
            </div>
            <div class="col-sm-8">
                <h1 class="italiana">CORE SCIENCE</h1>
                <p>The foundation of Nerium SkinCare is established in biotechnology research, and on our commitment to core science. We are a company founded by scientists and guided by a board of elite scientific advisory members. It is no wonder that as a company, we are dedicated to offering skin care solutions based on the latest scientific research and breakthrough technology.</p>
                <a href="#"><p>Read More >></p></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4"> 
              <img class="mb-3" src="img/index-real-placeholder.jpg" alt="Real Results" style="width:100%;"> 
            </div>
            <div class="col-sm-8">
                <h1 class="italiana">REAL RESULTS</h1>
                <p>Nerium SkinCare’s success is the direct result of the company’s dedication to making products that are based on rigorous scientific research and results. By sharing our knowledge and research results with the consumer, our studies, we are fostering honest transparent communications. </p>
                <a href="#"><p>Read More >></p></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4"> 
                <img class="mb-3" src="img/index-ing-placeholder.jpg" alt="Ingredients" style="width:100%;"> 
              </div>
            <div class="col-sm-8">
                <h1 class="italiana">INGREDIENTS</h1>
                <p>Nerium SkinCare created the patented technology that is used to develop our line of skin care products. This technology utilizes pure liquid Aloe vera as the medium to extract the natural components of the Nerium oleander plant in a way that preserves the unique and beneficial properties of both plants.</p>
                <a href="#"><p>Read More >></p></a>
            </div>
        </div>
    </div>

        <!--Scrips Per Shopify Buy Button-->
      <!--Night cream-->
      <script type="text/javascript">
          /*<![CDATA[*/

          (function () {
          var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
          if (window.ShopifyBuy) {
            if (window.ShopifyBuy.UI) {
            ShopifyBuyInit();
            } else {
            loadScript();
            }
          } else {
            loadScript();
          }

          function loadScript() {
            var script = document.createElement('script');
            script.async = true;
            script.src = scriptURL;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
            script.onload = ShopifyBuyInit;
          }

          function ShopifyBuyInit() {
            var client = ShopifyBuy.buildClient({
            domain: 'neriumskincare-products.myshopify.com',
            apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
            appId: '6',
            });

            ShopifyBuy.UI.onReady(client).then(function (ui) {
            ui.createComponent('product', {
              id: [11499393290],
              node: document.getElementById('product-component-8683e9dba0a'),
              moneyFormat: '%24%7B%7Bamount%7D%7D',
              options: {
          "product": {
            "variantId": "all",
            "width": "240px",
            "contents": {
            "img": false,
            "imgWithCarousel": false,
            "title": false,
            "variantTitle": false,
            "price": false,
            "description": false,
            "buttonWithQuantity": false,
            "quantity": false
            },
            "styles": {
            "product": {
              "text-align": "left",
              "@media (min-width: 601px)": {
              "max-width": "100%",
              "margin-left": "0",
              "margin-bottom": "50px"
              }
            },
            "button": {
              "background-color": "#a1d2e6",
              "font-family": "Arial, sans-serif",
              "padding-left": "8px",
              "padding-right": "8px",
              "display": "block",
              "margin": "0 auto",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            },
            "variantTitle": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "title": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal",
              "color": "#808080"
            },
            "description": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "price": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "compareAt": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal",
              "color": "#4c4c4c",
              "font-size": "12px"
            }
            }
          },
          "cart": {
            "contents": {
            "button": true
            },
            "styles": {
            "button": {
              "background-color": "#a1d2e6",
              "font-family": "Arial, sans-serif",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            },
            "footer": {
              "background-color": "#ffffff"
            }
            }
          },
          "modalProduct": {
            "contents": {
            "img": false,
            "imgWithCarousel": true,
            "variantTitle": false,
            "buttonWithQuantity": true,
            "button": false,
            "quantity": false
            },
            "styles": {
            "product": {
              "@media (min-width: 601px)": {
              "max-width": "100%",
              "margin-left": "0px",
              "margin-bottom": "0px"
              }
            },
            "button": {
              "background-color": "#a1d2e6",
              "font-family": "Arial, sans-serif",
              "padding-left": "8px",
              "padding-right": "8px",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            },
            "variantTitle": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "title": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "description": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "price": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "compareAt": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            }
            }
          },
          "toggle": {
            "styles": {
            "toggle": {
              "font-family": "Arial, sans-serif",
              "background-color": "#a1d2e6",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            }
            }
          },
          "option": {
            "styles": {
            "label": {
              "font-family": "Arial, sans-serif"
            },
            "select": {
              "font-family": "Arial, sans-serif"
            }
            }
          },
          "productSet": {
            "styles": {
            "products": {
              "@media (min-width: 601px)": {
              "margin-left": "-20px"
              }
            }
            }
          }
          }
            });
            });
          }
          })();
          /*]]>*/
        </script>
      <!--END NC-->
      <!--Day cream-->
        <script type="text/javascript">
          /*<![CDATA[*/

          (function () {
          var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
          if (window.ShopifyBuy) {
            if (window.ShopifyBuy.UI) {
            ShopifyBuyInit();
            } else {
            loadScript();
            }
          } else {
            loadScript();
          }

          function loadScript() {
            var script = document.createElement('script');
            script.async = true;
            script.src = scriptURL;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
            script.onload = ShopifyBuyInit;
          }

          function ShopifyBuyInit() {
            var client = ShopifyBuy.buildClient({
            domain: 'neriumskincare-products.myshopify.com',
            apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
            appId: '6',
            });

            ShopifyBuy.UI.onReady(client).then(function (ui) {
            ui.createComponent('product', {
              id: [11499382474],
              node: document.getElementById('product-component-c857cfc0b09'),
              moneyFormat: '%24%7B%7Bamount%7D%7D',
              options: {
          "product": {
            "variantId": "all",
            "width": "240px",
            "contents": {
            "img": false,
            "imgWithCarousel": false,
            "title": false,
            "variantTitle": false,
            "price": false,
            "description": false,
            "buttonWithQuantity": false,
            "quantity": false
            },
            "styles": {
            "product": {
              "text-align": "left",
              "@media (min-width: 601px)": {
              "max-width": "100%",
              "margin-left": "0",
              "margin-bottom": "50px"
              }
            },
            "button": {
              "background-color": "#a1d2e6",
              "font-family": "Arial, sans-serif",
              "padding-left": "8px",
              "padding-right": "8px",
              "display": "block",
              "margin": "0 auto",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            },
            "variantTitle": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "title": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal",
              "color": "#808080"
            },
            "description": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "price": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "compareAt": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal",
              "color": "#4c4c4c",
              "font-size": "12px"
            }
            }
          },
          "cart": {
            "contents": {
            "button": true
            },
            "styles": {
            "button": {
              "background-color": "#a1d2e6",
              "font-family": "Arial, sans-serif",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            },
            "footer": {
              "background-color": "#ffffff"
            }
            }
          },
          "modalProduct": {
            "contents": {
            "img": false,
            "imgWithCarousel": true,
            "variantTitle": false,
            "buttonWithQuantity": true,
            "button": false,
            "quantity": false
            },
            "styles": {
            "product": {
              "@media (min-width: 601px)": {
              "max-width": "100%",
              "margin-left": "0px",
              "margin-bottom": "0px"
              }
            },
            "button": {
              "background-color": "#a1d2e6",
              "font-family": "Arial, sans-serif",
              "padding-left": "8px",
              "padding-right": "8px",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            },
            "variantTitle": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "title": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "description": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "price": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "compareAt": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            }
            }
          },
          "toggle": {
            "styles": {
            "toggle": {
              "font-family": "Arial, sans-serif",
              "background-color": "#a1d2e6",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            }
            }
          },
          "option": {
            "styles": {
            "label": {
              "font-family": "Arial, sans-serif"
            },
            "select": {
              "font-family": "Arial, sans-serif"
            }
            }
          },
          "productSet": {
            "styles": {
            "products": {
              "@media (min-width: 601px)": {
              "margin-left": "-20px"
              }
            }
            }
          }
          }
            });
            });
          }
          })();
          /*]]>*/
        </script>
      <!--END DC-->

      <!--Bodycream-->
      <!--DELETE when body available
        <script type="text/javascript">
          /*<![CDATA[*/
          (function () {
          var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
          if (window.ShopifyBuy) {
            if (window.ShopifyBuy.UI) {
            ShopifyBuyInit();
            } else {
            loadScript();
            }
          } else {
            loadScript();
          }

          function loadScript() {
            var script = document.createElement('script');
            script.async = true;
            script.src = scriptURL;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
            script.onload = ShopifyBuyInit;
          }

          function ShopifyBuyInit() {
            var client = ShopifyBuy.buildClient({
            domain: 'neriumskincare-products.myshopify.com',
            apiKey: '2cdb9a49c2303d785f531d4e716b34c4',
            appId: '6',
            });

            ShopifyBuy.UI.onReady(client).then(function (ui) {
            ui.createComponent('product', {
              id: [11518862154],
              node: document.getElementById('product-component-f6809364766'),
              moneyFormat: '%24%7B%7Bamount%7D%7D',
              options: {
          "product": {
            "variantId": "all",
            "width": "240px",
            "contents": {
            "img": false,
            "imgWithCarousel": false,
            "title": false,
            "variantTitle": false,
            "price": false,
            "description": false,
            "buttonWithQuantity": false,
            "quantity": false
            },
            "styles": {
            "product": {
              "text-align": "left",
              "@media (min-width: 601px)": {
              "max-width": "100%",
              "margin-left": "0",
              "margin-bottom": "50px"
              }
            },
            "button": {
              "background-color": "#a1d2e6",
              "font-family": "Arial, sans-serif",
              "padding-left": "8px",
              "padding-right": "8px",
              "display": "block",
              "margin": "0 auto",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            },
            "variantTitle": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "title": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal",
              "color": "#808080"
            },
            "description": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "price": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "compareAt": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal",
              "color": "#4c4c4c",
              "font-size": "12px"
            }
            }
          },
          "cart": {
            "contents": {
            "button": true
            },
            "styles": {
            "button": {
              "background-color": "#a1d2e6",
              "font-family": "Arial, sans-serif",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            },
            "footer": {
              "background-color": "#ffffff"
            }
            }
          },
          "modalProduct": {
            "contents": {
            "img": false,
            "imgWithCarousel": true,
            "variantTitle": false,
            "buttonWithQuantity": true,
            "button": false,
            "quantity": false
            },
            "styles": {
            "product": {
              "@media (min-width: 601px)": {
              "max-width": "100%",
              "margin-left": "0px",
              "margin-bottom": "0px"
              }
            },
            "button": {
              "background-color": "#a1d2e6",
              "font-family": "Arial, sans-serif",
              "padding-left": "8px",
              "padding-right": "8px",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            },
            "variantTitle": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "title": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "description": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "price": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            },
            "compareAt": {
              "font-family": "Arial, sans-serif",
              "font-weight": "normal"
            }
            }
          },
          "toggle": {
            "styles": {
            "toggle": {
              "font-family": "Arial, sans-serif",
              "background-color": "#a1d2e6",
              ":hover": {
              "background-color": "#91bdcf"
              },
              ":focus": {
              "background-color": "#91bdcf"
              },
              "font-weight": "normal"
            }
            }
          },
          "option": {
            "styles": {
            "label": {
              "font-family": "Arial, sans-serif"
            },
            "select": {
              "font-family": "Arial, sans-serif"
            }
            }
          },
          "productSet": {
            "styles": {
            "products": {
              "@media (min-width: 601px)": {
              "margin-left": "-20px"
              }
            }
            }
          }
          }
            });
            });
          }
          })();
          /*]]>*/
        </script>  
      END-->

<?php include('homeFooter.php'); ?>