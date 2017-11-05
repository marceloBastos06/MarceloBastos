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
                color: #404040;
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
                    <a id = "selected" href="/academico">Informações Acadêmicas</a>
                    <a href="/about">Sobre mim</a>
                </div>

                </br>
                </br>
                
            </div>
            
        <div class="content">
            <h1>Áreas de Interesse:</h1>
                <ul>
                    <li>
                        <a href="/DataScience" class='nounderline'>Data Science</a>;
                    </li>
                    <li>
                        <a href="/Otimizacao" class='nounderline'>Otimização</a>.
                    </li>
                </ul>


            <h1>O que já fiz: </h1>
            <ul>
                <li>
                    Curso de Inglês: <a href="http://www.fisk.com.br/">Fisk</a> - Alfenas (2011-2013);
                </li>
                <li>
                    Monitor na disciplina algoritmos 2015/1 (Março de 2015 - Julho de 2015);
                </li>
                <li>
                    Pesquisa:
                    <ul>
                        <li>
                            Redes Convolucionais para a Classificação de imagens <a href="academico/Projetos/0">(+info)</a>;
                        </li>
                        <li>
                            Inteligência Artificial aplicada a um fundo de investimento norte-americano <a href="academico/Projetos/1">(+info)</a>.
                        </li>
                    </ul>
                </li>
            </ul>

            <h1>O que estou fazendo: </h1>
                <ul>
                    <li>
                        TCC: Inteligência Artificial aplicada no mercado de ações brasileiro <a href="academico/Projetos/2">(+info)</a>.
                    </li>
                </ul>
            <h1>Experiências</h1>

            <ul>
                <li>
                    Java  - Intermediário
                </li>
                <li>
                    C - Intermediário
                </li>
                <li>
                    R - Intermediário
                </li>
                <li>
                    Python - Intermediário
                </li>
                <li>
                    HTML - Iniciante
                </li>
                <li>
                    CSS - Iniciante
                </li>
                <li>
                    PHP - Iniciante
                </li>
            </ul>
        

            <h1>Currículo Lattes: </h1>
            <ul>
                <li>
                    <a href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?id=K8454189Y7">Link externo</a>
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