<div class="container">
  <div class="row col-md-12 no-pad">
    <div class="col-sm-12 col-md-8 article-body">
<!-- TOP -->
<?php
/**
 * The loop that displays posts
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
	  <?php
	  /* Start the Loop */
	  if (have_posts()) : while (have_posts()) : the_post();
	  $date_format = get_option( 'date_format' );
	  ?>
      <div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- check if the post has a Post Thumbnail assigned to it. -->
        <?php if ( is_singular() && has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'full' ); ?>
        <?php elseif ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail( 'thumbnail' ); ?>
        </a>
        <?php endif; ?>
        <?php if ( !is_singular() ) : ?>
        <h2 class="blog-post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php esc_attr_e( 'Permanent Link to ', 'bootstrapcanvaswp' ) . esc_attr( the_title_attribute() ); ?>">
        <?php the_title(); ?></a></h2>
        <?php else : ?>
        <h2 class="blog-post-title"><?php the_title(); ?></a></h2>
        <?php endif; ?>
        <?php if ( !get_the_title() ) : ?>
        <!-- <p class="blog-post-meta"><span class="glyphicon glyphicon-calendar"></span> <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php esc_attr_e( 'Permanent Link to ', 'bootstrapcanvaswp' ) . get_the_title() ? esc_attr( the_title_attribute() ) : esc_attr_e( '[No Title]', 'bootstrapcanvaswp' ); ?>"><?php the_time( $date_format ) ?></a> by <span class="glyphicon glyphicon-user"></span> <?php the_author_link() ?></p> -->
        <?php else : ?>
        <!-- <p class="blog-post-meta"><span class="glyphicon glyphicon-calendar"></span> <?php the_time( $date_format ) ?> by <span class="glyphicon glyphicon-user"></span> <?php the_author_link() ?></p> -->
        <?php endif; ?>

        <?php if ( has_tag() ) : ?>
          <p class="blog-post-meta tags"><?php the_tags( __( '', 'bootstrapcanvaswp' ) ); ?></p>
        <?php endif; ?>





<div class="credits-social">
  by <span class="name"><?php the_author(); ?></span>&nbsp;&nbsp;&nbsp;<div class="clock-align"><div class="fa fa-clock-o" aria-hidden="true"></div></div>&nbsp;&nbsp;<?php the_date(); ?>



&nbsp;&nbsp;<div class="icon-cover"><a class="fbsharelink" target="_blank" href="https://www.facebook.com/dialog/feed?app_id=184683071273&amp;link=http%3A%2F%2Flocalhost%3A8888%2Ffind-great-domain%2F&amp;picture=https%3A%2F%2Fdonuts.domains%2Fwp-content%2Fuploads%2F2017%2F09%2Fslide-woman-w-camera.jpg&amp;name=Article%20Title"><div class="fa fa-facebook-square" aria-hidden="true"></div></a></div>
&nbsp;<div class="icon-cover"><a class="twsharelink" target="_blank" href="http://twitter.com/share?text=Article%20Title&amp;url=http%3A%2F%2Flocalhost%3A8888%2Ffind-great-domain%2F"><div class="fa fa-twitter-square" aria-hidden="true"></div></a></div>
&nbsp;<div class="icon-cover"><a class="lisharelink" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%3A8888%2Ffind-great-domain%2F&amp;title=Article%20Title"><div class="fa fa-linkedin-square" aria-hidden="true"></div></a></div>













 <span class="social">
Share:
</span>
</div>




        <?php
		/* Include the post format-specific template for the content. If you want to
		 * this in a child theme then include a file called called content-___.php
		 * (where ___ is the post format) and that will be used instead.
		 */
		get_template_part( 'content', get_post_format() ); ?>
        <?php
          $link_args = array(
            'before'           => '<ul class="pager">',
            'after'            => '</ul>',
            'next_or_number'   => 'next',
            'separator'        => '<li>',
            'nextpagelink'     => __( 'Next &rarr;', 'bootstrapcanvaswp' ),
            'previouspagelink' => __( '&larr; Previous', 'bootstrapcanvaswp' )
          );
          wp_link_pages( $link_args );
        ?>
        <p class="blog-post-meta">
        <?php if ( is_single() ) : ?>
        <!-- <span class="glyphicon glyphicon-folder-open"></span> Posted in <?php the_category(', ') ?> -->
        <!-- <strong>|</strong> -->
        <?php endif; ?>
        <?php if ( is_user_logged_in() ) : ?>
        <!-- <?php edit_post_link(__( 'Edit', 'bootstrapcanvaswp' ),'<span class="glyphicon glyphicon-pencil"></span> ','<strong> |</strong>'); ?> -->
        <?php endif; ?>
        <!-- <span class="glyphicon glyphicon-comment"></span> <?php comments_popup_link( __( 'No Comments', 'bootstrapcanvaswp' ), __( '1 Comment', 'bootstrapcanvaswp' ), __( '% Comments', 'bootstrapcanvaswp' ) ); ?></p> -->

        <?php comments_template(); ?>
      </div><!-- /.blog-post -->
      <!--
      <?php trackback_rdf(); ?>
      -->
      <?php endwhile; ?>

      <?php
	  global $wp_query;
	  if ( $wp_query->max_num_pages > 1 ) :
	  ?>
      <nav>
        <ul class="pager">
          <li><?php next_posts_link( __( '<span class=\"meta-nav\">&larr;</span> Older posts', 'bootstrapcanvaswp' ) ); ?></li>
          <li><?php previous_posts_link( __( 'Newer posts <span class=\"meta-nav\">&rarr;</span>', 'bootstrapcanvaswp' ) ); ?></li>
        </ul>
      </nav>
      <?php endif; ?>

      <?php else : ?>
        <?php if ( current_user_can( 'edit_posts' ) ) :
			// Show a different message to a logged-in user who can add posts.
		?>
          <h2 class="center"><?php _e( 'No posts to display', 'bootstrapcanvaswp' ); ?></h2>
          <p class="center">
          <?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'bootstrapcanvaswp' ), admin_url( 'post-new.php' ) ); ?></p>
        <?php else :
			// Show the default message to everyone else.
		?>
          <h2 class="center"><?php _e( 'Nothing Found', 'bootstrapcanvaswp' ); ?></h2>
          <p class="center">
          <?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'bootstrapcanvaswp' ); ?></p>
		  <?php get_search_form(); ?>
        <?php endif; // end current_user_can() check ?>
      <?php endif; ?>


<div class="share bottom-of-article text-center">
<span class="social">Share:</span>


<div class="icon-cover"><a class="lisharelink" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=http%3A%2F%2Flocalhost%3A8888%2Ffind-great-domain%2F&amp;title=Article%20Title"><div class="fa fa-linkedin-square" aria-hidden="true"></div></a></div>
<div class="icon-cover"><a class="twsharelink" target="_blank" href="http://twitter.com/share?text=Article%20Title&amp;url=http%3A%2F%2Flocalhost%3A8888%2Ffind-great-domain%2F"><div class="fa fa-twitter-square" aria-hidden="true"></div></a></div>
<div class="icon-cover"><a class="fbsharelink" target="_blank" href="https://www.facebook.com/dialog/feed?app_id=184683071273&amp;link=http%3A%2F%2Flocalhost%3A8888%2Ffind-great-domain%2F&amp;picture=https%3A%2F%2Fdonuts.domains%2Fwp-content%2Fuploads%2F2017%2F09%2Fslide-woman-w-camera.jpg&amp;name=Article%20Title"><div class="fa fa-facebook-square" aria-hidden="true"></div></a></div>
</div>
</div>
<!-- end of 8 -->
<!-- beggingin of four -->


<!-- related articles sidebar -->
<div class="col-sm-12 col-md-4 related-articles-column" style="display: none;">
  <h4 class="article-title mt50">Related Articles</h4>

    <div class="landing-panel l-grey">
      <div class="top-links"><a href="articlelink">article <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        <h4>getting eheader</h4>
        <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
        <a class="cta-link" href="learnmorelink">learn more <i class="fa fa-chevron-right"></i></a>
      <div class="trending-tags">
      branded links text      </div>
    </div>
    <div class="landing-panel l-grey">
      <div class="top-links"><a href="articlelink">article <i class="fa fa-external-link" aria-hidden="true"></i></a></div>
        <h4>getting eheader</h4>
        <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
        <a class="cta-link" href="lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum">lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum <i class="fa fa-chevron-right"></i></a>
      <div class="trending-tags">
      lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum      </div>
    </div>
</div>

<!-- related articles sidebar -->




</div>
</div>
<br><br><br><br><br>
<!-- BOTTOM -->
