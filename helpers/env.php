function env($key, $default = null) {
    if (!file_exists(__DIR__.'/../.env')) {
        return $default;
    }
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
    $dotenv->load();
    return $_ENV[$key] ?? $default;
}