<?php
function setActive($nombrederuta)
{
  return  request()->routeIs($nombrederuta) ? 'active' : '' ;
}

?>