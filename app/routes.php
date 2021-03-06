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

Route::get('/', function()
{
    /*
    Schema::create('art',function($newtable){
        $newtable->increments('id');
        $newtable->string('artist');
        $newtable->string('title',500);
        $newtable->text('description');
        $newtable->date('created');
        $newtable->date('exhibition_date');
        $newtable->timestamps();
    });
     */
    //$painting = new Painting;
    //$painting->title = 'Do No Wrong';
    //$painting->artist = 'D,DoRight';
    //$painting->year = 2014;
    //$painting->save();
    //Schema::table('art',function($newtable){
        ////$newtable->boolean('alumni');
        ////$newtable->dropColumn('exhibition_date');
    //});
    //$painting = Painting::find(1);
    //$painting->title = "Do No Wriong - Just Do Right";
    //$painting->save();
    //return $painting->title;
    $theLandmarks = array('St.Marks','Brouklyn Heights','Central parks','Time Square');
	return View::make('hello',array('theLocation'=>'NYQ','theWeather'=>'stormy','theLandmarks'=>$theLandmarks));
});
Route::get('about', function()
{
    return 'About content goes here';
});
Route::get('about/directions', function()
{
    return 'Directions go here';
});
Route::get('about/{theSubject}', function($theSubject)
{
    //about/classes
    return $theSubject.' content  go here';
});
Route::get('about/classes/{theSubject}', function($theSubject)
{
    //about/classes/sculpture(雕刻；刻蚀)
    return " Content  about {$theSubject} classes  go here";
});

Route::get('signup', function()
{
    return View::make('signup');
});
Route::post('thanks', function()
{
    $theEmail = Input::get('email');
    return View::make('thanks')->with('theEmail',$theEmail);
});
Route::get('/register', function()
{
    return View::make('register');
});

Route::post('/register', function()
{
    $user = new User;
    $user->email = Input::get('email');
    $user->username = Input::get('username');
    $user->password = Hash::make(Input::get('password'));
    $user->save();
    $theEmail = Input::get('email');
    return View::make('thanks2')->with('theEmail',$theEmail);
});
Route::get('/login', function()
{
    return View::make('login');
});
Route::post('/login', function()
{
    $credentials = Input::only('username','password');
    if (Auth::attempt($credentials)) {
        return Redirect::intended('/');
    }
    return Redirect::to('login');
});
Route::get('/logout', function()
{
    Auth::logout();
    return View::make('logout');
});
Route::get('/spotlight', array(
    //'before'=>'auth.basic',
    'before'=>'auth',
function()
{
    return View::make('spotlight');
}));
