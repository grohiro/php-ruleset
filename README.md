# php-ruleset

PHP のコーディングスタイルの検査, 自動整形するためのルールセット。

# Install

composer.json に Github リポジトリを追加

```
"repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/grohiro/php-ruleset"
    }
]
```

インストール

```
$ composer require grohiro/php-ruleset dev-master
```

フレームワークにあわせて composer.json にスクリプトを追加。

## Laravel

ソースコードディレクトリに `app/` と `tests/` を指定。

```json
"scripts": {
  "cs-check": "phpcs --colors -p --standard=vendor/grohiro/php-ruleset/ruleset/laravel/phpcs-ruleset.xml ./app ./tests",
  "cs-fix": "phpcbf --colors --standard=vendor/grohiro/php-ruleset/ruleset/laravel/phpcs-ruleset.xml ./app ./tests",
  "phpmd": "phpmd ./app text vendor/grohiro/php-ruleset/ruleset/laravel/phpmd-ruleset.xml"
}
```

## CakePHP3

ソースコードディレクトリに `src/` と `tests/` を指定。

```json
"scripts": {
  "cs-check": "phpcs --colors -p --standard=vendor/grohiro/php-ruleset/ruleset/cakephp/phpcs-ruleset.xml ./app ./tests",
  "cs-fix": "phpcbf --colors --standard=vendor/grohiro/php-ruleset/ruleset/cakephp/phpcs-ruleset.xml ./app ./tests",
  "phpmd": "phpmd ./app text vendor/grohiro/php-ruleset/ruleset/cakephp/phpmd-ruleset.xml"
}
```


# Usage

コーディングスタイルの検査

```bash
$ composer run cs-check
```

コーディングスタイルの自動修正

```bash
$ composer run cs-fix
```

コードの静的解析。複雑なコード、Best Practiceに沿っていないコードの検出。

```bash
$ composer run phpmd
```
