# Laravel-API
Laravelで作成したAPIサーバーです。
## 実装機能
### User
• ユーザーID, 初期データを設定してクライアント側に返します。
  
### Login
• ログインデータ保存  
• ログイン日数によるアイテム付与  
• ログイン報酬のマスターデータを作成(JSON)
  
### Tutorial
• チュートリアルの進行状況をデータベースで管理
  
### Quest
• master_questテーブルの作成  
• user_questテーブルの作成  
• クエストのマスターデータを作成(JSON)
  
### Character
• キャラクターの表示  
• キャラクターの売却  
• キャラクターのマスターデータを作成(JSON)
  
### Gacha
• master_gacha tableの作成  
• master_gacha_character tableの作成  
• ガチャが実行できる状態か確認(ガチャの期間が終了していないか、ガチャを引くための通貨量をユーザーが所持しているかどうか、など)  
• ガチャで引くキャラクターの取得確率を設定  
• ガチャ設定のマスターデータを作成(JSON)  
• ガチャで獲得できるキャラクターのマスターデータ作成(JSON)  
  
### Shop
• master_shop tableの作成
• ショップの商品データ管理(有償クリスタルの個数と価格などを設定)
• 商品のマスターデータ作成(JSON)
  
### Present
• user_present tableの作成  
• 付与されたアイテムをユーザーが取得したいタイミングで獲得できるよう設定  
• プレゼントのデータが大きくなりすぎないよう、プレゼントアイテムに取得期限をつけ、  
期限を過ぎたものは破棄
  
## テーブル一覧
### master_login_item table
|Column|Type|option
|------|----|----|
|login_day|int|ログイン日数|
|item_type|int|1:有償クリスタル 2:無償クリスタル 3:フレンドコイン|
|item_count|int|付与個数|
  
### master_quest table
|Column|Type|option
|------|----|----|
|quest_id|int|クエストの種類|
|quest_name|varchar|クエスト名|
|open_at|timestamp|クエストがプレイ出来るようになる日時|
|close_at|timestamp|クエストがプレイ出来なくなる日時|
|item_type|int|クリア報酬の種類 1:有償クリスタル 2:無償クリスタル 3:フレンドコイン など|
  
### master_character table
|Column|Type|option
|------|----|----|
|character_id|int|キャラクターのID|
|asset_id|varchar|キャラクターのimageのファイル名|
|character_name|varchar|キャラクター名|
|rarity|int|レア度|
|type|int|属性|
|sell_point|int|キャラクターの売却額|
  
### master_gacha table
|Column|Type|option
|------|----|----|
|gacha_id|int|ガチャの種類|
|banner_id|varchar|ガチャ毎の紹介画像|
|cost_type|int|どの通貨でガチャを引くのか(1:有償クリスタルのみ 2:クリスタル 3:フレンドコイン)|
|cost_amount|int|ガチャに引くための通貨量|
|draw_count|int|ガチャを引く回数|
|open_at|datetime|ガチャ開始日時|
|close_at|datetime|ガチャ終了日時|
|description|varchar|ガチャの説明文|
  
### master_gacha_character table
|Column|Type|option
|------|----|----|
|gacha_id|int|master_gacha tableと同じ|
|character_id|int|ガチャで獲得したキャラクターのID|
|weight|int|キャラクターの取得確率|
  
### master_shop table
|Column|Type|option
|------|----|----|
|shop_id|varchar|商品ID|
|cost|int|価格|
|amount|int|個数|
  
  
### user_profile table
|Column|Type|option
|------|----|----|
|user_id|varchar(37)|ユーザーID|
|user_name|varchar(32)|ユーザーネーム|
|crystal|int(10)|有償クリスタル|
|crystal_free|int(10)|無償クリスタル|
|friend_coin|int(10)|通貨|
|tutorial_progress|smallint(5)|チュートリアル進行状況|
|created_at|timestamp|user_profileが作成された日時|
|updated_at|timestamp|user_profileが更新された日時|
  
### user_login table
|Column|Type|option
|------|----|----|
|user_id|varchar(37)|ユーザーID|
|login_day|smallint|ログインした日数|
|last_login_at|timestamp|最終ログイン日時|
|updated_at|timestamp|user_loginを作成した日時|
|created_at|timestamp|user_loginを更新した日時|
  
### user_quest table
|Column|Type|option
|------|----|----|
|user_id|varchar|ユーザーID|
|quest_id|int|クエストの種類|
|status|tinyint|1:出発 2:リタイア 3:クリア|
|score|int|スコア|
|clear_time|int|最速タイム|
|cleated_at|timestamp|user_quest tableを作成した日時|
|updated_at|timestamp|user_quest tableを最後に更新した日時|
  
### user_character table
|Column|Type|option
|------|----|----|
|id|bigint|キャラクターのID|
|user_id|varchar|ユーザーID|
|character_id|int|master_characterと同じ|
|created_at|timestamp|user_character tableを作成した日時|
|updated_at|timestamp|user_ tableを最後に更新した日時|
  
### user_present table
|Column|Type|option
|------|----|----|
|user_id|varchar|ユーザーID|
|present_id|bigint|プレゼントのID|
|item_type|smallint|1:有償クリスタル 2:無償クリスタル 3:フレンドコイン|
|item_count|int|付与個数|
|description|varchar|プレゼント表示画面での説明文|
|limited_at|timestamp|プレゼントアイテムの取得期限|
|updated_at|timestamp|user_present tableが作成された日時|
|created_at|timestamp|user_present tableが最後に更新された日時|
