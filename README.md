# issueの解決
## error
PHP Warning: require(/サーバーのパス/laravel-game_server-master/laravel_server/vendor/autoload.php): failed to open stream: No such file or directory in /サーバーのパス/laravel-game_server-master/laravel_server/artisan on line 18
## result
`$ composer install` で解決しました。
  
## error2
RuntimeException
No application encryption key has been specified.
## result2
`$ php artisan key:generate`
Application key set successfully.
  
`$ php artisan config:cache`
Configuration cache cleared!
Configuration cached successfully!
これで解決しました。
