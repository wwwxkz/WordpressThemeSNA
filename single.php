<?php get_header(); ?>

<div id="container-container-sidebar">
    <div id="sidebar-3">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
    <div id="sidebar-1">
        <h2>Publicado</h2>
        <?php the_time( 'F j, Y' );?>
        <h2>Categoria</h2>
        <?php the_category() ?>
        <h2>Tags</h2>
        <?php 
            $post_tags = get_the_tags();
            if ( ! empty( $post_tags ) ) {
                echo '<ul>';
                foreach( $post_tags as $post_tag ) {
                    echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
                }
                echo '</ul>';
            }
        ?>
    </div>
    <div id="content">
        <?php the_title('<h2>','</h2>'); ?>
        <?php the_content(); ?>
    </div>
    <div id="sidebar-2">
        <?php dynamic_sidebar('sidebar-1'); ?>
    </div>
</div>
<style> 
a:link {
	color: #1768b1;
}

#container-container-sidebar {
    display: flex; 
    flex-direction: row;
}
#sidebar-1, #sidebar-2, #sidebar-3 {
    border: 1px solid #d3d2d1;
	border-radius: 10px;
    padding: 20px;
    padding-top: 0;
    margin-right: 30px;
    width: 20%;
    height: max-content;
    box-shadow: inset 0 0 .2em #e5e5e5;
}
#sidebar-2, #sidebar-3 {
    padding-top: 20px;
    margin-right: 0px;
    margin-left: 30px;
}
#content {
    width: 60%;
}
#sidebar-3 {
    display: none;
}
@media (max-width: 780px) {
    #container-container-sidebar {
        flex-direction: column-reverse;
    }
    #sidebar-2 {
        display: none;
    }
    #content {
        width: 100%;
    }
    #sidebar-1, #sidebar-2, #sidebar-3 {
        margin-right: 0px;
        margin-left: 0px !important;
        width: -webkit-fill-available;
    }
    #sidebar-3 {
        margin-top: 20px;
        display: block;
    }
}
</style>

<?php get_footer(); ?>

