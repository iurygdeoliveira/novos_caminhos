<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Iury Gomes de Oliveira</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="Iury Gomes de Oliveira" />
    <meta name="description" content="Portifólio de trabalhos realizados e formação de Iury Gomes de Oliveira" />
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/styles/style-dark.css" />


</head>

<body class="bg-triangles">
    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader__wrap">
            <div class="circle-pulse">
                <div class="circle-pulse__1"></div>
                <div class="circle-pulse__2"></div>
            </div>
            <div class="preloader__progress"><span></span></div>
        </div>
    </div>

    <main class="main">
        <div class="container gutter-top">
            <!-- Header -->
            <!-- Header -->
            <header class="header box">
                <div class="header__left">
                    <div class="header__photo">
                        <img class="header__photo-img" src="assets/img/profile.jpeg" alt="Iury Gomes de Oliveira">
                    </div>
                    <div class="header__base-info">
                        <h4 class="title titl--h4">Iury Gomes de Oliveira</h4>
                        <div class="status">Desenvolvedor WEB</div>
                        <ul class="header__social">
                            <li>
                                <a href="https://www.linkedin.com/in/iurygdeoliveira/">
                                    <i class="font-icon icon-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/iurygdeoliveira">
                                    <i class="font-icon icon-github"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCTM1Idirf0ALOdEdq31qkjg?view_as=subscriber">
                                    <i class="font-icon icon-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/IuryProf">
                                    <i class="font-icon icon-twitter"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="header__right">
                    <ul class="header__contact">
                        <li>
                            <span class="overhead">
                                Email
                            </span>
                            email.comercial@contato.com.br
                        </li>
                        <li>
                            <span class="overhead">Telefone</span><a
                                href="https://api.whatsapp.com/send?phone=55xxxxxxxxxxx">+55 (xx) xxxxx-xxxx </a>
                        </li>
                    </ul>
                    <ul class="header__contact">

                        <li>
                            <span class="overhead">
                                Endereço
                            </span>
                            Endereço Comercial - UF
                        </li>
                    </ul>
                </div>
            </header>

            <div class="row sticky-parent">
                <!-- Sidebar nav -->
                <aside class="col-12 col-md-12 col-lg-2">
                    <div class="sidebar box sticky-column">
                        <ul class="nav">
                            <li class="nav__item"><a class="active" href="index.html"><i class="icon-user"></i>Sobre
                                    Mim</a></li>
                            <li class="nav__item"><a href="resume.html"><i class="icon-file-text"></i>Currículo</a></li>
                            <li class="nav__item"><a href="works.html"><i class="icon-codesandbox"></i>Portifólio</a>
                            </li>
                            <!--<li class="nav__item"><a href="blog.html"><i class="icon-book-open"></i>Blog</a></li>-->
                            <li class="nav__item"><a href="contact.html"><i class="icon-book"></i>Contato</a></li>
                        </ul>
                    </div>
                </aside>

                <!-- Conteudo -->
                <div class="col-12 col-md-12 col-lg-10">
                    <div class="box box-content">
                        <div class="pb-2">
                            <h1 class="title title--h1 first-title title__separate">Contato</h1>
                        </div>

                        <!-- Contato -->

                        <form action="email.php" method="post" id="contact-form" class="contact-form"
                            data-toggle="validator">
                            <div class="row">
                                <div class="form-group col-12 col-md-6">
                                    <input type="text" class="form-control" id="nameContact" name="nameContact"
                                        placeholder="Nome" required="required" autocomplete="on"
                                        oninvalid="setCustomValidity('Fill in the field')"
                                        onkeyup="setCustomValidity('')">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-12 col-md-6">
                                    <input type="phone" class="form-control" id="phoneContact" name="phoneContact"
                                        placeholder="Telefone" required="required" autocomplete="on"
                                        oninvalid="setCustomValidity('Email is incorrect')"
                                        onkeyup="setCustomValidity('')">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-12 col-md-12">
                                    <input type="email" class="form-control" id="emailContact" name="emailContact"
                                        placeholder="Email" required="required" autocomplete="on"
                                        oninvalid="setCustomValidity('Email is incorrect')"
                                        onkeyup="setCustomValidity('')">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-12 col-md-12">
                                    <textarea class="textarea form-control" id="messageContact" name="messageContact"
                                        placeholder="Mensagem" rows="4" required="required"
                                        oninvalid="setCustomValidity('Fill in the field')"
                                        onkeyup="setCustomValidity('')"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-left">
                                    <div id="validator-contact" class="hidden"></div>
                                </div>
                                <div class="col-12 col-md-6 order-1 order-md-2 text-right">
                                    <button type="submit" class="btn"><i class="font-icon icon-send"></i>
                                        Enviar</button>
                                </div>
                            </div>
                        </form><br><br><br>

                        <div class="map" id="map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3654.824943304019!2d-46.82046378548918!3d-23.646439470623644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce54a94ba3ac0d%3A0x86dcf699b8be9412!2sParque%20Luiza%2C%20Embu%20das%20Artes%20-%20SP%2C%2006810-240!5e0!3m2!1spt-BR!2sbr!4v1599504382367!5m2!1spt-BR!2sbr"
                                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>

                    <!-- Footer -->
                    <footer class="footer">© Iury Gomes de Oliveira</footer>
                </div>
            </div>
        </div>
    </main>

    <!-- SVG masks -->
    <svg class="svg-defs">
        <clipPath id="avatar-box">
            <path
                d="M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z" />
        </clipPath>
        <clipPath id="avatar-hexagon">
            <path
                d="M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z" />
        </clipPath>
    </svg>

    <div class="back-to-top"></div>

    <!-- JavaScripts -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/common.js"></script>

    <script src="assets/demo/plugins-demo.js"></script>
</body>

</html>