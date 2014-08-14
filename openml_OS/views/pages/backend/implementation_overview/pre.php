<?php
$sql = 'SELECT `i`.`id`, `i`.`name`, `i`.`version`, `i`.`external_version`, `r`.`runs`, '.
       'IF(`r`.`runs` > 0,"0","1") AS `may_delete`, '.
       'CONCAT(\'<a href="f/\', `i`.`id`, \'">\', `i`.`name`, \'</a>\') AS `name_link`' .
       'FROM `implementation` `i` '.
       'LEFT JOIN `algorithm_setup` `s` ON `i`.`id` = `s`.`implementation_id` '.
       'LEFT JOIN (SELECT `setup`, count(*) AS `runs` FROM `run` GROUP BY `setup`) `r` ON `s`.`sid` = `r`.`setup` ' .
       'WHERE 1 '.
       'AND `i`.`uploader` = ' . $this->ion_auth->get_user_id() . ';';

$this->keys = array( 'id', 'name_link', 'version', 'external_version', 'runs' );
$this->items = $this->Implementation->query( $sql );


$this->api_delete_function = array( 
  'function'        => 'openml.implementation.delete', 
  'key'             => 'implementation_id',
  'filter'          => 'may_delete',
  'id_field'        => 'id',
  'identify_field'  => 'name' );

?>
