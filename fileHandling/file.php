<?php

$directory = 'files';

if ($handle = opendir($directory.'/'))
 {echo 'Looking inside \''.$directory.'\':<br>';
 
  while ($files = readdir($handle))
  {if ($files!='.' && $files!='..')
   {echo '<a href="'.$directory.'/'. $files.'">'.$files.'</a><br>';}
   }
   }
?>