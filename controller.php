// There are three types of controller in Laravel :

1) basic controller
2) single action controller
3) Resource controller

--> steps follow in Basic controller:

1> write in terminal of vs code = php artisan make:controller democontroller

2> Then create a function in your new controller :

class democontroller extends Controller
{
    public function index(){
        return view('home');
    }
}

3> Then go to your project -> Routes folder ->web.php

4> In web.php you can use namespace given in your new controller file as we create :
    use App\Http\Controllers\democontroller;

5> Then write this code for output in web.php :
Route::get('/', [democontroller::class, 'index']);

6> Then go back to terminal write to show output : php artisan serve


--> steps follow in single Action controller:

1> write in terminal of vs code => php artisan make:controller SingleActionController --invokable

2> Then write this code for output in web.php :
Route::get('/About', SingleActionController::class);

3> Then create a function in your new singleactioncontroller.php

public function __invoke(Request $request)
    {
        return view('Home');
    }

4> Then write this code for output in web.php :
   Route::get('/Home', SingleActionController::class);

5> Refresh the page


--> steps follow in Resource controller:

1> go to terminal then write command for create new Resource controller => php artisan make:controller photoController --resource

2>

