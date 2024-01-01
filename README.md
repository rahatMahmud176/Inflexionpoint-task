

 ### Require PHP version minimum  (PHP v8.1.10) 


#### STEP:1 Clone the repository
    git clone https://github.com/rahatMahmud176/inflexionpoint-task.git

#### STEP:2 Composer install
    composer install
    
#### STEP:3 Generate .env file 
    cp .env.example .env
    
###### Open the .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your

- Run: php artisan key:generate

- Run: php artisan migrate:fresh --seed
- Open the ProductObserver file. (App\Observers\ProductObserver)
###### Uncomment Cteated function.
- Run: php artisan serve
- Go to http://localhost:8000/
