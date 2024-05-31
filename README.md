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
- `app_path()`
- `asset()`
- `auth()`
- `cache()`
- `collect()`
- `config()`
- `cookies()`
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
- `redirect()`
- `request()`
- `response()`
- `retry()`
- `route()`
- `session()`
- `translate()`
- `uploader()`
- `url()`
- `validator()`
- `view()`

## Credits
Global helpers and Glowie are currently being developed by [Gabriel Silva](https://gabrielsilva.dev.br).