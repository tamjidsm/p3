<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

 //use Magyarjeti\LaravelLipsum\LipsumFacade


// Route::get('/hello', function()
// {
// 	return View::make('hello');
// });

Route::get('/', function()
{
	return View::make('index');
});

Route::get('/words', function()
{
	  return View::make('words');
});


Route::post('/words', function() {

     $input =  Input::get('count');
        // $input =  Input::all();
    // print_r($input);
    $generator = new Badcow\LoremIpsum\Generator();
 $paragraphs = $generator->getParagraphs($input);
 echo implode('<p>', $paragraphs);
    });



Route::get('/users', function()
{
	return View::make('users');
});



Route::post('/users', function() {
@include('view.users');
if (isset($_POST['address'])){
		$address= true;
	}
	else {
		$address= false;
	};

// $users =[];
$input =  Input::get('count');
// echo $input;
for ($i=0; $i <$input; $i++) {
	$faker = Faker\Factory::create();
	$user= $faker->name;
	if ($address){
		$useraddress= $faker->address;
	}
	
	echo $user;
	if ($address){
	echo '<br>';
	echo $useraddress;
}
	echo '<br>';
	echo '<br>';
	// array_push ($users, $user);
	// echo implode('<br>'.' ', $user);
};
// echo $faker->region; 

 // $generator = Faker\Factory::create();
// $populator = new Faker\ORM\Propel\Populator($generator);
// $populator->addEntity('Author', 5);
// // $populator->addEntity('Book', 10);
//  $insertedPKs = $populator->execute();



//      $input =  Input::get('count');
//   $faker = new Faker\Generator();
// $faker->addProvider(new Faker\Provider\en_US\Person($faker));

//     $generator = new Badcow\LoremIpsum\Generator();
//  $paragraphs = $generator->getParagraphs($input);
//  echo implode('<p>', $paragraphs);
    });



// sample
Route::get('/new', function() {

	$view  = '<h2>Testing</h2>';
    $view  .= '<form method="POST" action="/new">';
    $view .= 'Title: <input type="text" name="title">';
    $view .= '<input type="submit">';
    $view .= '</form>';
    return $view;	

});

// use Badcow\LoremIpsum;

Route::post('/new', function() {

     $input =  Input::get('title');
        // $input =  Input::all();
    // print_r($input);
    $generator = new Badcow\LoremIpsum\Generator();
 $paragraphs = $generator->getParagraphs($input);
 echo implode('<p>', $paragraphs);
    });

Route::get('/word', function()
{
	  return View::make('word');
});