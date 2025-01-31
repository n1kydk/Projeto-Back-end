<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>ProjectUni</title>
</head>
<body>

<style>
    body {
  font-family: 'Roboto', sans-serif;
  margin: 0;
}

h1 {
  padding: 8px;
  background: rgba(174, 0, 255, 0.8);
  border-radius: 8px;
  margin: 0;
  font-size: 64px;
  font-family: 'Roboto Slab', serif;
}

p{
  line-height: 1.5;
}

main {
  margin: 0 auto;
}

a{
  text-decoration: none;
  color: black;
}

a:hover{
  text-decoration: underline;
}

/* inputs */


input,
textarea{
  height: 32px;
  padding: 0 16px;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 20px;
  border: none;
  box-shadow: inset 8px 3px 18px -4px rgba(0,0,0,0.4);
}

input:focus,
textarea:focus {
  outline: none;
}

/* banner */

#banner {
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background: rgba(0, 0, 0, 0.2) url(bannerhome.jpeg);
  background-size: cover;
  background-attachment: fixed;
  background-position: center;
  background-blend-mode: overlay;
  color: white;
}

#banner h3 {
  background: black;
  border-radius: 8px;
  padding: 0 24px;
  font-size: 24px;
}

/* Pesquisa */

#searchbox {
  position: fixed;
  right: 0;
  top: 24px;
  width: 500px;
  pointer-events: none;
  z-index: 50;
  transition: 0.4s;
}

#searchbox input {
  height: 48px;
  width: 100%;
}


/* Navegação */

nav {
  height: 72px;
  background: #202125;
  width: 100%;
  margin: 0;
  position: fixed;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 20px;
  display: flex;
  justify-content: space-between;
  padding: 0 16px 0 0;
  box-sizing: border-box;
  z-index: 100;
}

nav a {
  padding: 0 32px;
  color: #eee;
  transform: 0.4s;
}

nav a:hover {
  text-decoration: none;
  color: #5E17EB;
}

nav ul {
  display: flex;
  list-style: none;
  justify-content: space-around;
  align-items: center;
  height: 100%;
  margin: 0;
}

.active {
  color: #5271FF;
}

#logo-img {
  display: flex;
  height: 100%;
  background: #111;
  padding: 0 32px;
  align-items: center;
  color: white;
  transition: .4s;
}

#logo-img img{
  height: 120px;
}

#logo-img:hover {
  background: black;
}

#menu-icon {
  height: 100%;
  font-size: 28px;
  padding: 0 4px;
  color: #eee;
  display: none;
  align-items: center;
}

/* Search icon */

#search-icon {
  color: white;
  padding: 0 32px;
  cursor: pointer;
  transition: 0.4s;
}

search-icon:hover {
  color: red;
}

/* Slideout */

#slideout-menu{
  display: none;
  background: #2d3436;
  z-index: 100;
  position: fixed;
  transition: 0.4s;
  margin-top: 72px;
  width: 100%;
  text-align: center;
  opacity: 0;
  pointer-events: none;
}


#slideout-menu ul{
  list-style: none;
  padding: 0 32px;
}

#slideout-menu ul li{
  padding: 8px;
}

#slideout-menu a{
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 20px;
  color: white;
}

#slideout-menu input{
  width: 85%;
  padding: 8px;
  font-family: 'Roboto Condensed', sans-serif;
  font-size: 20px;
  text-align: center;
}
/* seções */

section {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.section-heading{
  font-size: 32px;
  font-family: 'Roboto Condensed', sans-serif;
  border-left: 3px solid black;
  border-right: 3px solid black;
  transition: all 0.4s;
  display: inline-block;
  padding: 4px 32px;
}

.section-heading:hover{
  padding: 4px 48px;
  background: #FF5757;
}

/* section source */

#section-source p {
  padding: 8px;
  text-align: center;
}

#section-source a {
  margin: 8px;
  text-align: center;
}

/* card */


.card-image {
  transition: 0.4;
}

.card-image:hover {
  box-shadow: 0 10px 6px -6px #777
}

.card .card-description {
  padding: 0 8px;
}

/* button read more */

.btn-readmore {
  padding: 8px 24px;
  border: 3px solid black;
  transition: 0.4s;
  display: inline-block;
  margin-bottom: 24px;
  margin-left: 24px;
  font-weight: bold;
  cursor: pointer;
  background: white;
}
.btn-readmore:hover{
  background: #5E17EB;
  text-decoration: none;
  padding: 8px 64px 8px 24px;
  color: white;
}

/* Footer */

footer{
  background: black;
  padding: 8px;
  color: #eee;
  display: flex;
}

footer a{
  color: white;
}

footer #left-footer{
  flex: 1;
  border-right: 1px solid red;
  padding-left: 32px;
}

footer #left-footer ul {
  padding: 0;
  list-style: none;
  line-height: 1.5;
}

footer #right-footer {
  flex: 2;
  padding: 8px;
  text-align: center;
}

footer #social-media-footer a .fa-facebook,
footer #social-media-footer a .fa-youtube,
footer #social-media-footer a .fa-github {
  color: white;
  transition: 0.4s;
}

footer #social-media-footer ul{
  display: flex;
  list-style: none;
  justify-content: center;
  padding: 0;
}

footer #social-media-footer ul li{
  font-size: 48px;
  padding: 16px;
  transition: 0.4;
}

footer #social-media-footer ul li:hover a .fa-youtube {
  color: red;
}

footer #social-media-footer ul li:hover a .fa-facebook  {
  color: #3b5998;
}

footer #social-media-footer ul li:hover a .fa-github  {
  color: #bbb;
}




/* media */

@media (max-width: 900px) {
  nav ul {
    display: none;
  }

  #menu-icon {
    display: flex;
  }

  #slideout-menu {
    display: block;
  }

  #searchbox {
    display: none;
  }

  #blogpost{
    width:100%;
    border-left:0;
  }

  #sidebar{
    display: none;
  }
}

@media (max-width: 719px) {
  main {
    width: 95%;
  }

  section {
    flex-direction: column;
  }

  .card,
  .card .card-image img {
    width: 100%;
  }

  footer {
    flex-direction: column;
    text-align: center;
  }

  footer #left-footer {
    flex: 1;
    border-right: 0;
    padding-left: 0;
  }

  footer #right-footer {
    background: #eee;
    color: black;
  }

  footer #right-footer a {
    color: black;
  }

  footer #social-media-footer a .fa-facebook,
  footer #social-media-footer a .fa-youtube,
  footer #social-media-footer a .fa-github {
    color: black;
    transition: 0.4s;
  }
}

@media (max-width: 600px) {
  main {
    width: 100%;
  }

  h1 {
    font-size: 48px;
  }

  #banner h3 {
    font-size: 20px;
  }

  .card {
    text-align: center;
  }

  #logo-img {
    padding: 0;
  }
}

@media (min-width: 720px) {
  main {
    width: 95%;
  }
  .card {
    width: 45%;
  }
  .card .card-image img {
    width: 100%;
  }
}
</style>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Blog</a>
            </li>
            <li>
                <a href="#">Projetos</a>
            </li>
            <li>
                <a href="#">Sobre</a>
            </li>
            <li>
               <input type="text" placeholder="Search Here">
               <br>
               <a href="#">
                <i class="fas fa-search"></i>
               </a>
            </li>        
        </ul>
    </div>

    <nav>
        <div id="logo-img">
            <a href="#">
                <img src="logo.png" alt="Projeto Unisuam">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="#">Home</a>
            </li>
            <li>
                <a href="login.php">Login</a>
            </li>
            <li>
                <a href="cadastrar.php">Cadastro</a>
            </li>
            <li>
                <a href="#">Sobre</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>        
        </ul>
    </nav>
    <div id="searchbox">
        <input type="text" placeholder="Pesquise Aqui">
    </div>

    <div id="banner" style="background: rgba(0, 0, 0, 0.2) url('bannerhome.jpeg'); background-size: cover; background-attachment: fixed; background-position: center; background-blend-mode: overlay;">
    <h1>&lt;ProjectUni/&gt;</h1>
    <h3>Projeto Unisuam</h3>
</div>
    </div>

    <main>
        <a href="#">
            <h2 class="section-heading">Informações</h2>
        </a>

        <section>
            <div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="1.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="#">
                        <h3>Era da Revolução</h3>
                    </a>
                    <p>
                        A ascensão do 5G está redefinindo a telefonia, oferecendo velocidades de dados incríveis e abrindo caminho para avanços como IoT e cirurgias remotas. Essa tecnologia promete uma conectividade mais rápida e estável, preparando o terreno para inovações tecnológicas impressionantes.
                    </p>
                    <a href="#" class="btn-readmore">Ler mais (em breve)</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="2.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="#">
                        <h3>Impacto na Sustentabilidade</h3>
                    </a>
                    <p>
                        Empresas de telefonia estão focando em sustentabilidade, adotando práticas como reciclagem de dispositivos, redução de consumo de energia e uso de materiais reciclados em smartphones. Além disso, investimentos em energia renovável refletem um compromisso crescente com a responsabilidade ambiental na indústria de telecomunicações.
                    </p>
                    <a href="#" class="btn-readmore">Ler mais (em breve)</a>
                </div>
            </div>
        </section>

        <h2 class="section-heading">Segurança</h2>

        <section>
            <div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="login (1).jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="#">
                        <h3>Faça seu Login!</h3>
                    </a>
                    <p>
                        O login te ajuda a ter uma melhor experiência e segurança em nosso site!
                    </p>
                    <a href="login.php" class="btn-readmore">Logar</a>
                </div>
            </div>

            <div class="card">
                <div class="card-image">
                    <a href="#">
                        <img src="2fa.jpg" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="#">
                        <h3>O que é 2FA?</h3>
                    </a>
                    <p>
                        
A 2FA, ou Autenticação de Dois Fatores, é uma medida de segurança que adiciona uma camada extra à verificação de identidade.
                    </p>
                    <a href="cadastrar.php" class="btn-readmore">Ativar agora</a>
                </div>
            </div>
        </section>
       

    

<footer>
    <div id="left-footer">
        <h3>Links</h3>
        <p>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a href="cadastrar.php">Cadastro</a>
                </li>
            </ul>
        </p>
    </div>

    <div id="right-footer">
        <h3>Siga nossa empresa!</h3>
        <div id="social-media-footer">
            <ul>
                <li>
                    <a href="#">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/shorts/M1jycCH2kL4">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-github"></i>
                    </a>
                </li>
            </ul>
        </div>
        <p>Esse website foi feito por: Kaiky e Gabriel</p>
    </div>
</footer>

    </main>

    <script src="/js/main.js"></script>
</body>
</html>