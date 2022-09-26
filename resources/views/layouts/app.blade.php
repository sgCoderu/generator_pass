<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="<?= csrf_token() ?>">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <title>Генератор паролей</title>
</head>
<body>
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="p-6 border-2 border-dark flex flex-col justify-center">
            <label for="SymbolsType">Входящие символы:</label>
            <select id="SymbolsType" class="border-2 border-dark focus:outline-none focus:border-emerald-600 focus:ring-emerald-600" multiple>
                <option value="1">Цифры</option>
                <option value="2">Маленькие буквы</option>
                <option value="3">Большие буквы</option>
                <option value="4">Специальные символы</option>
            </select>
            <div class="mt-6">
                <label for="Length">Размер пароля:</label>
                <input id="Length" class="border-2 border-dark focus:outline-none focus:border-emerald-600 focus:ring-emerald-600" type="number" value="8" min="4" max="32">
            </div>
            <div class="h-[20px] my-6 flex justify-center items-center">
                <span id="Result">Результат будет тут</span>
            </div>
            <button id="Generate" type="button" class="px-4 py-2 bg-emerald-600 border-0 rounded text-white hover:bg-emerald-500">Сгенерировать</button>
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>
