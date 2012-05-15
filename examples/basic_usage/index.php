<?php
// Essential
require ('put/the/path/for/phaste.php');

$urls = array('/'                  => 'index:index',
              '/testing'           => 'index:doTest',
              '/view/[a-zA-Z0-9]+' => 'index:viewItem',
             );

// Resolve each one of the URL above for the directory controllers
// loading the classes with a '_ctrl.php' sufix in the filename.
phaste::stick($urls, 'controllers', '_ctrl.php');
