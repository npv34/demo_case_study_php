<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link href="http://cdn.shopify.com/s/files/1/0067/5617/1846/t/2/assets/timber.scss.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home-page.css">
    <style>

        .breadcrumb-list > li {
            font-size: 14px;
            list-style: none;
            display: inline;
        }
        .breadcrumb-list > li a:after {
            content: "/";
            vertical-align: middle;
            margin: 0 5px;
            color: #7a7a7a;
        }
        .action-wishlist:hover,
        .action-wishlist:focus{
            color:#fff;
        }
        .add-to-cart.action-wishlist {
            width: 50px;
            text-align: center;
            padding: 0;
        }
        .add-to-cart.action-wishlist i {
            margin-right: 0px;
        }
        .product-add-to-cart .cart-title,
        .product-add-to-cart .cart-title:hover,
        .product-list-action .cart-title,
        .product-list-action .cart-title:hover {
            background-color: transparent;
            border-bottom: none;
            color: inherit;
        }
        .product-add-to-cart .pro-add-btn i,
        .product-list-action .pro-add-btn i {
            margin-right: 10px;
            font-size: 18px;
        }
        .add-to-cart {
            display: inline-block;
        }
        .action-wishlist:hover,
        .action-wishlist:focus{
            color:#fff;
        }
        .add-to-cart.action-wishlist i {
            margin-right: 0px;
        }
        .product-add-to-cart {
            float: none;
        }
        .single-product-wishlist{
            display: inline-block;
            position: relative;
            margin-left: 20px;
        }
        .product-thumbnail .owl-nav  {display: none;}
        .breadcrumb-area {
            padding: 30px 0;
            background-color: #f3f3f3;
        }
        .breadmome-name {
            color: #ff6a00;
            font-size: 24px;
            font-weight: 500;
            text-transform: capitalize;
            margin: 0 0 18px;
        }
        .breadcrumb-content > ul > li {
            display: inline-block;
            list-style: none;
            position: relative;
            font-size: 14px;
            color: #333;
        }
        .breadcrumb-content > ul > li.active{
            color: #ff6a00;
        }
        .breadcrumb-content > ul > li:after {
            content: "/";
            vertical-align: middle;
            margin: 0 5px;
            color: #7a7a7a;
        }
        .breadcrumb-content > ul > li:last-child:after{
            display: none;
        }
        .mt-80 { margin-top: 80px }.mb-80 { margin-bottom: 80px }
        .single-product-name {
            font-size: 22px;
            text-transform: capitalize;
            font-weight: 900;
            color: #444;
            line-height: 24px;
            margin-bottom: 15px;
        }
        .single-product-reviews {
            margin-bottom: 10px;
        }
        .single-product-price {
            margin-top: 25px;
        }
        .single-product-action {
            margin-top: 30px;
            padding-bottom: 30px;
            border-top: 1px solid #ebebeb;
            border-bottom: 1px solid #ebebeb;
            float: left;
            width: 100%;
        }
        .product-discount {
            display: inline-block;
            margin-bottom: 20px;
        }
        .product-discount span.price {
            font-size: 28px;
            font-weight: 900;
            line-height: 30px;
            display: inline-block;
            color: #008bff;
        }
        .product-info {
            color: #333;
            font-size: 14px;
            font-weight: 400;
        }
        .product-info p {
            line-height: 30px;
            font-size: 14px;
            color: #333;
            margin-top: 30px;
        }
        .product-add-to-cart span.control-label {
            display: block;
            margin-bottom: 10px;
            text-transform: capitalize;
            color: #232323;
            font-size: 14px;
        }
        .product-add-to-cart {
            overflow: hidden;
            margin: 20px 0px;
            float: left;
            width: 100%;
        }
        .cart-plus-minus-box {
            border: 1px solid #e1e1e1;
            border-radius: 0;
            color: #3c3c3c;
            height: 49px;
            text-align: center;
            width: 50px;
            padding: 5px 10px;
        }
        .product-add-to-cart .cart-plus-minus {
            margin-right: 25px;
        }
        .cart-plus-minus {
            position: relative;
            width: 75px;
            float: left;
            padding-right: 25px;
        }
        .add-to-cart {
            background: #008bff;
            border: 0;
            border-bottom: 3px solid #0680e5;
            color: #fff;
            box-shadow: none;
            padding: 0 30px;
            border-radius: 3px;
            font-weight: 400;
            cursor: pointer;
            font-size: 14px;
            text-transform: capitalize;
            height: 50px;
            line-height: 50px;
        }
        .add-to-cart:hover {
            background: #ff6a00;
            border-color: #e96405;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">Simple Ecommerce</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="category.html">Categories <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.html">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.html">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="index.php?page=cart">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>
            </form>
        </div>
    </div>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">E-COMMERCE CATEGORY</h1>
        <p class="lead text-muted mb-0">Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte...</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.html">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sub-category</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="wrapper">

            <main>
                <div id="shopify-section-product-template" class="shopify-section">
                    <div class="single-product-area mt-80 mb-80">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="product-details-large" id="ProductPhoto">
                                        <img id="ProductPhotoImg" class="product-zoom" data-image-id="" alt="12. Aliexpress dropshipping by oberlo" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552">

                                    </div>
                                    <div id="ProductThumbs" class="product-thumbnail owl-carousel">
                                        <a class="product-single__thumbnail active" href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_1024x1024.jpg?v=1544416552" data-image-id="6995357106246">
                                            <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/36_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>

                                        <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_1024x1024.jpg?v=1544416552"
                                           data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_1024x1024.jpg?v=1544416552" data-image-id="6995358023750">
                                            <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/40_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>

                                        <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_1024x1024.jpg?v=1544416552"
                                           data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_1024x1024.jpg?v=1544416552" data-image-id="6995357302854">
                                            <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/37_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>

                                        <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_1024x1024.jpg?v=1544416552"
                                           data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_1024x1024.jpg?v=1544416552" data-image-id="6995357532230">
                                            <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/38_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>

                                        <a class="product-single__thumbnail " href="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_1024x1024.jpg?v=1544416552"
                                           data-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_1024x1024.jpg?v=1544416552" data-zoom-image="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_1024x1024.jpg?v=1544416552" data-image-id="6995357728838">
                                            <img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/products/39_compact.jpg?v=1544416552" alt="12. Aliexpress dropshipping by oberlo"></a>

                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="single-product-content">
                                        <form method="post" id="AddToCartForm" accept-charset="UTF-8" class="shopify-product-form" enctype="multipart/form-data">
                                            <input type="hidden" name="form_type" value="product" /><input type="hidden" name="utf8" value="✓" />
                                            <div class="product-details">
                                                <h1 class="single-product-name"><?php echo $product['name']?></h1>
                                                <div class="single-product-reviews">
                                                    <span class="shopify-product-reviews-badge" data-id="1912078270534"></span>
                                                </div>
                                                <div class="product-sku">SKU: <span class="variant-sku">YQT71020193</span></div>
                                                <div class="single-product-price">
                                                    <div class="product-discount"><span  class="price" id="ProductPrice"><span class=money>$ <?php echo $product['price']?></span></span></div>
                                                </div>
                                                <div class="product-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>

                                                <div class="single-product-action">
                                                    <div class="product-variant-option">
                                                        <select name="id" id="productSelect" class="product-single__variants" style="display:none;">
                                                            <option  selected="selected"  data-sku="YQT71020193" value="19506517377094">Default Title - <span class=money>$20.66 USD</span></option>

                                                        </select>
                                                        <script>
                                                            jQuery(function() {
                                                                jQuery('.swatch :radio').change(function() {
                                                                    var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
                                                                    var optionValue = jQuery(this).val();
                                                                    jQuery(this)
                                                                        .closest('form')
                                                                        .find('.single-option-selector')
                                                                        .eq(optionIndex)
                                                                        .val(optionValue)
                                                                        .trigger('change');
                                                                });
                                                            });
                                                        </script>
                                                    </div>
                                                    <style>.product-variant-option .selector-wrapper{display: none;}</style>
                                                    <div class="product-add-to-cart">
                                                        <span class="control-label">Quantity</span>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                                        </div>
                                                        <div class="add">
                                                            <button type="submit" class="add-to-cart ajax-spin-cart" id="AddToCart">
                                                                <i class="ion-bag"></i>
                                                                <span class="list-cart-title cart-title" id="AddToCartText">Add to cart</span>
                                                            </button>
                                                            <script>
                                                                jQuery('#AddToCart').click(function(e) {
                                                                    e.preventDefault();
                                                                    Shopify.addItemFromFormStart('AddToCartForm', 1912078270534);
                                                                });
                                                            </script>

                                                            <div class="single-product-wishlist">
                                                                <a class="add-to-cart action-wishlist wishlist" href="#" title="Wishlist"><i class="fa fa-heart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="secure-payment"><img src="http://cdn.shopify.com/s/files/1/0067/5617/1846/files/guaranteed_safe_checkout1.png?v=1545216773"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style type="text/css">.product-details .countdown-timer-wrapper{display: none !important;}</style>

                    <script>$(document).ready(function() {$('.fancybox').fancybox();});</script>
                    <script>function productZoom(){
                            $(".product-zoom").elevateZoom({
                                gallery: 'ProductThumbs',
                                galleryActiveClass: "active",
                                zoomType: "inner",
                                cursor: "crosshair"
                            });$(".product-zoom").on("click", function(e) {
                                var ez = $('.product-zoom').data('elevateZoom');
                                $.fancybox(ez.getGalleryList());
                                return false;
                            });

                        };
                        function productZoomDisable(){
                            if( $(window).width() < 767 ) {
                                $('.zoomContainer').remove();
                                $(".product-zoom").removeData('elevateZoom');
                                $(".product-zoom").removeData('zoomImage');
                            } else {
                                productZoom();
                            }
                        };

                        productZoomDisable();

                        $(window).resize(function() {
                            productZoomDisable();
                        });
                    </script>
                    <script>
                        $('.product-thumbnail').owlCarousel({
                            loop: true,
                            center: true,
                            nav: true,dots:false,
                            margin:10,
                            autoplay: false,
                            autoplayTimeout: 5000,
                            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                            item: 3,
                            responsive: {
                                0: {
                                    items: 2
                                },
                                480: {
                                    items: 3
                                },
                                992: {
                                    items: 3,
                                },
                                1170: {
                                    items: 3,
                                },
                                1200: {
                                    items: 3
                                }
                            }
                        });
                    </script>
                </div>
            </main>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Informations</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> My company</li>
                    <li><i class="fa fa-envelope mr-2"></i> email@example.com</li>
                    <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
                    <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-left">
                    <a href="#">Back to top</a>
                </p>
                <p class="text-right text-muted">created with <i class="fa fa-heart"></i> by <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>t-php</i></a> | <span>v. 1.0</span></p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>