<?php get_header(); ?>

<div id="container-container-sidebar">
    <div id="sidebar-0">
        <div>
            <h2>Publicado</h2>
            <ul>
                <li><?php the_time( 'F j, Y' );?></li>
            </ul>
        </div>
        <div>
            <h2>Categoria</h2>
            <?php the_category() ?>
        </div>
        <div>
            <h2 style="margin-right: 36px;">Tags</h2>
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

#container-container-sidebar {
    display: flex; 
    flex-direction: row;
}
#sidebar-0, #sidebar-1, #sidebar-2 {
    border: 1px solid #d3d2d1;
	border-radius: 10px;
    padding: 20px;
    padding-top: 0;
    margin-right: 30px;
    width: 20%;
    height: max-content;
    box-shadow: inset 0 0 .2em #e5e5e5;
}
#sidebar-0 a, #sidebar-1 a, #sidebar-2 a {
	color: #666;
	text-decoration: none;
}
#sidebar-2 {
    padding-top: 20px;
    margin-right: 0px;
    margin-left: 30px;
}
#content {
    width: 60%;
}
#sidebar-0 {
    display: none;
}
@media (max-width: 780px) {
	#sidebar-1{
		display: none;
	}
    #container-container-sidebar {
        flex-direction: column;
    }
    #sidebar-0, #sidebar-2  {
        display: block;
        width: 100%;
        padding: 10px;
        margin: -10px;
        margin-top: 20px;
    }
    #sidebar-0 div {
        display: flex;
        align-items: center;
    }
    #sidebar-0 div h2, #sidebar-0 div ul {
        font-size: var(--wp--preset--font-size--small);
        margin: 0;
    }
	#content {
		width: 100%;
	}
}
</style>

<?php get_footer(); ?>

