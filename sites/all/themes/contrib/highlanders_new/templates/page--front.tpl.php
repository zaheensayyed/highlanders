<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/garland.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="row">
                <div class="col-md-3 hidden-xs logo-row">
                    <div class="logo-highland">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                     </div>
                </div>
                <div class="col-md-9">
                    <a class="navbar-brand page-scroll site-name" href="#page-top">The Highland AdvenTourist</a>
                </div>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php 
               if (module_exists('i18n_menu')) {
                  $main_menu_tree = i18n_menu_translated_tree(variable_get('  ', 'main-menu'));
               } else {
                  $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
               }
               print drupal_render($main_menu_tree);
            ?>

            <!-- <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Destination <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Ladhak</a></li>
                    </ul>
                </li>
                <li><a href="#">Adventure Destinations <span class="caret"></span></a></li>
                <li><a href="#">Corporate <span class="caret"></span></a></li>
                <li><a href="#">College <span class="caret"></span></a></li>
                <li><a href="#">Travelouge</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
            </ul> -->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<div id="page-top"></div>
<section class="home-slider">
        <div class="row">
            <div class="col-md-12">
               <?php print render($page['homeslider']); ?>
            </div>
        </div>
    </section>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Upcomming Events</h2>
                    <hr class="light">
                    <!-- <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p> -->
                    <!-- <a href="#" class="btn btn-default btn-xl">Get Started!</a> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <?php print render($page['upcoming_events']); ?>
            <div class="col-md-2"></div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Events</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-industry wow bounceIn text-primary"></i>
                        <h3>Industrial visits</h3>
                        <p class="text-muted">Industrial visits packages are too available, contact us for more info.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-black-tie wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Corporate Events</h3>
                        <p class="text-muted">Corporate Events packages are too available, contact us for more info.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-road wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Road Trips</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paw wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Jungle Safari</h3>
                        <p class="text-muted">You have to make your trip with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-industry wow bounceIn text-primary"></i>
                        <h3>Industrial visits</h3>
                        <p class="text-muted">Industrial visits packages are too available, contact us for more info.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-black-tie wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Corporate Events</h3>
                        <p class="text-muted">Corporate Events packages are too available, contact us for more info.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-road wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Road Trips</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paw wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Jungle Safari</h3>
                        <p class="text-muted">You have to make your trip with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Travelouges</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <?php print render($page['travelouges']); ?>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <a href="/contact-us" class="btn btn-default btn-xl wow tada">Contact us</a>
            </div>
        </div>
    </aside>
    <div class="footer-container">
         <div class="container">
            <div class="row">
                <div class="col-md-4 text-center logo-highland-footer">
                  <div class="">
                     <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                     </a>
                  </div>
                </div>
                <div class="col-md-4 address-footer">
                    <p>301, A.R Street, 5th Floor, <br>
                        Mumbai - 400003,<br> 
                        India
                    </p>
                    <div class="row">
                        <div class="col-sm-1"><i class="fa fa-envelope-o">&nbsp;</i></div>
                        <div class="col-sm-11">travel.highlanders@gmail.com</div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-1"><i class="fa fa-phone">&nbsp;</i></div>
                        <div class="col-sm-11">+91-22-23423965<br>+91- 8888868552<br>+91- 9594046755</div>
                    </div>
                </div>
                <div class="col-md-4 social-footer">
                  <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4"><a class="social-icons" href=""><i class="fa fa-facebook-square"></i></a></div>
                            <div class="col-md-4"><a class="social-icons" href=""><i class="fa fa-twitter-square"></i></a></div>
                            <div class="col-md-4"><a class="social-icons" href=""><i class="fa fa-instagram"></i></a></div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- 
<div class="container content">
   <div class="row header">
      <div class="col-md-2">
        <!-- Logo Here
         <?php if ($logo): ?>
            <div id="logo">
               <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            </div>
         <?php endif; ?>
      </div>
      <div class="col-md-10">
         <!-- Menu Here
             <div id="navbar" class="navbar-collapse collapse">

            <?php 
               if (module_exists('i18n_menu')) {
                  $main_menu_tree = i18n_menu_translated_tree(variable_get('  ', 'main-menu'));
               } else {
                  $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
               }
               print drupal_render($main_menu_tree);
            ?>
         </div>
      </div>
   </div>
   <div class="row slider">
      <div class="col-md-12 padding-20-all">
        <!-- Slider here 
      </div>
   </div>
   <div class="row upcomming-events">
      <div class="col-md-4">
        <!-- Upcomming event 1 
              </div>
      <div class="col-md-4">
        <!-- Upcomming event 2 
      </div>
      <div class="col-md-4">
        <!-- Upcomming event 3
      </div>
   </div>
   <div class="row main-content">
      <div class="col-md-9 left-content">
        <!-- left main content here
      </div>
      <div class="col-md-3 right-content">
        <!-- Right side bar here
      </div>
   </div>
   <div class="row">
      <div class="col-md-12">
        <!-- Footer here
      </div>
   </div>
</div> -->