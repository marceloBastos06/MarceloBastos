<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Marcelo Bastos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #404040;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .header {
                text-align: center;
            }

            .content {
                text-align: justify;
                margin-left: 40px;
                margin-bottom: 40px;
                margin-right: 40px;
            }

            .title {
                font-size: 48px;
                font-weight: 600;
            }

            .subtitle {
                font-size: 32px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            a.nounderline:link
            { 
                text-decoration:none;
            } 
            a.nounderline:visited
            { 
                color: #636b6f; 
                text-decoration:none;
            } 

            .m-b-md {
                margin-bottom: 30px;
            }

            #selected{
                color: black;
                background-color: #D3D3D3;
                border-radius: 5px;
                font-size: 12 px;
                padding: 8px;
            }

            .img-principal{
                width: 180px;
                float: center;
                display: block;
                margin: 0px auto;
                margin-bottom: 15px;
                border-radius: 15px;
            }

            .header {
                background: white;
                width:auto;
                border-radius: 15px;
                padding: 30px;
                padding-bottom: 1px;
                margin-left: 3px;
                margin-right: 2px;
                box-shadow: 1px 1px 1px 1px;
            }

            .redes-sociais img{
                height: 40px;
                margin-bottom: 10px;
            }

            .Link-sem-format{
                text-decoration: none;
                margin-bottom: 20px;
            }


            footer{
                background: #bababa;
                text-align: center;
                padding: 10px;
            }

        </style>
    </head>
    <body>
    
            
            <div class="header">
                </br>
                <img class="img-principal" src="imagens/marcelo.jpg">
                <div class="title m-b-md">
                    <a href="/" class="nounderline">Marcelo Bastos</a>

                </div>
                
                <p>Estuda Bacharelado em Ciência da Computação na Unifal-MG</p>

                <div class="links">
                    <a href="/academico">Informações Acadêmicas</a>
                    <a id = "/selected" href="about">Sobre mim</a>
                </div>

                </br>
                </br>
                
            </div>
            
        <div class="content">
            <h1>Sobre mim: </h1>
                    <ul>
                        <li>
                            Meu nome é Marcelo Antonio Mendes Bastos, sou de Divisa Nova, uma cidade do interior de Minas Gerais.<br />
                            Atualmente estou no 8º período do <a href="http://bcc.unifal-mg.edu.br/">Bacharelado em Ciência da Computação</a>, 
                            na Universidade Federal de Alfenas (<a href="http://www.unifal-mg.edu.br/portal/">Unifal</a>), Campus Santa Clara, Alfenas - MG.
                        </li>
                    </ul>
                    <h1>O que eu gosto de fazer fora do meu trabalho:</h1>
                    <ul>
                        <li>
                            Assistir séries, animes, filmes
                        </li>
                        <li>
                            Jogar Games
                        </li>
                        <li>
                            Ler mangás, livros
                        </li>
                        <li>
                            Andar de Bicicleta
                        </li>
                    </ul>
        </div>
        <footer>
            <div class="redes-sociais">
                <a href="https://www.facebook.com/marcelo.antoniomendesbastos" target="_blank"><img src="imagens/fb.png"></a>
                <a href="https://plus.google.com/u/0/106409971761713315860/posts" target="_blank"><img src="imagens/g+.png"></a>
            </div>
            <br>Desenvolvido por Marcelo Bastos
        </footer>
    </body>
</html>