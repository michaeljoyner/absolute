var elixir = require('laravel-elixir');

/*
 |----------------------------------------------------------------
 | Have a Drink!
 |----------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic
 | Gulp tasks for your Laravel application. Elixir supports
 | several common CSS, JavaScript and even testing tools!
 |
 */

elixir(function(mix) {
    mix.sass("main.scss")
        .scripts(['ready.min.js', 'carousel.min.js'], "resources/assets/scripts")
        .version(["css/main.css", "js/all.js"])
       .routes()
       .events();
});
