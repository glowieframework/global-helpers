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

if (!function_exists('__')) {
    /**
     * Gets an internalization string from a language configuration.
     * @param string $key String key to get (accepts dot notation keys).
     * @param array $params (Optional) Associative array of parameters to bind into the string.
     * @param string|null $lang (Optional) Language name to get string from. Leave empty to use the current active language.
     * @param string $default (Optional) Default value to return if the key is not found.
     * @return string Returns internationalization string if found or the default value if not.
     */
    function __(string $key, array $params = [], ?string $lang = null, string $default = '')
    {
        return \Babel::get($key, $params, $lang, $default);
    }
}

if (!function_exists('dd')) {
    /**
     * Dumps a variable in a human-readable way and ends the script execution.
     * @param mixed $var Variable to be dumped.
     * @param bool $plain (Optional) Dump variable as plain text instead of HTML.
     */
    function dd($var, bool $plain = false)
    {
        \Util::dump($var, $plain);
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

if (!function_exists('public_path')) {
    /**
     * Returns the real application `public` folder location in the file system.
     * @param string $path (Optional) Relative path to append to the location.
     * @return string Full `public` location.
     */
    function public_path(string $path = '')
    {
        return \Util::location('public/' . $path);
    }
}

if (!function_exists('session')) {
    /**
     * Gets the value associated to a key in the session data.
     * @param string|null $key (Optional) Key to get value (accepts dot notation keys). Use `null` to return the Session instance.
     * @param mixed $default (Optional) Default value to return if the key does not exist.
     * @return \Glowie\Core\Http\Session|mixed Returns the value if exists or the default if not, or the Session instance.
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
     * @return \Glowie\Core\Http\Request|mixed Returns the value if exists or the default if not, or the Request instance.
     */
    function request(?string $key = null, $default = null)
    {
        $request = \Glowie\Core\Http\Rails::getRequest();
        if (is_null($key)) return $request;
        return $request->get($key, $default);
    }
}

if (!function_exists('response')) {
    /**
     * Sends a raw plain text body to the response.
     * @param string|null $content (Optional) Content to set as the body. Use `null` to return the Response instance.
     * @param string $type (Optional) Content type header to set, defaults to `text/plain`.
     * @return \Glowie\Core\Http\Response|void Returns the Response instance.
     */
    function response(?string $body = null, string $type = 'text/plain')
    {
        $response = \Glowie\Core\Http\Rails::getResponse();
        if (is_null($body)) return $response;
        $response->setBody($body, $type);
    }
}

if (!function_exists('db')) {
    /**
     * Creates a new Kraken database instance.
     * @param string $database (Optional) Database connection name (from your app configuration).
     * @return \Glowie\Core\Database\Kraken Kraken database instance query builder.
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
     * @return \Glowie\Core\Http\Cookies|mixed Returns the value if exists or the default if not, or the Cookies instance.
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
     * @return \Glowie\Core\Tools\Cache|mixed Returns the value if exists or the default if not, or the Cache instance.
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
     * @return \Glowie\Core\Tools\Authenticator Authenticator instance.
     */
    function auth()
    {
        return new \Glowie\Core\Tools\Authenticator();
    }
}

if (!function_exists('validator')) {
    /**
     * Returns a Validator instance.
     * @return \Glowie\Core\Tools\Validator Validator instance.
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
     * @return \Glowie\Core\Tools\Uploader Uploader instance.
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
     * @return \Glowie\Core\Collection Collection instance.
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
     * @return \Glowie\Core\Element Element instance.
     */
    function element(array $data = [])
    {
        return new \Glowie\Core\Element($data);
    }
}

if (!function_exists('http')) {
    /**
     * Creates a new HTTP client instance.
     * @param array $headers (Optional) Custom headers to send in the request. Must be an associative array with the key being the name of the header\
     * and the value the header value (can be a string or an array of strings).
     * @return \Glowie\Core\Tools\Crawler Crawler instance.
     */
    function http(array $headers = [])
    {
        return new \Glowie\Core\Tools\Crawler($headers);
    }
}

if (!function_exists('redirect')) {
    /**
     * Redirects to a relative or full URL.
     * @param string $destination Target URL to redirect to.
     * @param int $code (Optional) HTTP status code to pass with the redirect.
     * @return void
     */
    function redirect(string $destination, int $code = 307)
    {
        return \Glowie\Core\Http\Rails::getResponse()->redirect($destination, $code);
    }
}

if (!function_exists('view')) {
    /**
     * Renders a view file.
     * @param string $view View filename. Must be a **.phtml** file inside **app/views** folder, extension is not needed.
     * @param array $params (Optional) Parameters to pass into the view. Should be an associative array with each variable name and value.
     */
    function view(string $view, array $params = [], bool $absolute = false)
    {
        return \Glowie\Core\Http\Rails::getController()->renderView($view, $params, $absolute);
    }
}

if (!function_exists('layout')) {
    /**
     * Renders a layout file.
     * @param string $layout Layout filename. Must be a **.phtml** file inside **app/views/layouts** folder, extension is not needed.
     * @param string|null $view (Optional) View filename to render within layout. You can place its content by using `$this->getView()`\
     * inside the layout file. Must be a **.phtml** file inside **app/views** folder, extension is not needed.
     * @param array $params (Optional) Parameters to pass into the rendered view and layout. Should be an associative array with each variable name and value.
     * @param bool $absolute (Optional) Use an absolute path for the view file.
     */
    function layout(string $layout, ?string $view = null, array $params = [], bool $absolute = false)
    {
        return \Glowie\Core\Http\Rails::getController()->renderLayout($layout, $view, $params, $absolute);
    }
}

if (!function_exists('csrf_token')) {
    /**
     * Returns the session CSRF token if already exists or creates a new one.
     * @return string Returns the stored or new CSRF token for the current session.
     */
    function csrf_token()
    {
        return \Util::csrfToken();
    }
}

if (!function_exists('logger')) {
    /**
     * Writes an information to the app error log (if enabled).
     * @param string $content Content to be written.
     */
    function logger(string $content)
    {
        $e = new \Exception($content);
        $date = date('Y-m-d H:i:s');
        return \Glowie\Core\Error\Handler::log("[{$date}] {$e->getMessage()}\n{$e->getTraceAsString()}\n\n");
    }
}

if (!function_exists('now')) {
    /**
     * Creates a DateTime with current date and time.
     * @return DateTime DateTime instance.
     */
    function now()
    {
        return new \DateTime();
    }
}

if (!function_exists('today')) {
    /**
     * Creates a DateTime with current date.
     * @return DateTime DateTime instance.
     */
    function today()
    {
        return new \DateTime('today');
    }
}

if (!function_exists('dispatch')) {
    /**
     * Adds a job to the queue.
     * @param string $job A job classname with namespace. You can use `JobName::class` to get this property correctly.
     * @param mixed $data (Optional) Data to pass to the job.
     * @param string $queue (Optional) Queue name to add this job to.
     * @param int $delay (Optional) Delay in seconds to run this job.
     */
    function dispatch(string $job, $data = null, string $queue = 'default', int $delay = 0)
    {
        return \Glowie\Core\Queue\Queue::add($job, $data, $queue, $delay);
    }
}

if (!function_exists('is_empty')) {
    /**
     * Checks if a variable is empty.\
     * A numeric/bool safe version of PHP `empty()` function.
     * @var mixed $variable Variable to be checked.
     * @return bool Returns true if the variable is empty, false otherwise.
     */
    function is_empty($variable)
    {
        return \Util::isEmpty($variable);
    }
}

if (!function_exists('retry')) {
    /**
     * Tries to run a function until the number of attempts is reached.
     * @param int $attempts Maximum number of attempts.
     * @param Closure $callback Function to be called.
     * @param int $sleep (Optional) Delay between each try (in milliseconds).
     * @return mixed Returns the function result on success.
     */
    function retry(int $attempts, Closure $callback, int $sleep = 100)
    {
        return \Util::retry($attempts, $callback, $sleep);
    }
}

if (!function_exists('storage_path')) {
    /**
     * Returns the real application `storage` folder location in the file system.
     * @param string $path (Optional) Relative path to append to the location.
     * @return string Full `storage` location.
     */
    function storage_path(string $path = '')
    {
        return \Util::location('storage/' . $path);
    }
}
