<?php

include_once __DIR__ . '/../lib/markdown/markdown.php';
include_once 'functions.php';

class Content
{
  private $content;
  private $vars;
  private $html;
  private $baseUrl;

  public function __construct($path)
  {
    $this->content = file_get_contents($path);
    preg_match_all('^@(.*)=(.*)@^', $this->content, $matches);
    if (array_key_exists(1, $matches))
    {
      for($i = 0; $i < count($matches[1]); $i++)
      {
        $this->vars[$matches[1][$i]] = $matches[2][$i];
      }
    }
    $this->content = preg_replace('^@(.*)=(.*)@^', '', $this->content);
  }

  public function getHtml()
  {
    if (is_null($this->html))
    {
      $markdown = Markdown($this->content);
      $markdown = preg_replace('^\[\[(.*)\]\]^', '<a href="$1.html">$1</a>', $markdown);
      $markdown = preg_replace('^<h2>(.*)</h2>^', '<a name="$1"><h2>$1</h2></a>', $markdown);
      $markdown = preg_replace('^\[(.*)]\(wiki/(.*)\)^', '<a href="$2.html" class="internal">$1</a>', $markdown);
      $markdown = preg_replace('#<a href="http(.*)">(.*)</a>#', '<a_external href="http$1">$2</a_external>', $markdown);
      #var_dump( htmlentities($markdown) );
      $markdown = preg_replace('#<a href="(.*)">(.*)</a>#', '<a href="/$1.html" class="internal">$2</a>', $markdown);

$markdown = preg_replace_callback('#<a href="(.*)">#',
  function($matches) {
    return '<a href="'.str_replace('|', '/', $matches[1]).'">';
  }, $markdown);

      $markdown = preg_replace('#<a_external(.*)</a_external>#', '<a class="external"$1</a>', $markdown);

      preg_match('^@(.*)@^', $markdown, $matches);
      if (array_key_exists(1, $matches))
      {
        $value = call_user_func( $matches[1] );
        $markdown = preg_replace('^'.$matches[0].'^', $value, $markdown);
      }

      $this->html = $markdown;//utf8_decode($markdown);
    }
    return ($this->html);
  }

  public function getContent()
  {
    return $this->content;
  }

  public function getVar($key)
  {
    return $this->vars[$key];
  }

  public function getHeadlines()
  {
    $html = $this->getHtml();
    preg_match_all('^<h2>(.*)</h2>^', $html, $matches);
    return $matches[1];
  }
}

