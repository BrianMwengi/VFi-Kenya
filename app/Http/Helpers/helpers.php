<?php

//use App\Post;


function include_action($controller, $action, $params = array())
{
  if (is_callable(array($controller, $action))) {
    $c = new $controller ;
    return $c->$action($params) ;
  }
}

/*function getPages()
{
    $pages = Post::where('post_type', 'page')->where('is_published', '1')->get();
    return $pages;
}*/

