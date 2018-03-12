<!doctype html>
<html>
<head>
    <title>424 Failed Dependency</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <style>
        body {
            background-color: #f1f4f5;
            color: #37474f;
            line-height: 1.4;
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            }
        .error_code {
            display: block;
            font-size: 92px;
            font-weight: 700;
            margin-top: -25px;
            }
        .error_brief {
            display: block;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 15px;
            }
        .help_button, .fix_button {
            background-color: #399bff;
            color: #fff;
            margin-top: 15px;
            font-size: 14px;
            padding: 7px 20px 7px 20px;
            border: none;
            border-radius: 3px;
            vertical-align: middle;
            cursor: pointer;
            }
        .fix_button {
            background-color: #38ad41;
            }
        #fix_details {
            margin-top: 40px;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0.3s, opacity 0.3s linear;
            }
    </style>

    <script language="JavaScript">
        function toggleHelp() {
            var e = document.getElementById("fix_details");
            if (e.style.visibility == 'visible') {
                e.style.visibility = 'hidden';
                e.style.opacity = 0;
            } else {
                e.style.visibility = 'visible';
                e.style.opacity = 1;
            }
        }
    </script>
</head>
<body>

<div style="display: table; position: absolute; height: 100%; width: 100%;">
    <div style="display: table-cell; vertical-align: middle; padding: 0 40px;">
        <div style="margin-left: auto; margin-right: auto; width: 520px;">
            <div style="float:left; width:200px; text-align: center; padding-right: 20px;">
                <span class="error_code">424</span>
                <span class="error_description">Failed Dependency</span>
            </div>
            <div style="float:left; width:300px;">
                <span class="error_brief">Заблокировано правилами безопасности</span>
                <span class="error_detail">Запрос содержит признаки попытки использования уязвимости на сайте</span>
                <br>
                <input type="button" value="Как это исправить?" class="help_button" onclick="toggleHelp()">
            </div>
            <div style="clear:both"></div>
            <div id="fix_details">
                Если Вы администратор сайта, самый быстрый способ исправить эту ошибку &mdash; воспользоваться
                Технической проверкой сайта в панели управления хостингом.
                
                <br>
                <input type="button" value="Техническая проверка сайта" class="fix_button" onclick="location.href = 'https://adm.tools/troubleshooting/?host=citybook.kwst.net&error=424&request=WqX1oFvOyIYABHWXGOoAAADB&time=2018-03-12%2005:36:00'">
                <br><br>
                <a href="https://www.ukraine.com.ua/faq/error-424.html">Подробнее о возможных причинах ошибки...</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>