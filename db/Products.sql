
# 商品テーブルの削除
DROP TABLE IF EXISTS php1_products;

# 商品テーブル
CREATE TABLE  php1_products(
    `code`        VARCHAR(4)    PRIMARY KEY,    # 商品コード 主キー
    `name`        VARCHAR(64)   NOT NULL,       # 商品名
    `price`       INT UNSIGNED,                 # 金額
    `category_id` INT UNSIGNED  NOT NULL        # カテゴリーID 外部キー
);

# 商品データ
INSERT INTO php1_products( `code`, `name`, `price`, `category_id` ) VALUES 
    ( "1901", "マルゲリータ", 980, 1 ),
    ( "1902", "アメリカン", 720, 1 ),
    ( "1903", "ジェノベーゼ", 1340, 1 ),
    ( "2901", "コーラ", 200, 2 ),
    ( "2902", "スプライト", 200, 2 ),
    ( "2903", "スーパードライ", 300, 2 ),
    ( "3901", "バニラシェイク", 590, 3 ),
    ( "3902", "ストロベリーシェイク", 590, 3 ),
    ( "3903", "プチパンケーキ", 460, 3 );

