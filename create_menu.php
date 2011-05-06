<?php

  include_once 'htdocs/content.php';

  function orderMenu( array $subMenu, $pathPrefix ) 
  {
    foreach( $subMenu as $element => $submenu) {
      $content = new Content( $pathPrefix.$element.'.md' );
      $order = 99;
      if ( $content->getVar('menu_order') != '' ) {
        $order = $content->getVar('menu_order');
      }
      if( $content->getVar( 'menu_display' ) != 'false' ) {
       $mainMenu[$order.'_'.$element] = array();
       if ( is_array( $submenu )) {
         $mainMenu[$order.'_'.$element] = orderMenu( $submenu, $pathPrefix.$element.'|' );
       }
      }
    }
    return $mainMenu;
  }

  $dir = new DirectoryIterator( __DIR__.'/htdocs/content/');
  $menu = array();
  foreach( $dir as $file ) {
    if ( $file->isFile( ) ) {    
     $content = new Content( $file->getPathName() );
     $filename = str_replace('.md', '', $file->getFilename() );
     $path = explode('|', $filename );
     $menuElement = '';
     foreach( $path as $element ) {
       $menuElement .= '["'.$element.'"]';
     }
     $arrayElements[] = '$menu'.$menuElement.' = array();';
    }
  }
  sort( $arrayElements );
  foreach( $arrayElements as $arrayElement )
  {
    eval( $arrayElement );
  }

  $mainMenu = orderMenu( $menu, __DIR__.'/htdocs/content/' );

  ksort($mainMenu);

  file_put_contents( 'menu.serialize', serialize( $mainMenu ));
 
