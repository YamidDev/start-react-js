<?php
    require_once 'vendor\autoload.php';
    
    use Jenssegers\Blade\Blade;
    
    $blade = new Blade('views', 'cache');

    echo $blade->make('home')->render();

?>
