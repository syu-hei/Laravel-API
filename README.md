# ユーザーIDを用いたログインとログイン日数によるアイテム付与を実装します。
• ログインデータ保存  
• ログイン日数によるアイテムを付与  
• ログイン報酬のマスターデータを作成(JSON)  
※マスターデータとは、アイテムの価格などユーザーに依存しないデータの事です。
## user_login table
|Column|Type|option
|------|----|----|
|user_id|varchar|ユーザーID|
|login_day|smallint|ログインした日数|
|last_login_at|timestamp|最終ログイン日時|
|updated_at|timestamp|user_loginを作成した日時|
|created_at|timestamp|user_loginを更新した日時|
## master_login_item table
|Column|Type|option
|------|----|----|
|login_day|int|ログイン日数|
|item_type|int|1:有償クリスタル 2:無償クリスタル 3:フレンドコイン|
|item_count|int|付与個数|
