<<<<<<< HEAD
## Домашнє завдання:
- на 19.04.2023: [посилання](https://github.com/SurkovKostiantyn/php_hometask/blob/main/hometask_19_04_2023.md)

## Посилання на репозиторій:
[https://github.com/SurkovKostiantyn/php_hometask](https://github.com/SurkovKostiantyn/php_hometask)

## Структура проекту:
- `Home/Classes` - класи, інтерфейси, трейти
- `Home/public` - публічні файли, логи, кеш, інші файли, які не потрібно захищати, файл index.php
  - `.gitignore` - файл, який вказує git, які файли не потрібно заливати на сервер
- `composer.json` - файл, який вказує composer, які пакети необхідно встановити
- `Readme.md` - ми зараз в ньому
- `START.bat` - скрипт для запуску локального вебсервера
- `STOP.bat` - скрипт для зупинки локального вебсервера
- `nginx.conf` - конфігурація nginx з вказівками для запуску локального вебсервера
- `nginx/default.conf` - конфігурація nginx для запуску локального вебсервера
- `docker-compose.yml` - конфігурація docker-compose для запуску локального вебсервера

## Як запустити проект?
1. Склонуйте проект на свій комп'ютер:
   - переконайтесь, що у вас встановлено `Git`: команда `git --version` повинна вивести версію `git`
   - якщо не встановлено, то встановіть: https://git-scm.com/downloads
   - запустіть `cmd`, `powershell` або `git bash`
   - перейдіть в папку, де ви хочете зберігати проект (наприклад `cd D:\projects`)
   - виконайте команду: `git clone https://github.com/SurkovKostiantyn/php_hometask`
   - скопіюйте вміст директорії `php_hometask` в ваш проєкт
2. Встановіть залежності проєкт:
   - переконайтесь, що у вас встановлено `composer`: команда `composer --version` повинна вивести версію `composer`
   - якщо не встановлено, то встановіть: https://getcomposer.org/download/
   - відкрийте ваш проєкт в `IDE` (наприклад `PhpStorm`)
   - виконайте команду `composer install` в консолі
   - перевірте, чи з'явились файли в папці `vendor`
3. Запустіть локальний вебсервер:
   - перевірте, чи встановлено php: команда `php --version` повинна вивести версію `php`
   - якщо не встановлено, то встановіть: https://www.php.net/downloads
   - перевірте, чи встановлено nginx: команда `nginx -v` повинна вивести версію `nginx`
   - якщо не встановлено, то встановіть: https://nginx.org/ru/download.html
   - Зверніть увагу, що `php`, `nginx` повинні бути встановлені в корні диска С
   - переконайтесь, що у вас правильно налаштовано конфігурацію nginx
     - перегляньте файл `nginx.conf` в корені проєкту, він надається для прикладу
     - також ви можете замінити ним оригінальний файл `C:/nginx/conf/nginx.conf` та налаштувати його:
     - відкрийте файл `C:/nginx/conf/nginx.conf`
       - перевірте змінні `root`, `server_name`, `listen`
       - приклад:
         ```
         server {
             listen       80;
             server_name  localhost;
             root         D:/projects/php_hometask_petrik_pyatochkin/Home/public;
             index        index.php;
         ```

   - запустіть `START.bat`
   - перевірте, чи працює ваш проєкт: в браузері відкрийте адресу `http://localhost:80`
4. Коли з налаштуваннями закінчено, можете переходити до роботи над завданнями:
   - завдання ви можете знайти в корні проєкту в файлі `hometask_дата.md`
   - виконані завдання заливайте до свого репозиторію з комітом `поточна дата`
5. Важливо: зверніть увагу - це остання інструкція по налаштуванню вебсервера. Наступного разу ви будете працювати з вже налаштованим проєктом.
6. Якщо ви хочете зупинити вебсервер, запустіть файл `STOP.bat`
7. Усі запитання по інструкції можна задавати в чаті телеграму.

## Як запустити проект? (Docker/Windows)
1. Завантажте та встановіть Docker Desktop: https://www.docker.com/products/docker-desktop
2. Запустіть Docker Desktop
3. Переконайтесь, що в проекті встановлено `docker-compose`: команда `docker-compose --version` повинна вивести версію `docker-compose`
4. Відкрийте ваш проєкт в `IDE` (наприклад `PhpStorm`)
5. Виконайте команду `docker-compose up -d` в консолі
6. Перевірте, чи працює ваш проєкт: в браузері відкрийте адресу `http://localhost:80`

## Як запустити проект? (Docker/Linux)
1. Встановіть Linux(Debian/Ubuntu) dual boot
2. Якщо вийшло - встановіть Docker Desktop: https://www.docker.com/products/docker-desktop
3. Якщо не вийшло - встановіть Docker Engine: https://docs.docker.com/engine/install/ubuntu/
4. Поки досить Linux, можна відпочивати
=======
# Поточне завдання:
### [Домашнє завдання на 12.04.2023](https://github.com/SurkovKostiantyn/PHPTestProject/blob/main/README.md)
# Попередні завдання:
### [Тут поки що пусто](https://github.com/SurkovKostiantyn/PHPTestProject/blob/main/README.md)


# Домашнє завдання на 12.04.2023
## Підготовка до виконання:
### 1. У вас має буди створений акаунт на [GitHub](https://github.com)
### 2. Ви маєте встановити [Git](https://git-scm.com/downloads) на свій ПК/ноутбук:
  - Виберіть операційну систему
  - Завантажте і встановіть Git
  - Перевірте встановлення виконавши команду `git --v` в терміналі (консолі) вашої операційної системи.
### 3. У вас повинен бути створений репозиторій на [GitHub](https://github.com):
   - Назва репозиторію: `php_hometask_Lastname_Firstname`. 
   - Наприклад: `php_hometask_Pyatochkin_Petro`
   - Для створення репозиторію використовуйте [це посилання](https://github.com/new) 
   - Репозиторій має бути публічним -  `Public`
   - Файл `README.md` створювати не потрібно
### 4. Задача - клонувати репозиторій з завданням до вашого нового створеного репозиторію
   - Репозиторій із завданням, який потрібно клонувати: [Посилання](https://github.com/SurkovKostiantyn/PHPTestProject)
   - Для клонувати репозиторій можна двома шляхами:
   - Більш довгий шлях:
     - відкрити термінал (консоль) вашої операційної системи (наприклад: `cmd` в Windows, або `terminal` в MacOS)
     - Подумати, в на який диск і яку папку ви хочете клонувати репозиторій:
       - Наприклад, я хочу, щоб він був в папці `my_projects` на диску `D`
       - консольна команда для переходу в папку `my_projects` на диску `D` буде виглядати так: `cd D:\my_projects`
       - наступна команда буде виглядати так: `git clone https://github.com/Pyatochkin_Petro/php_hometask_Pyatochkin_Petro.git`
         - `git clone` - це команда для клонування репозиторію
         - посилання - це посилання на репозиторій, який потрібно клонувати
         - Таким чином на вашому ПК/ноутбуці буде створена папка `php_hometask_Pyatochkin_Petro` з репозиторієм
       - наступна команда буде виглядати так: `git clone https://github.com/SurkovKostiantyn/PHPTestProject.git`
         - цією командою ви клонуєте репозиторій із завданням
         - Таким чином на вашому ПК/ноутбуці буде створена папка `PHPTestProject` з репозиторієм
     - Після клонування репозиторіїв відкрити папку `PHPTestProject` в вашому IDE (наприклад: [PhpStorm](https://www.jetbrains.com/phpstorm/))
     - Також відкрити папку `php_hometask_Pyatochkin_Petro` в вашому IDE (наприклад: [PhpStorm](https://www.jetbrains.com/phpstorm/)) в іншому вікні
     - Скопіювати файли з папки `PHPTestProject` в папку `php_hometask_Pyatochkin_Petro`
     - Закрити вікно з папкою `PHPTestProject` та видалити цю папку з диску
     - Відкрити термінал (консоль) вашої операційної системи (наприклад: `cmd` в Windows, або `terminal` в MacOS)
     - Перейти в папку `php_hometask_Pyatochkin_Petro` виконавши команду `cd D:\my_projects\php_hometask_Pyatochkin_Petro`
     - Виконати команду `git add .`
     - Виконати команду `git commit -m "Initial commit"`
     - Виконати команду `git push`
     - Ввести логін та пароль від вашого акаунта на [GitHub](https://github.com)
     - Відкрити ВАШ репозиторій на [GitHub](https://github.com) та перевірити, що він містить файли з папки `PHPTestProject`
     - Готово! Це був довгий шлях, але ви виконали завдання!
   - Більш короткий шлях:
     - скористатись [цим посиланням](https://docs.github.com/en/repositories/creating-and-managing-repositories/duplicating-a-repository)
### 5. Тепер усі наступні домашні завдання ви повинні виконувати в вашому проекті:
- `php_hometask_Pyatochkin_Petro`
### 6. Кожне окреме завдання комітити з приміткою:
- `HomeTask #1`, `HomeTask #2` і т.д.
### 7. Завдання для КН-22: ###
 - в використати в вашому проекті шаблонізатор [Latte](https://latte.nette.org/en/) та за допомогою нього вивести шаблон index.tpl (index.latte)
 - використати Trait `DebugTrait` для виведення даних в консоль, поетапно прослідкувати виконання програми.
 - використати в проекті [Monolog](https://packagist.org/packages/monolog/monolog) для виведення логів в файли.
### 8. Завдання для КН-20, КН-20:
 - використати в проекті шаблонізатор [Smarty](https://www.smarty.net/) для виведення шаблонів index.tpl (index.latte).
>>>>>>> fe83195d1ba034e0494bc52861a4111d2a7677e3
