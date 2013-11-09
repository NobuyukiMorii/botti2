# blog チュートリアル

CakePHP のチュートリアルプロジェクトです。

このリポジトリには、CakePHP 本体やプラグイン等の外部で提供されるコードは含まれておりません。
Composer を用いて取得するようになっていますので、git checkout 後に以下のコマンドを実行してください。

```bash
php composer.phar install
```

## 【応用】 Composer を用いた新規プロジェクトの構築方法

Composer を用いることで、外部のプラグインやライブラリを簡単に管理することができます。

* 新規フォルダを作成し、composer.phar、composer.json を設置します。

    > このプロジェクトの composer.json を参考にしてください。

* Composer の install コマンドで CakePHP を Vendor 配下にインストールします。

    php composer.phar install

* CakePHP の bake コマンドで プロジェクトの雛形を作成します。

    Vendor/bin/cake bake project .
