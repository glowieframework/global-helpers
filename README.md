## Global Helpers
This package allows some of [Glowie Framework](https://github.com/glowieframework/glowie) core functions to run in a global scope as helpers.

### Installation
Install in your Glowie project using Composer:

```shell
composer require glowieframework/global-helpers
```

### Usage
Use any helper method from your application controllers, models, middlewares or views.

Each helper will return an instance of the corresponding Glowie core class.

**Available methods:**
- `__()`
- `app_path()`
- `asset()`
- `auth()`
- `cache()`
- `collect()`
- `config()`
- `cookies()`
- `csrf_token()`
- `db()`
- `dd()`
- `decrypt()`
- `dispatch()`
- `element()`
- `encrypt()`
- `env()`
- `http()`
- `is_empty()`
- `layout()`
- `logger()`
- `now()`
- `public_path()`
- `redirect()`
- `request()`
- `response()`
- `retry()`
- `route()`
- `session()`
- `storage_path()`
- `today()`
- `translate()`
- `uploader()`
- `url()`
- `validator()`
- `view()`

## Credits
Global helpers and Glowie are currently being developed by [Gabriel Silva](https://gabrielsilva.dev.br).