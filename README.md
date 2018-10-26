# php-ruleset

PHP のコーディングスタイルの検査, 自動整形するためのルールセット。

# Install

Composerでライブラリとルールセットのインストール。

```bash
$ composer require --dev squizlabs/php_codesniffer
$ composer require --dev phpmd/phpmd
```

ComposerにGithubリポジトリを追加

```
"repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/grohiro/php-ruleset"
    }
]
```

## Laravel

```bash
$ composer require --dev grohiro/php-ruleset dev-master
```

ソースコードディレクトリに `app/` と `tests/` を指定。

```json
"scripts": {
  "cs-check": "phpcs --colors -p --standard=vendor/grohiro/php-ruleset/phpcs-ruleset.xml ./app ./tests",
  "cs-fix": "phpcbf --colors --standard=vendor/grohiro/php-ruleset/phpcs-ruleset.xml ./app ./tests",
  "phpmd": "phpmd ./app text vendor/grohiro/php-ruleset/phpmd-ruleset.xml"
}
```

## CakePHP3

```bash
$ composer require --dev grohiro/php-ruleset dev-cakephp3
```

ソースコードディレクトリに `src/` と `tests/` を指定。

```json
"scripts": {
  "cs-check": "phpcs --colors -p --standard=vendor/grohiro/php-ruleset/phpcs-ruleset.xml ./src ./tests",
  "cs-fix": "phpcbf --colors --standard=vendor/grohiro/php-ruleset/phpcs-ruleset.xml ./src ./tests",
  "phpmd": "phpmd ./src text vendor/grohiro/php-ruleset/phpmd-ruleset.xml"
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
