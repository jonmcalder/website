{"data":{"dataset":[
  <?php $first = true;
        foreach ($datasets as $data):
          echo ($first ? "" : ",");
          $first = false; ?>
  {"did":<?php echo $data->did; ?>,
   "name":<?php echo $data->name; ?>,
   "version":<?php echo $data->version; ?>,
   "status":<?php echo $data->status; ?>,
   "format":<?php echo $data->format; ?>,
   "jsonSpecific": "true",
   "quality":[
    <?php $firstq = TRUE;
          foreach( $data->qualities as $quality => $value ):
            echo ($firstq ? "" : ",");
            $firstq = FALSE; ?>
    {"name":<?php echo $quality; ?>,
     "value":<?php echo $value; ?>
    }
    <?php endforeach; ?>
    ]
  }
  <?php endforeach; ?>
  ]}
}