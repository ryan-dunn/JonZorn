<?php 
/* 
Template Name: Zorn Song List
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
          <h1>Song List</h1>
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
        <div class="row">
		      <div class="col-sm-12 songpadding">
            <div class="chalkboard">
              <h1 id="songlisttitle">Song List</h1>
              <h3 class="aligncenter">I will learn songs upon request. <br>Click on an artist to view the songs.</h3>
              <div class="row">
                <div class="col-sm-4 chalkwrite">
                
                <?php
                $count_posts = wp_count_posts('zorn-songs')->publish;
                $count_posts_halfup = round($count_posts/2, 0, PHP_ROUND_HALF_UP);
                $count_posts_halfdown = round($count_posts/2, 0, PHP_ROUND_HALF_DOWN);

                //column 1 songs
                $zsongsloop = new WP_Query( array( 
                  'post_type' => 'zorn-songs', 
                  'posts_per_page' => $count_posts_halfup ,
                  'orderby' => 'title',
                  'order' => 'ASC'
                ) ); 

                if ( $zsongsloop->have_posts() ) : 
                  while ( $zsongsloop->have_posts() ) : $zsongsloop->the_post(); 
                    // 20 songs max per artist, setting acf variables
                    for ($songs = 1; $songs <= 20; $songs++) {
                      ${'song' . $songs} = get_field( 'song_' . $songs);
                    } 

                     //display song title ?>
                    <h1 class="songTitle"><?php echo the_title(); ?></h1>
                    <div class="songsInList">
                    <?php
                    for ($x = 1; $x <= 20; $x++) {
                      if(!empty(${'song' . $x})){
                      echo '<h2>' . ${'song' . $x} . '</h2>';
                      }
                    }?>
                    </div>

                  <?php
                  endwhile; wp_reset_query(); 
                else:?>
                <h1>No Songs To Display</h1>
                <?php endif;?>
                
                </div>
          
                <div class="col-sm-4 chalkwrite">
                <?php
                //column 2 songs
                $zsongsloop2 = new WP_Query( array( 
                  'post_type' => 'zorn-songs', 
                  'posts_per_page' => $count_posts_halfdown ,
                  'offset' => $count_posts_halfup,
                  'orderby' => 'title',
                  'order' => 'ASC'
                )); 

                if ( $zsongsloop2->have_posts() ) : 
                  while ( $zsongsloop2->have_posts() ) : $zsongsloop2->the_post(); 
                    for ($songs = 1; $songs <= 20; $songs++) {
                    ${'song' . $songs} = get_field( 'song_' . $songs);
                    } ?>

                    <h1 class="songTitle"><?php echo the_title(); ?></h1>

                    <div class="songsInList">
                    <?php
                    for ($x = 1; $x <= 20; $x++) {
                      if(!empty(${'song' . $x})){
                        echo '<h2>' . ${'song' . $x} . '</h2>';
                      } 
                    }?>
                    </div>

                  <?php
                  endwhile; 
                  wp_reset_query(); 
                else:?>
                  <h1>No Songs To Display</h1>
                <?php endif;?>
                </div>
                
                <div class="col-sm-4 chalkwrite">
                <?php
                $zsongsloop2 = new WP_Query( array( 
                  'post_type' => 'zorn-songs', 
                  'posts_per_page' => 1 ,
                  'p' => 172
                )); 

                if ( $zsongsloop2->have_posts() ) : 
                  while ( $zsongsloop2->have_posts() ) : $zsongsloop2->the_post(); 
                    for ($songs = 1; $songs <= 20; $songs++) {
                    ${'song' . $songs} = get_field( 'song_' . $songs);
                    } ?>

                    <h1 class="songTitleZ"><?php echo the_title(); ?></h1>

                    <?php for ($x = 1; $x <= 20; $x++) {
                      if(!empty(${'song' . $x})){
                      echo '<h2>' . ${'song' . $x} . '</h2>';
                      }
                    }

                   endwhile; wp_reset_query(); 
                else:?>
                <h1>No Songs To Display</h1>
                <?php endif;?>
                </div>
              </div>
            </div><?php //end chalkboard ?>    
      		</div>
      	</div>
      </div>
    </div>
  </div>
</div><?php //end song list container ?>
<script>
var songTitle = document.getElementsByClassName("songTitle");
var i;
for (i = 0; i < songTitle.length; i++) {
    songTitle[i].onclick = function(){
      this.classList.toggle("activeSong");
      this.nextElementSibling.classList.toggle("show");
  }
}
</script>
<?php get_footer(); ?>
