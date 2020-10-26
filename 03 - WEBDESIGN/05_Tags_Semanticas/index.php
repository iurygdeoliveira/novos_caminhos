<!DOCTYPE html> <!-- DOCUMENTO HTML 5-->
<html lang='pt-br'>
<!-- INFORMAR A LÍNGUA QUE SERÁ UTILIZADA NO SITE -->

<head>
    <!-- CONJUNTO DE CARACTERES -->
    <meta charset='UTF-8'>

    <!-- VIEWPORT -->
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <!-- ROBOTS -->
    <meta name='robots' content='index, follow'>

    <!-- SHORTCUT -->
    <link rel='shortcut icon' href='http://www.ifto.edu.br/++theme++azul/img/favicon.ico'>

    <!-- CSS -->
    <link rel='stylesheet' href=''>

    <!-- TÍTULO DA PÁGINA -->
    <title>APRENDENDO HTML</title>
</head>

<!-- CONTEÚDO EXIBIDO PARA O USUÁRIO -->

<body>

    <!-- Tags semanticas do HTML -->
    <!-- https://medium.com/reprogramabr/semanticahtml5-5252b4937f0a -->
    <!-- Técnicas de Black Hat SEO, EVITE ! -->
    <!-- https://resultadosdigitais.com.br/blog/black-hat/ -->

    <header>
        <!-- LOGO, MENU DE NAVEGAÇÃO -->
        <nav>
            <ul>
                <li> <a href="#home"> Home </a></li>
                <li> <a href="#empresa"> A empresa </a></li>
                <li> <a href="#quemsomos"> Quem somos </a></li>
                <li> <a href="#contato"> Contato </a></li>
            </ul>
        </nav>
    </header>

    <main>

        <article>
            <header>
                <h1> Os melhores e mais completos cursos de educação profissional do Brasil </h1>
            </header>
            <!-- 
            <h2> h2 </h2>
            <h3> h3 </h3>
            <h4> h4 </h4>
            <h5> h5 </h5>
        -->
            <div>
                <p>
                    <!-- MARCAÇÃO DE PARÁGRAFOS -->
                    A história da Rede Federal de Educação Profissional, Científica e Tecnológica começou em 1909,
                    quando o
                    então
                    Presidente da República, Nilo Peçanha, criou 19 escolas de Aprendizes e Artífices que, mais tarde,
                    deram
                    origem
                    aos
                    Centros Federais de Educação Profissional e Tecnológica (Cefets).
                </p>
                <p> Tida no seu início como instrumento de política voltado para as 'classes desprovidas', a Rede
                    Federal se
                    configura
                    hoje como importante estrutura para que todas as pessoas tenham efetivo acesso às conquistas
                    científicas
                    e
                    tecnológicas.
                </p>

                <p>Foi na década de 1980 que um novo cenário econômico e produtivo se estabeleceu, com o desenvolvimento
                    de
                    novas
                    tecnologias, agregadas à produção e à prestação de serviços. Para atender a essa demanda, as
                    instituições de
                    educação profissional vêm buscando diversificar programas e cursos para elevar os níveis da
                    qualidade da
                    oferta.
                </p>

                <p>Cobrindo todo o território nacional, a Rede Federal presta um serviço à nação, ao dar continuidade à
                    sua
                    missão
                    de
                    qualificar profissionais para os diversos setores da economia brasileira, realizar pesquisa e
                    desenvolver
                    novos
                    processos, produtos e serviços em colaboração com o setor produtivo.
                </p>

                <p>Em 29 de dezembro de 2008 , 31 centros federais de educação tecnológica (Cefets), 75 unidades
                    descentralizadas
                    de ensino (Uneds), 39 escolas agrotécnicas, 7 escolas técnicas federais e 8 escolas vinculadas a
                    universidades
                    deixaram de existir para formar os Institutos Federais de Educação, Ciência e Tecnologia.
                </p>

                <a href="http://www.ifto.edu.br/araguaina" target="blank" title="Campus Araguaina"
                    alt="Campus Araguaina">
                    Campus Araguaina
                </a>

                <h2> Lista de Cursos no IFTO - Campus Araguaína </h2>

                <ul>
                    <li>Operador de Computador</li>
                    <li>Técnico em Biotecnologia</li>
                    <li>Técnico em Informática</li>
                    <li>Técnico em Análises Clínicas</li>
                    <li>Técnico em Enfermagem</li>
                    <li>Técnico em Informática para Internet</li>
                    <li>Tecnólogo em Análise e Desenvolvimento de Sistemas</li>
                    <li>Gestão em Produção Industrial</li>
                    <li>Especialização Lato Sensu em Educação Ambientam e Desenvolvimento Sustentável</li>
                </ul>

                <!-- <ol reversed> -->
                <!-- <ol start='5'> -->
                <!-- <ol type='I'> -->
                <!-- <ol type='A'> -->
                <ol type='a'>
                    <li>Operador de Computador</li>
                    <li>Técnico em Biotecnologia</li>
                    <li>Técnico em Informática</li>

                    <ul>
                        <li>Programador WEB</li>
                    </ul>

                    <li>Técnico em Análises Clínicas</li>
                    <li>Técnico em Enfermagem</li>
                    <li>Técnico em Informática para Internet</li>
                    <li>Tecnólogo em Análise e Desenvolvimento de Sistemas</li>
                    <li>Gestão em Produção Industrial</li>
                    <li>Especialização Lato Sensu em Educação Ambientam e Desenvolvimento Sustentável</li>
                </ol>
            </div>
            <footer>
                <p>Autor: Iury Gomes de Oliveira</p>
            </footer>
        </article>

        <section>
            <header>
                <h1>As mais lidas do Site</h1>
            </header>
            <article>
                <header>
                    <h1>Noticia 1</h1>
                    <p>Teste descritivo da noticia</p>
                </header>
            </article>
            <article>
                <header>
                    <h1>Noticia 2</h1>
                    <p>Teste descritivo da noticia</p>
                </header>
            </article>
            <article>
                <header>
                    <h1>Noticia 3</h1>
                    <p>Teste descritivo da noticia</p>
                </header>
            </article>
            <article>
                <header>
                    <h1>Noticia 4</h1>
                    <p>Teste descritivo da noticia</p>
                </header>
            </article>
        </section>
    </main>

    <aside>
        <header>
            <h1> Sidebar (Barra lateral)</h1>
        </header>
    </aside>

    <footer>
        <!-- PAGINAS DO SITE, TERMOS DE USO, LINKS LEGAIS, COPYRIGHT -->
    </footer>
    <!-- SCRIPT -->
    <script> </script>
</body>

</html>