<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Error Page | Herbalist</title>
        <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
        <link rel="stylesheet preload" as="style" href="css/icomoon.css" />
        <link rel="stylesheet preload" as="style" href="css/libs.min.css" />

        <link rel="stylesheet" href="css/error.min.css" />
    </head>
    <body>
        <!-- =========================
            Included PHP Header
        =========================== -->
        <?php include 'include/header.php';?>
        <header class="page">
            <div class="page_main container-fluid">
                <div class="container">
                    <h1 class="page_header">Error Page</h1>
                    <p class="page_text">Nibh tellus molestie nunc non blandit. Mi tempus imperdiet nulla malesuada pellentesque elit</p>
                </div>
            </div>
            <div class="container">
                <ul class="page_breadcrumbs d-flex flex-wrap">
                    <li class="page_breadcrumbs-item">
                        <a class="link" href="index.html">Home</a>
                    </li>

                    <li class="page_breadcrumbs-item current">
                        <span>Error Page</span>
                    </li>
                </ul>
            </div>
        </header>
        <!-- Page 404 content start -->
        <main class="error section--nopb">
            <div class="container">
                <div class="error_media">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                        <img class="lazy error_media-img" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="404" />
                    </picture>
                </div>
                <div class="error_main d-flex flex-column align-items-center">
                    <h3 class="error_main-title">Page not Found</h3>
                    <p class="error_main-text d-md-flex flex-column align-items-center">
                        <span class="linebreak">The page you are looking for doesn't exist.</span>
                        <span class="linebreak">Looks like you are in the wrong place.</span>
                        <span class="linebreak">Let us guide you back!</span>
                    </p>
                    <a class="btn" href="index.html">Back to Home Page</a>
                </div>
            </div>
        </main>
        <aside class="recommended section">
            <div class="container">
                <h2 class="recommended_title">Recommended Items on Sale</h2>
                <ul class="products_list d-sm-flex flex-wrap">
                    <li class="products_list-item col-sm-6 col-lg-4 col-xl-3" data-order="1">
                        <div class="products_list-item_wrapper d-flex flex-column">
                            <div class="media">
                                <a href="product.html" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="High CBD 50 Oil"
                                        />
                                    </picture>
                                </a>
                                <div class="overlay d-flex justify-content-between align-items-start">
                                    <div class="action d-flex flex-column">
                                        <a
                                            class="action_link d-flex align-items-center justify-content-center"
                                            href="#"
                                            data-trigger="compare"
                                        >
                                            <i class="icon-compare"></i>
                                        </a>
                                        <a
                                            class="action_link d-flex align-items-center justify-content-center"
                                            href="#"
                                            data-role="wishlist"
                                        >
                                            <i class="icon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="label">Sale</span>
                            </div>
                            <div class="main d-flex flex-column align-items-center justify-content-between">
                                <div class="main_rating">
                                    <ul class="main_rating-stars d-flex align-items-center justify-content-center accent">
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                    </ul>
                                </div>
                                <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">High CBD 50 Oil</a>
                                <ul class="main_table d-flex flex-column align-items-center">
                                    <li class="list-item">
                                        <span class="property">THC</span>
                                        <span class="value">117.00-23.00%</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="property">CBD</span>
                                        <span class="value">0.00-1.00%</span>
                                    </li>
                                </ul>
                                <div class="main_price">
                                    <span class="price price--old">$7.97</span>
                                    <span class="price price--new">$5.99</span>
                                </div>
                                <a class="btn btn--green" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="products_list-item col-sm-6 col-lg-4 col-xl-3" data-order="2">
                        <div class="products_list-item_wrapper d-flex flex-column">
                            <div class="media">
                                <a href="product.html" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="CBD Plus Formula Oil"
                                        />
                                    </picture>
                                </a>
                                <div class="overlay d-flex justify-content-between align-items-start">
                                    <div class="action d-flex flex-column">
                                        <a
                                            class="action_link d-flex align-items-center justify-content-center"
                                            href="#"
                                            data-trigger="compare"
                                        >
                                            <i class="icon-compare"></i>
                                        </a>
                                        <a
                                            class="action_link d-flex align-items-center justify-content-center"
                                            href="#"
                                            data-role="wishlist"
                                        >
                                            <i class="icon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="label">Sale</span>
                            </div>
                            <div class="main d-flex flex-column align-items-center justify-content-between">
                                <div class="main_rating">
                                    <ul class="main_rating-stars d-flex align-items-center justify-content-center accent">
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                    </ul>
                                </div>
                                <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">CBD Plus Formula Oil</a>
                                <ul class="main_table d-flex flex-column align-items-center">
                                    <li class="list-item">
                                        <span class="property">THC</span>
                                        <span class="value">117.00-23.00%</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="property">CBD</span>
                                        <span class="value">0.00-1.00%</span>
                                    </li>
                                </ul>
                                <div class="main_price">
                                    <span class="price price--old">$9.97</span>
                                    <span class="price price--new">$7.99</span>
                                </div>
                                <a class="btn btn--green" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="products_list-item col-sm-6 col-lg-4 col-xl-3" data-order="3">
                        <div class="products_list-item_wrapper d-flex flex-column">
                            <div class="media">
                                <a href="product.html" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                        <img class="lazy preview" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="Dark Dream" />
                                    </picture>
                                </a>
                                <div class="overlay d-flex justify-content-between align-items-start">
                                    <div class="action d-flex flex-column">
                                        <a
                                            class="action_link d-flex align-items-center justify-content-center"
                                            href="#"
                                            data-trigger="compare"
                                        >
                                            <i class="icon-compare"></i>
                                        </a>
                                        <a
                                            class="action_link d-flex align-items-center justify-content-center"
                                            href="#"
                                            data-role="wishlist"
                                        >
                                            <i class="icon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                                <span class="label">Sale</span>
                            </div>
                            <div class="main d-flex flex-column align-items-center justify-content-between">
                                <div class="main_rating">
                                    <ul class="main_rating-stars d-flex align-items-center justify-content-center accent">
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                    </ul>
                                </div>
                                <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">Dark Dream</a>
                                <ul class="main_table d-flex flex-column align-items-center">
                                    <li class="list-item">
                                        <span class="property">THC</span>
                                        <span class="value">117.00-23.00%</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="property">CBD</span>
                                        <span class="value">0.00-1.00%</span>
                                    </li>
                                </ul>
                                <div class="main_price">
                                    <span class="price price--old">$6.66</span>
                                    <span class="price price--new">$4.99</span>
                                </div>
                                <a class="btn btn--green" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </li>
                    <li class="products_list-item col-sm-6 col-lg-4 col-xl-3" data-order="4">
                        <div class="products_list-item_wrapper d-flex flex-column">
                            <div class="media">
                                <a href="product.html" target="_blank" rel="noopener norefferer">
                                    <picture>
                                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                        <img
                                            class="lazy preview"
                                            data-src="img/placeholder.jpg"
                                            src="img/placeholder.jpg"
                                            alt="Bruce Banner"
                                        />
                                    </picture>
                                </a>
                                <div class="overlay d-flex justify-content-between align-items-start">
                                    <div class="action d-flex flex-column">
                                        <a
                                            class="action_link d-flex align-items-center justify-content-center"
                                            href="#"
                                            data-trigger="compare"
                                        >
                                            <i class="icon-compare"></i>
                                        </a>
                                        <a
                                            class="action_link d-flex align-items-center justify-content-center"
                                            href="#"
                                            data-role="wishlist"
                                        >
                                            <i class="icon-heart"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="main d-flex flex-column align-items-center justify-content-between">
                                <div class="main_rating">
                                    <ul class="main_rating-stars d-flex align-items-center justify-content-center accent">
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                        <li class="main_rating-stars_star">
                                            <i class="icon-star_fill"></i>
                                        </li>
                                    </ul>
                                </div>
                                <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">Bruce Banner</a>
                                <ul class="main_table d-flex flex-column align-items-center">
                                    <li class="list-item">
                                        <span class="property">THC</span>
                                        <span class="value">117.00-23.00%</span>
                                    </li>
                                    <li class="list-item">
                                        <span class="property">CBD</span>
                                        <span class="value">0.00-1.00%</span>
                                    </li>
                                </ul>
                                <div class="main_price">
                                    <span class="price">$2.99</span>
                                </div>
                                <a class="btn btn--green" href="#">Add to Cart</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <span class="recommended_deco">
                <span class="recommended_deco-circle recommended_deco-circle--secondary"></span>
                <span class="recommended_deco-circle recommended_deco-circle--accent"></span>
            </span>
        </aside>
        <!-- Page 404 content end -->
        <!-- =========================
            Included PHP Footer
        =========================== -->
        <?php include 'include/footer.php';?>
        <script src="js/common.min.js"></script>
        <div class="cartOffcanvas offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvas">
            <div class="cartOffcanvas_header d-flex align-items-center justify-content-between">
                <h2 class="cartOffcanvas_header-title" id="cartOffcanvasLabel">Cart</h2>
                <button class="cartOffcanvas_header-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="cartOffcanvas_body">
                <ul class="cartOffcanvas_body-list">
                    <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                        <div class="media">
                            <a href="product.html" target="_blank" rel="noopener norefferer">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </a>
                        </div>
                        <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                            <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                <span class="main_title-product"> Jonny Chronic - French Macaroon </span>
                            </a>
                            <div class="main_price">
                                <span class="price">$14.98</span>
                            </div>
                            <div class="qty d-flex align-items-center justify-content-between">
                                <span class="qty_minus control disabled d-flex align-items-center">
                                    <i class="icon-minus"></i>
                                </span>
                                <input class="qty_amount" type="number" readonly value="1" min="1" max="99" />
                                <span class="qty_plus control d-flex align-items-center">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <a class="btn--underline" href="#">Remove</a>
                        </div>
                    </li>
                    <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                        <div class="media">
                            <a href="product.html" target="_blank" rel="noopener norefferer">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </a>
                        </div>
                        <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                            <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                <span class="main_title-product"> House Shatter – Durban Poison </span>
                            </a>
                            <div class="main_price">
                                <span class="price">$6.96</span>
                            </div>
                            <div class="qty d-flex align-items-center justify-content-between">
                                <span class="qty_minus control disabled d-flex align-items-center">
                                    <i class="icon-minus"></i>
                                </span>
                                <input class="qty_amount" type="number" readonly value="1" min="1" max="99" />
                                <span class="qty_plus control d-flex align-items-center">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <a class="btn--underline" href="#">Remove</a>
                        </div>
                    </li>
                    <li class="cartOffcanvas_body-list_item d-sm-flex align-items-center">
                        <div class="media">
                            <a href="product.html" target="_blank" rel="noopener norefferer">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </a>
                        </div>
                        <div class="main d-flex flex-wrap justify-content-between align-items-end align-items-lg-center">
                            <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                <span class="main_title-product"> Natures: CBD Tincture </span>
                            </a>
                            <div class="main_price">
                                <span class="price">$7.49</span>
                            </div>
                            <div class="qty d-flex align-items-center justify-content-between">
                                <span class="qty_minus control disabled d-flex align-items-center">
                                    <i class="icon-minus"></i>
                                </span>
                                <input class="qty_amount" type="number" readonly value="1" min="1" max="99" />
                                <span class="qty_plus control d-flex align-items-center">
                                    <i class="icon-plus"></i>
                                </span>
                            </div>
                            <a class="btn--underline" href="#">Remove</a>
                        </div>
                    </li>
                </ul>
                <div class="cartOffcanvas_body-total d-flex justify-content-between align-items-center">
                    <span>Total</span>
                    <span class="cartTotal">$29.43</span>
                </div>
                <a class="cartOffcanvas_body-btn btn" href="cart.html">Proceed to checkout</a>
            </div>
        </div>
    </body>
</html>
