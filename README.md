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
- `config()`
- `env()`
- `translate()`
- `dd()`
- `encrypt()`
- `decrypt()`
- `url()`
- `route()`
- `asset()`
- `app_path()`
- `session()`
- `request()`
- `response()`
- `db()`
- `cookies()`
- `cache()`
- `auth()`
- `validator()`
- `uploader()`
- `collect()`
- `element()`
- `http()`
- `redirect()`
- `view()`
- `layout()`

## Credits
Global helpers and Glowie are currently being developed by [Gabriel Silva](https://gabrielsilva.dev.br).