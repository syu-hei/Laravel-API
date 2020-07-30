# ガチャの設定を行いました。
• master_gacha tableの作成  
• master_gacha_character tableの作成  
• ガチャが実行できる状態か確認(ガチャの期間が終了していないか、ガチャを引くための通貨量をユーザーが所持しているかどうか、など)  
• ガチャで引くキャラクターの取得確率  
• ガチャ設定のマスターデータを作成(JSON)
• ガチャで獲得できるキャラクターのマスターデータ作成(JSON)  
## master_gacha table
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

## master_gacha_character table
|Column|Type|option
|------|----|----|
|gacha_id|int|master_gacha tableと同じ|
|character_id|int|ガチャで獲得したキャラクターのID|
|weight|int|キャラクターの取得確率|
