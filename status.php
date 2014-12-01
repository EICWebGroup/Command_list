puttyでcodegarageまで行って
	php artisan route … URI,Name,Actionを参照
	→ここを参照して下のF12におけるrequestに誤りがないか調べる
	
F12
・request
	・remote address
	・request url
	・request method
・response
	・status code

・request payload(coegarageの場合)
	・content
	・tag(tags_idではない)
	・title

http status code(cf: http://ja.wikipedia.org/wiki/HTTP%E3%82%B9%E3%83%86%E3%83%BC%E3%82%BF%E3%82%B9%E3%82%B3%E3%83%BC%E3%83%89)
	5xx … server error
	→500のとき、
		・HTMLで確認
		・jsonのときはF12のresponseで確認(json parse online で整形)
	