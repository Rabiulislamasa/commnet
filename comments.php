                                <div class="comments-area">
                                    <div class="comments-section">
                                        <h3 class="comments-title">Posts Comments</h3>
                                        <ol class="comments">
                                        <?php
                wp_list_comments( array(
                    'style'       => 'li',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
                                        </ol>
                                    </div> <!-- end comments-section -->
                                </div>

                                <div class="comment-respond">
                                        <h3 class="comment-reply-title">Write a Comment</h3>
                                        <form method="post" id="commentform" class="comment-form">
                                            <?php $comments_args = array(
                                        
                                                'comment_field' => '<div class="form-textarea">
                                                <textarea id="comment" placeholder="Write Your Comments..."></textarea>
                                                </div>',
                                                'fields' => apply_filters( 'comment_form_default_fields', array(
                                                
                                                        'url'  => '<div class="form-inputs">
                                                        <input placeholder="Website" type="url">',
                                                        'name'  => '<input placeholder="Name" type="text">',
                                                            
                                                        'email'    => '<input placeholder="Email" type="email">
                                                        </div>',
                                                        )
                                                    ),
                                            );
                                            comment_form($comments_args);  ?>
                                        </form>
                                    </div>