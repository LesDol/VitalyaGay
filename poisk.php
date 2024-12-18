<?php
session_start();
include_once 'api/bd.php';
$searchParams = $_GET;
$posts;
if(!empty($searchParams)){
    $animalType = array_key_exists('animal-type',$_GET) ? 
     $searchParams['animal-type'] : '';
    $address = array_key_exists('address',$_GET) ?
     $searchParams['address'] : '';


    $poisk = $bd->query("
    SELECT * FROM posts WHERE (type_animal = '$animalType' OR address = '$address')
    AND (status = 'active')
    "
)->fetchAll();
$posts =$poisk;

}
?>
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
<section>
  <form method="GET" action="poisk.php" class="search-form">
  <div class="container">
    <div class="search-form">
      <select name="animal-type" id="animal-type">
        <option value="">Выберите вид животного</option>
        <option value="cat">Кот</option>
        <option value="dog">Собака</option>
      </select>
      <input name = "address" type="text" placeholder="Район">
      <button type="submit">Поиск</button>
    </div>
  </form>
</section>
    <table>
      <thead>
        <tr>
          <th>Вид животного</th>
          <th>Фото</th>
          <th>Доп. информация</th>
          <th>Клеймо</th>
          <th>Район</th>
          <th>Дата нахождения</th>
          <th>Подробности</th>
        </tr>
      </thead>
      <tbody>
        <?php
      if(!empty($posts)){
          foreach($posts as $key => $value){
          $typeAnimal = $value['type_animal'];
          $info = $value['description'];
          $data = $value['date_found'];
          $mark = $value['mark'];
          $place = $value['address'];
          $id = $value['id'];
          echo "        
          <tr>
          <td>$typeAnimal</td>
          <td><img src='img/cat-dog.jpg' alt='Фото'></td>
          <td>$info</td>
          <td>$mark</td>
          <td>$place</td>
          <td>$data</td>
          <td><a href='info.php?id=$id'>Подробнее</a></td>
        </tr>";
        } 
      }


        ?>

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
