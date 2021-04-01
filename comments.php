<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package olynk
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area reviews-view__list">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3 class="comments-title reviews-view__header">
			<?php
			$olynk_comment_count = get_comments_number();
			if ( '1' === $olynk_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'Reviews', 'olynk' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $olynk_comment_count, 'comments title', 'olynk' ) ),
					number_format_i18n( $olynk_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>
    <div class="reviews-list">
		<ol class="comment-list reviews-list__content">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
                'callback'   => 'custom_comments',
                'end-callback'      => 'end_custom_comments',
			) );
			?>
		</ol><!-- .comment-list -->
    </div>
</div>
    </div>
		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'olynk' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
?>
    <div class="reviews-view__form">
        <div class="row">
            <div class="col-12 col-lg-9 col-xl-8">
    <?php
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $comments_args = array(
        'label_submit' => __('Submit'),
        'title_reply' => __('Write a review'),
        //'comment_form_top' => 'ds',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'class_submit'        => 'btn btn-primary btn-lg',
        'fields' => apply_filters('comment_form_default_fields', array(

                'rating' =>
                    '<div class="form-group col-md-4">'.
                    '<label for="review-review">'.__('Review stars').'</label>'.
                    '<select id="review-stars" class="form-control" name="rating">
                                                            <option>5</option>
                                                            <option>4</option>
                                                            <option>3</option>
                                                            <option>2</option>
                                                            <option>1</option>
                                                        </select></div>',
                'author' =>
                    '<div class="form-group col-md-4">'.
                    '<label for="review-author">'.__('Your Name').'</label>'.
                    '<input id="author" class="blog-form-input form-control" placeholder="Your Name* " name="author" type="text" value="' . esc_attr($commenter['comment_author']) .
                    '" size="30"' . $aria_req . ' /></div>',

                'email' =>
                    '<div class="form-group col-md-4">'.
                    '<label for="review-email">'.__('Email Address').'</label>'.
                    '<input id="email" class="blog-form-input form-control" placeholder="'.__('Your Email Address* ').'" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) .
                    '" size="30"' . $aria_req . ' /></div>',
            )
        ),
        'comment_field' => '<div class="form-group"><label for="review-text">Your Review</label><textarea id="comment" name="comment" row="6" class="form-control"  aria-required="true"></textarea></div>',
    );

    comment_form($comments_args); ?>
            </div>
        </div>
    </div>
</div><!-- #comments -->
