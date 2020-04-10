
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
36
37
38
39
40
<?php
/**
 * The template for displaying search results pages.
 *
 * @package stackstar.
 */
 
get_header(); ?>
    <div class="search-container">
    <section id="primary" class="content-area">

	


        <main id="main" class="site-main" role="main">
        <div class="search-page-form" id="ss-search-page-form"><?php get_search_form(); ?></div>
 
        <?php if ( have_posts() ) : ?>
 
            <header class="page-header">
                <span class="search-page-title"><?php printf( esc_html__( 'Search Results for: %s', stackstar ), '<span>' . get_search_query() . '</span>' ); ?></span>
            </header><!-- .page-header -->
 
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <span class="search-post-title"><?php the_title(); ?></span>
            <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
            <span class="search-post-link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></span>
 
            <?php endwhile; ?>
 
            <?php //the_posts_navigation(); ?>
 
        <?php else : ?>
 
            <?php //get_template_part( 'template-parts/content', 'none' ); ?>
 
        <?php endif; ?>
 
        </main><!-- #main -->
    </section><!-- #primary -->
</div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>