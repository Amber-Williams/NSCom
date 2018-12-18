<?php include('../deepPageHeader.php'); ?>

  <div class="row">
    <div class="col-12 img-container px-0">
      <!--Mobile Banner-->
      <img src="../img/515x278-Therapy-Main-Banner-V2.jpg" class="move-center d-block d-sm-block d-md-none" width="100%"/>
      <!--Desktop banner-->
        <img src="../img/1150x310-Therapy-Main-Banner-V4.jpg" class="move-center d-none d-md-block d-lg-block d-xl-none" width="100%"/>
      <!--Larger Screen Banner-->
        <img src="../img/1150x310-Therapy-Main-Banner-V4.jpg" class="banner-container move-center d-none d-xl-block" width="100%"/>
    </div>
  </div>

  <div class="container  mb-5">
        <div class="row">
            <div class="col-12">
                <h1 class="italiana text-center mt-5"> NERIUMRX THERAPY COLLECTION</h1>
            </div>
        </div>

        <div class="shopifyButton-container mb-4"> 

          <div id='product-component-8b4b581f1d5'>
              <a href="../Therapy-PS/index.php">
                <img src="../img/indi-stuff/white-rx/1800x2160-Psoriasis-30mL-Tube-Carton-Shadow.png" alt="Psoriasis Relief Therapy" height="300px" class="productImg-responsive"/>
                <p class="p-index">NERIUMRX <br/>Psoriasis Relief <br/>Therapy</p>
                <p class="p-index">$39.95</p>
              </a>
            </div>

            <div id='product-component-2b4f706b88a'>
              <a href="../Therapy-CSduo/index.php">
                <img src="../img/indi-stuff/white-rx/1800x2160-Cold-Sore-30mL-Box-Blister-Shadow.png" alt="Cold Sore Dual Treatment" height="300px"class="productImg-responsive"/>
                <p class="p-index">NERIUMRX <br/>Cold Sore Dual <br/>Treatment</p>
                <p class="p-index">$29.95</p>
              </a>
            </div>

            <div id='product-component-65f42d102d9'>
              <a href="../Therapy-Dermal/index.php">
                <img src="../img/indi-stuff/white-rx/1800x2160-Dermal-45mL-Bottle-Carton-Shadow.png" alt="Dermal Pain Relief Therapy" height="300px"class="productImg-responsive"/>
                <p class="p-index">NERIUMRX <br/>Dermal Pain Relief <br/> &amp; Shingles Support</p>
                <p class="p-index">$42.95</p>
              </a>
            </div>

            <div id='product-component-65f42d102d9'>
              <a href="../Therapy-Acne/index.php">
                <img src="../img/indi-stuff/white-rx/1800x2160-Acne-30mL-Tube-Carton-Shadow.png" alt="Dermal Pain Relief Therapy" height="300px"class="productImg-responsive"/>
                <p class="p-index">NERIUMRX <br/>Acne <br/>Therapy</p>
                <p class="p-index">$39.95</p>
              </a>
            </div>

        </div>
    </div>
  <!--END Container Div-->

  <!--Scrips Per Shopify Buy Button-->
  
    <!--PS Cream-->
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
                id: [1375191367763],
                node: document.getElementById('product-component-8b4b581f1d5'),
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
                "text-align": "right",
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
    <!--CS Duo -->
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
                id: [1375190614099],
                node: document.getElementById('product-component-2b4f706b88a'),
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
                "text-align": "right",
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
    <!--Dermal Pain-->
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
              id: [1375190909011],
              node: document.getElementById('product-component-65f42d102d9'),
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
              "text-align": "right",
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
  
  <!--END Scrips Per Shopify Buy Button-->
<?php include('../deepPageFooter.php'); ?>