git config --global user.name "Ivan Russkij"
git config --global user.email RuVano@gmail.com		-Ваш email
git config --global color.ui auto									-цвет командной строки для Git
git config --list


pwd														- показать путь к текущей папке
echo $HOME										- показать путь к дом. каталогу git
cd ~													- перейти в домашний каталог ($HOME)
ls														- показать файлы в папке
ls -a													- показать файлы, включая скрытые
mkdir													- создать директорию
touch													- создать новый файл
copi (cp)											- копировать
muv (mv)											- переместить (переименовать)
echo "новый текст" > файл.txt	- перезаписать содержимое файла
cat файл.txt									- показать содержимое файла
remove (rm)										- удалить мимо корзины
remove (rm) -R папка					- удалить директорию и её вложения рекурсивно, мимо корзины

git init											- создаёт  ветку, с именем master по умолчанию, в текущем месте, путём создания сист. папки
git status 										- определяет текущее состояние репозитория
git remote add origin https://github.com/Ruvano/GIT.git					- добавить удалённый источник данных в гит
git remote -v									- показать список прямых подсоединений с сайта git

Создание коммита:
1) git commit -a == git add <filename> + git commit
2) git commit -am 'Коммит-сообщение-текст'						- здесь m (message) сообщение

git restore


