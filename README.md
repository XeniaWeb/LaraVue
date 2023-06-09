## Oksana Bürki

<https://xeniaweb.ch>

### About this project

XeniaWeb Project - Laravel 10 Inertiajs Vue.js Tailwind Fullstack App

[comment]: <> (- [Simple, fast routing engine]&#40;https://laravel.com/docs/routing&#41;.)

[comment]: <> (- [Powerful dependency injection container]&#40;https://laravel.com/docs/container&#41;.)

[comment]: <> (- Multiple back-ends for [session]&#40;https://laravel.com/docs/session&#41; and [cache]&#40;https://laravel.com/docs/cache&#41; storage.)

[comment]: <> (- Expressive, intuitive [database ORM]&#40;https://laravel.com/docs/eloquent&#41;.)

[comment]: <> (- Database agnostic [schema migrations]&#40;https://laravel.com/docs/migrations&#41;.)

[comment]: <> (- [Robust background job processing]&#40;https://laravel.com/docs/queues&#41;.)

[comment]: <> (- [Real-time event broadcasting]&#40;https://laravel.com/docs/broadcasting&#41;.)

[comment]: <> (Laravel is accessible, powerful, and provides tools required for large, robust applications.)

##

### License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Docker
### Add alias for sail 
```sh
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```

### Start containers
```sh
sail up -d
```

### Stop containers
```sh
sail down
```

## Frontend
```sh
npm run build
npm run dev
```

### Refresh Database
```sh
./vendor/bin/sail artisan migrate:fresh --force
./vendor/bin/sail artisan db:seed --force
```
