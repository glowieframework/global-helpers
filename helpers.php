<?php

if (!function_exists('config')) {
    /**
     * Gets a configuration variable.
     * @param string $key Key to get value (accepts dot notation keys).
     * @param mixed $default (Optional) Default value to return if the key does not exist.
     * @return mixed Returns the value if exists or the default if not.
     */
    function config(string $key, $default = null)
    {
        return \Config::get($key, $default);
    }
}

if (!function_exists('env')) {
    /**
     * Gets an environment configuration variable.
     * @param string $key Key to get value.
     * @param mixed $default (Optional) Default value to return if the key does not exist.
     * @return mixed Returns the value if exists or the default if not.
     */
    function env(string $key, $default = null)
    {
        return \Env::get($key, $default);
    }
}

if (!function_exists('translate')) {
    /**
     * Gets an internalization string from a language configuration.
     * @param string $key String key to get (accepts dot notation keys).
     * @param array $params (Optional) Associative array of parameters to bind into the string.
     * @param string|null $lang (Optional) Language name to get string from. Leave empty to use the current active language.
     * @param string $default (Optional) Default value to return if the key is not found.
     * @return string Returns internationalization string if found or the default value if not.
     */
    function translate(string $key, array $params = [], ?string $lang = null, string $default = '')
    {
        return \Babel::get($key, $params, $lang, $default);
    }
}

if (!function_exists('dd')) {
    /**
     * Dumps a variable in a human-readable way and ends the script execution.
     * @param mixed $var Variable to be dumped.
     */
    function dd($var)
    {
        \Util::dump($var);
    }
}

if (!function_exists('encrypt')) {
    /**
     * Encrypts a string using your application secret keys.
     * @param string $string String to encrypt.
     * @param string $method (Optional) Hashing algorithm to use in encryption.
     * @param string|null $token (Optional) Optional token to use in encryption. Leave empty to use your app default token.
     * @return string|bool Returns the encrypted string on success or false on errors.
     */
    function encrypt(string $string, string $method = 'sha256', ?string $token = null)
    {
        return \Util::encryptString($string, $method, $token);
    }
}

if (!function_exists('decrypt')) {
    /**
     * Decrypts a string using your application secret keys.
     * @param string $string String to decrypt.
     * @param string $method (Optional) Hashing algorithm to use in decryption.
     * @param string|null $token (Optional) Token to use in decryption. Leave empty to use your app default token.
     * @return string|bool Returns the decrypted string on success or false on errors.
     */
    function decrypt(string $string, string $method = 'sha256', ?string $token = null)
    {
        return \Util::decryptString($string, $method, $token);
    }
}

if (!function_exists('url')) {
    /**
     * Returns the absolute URL of the application path.
     * @param string $path (Optional) Relative path to append to the base URL.
     * @return string Full base URL.
     */
    function url(string $path = '')
    {
        return \Util::baseUrl($path);
    }
}

if (!function_exists('route')) {
    /**
     * Returns the base URL of a named route.
     * @param string $route Route name.
     * @param array $params (Optional) Route parameters to bind into the URL.
     * @return string Returns the absolute URL of the application path with the route appended.
     */
    function route(string $route, array $params = [])
    {
        return \Util::route($route, $params);
    }
}

if (!function_exists('asset')) {
    /**
     * Returns the base URL of an asset file with a token to force cache reloading on browsers.
     * @param string $filename Asset filename. Must be a path relative to the **app/public/assets** folder.
     * @param string $token (Optional) Token parameter name to append to the filename.
     * @return string Returns the absolute URL of the asset file with the token.
     */
    function asset(string $filename)
    {
        return \Util::asset($filename);
    }
}

if (!function_exists('app_path')) {
    /**
     * Returns the real application location in the file system.
     * @param string $path (Optional) Relative path to append to the location.
     * @return string Full location.
     */
    function app_path(string $path = '')
    {
        return \Util::location($path);
    }
}

if (!function_exists('session')) {
    /**
     * Gets the value associated to a key in the session data.
     * @param string|null $key (Optional) Key to get value (accepts dot notation keys). Use `null` to return the Session instance.
     * @param mixed $default (Optional) Default value to return if the key does not exist.
     * @return mixed Returns the value if exists or the default if not, or the Session instance.
     */
    function session(?string $key = null, $default = null)
    {
        $session = new \Glowie\Core\Http\Session();
        if (is_null($key)) return $session;
        return $session->get($key, $default);
    }
}

if (!function_exists('request')) {
    /**
     * Gets a value from the request data.
     * @param string|null $key (Optional) Key to get value. Use `null` to return the Request instance.
     * @param mixed $default (Optional) Default value to return if the key does not exist.
     * @return mixed Returns the value if exists or the default if not, or the Request instance.
     */
    function request(?string $key = null, $default = null)
    {
        $request = new \Glowie\Core\Http\Request();
        if (is_null($key)) return $request;
        return $request->get($key, $default);
    }
}

if (!function_exists('response')) {
    /**
     * Sends a raw plain text body to the response.
     * @param string|null $content (Optional) Content to set as the body. Use `null` to return the Response instance.
     * @param string $type (Optional) Content type header to set, defaults to `text/plain`.
     * @return Glowie\Core\Http\Response Returns the Response instance.
     */
    function response(?string $body = null, string $type = 'text/plain')
    {
        $response = new \Glowie\Core\Http\Response();
        if (is_null($body)) return $response;
        $response->setBody($body, $type);
    }
}

if (!function_exists('db')) {
    /**
     * Creates a new Kraken database instance.
     * @param string $database (Optional) Database connection name (from your app configuration).
     * @return Glowie\Core\Database\Kraken Kraken database instance query builder.
     */
    function db(string $database = 'default')
    {
        return new \Glowie\Core\Database\Kraken('glowie', $database);
    }
}

if (!function_exists('cookies')) {
    /**
     * Gets the value associated to a key in the cookies data.
     * @param string|null $key (Optional) Key to get value. Use `null` to return the Cookies instance.
     * @param mixed $default (Optional) Default value to return if the key does not exist.
     * @return mixed Returns the value if exists or the default if not, or the Cookies instance.
     */
    function cookies(?string $key = null, $default = null)
    {
        $cookies = new \Glowie\Core\Http\Cookies();
        if (is_null($key)) return $cookies;
        return $cookies->get($key, $default);
    }
}

if (!function_exists('cache')) {
    /**
     * Gets a cache variable.
     * @param string|null $key (Optional) Key to get value. Use `null` to return the Cache instance.
     * @param mixed $default (Optional) Default value to return if the key does not exist.
     * @return mixed Returns the value if exists or the default if not, or the Cache instance.
     */
    function cache(?string $key = null, $default = null)
    {
        $cache = new \Glowie\Core\Tools\Cache();
        if (is_null($key)) return $cache;
        return $cache->get($key, $default);
    }
}

if (!function_exists('auth')) {
    /**
     * Returns an Authenticator instance.
     * @return Glowie\Core\Tools\Authenticator Authenticator instance.
     */
    function auth()
    {
        return new \Glowie\Core\Tools\Authenticator();
    }
}

if (!function_exists('validator')) {
    /**
     * Returns a Validator instance.
     * @return Glowie\Core\Tools\Validator Validator instance.
     */
    function validator()
    {
        return new \Glowie\Core\Tools\Validator();
    }
}

if (!function_exists('uploader')) {
    /**
     * Returns an Uploader instance.
     * @param string $directory (Optional) Target directory to store the uploaded files.
     * @return Glowie\Core\Tools\Uploader Uploader instance.
     */
    function uploader(string $directory = 'uploads')
    {
        return new \Glowie\Core\Tools\Uploader($directory);
    }
}

if (!function_exists('collect')) {
    /**
     * Creates a new Collection.
     * @param array $data (Optional) Initial data to parse into the Collection.
     * @return Glowie\Core\Collection Collection instance.
     */
    function collect(array $data = [])
    {
        return new \Glowie\Core\Collection($data);
    }
}

if (!function_exists('element')) {
    /**
     * Creates a new Element.
     * @param array $data (Optional) An associative array with the initial data to parse.
     * @return Glowie\Core\Element Element instance.
     */
    function element(array $data = [])
    {
        return new \Glowie\Core\Element($data);
    }
}
