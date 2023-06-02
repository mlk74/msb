<div class="posts list">
	<?php 
	$topics->topic_id = $_GET['topic_id'];
	$topicDetails = $topics->getTopic();
	?>
	<span style="font-size:20px;"><a href="category.php?category_id=<?php echo $topicDetails['category_id']; ?>"><< <?php echo $topicDetails['subject']; ?></a></span>
	<br><br>
	<?php				
	$result = $topics->getPosts();
    while ($post = $result->fetch_assoc()) {
        $date = date_create($post['created']);
        $posterName = $post['username'];
        if ($posterName == '') {
            $posterName = $post['name'];
        }
        ?>
	<article class="row" id="postRow_<?php echo $post['post_id']; ?>">
		<div class="col-md-2 col-sm-2 hidden-xs">
		  <figure class="thumbnail">
			<img class="img-responsive" src="images/user-avatar.png" />
			<figcaption class="text-center"><?php echo ucwords($posterName); ?></figcaption>
		  </figure>
		</div>
		<div class="col-md-10 col-sm-10">
		  <div class="panel panel-default arrow left">
			<div class="panel-body">
			  <header class="text-left">
				<div class="comment-user"><i class="fa fa-user"></i> By: <?php echo $posterName; ?></div>
				<time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> <?php echo date_format($date, 'd M Y H:i:s'); ?></time>
			  </header>
			  <br>					  
			  <div class="comment-post"  id="post_message_<?php echo $post['post_id']; ?>">
				
				<?php echo $post['message']; ?>
				
			  </div>
			  
			  <textarea name="message" data-topic-id="<?php echo $post['topic_id']; ?>" id="<?php echo $post['post_id']; ?>" style="visibility: hidden;"></textarea><br>
			  
			  <div class="text-right" id="button_section_<?php echo $post['post_id']; ?>">
				<a class="btn btn-default btn-sm" id="edit_<?php echo $post['post_id']; ?>"><i class="fa fa-reply"></i> Edit</a>
				<a class="btn btn-default btn-sm"><i class="fa fa-reply"></i> Delete</a>
			  </div>			
				
			<div id="editSection_<?php echo $post['post_id']; ?>" class="hidden">						
				<button type="submit" id="save_<?php echo $post['post_id']; ?>" name="save" class="btn btn-info saveButton">Save</button>
				<button type="submit" id="cancel_<?php echo $post['post_id']; ?>" name="cancel" class="btn btn-info saveButton">Cancel</button>
			</div>					
			</div>					
	
		  </div>
		</div>
	</article>	
	<?php } ?>				
</div>