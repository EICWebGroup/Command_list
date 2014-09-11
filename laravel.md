###laravel

####使うファイル
* route.php(appフォルダ内)
* HomeController.php(controllerフォルダ内)
* viewフォルダの中の任意のファイル
* modelフォルダの中の任意のファイル

1.route.php

次のようにしてHomeController.phpの関数に移動。ここれ「@」以降が関数名になる。  
「'/'」はブラウザの「http://localhost:8000/」で確認
```php
Route::get('/','HomeController@showWelcome');
```

2.HomeController.php

次の例では「View::make」を使ってsample.phpファイルにmy_commentsの変数を渡す。
```php
public function showWelcome()
{
	$comments = Comment::all();
	
	return View::make('sample',["my_comments"=>$comments]);
}
```

3.sample.php

ブラウザに表示するHTMLをくむ。  
formで送信するデータは、route.phpに
```php
Route::post('/','HomeController@postForm');
```
などと記述しておくことで、HomeController.phpの関数へ送られる。

4.HomeController.php
```php
public function postForm(){

	$comments = new Comment;
	$comments->name = Input::get('name');
	$comments->comment = Input::get('comment');
	$comments->save();
	
	return Redirect::to('/');
}
```
上記のようにデータをクラスに加えてsample.phpにredirectする。

5.modelフォルダ内のComment.phpにはテーブルごとのクラスを記述してある。


ディレクトリを変更したときは、Homestead.yamlのsitesを変更し、cmdでvagrant provisionを実行、puttyでcomposer installを実行