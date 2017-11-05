<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/academico', function () {
    return view('academico');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/DataScience', function () {
	$info = ['titulo' => 'Data Science',
		'info' => "A ciência de dados é um campo interdisciplinar sobre métodos, processos e sistemas científicos para extrair conhecimento de dados em várias formas, semelhantes à mineração de dados.
	</br>
	A ciência dos dados é utilizada para unificar estatística, análise de dados e métodos relacionados, com o objetivo de compreender e analisar fenômenos reais com dados. Ele emprega técnicas e teorias extraídas de várias áreas dentro das amplas áreas de matemática, estatística, ciência da informação e ciência da computação. Algumas dessas áreas são: aprendizagem de máquina, aprendizado profundo, classificação, análise de cluster, mineração de dados, bancos de dados, visualização."];
    return view('DataScience', $info);
});

Route::get('/Otimizacao', function () {
	$titulo = 'Otimização';
	$info = "Otimização é uma área que estuda problemas em que se busca minimizar ou maximizar uma função através da escolha sistemática dos valores de variáveis reais ou inteiras dentro de um conjunto viável.
	</br>
	Em problemas de engenharia, de administração, de logística, de transporte, de economia, de biologia ou de outras ciências, quando se consegue construir modelos matemáticos bastante representativos dos respetivos sistemas dinâmicos em estudo, é possível aplicar as técnicas matemáticas de otimização para maximizar ou minimizar uma função previamente definida como índice de desempenho (ID), ou índice de performance (IP), visando encontrar uma \"solução ótima\" do problema, isto é, que resulte no melhor desempenho possível do sistema, segundo este critério de desempenho previamente definido (ID).";
    return view('Otimizacao', compact('titulo', 'info'));
});



Route::get('/academico/Projetos/{id_projeto}', function ($id_projeto) {

	$projetos = [
	0 => [ 
			'titulo' => 'Redes Convolucionais Para Classificacao De Imagens',
			'info' => 'Neste trabalho foi utilizado uma técnica de Deep Learning para classificar imagens em categorias, testando técnicas que ajudam a lidar com dados desbalanceados, e obter resultados satisfatórios tentando melhorar o resultado obtido com a base de dados original.</br>
		A técnica de Deep Learning utilizada é chamada de Rede Neural Convolucional (ou apenas Rede Convolucional) – Arquitetura LeNet-5, um classificador que aprenderá padrões de cada uma das categorias das imagens e depois será utilizado para reconhecer esses padrões em novas imagens e classifica-las nessas mesmas categorias.</br>
		A base de imagens utilizada está dividida em 12 categorias, que incluem meios de transporte, rostos, animais, plantas e objetos. Nessa divisão, as categoriais não possuem o mesmo número de imagens, causando o problema de desbalanceamento de dados, que em geral tende a piorar a qualidade do classificador. Para diminuir o impacto desse problema, são propostas algumas técnicas: Data Augumentation e Reamostragem.</br>
		É também utilizada uma métrica para a avaliação do desempenho do classificador, chamada de acurácia.'
		],
	1 => [ 
			'titulo' => 'Inteligência Artificial aplicada a um fundo de investimento norte-americano',
			'info' => 'Neste trabalho foi utilizado técnicas de inteligência artificial para criar uma estratégia de investimento em ações do mercado norte-americano. </br>
				Foi desenvolvido um simulador para avaliar o desempenho da estratégia, testando métricas próprias do mercado para fazer a avaliação.
			'
		],
	2 => [ 
			'titulo' => 'Inteligência Artificial aplicada no mercado de ações brasileiro',
			'info' => 'O mercado de ações, representado pela BOVESPA no Brasil, é uma opção de investimento de renda variável em que é muito comum o uso de estratégias para se reduzir prejuízos e aumentar lucros. A previsão do comportamento futuro de ações é uma das estratégias usadas, que podem ser realizadas por meio de análise fundamentalista e técnica dos dados de ações ou por meio de inteligência artificial. A inteligência artificial por usa vez, pode incorporar as outras duas estratégias, individualmente ou em conjunto, em geral conseguindo um desempenho melhor do que elas. </br>Este trabalho possui como objetivo regular uma estratégia Buy-and-Hold para o mercado de ações com a utilização de análise de dados e técnicas de inteligência artificial. A inteligência artificial será usada como um mecanismo de tomada de decisão, que tentará prever se uma dada ação irá gerar lucro ou prejuízo caso seja comprada. Além disso, neste trabalho também será desenvolvido um simulador do mercado de ações, que será usado para testar o desempenho da estratégia criada e analisar se ela é confiável para ser aplicada no mercado de ações real.'
		]
	];

    return view('Projetos')->with('id_projeto', $id_projeto)->with('projetos', $projetos);
});