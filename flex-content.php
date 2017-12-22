

<?php if( have_rows('tld_information_modules') ):

     // loop through the rows of data
    while ( have_rows('tld_information_modules') ) : the_row();

// first item
    if( get_row_layout() == 'domain_specific_header' ):
    include 'domain-specific-header.php';
    // first item

// following item
    elseif( get_row_layout() == 'three_column_info_module' ):
    include 'three-col-info.php';
    // following item

// following item
    elseif( get_row_layout() == 'dark_testimonials_panel' ):
    include 'dark-testimonials-panel.php';
    // following item

// following item
    elseif( get_row_layout() == 'domain_info_panel' ):
    include 'domain-info-panel.php';
    // following item

// following item
    elseif( get_row_layout() == 'domains_in_action_panel' ):
    include 'domains-in-action.php';
    // following item

// following item
    elseif( get_row_layout() == 'grey_examples_panel' ):
    include 'grey-examples-panel.php';
    // following item

// following item
    elseif( get_row_layout() == 'single_article' ):
    include 'single-article.php';
    // following item

// following item
    elseif( get_row_layout() == 'category_testimonials' ):
    include 'category-testimonials.php';
    // following item

// following item
    elseif( get_row_layout() == 'example_sites' ):
    include 'example-sites.php';
    // following item

// following item
    elseif( get_row_layout() == 'category_articles_and_resources' ):
    include 'category-articles-resources.php';
    // following item

// following item
    elseif( get_row_layout() == 'great_domains_panel' ):
    include 'great-domains-panel.php';
    // following item

// following item
    elseif( get_row_layout() == 'new_page_header' ):
    include 'new-page.php';
    // following item

// following item
    elseif( get_row_layout() == 'search_bar' ):
    include 'search-bar.php';
    // following item

// following item
    elseif( get_row_layout() == 'four_part_landing_panel' ):
    include 'four-part-landing.php';
    // following item

// following item
    elseif( get_row_layout() == 'related_articles_panel' ):
    include 'related-articles.php';
    // following item

// end
// end
// end
        endif;

    endwhile;

else :

    // no layouts found

endif;

?>
