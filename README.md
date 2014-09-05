# Symfony2 Doctine preUpdate event
preUpdateが正常に動くかためしてみた


## 使い方

### 準備編

```
$ git clone
$ cd sf-event-test
$ composer install
$ app/console doctrine:migrations:migrate
```

### 実行編

```
$ app/console server:run
```

あとはブラウザで適当にURLたたきましょう

```
wget http://localhost:8000/test
```

これでおk
