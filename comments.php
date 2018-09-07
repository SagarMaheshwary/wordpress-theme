<?php 
    $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 48,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => current_theme_supports( 'html5', 'comment-list' ) ? 'html5' : 'xhtml',
        'short_ping'        => false,
        'echo'              => true,
    );


    // Comments Fields
    $name_field =   '<div class="form-group">' .
                            '<p class="comment-form-author">' . 
                                '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                                '<input id="author" name="author" placeholder="Enter Name" class="form-control" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' />'.
                           '</p>' .
                    '</div>';

    $email_field =  '<div class="form-group">' .
                        '<p class="comment-form-email">'.
                            '<label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                            '<input id="email" class="form-control" placeholder="Enter Email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' />'.
                        '</p>'.
                    '</div>';
    
    $url_field =    '<div class="form-group">' .
                        '<p class="comment-form-url">'.
                            '<label for="url">' . __( 'Website' ) . '</label> ' .
                            '<input id="url" class="form-control" placeholder="Enter Website Name" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" />'.
                        '</p>'.
                    '</div>';

    $comment_args = array(
        'fields'               =>   array(
                                        $name_field,
                                        $email_field,
                                        $url_field
                                    ),
        'comment_field'        =>   '<div class="form-group mt-3">
                                        <textarea id="comment" placeholder="Your comment!" class="form-control" name="comment" rows="5" maxlength="65525" aria-required="true" required="required"></textarea>
                                    </div>',
        /** This filter is documented in wp-includes/link-template.php */
        'must_log_in'          =>   '<p class="must-log-in">' . sprintf(
                                    /* translators: %s: login URL */
                                    __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                                    wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
                                    ) . '</p>',
        /** This filter is documented in wp-includes/link-template.php */
        'logged_in_as'         =>   '<p class="logged-in-as">' . sprintf(
                                    /* translators: 1: edit user link, 2: accessibility text, 3: user name, 4: logout URL */
                                    __( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>' ),
                                    get_edit_user_link(),
                                    /* translators: %s: user name */
                                    esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.' ), $user_identity ) ),
                                    $user_identity,
                                    wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
                                ) . '</p>',
        'comment_notes_before' => '<p class="comment-notes"><span id="email-notes">' . __( 'Your email address will not be published.' ) . '</span>'. ( $req ? $required_text : '' ) . '</p>',
        'comment_notes_after'  => '',
        'action'               => site_url( '/wp-comments-post.php' ),
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'class_form'           => 'comment-form',
        'class_submit'         => 'submit btn btn-outline-primary',
        'name_submit'          => 'submit',
        'title_reply'          => __( 'Leave a Reply' ),
        'title_reply_to'       => __( 'Leave a Reply to %s' ),
        'title_reply_before'   => '<h4 id="reply-title" class="comment-reply-title">',
        'title_reply_after'    => '</h4>',
        'cancel_reply_before'  => '<small>&nbsp;&nbsp;',
        'cancel_reply_after'   => '</small>',
        'cancel_reply_link'    => __( 'Cancel reply' ),
        'label_submit'         => __( 'Post Comment' ),
        'submit_button'        => '<button name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s">%4$s</button>',
        'submit_field'         => '<p class="form-submit">%1$s %2$s</p>',
        'format'               => 'xhtml',
    );

?>

<div class="comments-section">
    <h3 class="text-center post-title grey-text-2">Comments</h3>
    <?php wp_list_comments($args,$comments) ?>
    <div class="my-5">
        <?php comment_form($comment_args) ?>
    </div>
</div>