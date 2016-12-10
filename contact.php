<?php 
/* 
Template Name: Zorn Contact
Author:Ryan Dunn
URL: http://www.ryandunn.design
 */ 

get_header(); ?>

</div>
</div>
</div>
</div> <?php /*end main back/container-fluid*/?>

<div class="container-fluid greenhead">
  <div class="row">
    <div class="col-sm-12">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
          <h1>Contact Jon Zorn</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid aboutback">
  <div class="row">
    <div class="col-sm-12">
      <div class="container">
        <div class="row is-flex">
          <div class="col-sm-12 col-md-6 aligncenter">
          <h2><?php echo get_field('contact_para'); ?></h2>
          <?php echo do_shortcode('[formidable id=pgd2m]'); ?>
		      </div>
          
          <div class="col-sm-6 zornhide">
          <img src="http://www.jonzorn.com/wp-content/uploads/contact-zorn.png" class="contact-zorn-pic">
          </div>
		    </div>
		  </div>
		</div>
	</div>
</div>

<?php /* NO CONTACT INFO REQUESTED BY JON ZORN

<div class="container-fluid blueback">
  <div class="row">
  <div class="col-sm-12">
    <div class="container">
      <div class="row">
    <div class="col-sm-12">
<img src="http://www.jonzorn.com/wp-content/uploads/contact-l1.png" class="c-l1">
</div>
</div>

<div class="row">
    <div class="col-sm-12">
    <img src="http://www.jonzorn.com/wp-content/uploads/contact-l2.png" class="zContact-img">
<h1 class="zContact-h1"><a href="tel:4108686899">(410)868-6899</a></h1>
</div>
</div>

<div class="row">
    <div class="col-sm-12">
    <img src="http://www.jonzorn.com/wp-content/uploads/contact-l3.png" class="zContact-img">
<h1 class="zContact-h1"><a href="mailto:zornjon@gmail.com">zornjon@gmail.com</a></h1>
</div>
</div>

<div class="row">
    <div class="col-sm-12">
<img src="http://www.jonzorn.com/wp-content/uploads/contact-l4.png" class="c-l4">
</div>
</div>
</div>
</div>
</div>
</div> 
*/ ?>
<?php get_footer(); ?>
