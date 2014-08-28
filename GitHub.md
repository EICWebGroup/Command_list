#GitHubの使い方

###GitHub上のファイルをダウンロードして編集、アップロードする

コマンドプロンプトを開く

#####1．GitHubからダウンロードする
* コマンドプロンプトでレポジトリをダウンロードしたいファイルにまで移動
* git init　を入力
* git clone URL(※)　を入力

#####2.ファイルの編集
* ダウンロードしたファイルを開き、目的のファイルを編集する
* このときファイルの拡張子をmdにすればhtmlのように文章を装飾できる

#####3.GitHubにアップロード
* コマンドプロンプトで、ダウンロードしたレポジトリにまで移動
* git add . を入力
* git commit -m "メッセージ"　を入力
* git push origin master　を入力
* UsernameとPasswordを入力

※URLはrepositoryのURLをコピーする

変更履歴：GitHubページ上のコードの右上にあるhistoryボタンを押すと選んで見られる

既存のrepositoryをアップロードする際のコマンドプロンプト  
git pull URL master  
git add .  
git commit -m "メッセージ"  
git push URL master  

ファイルを削除した後アップロードする際に行うコマンドプロンプト  
git pull URL master  
git add --all  
git commit -m "メッセージ"  
git push URL master  
UsernameとPasswordを入力する

レポジトリの作成方法  
フォルダを作成する  
git　cd でレポジトリに変えたいフォルダまで移動する  
git init  