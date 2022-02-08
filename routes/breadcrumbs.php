<?php
 
// Home
Breadcrumbs::register('home', function ($trail) {
  $trail->push('Home', route('home'));
});
 
// Home > Bienvenido Call
Breadcrumbs::for('bienvenidocall', function ($trail) {
  $trail->parent('home');
  $trail->push('Call', route('bienvenidocall'));
});
 
// Home > Call > gootraxx
Breadcrumbs::for('/gotraxxcall', function ($trail) {
  $trail->parent('bienvenidocall');
  $trail->push('gootraxx', route('/gotraxxcall'));
});
 
 // Home > Blog > [Category]
Breadcrumbs::for('posts.category', function ($trail, $category) {
  $trail->parent('posts.index');
  $trail->push($category->name, route('posts.category', $category->id));
});

// Home > Blog > [Category] > [Post]
Breadcrumbs::for('posts.show', function ($trail, $post) {
    $trail->parent('posts.category', $post->category);
    $trail->push($post->title, route('posts.show', $post->id));
});