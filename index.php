<?php get_header(); ?>
    
<body>
    <div class="body">
 
        <div id="div_titulo_body">
            <p id="titulo_body"><span>Página Inicial</span></p>
        </div>
        
        
        <div class="box-liste-posts">

            <?php 
                $args = array('post_type'=>'post', 'showposts'=> 2);
                $my_posts = get_posts( $args );
            ?>

            <?php $cont = 1; if( $my_posts ) : foreach( $my_posts as $post) : setup_postdata( $post ); ?>

                <div id="section1" class="liste-posts <?php if( $cont == 2 ) echo "segundo-post" ?>">
                    
                    <img class="imagem_section" <?php the_post_thumbnail(); ?> <p class="white-text gambiarra"> > </p> 
                    
                    <div class="div_texto_section">
                        <p class="titulo_section"><?php the_title();?></p>
                        <p class="texto_section"> <?php the_excerpt(); ?> </p>
                        <a href="<?php the_permalink(); ?>" class="waves-effect waves-light btn texto_btn">Leia mais</a>
                    </div>
                </div>

            <?php $cont ++ ; endforeach; endif; ?>

        </div>

    </div>    
        
       
    
</body>
    
<?php get_footer(); ?>
