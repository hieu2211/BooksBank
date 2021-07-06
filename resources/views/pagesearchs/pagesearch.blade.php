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
                <a href="#" class="d-block"><img src="../../assets/img/150x226/img6.jpg" class="img-fluid"
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
                <a href="#" class="d-block"><img src="../../assets/img/150x226/img6.jpg" class="img-fluid"
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
                <a href="#" class="d-block"><img src="../../assets/img/150x226/img6.jpg" class="img-fluid"
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



<div class="page-header border-bottom mb-8">
  <div class="container">
    <div class="d-md-flex justify-content-between align-items-center py-4">
      <h1 class="page-title font-size-3 font-weight-medium m-0 text-lh-lg">Shop</h1>
      <nav class="woocommerce-breadcrumb font-size-2">
        <a href="../home/index.html" class="h-primary">Home</a>
        <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
        <a href="../shop/v3.html" class="h-primary">Electronics</a>
        <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>
        <a href="../shop/v3.html" class="h-primary">Cameras</a>
        <span class="breadcrumb-separator mx-1"><i class="fas fa-angle-right"></i></span>Build Your DSLR
      </nav>
    </div>
  </div>
</div>
<div class="site-content space-bottom-3" id="content">
  <div class="container">
    <div class="row">
      <div id="primary" class="content-area order-2">
        <div
          class="shop-control-bar d-lg-flex justify-content-between align-items-center mb-5 text-center text-md-left">
          <div class="shop-control-bar__left mb-4 m-lg-0">
            <p class="woocommerce-result-count m-0">Showing 1–12 of 126 results</p>
          </div>
          <div class="shop-control-bar__right d-md-flex align-items-center">
            <form class="woocommerce-ordering mb-4 m-md-0" method="get">

              <select class="js-select selectpicker dropdown-select orderby" name="orderby"
                data-style="border-bottom shadow-none outline-none py-2">
                <option value="popularity">Sort by popularity</option>
                <option value="default" selected="selected">Default sorting</option>
                <option value="date">Sort by newness</option>
                <option value="price">Sort by price: low to high</option>
                <option value="price-desc">Sort by price: high to low</option>
              </select>

            </form>
            <form class="number-of-items ml-md-4 mb-4 m-md-0 d-none d-xl-block" method="get">

              <select class="js-select selectpicker dropdown-select orderby" name="orderby"
                data-style="border-bottom shadow-none outline-none py-2" data-width="fit">
                <option value="show10">Show 10</option>
                <option value="show15">Show 15</option>
                <option value="show20" selected="selected">Show 20</option>
                <option value="show25">Show 25</option>
                <option value="show30">Show 30</option>
              </select>

            </form>
            <ul class="nav nav-tab ml-lg-4 justify-content-center justify-content-md-start ml-md-auto" id="pills-tab"
              role="tablist">
              <li class="nav-item border">
                <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center active"
                  id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab"
                  aria-controls="pills-one-example1" aria-selected="true">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17px"
                    height="17px">
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M7.000,0.000 L10.000,0.000 L10.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M14.000,0.000 L17.000,0.000 L17.000,3.000 L14.000,3.000 L14.000,0.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M7.000,7.000 L10.000,7.000 L10.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M14.000,7.000 L17.000,7.000 L17.000,10.000 L14.000,10.000 L14.000,7.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M7.000,14.000 L10.000,14.000 L10.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M14.000,14.000 L17.000,14.000 L17.000,17.000 L14.000,17.000 L14.000,14.000 Z" />
                  </svg>
                </a>
              </li>
              <li class="nav-item border">
                <a class="nav-link p-0 height-38 width-38 justify-content-center d-flex align-items-center"
                  id="pills-two-example1-tab" data-toggle="pill" href="#pills-two-example1" role="tab"
                  aria-controls="pills-two-example1" aria-selected="false">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="23px"
                    height="17px">
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M-0.000,0.000 L3.000,0.000 L3.000,3.000 L-0.000,3.000 L-0.000,0.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M7.000,0.000 L23.000,0.000 L23.000,3.000 L7.000,3.000 L7.000,0.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M-0.000,7.000 L3.000,7.000 L3.000,10.000 L-0.000,10.000 L-0.000,7.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M7.000,7.000 L23.000,7.000 L23.000,10.000 L7.000,10.000 L7.000,7.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M-0.000,14.000 L3.000,14.000 L3.000,17.000 L-0.000,17.000 L-0.000,14.000 Z" />
                    <path fill-rule="evenodd" fill="rgb(25, 17, 11)"
                      d="M7.000,14.000 L23.000,14.000 L23.000,17.000 L7.000,17.000 L7.000,14.000 Z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel"
            aria-labelledby="pills-one-example1-tab">

            <ul
              class="products list-unstyled row no-gutters row-cols-2 row-cols-lg-3 row-cols-wd-4 border-top border-left mb-6">
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img1.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and
                          Purpose Everyday</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img2.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img3.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">The Last Sister (Columbia River Book 1)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img4.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img5.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and
                          Purpose Everyday</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img6.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img7.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">The Last Sister (Columbia River Book 1)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img8.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img9.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">Think Like a Monk: Train Your Mind for Peace and
                          Purpose Everyday</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img10.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">The Overdue Life of Amy Byler</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img1.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">The Last Sister (Columbia River Book 1)</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product col">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                    <div class="woocommerce-loop-product__thumbnail">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img7.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html">All You Can Ever Know: A Memoir</a></h2>
                      <div class="font-size-2  mb-1 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="product__hover d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-auto" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

          </div>
          <div class="tab-pane fade" id="pills-two-example1" role="tabpanel" aria-labelledby="pills-two-example1-tab">

            <ul class="products list-unstyled mb-6">
              <li class="product product__list">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                    <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img1.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html" tabindex="0">The Overdue Life of Amy Byler</a></h2>
                      <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has
                        returned to a life different from the one he left. And spends his days teaching his twin
                        siblings the</p>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product product__list">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                    <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img2.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html" tabindex="0">All You Can Ever Know: A Memoir</a></h2>
                      <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has
                        returned to a life different from the one he left. And spends his days teaching his twin
                        siblings the</p>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product product__list">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                    <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img3.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html" tabindex="0">The Cinderella Reversal</a></h2>
                      <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has
                        returned to a life different from the one he left. And spends his days teaching his twin
                        siblings the</p>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product product__list">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                    <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img4.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html" tabindex="0">Scot Under the Covers: The Wild
                          Wicked</a></h2>
                      <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has
                        returned to a life different from the one he left. And spends his days teaching his twin
                        siblings the</p>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product product__list">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                    <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img5.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html" tabindex="0">Winter Garden</a></h2>
                      <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has
                        returned to a life different from the one he left. And spends his days teaching his twin
                        siblings the</p>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
              <li class="product product__list">
                <div class="product__inner overflow-hidden p-3 p-md-4d875">
                  <div class="woocommerce-LoopProduct-link woocommerce-loop-product__link row position-relative">
                    <div class="col-md-auto woocommerce-loop-product__thumbnail mb-3 mb-md-0">
                      <a href="../shop/single-product-v1.html" class="d-block"><img
                          src="../../assets/img/150x226/img6.jpg"
                          class="img-fluid d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                          alt="image-description"></a>
                    </div>
                    <div class="col-md woocommerce-loop-product__body product__body pt-3 bg-white mb-3 mb-md-0">
                      <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                          href="../shop/single-product-v1.html">Paperback</a></div>
                      <h2
                        class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 crop-text-2 h-dark">
                        <a href="../shop/single-product-v1.html" tabindex="0">Call Me By Your Name</a></h2>
                      <div class="font-size-2  mb-2 text-truncate"><a href="../others/authors-single.html"
                          class="text-gray-700">Jay Shetty</a></div>
                      <p class="font-size-2 mb-2 crop-text-2">After disappearing for three years, Artemis Fowl has
                        returned to a life different from the one he left. And spends his days teaching his twin
                        siblings the</p>
                      <div class="price d-flex align-items-center font-weight-medium font-size-3">
                        <span class="woocommerce-Price-amount amount"><span
                            class="woocommerce-Price-currencySymbol">$</span>29</span>
                      </div>
                    </div>
                    <div class="col-md-auto d-flex align-items-center">
                      <a href="../shop/single-product-v1.html"
                        class="text-uppercase text-dark h-dark font-weight-medium mr-4" data-toggle="tooltip"
                        data-placement="right" title="" data-original-title="ADD TO CART">
                        <span class="product__add-to-cart">ADD TO CART</span>
                        <span class="product__add-to-cart-icon font-size-4"><i
                            class="flaticon-icon-126515"></i></span>
                      </a>
                      <a href="../shop/single-product-v1.html" class="mr-1 h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-switch"></i>
                      </a>
                      <a href="../shop/single-product-v1.html" class="h-p-bg btn btn-outline-primary border-0">
                        <i class="flaticon-heart"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>

          </div>
        </div>

        <nav aria-label="Page navigation example">
          <ul
            class="pagination pagination__custom justify-content-md-center flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">1</a></li>
            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">2</a></li>
            <li class="flex-shrink-0 flex-md-shrink-1 page-item active" aria-current="page"><a class="page-link"
                href="#">3</a></li>
            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">4</a></li>
            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">5</a></li>
            <li class="flex-shrink-0 flex-md-shrink-1 page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
      <div id="secondary" class="sidebar widget-area order-1" role="complementary">
        <div id="widgetAccordion">
          <div id="woocommerce_product_categories-2"
            class="widget p-4d875 border woocommerce widget_product_categories">
            <div id="widgetHeadingOne" class="widget-head">
              <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse"
                data-target="#widgetCollapseOne" aria-expanded="true" aria-controls="widgetCollapseOne">
                <h3 class="widget-title mb-0 font-weight-medium font-size-3">Categories</h3>
                <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="2px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                </svg>
                <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="15px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                </svg>
              </a>
            </div>
            <div id="widgetCollapseOne" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeadingOne"
              data-parent="#widgetAccordion">
              <ul class="product-categories">
                <li class="cat-item cat-item-9 cat-parent">
                  <a href="../shop/v3.html">Clothing</a>
                  <ul class="children">
                    <li class="cat-item cat-item-121"><a href="#/clothing/bags/">Bags</a></li>
                    <li class="cat-item cat-item-44"><a href="#/clothing/blouses/">Blouses</a></li>
                    <li class="cat-item cat-item-41"><a href="#/clothing/dresses/">Dresses</a></li>
                    <li class="cat-item cat-item-56"><a href="#/clothing/footwear/">Footwear</a></li>
                    <li class="cat-item cat-item-54"><a href="#/clothing/hats/">Hats</a></li>
                    <li class="cat-item cat-item-10"><a href="#/clothing/hoodies/">Hoodies</a></li>
                    <li class="cat-item cat-item-55"><a href="#/clothing/shirts/">Shirts</a></li>
                    <li class="cat-item cat-item-47"><a href="#/clothing/skirts/">Skirts</a></li>
                    <li class="cat-item cat-item-14"><a href="#/clothing/t-shirts/">T-shirts</a></li>
                    <li class="cat-item cat-item-49"><a href="#/clothing/trousers/">Trousers</a></li>
                  </ul>
                </li>
                <li class="cat-item cat-item-69 cat-parent">
                  <a href="../shop/v3.html">Electronics</a>
                  <ul class="children">
                    <li class="cat-item cat-item-71 cat-parent"><a href="#/electronics/cameras/">Cameras</a>
                      <ul class="children">
                        <li class="cat-item cat-item-114"><a href="#/electronics/cameras/accessories/">Accessories</a>
                        </li>
                        <li class="cat-item cat-item-112"><a href="#/electronics/cameras/lenses/">Lenses</a></li>
                      </ul>
                    </li>
                    <li class="cat-item cat-item-99"><a href="#/electronics/dvd-players/">DVD Players</a></li>
                    <li class="cat-item cat-item-72"><a href="#/electronics/headphones/">Headphones</a></li>
                    <li class="cat-item cat-item-91"><a href="#/electronics/mp3-players/">MP3 Players</a></li>
                    <li class="cat-item cat-item-90"><a href="#/electronics/radios/">Radios</a></li>
                    <li class="cat-item cat-item-70"><a href="#/electronics/televisions/">Televisions</a></li>
                  </ul>
                </li>
                <li class="cat-item cat-item-65 cat-parent">
                  <a href="../shop/v3.html">Kitchen</a>
                  <ul class="children">
                    <li class="cat-item cat-item-102"><a href="#/kitchen/blenders/">Blenders</a></li>
                    <li class="cat-item cat-item-103"><a href="#/kitchen/colanders/">Colanders</a></li>
                    <li class="cat-item cat-item-68"><a href="#/kitchen/kettles/">Kettles</a></li>
                    <li class="cat-item cat-item-101"><a href="#/kitchen/knives/">Knives</a></li>
                    <li class="cat-item cat-item-66"><a href="#/kitchen/pots-pans/">Pots &amp; Pans</a></li>
                    <li class="cat-item cat-item-67"><a href="#/kitchen/toasters/">Toasters</a></li>
                  </ul>
                </li>
                <li class="cat-item cat-item-11 cat-parent"><a href="../shop/v3.html">Music</a>
                  <ul class="children">
                    <li class="cat-item cat-item-15"><a href="#/music/albums/">Albums</a></li>
                    <li class="cat-item cat-item-100"><a href="#/music/mp3/">MP3</a></li>
                    <li class="cat-item cat-item-13"><a href="#/music/singles/">Singles</a></li>
                  </ul>
                </li>
                <li class="cat-item cat-item-12"><a href="../shop/v3.html">Posters</a></li>
                <li class="cat-item cat-item-31"><a href="../shop/v3.html">Scuba gear</a></li>
                <li class="cat-item cat-item-45"><a href="../shop/v3.html">Sweatshirts</a></li>
              </ul>
            </div>
          </div>
          <div id="Authors" class="widget widget_search widget_author p-4d875 border">
            <div id="widgetHeading21" class="widget-head">
              <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse"
                data-target="#widgetCollapse21" aria-expanded="true" aria-controls="widgetCollapse21">
                <h3 class="widget-title mb-0 font-weight-medium font-size-3">Author</h3>
                <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="2px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                </svg>
                <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="15px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                </svg>
              </a>
            </div>
            <div id="widgetCollapse21" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading21"
              data-parent="#widgetAccordion">
              <form class="form-inline my-2 overflow-hidden">
                <div class="input-group flex-nowrap w-100">
                  <div class="input-group-prepend">
                    <i
                      class="glph-icon flaticon-loupe py-2d75 bg-white-100 border-white-100 text-dark pl-3 pr-0 rounded-0"></i>
                  </div>
                  <input class="form-control bg-white-100 py-2d75 height-4 border-white-100 rounded-0" type="search"
                    placeholder="Search" aria-label="Search">
                </div>
                <button class="btn btn-outline-success my-2 my-sm-0 sr-only" type="submit">Search</button>
              </form>
              <ul class="product-categories">
                <li class="cat-item cat-item-9 cat-parent">
                  <a href="../others/authors-single.html">A. J. Finn</a>
                </li>
                <li class="cat-item cat-item-69 cat-parent">
                  <a href="../others/authors-single.html">Anne Frank</a>
                </li>
                <li class="cat-item cat-item-65 cat-parent">
                  <a href="../others/authors-single.html">Camille Pagán</a>
                </li>
                <li class="cat-item cat-item-11 cat-parent"><a href="../others/authors-single.html">Daniel H. Pink</a>
                </li>
                <li class="cat-item cat-item-12"><a href="../others/authors-single.html">Danielle Steel</a></li>
                <li class="cat-item cat-item-31"><a href="../others/authors-single.html">David Quammen</a></li>
              </ul>
            </div>
          </div>
          <div id="Language" class="widget p-4d875 border">
            <div id="widgetHeading22" class="widget-head">
              <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse"
                data-target="#widgetCollapse22" aria-expanded="true" aria-controls="widgetCollapse22">
                <h3 class="widget-title mb-0 font-weight-medium font-size-3">Language</h3>
                <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="2px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                </svg>
                <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="15px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                </svg>
              </a>
            </div>
            <div id="widgetCollapse22" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading22"
              data-parent="#widgetAccordion">
              <ul class="product-categories">
                <li class="custom-control custom-checkbox mb-2 pb-2">
                  <input type="checkbox" class="custom-control-input" id="brandEnglish">
                  <label class="custom-control-label" for="brandEnglish">English</label>
                </li>
                <li class="custom-control custom-checkbox mb-2 pb-2">
                  <input type="checkbox" class="custom-control-input" id="brandGerman">
                  <label class="custom-control-label" for="brandGerman">German</label>
                </li>
                <li class="custom-control custom-checkbox mb-2 pb-2">
                  <input type="checkbox" class="custom-control-input" id="brandFrench">
                  <label class="custom-control-label" for="brandFrench">French</label>
                </li>
                <li class="custom-control custom-checkbox mb-2 pb-2">
                  <input type="checkbox" class="custom-control-input" id="brandSpanish">
                  <label class="custom-control-label" for="brandSpanish">Spanish</label>
                </li>
                <li class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="brandTurkish">
                  <label class="custom-control-label" for="brandTurkish">Turkish</label>
                </li>
              </ul>
            </div>
          </div>
          <div id="Format" class="widget p-4d875 border">
            <div id="widgetHeading23" class="widget-head">
              <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse"
                data-target="#widgetCollapse23" aria-expanded="true" aria-controls="widgetCollapse23">
                <h3 class="widget-title mb-0 font-weight-medium font-size-3">Format</h3>
                <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="2px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                </svg>
                <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="15px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                </svg>
              </a>
            </div>
            <div id="widgetCollapse23" class="mt-3 widget-content collapse show" aria-labelledby="widgetHeading23"
              data-parent="#widgetAccordion">
              <ul class="product-categories">
                <li class="cat-item cat-item-9 cat-parent">
                  <a href="../shop/v3.html">Audio CD</a>
                </li>
                <li class="cat-item cat-item-69 cat-parent">
                  <a href="../shop/v3.html">Audio Book</a>
                </li>
                <li class="cat-item cat-item-65 cat-parent">
                  <a href="../shop/v3.html">Hardcover</a>
                </li>
                <li class="cat-item cat-item-11 cat-parent"><a href="../shop/v3.html">Kindle Books</a>
                </li>
                <li class="cat-item cat-item-12"><a href="../shop/v3.html">Paperback</a></li>
              </ul>
            </div>
          </div>
          <div id="woocommerce_price_filter-2" class="widget p-4d875 border woocommerce widget_price_filter">
            <div id="widgetHeadingTwo" class="widget-head">
              <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse"
                data-target="#widgetCollapseTwo" aria-expanded="true" aria-controls="widgetCollapseTwo">
                <h3 class="widget-title mb-0 font-weight-medium font-size-3">Filter by price</h3>
                <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="2px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                </svg>
                <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="15px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                </svg>
              </a>
            </div>
            <div id="widgetCollapseTwo" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeadingTwo"
              data-parent="#widgetAccordion">
              <form method="get" action="https://themes.woocommerce.com/storefront/shop/">
                <div class="price_slider_wrapper">
                  <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                    style="">
                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                      style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all"
                      tabindex="0" style="left: 98%;"></span>
                  </div>
                  <div class="price_slider_amount">
                    <input type="text" id="min_price" name="min_price" value="2" data-min="2" placeholder="Min price"
                      style="display: none;">
                    <input type="text" id="max_price" name="max_price" value="1495" data-max="1495"
                      placeholder="Max price" style="display: none;">
                    <button type="submit" class="button d-none">Filter</button>
                    <div class="mx-auto price_label mt-2" style="">
                      Price: <span class="from">£2</span> — <span class="to">£1,495</span>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div id="Review" class="widget p-4d875 border">
            <div id="widgetHeading24" class="widget-head">
              <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse"
                data-target="#widgetCollapse24" aria-expanded="true" aria-controls="widgetCollapse24">
                <h3 class="widget-title mb-0 font-weight-medium font-size-3">By Review</h3>
                <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="2px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                </svg>
                <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="15px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                </svg>
              </a>
            </div>
            <div id="widgetCollapse24" class="mt-4 widget-content collapse show" aria-labelledby="widgetHeading24"
              data-parent="#widgetAccordion">
              <div
                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="rating5">
                  <label class="custom-control-label" for="rating5">
                    <span class="d-block text-yellow-darker mt-plus-3">
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 "></span>
                    </span>
                  </label>
                </div>
                <small class="font-size-2 text-gray-600">24</small>
              </div>
              <div
                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="rating4">
                  <label class="custom-control-label" for="rating4">
                    <span class="d-block text-yellow-darker mt-plus-3">
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2 "></span>
                    </span>
                  </label>
                </div>
                <small class="font-size-2 text-gray-600">15</small>
              </div>
              <div
                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="rating3">
                  <label class="custom-control-label" for="rating3">
                    <span class="d-block text-yellow-darker mt-plus-3">
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2 "></span>
                    </span>
                  </label>
                </div>
                <small class="font-size-2 text-gray-600">43</small>
              </div>
              <div
                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="rating2">
                  <label class="custom-control-label" for="rating2">
                    <span class="d-block text-yellow-darker mt-plus-3">
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2"></span>
                    </span>
                  </label>
                </div>
                <small class="font-size-2 text-gray-600">78</small>
              </div>
              <div
                class="form-group d-flex align-items-center justify-content-between font-size-1 text-lh-md text-secondary mb-0">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="rating1">
                  <label class="custom-control-label" for="rating1">
                    <span class="d-block text-yellow-darker mt-plus-3">
                      <span class="fas fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2 mr-1"></span>
                      <span class="far fa-star font-size-2"></span>
                    </span>
                  </label>
                </div>
                <small class="font-size-2 text-gray-600">21</small>
              </div>
            </div>
          </div>
          <div id="Featuredbooks" class="widget p-4d875 border">
            <div id="widgetHeading25" class="widget-head">
              <a class="d-flex align-items-center justify-content-between text-dark" href="#" data-toggle="collapse"
                data-target="#widgetCollapse25" aria-expanded="true" aria-controls="widgetCollapse25">
                <h3 class="widget-title mb-0 font-weight-medium font-size-3">Featured Books</h3>
                <svg class="mins" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="2px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M0.000,-0.000 L15.000,-0.000 L15.000,2.000 L0.000,2.000 L0.000,-0.000 Z" />
                </svg>
                <svg class="plus" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                  width="15px" height="15px">
                  <path fill-rule="evenodd" fill="rgb(22, 22, 25)"
                    d="M15.000,8.000 L9.000,8.000 L9.000,15.000 L7.000,15.000 L7.000,8.000 L0.000,8.000 L0.000,6.000 L7.000,6.000 L7.000,-0.000 L9.000,-0.000 L9.000,6.000 L15.000,6.000 L15.000,8.000 Z" />
                </svg>
              </a>
            </div>
            <div id="widgetCollapse25" class="mt-5 widget-content collapse show" aria-labelledby="widgetHeading25"
              data-parent="#widgetAccordion">
              <div class="mb-5">
                <div class="media d-md-flex">
                  <a class="d-block" href="../shop/single-product-v3.html">
                    <img class="img-fluid" src="../../assets/img/60x92/img1.jpg" alt="Image-Description">
                  </a>
                  <div class="media-body ml-3 pl-1">
                    <h6 class="font-size-2 text-lh-md font-weight-normal">
                      <a href="../shop/single-product-v3.html">Lessons Learned from 15 Years as CEO...</a>
                    </h6>
                    <span class="font-weight-medium">$37</span>
                  </div>
                </div>
              </div>
              <div class="mb-5">
                <div class="media d-md-flex">
                  <a class="d-block" href="../shop/single-product-v3.html">
                    <img class="img-fluid" src="../../assets/img/60x92/img2.jpg" alt="Image-Description">
                  </a>
                  <div class="media-body ml-3 pl-1">
                    <h6 class="font-size-2 text-lh-md font-weight-normal">
                      <a href="../shop/single-product-v3.html">Love, Livestock, and Big Life Lessons...</a>
                    </h6>
                    <span class="font-weight-medium">$21</span>
                  </div>
                </div>
              </div>
              <div>
                <div class="media d-md-flex">
                  <a class="d-block" href="../shop/single-product-v3.html">
                    <img class="img-fluid" src="../../assets/img/60x92/img3.jpg" alt="Image-Description">
                  </a>
                  <div class="media-body ml-3 pl-1">
                    <h6 class="font-size-2 text-lh-md font-weight-normal">
                      <a href="../shop/single-product-v3.html">Sleeper Cells, Ghost Stories, and Hunt...</a>
                    </h6>
                    <span class="font-weight-medium">$182</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection