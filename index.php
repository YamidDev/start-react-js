<?php
    require_once 'vendor\autoload.php';
    
    use Jenssegers\Blade\Blade;
    
    $blade = new Blade('views', 'cache');

    echo $blade->make('text', ['name' => 'Yamid cueto M'])->render();

?>
