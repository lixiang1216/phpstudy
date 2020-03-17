<?php
/*
 * @Author: Lixiang
 * @Date: 2020-01-09 14:15:33
 * @LastEditTime : 2020-01-17 17:54:19
 * @Description: file content
 */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Habit;
use App\Country;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
use App\Jobs\EmailUserNewPost;

Route::get('/', function (Faker $faker) {
    return view('welcome',compact('faker'));
});

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    return "my email verfiy";
})->middleware('verified');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{user}', 'UserController@show')->name('user.show');
Route::get('/post/{post}/name/{name}', 'PostController@show')->name('post.show');

Route::get('/test', function (Request $request) {
    $user = $request->user();
    $user->profile()->firstOrCreate(
        ['user_id'=>$user->id],
        ['phone'=>'17600100144']);
    dd($user->profile->phone);
    //return view('welcome');
});

Route::get('/test2', function (Request $request) {
    // $user = $request->user();
    // $post = $user->post->toArray();
    // dd($post);

    $post = Post::findOrFail (1);
    dump($post->user);
    return view('welcome');
});

//一对多关联保存
Route::get('/test3', function (Request $request) {
    $user = $request->user();
    //dd($user->name);

    // $user->post()->createMany([
    //     ['title'=>'tilleone'],
    //     ['title'=>'tilletwo']
    // ]);
   
    
    // $user->post()->saveMany([
    //     new App\Post(['title'=>'titlethree']),
    //     new App\Post(['title'=>'titlefour']),
    // ]);

    dd($user->post);
});

Route::get('/factory', function (Request $request) {
    factory('App\User',2)->create();
    // $post = Post::find(1);
    // dd($post->user->name);
});

//模拟多对多关联关系
Route::get('/faker', function (Request $request) {
    // Habit::create([
    //     'name'=>'LoL'
    // ]);
    // Habit::create([
    //     'name'=>'WOW'
    // ]);
    // Habit::create([
    //     'name'=>'Sleep'
    // ]);
    // Habit::create([
    //     'name'=>'Eating'
    // ]);
    // DB::table('habit_user')->insert([
    //     ['user_id'=>1,'habit_id'=>1,'level'=>'喜欢'],
    //     ['user_id'=>1,'habit_id'=>2,'level'=>'一般'],
    //     ['user_id'=>1,'habit_id'=>3,'level'=>'一般'],
    //     ['user_id'=>2,'habit_id'=>2,'level'=>'喜欢'],
    //     ['user_id'=>2,'habit_id'=>3,'level'=>'喜欢'],
    //     ['user_id'=>2,'habit_id'=>4,'level'=>'喜欢'],
    //     ]
    // );

    $user = User::find(13);
    // $user->habits()->attach([
    //     2 => ['level'=>'优秀'],
    //     3 => ['level'=>'凑合'],
    // ]);
    //$user->habits()->detach([1,2]);
    //$user->habits()->sync([2,3,4]);
   
    $habit = Habit::find(2)->users;
    return $habit;
});

Route::get('/users/many', function (Request $request) {
    $userid = 1;
    $user = User::find($userid);
    $habits = $user->habits;
    return 1111;
    //dd($user->habits);
});

Route::get('/habits/many', function (Request $request) {

    $habit = Habit::find(1);
    //dd($habit->users);
});


Route::get('/users/attach', function (Request $request) {
    
    // dd($habit1->id);
    $user = User::find(1);
    
    foreach ($user->habits as $key => $value) {
       dump($value->pivot->level);
    }
    
    // $user->habits()->attach([
    //     3=>['level'=>'牛x'],
    //     2=>['level'=>'牛x'],
    //     1=>['level'=>'牛x'],
    // ]);
    
    //$user->habits()->detach([1,2]);

    //toggle
    //$user->habits()->toggle([1,2,3]);

    //同步关联 中间表记录中，所有未在 ID 数组中的记录都将会被移除。所以该操作结束后，只有给出数组的 ID 会被保留在中间表中
    //$user->habits()->sync([3]);

    //dd($user->habits);
    
    //反向关联
    // $habit = Habit::find(6);
    // $habit->users()->attach(14);
    // dd($habit->users);

});

Route::get('/hasManyThrough', function (Request $request) {

    // Country::create([
    //    'name'=>'中国'
    // ]);
    // Country::create([
    //     'name'=>'美国'
    // ]);
    $Country = Country::findOrFail(1);
    //dump($Country->posts);
    return $Country->posts->count();

});


Route::middleware(['auth', 'role'])->prefix('admin')->group(function () {
    Route::get('/show', function () {
        return "admin show!!!";
    });

    
});

/*
Route::get('user/{id}',function($id){
    $user = User::findOrFail($id);
    dd($user->post);
});

Route::get('post/{id}',function($id){
    $post = Post::findOrFail($id);
    //dd($post->user);
    return $post->user->name;
});
*/

Route::get('/jobTest', function (Request $request) {
    $users = User::all();
    foreach ($users as $user) {
        EmailUserNewPost::dispatch($user);
    }
});
