<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage WeDoWeb
 * @since We do web 1.0
 */

get_header();
?>
    <div class="container-fluid" id="main">
      <div class="row search-container">
          <div class="form-inline search" id="form">
              <div class="form-group d-flex">
                  <label for="" class="label-form mr-2">Search by #</label>
                  <div class="input-group">
                      <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2" id="search">
                      <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="29.347" height="29.934" viewBox="0 0 29.347 29.934">
                              <g id="surface1" transform="translate(-0.109 0)">
                                <path id="Trazado_1" data-name="Trazado 1" d="M20.555,17.763a11.255,11.255,0,1,0-3.462,3.188l8.3,8.25a2.356,2.356,0,0,0,3.416-3.245c-.028-.03-.056-.058-.086-.086Zm-9.194.769a7.254,7.254,0,1,1,.005,0Zm0,0" transform="translate(0 0)" fill="#fff"/>
                              </g>
                          </svg>
                        </span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row hidden" id="cards">
      <?php

        $q=new WP_Query(array('post_type'=>'galeria_imagenes', 'post_status' => 'publish', 'order' => 'DESC'));
        if($q->have_posts()):
        while($q->have_posts()):
          $q->the_post(); 
            
      ?>
      <div class="col-lg-4 col-md-6 col-sm-12 p-0 item-cards">
            <div class="d-flex flex-row">
                <img class="img-fluid pic" src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" alt="<?php echo the_title() ?>" >
            </div>
            <div class="d-flex flex-row photographer-data">
                <div class="d-flex px-2 align-items-center">
                  <?php 
                    $get_author_id = get_the_author_meta('ID');
                    $get_author_avatar = get_avatar_url($get_author_id);
                    $name = get_the_author_meta('name');
                  ?>
                  <img class="avatar rounded-circle" src="<?php echo $get_author_avatar ?>" alt="<?php echo $name ?>">
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <p class="p-0 m-0 photographer-name">
                      <?php the_author_meta( 'user_nicename' , $author_id );?>
                    </p>
                    <p class="p-0 m-0 photographer-tag">
                    <?php 
                      $tags = wp_get_post_terms($post->ID, 'post_tag', array("fields" => "all"));
                      foreach ($tags as $tag) {
                        echo '#'.$tag->name ;
                      }
                    ?>
                    </p>
                </div>
            </div>    
        </div>
      <?php
        endwhile;
        endif;
      ?>
      </div>
      <div class="row justify-content-center hidden" id="loadmore-content">
        <div class="d-flex">
          <a class="m-0 p-0 loadmore" id="link-more">Load more</a>
        </div>
      </div>
      <div class="row justify-content-center my-5" id="spinner">
        <div class="spinner-grow" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>
    </div>
<?php
get_footer();
