## Global Helpers
This package allows some of [Glowie Framework](https://github.com/glowieframework/glowie) core functions to run in a global scope as helpers.

> [!IMPORTANT]  
> This package has been incorporated into glowie-core starting with version 1.10.2. Manual installation is no longer required from this version onward. This package will no longer be updated and is being maintained for backward compatibility only.

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
- `abort()`
- `app()`
- `app_path()`
- `asset()`
- `auth()`
- `back()`
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
- `filled()`
- `http()`
- `is_empty()`
- `layout()`
- `logger()`
- `now()`
- `old()`
- `public_path()`
- `redirect()`
- `request()`
- `response()`
- `retry()`
- `route()`
- `session()`
- `storage_path()`
- `today()`
- `unless()`
- `uploader()`
- `url()`
- `validator()`
- `view()`
- `when()`

## Credits
Global helpers and Glowie are currently being developed by [Gabriel Silva](https://gabrielsilva.dev.br).