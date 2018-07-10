<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="dist/styles/main.css">

</head>
<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <?php
    var url = 'https://www.algaecal.com/wp-json/acf/v3/options/options'; // path to your JSON file

    function get(filename) {
	     fetch(url).then((resp) => resp.text()).then(function(data) {
		       temp = data;
           console.log(data);
	  });
}

    $data = file_get_contents($url); // put the contents of the file into a variable
    $characters = json_decode($data); // decode the JSON feed
    echo $characters[0]->default_phone_number;
  ?>
  <div class="container">

    <header>
      <div class="logo" id="branding">
        <a href="https://www.algaecal.com/" title="AlgaeCal" rel="home" target="_blank">
          <span class="sr-only">AlgaeCal</span>
        </a>
      </div>
      <div id="phoneLink">
        <a class="text-primary js-trackable-phone-number" href="tel:+18008200184">
          <i class="fa fa-phone bg-primary rounded-circle" aria-hidden="true"></i>
          <p class="font-weight-bold text-body text-uppercase menu-text">Tap to Talk <span class="text-primary">1-800-820-0184</span>default_phone_number
            https://www.algaecal.com/wp-json/acf/v3/options/options
          <p class="phone">Speak to our Bone Health Specialists!</p>
        </a>
      </div>
    </header>

    <main>
      <section id="bg-fancy" class=" text-white text-center lead">
        <div class="d-flex align-items-center pt-1">
          <div class="flex-fill sr-hidden border-top border-top-2 border-white"></div>
          <div class="px-2 text-center text-primary text-uppercase">INTRODUCING</div>
          <div class="flex-fill sr-hidden border-top border-top-2 border-white"></div>
        </div>
        <p>The ONLY Calcium Supplement that <big>Increases Bone Density<sup>*</sup></big> ...or Your Money Back</p>
      </div>

      <section id="">
        <p>Build <strong>brand new bone</strong> WITHIN 6 MONTHS with this <strong>rare algae</strong> calcium ...even if you're 85!</p>
      </section>

      <script src="https://fast.wistia.com/embed/medias/cecdwaq3dz.jsonp" async></script>
      <script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
      <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_cecdwaq3dz videoFoam=true " style="height:100%;width:100%">&nbsp;</div></div></div>
      <script>

      window._wq = window._wq || [];
      _wq.push({ id: "cecdwaq3dz", onReady: function(video) {
        video.bind("secondchange", function() {
          if (video.secondsWatched() >= 133) {
            $('#bundles').show('slow');
          }
        });
      }});



      </script>

      <section id="bundles" style="display: none; border: 2px dotted red;">

        <div class="row bundle product-one box-shadow">
          <div class="col-12">
            <div class="mb-3">
              <div class="row purchase-options-table">
                <div class="col-md-8 offset-md-2 offset-lg-0 col-lg-4 purchase-option-column js-purchase-column" id="bundle-1">
              <div class="product-box-wrapper ">
                <div class="product-box js-product-box">
                  <div class="product-box-header">
                    <h3 class="bundle-product-name">3 Month Supply</h3>
                    <h4 class="bundle-product-description">3 AlgaeCal Plus <br /> 3 Strontium Boost</h4>
                    <div class="price">
                      <div class="currency">39 per Bottle</div>
                      <div class="price-per-day yellow-highlight">
                        Only <span class="amount currency">2.60 per Day!</span>
                      </div>
                    </div>
                  </div>
                  <div class="product-box-content">
                    <div class="product-image">
                      <img width="860" height="515" src="/bc/v1/products/119/images/featured" class="attachment-large size-large wp-post-image" alt="">
                      <div class="percent-off font-weight-bold">
                        <div class="label">
                          <span class="amount">20%</span> Off </div>
                        </div>
                      </div>
                    </div>
                    <div class="product-box-footer">
                      <div class="pricing-info">
                        <span class="retail-price"><strong>Retail Price</strong> <s class="currency redline">294</s></span><br />
                        <span class="todays-price mr-3"><strong>Your Price</strong> <span class="Price-amount amount currency usd">234</span><br>
                      </div>
                      <button disabled data-bc-quantity="1" data-bc-product-id="119" class="js-bc-add-to-cart-button btn btn-success btn-go text-white single_add_to_cart_button add_to_cart_button btn-seal">
                        <img class="seal" src="https://www.algaecal.com/wp-content/uploads/Final_960px-e1478104202859.png" alt="">Add to cart</button>
                        <div class="you-save text-danger font-italic mt--2">
                          <strong>You Save <span class="currency">127</span>!</strong>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="bundle well box-shadow">
          20% off sticker
          <h3>3 Month Supply</h3>
          4 AlgaeCal Plus
          3 Strontium Boost
          < img >
          $233 USD
          Only $2.58/Day!
          <a href="#" class="btn btn-guarantee">Add to Cart</a>
        </div>

        <div class="bundle well highlight box-shadow">
          35% off sticker
          Most Popular
          <h3>6 Month Supply</h3>
          8 AlgaeCal Plus
          6 Strontium Boost
          < img >
          $337 USD
          Only $2.09/Day!
          <a href="#" class="btn btn-guarantee">Add to Cart</a>
        </div>

        <div class="bundle well box-shadow">
          38% off sticker
          Most Popular
          <h3>12 Month Supply</h3>
          16 AlgaeCal Plus
          12 Strontium Boost
          < img >
          $717 USD
          Only $1.97/Day!
          <a href="#" class="btn btn-guarantee">Add to Cart</a>
        </div>
      </section>

      <section id="facts">
        <h3>AlgaeCal Plus</h3>
        <div id="supplementFacts" class="">
          <div class="card-body">
            <h2>Supplement Facts</h2>
            <ul class="text-bold list-unstyled">
              <li>4 Capsules Per Day</li>
              <li>Servings Per Container: 22</li>
            </ul>
            <div class="supplement-facts algaecal-plus">
              <div class="row amount-per-serving border-top-lg border-btm-md">
                <div class="col-sm-8">Amount Per Serving</div>
                <div class="col-sm-4 text-right">%DV</span></div>
              </div>
              <div class="row dv text-bold">
                <div class="col-sm-8">
                  Vitamin C<br>
                  <small>(as calcium ascorbate)</small>
                </div>
                <div class="col-sm-4 text-right">84%</div>
              </div>
              <div class="row dv text-bold">
                <div class="col-sm-8">
                  Vitamin D3 1600 IU<br>
                  <small>(as cholecalciferol)</small>
                </div>
                <div class="col-sm-4 text-right">400%</div>
              </div>
              <div class="row dv text-bold">
                <div class="col-sm-8">
                  Vitamin K2100 mcg<br>
                  <small>(as menaquinone-7)</small>
                </div>
                <div class="col-sm-4 text-right">126%</div>
              </div>
              <div class="row dv text-bold">
                <div class="col-sm-8">
                  Calcium 720 mg<br>
                  <small>(from algas calcareas)</small>
                </div>
                <div class="col-sm-4 text-right">72%</div>
              </div>
              <div class="row dv text-bold">
                Magnesium 350 mg<br>
                <small>(from algas calcareas and magnesium oxide)</small>
                <div class="col-sm-4 text-right">88%</div>
              </div>
              <div class="row dv text-bold border-top-lg border-btm-lg padding-top">
                Boron 3.0 mg*<br>
                <small>(as glycinate)</small>
              </div>
              <small>*Daily Value (DV) not established</small>
            </div>
          </div>
        </div>

        <h3>Strontium Boost</h3>
        <div id="supplementFacts" class="">
          <div class="card-body">
            <h2>Supplement Facts</h2>
            <ul class="text-bold list-unstyled">
              <li>2 Capsules Per Day</li>
              <li>Servings Per Container: 30</li>
            </ul>
            <div class="supplement-facts algaecal-plus">
              <div class="row amount-per-serving border-top-lg border-btm-md">
                <div class="col-sm-8">Amount Per Serving</div>
                <div class="col-sm-4 text-right">%DV</span></div>
              </div>
              <div class="row dv text-bold">
                <div class="col-sm-8">
                  Strontium<br>
                  <small>(from Strontium Citrate)</small>
                </div>
                <div class="col-sm-4 text-right">680 mg*</div>
              </div>
              <div class="row dv text-bold border-top-lg border-btm-lg">
                <small>*Daily Value (DV) not established</small>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="guarantee" class="guarantee vsl-guarantee d-m d-none ">
        <div class="container">
          <div class="background">
            <div class="content">
              <div class="row">
                <div class="col-md-12 col-lg-3 text-center badge">
                  <img src="" data-src="https://www.algaecal.com/sp/assets/img/guarantee_seal.png" alt="Algaecal 7 years guarantee" class="img-fluid lazy">
                </div>
                <div class="col-md-12 col-lg-9 text">
                  <h2>Stronger Bones For 7 Years Guarantee</h2>
                  <p>When you follow directions for use of AlgaeCal Plus and Stronium Boost - we guarantee you will see increased bone density in EVERY follow-up DXA scan you have while using these 2 products - or we will refund every penny you paid for our products between your scans. This guarantee extends to every scan you have for the next 7 years! Also, if you are unsatisfied at any time you can return my product for a full refund, no questions asked! <a data-toggle="modal" data-target="#guarantee">Click Here For Details</a>
                  </p>
                <div class="row">
                  <div class="col-md-4">
                    <img src="" data-src="https://www.algaecal.com/sp/assets/img/signature.png" alt="Dean Signature" class="lazy d-none d-md-inline-block w-100 mt-5" width="179" height="40" />
                    <hr class="d-none d-m">
                  </div>
                  <div class="col-md-3">
                    <img src="" data-src="https://www.algaecal.com/sp/assets/img/dean-face.jpg" alt="Dean Neuls" class="lazy rounded-circle w-100 d-none d-m">
                    <img src="" data-src="https://www.algaecal.com/sp/assets/img/dean-face.jpg" alt="Dean Neuls" class="lazy rounded-circle w-50 d-md-none  mx-auto">
                    <img src="" data-src="https://www.algaecal.com/sp/assets/img/signature.png" alt="Dean Signature" class="lazy  d-md-none w-75 mx-auto mt-1 mb-0" />
                    <hr class=" d-md-none">
                  </div>
                  <div class="col-md-5">
                    <p class="mt-3"><strong>Dean Neuls</strong>,<br> CEO and Co-Founder, AlgaeCal inc.</p>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="seen" class="box-shadow guarantee vsl-guarantee d-m d-none">
        <div class="container">
          <div class="background">
            <div class="content">
              <div class="row">
                As Seen On:
                oz foxnews pbs amazon
                forever young
                your bones

              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="refs">
        <h2>Scientific References</h2>
        <ol>
          <li>Marques A. Ferreira RJ, Santos E, et al. The accuracy of osteoporotic fracture risk prediction tools: a systematic review and meta-analysis. Ann Rheum Dis. 2015 Nov;74(11):1958-67. doi: 10.1136/annrheumdis-2015-207907. Epub 2015 Aig 6. PMID: 26248637.</li>
          <li>Riggs BL, Melton LJ 3rd. The worldwide problem of osteoporosis: insights afforded by epidemiology. Bone 1995 Nov;17(5 Suppl):505S-511S. PMID: 8573428</li>
          <li>https://www.algaecal.com/expert-insights/prescription-drugs-that-cause-osteoporosis/</li>
        </ol>
        <a href="#">View Full Reference List...</a>
      </section>

      <section>
        <a href="#" class="btn btn-guarantee">Buy Now</a>
      </section>

    </main>

    <footer>
      <div class="logo">
        <a href="https://www.algaecal.com/" title="AlgaeCal" rel="home" target="_blank">
          <span class="sr-only">AlgaeCal</span>
        </a>
      </div>
      <ul class="footer list-unstyled">
        <li>Shipping and Returns</li>
        <li>Health Disclaimer</li>
        <li>Legal and Privacy Policy</li>
        <li>Contact</li>
        <li>Order Now</li>
      </ul>
      <p>Copyright &copy; 2018 AlgaeCal</p>
    </footer>

  </div><!-- / end container -->

  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="assets/scripts/plugins.js"></script>
  <script src="assets/scripts/main.js"></script>
</body>
</html>
