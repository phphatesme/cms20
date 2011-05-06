<?php

function renderTableOfContents( )
{
  $dir = new DirectoryIterator( __DIR__.'/content/');
  $content = '<ul id="toc">';
  $elements = array();
  foreach( $dir as $file ) {
    if ( $file->isFile( ) ) {
     $filename = str_replace('|', '/', $file->getFilename() );
     $filename = str_replace('.md', '', $filename );
     $elements[$filename] = $filename.'.html';
    }
  }


  ksort( $elements );

  foreach( $elements as $filename => $path ) 
  {
    $indent = substr_count($filename, '/');
    $filenameFinal = preg_replace( '^(.*)/^', '', $filename);
    $content .= '<li>'.str_repeat('&nbsp;&nbsp;&nbsp;', $indent).'<a href="'.$path.'">'.$filenameFinal.'</a></li>';
  }

  $content .= '</ul>';
  return $content;
}

function renderBreadCrumb( )
{
  $content = 'Startseite';
  return $content;
}

function renderStatistics()
{
  $stats = explode( ';', file_get_contents( __DIR__.'/api/stats.ini'));
  $content = '<span id="statistics">Seit dem <i>1. Mai 2011</i> wurden bereits <strong>'.number_format($stats[1], 0, ',', '.') .'</strong> Tests auf <strong>'.number_format($stats[0], 0, ',', '.') .'</strong> Urls durchgef&uuml;hrt.</span>';
  return $content;
}

function renderMenu( array $menuArray, $depth )
{
  global $path;

  if( count( $menuArray ) == 0 ) return array();
 
  $selectedSubMenu = array();

  ksort( $menuArray );

  $pathSubstr = '';
  for( $i = 0; $i < $depth; $i++) 
  {
    $pathSubstr .= $path[$i].'/';
  }

  foreach( $menuArray as $menuElement => $submenu )
  {
    $menuName = substr( $menuElement, 3 );
    $class = '';
    $selected = false;
    if ( array_key_exists( $depth, $path ) && $path[$depth] == $menuName ) {
      $class = 'selected';
      $selected = true;
    }
    echo '<li><a class="'.$class.'" href="/'.$pathSubstr.$menuName.'.html">'.str_replace( '-', ' ', $menuName).'</a></li>';    
    if ( $selected && is_array($submenu )) $selectedSubMenu = $submenu;
  }
  return $selectedSubMenu;
}
