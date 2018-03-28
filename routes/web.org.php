<?php

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
//base
Route::get('/', function () {
    return view('welcome');
});

// 3-3
// Route::get('/', function () {
// 	return '<h1>Hello Foo</h1>';
// });

// 3-4
// Route::get('/{foo}', function ($foo) {
// 	return $foo;
// });

// 3-5
// Route::get('/{foo?}', function ($foo = 'bar') {
// 	return $foo;
// });

// 3-6
// Route::pattern('foo', '[0-9a-zA-Z]{3}');
// Route::get('/{foo?}', function ($foo = 'bar') {
// 	return $foo;
// });

// 3-7
// Route::get('/{foo?}', function ($foo = 'bar') {
// 	return $foo;
// })->where('foo', '[0-9a-zA-Z]{3}');

// 3-8
Route::get('/', [
	'as' => 'home',
	function () {
		return 'my name is "home".';
	}
]);
Route::get('/home', function () {
	return redirect(route('home'));
});

// 4-1
Route::get('/', function () {
	return view('errors.503');
});

// 4-2
Route::get('/', function () {
	return view('welcome')->with('name', 'Foo');
});

// 4-4
Route::get('/', function () {
	return view('welcome')->with([
		'name' => 'Foo',
		'greeting' => 'hi hello Anyong',
	]);
});

// 4-5
Route::get('/', function () {
	return view('welcome', [
		'name' => 'Food',
		'greeting' => 'delicious',
	]);
});

// 5-5
Route::get('/', function () {
	$items = ['apple', 'banana', 'tomato'];
	return view('welcome', ['items' => $items]);
});

// 8-1
Route::get('/', 'WelcomeController@index');

// 8-3
Route::resource('articles', 'ArticlesController');

// 9-3
// Route::resource('/', 'ArticlesController@index');
Route::get('auth/login', function () {
	$credentials = [
		'email' => 'John@example.com',
		'password' => 'password'
	];

	if (! auth()->attempt($credentials, true)) {
		return '로그인 정보가 정확하지 않습니다.';
	}

	return redirect('protected');
});
Route::get('protected', ['middleware' => 'auth', function () {
	dump(session()->all());
	// if (! auth()->check()) {
	// 	return 'who are you?';
	// };
	return 'welcome ' . auth()->user()->name;
}]);
Route::get('auth/logout', function () {
	auth()->logout();
	return 'see you again!!';
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 12-1
Route::resource('articles', 'ArticlesController');
Route::resource('/', 'ArticlesController');

// 12-4
// DB::listen(function ($query){
// 	// var_dump($query->sql);
// 	dump($query->sql);
// 	// dump($query);
// });

// 14-2
// Event::listen('article.created', function ($article) {
// 	var_dump('이벤트를 받았습니다. 받은 데이터(상태)는 다음과 같습니다.');
// 	var_dump($article->toArray());
// });

// 16-3
Route::get('mail', function () {
	$article = App\Article::with('user')->find(1);

	return Mail::send(
		'emails.articles.created',  // view
		// ['text' => 'emails.articles.created-text'],
		compact('article'),			// data
		function ($message) use ($article) {	// closer
			$message->to('gold9ine@naver.com');
			$message->subject('새 글이 등록되었습니다. - ' . $article->title);
		}
	);

	// return Mail::send(
	// 	'emails.articles.created',
	// 	compact('article'),
	// 	function ($message) use ($article) {
	// 		$message->from('jiransylim@gmail.com', 'fromyong');
	// 		// $message->to(['gold9in@naver.com', 'gold9ine@hanmail.net']);
	// 		$message->to('gold9ine@naver.com');
	// 		$message->subject('새 글이 등록되었습니다. - ', $article->title);
	// 		$message->cc('gold9ine@daum.com');
	// 		$message->attach(storage_path('framework/testing/lara.png'));
	// 	}
	// );
});

// 17-1
Route::get('markdown', function () {
	$text =<<<EOT
# 마크다운 에제 1

이 문서는 [마크다운][1]으로 썼습니다. 화면에는 HTML로 변환되어 출력됩니다.

## 순서 없는 목록 

- 첫 번째 항목
- 두 번째 항복[^1]

[1]: http://daringfireball.net/projects/markdown

[^1]: 두 번째 항목_ http://google.com
EOT;

	return app(ParsedownExtra::class)->text($text);
});