@extends('layout')
@section('main')
<aside id="sidebarContent9" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler9">
  <div class="u-sidebar__scroller">
    <div class="u-sidebar__container">
      <div class="u-header-sidebar__footer-offset">

        <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
          <button type="button" class="close ml-auto" aria-controls="sidebarContent9" aria-haspopup="true"
            aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
            data-unfold-target="#sidebarContent9" data-unfold-type="css-animation"
            data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
            data-unfold-duration="500">
            <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
          </button>
        </div>


        <div class="js-scrollbar u-sidebar__body">
          <div class="u-sidebar__content u-header-sidebar__content">
            <form class="">

              <div id="login1" data-target-group="idForm1">

                <header class="border-bottom px-4 px-md-6 py-4">
                  <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                      class="flaticon-user mr-3 font-size-5"></i>Account</h2>
                </header>

                <div class="p-4 p-md-6">

                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinEmailLabel9" class="form-label" for="signinEmail9">Username or email *</label>
                      <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail9"
                        placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com"
                        aria-describedby="signinEmailLabel9" required>
                    </div>
                  </div>


                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinPasswordLabel9" class="form-label" for="signinPassword9">Password *</label>
                      <input type="password" class="form-control rounded-0 height-4 px-4" name="password"
                        id="signinPassword9" placeholder="" aria-label="" aria-describedby="signinPasswordLabel9"
                        required>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between mb-5 align-items-center">

                    <div class="js-form-message">
                      <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                        <input type="checkbox" class="custom-control-input" id="termsCheckbox1" name="termsCheckbox1"
                          required>
                        <label class="custom-control-label" for="termsCheckbox1">
                          <span class="font-size-2 text-secondary-gray-700">
                            Remember me
                          </span>
                        </label>
                      </div>
                    </div>

                    <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium"
                      href="javascript:;" data-target="#forgotPassword1" data-link-group="idForm1"
                      data-animation-in="fadeIn">Forgot Password?</a>
                  </div>
                  <div class="mb-4d75">
                    <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Sign In</button>
                  </div>
                  <div class="mb-2">
                    <a href="javascript:;"
                      class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium"
                      data-target="#signup1" data-link-group="idForm1" data-animation-in="fadeIn">Create Account</a>
                  </div>
                </div>
              </div>

              <div id="signup1" style="display: none; opacity: 0;" data-target-group="idForm1">

                <header class="border-bottom px-4 px-md-6 py-4">
                  <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                      class="flaticon-resume mr-3 font-size-5"></i>Create Account</h2>
                </header>

                <div class="p-4 p-md-6">

                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinEmailLabel11" class="form-label" for="signinEmail11">Email *</label>
                      <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail11"
                        placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com"
                        aria-describedby="signinEmailLabel11" required>
                    </div>
                  </div>


                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinPasswordLabel11" class="form-label" for="signinPassword11">Password *</label>
                      <input type="password" class="form-control rounded-0 height-4 px-4" name="password"
                        id="signinPassword11" placeholder="" aria-label="" aria-describedby="signinPasswordLabel11"
                        required>
                    </div>
                  </div>


                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signupConfirmPasswordLabel9" class="form-label" for="signupConfirmPassword9">Confirm
                        Password *</label>
                      <input type="password" class="form-control rounded-0 height-4 px-4" name="confirmPassword"
                        id="signupConfirmPassword9" placeholder="" aria-label=""
                        aria-describedby="signupConfirmPasswordLabel9" required>
                    </div>
                  </div>

                  <div class="mb-3">
                    <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Create Account</button>
                  </div>
                  <div class="text-center mb-4">
                    <span class="small text-muted">Already have an account?</span>
                    <a class="js-animation-link small" href="javascript:;" data-target="#login1"
                      data-link-group="idForm1" data-animation-in="fadeIn">Login
                    </a>
                  </div>
                </div>
              </div>


              <div id="forgotPassword1" style="display: none; opacity: 0;" data-target-group="idForm1">

                <header class="border-bottom px-4 px-md-6 py-4">
                  <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                      class="flaticon-question mr-3 font-size-5"></i>Forgot Password?</h2>
                </header>

                <div class="p-4 p-md-6">

                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinEmailLabel33" class="form-label" for="signinEmail33">Email *</label>
                      <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail33"
                        placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com"
                        aria-describedby="signinEmailLabel33" required>
                    </div>
                  </div>

                  <div class="mb-3">
                    <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Recover Password</button>
                  </div>
                  <div class="text-center mb-4">
                    <span class="small text-muted">Remember your password?</span>
                    <a class="js-animation-link small" href="javascript:;" data-target="#login1"
                      data-link-group="idForm1" data-animation-in="fadeIn">Login
                    </a>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</aside>


<aside id="sidebarContent" class="u-sidebar u-sidebar__lg" aria-labelledby="sidebarNavToggler">
  <div class="u-sidebar__scroller">
    <div class="u-sidebar__container">
      <div class="u-header-sidebar__footer-offset">

        <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
          <button type="button" class="close ml-auto" aria-controls="sidebarContent" aria-haspopup="true"
            aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
            data-unfold-target="#sidebarContent" data-unfold-type="css-animation"
            data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
            data-unfold-duration="500">
            <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
          </button>
        </div>


        <div class="js-scrollbar u-sidebar__body">
          <div class="u-sidebar__content u-header-sidebar__content">
            <form class="">

              <div id="login" data-target-group="idForm">

                <header class="border-bottom px-4 px-md-6 py-4">
                  <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                      class="flaticon-user mr-3 font-size-5"></i>Account</h2>
                </header>

                <div class="p-4 p-md-6">

                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinEmailLabel" class="form-label" for="signinEmail">Username or email *</label>
                      <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail"
                        placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com"
                        aria-describedby="signinEmailLabel" required>
                    </div>
                  </div>


                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinPasswordLabel" class="form-label" for="signinPassword">Password *</label>
                      <input type="password" class="form-control rounded-0 height-4 px-4" name="password"
                        id="signinPassword" placeholder="" aria-label="" aria-describedby="signinPasswordLabel"
                        required>
                    </div>
                  </div>

                  <div class="d-flex justify-content-between mb-5 align-items-center">

                    <div class="js-form-message">
                      <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                        <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox"
                          required>
                        <label class="custom-control-label" for="termsCheckbox">
                          <span class="font-size-2 text-secondary-gray-700">
                            Remember me
                          </span>
                        </label>
                      </div>
                    </div>

                    <a class="js-animation-link text-dark font-size-2 t-d-u link-muted font-weight-medium"
                      href="javascript:;" data-target="#forgotPassword" data-link-group="idForm"
                      data-animation-in="fadeIn">Forgot Password?</a>
                  </div>
                  <div class="mb-4d75">
                    <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Sign In</button>
                  </div>
                  <div class="mb-2">
                    <a href="javascript:;"
                      class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium"
                      data-target="#signup" data-link-group="idForm" data-animation-in="fadeIn">Create Account</a>
                  </div>
                </div>
              </div>

              <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">

                <header class="border-bottom px-4 px-md-6 py-4">
                  <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                      class="flaticon-resume mr-3 font-size-5"></i>Create Account</h2>
                </header>

                <div class="p-4 p-md-6">

                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinEmailLabel1" class="form-label" for="signinEmail1">Email *</label>
                      <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail1"
                        placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com"
                        aria-describedby="signinEmailLabel1" required>
                    </div>
                  </div>


                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinPasswordLabel1" class="form-label" for="signinPassword1">Password *</label>
                      <input type="password" class="form-control rounded-0 height-4 px-4" name="password"
                        id="signinPassword1" placeholder="" aria-label="" aria-describedby="signinPasswordLabel1"
                        required>
                    </div>
                  </div>


                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signupConfirmPasswordLabel" class="form-label" for="signupConfirmPassword">Confirm
                        Password *</label>
                      <input type="password" class="form-control rounded-0 height-4 px-4" name="confirmPassword"
                        id="signupConfirmPassword" placeholder="" aria-label=""
                        aria-describedby="signupConfirmPasswordLabel" required>
                    </div>
                  </div>

                  <div class="mb-3">
                    <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Create Account</button>
                  </div>
                  <div class="text-center mb-4">
                    <span class="small text-muted">Already have an account?</span>
                    <a class="js-animation-link small" href="javascript:;" data-target="#login"
                      data-link-group="idForm" data-animation-in="fadeIn">Login
                    </a>
                  </div>
                </div>
              </div>


              <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">

                <header class="border-bottom px-4 px-md-6 py-4">
                  <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                      class="flaticon-question mr-3 font-size-5"></i>Forgot Password?</h2>
                </header>

                <div class="p-4 p-md-6">

                  <div class="form-group mb-4">
                    <div class="js-form-message js-focus-state">
                      <label id="signinEmailLabel3" class="form-label" for="signinEmail3">Email *</label>
                      <input type="email" class="form-control rounded-0 height-4 px-4" name="email" id="signinEmail3"
                        placeholder="creativelayers088@gmail.com" aria-label="creativelayers088@gmail.com"
                        aria-describedby="signinEmailLabel3" required>
                    </div>
                  </div>

                  <div class="mb-3">
                    <button type="submit" class="btn btn-block py-3 rounded-0 btn-dark">Recover Password</button>
                  </div>
                  <div class="text-center mb-4">
                    <span class="small text-muted">Remember your password?</span>
                    <a class="js-animation-link small" href="javascript:;" data-target="#login"
                      data-link-group="idForm" data-animation-in="fadeIn">Login
                    </a>
                  </div>
                </div>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
  </div>
</aside>


<aside id="sidebarContent1" class="u-sidebar u-sidebar__xl" aria-labelledby="sidebarNavToggler1">
  <div class="u-sidebar__scroller js-scrollbar">
    <div class="u-sidebar__container">
      <div class="u-header-sidebar__footer-offset">

        <div class="d-flex align-items-center position-absolute top-0 right-0 z-index-2 mt-5 mr-md-6 mr-4">
          <button type="button" class="close ml-auto" aria-controls="sidebarContent1" aria-haspopup="true"
            aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
            data-unfold-target="#sidebarContent1" data-unfold-type="css-animation"
            data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
            data-unfold-duration="500">
            <span aria-hidden="true">Close <i class="fas fa-times ml-2"></i></span>
          </button>
        </div>


        <div class="u-sidebar__body">
          <div class="u-sidebar__content u-header-sidebar__content">

            <header class="border-bottom px-4 px-md-6 py-4">
              <h2 class="font-size-3 mb-0 d-flex align-items-center"><i
                  class="flaticon-icon-126515 mr-3 font-size-5"></i>Your shopping bag (3)</h2>
            </header>

            <div class="px-4 py-5 px-md-6 border-bottom">
              <div class="media">
                <a href="#" class="d-block"><img src="../../assets/img/120x180/img6.jpg" class="img-fluid"
                    alt="image-description"></a>
                <div class="media-body ml-4d875">
                  <div class="text-primary text-uppercase font-size-1 mb-1 text-truncate"><a href="#">Hard Cover</a>
                  </div>
                  <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2">
                    <a href="#" class="text-dark">The Ride of a Lifetime: Lessons Learned from 15 Years as CEO</a>
                  </h2>
                  <div class="font-size-2 mb-1 text-truncate"><a href="#" class="text-gray-700">Robert Iger</a></div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount">1 x <span
                        class="woocommerce-Price-currencySymbol">$</span>125.30</span>
                  </div>
                </div>
                <div class="mt-3 ml-3">
                  <a href="#" class="text-dark"><i class="fas fa-times"></i></a>
                </div>
              </div>
            </div>
            <div class="px-4 py-5 px-md-6 border-bottom">
              <div class="media">
                <a href="#" class="d-block"><img src="../../assets/img/120x180/img6.jpg" class="img-fluid"
                    alt="image-description"></a>
                <div class="media-body ml-4d875">
                  <div class="text-primary text-uppercase font-size-1 mb-1 text-truncate"><a href="#">Hard Cover</a>
                  </div>
                  <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2">
                    <a href="#" class="text-dark">The Rural Diaries: Love, Livestock, and Big Life Lessons Down</a>
                  </h2>
                  <div class="font-size-2 mb-1 text-truncate"><a href="#" class="text-gray-700">Hillary Burton</a>
                  </div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount">2 x <span
                        class="woocommerce-Price-currencySymbol">$</span>200</span>
                  </div>
                </div>
                <div class="mt-3 ml-3">
                  <a href="#" class="text-dark"><i class="fas fa-times"></i></a>
                </div>
              </div>
            </div>
            <div class="px-4 py-5 px-md-6 border-bottom">
              <div class="media">
                <a href="#" class="d-block"><img src="../../assets/img/120x180/img6.jpg" class="img-fluid"
                    alt="image-description"></a>
                <div class="media-body ml-4d875">
                  <div class="text-primary text-uppercase font-size-1 mb-1 text-truncate"><a href="#">Paperback</a>
                  </div>
                  <h2 class="woocommerce-loop-product__title h6 text-lh-md mb-1 text-height-2 crop-text-2">
                    <a href="#" class="text-dark">Russians Among Us: Sleeper Cells, Ghost Stories, and the Hunt.</a>
                  </h2>
                  <div class="font-size-2 mb-1 text-truncate"><a href="#" class="text-gray-700">Gordon Corera</a>
                  </div>
                  <div class="price d-flex align-items-center font-weight-medium font-size-3">
                    <span class="woocommerce-Price-amount amount">6 x <span
                        class="woocommerce-Price-currencySymbol">$</span>100</span>
                  </div>
                </div>
                <div class="mt-3 ml-3">
                  <a href="#" class="text-dark"><i class="fas fa-times"></i></a>
                </div>
              </div>
            </div>
            <div class="px-4 py-5 px-md-6 d-flex justify-content-between align-items-center font-size-3">
              <h4 class="mb-0 font-size-3">Subtotal:</h4>
              <div class="font-weight-medium">$750.00</div>
            </div>
            <div class="px-4 mb-8 px-md-6">
              <a href="../shop/cart.html" class="btn btn-block py-4 rounded-0 btn-outline-dark mb-4">View Cart</a>
              <a href="../shop/checkout.html" class="btn btn-block py-4 rounded-0 btn-dark">Checkout</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</aside>


<aside id="sidebarContent2" class="u-sidebar u-sidebar__md u-sidebar--left" aria-labelledby="sidebarNavToggler2">
  <div class="u-sidebar__scroller js-scrollbar">
    <div class="u-sidebar__container">
      <div class="u-header-sidebar__footer-offset">

        <div class="u-sidebar__body">
          <div class="u-sidebar__content u-header-sidebar__content">

            <header class="border-bottom px-4 px-md-5 py-4 d-flex align-items-center justify-content-between">
              <h2 class="font-size-3 mb-0">SHOP BY CATEGORY</h2>

              <div class="d-flex align-items-center">
                <button type="button" class="close ml-auto" aria-controls="sidebarContent2" aria-haspopup="true"
                  aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
                  data-unfold-target="#sidebarContent2" data-unfold-type="css-animation"
                  data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft"
                  data-unfold-duration="500">
                  <span aria-hidden="true"><i class="fas fa-times ml-2"></i></span>
                </button>
              </div>

            </header>

            <div class="border-bottom">
              <div class="zeynep pt-4">
                <ul>
                  <li class="has-submenu">
                    <a href="#" data-submenu="off-pages">Pages</a>
                    <div id="off-pages" class="submenu">
                      <div class="submenu-header" data-submenu-close="off-pages">
                        <a href="#">Pages</a>
                      </div>
                      <ul>
                        <li class="has-submenu">
                          <a href="#" data-submenu="off-home">Home Pages</a>
                          <div id="off-home" class="submenu js-scrollbar">
                            <div class="submenu-header" data-submenu-close="off-home">
                              <a href="#">Home Pages</a>
                            </div>
                            <ul class="">
                              <li>
                                <a href="../home/index.html">Home v1</a>
                              </li>
                              <li>
                                <a href="../home/home-v2.html">Home v2</a>
                              </li>
                              <li>
                                <a href="../home/home-v3.html">Home v2</a>
                              </li>
                              <li>
                                <a href="../home/home-v3.html">Home v3</a>
                              </li>
                              <li>
                                <a href="../home/home-v4.html">Home v4</a>
                              </li>
                              <li>
                                <a href="../home/home-v5.html">Home v5</a>
                              </li>
                              <li>
                                <a href="../home/home-v6.html">Home v6</a>
                              </li>
                              <li>
                                <a href="../home/home-v7.html">Home v7</a>
                              </li>
                              <li>
                                <a href="../home/home-v8.html">Home v8</a>
                              </li>
                              <li>
                                <a href="../home/home-v9.html">Home v9</a>
                              </li>
                              <li>
                                <a href="../home/home-v10.html">Home v10</a>
                              </li>
                              <li>
                                <a href="../home/home-v11.html">Home v11</a>
                              </li>
                              <li>
                                <a href="../home/home-v12.html">Home v12</a>
                              </li>
                              <li>
                                <a href="../home/home-v13.html">Home v13</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="has-submenu">
                          <a href="#" data-submenu="off-single-product">Single Product</a>
                          <div id="off-single-product" class="submenu js-scrollbar">
                            <div class="submenu-header" data-submenu-close="off-single-product">
                              <a href="#">Single Product</a>
                            </div>
                            <ul class="">
                              <li>
                                <a href="../shop/single-product-v1.html">Single Product v1</a>
                              </li>
                              <li>
                                <a href="../shop/single-product-v2.html">Single Product v2</a>
                              </li>
                              <li>
                                <a href="../shop/single-product-v3.html">Single Product v3</a>
                              </li>
                              <li>
                                <a href="../shop/single-product-v4.html">Single Product v4</a>
                              </li>
                              <li>
                                <a href="../shop/single-product-v5.html">Single Product v5</a>
                              </li>
                              <li>
                                <a href="../shop/single-product-v6.html">Single Product v6</a>
                              </li>
                              <li>
                                <a href="../shop/single-product-v7.html">Single Product v7</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="has-submenu">
                          <a href="#" data-submenu="off-shop-pages">Shop Pages</a>
                          <div id="off-shop-pages" class="submenu js-scrollbar">
                            <div class="submenu-header" data-submenu-close="off-shop-pages">
                              <a href="#">Shop Pages</a>
                            </div>
                            <ul class="">
                              <li>
                                <a href="../shop/cart.html">Shop cart</a>
                              </li>
                              <li>
                                <a href="../shop/checkout.html">Shop checkout</a>
                              </li>
                              <li>
                                <a href="../shop/my-account.html">Shop My Account</a>
                              </li>
                              <li>
                                <a href="../shop/order-received.html">Shop Order Received</a>
                              </li>
                              <li>
                                <a href="../shop/order-tracking.html">Shop Order Tracking</a>
                              </li>
                              <li>
                                <a href="../shop/store-location.html">Shop Store Location</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="has-submenu">
                          <a href="#" data-submenu="off-shop-list">Shop List</a>
                          <div id="off-shop-list" class="submenu js-scrollbar">
                            <div class="submenu-header" data-submenu-close="off-shop-list">
                              <a href="#">Shop List</a>
                            </div>
                            <ul class="">
                              <li>
                                <a href="../shop/v1.html">Shop List v1</a>
                              </li>
                              <li>
                                <a href="../shop/v2.html">Shop List v2</a>
                              </li>
                              <li>
                                <a href="../shop/v3.html">Shop List v3</a>
                              </li>
                              <li>
                                <a href="../shop/v4.html">Shop List v4</a>
                              </li>
                              <li>
                                <a href="../shop/v5.html">Shop List v5</a>
                              </li>
                              <li>
                                <a href="../shop/v6.html">Shop List v6</a>
                              </li>
                              <li>
                                <a href="../shop/v7.html">Shop List v7</a>
                              </li>
                              <li>
                                <a href="../shop/v8.html">Shop List v8</a>
                              </li>
                              <li>
                                <a href="../shop/v9.html">Shop List v9</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="has-submenu">
                          <a href="#" data-submenu="off-blog">Blog</a>
                          <div id="off-blog" class="submenu js-scrollbar">
                            <div class="submenu-header" data-submenu-close="off-blog">
                              <a href="#">Blog</a>
                            </div>
                            <ul class="">
                              <li>
                                <a href="../blog/blog-v1.html">Blog v1</a>
                              </li>
                              <li>
                                <a href="../blog/blog-v2.html">Blog v2</a>
                              </li>
                              <li>
                                <a href="../blog/blog-v3.html">Blog v3</a>
                              </li>
                              <li>
                                <a href="../blog/blog-single.html">Blog Single</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="has-submenu">
                          <a href="#" data-submenu="off-others">Others</a>
                          <div id="off-others" class="submenu js-scrollbar">
                            <div class="submenu-header" data-submenu-close="off-others">
                              <a href="#">Others</a>
                            </div>
                            <ul class="">
                              <li>
                                <a href="../others/404.html">404</a>
                              </li>
                              <li>
                                <a href="../others/about.html">About Us</a>
                              </li>
                              <li>
                                <a href="../others/authors-list.html">Authors List</a>
                              </li>
                              <li>
                                <a href="../others/authors-single.html">Authors Single</a>
                              </li>
                              <li>
                                <a href="../others/coming-soon.html">Coming Soon</a>
                              </li>
                              <li>
                                <a href="../others/contact.html">Contact Us</a>
                              </li>
                              <li>
                                <a href="../others/faq.html">FAQ</a>
                              </li>
                              <li>
                                <a href="../others/pricing-table.html">Pricing Table</a>
                              </li>
                              <li>
                                <a href="../others/terms-conditions.html">Terms Conditions</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li class="px-5">
                          <a href="../../documentation/index.html"
                            class="btn btn-primary mb-3 mb-md-0 mb-xl-3 mt-4 font-size-2 btn-block">Documentation</a>
                        </li>
                        <li class="px-5 mb-4">
                          <a href="../../starter/index.html"
                            class="btn btn-secondary font-size-2 btn-block mb-2">Starter</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="art-photo">Arts & Photography</a>
                    <div id="art-photo" class="submenu">
                      <div class="submenu-header" data-submenu-close="art-photo">
                        <a href="#">Arts & Photography</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Architecture</a>
                        </li>
                        <li>
                          <a href="#">Business of Art</a>
                        </li>
                        <li>
                          <a href="#">Collections, Catalogs & Exhibitions</a>
                        </li>
                        <li>
                          <a href="#">Decorative Arts & Design</a>
                        </li>
                        <li>
                          <a href="#">Drawing</a>
                        </li>
                        <li>
                          <a href="#">Fashion</a>
                        </li>
                        <li>
                          <a href="#">Graphic Design</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="biography">Biographies & Memoirs</a>
                    <div id="biography" class="submenu">
                      <div class="submenu-header" data-submenu-close="biography">
                        <a href="#">Biographies & Memoirs</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Istanbul</a>
                        </li>
                        <li>
                          <a href="#">Mardin</a>
                        </li>
                        <li>
                          <a href="#">Amed</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="children">Children's Books</a>
                    <div id="children" class="submenu">
                      <div class="submenu-header" data-submenu-close="children">
                        <a href="#">Children's Books</a>
                      </div>
                      <ul>
                        <li class="has-submenu">
                          <a href="#" data-submenu="electronics">Electronics</a>
                          <div id="electronics" class="submenu js-scrollbar">
                            <div class="submenu-header" data-submenu-close="electronics">
                              <a href="#">Electronics</a>
                            </div>
                            <ul class="">
                              <li>
                                <a href="#">Camera & Photo</a>
                              </li>
                              <li>
                                <a href="#">Home Audio</a>
                              </li>
                              <li>
                                <a href="#">Tv & Video</a>
                              </li>
                              <li>
                                <a href="#">Computers & Accessories</a>
                              </li>
                              <li>
                                <a href="#">Car & Vehicle Electronics</a>
                              </li>
                              <li>
                                <a href="#">Portable Audio & Video</a>
                              </li>
                              <li>
                                <a href="#">Headphones</a>
                              </li>
                              <li>
                                <a href="#">Accessories & Supplies</a>
                              </li>
                              <li>
                                <a href="#">Video Projectors</a>
                              </li>
                              <li>
                                <a href="#">Office Electronics</a>
                              </li>
                              <li>
                                <a href="#">Wearable Technology</a>
                              </li>
                              <li>
                                <a href="#">Service Plans</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <a href="#">Books</a>
                        </li>
                        <li>
                          <a href="#">Video Games</a>
                        </li>
                        <li>
                          <a href="#">Computers</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="computers">Computers & Technology</a>
                    <div id="computers" class="submenu">
                      <div class="submenu-header" data-submenu-close="computers">
                        <a href="#">Computers & Technology</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Istanbul</a>
                        </li>
                        <li>
                          <a href="#">Mardin</a>
                        </li>
                        <li>
                          <a href="#">Amed</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="cookbook">Cookbooks, Food & Wine</a>
                    <div id="cookbook" class="submenu">
                      <div class="submenu-header" data-submenu-close="cookbook">
                        <a href="#">Cookbooks, Food & Wine</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Istanbul</a>
                        </li>
                        <li>
                          <a href="#">Mardin</a>
                        </li>
                        <li>
                          <a href="#">Amed</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="sciencemath">Education & Teaching</a>
                    <div id="sciencemath" class="submenu">
                      <div class="submenu-header" data-submenu-close="sciencemath">
                        <a href="#">Education & Teaching</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Istanbul</a>
                        </li>
                        <li>
                          <a href="#">Mardin</a>
                        </li>
                        <li>
                          <a href="#">Amed</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="health">Health, Fitness & Dieting</a>
                    <div id="health" class="submenu">
                      <div class="submenu-header" data-submenu-close="health">
                        <a href="#">Health, Fitness & Dieting</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Istanbul</a>
                        </li>
                        <li>
                          <a href="#">Mardin</a>
                        </li>
                        <li>
                          <a href="#">Amed</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="history">History</a>
                    <div id="history" class="submenu">
                      <div class="submenu-header" data-submenu-close="history">
                        <a href="#">History</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Istanbul</a>
                        </li>
                        <li>
                          <a href="#">Mardin</a>
                        </li>
                        <li>
                          <a href="#">Amed</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="romance">Romance</a>
                    <div id="romance" class="submenu">
                      <div class="submenu-header" data-submenu-close="romance">
                        <a href="#">Romance</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Istanbul</a>
                        </li>
                        <li>
                          <a href="#">Mardin</a>
                        </li>
                        <li>
                          <a href="#">Amed</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="sports">Sports & Outdoors</a>
                    <div id="sports" class="submenu">
                      <div class="submenu-header" data-submenu-close="sports">
                        <a href="#">Sports & Outdoors</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Istanbul</a>
                        </li>
                        <li>
                          <a href="#">Mardin</a>
                        </li>
                        <li>
                          <a href="#">Amed</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="has-submenu">
                    <a href="#" data-submenu="travel">Travel</a>
                    <div id="travel" class="submenu">
                      <div class="submenu-header" data-submenu-close="travel">
                        <a href="#">Travel</a>
                      </div>
                      <ul>
                        <li>
                          <a href="#">Istanbul</a>
                        </li>
                        <li>
                          <a href="#">Mardin</a>
                        </li>
                        <li>
                          <a href="#">Amed</a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="px-4 px-md-5 pt-5 pb-4 border-bottom">
              <h2 class="font-size-3 mb-3">HELP & SETTINGS </h2>
              <ul class="list-group list-group-flush list-group-borderless">
                <li class="list-group-item px-0 py-2 border-0"><a href="#" class="h-primary">Your Account</a></li>
                <li class="list-group-item px-0 py-2 border-0"><a href="#" class="h-primary">Help</a></li>
                <li class="list-group-item px-0 py-2 border-0"><a href="#" class="h-primary">Sign In</a></li>
              </ul>
            </div>
            <div class="px-4 px-md-5 py-5">
              <select class="custom-select mb-4 rounded-0 pl-4 height-4 shadow-none text-dark">
                <option selected>English (United States)</option>
                <option value="1">English (UK)</option>
                <option value="2">Arabic (Saudi Arabia)</option>
                <option value="3">Deutsch</option>
              </select>
              <select class="custom-select mb-4 rounded-0 pl-4 height-4 shadow-none text-dark">
                <option selected>$ USD</option>
                <option value="1">د.إ AED</option>
                <option value="2">¥ CNY</option>
                <option value="3">€ EUR</option>
              </select>

              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="h-primary pr-2 font-size-2" href="#">
                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="h-primary pr-2 font-size-2" href="#">
                    <span class="fab fa-google btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="h-primary pr-2 font-size-2" href="#">
                    <span class="fab fa-twitter btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="h-primary pr-2 font-size-2" href="#">
                    <span class="fab fa-github btn-icon__inner"></span>
                  </a>
                </li>
              </ul>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</aside>



<main id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-3 border-right">
        <h6 class="font-weight-medium font-size-7 pt-5 pt-lg-8  mb-5 mb-lg-7">My account</h6>
        <div class="tab-wrapper">
          <ul class="my__account-nav nav flex-column mb-0" role="tablist" id="pills-tab">
            <li class="nav-item mx-0">
              <a class="nav-link d-flex align-items-center px-0 active" id="pills-one-example1-tab" data-toggle="pill"
                href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600">Dashboard</span>
              </a>
            </li>
            <li class="nav-item mx-0">
              <a class="nav-link d-flex align-items-center px-0" id="pills-two-example1-tab" data-toggle="pill"
                href="#pills-two-example1" role="tab" aria-controls="pills-two-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600">Orders</span>
              </a>
            </li>
            <li class="nav-item mx-0">
              <a class="nav-link d-flex align-items-center px-0" id="pills-three-example1-tab" data-toggle="pill"
                href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600">Downloads</span>
              </a>
            </li>
            <li class="nav-item mx-0">
              <a class="nav-link d-flex align-items-center px-0" id="pills-four-example1-tab" data-toggle="pill"
                href="#pills-four-example1" role="tab" aria-controls="pills-four-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600">Addresses</span>
              </a>
            </li>
            <li class="nav-item mx-0">
              <a class="nav-link d-flex align-items-center px-0" id="pills-five-example1-tab" data-toggle="pill"
                href="#pills-five-example1" role="tab" aria-controls="pills-five-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600">Account details</span>
              </a>
            </li>
            <li class="nav-item mx-0">
              <a class="nav-link d-flex align-items-center px-0" id="pills-six-example1-tab" data-toggle="pill"
                href="#pills-six-example1" role="tab" aria-controls="pills-six-example1" aria-selected="false">
                <span class="font-weight-normal text-gray-600">Wishlist</span>
              </a>
            </li>
            <li class="nav-item mx-0">
              <a class="nav-link d-flex align-items-center px-0" href="#">
                <span class="font-weight-normal text-gray-600">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
            aria-labelledby="pills-one-example1-tab">
            <div class="pt-5 pt-lg-8 pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3 mb-xl-1">
              <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Dashboard</h6>
              <div class="ml-lg-1 mb-4">
                <span class="font-size-22">Hello alitfn58</span>
                <span class="font-size-2"> (not alitfn58? <a class="link-black-100" href="#">Log out</a>)</span>
              </div>
              <div class="mb-4">
                <p class="mb-0 font-size-2 ml-lg-1 text-gray-600">From your account dashboard you can view your <span
                    class="text-dark">recent orders,</span> manage your <span class="text-dark">shipping and billing
                    addresses,</span> and edit your <span class="text-dark">password and account details.</span></p>
              </div>
              <div class="row no-gutters row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                  <div class="border py-6 text-center">
                    <a href="#" class="btn btn-primary rounded-circle px-4 mb-2">
                      <span class="flaticon-order font-size-10 btn-icon__inner"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Orders</div>
                  </div>
                </div>
                <div class="col">
                  <div class="border border-left-0 py-6 text-center">
                    <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                      <span class="flaticon-cloud-computing font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Downloads</div>
                  </div>
                </div>
                <div class="col">
                  <div class="border border-left-0 py-6 text-center">
                    <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                      <span class="flaticon-place font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Addresses</div>
                  </div>
                </div>
                <div class="col">
                  <div class="border py-6 text-center">
                    <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                      <span class="flaticon-user-1 font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Account Details</div>
                  </div>
                </div>
                <div class="col">
                  <div class="border border-left-0 py-6 text-center">
                    <a href="#" class="btn bg-gray-200  rounded-circle px-4 mb-2">
                      <span class="flaticon-heart font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Wishlist</div>
                  </div>
                </div>
                <div class="col">
                  <div class="border border-left-0 py-6 text-center">
                    <a href="#" class="btn bg-gray-200 rounded-circle px-4 mb-2">
                      <span class="flaticon-exit font-size-10 btn-icon__inner text-primary"></span>
                    </a>
                    <div class="font-size-3 mb-xl-1">Orders</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">
            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
              <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">orders</h6>
              <table class="table">
                <thead>
                  <tr class="border">
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-lg-5">Order</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Date</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Staus</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Total</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border">
                    <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#30785</th>
                    <td class="align-middle py-5">March 26, 2020</td>
                    <td class="align-middle py-5">On hold</td>
                    <td class="align-middle py-5">
                      <span class="text-primary">$1,855.00</span> for 5 items
                    </td>
                    <td class="align-middle py-5">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">View
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="border">
                    <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#30785</th>
                    <td class="align-middle py-5">March 26, 2020</td>
                    <td class="align-middle py-5">On hold</td>
                    <td class="align-middle py-5">
                      <span class="text-primary">$1,855.00</span> for 5 items
                    </td>
                    <td class="align-middle py-5">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">View
                        </button>
                      </div>
                    </td>
                  </tr>
                  <tr class="border">
                    <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#30785</th>
                    <td class="align-middle py-5">March 26, 2020</td>
                    <td class="align-middle py-5">On hold</td>
                    <td class="align-middle py-5">
                      <span class="text-primary">$1,855.00</span> for 5 items
                    </td>
                    <td class="align-middle py-5">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">View
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-three-example1" role="tabpanel"
            aria-labelledby="pills-three-example1-tab">
            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-2 mb-lg-4">
              <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Downloads</h6>
              <table class="table">
                <thead>
                  <tr class="border">
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Order</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Date</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Staus</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Total</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border">
                    <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">#30785</th>
                    <td class="align-middle py-5">March 26, 2020</td>
                    <td class="align-middle py-5">On hold</td>
                    <td class="align-middle py-5">
                      <span class="text-primary">$1,855.00</span> for 5 items
                    </td>
                    <td class="align-middle py-5">
                      <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-dark rounded-0 btn-wide font-weight-medium">View
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-four-example1" role="tabpanel"
            aria-labelledby="pills-four-example1-tab">
            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-2 mb-lg-4">
              <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-5 mb-lg-8 pb-xl-1">Addresses</h6>
              <div class="row row-cols-1 row-cols-md-2">
                <div class="col">
                  <div class="mb-6 mb-md-0">
                    <h6 class="font-weight-medium font-size-22 mb-3">Billing Address
                    </h6>
                    <address class="d-flex flex-column mb-4">
                      <span class="text-gray-600 font-size-2">Ali Tufan</span>
                      <span class="text-gray-600 font-size-2">Bedford St,</span>
                      <span class="text-gray-600 font-size-2">Covent Garden, </span>
                      <span class="text-gray-600 font-size-2">London WC2E 9ED</span>
                      <span class="text-gray-600 font-size-2">United Kingdom</span>
                    </address>
                    <div class="d-flex">
                      <button type="submit"
                        class="btn btn-dark width-150 rounded-0 btn-wide font-weight-medium">Edit</button>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <h6 class="font-weight-medium font-size-22 mb-3">Shipping Address
                  </h6>
                  <address class="d-flex flex-column mb-4">
                    <span class="text-gray-600 font-size-2">Ali Tufan</span>
                    <span class="text-gray-600 font-size-2">Bedford St,</span>
                    <span class="text-gray-600 font-size-2">Covent Garden, </span>
                    <span class="text-gray-600 font-size-2">London WC2E 9ED</span>
                    <span class="text-gray-600 font-size-2">United Kingdom</span>
                  </address>
                  <div class="d-flex">
                    <button type="submit"
                      class="btn btn-dark width-150 rounded-0 btn-wide font-weight-medium">Edit</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-five-example1" role="tabpanel"
            aria-labelledby="pills-five-example1-tab">
            <div class="border-bottom mb-6 pb-6 mb-lg-8 pb-lg-9">
              <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9">
                <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Account Details</h6>
                <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Edit Account</div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="js-form-message">
                      <label for="exampleFormControlInput1">First name *</label>
                      <input type="text" class="form-control rounded-0 pl-3 placeholder-color-3"
                        id="exampleFormControlInput1" name="name" aria-label="Jack Wayley" placeholder="Ali"
                        required="" data-error-class="u-has-error" data-msg="Please enter your name."
                        data-success-class="u-has-success">
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="js-form-message">
                      <label for="exampleFormControlInput2">Last name *</label>
                      <input type="text" class="form-control rounded-0 pl-3 placeholder-color-3"
                        id="exampleFormControlInput2" name="name" aria-label="Jack Wayley" placeholder="TUF.."
                        required="" data-error-class="u-has-error" data-msg="Please enter your name."
                        data-success-class="u-has-success">
                    </div>
                  </div>
                  <div class="col-md-12 mb-4">
                    <div class="js-form-message">
                      <label for="exampleFormControlInput3">Display name</label>
                      <input type="text" class="form-control rounded-0" name="name" aria-label="Jack Wayley"
                        id="exampleFormControlInput3" required="" data-error-class="u-has-error"
                        data-msg="Please enter your name." data-success-class="u-has-success">
                    </div>
                  </div>
                  <div class="col-md-12 mb-4 mb-md-0">
                    <div class="js-form-message">
                      <label for="exampleFormControlInput4">Email address</label>
                      <input type="email" class="form-control rounded-0" name="name" id="exampleFormControlInput4"
                        aria-label="Jack Wayley" required="" data-error-class="u-has-error"
                        data-msg="Please enter your name." data-success-class="u-has-success">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="pl-md-5 pl-lg-9 space-bottom-2 space-bottom-lg-3">
              <div class="font-weight-medium font-size-22 mb-4 pb-xl-1">Password Change</div>
              <div class="row">
                <div class="col-md-12 mb-4">
                  <div class="js-form-message">
                    <label for="exampleFormControlInput5">Current Password</label>
                    <input type="password" class="form-control rounded-0" name="name" id="exampleFormControlInput5"
                      aria-label="Jack Wayley" required="" data-error-class="u-has-error"
                      data-msg="Please enter your name." data-success-class="u-has-success">
                  </div>
                </div>
                <div class="col-md-12 mb-4">
                  <div class="js-form-message">
                    <label for="exampleFormControlInput6">New Password</label>
                    <input type="password" class="form-control rounded-0" name="name" id="exampleFormControlInput6"
                      aria-label="Jack Wayley" required="" data-error-class="u-has-error"
                      data-msg="Please enter your name." data-success-class="u-has-success">
                  </div>
                </div>
                <div class="col-md-12 mb-5">
                  <div class="js-form-message">
                    <label for="exampleFormControlInput7">Confirm new password</label>
                    <input type="password" class="form-control rounded-0" name="name" id="exampleFormControlInput7"
                      aria-label="Jack Wayley" required="" data-error-class="u-has-error"
                      data-msg="Please enter your name." data-success-class="u-has-success">
                  </div>
                </div>
                <div class="ml-3">
                  <button type="submit"
                    class="btn btn-wide btn-dark text-white rounded-0 transition-3d-hover height-60 width-390">Save
                    Changes</button>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="pills-six-example1" role="tabpanel" aria-labelledby="pills-six-example1-tab">
            <div class="pt-5 pl-md-5 pt-lg-8 pl-lg-9 space-bottom-lg-3">
              <h6 class="font-weight-medium font-size-7 ml-lg-1 mb-lg-8 pb-xl-1">Wishlist</h6>
              <table class="table mb-0">
                <thead>
                  <tr class="border">
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium pl-3 pl-md-5">Prouct</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Price</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Stock Staus</th>
                    <th scope="col" class="py-3 border-bottom-0 font-weight-medium">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border">
                    <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">
                      <div class="d-flex align-items-center">
                        <a class="d-block" href="#">
                          <img class="img-fluid" src="../../assets/img/90x138/img1.jpg" alt="Image-Description">
                        </a>
                        <div class="ml-xl-4">
                          <div class="font-weight-normal">
                            <a href="#">The Overdue Life of Amy Byler</a>
                          </div>
                          <div class="font-size-2"><a href="#" class="text-gray-700" tabindex="0">Jay Shetty</a></div>
                        </div>
                      </div>
                    </th>
                    <td class="align-middle py-5">$37</td>
                    <td class="align-middle py-5">In Stock</td>
                    <td class="align-middle py-5">
                      <span class="product__add-to-cart">ADD TO CART</span>
                    </td>
                  </tr>
                  <tr class="border">
                    <th class="pl-3 pl-md-5 font-weight-normal align-middle py-6">
                      <div class="d-flex align-items-center">
                        <a class="d-block" href="#">
                          <img class="img-fluid" src="../../assets/img/90x138/img3.jpg" alt="Image-Description">
                        </a>
                        <div class="ml-xl-4">
                          <div class="font-weight-normal">
                            <a href="#">The Overdue Life of Amy Byler</a>
                          </div>
                          <div class="font-size-2"><a href="#" class="text-gray-700" tabindex="0">Jay Shetty</a></div>
                        </div>
                      </div>
                    </th>
                    <td class="align-middle py-5">$37</td>
                    <td class="align-middle py-5">In Stock</td>
                    <td class="align-middle py-5">
                      <span class="product__add-to-cart">ADD TO CART</span>
                    </td>
                  </tr>
                  <tr class="border">
                    <th class="pl-5 font-weight-normal align-middle py-6">
                      <div class="d-flex align-items-center">
                        <a class="d-block" href="#">
                          <img class="img-fluid" src="../../assets/img/90x138/img4.jpg" alt="Image-Description">
                        </a>
                        <div class="ml-xl-4">
                          <div class="font-weight-normal">
                            <a href="#">The Overdue Life of Amy Byler</a>
                          </div>
                          <div class="font-size-2"><a href="#" class="text-gray-700" tabindex="0">Jay Shetty</a></div>
                        </div>
                      </div>
                    </th>
                    <td class="align-middle py-5">$37</td>
                    <td class="align-middle py-5">In Stock</td>
                    <td class="align-middle py-5">
                      <span class="product__add-to-cart">ADD TO CART</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection