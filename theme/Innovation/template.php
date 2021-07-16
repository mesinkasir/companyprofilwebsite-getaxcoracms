<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
$innov_settings = Innovation_Settings();
include('header.inc.php'); 
?>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Menu</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="mailto:creativebydre@gmail.com"><span class="material-icons">
alternate_email
</span>creativebydre@gmail.com</a>
        <a class="mdl-navigation__link" href="https://wa.me/6285646104747"><span class="material-icons">
comment
</span>+6285646104747</a>
        <a class="mdl-navigation__link" href="tel:+6287819355589"><span class="material-icons">
settings_cell
</span>+6287819355589</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="<?php get_site_url(); ?>">
	  <span class="material-icons">
home
</span>
	  Home</a>
      <a class="mdl-navigation__link" href="<?php get_site_url(); ?>index.php?id=about-us">
	  <span class="material-icons">
touch_app
</span>
	  About</a>
      <a class="mdl-navigation__link" href="<?php get_site_url(); ?>index.php?id=we-service">
	  <span class="material-icons">
grade
</span>Services</a>
      <a class="mdl-navigation__link" href="<?php get_site_url(); ?>index.php?id=contact-us">
	  <span class="material-icons">
contacts
</span>Contact</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --></div>
  </main>
</div>

	<div class="container-fluid">
		<!-- page content -->
<div class="row">
<div class="col-12 col-md-12 p-3 p-md-5">
				<h1 class="text-center"><strong><a href="<?php get_page_url(); ?>"><?php get_page_title(); ?></a></strong></h1>
				<p class="text-center">Published on <time datetime="<?php get_page_date('Y-m-d'); ?>" pubdate><?php get_page_date('F jS, Y'); ?></time></p>
				<?php get_page_content(); ?>
			</div>
</div>
<nav class="breadcrumb justify-content-center bg-white">
  <ol class="breadcrumb bg-dark text-light p-3">
			 <li class="breadcrumb-item">
				<a href="<?php get_site_url(); ?>">Home</a> </li>
				<li class="breadcrumb-item">
				<?php Innovation_Parent_Link(get_parent(FALSE)); ?> <b><?php get_page_clean_title(); ?></b>
				</li> 
				<li class="breadcrumb-item"><a href="<?php get_site_url(); ?>" id="logo" ><?php get_site_name(); ?></a></li>
			</ol></nav>
</div>
<?php include('footer.inc.php'); ?><script src='https://cdn.jsdelivr.net/npm/vue/dist/vue.js'></script><script src='https://mesinkasir.github.io/larapos/pos/gallerya.js'></script>
