<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ot3d
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="wrapper">
   <header class="header _header-resize _header-show _show _cart">
      <div class="header__top ">
         <div class="header__top-content _container">
            <ul data-spollers="767,max" data-da=".header__menu-content,767,1" class="header__top-list">
               <li><a href="" class="header__top-link">Способы оплаты</a></li>
               <!--<li><a href="" class="header__top-link">Новинки</a></li>-->
               <!--<li><a href="" class="header__top-link">Видео</a></li>-->
               <li class="sub-menu-title ">
                  <span class="header__top-link sub-menu__arrow _not-link">Социальные сети</span>
                  <span data-spoller class="arrow-down _arrow _header">
                     <span class="arrow-down-content"></span>
                  </span>
                  <div class="sub-menu header__sub-menu">
                     <ul class="sub-menu__list">
                        <li><a href="" class="sub-menu__link icon-instagram">Инстаграм</a></li>
                        <li><a href="" class=" sub-menu__link icon-telegram">Телеграм</a></li>
                        <li><a href="" class="sub-menu__link icon-facebook">Facebook</a>
                        </li>
                        <li><a href="" class="sub-menu__link icon-youtube">YouTube</a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li><a href="" class="header__top-link _link-phone">+38 (067) 829 30 30</a></li>
            </ul>
            <div class="header__sign">
               <a href="#" data-pop=".reg__popap" class="header__login"><span class="icon-login"></span>Вход</a>
               <a href="#" data-pop=".reg__popap"
                  class="header__register waves-effect waves-light _orange-button">Регистрация</a>
            </div>
         </div>
      </div>
      <div class="header__bottom">
         <div class="header__bottom-content _container">
            <a rel="home" href="

            <?php echo ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/ot3d/';?>

            " data-da=".header__top-content,767,0" class="header__logo">
               <img src="<?php echo get_template_directory_uri()."/assets/img/logo.svg"?>" alt="">
               <img src="<?php echo get_template_directory_uri()."/assets/img/logo-mob.svg"?>" alt="">
            </a>
            <div class="header__logo _mob _ibg">
               <img src="<?php echo get_template_directory_uri()."/assets/img/logo.svg"?>" alt="">
            </div>
            <nav class="header__menu _show _header-show _header-resize _menu-open"> 
               <div class="header__menu-content">
                  <ul class="header__bottom-list">
                     <li class="header__bottom-link"><a href="#">Магазин</a></li>
                     <li class="header__bottom-link"><a href="#">Аккаунт</a></li>
                     <li class="header__bottom-link"><a href="#">Каталог</a></li>
                  </ul>
               </div>
            </nav>
            <div class="header__search">
               <span class="icon-find"></span>
               <!--<input type="text" placeholder="Поиск">-->
               <?php aws_get_search_form( true ); ?>
            </div>
            <div class="header__info">
               <div class="header__find__button">
                  <span class="icon-find"></span>
               </div>
               <!--<div class="header__favorite">
                  <span class="icon-heart"></span>
                  <span class="favorite-number _num"></span>
               </div>-->
               <a style="color: var(--dark)" href="cart" class="header__cart">
                  <span class="icon-cart"></span>
                  <!--<span class="header__cart-num _num"></span>-->
               </a>
               <div class="header__price">0$</div>
               <span class="header__burger waves-effect">
                  <div class="header__burger-body _menu-open">
                     <span></span>
                  </div>
               </span>
            </div>
         </div>
      </div>
      <?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked ot3d_header_container                 - 0
		 * @hooked ot3d_skip_links                       - 5
		 * @hooked ot3d_social_icons                     - 10
		 * @hooked ot3d_site_branding                    - 20
		 * @hooked ot3d_secondary_navigation             - 30
		 * @hooked ot3d_product_search                   - 40
		 * @hooked ot3d_header_container_close           - 41
		 * @hooked ot3d_primary_navigation_wrapper       - 42
		 * @hooked ot3d_primary_navigation               - 50
		 * @hooked ot3d_header_cart                      - 60
		 * @hooked ot3d_primary_navigation_wrapper_close - 68
		 */
		do_action( 'ot3d_header' );
		?>

      <script>
         document.querySelector('.wrapper').style.paddingTop = document.querySelector('.header').offsetHeight + 'px';
         function ibg() {
            let ibg = document.querySelectorAll("._ibg");
            for (var i = 0; i < ibg.length; i++) {
               if (ibg[i].querySelector('img')) {
                  ibg[i].style.backgroundImage = 'url(' + ibg[i].querySelector('img').getAttribute('src') + ')';
               }
            }
         }
         ibg();
      </script>
   </header>