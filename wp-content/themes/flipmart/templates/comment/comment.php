<li <?php yog_helper()->attr( 'comment' ); ?>>
    
    <div class="author-details outer-bottom-xs">
        <div class="col-md-2 col-sm-2">
            <?php 
                $yog_avt =  get_avatar( $comment, 100 ); 
                echo str_replace( 'photo', 'photo img-rounded img-responsive', $yog_avt );
            ?>
        </div>
        <div class="col-md-10 col-sm-10">
            <div class="inner-bottom-xs">
                <h4 <?php yog_helper()->attr( 'comment-author' ); ?>><?php comment_author(); ?></h4>
                <small>
                    <?php printf( esc_html__( '%1$s at %2$s / %3$s', 'flipmart' ), get_comment_date(), get_comment_time(), yog_get_comment_reply_link() ) ?>
                </small>
                <?php if ( $comment->comment_approved == '0' ) { ?>
                    <em class="comment-awaiting-moderation"><?php echo esc_html__( 'Your comment is awaiting moderation.', 'flipmart' ); ?></em><br />
                <?php
                  }else{
                    echo '<div '. yog_helper()->get_attr( 'comment_content' ) .'>';
                    
                        //Comment Text
                        comment_text();  
                        
                    echo '</div>';
                  }
                ?>
            </div>
        </div>
    </div><div class="clearfix"></div>