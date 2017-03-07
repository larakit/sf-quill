<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-quilljs')
    ->setSourceDir('public')
    ->jsPackage('quill.min.js')
    ->cssPackage('quill.snow.css')
  //  ->cssPackage('quill.bubble.css')
;
