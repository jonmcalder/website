<?php
if(in_array($this->usubpage, $this->legal_subpages)) {
  // this automatically loads a table with all configurations
  echo $this->dataoverview->generate_table(
    $this->name,
    $this->columns,
    $this->widths,
    $this->sql,
    $this->api_delete_function );
}?>