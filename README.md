

### Require PHP version minimum  (PHP v8.1.10) 


#### STEP:1 Clone the repository
    git clone https://github.com/rahatMahmud176/inflexionpoint-task.git

#### STEP:2 Composer install
    composer install
    
#### STEP:3 Generate .env file 
    cp .env.example .env
    
#### STEP:4 Open the .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your
#### like,
    DB_DATABASE="db_inflexionpoint_task"
    DB_USERNAME="root"
    DB_PASSWORD=""

#### STEP:5 Now Generating The APP Key By Using Command:   
    php artisan key:generate

#### STEP:6 More Important Task(6 & 7 number Point) 
#### Migrate The Database With Seeders.
    php artisan migrate:fresh --seed
#### -now you can see the database tables with 2 Users, 5 categories, and 25 products.


#### STEP:7 Open the ProductObserver file and Uncomment Cteated method.
##### (App\Observers\ProductObserver)

##### From, 
    // public function created(Product $product): void
    // { 
    //     $data['email']   = Auth::user()->email;
    //     $data['subject'] = "Dear user, Product Created successfully."; 
    //     dispatch(new SendMailJob($data));
    // }
##### To,
    public function created(Product $product): void
    {  
        $data['email']   = Auth::user()->email;
        $data['subject'] = "Dear user, Product Created successfully."; 
        dispatch(new SendMailJob($data));
    }

#### Now The Project is Run By using Command:
    php artisan serve
    Go to http://localhost:8000/login


