<?php


function ListItem($children, $to)
{
    return <<<HTML
      <li class="list-inline-item">
         <Component.Link to="{$to}" class="text-white text-decoration-none">
            {$children}
         </Component.Link>
      </li>
   HTML;
}
