<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Shop | Herbalist</title>
        <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
        <link rel="stylesheet preload" as="style" href="css/icomoon.css" />
        <link rel="stylesheet preload" as="style" href="css/libs.min.css" />

        <link rel="stylesheet" href="css/shop2.min.css" />
    </head>
    <body>
        <!-- =========================
            Included PHP Header
        =========================== -->
        <?php include 'include/header.php';?>
        <header class="page">
            <div class="page_main container-fluid">
                <div class="container">
                    <h1 class="page_header">Shop</h1>
                    <p class="page_text">Nibh tellus molestie nunc non blandit. Mi tempus imperdiet nulla malesuada pellentesque elit</p>
                </div>
            </div>
            <div class="container">
                <ul class="page_breadcrumbs d-flex flex-wrap">
                    <li class="page_breadcrumbs-item">
                        <a class="link" href="index.html">Home</a>
                    </li>

                    <li class="page_breadcrumbs-item current">
                        <span>Shop</span>
                    </li>
                </ul>
            </div>
        </header>
        <!-- Shop content start -->
        <main>
            <!-- Products section start -->
            <div class="shop-wrapper section">
                <div class="container d-flex d-lg-grid flex-column">
                    <div class="promo_banner promo_banner--big">
                        <h3 class="promo_banner-header">Browse our selection of CBD-infused goods</h3>
                        <p class="promo_banner-text">
                            Elementum eu facilisis sed odio morbi quis commodo odio. Mauris rhoncus aenean vel elit scelerisque mauris
                            pellentesque
                        </p>
                        <a class="promo_banner-btn btn" href="#">Shop Now</a>
                    </div>
                    <div class="shop_panel d-flex flex-wrap justify-content-between">
                        <div class="wrapper d-flex justify-content-between">
                            <label class="label" for="sorting">Sorting:</label>
                            <select name="sorting" id="sorting">
                                <option value="default">Default sorting</option>
                                <option value="lowest">Lowest price</option>
                                <option value="highest">Highest price</option>
                                <option value="popular">Most popular</option>
                            </select>
                            <i class="icon-caret_down icon"></i>
                        </div>
                        <a
                            class="filterTrigger d-inline-flex d-lg-none align-items-center justify-content-center"
                            href="#"
                            data-bs-toggle="collapse"
                            data-bs-target="#shopFilters"
                        >
                            Filters
                            <i class="icon-caret_down icon"></i>
                        </a>
                        <span class="showing">Showing 1–10 of 64 results</span>
                        <ul class="chosen d-flex d-lg-none flex-wrap">
                            <li class="chosen-item d-flex align-items-center">
                                Oil
                                <i class="icon-close icon"></i>
                            </li>
                            <li class="chosen-item d-flex align-items-center">
                                Hybrid
                                <i class="icon-close icon"></i>
                            </li>
                            <li class="chosen-item d-flex align-items-center">
                                10g
                                <i class="icon-close icon"></i>
                            </li>
                            <li class="chosen-item d-flex align-items-center">
                                THC: 0% - 10%
                                <i class="icon-close icon"></i>
                            </li>
                            <li class="chosen-item d-flex align-items-center">
                                CBD: 10% - 20%
                                <i class="icon-close icon"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="shop_products">
                        <ul class="shop_products-list d-sm-flex flex-wrap">
                            <li class="shop_products-list_item col-sm-6 col-xl-4" data-order="1">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <a href="product.html" target="_blank" rel="noopener norefferer">
                                            <picture>
                                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                                <img
                                                    class="lazy preview"
                                                    data-src="img/placeholder.jpg"
                                                    src="img/placeholder.jpg"
                                                    alt="Hawaii Heartbreak"
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
                                        <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                            Hawaii Heartbreak
                                        </a>
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
                                            <span class="price">$9.99</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="shop_products-list_item col-sm-6 col-xl-4" data-order="2">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <a href="product.html" target="_blank" rel="noopener norefferer">
                                            <picture>
                                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                                <img
                                                    class="lazy preview"
                                                    data-src="img/placeholder.jpg"
                                                    src="img/placeholder.jpg"
                                                    alt="Tangerine Dream"
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
                                        <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                            Tangerine Dream
                                        </a>
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
                                            <span class="price price--old">$12.15</span>
                                            <span class="price price--new">$7.97</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="shop_products-list_item col-sm-6 col-xl-4" data-order="3">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <a href="product.html" target="_blank" rel="noopener norefferer">
                                            <picture>
                                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                                <img
                                                    class="lazy preview"
                                                    data-src="img/placeholder.jpg"
                                                    src="img/placeholder.jpg"
                                                    alt="Forbidden Fruit"
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
                                        <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                            Forbidden Fruit
                                        </a>
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
                                            <span class="price">$10.20</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="shop_products-list_item col-sm-6 col-xl-4" data-order="4">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <a href="product.html" target="_blank" rel="noopener norefferer">
                                            <picture>
                                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                                <img
                                                    class="lazy preview"
                                                    data-src="img/placeholder.jpg"
                                                    src="img/placeholder.jpg"
                                                    alt="Sativa Bud"
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
                                        <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer"> Sativa Bud </a>
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
                                            <span class="price">$4.77</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="shop_products-list_item col-sm-6 col-xl-4" data-order="5">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <a href="product.html" target="_blank" rel="noopener norefferer">
                                            <picture>
                                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                                <img
                                                    class="lazy preview"
                                                    data-src="img/placeholder.jpg"
                                                    src="img/placeholder.jpg"
                                                    alt="Tangerine Dream"
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
                                        <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                            Tangerine Dream
                                        </a>
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
                                            <span class="price">$5.88</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="shop_products-list_item col-sm-6 col-xl-4" data-order="6">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <a href="product.html" target="_blank" rel="noopener norefferer">
                                            <picture>
                                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                                <img
                                                    class="lazy preview"
                                                    data-src="img/placeholder.jpg"
                                                    src="img/placeholder.jpg"
                                                    alt="Mango Taffie"
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
                                        <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                            Mango Taffie
                                        </a>
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
                                            <span class="price price--old">$12.99</span>
                                            <span class="price price--new">$7.97</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="shop_products-list_item col-sm-6 col-xl-4" data-order="7">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <a href="product.html" target="_blank" rel="noopener norefferer">
                                            <picture>
                                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                                <img
                                                    class="lazy preview"
                                                    data-src="img/placeholder.jpg"
                                                    src="img/placeholder.jpg"
                                                    alt="Blue Dream"
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
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li class="main_rating-stars_star">
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li class="main_rating-stars_star">
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer"> Blue Dream </a>
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
                                            <span class="price">$6.07</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="shop_products-list_item col-sm-6 col-xl-4" data-order="8">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <a href="product.html" target="_blank" rel="noopener norefferer">
                                            <picture>
                                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                                <img
                                                    class="lazy preview"
                                                    data-src="img/placeholder.jpg"
                                                    src="img/placeholder.jpg"
                                                    alt="Limelight (Ultra Sour)"
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
                                        <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                            Limelight (Ultra Sour)
                                        </a>
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
                                            <span class="price">$10.25</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                            <li class="shop_products-list_item col-sm-6 col-xl-4" data-order="9">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <a href="product.html" target="_blank" rel="noopener norefferer">
                                            <picture>
                                                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                                <img
                                                    class="lazy preview"
                                                    data-src="img/placeholder.jpg"
                                                    src="img/placeholder.jpg"
                                                    alt="Tangerine Dream"
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
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <a class="main_title" href="product.html" target="_blank" rel="noopener norefferer">
                                            Tangerine Dream
                                        </a>
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
                                            <span class="price">$7.97</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="pagination d-flex align-items-center">
                            <li class="pagination-page">
                                <a
                                    class="pagination-page_link d-flex align-items-center justify-content-center"
                                    href="#"
                                    data-current="true"
                                    >1</a
                                >
                            </li>
                            <li class="pagination-page">
                                <a class="pagination-page_link d-flex align-items-center justify-content-center" href="#">2</a>
                            </li>
                            <li class="pagination-page">
                                <a class="pagination-page_link d-flex align-items-center justify-content-center" href="#">3</a>
                            </li>
                        </ul>
                    </div>
                    <div class="shop_aside">
                        <div class="shop_aside-wrapper collapse" id="shopFilters">
                            <div class="shop_aside-block shop_aside-block--search">
                                <h4 class="shop_aside-block_header d-flex align-items-center">
                                    <span class="leaf">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.584 22.1185C18.1022 22.2634 16.697 21.9115 15.3804 20.9798C15.3517 20.9591 15.3229 20.9409 15.2942 20.9202C16.089 22.1625 16.1225 23.3349 16.539 24C15.4043 23.4643 14.4707 22.7914 13.8507 21.9089C13.7574 22.0486 13.7215 22.2272 13.8172 22.4808C13.032 21.7872 12.4312 20.6899 11.9524 19.3208C11.9476 19.3312 11.9452 19.3415 11.9405 19.3493C11.4641 20.7054 10.8656 21.7924 10.0828 22.4808C10.181 22.2272 10.1451 22.0486 10.0493 21.9089C9.42932 22.7914 8.49572 23.4643 7.36104 24C7.77757 23.3375 7.81109 22.1625 8.60584 20.9202C8.56514 20.9487 8.52445 20.9798 8.48615 21.0031C7.17911 21.9141 5.78829 22.2609 4.31848 22.1185C4.56983 22.0228 4.73979 21.8649 4.79964 21.632C2.34117 21.7614 1.12031 20.8711 0 19.898C0.0406952 19.9006 0.0837842 19.9057 0.126873 19.9083C1.57993 19.9808 3.97616 18.5651 6.62853 17.9052C6.61656 17.9 6.6022 17.8948 6.59262 17.8896C3.61709 16.6784 1.9031 14.7451 1.01977 12.3408C1.17537 12.5246 1.35012 12.6178 1.54402 12.6204C0.608034 9.7735 0.677455 7.77035 1.37885 6.29774C1.49375 8.05762 6.66204 9.6855 8.90028 13.3968C8.89071 13.3528 8.88113 13.314 8.87395 13.27C8.32576 10.8087 8.47418 8.07315 9.16121 5.13053C9.20908 5.79307 9.31202 6.22269 9.69982 6.49185C9.91048 3.89085 10.643 1.79971 11.95 0.267578C13.2571 1.79971 13.9896 3.89085 14.2002 6.49185C14.588 6.22269 14.691 5.79307 14.7388 5.13053C15.4378 8.12491 15.5791 10.9045 14.9974 13.3968C15.0309 13.3372 15.0668 13.2829 15.1027 13.2234C15.1051 13.2208 15.1051 13.2182 15.1075 13.213C17.2691 9.84079 21.8318 8.22067 22.4494 6.59796V6.59537C22.4901 6.49702 22.5116 6.39609 22.5188 6.29515C23.2202 7.76776 23.2896 9.77091 22.3536 12.6178C22.5475 12.6126 22.7247 12.5194 22.8779 12.3383C21.9898 14.7529 20.2662 16.6914 17.2691 17.9026C17.3074 17.9129 17.3457 17.9233 17.3816 17.931C20.0651 18.6246 22.4781 20.0584 23.8977 19.8954C22.7797 20.8685 21.5589 21.7588 19.098 21.6294C19.1627 21.8675 19.3302 22.0228 19.584 22.1185Z"
                                                fill="#258F67"
                                            />
                                            <path
                                                d="M12.3627 16.6732C12.3627 16.6732 9.45119 17.3788 6.85934 17.5985C3.80271 16.3889 2.04202 14.4581 1.13462 12.057C1.29446 12.2405 1.47398 12.3335 1.67316 12.3361C0.711665 9.49296 0.782978 7.49241 1.50348 6.02173C1.50594 6.02173 1.79857 15.6032 12.3627 16.6732Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M11.7116 16.7864C11.7116 16.7864 10.0667 16.3102 8.77415 13.0731C8.25027 10.5985 8.39211 7.84804 9.04868 4.88941C9.09443 5.55556 9.1928 5.98751 9.56341 6.25813C9.76473 3.64299 10.4648 1.54046 11.7138 0C11.2174 6.38824 10.904 12.4824 11.7116 16.7864Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M22.3487 6.552C20.8856 12.8009 17.0985 15.79 12.0293 16.9711C13.0596 16.6693 14.1769 15.0226 15.1296 13.2119C15.132 13.2093 15.132 13.2067 15.1343 13.2015C17.2608 9.81172 21.7419 8.18576 22.3487 6.552Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M23.9996 19.4003C19.2292 19.9109 15.026 19.3955 12.0508 16.6816C12.0508 16.6816 14.9231 17.4656 17.4842 17.5807C20.1675 18.2208 22.5778 19.5513 23.9996 19.4003Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M16.4192 23.6094C14.6332 21.5095 13.2143 19.1771 12.0742 16.6633C13.1894 18.0582 14.3113 19.4709 15.3222 20.6281C15.295 20.6077 15.2678 20.5898 15.2406 20.5694C15.9931 21.7982 16.0249 22.9554 16.4192 23.6094Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.2037 19.1457C11.7042 20.4843 11.0767 21.5573 10.256 22.2368C10.3589 21.9864 10.3213 21.8102 10.2209 21.6722C9.57084 22.5433 8.59201 23.2076 7.40234 23.7364C9.34998 21.5445 10.9713 19.2351 12.2137 16.7903C12.3342 17.2476 12.299 18.1545 12.2037 19.1457Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.0016 16.896C11.9154 17.0026 10.0093 19.3149 8.54143 20.9535C7.23401 21.8691 5.84277 22.2176 4.37251 22.0746C4.62394 21.9783 4.79395 21.8197 4.85382 21.5856C2.39461 21.7156 1.17339 20.8209 0.0527344 19.8429C0.0934418 19.8455 0.136544 19.8507 0.179646 19.8533C4.51858 20.2227 8.54862 19.5204 12.0016 16.896Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.811 16.7992C12.811 17.2789 12.4464 17.6674 11.9963 17.6674C11.5462 17.6674 11.1816 17.2789 11.1816 16.7992C11.1816 16.3195 11.5462 15.9309 11.9963 15.9309C12.4464 15.9309 12.811 16.3195 12.811 16.7992Z"
                                                fill="#214842"
                                            />
                                        </svg>
                                    </span>
                                    Search by Products
                                </h4>
                                <form class="form form--search" data-type="searchProducts" action="#" method="get">
                                    <input class="field required" type="text" placeholder="Search..." />
                                    <button class="btn" type="submit">Search</button>
                                </form>
                            </div>
                            <div class="shop_aside-block shop_aside-block--categories">
                                <h4 class="shop_aside-block_header d-flex align-items-center">
                                    <span class="leaf">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.584 22.1185C18.1022 22.2634 16.697 21.9115 15.3804 20.9798C15.3517 20.9591 15.3229 20.9409 15.2942 20.9202C16.089 22.1625 16.1225 23.3349 16.539 24C15.4043 23.4643 14.4707 22.7914 13.8507 21.9089C13.7574 22.0486 13.7215 22.2272 13.8172 22.4808C13.032 21.7872 12.4312 20.6899 11.9524 19.3208C11.9476 19.3312 11.9452 19.3415 11.9405 19.3493C11.4641 20.7054 10.8656 21.7924 10.0828 22.4808C10.181 22.2272 10.1451 22.0486 10.0493 21.9089C9.42932 22.7914 8.49572 23.4643 7.36104 24C7.77757 23.3375 7.81109 22.1625 8.60584 20.9202C8.56514 20.9487 8.52445 20.9798 8.48615 21.0031C7.17911 21.9141 5.78829 22.2609 4.31848 22.1185C4.56983 22.0228 4.73979 21.8649 4.79964 21.632C2.34117 21.7614 1.12031 20.8711 0 19.898C0.0406952 19.9006 0.0837842 19.9057 0.126873 19.9083C1.57993 19.9808 3.97616 18.5651 6.62853 17.9052C6.61656 17.9 6.6022 17.8948 6.59262 17.8896C3.61709 16.6784 1.9031 14.7451 1.01977 12.3408C1.17537 12.5246 1.35012 12.6178 1.54402 12.6204C0.608034 9.7735 0.677455 7.77035 1.37885 6.29774C1.49375 8.05762 6.66204 9.6855 8.90028 13.3968C8.89071 13.3528 8.88113 13.314 8.87395 13.27C8.32576 10.8087 8.47418 8.07315 9.16121 5.13053C9.20908 5.79307 9.31202 6.22269 9.69982 6.49185C9.91048 3.89085 10.643 1.79971 11.95 0.267578C13.2571 1.79971 13.9896 3.89085 14.2002 6.49185C14.588 6.22269 14.691 5.79307 14.7388 5.13053C15.4378 8.12491 15.5791 10.9045 14.9974 13.3968C15.0309 13.3372 15.0668 13.2829 15.1027 13.2234C15.1051 13.2208 15.1051 13.2182 15.1075 13.213C17.2691 9.84079 21.8318 8.22067 22.4494 6.59796V6.59537C22.4901 6.49702 22.5116 6.39609 22.5188 6.29515C23.2202 7.76776 23.2896 9.77091 22.3536 12.6178C22.5475 12.6126 22.7247 12.5194 22.8779 12.3383C21.9898 14.7529 20.2662 16.6914 17.2691 17.9026C17.3074 17.9129 17.3457 17.9233 17.3816 17.931C20.0651 18.6246 22.4781 20.0584 23.8977 19.8954C22.7797 20.8685 21.5589 21.7588 19.098 21.6294C19.1627 21.8675 19.3302 22.0228 19.584 22.1185Z"
                                                fill="#258F67"
                                            />
                                            <path
                                                d="M12.3627 16.6732C12.3627 16.6732 9.45119 17.3788 6.85934 17.5985C3.80271 16.3889 2.04202 14.4581 1.13462 12.057C1.29446 12.2405 1.47398 12.3335 1.67316 12.3361C0.711665 9.49296 0.782978 7.49241 1.50348 6.02173C1.50594 6.02173 1.79857 15.6032 12.3627 16.6732Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M11.7116 16.7864C11.7116 16.7864 10.0667 16.3102 8.77415 13.0731C8.25027 10.5985 8.39211 7.84804 9.04868 4.88941C9.09443 5.55556 9.1928 5.98751 9.56341 6.25813C9.76473 3.64299 10.4648 1.54046 11.7138 0C11.2174 6.38824 10.904 12.4824 11.7116 16.7864Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M22.3487 6.552C20.8856 12.8009 17.0985 15.79 12.0293 16.9711C13.0596 16.6693 14.1769 15.0226 15.1296 13.2119C15.132 13.2093 15.132 13.2067 15.1343 13.2015C17.2608 9.81172 21.7419 8.18576 22.3487 6.552Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M23.9996 19.4003C19.2292 19.9109 15.026 19.3955 12.0508 16.6816C12.0508 16.6816 14.9231 17.4656 17.4842 17.5807C20.1675 18.2208 22.5778 19.5513 23.9996 19.4003Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M16.4192 23.6094C14.6332 21.5095 13.2143 19.1771 12.0742 16.6633C13.1894 18.0582 14.3113 19.4709 15.3222 20.6281C15.295 20.6077 15.2678 20.5898 15.2406 20.5694C15.9931 21.7982 16.0249 22.9554 16.4192 23.6094Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.2037 19.1457C11.7042 20.4843 11.0767 21.5573 10.256 22.2368C10.3589 21.9864 10.3213 21.8102 10.2209 21.6722C9.57084 22.5433 8.59201 23.2076 7.40234 23.7364C9.34998 21.5445 10.9713 19.2351 12.2137 16.7903C12.3342 17.2476 12.299 18.1545 12.2037 19.1457Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.0016 16.896C11.9154 17.0026 10.0093 19.3149 8.54143 20.9535C7.23401 21.8691 5.84277 22.2176 4.37251 22.0746C4.62394 21.9783 4.79395 21.8197 4.85382 21.5856C2.39461 21.7156 1.17339 20.8209 0.0527344 19.8429C0.0934418 19.8455 0.136544 19.8507 0.179646 19.8533C4.51858 20.2227 8.54862 19.5204 12.0016 16.896Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.811 16.7992C12.811 17.2789 12.4464 17.6674 11.9963 17.6674C11.5462 17.6674 11.1816 17.2789 11.1816 16.7992C11.1816 16.3195 11.5462 15.9309 11.9963 15.9309C12.4464 15.9309 12.811 16.3195 12.811 16.7992Z"
                                                fill="#214842"
                                            />
                                        </svg>
                                    </span>
                                    Product Categories
                                </h4>
                                <ul class="list">
                                    <li class="list-item d-flex align-items-center">
                                        <input type="radio" id="sale" name="category" />
                                        <label for="sale">On Sale</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="flower" name="category" />
                                        <label for="flower">Flower</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="seeds" name="category" />
                                        <label for="seeds">Seeds</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="oil" name="category" checked />
                                        <label for="oil">Oil</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="concentrate" name="category" />
                                        <label for="concentrate">Concentrate</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="cartridges" name="category" />
                                        <label for="cartridges">Cartridges</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="edible" name="category" />
                                        <label for="edible">Edible</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop_aside-block shop_aside-block--types">
                                <h4 class="shop_aside-block_header d-flex align-items-center">
                                    <span class="leaf">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.584 22.1185C18.1022 22.2634 16.697 21.9115 15.3804 20.9798C15.3517 20.9591 15.3229 20.9409 15.2942 20.9202C16.089 22.1625 16.1225 23.3349 16.539 24C15.4043 23.4643 14.4707 22.7914 13.8507 21.9089C13.7574 22.0486 13.7215 22.2272 13.8172 22.4808C13.032 21.7872 12.4312 20.6899 11.9524 19.3208C11.9476 19.3312 11.9452 19.3415 11.9405 19.3493C11.4641 20.7054 10.8656 21.7924 10.0828 22.4808C10.181 22.2272 10.1451 22.0486 10.0493 21.9089C9.42932 22.7914 8.49572 23.4643 7.36104 24C7.77757 23.3375 7.81109 22.1625 8.60584 20.9202C8.56514 20.9487 8.52445 20.9798 8.48615 21.0031C7.17911 21.9141 5.78829 22.2609 4.31848 22.1185C4.56983 22.0228 4.73979 21.8649 4.79964 21.632C2.34117 21.7614 1.12031 20.8711 0 19.898C0.0406952 19.9006 0.0837842 19.9057 0.126873 19.9083C1.57993 19.9808 3.97616 18.5651 6.62853 17.9052C6.61656 17.9 6.6022 17.8948 6.59262 17.8896C3.61709 16.6784 1.9031 14.7451 1.01977 12.3408C1.17537 12.5246 1.35012 12.6178 1.54402 12.6204C0.608034 9.7735 0.677455 7.77035 1.37885 6.29774C1.49375 8.05762 6.66204 9.6855 8.90028 13.3968C8.89071 13.3528 8.88113 13.314 8.87395 13.27C8.32576 10.8087 8.47418 8.07315 9.16121 5.13053C9.20908 5.79307 9.31202 6.22269 9.69982 6.49185C9.91048 3.89085 10.643 1.79971 11.95 0.267578C13.2571 1.79971 13.9896 3.89085 14.2002 6.49185C14.588 6.22269 14.691 5.79307 14.7388 5.13053C15.4378 8.12491 15.5791 10.9045 14.9974 13.3968C15.0309 13.3372 15.0668 13.2829 15.1027 13.2234C15.1051 13.2208 15.1051 13.2182 15.1075 13.213C17.2691 9.84079 21.8318 8.22067 22.4494 6.59796V6.59537C22.4901 6.49702 22.5116 6.39609 22.5188 6.29515C23.2202 7.76776 23.2896 9.77091 22.3536 12.6178C22.5475 12.6126 22.7247 12.5194 22.8779 12.3383C21.9898 14.7529 20.2662 16.6914 17.2691 17.9026C17.3074 17.9129 17.3457 17.9233 17.3816 17.931C20.0651 18.6246 22.4781 20.0584 23.8977 19.8954C22.7797 20.8685 21.5589 21.7588 19.098 21.6294C19.1627 21.8675 19.3302 22.0228 19.584 22.1185Z"
                                                fill="#258F67"
                                            />
                                            <path
                                                d="M12.3627 16.6732C12.3627 16.6732 9.45119 17.3788 6.85934 17.5985C3.80271 16.3889 2.04202 14.4581 1.13462 12.057C1.29446 12.2405 1.47398 12.3335 1.67316 12.3361C0.711665 9.49296 0.782978 7.49241 1.50348 6.02173C1.50594 6.02173 1.79857 15.6032 12.3627 16.6732Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M11.7116 16.7864C11.7116 16.7864 10.0667 16.3102 8.77415 13.0731C8.25027 10.5985 8.39211 7.84804 9.04868 4.88941C9.09443 5.55556 9.1928 5.98751 9.56341 6.25813C9.76473 3.64299 10.4648 1.54046 11.7138 0C11.2174 6.38824 10.904 12.4824 11.7116 16.7864Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M22.3487 6.552C20.8856 12.8009 17.0985 15.79 12.0293 16.9711C13.0596 16.6693 14.1769 15.0226 15.1296 13.2119C15.132 13.2093 15.132 13.2067 15.1343 13.2015C17.2608 9.81172 21.7419 8.18576 22.3487 6.552Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M23.9996 19.4003C19.2292 19.9109 15.026 19.3955 12.0508 16.6816C12.0508 16.6816 14.9231 17.4656 17.4842 17.5807C20.1675 18.2208 22.5778 19.5513 23.9996 19.4003Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M16.4192 23.6094C14.6332 21.5095 13.2143 19.1771 12.0742 16.6633C13.1894 18.0582 14.3113 19.4709 15.3222 20.6281C15.295 20.6077 15.2678 20.5898 15.2406 20.5694C15.9931 21.7982 16.0249 22.9554 16.4192 23.6094Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.2037 19.1457C11.7042 20.4843 11.0767 21.5573 10.256 22.2368C10.3589 21.9864 10.3213 21.8102 10.2209 21.6722C9.57084 22.5433 8.59201 23.2076 7.40234 23.7364C9.34998 21.5445 10.9713 19.2351 12.2137 16.7903C12.3342 17.2476 12.299 18.1545 12.2037 19.1457Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.0016 16.896C11.9154 17.0026 10.0093 19.3149 8.54143 20.9535C7.23401 21.8691 5.84277 22.2176 4.37251 22.0746C4.62394 21.9783 4.79395 21.8197 4.85382 21.5856C2.39461 21.7156 1.17339 20.8209 0.0527344 19.8429C0.0934418 19.8455 0.136544 19.8507 0.179646 19.8533C4.51858 20.2227 8.54862 19.5204 12.0016 16.896Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.811 16.7992C12.811 17.2789 12.4464 17.6674 11.9963 17.6674C11.5462 17.6674 11.1816 17.2789 11.1816 16.7992C11.1816 16.3195 11.5462 15.9309 11.9963 15.9309C12.4464 15.9309 12.811 16.3195 12.811 16.7992Z"
                                                fill="#214842"
                                            />
                                        </svg>
                                    </span>
                                    Plant Type
                                </h4>
                                <ul class="list">
                                    <li class="list-item">
                                        <input type="radio" id="indica" name="type" />
                                        <label for="indica">Indica-Dominant</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="sativa" name="type" />
                                        <label for="sativa">Sativa-Dominant</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="hybrid" name="type" checked />
                                        <label for="hybrid">Hybrid</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop_aside-block shop_aside-block--weight">
                                <h4 class="shop_aside-block_header d-flex align-items-center">
                                    <span class="leaf">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.584 22.1185C18.1022 22.2634 16.697 21.9115 15.3804 20.9798C15.3517 20.9591 15.3229 20.9409 15.2942 20.9202C16.089 22.1625 16.1225 23.3349 16.539 24C15.4043 23.4643 14.4707 22.7914 13.8507 21.9089C13.7574 22.0486 13.7215 22.2272 13.8172 22.4808C13.032 21.7872 12.4312 20.6899 11.9524 19.3208C11.9476 19.3312 11.9452 19.3415 11.9405 19.3493C11.4641 20.7054 10.8656 21.7924 10.0828 22.4808C10.181 22.2272 10.1451 22.0486 10.0493 21.9089C9.42932 22.7914 8.49572 23.4643 7.36104 24C7.77757 23.3375 7.81109 22.1625 8.60584 20.9202C8.56514 20.9487 8.52445 20.9798 8.48615 21.0031C7.17911 21.9141 5.78829 22.2609 4.31848 22.1185C4.56983 22.0228 4.73979 21.8649 4.79964 21.632C2.34117 21.7614 1.12031 20.8711 0 19.898C0.0406952 19.9006 0.0837842 19.9057 0.126873 19.9083C1.57993 19.9808 3.97616 18.5651 6.62853 17.9052C6.61656 17.9 6.6022 17.8948 6.59262 17.8896C3.61709 16.6784 1.9031 14.7451 1.01977 12.3408C1.17537 12.5246 1.35012 12.6178 1.54402 12.6204C0.608034 9.7735 0.677455 7.77035 1.37885 6.29774C1.49375 8.05762 6.66204 9.6855 8.90028 13.3968C8.89071 13.3528 8.88113 13.314 8.87395 13.27C8.32576 10.8087 8.47418 8.07315 9.16121 5.13053C9.20908 5.79307 9.31202 6.22269 9.69982 6.49185C9.91048 3.89085 10.643 1.79971 11.95 0.267578C13.2571 1.79971 13.9896 3.89085 14.2002 6.49185C14.588 6.22269 14.691 5.79307 14.7388 5.13053C15.4378 8.12491 15.5791 10.9045 14.9974 13.3968C15.0309 13.3372 15.0668 13.2829 15.1027 13.2234C15.1051 13.2208 15.1051 13.2182 15.1075 13.213C17.2691 9.84079 21.8318 8.22067 22.4494 6.59796V6.59537C22.4901 6.49702 22.5116 6.39609 22.5188 6.29515C23.2202 7.76776 23.2896 9.77091 22.3536 12.6178C22.5475 12.6126 22.7247 12.5194 22.8779 12.3383C21.9898 14.7529 20.2662 16.6914 17.2691 17.9026C17.3074 17.9129 17.3457 17.9233 17.3816 17.931C20.0651 18.6246 22.4781 20.0584 23.8977 19.8954C22.7797 20.8685 21.5589 21.7588 19.098 21.6294C19.1627 21.8675 19.3302 22.0228 19.584 22.1185Z"
                                                fill="#258F67"
                                            />
                                            <path
                                                d="M12.3627 16.6732C12.3627 16.6732 9.45119 17.3788 6.85934 17.5985C3.80271 16.3889 2.04202 14.4581 1.13462 12.057C1.29446 12.2405 1.47398 12.3335 1.67316 12.3361C0.711665 9.49296 0.782978 7.49241 1.50348 6.02173C1.50594 6.02173 1.79857 15.6032 12.3627 16.6732Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M11.7116 16.7864C11.7116 16.7864 10.0667 16.3102 8.77415 13.0731C8.25027 10.5985 8.39211 7.84804 9.04868 4.88941C9.09443 5.55556 9.1928 5.98751 9.56341 6.25813C9.76473 3.64299 10.4648 1.54046 11.7138 0C11.2174 6.38824 10.904 12.4824 11.7116 16.7864Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M22.3487 6.552C20.8856 12.8009 17.0985 15.79 12.0293 16.9711C13.0596 16.6693 14.1769 15.0226 15.1296 13.2119C15.132 13.2093 15.132 13.2067 15.1343 13.2015C17.2608 9.81172 21.7419 8.18576 22.3487 6.552Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M23.9996 19.4003C19.2292 19.9109 15.026 19.3955 12.0508 16.6816C12.0508 16.6816 14.9231 17.4656 17.4842 17.5807C20.1675 18.2208 22.5778 19.5513 23.9996 19.4003Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M16.4192 23.6094C14.6332 21.5095 13.2143 19.1771 12.0742 16.6633C13.1894 18.0582 14.3113 19.4709 15.3222 20.6281C15.295 20.6077 15.2678 20.5898 15.2406 20.5694C15.9931 21.7982 16.0249 22.9554 16.4192 23.6094Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.2037 19.1457C11.7042 20.4843 11.0767 21.5573 10.256 22.2368C10.3589 21.9864 10.3213 21.8102 10.2209 21.6722C9.57084 22.5433 8.59201 23.2076 7.40234 23.7364C9.34998 21.5445 10.9713 19.2351 12.2137 16.7903C12.3342 17.2476 12.299 18.1545 12.2037 19.1457Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.0016 16.896C11.9154 17.0026 10.0093 19.3149 8.54143 20.9535C7.23401 21.8691 5.84277 22.2176 4.37251 22.0746C4.62394 21.9783 4.79395 21.8197 4.85382 21.5856C2.39461 21.7156 1.17339 20.8209 0.0527344 19.8429C0.0934418 19.8455 0.136544 19.8507 0.179646 19.8533C4.51858 20.2227 8.54862 19.5204 12.0016 16.896Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.811 16.7992C12.811 17.2789 12.4464 17.6674 11.9963 17.6674C11.5462 17.6674 11.1816 17.2789 11.1816 16.7992C11.1816 16.3195 11.5462 15.9309 11.9963 15.9309C12.4464 15.9309 12.811 16.3195 12.811 16.7992Z"
                                                fill="#214842"
                                            />
                                        </svg>
                                    </span>
                                    Weight
                                </h4>
                                <ul class="list d-flex flex-wrap">
                                    <li class="list-item">
                                        <input type="radio" id="weight1" name="weight" />
                                        <label for="weight1">1g</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="weight2" name="weight" />
                                        <label for="weight2">3.5g</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="weight3" name="weight" />
                                        <label for="weight3">5g</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="weight4" name="weight" />
                                        <label for="weight4">7g</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="weight5" name="weight" checked />
                                        <label for="weight5">10g</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="weight6" name="weight" />
                                        <label for="weight6">14g</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="weight7" name="weight" />
                                        <label for="weight7">28g</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop_aside-block shop_aside-block--price">
                                <h4 class="shop_aside-block_header d-flex align-items-center">
                                    <span class="leaf">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.584 22.1185C18.1022 22.2634 16.697 21.9115 15.3804 20.9798C15.3517 20.9591 15.3229 20.9409 15.2942 20.9202C16.089 22.1625 16.1225 23.3349 16.539 24C15.4043 23.4643 14.4707 22.7914 13.8507 21.9089C13.7574 22.0486 13.7215 22.2272 13.8172 22.4808C13.032 21.7872 12.4312 20.6899 11.9524 19.3208C11.9476 19.3312 11.9452 19.3415 11.9405 19.3493C11.4641 20.7054 10.8656 21.7924 10.0828 22.4808C10.181 22.2272 10.1451 22.0486 10.0493 21.9089C9.42932 22.7914 8.49572 23.4643 7.36104 24C7.77757 23.3375 7.81109 22.1625 8.60584 20.9202C8.56514 20.9487 8.52445 20.9798 8.48615 21.0031C7.17911 21.9141 5.78829 22.2609 4.31848 22.1185C4.56983 22.0228 4.73979 21.8649 4.79964 21.632C2.34117 21.7614 1.12031 20.8711 0 19.898C0.0406952 19.9006 0.0837842 19.9057 0.126873 19.9083C1.57993 19.9808 3.97616 18.5651 6.62853 17.9052C6.61656 17.9 6.6022 17.8948 6.59262 17.8896C3.61709 16.6784 1.9031 14.7451 1.01977 12.3408C1.17537 12.5246 1.35012 12.6178 1.54402 12.6204C0.608034 9.7735 0.677455 7.77035 1.37885 6.29774C1.49375 8.05762 6.66204 9.6855 8.90028 13.3968C8.89071 13.3528 8.88113 13.314 8.87395 13.27C8.32576 10.8087 8.47418 8.07315 9.16121 5.13053C9.20908 5.79307 9.31202 6.22269 9.69982 6.49185C9.91048 3.89085 10.643 1.79971 11.95 0.267578C13.2571 1.79971 13.9896 3.89085 14.2002 6.49185C14.588 6.22269 14.691 5.79307 14.7388 5.13053C15.4378 8.12491 15.5791 10.9045 14.9974 13.3968C15.0309 13.3372 15.0668 13.2829 15.1027 13.2234C15.1051 13.2208 15.1051 13.2182 15.1075 13.213C17.2691 9.84079 21.8318 8.22067 22.4494 6.59796V6.59537C22.4901 6.49702 22.5116 6.39609 22.5188 6.29515C23.2202 7.76776 23.2896 9.77091 22.3536 12.6178C22.5475 12.6126 22.7247 12.5194 22.8779 12.3383C21.9898 14.7529 20.2662 16.6914 17.2691 17.9026C17.3074 17.9129 17.3457 17.9233 17.3816 17.931C20.0651 18.6246 22.4781 20.0584 23.8977 19.8954C22.7797 20.8685 21.5589 21.7588 19.098 21.6294C19.1627 21.8675 19.3302 22.0228 19.584 22.1185Z"
                                                fill="#258F67"
                                            />
                                            <path
                                                d="M12.3627 16.6732C12.3627 16.6732 9.45119 17.3788 6.85934 17.5985C3.80271 16.3889 2.04202 14.4581 1.13462 12.057C1.29446 12.2405 1.47398 12.3335 1.67316 12.3361C0.711665 9.49296 0.782978 7.49241 1.50348 6.02173C1.50594 6.02173 1.79857 15.6032 12.3627 16.6732Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M11.7116 16.7864C11.7116 16.7864 10.0667 16.3102 8.77415 13.0731C8.25027 10.5985 8.39211 7.84804 9.04868 4.88941C9.09443 5.55556 9.1928 5.98751 9.56341 6.25813C9.76473 3.64299 10.4648 1.54046 11.7138 0C11.2174 6.38824 10.904 12.4824 11.7116 16.7864Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M22.3487 6.552C20.8856 12.8009 17.0985 15.79 12.0293 16.9711C13.0596 16.6693 14.1769 15.0226 15.1296 13.2119C15.132 13.2093 15.132 13.2067 15.1343 13.2015C17.2608 9.81172 21.7419 8.18576 22.3487 6.552Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M23.9996 19.4003C19.2292 19.9109 15.026 19.3955 12.0508 16.6816C12.0508 16.6816 14.9231 17.4656 17.4842 17.5807C20.1675 18.2208 22.5778 19.5513 23.9996 19.4003Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M16.4192 23.6094C14.6332 21.5095 13.2143 19.1771 12.0742 16.6633C13.1894 18.0582 14.3113 19.4709 15.3222 20.6281C15.295 20.6077 15.2678 20.5898 15.2406 20.5694C15.9931 21.7982 16.0249 22.9554 16.4192 23.6094Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.2037 19.1457C11.7042 20.4843 11.0767 21.5573 10.256 22.2368C10.3589 21.9864 10.3213 21.8102 10.2209 21.6722C9.57084 22.5433 8.59201 23.2076 7.40234 23.7364C9.34998 21.5445 10.9713 19.2351 12.2137 16.7903C12.3342 17.2476 12.299 18.1545 12.2037 19.1457Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.0016 16.896C11.9154 17.0026 10.0093 19.3149 8.54143 20.9535C7.23401 21.8691 5.84277 22.2176 4.37251 22.0746C4.62394 21.9783 4.79395 21.8197 4.85382 21.5856C2.39461 21.7156 1.17339 20.8209 0.0527344 19.8429C0.0934418 19.8455 0.136544 19.8507 0.179646 19.8533C4.51858 20.2227 8.54862 19.5204 12.0016 16.896Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.811 16.7992C12.811 17.2789 12.4464 17.6674 11.9963 17.6674C11.5462 17.6674 11.1816 17.2789 11.1816 16.7992C11.1816 16.3195 11.5462 15.9309 11.9963 15.9309C12.4464 15.9309 12.811 16.3195 12.811 16.7992Z"
                                                fill="#214842"
                                            />
                                        </svg>
                                    </span>
                                    Filter by Price
                                </h4>
                                <div class="range-slider"></div>
                                <div class="range-output d-flex align-items-center justify-content-between">
                                    <input id="priceMin" type="text" readonly value="4$" />
                                    <input id="priceMax" type="text" readonly value="1020$" />
                                </div>
                            </div>
                            <div class="shop_aside-block shop_aside-block--sale">
                                <div class="content">
                                    <h4 class="shop_aside-block_header">Everything is 20% off for this special day!</h4>
                                    <p class="shop_aside-block_text">Excluding items already on sale</p>
                                    <div class="shop_aside-block_timer timer d-flex justify-content-start">
                                        <div class="timer_block d-flex flex-column justify-content-center">
                                            <span class="timer_block-number" id="hours">22</span>
                                        </div>
                                        <div class="timer_separator d-flex flex-column justify-content-center align-items-center">
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                        <div class="timer_block d-flex flex-column justify-content-center">
                                            <span class="timer_block-number" id="minutes">00</span>
                                        </div>
                                        <div class="timer_separator d-flex flex-column justify-content-center align-items-center">
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                        <div class="timer_block d-flex flex-column justify-content-center">
                                            <span class="timer_block-number" id="seconds">59</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn">Shop Now</a>
                                </div>
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                    <img class="lazy leaf" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </div>
                            <div class="shop_aside-block shop_aside-block--thc">
                                <h4 class="shop_aside-block_header d-flex align-items-center">
                                    <span class="leaf">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.584 22.1185C18.1022 22.2634 16.697 21.9115 15.3804 20.9798C15.3517 20.9591 15.3229 20.9409 15.2942 20.9202C16.089 22.1625 16.1225 23.3349 16.539 24C15.4043 23.4643 14.4707 22.7914 13.8507 21.9089C13.7574 22.0486 13.7215 22.2272 13.8172 22.4808C13.032 21.7872 12.4312 20.6899 11.9524 19.3208C11.9476 19.3312 11.9452 19.3415 11.9405 19.3493C11.4641 20.7054 10.8656 21.7924 10.0828 22.4808C10.181 22.2272 10.1451 22.0486 10.0493 21.9089C9.42932 22.7914 8.49572 23.4643 7.36104 24C7.77757 23.3375 7.81109 22.1625 8.60584 20.9202C8.56514 20.9487 8.52445 20.9798 8.48615 21.0031C7.17911 21.9141 5.78829 22.2609 4.31848 22.1185C4.56983 22.0228 4.73979 21.8649 4.79964 21.632C2.34117 21.7614 1.12031 20.8711 0 19.898C0.0406952 19.9006 0.0837842 19.9057 0.126873 19.9083C1.57993 19.9808 3.97616 18.5651 6.62853 17.9052C6.61656 17.9 6.6022 17.8948 6.59262 17.8896C3.61709 16.6784 1.9031 14.7451 1.01977 12.3408C1.17537 12.5246 1.35012 12.6178 1.54402 12.6204C0.608034 9.7735 0.677455 7.77035 1.37885 6.29774C1.49375 8.05762 6.66204 9.6855 8.90028 13.3968C8.89071 13.3528 8.88113 13.314 8.87395 13.27C8.32576 10.8087 8.47418 8.07315 9.16121 5.13053C9.20908 5.79307 9.31202 6.22269 9.69982 6.49185C9.91048 3.89085 10.643 1.79971 11.95 0.267578C13.2571 1.79971 13.9896 3.89085 14.2002 6.49185C14.588 6.22269 14.691 5.79307 14.7388 5.13053C15.4378 8.12491 15.5791 10.9045 14.9974 13.3968C15.0309 13.3372 15.0668 13.2829 15.1027 13.2234C15.1051 13.2208 15.1051 13.2182 15.1075 13.213C17.2691 9.84079 21.8318 8.22067 22.4494 6.59796V6.59537C22.4901 6.49702 22.5116 6.39609 22.5188 6.29515C23.2202 7.76776 23.2896 9.77091 22.3536 12.6178C22.5475 12.6126 22.7247 12.5194 22.8779 12.3383C21.9898 14.7529 20.2662 16.6914 17.2691 17.9026C17.3074 17.9129 17.3457 17.9233 17.3816 17.931C20.0651 18.6246 22.4781 20.0584 23.8977 19.8954C22.7797 20.8685 21.5589 21.7588 19.098 21.6294C19.1627 21.8675 19.3302 22.0228 19.584 22.1185Z"
                                                fill="#258F67"
                                            />
                                            <path
                                                d="M12.3627 16.6732C12.3627 16.6732 9.45119 17.3788 6.85934 17.5985C3.80271 16.3889 2.04202 14.4581 1.13462 12.057C1.29446 12.2405 1.47398 12.3335 1.67316 12.3361C0.711665 9.49296 0.782978 7.49241 1.50348 6.02173C1.50594 6.02173 1.79857 15.6032 12.3627 16.6732Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M11.7116 16.7864C11.7116 16.7864 10.0667 16.3102 8.77415 13.0731C8.25027 10.5985 8.39211 7.84804 9.04868 4.88941C9.09443 5.55556 9.1928 5.98751 9.56341 6.25813C9.76473 3.64299 10.4648 1.54046 11.7138 0C11.2174 6.38824 10.904 12.4824 11.7116 16.7864Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M22.3487 6.552C20.8856 12.8009 17.0985 15.79 12.0293 16.9711C13.0596 16.6693 14.1769 15.0226 15.1296 13.2119C15.132 13.2093 15.132 13.2067 15.1343 13.2015C17.2608 9.81172 21.7419 8.18576 22.3487 6.552Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M23.9996 19.4003C19.2292 19.9109 15.026 19.3955 12.0508 16.6816C12.0508 16.6816 14.9231 17.4656 17.4842 17.5807C20.1675 18.2208 22.5778 19.5513 23.9996 19.4003Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M16.4192 23.6094C14.6332 21.5095 13.2143 19.1771 12.0742 16.6633C13.1894 18.0582 14.3113 19.4709 15.3222 20.6281C15.295 20.6077 15.2678 20.5898 15.2406 20.5694C15.9931 21.7982 16.0249 22.9554 16.4192 23.6094Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.2037 19.1457C11.7042 20.4843 11.0767 21.5573 10.256 22.2368C10.3589 21.9864 10.3213 21.8102 10.2209 21.6722C9.57084 22.5433 8.59201 23.2076 7.40234 23.7364C9.34998 21.5445 10.9713 19.2351 12.2137 16.7903C12.3342 17.2476 12.299 18.1545 12.2037 19.1457Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.0016 16.896C11.9154 17.0026 10.0093 19.3149 8.54143 20.9535C7.23401 21.8691 5.84277 22.2176 4.37251 22.0746C4.62394 21.9783 4.79395 21.8197 4.85382 21.5856C2.39461 21.7156 1.17339 20.8209 0.0527344 19.8429C0.0934418 19.8455 0.136544 19.8507 0.179646 19.8533C4.51858 20.2227 8.54862 19.5204 12.0016 16.896Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.811 16.7992C12.811 17.2789 12.4464 17.6674 11.9963 17.6674C11.5462 17.6674 11.1816 17.2789 11.1816 16.7992C11.1816 16.3195 11.5462 15.9309 11.9963 15.9309C12.4464 15.9309 12.811 16.3195 12.811 16.7992Z"
                                                fill="#214842"
                                            />
                                        </svg>
                                    </span>
                                    THC
                                </h4>
                                <ul class="list">
                                    <li class="list-item">
                                        <input type="radio" id="010-thc" name="thc" checked />
                                        <label for="010-thc">0% - 10%</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="1020-thc" name="thc" />
                                        <label for="1020-thc">10% - 20%</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="3040-thc" name="thc" />
                                        <label for="3040-thc">30% - 40%</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="4050-thc" name="thc" />
                                        <label for="4050-thc">40% - 50%</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop_aside-block shop_aside-block--cbd">
                                <h4 class="shop_aside-block_header d-flex align-items-center">
                                    <span class="leaf">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M19.584 22.1185C18.1022 22.2634 16.697 21.9115 15.3804 20.9798C15.3517 20.9591 15.3229 20.9409 15.2942 20.9202C16.089 22.1625 16.1225 23.3349 16.539 24C15.4043 23.4643 14.4707 22.7914 13.8507 21.9089C13.7574 22.0486 13.7215 22.2272 13.8172 22.4808C13.032 21.7872 12.4312 20.6899 11.9524 19.3208C11.9476 19.3312 11.9452 19.3415 11.9405 19.3493C11.4641 20.7054 10.8656 21.7924 10.0828 22.4808C10.181 22.2272 10.1451 22.0486 10.0493 21.9089C9.42932 22.7914 8.49572 23.4643 7.36104 24C7.77757 23.3375 7.81109 22.1625 8.60584 20.9202C8.56514 20.9487 8.52445 20.9798 8.48615 21.0031C7.17911 21.9141 5.78829 22.2609 4.31848 22.1185C4.56983 22.0228 4.73979 21.8649 4.79964 21.632C2.34117 21.7614 1.12031 20.8711 0 19.898C0.0406952 19.9006 0.0837842 19.9057 0.126873 19.9083C1.57993 19.9808 3.97616 18.5651 6.62853 17.9052C6.61656 17.9 6.6022 17.8948 6.59262 17.8896C3.61709 16.6784 1.9031 14.7451 1.01977 12.3408C1.17537 12.5246 1.35012 12.6178 1.54402 12.6204C0.608034 9.7735 0.677455 7.77035 1.37885 6.29774C1.49375 8.05762 6.66204 9.6855 8.90028 13.3968C8.89071 13.3528 8.88113 13.314 8.87395 13.27C8.32576 10.8087 8.47418 8.07315 9.16121 5.13053C9.20908 5.79307 9.31202 6.22269 9.69982 6.49185C9.91048 3.89085 10.643 1.79971 11.95 0.267578C13.2571 1.79971 13.9896 3.89085 14.2002 6.49185C14.588 6.22269 14.691 5.79307 14.7388 5.13053C15.4378 8.12491 15.5791 10.9045 14.9974 13.3968C15.0309 13.3372 15.0668 13.2829 15.1027 13.2234C15.1051 13.2208 15.1051 13.2182 15.1075 13.213C17.2691 9.84079 21.8318 8.22067 22.4494 6.59796V6.59537C22.4901 6.49702 22.5116 6.39609 22.5188 6.29515C23.2202 7.76776 23.2896 9.77091 22.3536 12.6178C22.5475 12.6126 22.7247 12.5194 22.8779 12.3383C21.9898 14.7529 20.2662 16.6914 17.2691 17.9026C17.3074 17.9129 17.3457 17.9233 17.3816 17.931C20.0651 18.6246 22.4781 20.0584 23.8977 19.8954C22.7797 20.8685 21.5589 21.7588 19.098 21.6294C19.1627 21.8675 19.3302 22.0228 19.584 22.1185Z"
                                                fill="#258F67"
                                            />
                                            <path
                                                d="M12.3627 16.6732C12.3627 16.6732 9.45119 17.3788 6.85934 17.5985C3.80271 16.3889 2.04202 14.4581 1.13462 12.057C1.29446 12.2405 1.47398 12.3335 1.67316 12.3361C0.711665 9.49296 0.782978 7.49241 1.50348 6.02173C1.50594 6.02173 1.79857 15.6032 12.3627 16.6732Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M11.7116 16.7864C11.7116 16.7864 10.0667 16.3102 8.77415 13.0731C8.25027 10.5985 8.39211 7.84804 9.04868 4.88941C9.09443 5.55556 9.1928 5.98751 9.56341 6.25813C9.76473 3.64299 10.4648 1.54046 11.7138 0C11.2174 6.38824 10.904 12.4824 11.7116 16.7864Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M22.3487 6.552C20.8856 12.8009 17.0985 15.79 12.0293 16.9711C13.0596 16.6693 14.1769 15.0226 15.1296 13.2119C15.132 13.2093 15.132 13.2067 15.1343 13.2015C17.2608 9.81172 21.7419 8.18576 22.3487 6.552Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M23.9996 19.4003C19.2292 19.9109 15.026 19.3955 12.0508 16.6816C12.0508 16.6816 14.9231 17.4656 17.4842 17.5807C20.1675 18.2208 22.5778 19.5513 23.9996 19.4003Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M16.4192 23.6094C14.6332 21.5095 13.2143 19.1771 12.0742 16.6633C13.1894 18.0582 14.3113 19.4709 15.3222 20.6281C15.295 20.6077 15.2678 20.5898 15.2406 20.5694C15.9931 21.7982 16.0249 22.9554 16.4192 23.6094Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.2037 19.1457C11.7042 20.4843 11.0767 21.5573 10.256 22.2368C10.3589 21.9864 10.3213 21.8102 10.2209 21.6722C9.57084 22.5433 8.59201 23.2076 7.40234 23.7364C9.34998 21.5445 10.9713 19.2351 12.2137 16.7903C12.3342 17.2476 12.299 18.1545 12.2037 19.1457Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.0016 16.896C11.9154 17.0026 10.0093 19.3149 8.54143 20.9535C7.23401 21.8691 5.84277 22.2176 4.37251 22.0746C4.62394 21.9783 4.79395 21.8197 4.85382 21.5856C2.39461 21.7156 1.17339 20.8209 0.0527344 19.8429C0.0934418 19.8455 0.136544 19.8507 0.179646 19.8533C4.51858 20.2227 8.54862 19.5204 12.0016 16.896Z"
                                                fill="#214842"
                                            />
                                            <path
                                                d="M12.811 16.7992C12.811 17.2789 12.4464 17.6674 11.9963 17.6674C11.5462 17.6674 11.1816 17.2789 11.1816 16.7992C11.1816 16.3195 11.5462 15.9309 11.9963 15.9309C12.4464 15.9309 12.811 16.3195 12.811 16.7992Z"
                                                fill="#214842"
                                            />
                                        </svg>
                                    </span>
                                    CBD
                                </h4>
                                <ul class="list">
                                    <li class="list-item">
                                        <input type="radio" id="010-cbd" name="cbd" />
                                        <label for="010-cbd">0% - 10%</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="1020-cbd" name="cbd" checked />
                                        <label for="1020-cbd">10% - 20%</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="3040-cbd" name="cbd" />
                                        <label for="3040-cbd">30% - 40%</label>
                                    </li>
                                    <li class="list-item">
                                        <input type="radio" id="4050-cbd" name="cbd" />
                                        <label for="4050-cbd">40% - 50%</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products section end -->
            <!-- Sale section start -->
            <section class="sale section">
                <span class="underlay">
                    <span class="underlay_circle underlay_circle--accent"></span>
                    <span class="underlay_circle underlay_circle--green"></span>
                </span>
                <div class="container">
                    <h2 class="sale_header">Items on Sale</h2>
                    <div class="sale_swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="sale_swiper-slide swiper-slide">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                            <img
                                                class="lazy preview"
                                                data-src="img/placeholder.jpg"
                                                src="img/placeholder.jpg"
                                                alt="High CBD 50 Oil"
                                            />
                                        </picture>
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
                                        <h4 class="main_title">High CBD 50 Oil</h4>
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
                            </div>
                            <div class="sale_swiper-slide swiper-slide">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                            <img
                                                class="lazy preview"
                                                data-src="img/placeholder.jpg"
                                                src="img/placeholder.jpg"
                                                alt="Tangerine Dream"
                                            />
                                        </picture>
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
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="main_title">Tangerine Dream</h4>
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
                                            <span class="price">$7.97</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sale_swiper-slide swiper-slide">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                            <img
                                                class="lazy preview"
                                                data-src="img/placeholder.jpg"
                                                src="img/placeholder.jpg"
                                                alt="Bruce Banner"
                                            />
                                        </picture>
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
                                        <h4 class="main_title">Bruce Banner</h4>
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
                                            <span class="price price--old">$5.67</span>
                                            <span class="price price--new">$2.99</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sale_swiper-slide swiper-slide">
                                <div class="products_list-item_wrapper d-flex flex-column">
                                    <div class="media">
                                        <picture>
                                            <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" type="image/webp" />
                                            <img
                                                class="lazy preview"
                                                data-src="img/placeholder.jpg"
                                                src="img/placeholder.jpg"
                                                alt="Tangerine Dream"
                                            />
                                        </picture>
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
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="main_title">Tangerine Dream</h4>
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
                                            <span class="price">$5.88</span>
                                        </div>
                                        <a class="btn btn--green" href="#">Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiper-pagination--dots"></div>
                    </div>
                </div>
            </section>
            <!-- Sale section end -->
            <!-- Newsletter section start -->
            <section class="newsletter section--nopb">
                <div class="container">
                    <div class="wrapper">
                        <div class="newsletter_deco">
                            <div class="newsletter_deco-wrapper">
                                <picture>
                                    <source
                                        data-srcset="img/placeholder.jpg"
                                        srcset="img/placeholder.jpg"
                                        type="image/webp"
                                    />
                                    <img
                                        class="lazy leaf leaf--left"
                                        data-src="img/placeholder.jpg"
                                        src="img/placeholder.jpg"
                                        alt="deco"
                                    />
                                </picture>
                            </div>
                            <div class="newsletter_deco-wrapper">
                                <picture>
                                    <source
                                        data-srcset="img/placeholder.jpg"
                                        srcset="img/placeholder.jpg"
                                        type="image/webp"
                                    />
                                    <img
                                        class="lazy leaf leaf--right"
                                        data-src="img/placeholder.jpg"
                                        src="img/placeholder.jpg"
                                        alt="deco"
                                    />
                                </picture>
                            </div>
                        </div>
                        <div class="newsletter_highlight">
                            <span class="underlay underlay--left">
                                <span class="underlay_circle underlay_circle--accent"></span>
                            </span>
                            <span class="underlay underlay--right">
                                <span class="underlay_circle underlay_circle--small underlay_circle--green"></span>
                                <span class="underlay_circle underlay_circle--big underlay_circle--green"></span>
                            </span>
                        </div>
                        <div class="newsletter_content">
                            <div class="newsletter_header">
                                <h2 class="newsletter_header-title">Sign Up for Our Newsletter</h2>
                                <p class="newsletter_header-text">
                                    Accumsan sit amet nulla facilisi morbi tempus. Suscipit tellus mauris a diam maecenas sed enim ut sem
                                </p>
                            </div>
                            <form class="newsletter_form d-sm-flex" data-type="newsletter" action="#" method="post">
                                <input class="newsletter_form-field field required" type="text" data-type="email" placeholder="Email" />
                                <button class="newsletter_form-btn btn" type="submit">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Newsletter section end -->
            <!-- SEO section start -->
            <section class="seo section">
                <div class="container">
                    <h2 class="seo_header">SEO Text</h2>
                    <div class="seo_content d-lg-flex justify-content-between">
                        <p class="seo_content-text">
                            Orci nulla pellentesque dignissim enim. Quis commodo odio aenean sed adipiscing diam. Quis auctor elit sed
                            vulputate. Vitae congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Nunc faucibus a
                            pellentesque sit amet porttitor eget dolor morbi. Nunc sed augue lacus viverra. Tempus imperdiet nulla malesuada
                            pellentesque elit eget gravida. Neque sodales ut etiam sit amet. Nam at lectus urna duis convallis. Aenean sed
                            adipiscing diam donec. Mattis ullamcorper velit sed ullamcorper morbi. A diam sollicitudin tempor id eu nisl.
                        </p>
                        <p class="seo_content-text">
                            Arcu felis bibendum ut tristique et egestas. Id semper risus in hendrerit gravida rutrum. Eu mi bibendum neque
                            egestas congue. Risus nullam eget felis eget. Turpis massa tincidunt dui ut ornare lectus sit. Dictumst
                            vestibulum rhoncus est pellentesque elit. Sit amet nisl purus in mollis nunc. Aenean pharetra magna ac placerat.
                            In hendrerit gravida rutrum quisque non tellus orci ac. Condimentum mattis pellentesque id nibh tortor id
                            aliquet lectus proin. Arcu cursus vitae congue mauris rhoncus aenean vel. Sed id semper risus in hendrerit
                            gravida rutrum.
                        </p>
                    </div>
                </div>
            </section>
            <!-- SEO section end -->
        </main>
        <!-- Shop content end -->
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
        <script src="js/shop.min.js"></script>
    </body>
</html>
