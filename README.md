### Idea
The idea of Badges is simply. If you want to make a bootstrap badge you will use:
```sh
<button class="btn btn-primary" type="button">
  Messages <span class="badge">4</span>
</button>
```
With Badge class you can do it like this:
```sh
{{ Badge::primary('Messages', 4) }}
```
It will generate bootstrap markup of badge.

#### Versions
* 1.* - Laravel 4 support

* 2.* - Laravel 5 support

### Installation


To install badges package via composer use:
```sh
composer require golcz/badges
```

Next, add the service provider to app/config/app.php (Laravel 4)
```sh
'providers' => [
    // ..
    'Golcz\Badges\BadgesServiceProvider'
]
```
or to config/app.php (Laravel 5)
```sh
'providers' => [
    // ..
    Golcz\Badges\BadgesServiceProvider::class
]
```

That's all. Now you can use it in view:
```sh
{{ Badge::link('http://laravel.com', Messages, 4) }}
{{ Badge::danger('Warnings', 10) }}
```
### To see all available methods go to ```/badges``` route to see a list.
