# キャラクターの設定を行いました。
• キャラクターの表示  
• キャラクターの売却  
• キャラクターのマスターデータを作成(JSON)
## master_character table
|Column|Type|option
|------|----|----|
|character_id|int|キャラクターのID|
|asset_id|varchar|キャラクターのimageのファイル名|
|character_name|varchar|キャラクター名|
|rarity|int|レア度|
|type|int|属性|
|sell_point|int|キャラクターの売却額|  

## user_character table
|Column|Type|option
|------|----|----|
|id|bigint|キャラクターのID|
|user_id|varchar|ユーザーID|
|character_id|int|master_characterと同じ|
|created_at|timestamp|user_character tableを作成した日時|
|updated_at|timestamp|user_ tableを最後に更新した日時|
