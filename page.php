<?php get_header(); 
?>

  <div class="row is-flex">
    <div class="col-xs-12 col-sm-6"> 
    <div class="aligncenter">
      <img src="<?php echo get_field('main_image'); ?>" class="purpborder aligncenter mainimg">
      <div class="turntableOut">
      <img src="http://www.jonzorn.com/wp-content/uploads/turntable-inner.png" class="aligncenter" id="noSpinny" onClick="play()">
      </div>
      <audio id="zornaudio" src="<?php echo get_field('song_url'); ?>" ontimeupdate="get_time()"></audio>
      <h2 class="aligncenter spinclick" id="zongTitle" onClick="play()">Click To Play</h2>
      <h2 id="audio-time">0 : 0 / 0 : 0</h2>

<script>
function play() {
    var audio = document.getElementById('zornaudio');
    if (audio.paused) {
        audio.play();
        document.getElementById("noSpinny").className = "spinny";
        document.getElementById('zongTitle').innerHTML = "<?php echo get_field('song_title'); ?> by Jon Zorn";
    }else{
        audio.pause();
        audio.currentTime = 0
        document.getElementById("noSpinny").className = "";
        document.getElementById('zongTitle').innerHTML = "Click To Play";
    }
}

function get_time() {
var audio = document.getElementById('zornaudio');
var currentTimeS =  Math.floor(audio.currentTime);
var durationS = Math.floor(audio.duration);
var currentTimeM = Math.floor(currentTimeS / 60);
var currentTimeR = Math.floor(currentTimeS-(currentTimeM*60))
var durationM = Math.floor(durationS / 60);
var durationR = Math.floor(durationS-(durationM*60));
document.getElementById('audio-time').innerHTML = currentTimeM + ' : ' + currentTimeR + ' / ' + durationM + ' : ' + durationR;
}
</script>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="chalkboard">
      <h1 id="perftitle">Performance Schedule</h1>
<div class="chalklistings">
      <?php 
      $eventsArray = array( 
                    'post_type' => 'zorn-events', 
                    'posts_per_page' => -1 ,
                    'meta_key' => 'date',
                  'orderby' => 'meta_value_num',
                  'order' => 'ASC'
                    );
      $zeventsloop = new WP_Query( $eventsArray ); 
if ( $zeventsloop->have_posts() ) : 
while ( $zeventsloop->have_posts() ) : $zeventsloop->the_post(); 
$website = get_field( 'website'); 
$date = get_field( 'date');
$dateUse = new DateTime($date);
$location = get_field( 'location');
$private_party = get_field('private_party');

//expiration of posts after event has ended after 1 day.
if(strtotime("now") > strtotime($date)){ 
wp_schedule_single_event( time() + 86400, 'Expiration', array(get_the_ID()) );
} 
?>

<div class="row  vcenter">
    <div class="col-md-3 col-sm-5 col-xs-12">
    <h1 id="title"><?php  //echo substr($date, 4);
    echo $dateUse->format('m/d'); ?></h1>
    </div>
    <div class="col-md-9 col-sm-7 col-xs-12 chalkwrite">
    <?php if($private_party == 'No'){ ?>
    <span id="loc"><? echo the_title();?></span><br>
    <span id="details"><a href="<?php echo $website; ?>" target="_blank">Website</a> | <a href="http://maps.google.com?q=<?php echo $location['address'] ?>" target=_blank">Directions/Info</a>
    <?php //if(strtotime("now") > strtotime($date)){ echo "expired";} ?></span>
    <?php } else {?>
    <span id="loc">Private Party</span>
    <?php } ?>
    </div> 
    </div>

   

    <div class="row vcenter">
    <div class="col-sm-12 chalkhr">
-------------------------------
    </div>
    </div>
<?php endwhile; wp_reset_query(); 
else:?>
<div class="row  vcenter">
    <div class="col-sm-12">
    <h1 id="title">There are no upcoming events at this time.</h1>
    </div>
    </div>
<?php endif;?>
</div>
<div class="row  vcenter">
    <div class="col-sm-12" id="booking">
<h2 class="aligncenter" id="scrollZ">The Latest From Jon Zorn Below<br>V</h2>
    </div>
    </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div> <?php /*end main back/container-fluid*/?>

<script>
var h = jQuery(window).height();
var w = jQuery(window).width();
var zornNav = document.getElementById("zorn-nav");
var booking = document.getElementById("booking");
var perftitle = document.getElementById("perftitle");
var mainback = document.getElementById("mainback");
if(h > 970){
 jQuery('.mainback').css('height', h);
}
if(w > 768){
jQuery('.chalkboard').css('height', mainback.clientHeight-zornNav.clientHeight);
jQuery('.chalklistings').css('height', mainback.clientHeight-zornNav.clientHeight-booking.clientHeight-perftitle.clientHeight-61.9);
}else{
  jQuery('.chalkboard').css('height', 650);
  jQuery('.chalklistings').css('height', 650-perftitle.clientHeight-48.5);
}

jQuery(document).ready(function(){
    jQuery("#scrollZ").click(function(){
        jQuery("html,body").animate({scrollTop: h});
    });
});

</script>

<div class="container-fluid socback">
  <div class="row">
	<div class="col-sm-12">
		<div class="container">
  		<div class="row">
		<div class="col-sm-12">
		<div class="row is-flex">
    <div class="col-sm-12"> 
    <div class="aligncenter">
    <img src="http://www.jonzorn.com/wp-content/uploads/instalogo.png" class="aligncenter soclogo">
<?php echo do_shortcode('[instagram-feed]'); ?>
 

    </div>
    </div>
    <?php /** FB FEED ?>
<div class="col-sm-6"> 
<div class="aligncenter">
    <img src="http://www.jonzorn.com/wp-content/uploads/fblogo.png" class="aligncenter soclogo">

<?php for($x = 0; $x < 3; $x++){?>
    <div class="row">
    <div class="col-sm-12">
    <div class="fb">
    <p>Bacon ipsum dolor amet picanha pork loin pastra mi landjaeger fatback jerky. Doner kielbasa jowl fatback jerky. Meatloaf beef ribs brisket porchetta ground round pork chop filet mignon pig, landjaeger ham hock.</p>
    <p id="fbshare">View on Facebook | Share</p>
    </div>
    </div>
    </div>
<?php } ?>

    </div>
    </div>
    <?php */ ?>
</div>
		</div>
		</div>
		</div>
		</div>
		</div>
		</div>
<?php get_footer(); ?>
