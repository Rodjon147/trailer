<html>
  <head>
  <title>Афиша</title>
  <link rel="stylesheet" href="style.css">
  <script src="list.js"></script>
  <link rel="icon" type="image/png" href="cinema.png">
  <meta charset="utf-8">
  </head>
  <body>
    <div class="container">
      <!--Шапка-->
      <div class="header">
        <div class="logo">
          <h1>КИНОАФИША</h1>
          <p>Иркутск, Ленина 5А</p>
        </div>
        <div class="menu">
            <ul>
              <li><a href="/afisha">Афиша</a></li>
              <li><a href="/premieres">Премьеры</a></li>
              <li><a href="/rating">Рейтинг</a></li>
            </ul>
        </div>
        <div class="personal_data">
          <a href="/sign in" >Регистрация</a>
          <a href="/sign up" >Вход</a>
        </div>
      </div>
      <!--Контент-->
      <div class="content">
        <!--Новостной блок-->
        <div class="news">
          <div class="nameblock">

          </div>
          <div class="newblock">
            <img src="том круз.jpg" class="backgrounding">
            <div class="information">
              <h3>Том Круз и Илон Маск снимут боевик в космосе</h3>
            </div>
          </div>
          <div class="newblock">
            <img src="тайка вайтити.jpg" class="backgrounding">
            <div class="information">
              <h3>Тайка Вайтити снимет новый фильм по звездным войнам</h3>
            </div>
          </div>
          <div class="newblock">
            <img src="джон уик.jpg" class="backgrounding">
            <div class="information">
              <h3>Четвертый Джон Уик пренесён на 2022 год</h3>
            </div>
          </div>
          <div class="newblock">
            <img src="геркулес.jpg" class="backgrounding">
            <div class="information">
              <h3>Disney готовит ремейк Геркулеса</h3>
            </div>
          </div>
          <div class="newblock">
            <img src="николас кейдж.jpg" class="backgrounding">
            <div class="information">
              <h3>Николас Кейдж сыграет Джо Экзотика из «Король тигров»</h3>
            </div>
          </div>
          <div class="newblock">
            <img src="Кейт Бланшетт.jpg" class="backgrounding">
            <div class="information">
              <h3>Кейт Бланшетт может сняться в экранизации игры «Borderlands»</h3>
            </div>
          </div>
        </div>

        <!--Блок с фильмами-->
        <div id="users">
          <div class="positionSearch">
          <input class="search" placeholder="Поиск" /></br>
          <a href="#" class="sort" data-sort="name">По названию</a>
          <a href="#" class="sort" data-sort="born">По рейтингу</a>
          </div>

          <div class="list">
            <div class="item">
              <div class="flip">
              <img src="Джокер.jpg">
              <h3 class="name">Джокер</h3>
              <p class="born">7.9</p>
            </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="Звездные войны 9.jpg" alt="">
              <h3 class="name">Звездные войны 9</h3>
              <p class="born">5.8</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="Бладшот.jpeg" alt="">
              <h3 class="name">Бладшот</h3>
              <p class="born">8.3</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="Мстители финал.jpg" alt="">
              <h3 class="name">Мстители финал</h3>
              <p class="born">9.4</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="человек паук вдали от дома.png" alt="">
              <h3 class="name">Человек паук: вдали от дома</h3>
              <p class="born">3.7</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="Оно 2.jpg" alt="">
              <h3 class="name">Оно 2</h3>
              <p class="born">6.5</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="веном.jpg" alt="">
              <h3 class="name">Веном</h3>
              <p class="born">4.2</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="аквамен.jpg" alt="">
              <h3 class="name">Аквамен</h3>
              <p class="born">9.3</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="шазам.jpg" alt="">
              <h3 class="name">Шазам</h3>
              <p class="born">8.7</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="хоббс и шоу.jpg" alt="">
              <h3 class="name">Форсаж: Хоббс и Шоу</h3>
              <p class="born">6.6</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="люди в черном.jpg" alt="">
              <h3 class="name">Люди в черном: интернэшнл</h3>
              <p class="born">8.3</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="джентльмены.jpg" alt="">
              <h3 class="name">Джентльмены</h3>
              <p class="born">9.4</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="алладин.jpg" alt="">
              <h3 class="name">Алладин</h3>
              <p class="born">3.1</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="джон уик 3.jpg" alt="">
              <h3 class="name">Джон Уик 3</h3>
              <p class="born">7.6</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="первому игроку приготовиться.jpg" alt="">
              <h3 class="name">Первому игроку приготовиться</h3>
              <p class="born">8.5</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="алита боевой ангел.jpg" alt="">
              <h3 class="name">Алита: боевой ангел</h3>
              <p class="born">4.8</p>
              </div>
            </div>
            <div class="item">
              <div class="flip">
              <img src="стекло.jpg" alt="">
              <h3 class="name">Стекло</h3>
              <p class="born">8.1</p>
              </div>
            </div>
          </div>
        </div>
        <script>
          var options = {
            valueNames: [ 'name', 'born' ]
          };
          var userList = new List('users', options);
        </script>
      </div>
    </div>

  </body>
</html>
