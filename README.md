

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

# Now I'm Explaining Your 6 Tasks One by One:

#### Task Number 1 & 2 you can see well by opening files into my projects
##### Model: 
-Product, Category
#### Migration File:
-2023_12_31_152943_create_products_table.php
-2023_12_31_153009_create_categories_table.php
#### And the relationship Table between products and categories.
-2023_12_31_153254_create_category_product_table.php
    

