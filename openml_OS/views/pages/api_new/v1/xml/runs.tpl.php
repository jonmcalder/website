<oml:runs xmlns:oml="http://openml.org/openml">
	<?php foreach( $runs as $r ): ?>
  <oml:run>
    <oml:run_id><?php echo $r->rid; ?></oml:run_id>
    <oml:task_id><?php echo $r->task_id; ?></oml:task_id>
    <oml:setup_id><?php echo $r->setup; ?></oml:setup_id>
    <oml:flow_id><?php echo $r->flow_id; ?></oml:flow_id>
    <oml:uploader><?php echo $r->uploader; ?></oml:uploader>
		<oml:upload_time><?php echo $r->start_time; ?></oml:upload_time>
    <oml:error_message><?php echo $r->error_message; ?></oml:error_message>
		<?php if($r->tags != false): foreach(explode(',', $r->tags) as $tag): ?>
			<oml:tag><?php echo $tag; ?></oml:tag>
		<?php endforeach; endif; ?>
  </oml:run>
  <?php endforeach; ?>
</oml:runs>
