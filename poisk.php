<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/pages/piosk.css">
  <link rel="stylesheet" href="styles/settings.css">
  <title>Результаты поиска животных</title>
</head>
<body>

  <header>
    <h1>Результаты поиска животных</h1>
  </header>

  <div class="container">
    <div class="search-form">
      <input type="text" id="search-query" placeholder="Поиск по животным...">
      <button>Поиск</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>Вид животного</th>
          <th>Фото</th>
          <th>Доп. информация</th>
          <th>Клеймо</th>
          <th>Район</th>
          <th>Дата нахождения</th>
          <th>Контактный номер</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Собака</td>
          <td><img src="img/cat-dog.jpg" alt="Фото"></td>
          <td>Найден в парке, рядом с детской площадкой</td>
          <td>1234</td>
          <td>Центр</td>
          <td>2024-11-01</td>
          <td>89123456789</td>
        </tr>
        <tr>
          <td>Кошка</td>
          <td><img src="img/cat-dog.jpg" alt="Фото"></td>
          <td>Найдена у дома на улице Гагарина</td>
          <td>-</td>
          <td>Южный</td>
          <td>2024-11-05</td>
          <td>89223456789</td>
        </tr>
        <tr>
          <td>Собака</td>
          <td><img src="img/cat-dog.jpg" alt="Фото"></td>
          <td>Без привязки, в районе парка Победы</td>
          <td>5678</td>
          <td>Север</td>
          <td>2024-11-07</td>
          <td>89323456789</td>
        </tr>
        <tr>
          <td>Кошка</td>
          <td><img src="img/cat-dog.jpg" alt="Фото"></td>
          <td>Убежала от хозяев, найдено на улице Ленинградской</td>
          <td>-</td>
          <td>Западный</td>
          <td>2024-11-10</td>
          <td>89423456789</td>
        </tr>
      </tbody>
    </table>

    <div class="pagination">
      <a href="#" class="active">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
    </div>
  </div>

</body>
</html>
