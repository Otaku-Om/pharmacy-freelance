<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Contacts | Herbalist</title>
        <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
        <link rel="stylesheet preload" as="style" href="css/icomoon.css" />
        <link rel="stylesheet preload" as="style" href="css/libs.min.css" />

        <link rel="stylesheet" href="css/contacts.min.css" />
    </head>
    <body>
        <!-- =========================
            Included PHP Header
        =========================== -->
        <?php include 'include/header.php';?>
        <header class="page">
            <div class="page_main container-fluid">
                <div class="container">
                    <h1 class="page_header">Contacts</h1>
                    <p class="page_text">Nibh tellus molestie nunc non blandit. Mi tempus imperdiet nulla malesuada pellentesque elit</p>
                </div>
            </div>
            <div class="container">
                <ul class="page_breadcrumbs d-flex flex-wrap">
                    <li class="page_breadcrumbs-item">
                        <a class="link" href="index.html">Home</a>
                    </li>

                    <li class="page_breadcrumbs-item current">
                        <span>Contacts</span>
                    </li>
                </ul>
            </div>
        </header>
        <!-- Contacts content start -->
        <main>
            <div class="contacts section">
                <div class="container d-flex flex-wrap flex-xl-nowrap justify-content-between">
                    <div class="contacts_form col-12 col-lg-5">
                        <div class="contacts_form-header">
                            <h2 class="contacts_form-header_title">Have any Questions?</h2>
                            <p class="contacts_form-header_text">
                                Elementum eu facilisis sed odio morbi quis commodo odio. Mauris rhoncus aenean vel elit scelerisque mauris
                                pellentesque
                            </p>
                        </div>
                        <form class="contacts_form-form d-flex flex-column" data-type="feedback" action="form.php" method="post">
                            <label class="contacts_form-form_label" for="contactsName">Your Name</label>
                            <input
                                class="contacts_form-form_field field required"
                                type="text"
                                name="contactsName"
                                id="contactsName"
                                placeholder="Your name"
                            />
                            <label class="contacts_form-form_label" for="contactsEmail">Your Email</label>
                            <input
                                class="contacts_form-form_field field required"
                                type="text"
                                data-type="email"
                                name="contactsEmail"
                                id="contactsEmail"
                                placeholder="you@example.com"
                            />
                            <label class="contacts_form-form_label" for="contactsMessage">Message</label>
                            <textarea
                                class="contacts_form-form_field field required"
                                data-type="message"
                                name="contactsMessage"
                                id="contactsMessage"
                                placeholder="Type Your Message"
                            ></textarea>
                            <button class="contacts_form-form_btn btn" type="submit">Send a Message</button>
                        </form>
                    </div>
                    <div class="contacts_info col-12 col-lg-6 col-xl-auto flex-xl-grow-1">
                        <div class="contacts_info-map">
                            <div id="map"></div>
                        </div>
                        <ul class="contacts_info-list">
                            <li class="contacts_info-list_item d-flex flex-column flex-sm-row align-items-center">
                                <span class="icon d-flex justify-content-center align-items-center">
                                    <i class="icon-location"></i>
                                </span>
                                <div class="main d-flex flex-column">
                                    <span>211 Lehner Valleys Apt. 287</span>
                                    <span>Harrisstad</span>
                                </div>
                            </li>
                            <li class="contacts_info-list_item d-flex flex-column flex-sm-row align-items-center">
                                <span class="icon d-flex justify-content-center align-items-center">
                                    <i class="icon-call"></i>
                                </span>
                                <div class="main d-flex flex-column">
                                    <a class="link" href="tel:+1234567890">+1-896-882-3255</a>
                                    <a class="link" href="tel:+1234567890">+1-896-882-3255</a>
                                </div>
                            </li>
                            <li class="contacts_info-list_item d-flex flex-column flex-sm-row align-items-center">
                                <span class="icon d-flex justify-content-center align-items-center">
                                    <i class="icon-envelope_open"></i>
                                </span>
                                <div class="main d-flex flex-column">
                                    <a class="link" href="mailto:example@domain.com">herbalist@cannabis.site</a>
                                    <a class="link" href="mailto:example@domain.com">herbalist@test.site</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="contacts_info-socials d-flex align-items-center justify-content-center justify-content-sm-start">
                            <li class="list-item">
                                <a class="link" href="https://facebook.com" target="_blank" rel="noopener norefferer">
                                    <i class="icon-facebook icon"></i>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="https://instagram.com" target="_blank" rel="noopener norefferer">
                                    <i class="icon-instagram icon"></i>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="https://twitter.com" target="_blank" rel="noopener norefferer">
                                    <i class="icon-twitter icon"></i>
                                </a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="https://whatsapp.com" target="_blank" rel="noopener norefferer">
                                    <i class="icon-whatsapp icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        <!-- Contacts content end -->
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
        <script src="js/contacts.min.js"></script>
    </body>
</html>
