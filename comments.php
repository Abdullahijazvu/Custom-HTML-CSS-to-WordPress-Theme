<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $comment_author = trim(strip_tags($_POST['author']));
    $comment_email = trim(strip_tags($_POST['email']));
    $comment_url = trim(strip_tags($_POST['url']));
    $comment_content = trim(strip_tags($_POST['comment']));
    if (empty($comment_author) || empty($comment_email) || empty($comment_content)) {
        echo '<script>alert("Please fill in all required fields.");</script>';
    } else {
        $comment_data = array(
            'comment_author' => $comment_author,
            'comment_author_email' => $comment_email,
            'comment_author_url' => $comment_url,
            'comment_content' => $comment_content,
            'comment_type' => '',
            'comment_parent' => 0,
            'user_id' => get_current_user_id(),
            'comment_approved' => 1,
        );
        wp_insert_comment($comment_data);
        echo '<div class="comment-confirmation">Your comment has been posted.</div>';
    }
}


//Declare Vars
$comment_send = 'Add comment';
$comment_reply = 'Post a comment';
$comment_reply_to = 'Reply';

$comment_author = 'Name';
$comment_email = 'Email';
$comment_body = 'Message';
$comment_url = 'Website';
$comment_cookies_1 = ' By commenting you accept the';
$comment_cookies_2 = ' Privacy Policy';


$comment_cancel = 'Cancel Reply';

//Array
$comments_args = array(
    //Define Fields
    'fields' => array(
        'author' => '<p class="comment-form-author"><input id="author" name="author" type="text"  required placeholder="' . $comment_author . '" /></p>',
        'email'  => '<p class="comment-form-email"><input id="email" name="email" type="email" placeholder="' . $comment_email . '" /></p>',
        'url'    => '<p class="comment-form-url"><input id="url" name="url" type="url" placeholder="' . $comment_url . '" /></p>',
        //Cookies
        'cookies' => '<p class="comment-form-cookies-policy"><input type="checkbox" id="cookies" name="cookies" required>' . $comment_cookies_1 . '<a href="' . get_privacy_policy_url() . '">' . $comment_cookies_2 . '</a></p><span id="error-cookies" class="error-message" style="display:none;">Please accept the privacy policy.</span>',


    ),
    // Change the title of send button
    'label_submit' => __( $comment_send ),
    // Change the title of the reply section
    'title_reply' => __( $comment_reply ),
    // Change the title of the reply section
    'title_reply_to' => __( $comment_reply_to ),
    //Cancel Reply Text
    'cancel_reply_link' => __( $comment_cancel ),
    // Redefine your own textarea (the comment body).
    'comment_field' => '<p class="comment-form-comment"><br /><textarea id="comment" name="comment" aria-required="true" placeholder="' . $comment_body .'"></textarea></p>',
    //Message Before Comment
    // Remove "Text or HTML to be displayed after the set of comment fields".
    'comment_notes_after' => '',
    //Submit Button ID
    'id_submit' => __( 'comment-submit' ),
);
comment_form( $comments_args );