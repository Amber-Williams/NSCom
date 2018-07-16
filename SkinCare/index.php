<?php include('../deepPageHeader.php'); ?>

  <div class="row">
    <div class="col-12 img-container">
      <!--Mobile Banner-->
        <img src="../img/515x278-Advance-Main-Banner.jpg" class="move-center d-block d-sm-block d-md-none" width="100%"/>
      <!--Desktop banner-->
        <img src="../img/1150x310-Advance-Main-Banner.jpg" class="move-center d-none d-md-block d-lg-block d-xl-none" width="100%"/>
      <!--Larger Screen Banner-->
        <img src="../img/1150x310-Advance-Main-Banner.jpg" class="banner-container move-center d-none d-xl-block" width="100%"/>
    </div>
  </div>

<div class="container mb-5">
  <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="italiana text-center mt-5"> ADVANCED COLLECTION</h1>
            </div>
        </div>

        <div class="shopifyButton-container mb-4"> 

            <div id='product-component-8683e9dba0a'>
              <a href="../Advanced-Night/">
                <img src="../img/Updated-Advanced-Packaging/NSC.ADV.NC.BottleAndCarton.HR.CMYK.V1.png" alt="Advanced Nightly Face Treatment" height="300px" class="productImg-responsive"/>
                <p class="p-index">Nerium Advanced Nightly Face Treatment</p>
                <p class="p-index">$59.95</p>
              </a>
            </div>

            <div id='product-component-c857cfc0b09'>
              <a href="../Advanced-Day/">
                <img src="../img/Updated-Advanced-Packaging/NSC.ADV.DC.BottleAndCarton.HR.CMYK.V1.png" alt="Advanced Daily Face Cream" height="300px"class="productImg-responsive"/>
                <p class="p-index">Nerium Advanced Daily <br/>Face Cream</p>
                <p class="p-index">$49.95</p>
              </a>
            </div>

            <div id='product-component-f6809364766!!DELETEWHENAVAILABLE'>
              <a href="../Advanced-Body">
                <img src="../img/Updated-Advanced-Packaging/NSC.NADA.BF.Tube.Front.200ml.LR.RGB.jpg" alt="Advanced Firming Cream" height="300px"class="productImg-responsive"/>
                <p class="p-index">NeriumFirm Advanced <br/>Firming Body Cream</p>
                <p class="p-index">$??</p>
              </a>
              <div class="coming-soon-btn-container">
                <button class="coming-soon-btn">COMING SOON</button>
              </div>
            </div>

        </div>
    </div>
  <!--END Container Div-->
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
  <!--END Scrips Per Shopify Buy Button-->
<?php include('../deepPageFooter.php'); ?>