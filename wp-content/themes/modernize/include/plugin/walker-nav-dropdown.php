<?php 
class Walker_Nav_Menu_Dropdown extends Walker_Nav_Menu{
    function start_lvl($output, $depth){
      $indent = str_repeat("\t", $depth); // don't output children opening tag (`<ul>`)
    }

    function end_lvl($output, $depth){
      $indent = str_repeat("\t", $depth); // don't output children closing tag
    }

    function start_el($output, $item, $depth, $args){
      // add spacing to the title based on the depth
      $item->title = str_repeat("&nbsp;", $depth * 4).$item->title;

      parent::start_el($output, $item, $depth, $args);

      // no point redefining this method too, we just replace the li tag...
      $output = str_replace('<li', '<option', $output);
    }

    function end_el($output, $item, $depth){
      $output .= "</option>\n"; // replace closing </li> with the option tag
    }
}
?>