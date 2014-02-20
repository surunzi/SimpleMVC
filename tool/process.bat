::压缩CSS
for %%i in (default,id,class) do java -jar yuicompressor-2.4.2.jar ..\public\css\%%i.css -o ..\public\css_min\%%i.css --charset utf-8
set css_path=..\public\css_min\
type %css_path%bootstrap.min.css %css_path%default.css  %css_path%id.css %css_path%class.css > %css_path%simplemvc.css
::压缩JS
for %%i in (function, effect) do java -jar yuicompressor-2.4.2.jar ..\public\js\%%i.js -o ..\public\js_min\%%i.js --charset utf-8
set js_path=..\public\js_min\
type %js_path%jquery\jquery.js %js_path%bootstrap.min.js %js_path%function.js %js_path%effect.js > %js_path%simplemvc.js
::压缩VIEW
setlocal enabledelayedexpansion
for /r ../view %%i in (*_v.php) do (
set str=%%i
set str=!str:view=view_min!
java -jar htmlcompressor-1.5.3.jar --preserve-php -p regexp.txt %%i -o !str!
)
pause