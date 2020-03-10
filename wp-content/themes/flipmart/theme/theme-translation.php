<?php
/**
 * Theme Framework
 * The Yog_Theme initiate the theme translation
 */
 
 if ( ! function_exists( 'yog_set_translation' ) ) :
    /**
     * [yog_set_translation description]
     * @method yog_set_translation
     * @return [type]             [description]
     */
    function yog_set_translation() {
        global $yog_translation;
        
        $yog_translate = yog_helper()->get_option( 'enable-translation', 'raw', false, 'options' );
    
        $yog_translation = array(
    
            //Blog Search Translation
            'tr-blog-search'    => $yog_translate ? yog_helper()->get_option( 'tr-blog-search', false ) : esc_html__( 'Search..', 'flipmart' ),
            'tr-blog-search-result'       => $yog_translate ? yog_helper()->get_option( 'tr-blog-search-result', false ) : esc_html__( 'Search Result : %s', 'flipmart' ),
            
            //Comments
            'tr-blog-comment'       => $yog_translate ? yog_helper()->get_option( 'tr-blog-comment', false ) : esc_html__( 'Comment', 'flipmart' ),
            'tr-blog-comments'      => $yog_translate ? yog_helper()->get_option( 'tr-blog-comments', false ) : esc_html__( 'Comments', 'flipmart' ),
            'tr-blog-comment-off'   => $yog_translate ? yog_helper()->get_option( 'tr-blog-comment-off', false ) : esc_html__( 'Comments Off', 'flipmart' ),
            'tr-blog-comment-reply' => $yog_translate ? yog_helper()->get_option( 'tr-blog-comment-reply', false ) : esc_html__( 'Reply', 'flipmart' ),           
        );
    }
    add_action( 'init', 'yog_set_translation' );
 endif;

 if ( ! function_exists( 'yog_get_translation' ) ) :
    /**
     * [yog_get_translation description]
     * @method yog_get_translation
     * @return [type]             [description]
     */
    function yog_get_translation( $yog_id ) {
        global $yog_translation;
        
        //Check Id
        if( empty( $yog_id ) ){
            return;
        }
        
        //Return Content.
        return $yog_translation[$yog_id];
    }
 endif;

 if ( ! function_exists( 'yog_translation' ) ) :
    /**
     * [yog_translation description]
     * @method yog_translation
     * @return [type]             [description]
     */
    function yog_translation( $yog_id ) {
        echo yog_get_translation( $yog_id );
    }
 endif;