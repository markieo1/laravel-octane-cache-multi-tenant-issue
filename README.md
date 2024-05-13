# To reproduce the issue.
- Create a new tenant
  - `INSERT INTO tenants (name,"domain","database",created_at,updated_at) VALUES ('Test','localhost','foo',NULL,NULL);`
- Run the command `php artisan octane:serve` and in the browser open `http://localhost:8000/`
- You will see the error: `Driver [octane] is not supported.`
- When you execute the following command in: `php artisan tinker`:
    - `Cache::store('octane')->put('framework', 'Laravel', 30);`
- No issue occurs.
- If you comment the line `\Spatie\Multitenancy\Tasks\PrefixCacheTask::class` in the file `config/multitenancy.php` the issue is solved.
