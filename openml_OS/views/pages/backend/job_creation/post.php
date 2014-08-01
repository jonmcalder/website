<?php
if( $this->input->post('filter') == false ) { // only applicable when tasks where created 
  $experiment = $this->input->post('experiment');
  $tasks = $this->input->post('tasks');
  $setups = $this->input->post('setups');

  if( $experiment && $tasks && $setups ) {
    $this->Schedule->deleteWhere( '`experiment` = "' . $experiment . '" AND (`task_id` NOT IN (' . implode( ',', $tasks ) . ') OR `sid` NOT IN (' . implode( ',', $setups )  . ') )' );
    
    $batch = array();
    foreach( $tasks as $task ) {
      foreach( $setups as $setup ) {
        $batch[] = array( 'sid' => $setup, 'task_id' => $task, 'experiment' => $experiment );
      }
    }
    $this->Schedule->insert_batch( $batch );
    su('backend/page/job_creation/e/'.$experiment);
  } else {
    $this->message = 'Please select at least one task, one setup and decide on an experiment name. ';
  }
}
?>
