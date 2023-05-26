@extends('site/padraoSite')

@section('content')

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <div class="hero__items set-bg" data-setbg="img/hero/hero-sereia.jpeg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Animação</div>
                                <h2>A pequena Sereia</h2>
                                <p>Uma jovem sereia faz um acordo com uma bruxa do mar para trocar sua bela voz por
                                    pernas humanas para que possa descobrir o mundo acima da água e impressionar um
                                    príncipe....</p>
                                <a href="#"><span>Saiba Mais</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-creed-iii.jpg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Drama</div>
                                <h2>Creed III</h2>
                                <p>Depois de dominar o mundo do boxe, Adonis Creed tem prosperado tanto em sua carreira
                                    quanto em sua vida familiar. Quando um amigo de infância e ex-prodígio do boxe,
                                    ressurge...</p>
                                <a href="#"><span>Saiba Mais</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-pearl.png">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Terror</div>
                                <h2>Pearl</h2>
                                <p>Presa na fazenda isolada de sua família. Desejando uma vida glamorosa como ela vê nos
                                    filmes, as ambições, tentações e repressões de Pearl colidem...</p>
                                <a href="#"><span>Saiba Mais</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero__items set-bg" data-setbg="img/hero/hero-avatar.jpeg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <div class="label">Ação</div>
                                <h2>Avatar: O Caminho da Água</h2>
                                <p>a história da família Sully: Jake, Neytiri e seus filhos. A trama apresenta os
                                    perigos que os esperam, as batalhas que enfrentam para sobreviver e as tragédias que
                                    suportam...</p>
                                <a href="#"><span>Saiba Mais</span> <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Cards -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <a id="emCartaz"></a>
                                    <h4>Em Cartas</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Ver tudo<span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- aqui loop-->
                        @foreach($dadosfilme as $dadosfilmes)
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$dadosfilmes->capafilme}}">
                                        <div class="ep">{{$dadosfilmes->classificacaofilme}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>{{$dadosfilmes->generofilme}}</li>
                                            <li>{{$dadosfilmes->duracaofilme}}</li>
                                        </ul>
                                        <h5><a href="panicoiv.html">{{$dadosfilmes->nomefilme}}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- fim loop-->
                            
                           
                           
                            
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/cartaz/gatodebotas.jpeg">
                                        <div class="ep">L</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Animação</li>
                                            <li>100min</li>
                                        </ul>
                                        <h5><a href="./gatodebotas.html">Gato de Botas 2: O Último Pedido</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="popular__product">

                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/cartaz/avatar.jpeg">
                                        <div class="ep">14</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ação</li>
                                            <li>190min</li>
                                        </ul>
                                        <h5><a href="#">Avatar: O Caminho da Água</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/cartaz/13-exorcismos.jpg">
                                        <div class="ep">16</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Terror</li>
                                            <li>100min</li>
                                        </ul>
                                        <h5><a href="#">13 Exorcismos</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/cartaz/Homem-Formiga.jpg">
                                        <div class="ep">12</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ação</li>
                                            <li>125min</li>
                                        </ul>
                                        <h5><a href="#">Homem-Formiga e a Vespa: Quantumania</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/cartaz/os-fabelmans.jpg">
                                        <div class="ep">14</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Drama</li>
                                            <li>150min</li>
                                        </ul>
                                        <h5><a href="#">Os Fabelmans</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/cartaz/megan.jpg">
                                        <div class="ep">14</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Terror</li>
                                            <li>100min</li>
                                        </ul>
                                        <h5><a href="#">M3gan</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/cartaz/batem-a-porta.jpg">
                                        <div class="ep">16</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Suspense</li>
                                            <li>100 min</li>
                                        </ul>
                                        <h5><a href="#">Batem à Porta</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <a id="emBreve"></a>
                                    <h4>Em Breve</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="#" class="primary-btn">Ver tudo<span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/embreve/sereia.jpg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li> Fantasia/Musical</li>
                                        </ul>
                                        <h5><a href="#">A Pequena Sereia</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/embreve/Barbie.jpeg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Comédia/Fantasia</li>
                                        </ul>
                                        <h5><a href="#">Barbie</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/embreve/65.jpg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ficção científica/Ação</li>
                                        </ul>
                                        <h5><a href="#">65 - Ameaça Pré-Histórica</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/embreve/Shazam.jpeg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ação/Aventura</li>
                                        </ul>
                                        <h5><a href="#">Shazam! Fúria dos Deuses</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/embreve/Coração-Neon.jpg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Drama</li>
                                        </ul>
                                        <h5><a href="#">Coração de Neon</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/embreve/John-Wick4.png"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ação</li>
                                        </ul>
                                        <h5><a href="#">John Wick 4: Baba Yaga</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="live__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>OS FILMES MAIS ESPERADOS de 2023</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/filmesesp/velozes-furiosos.jpg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ação/Crime</li>
                                        </ul>
                                        <h5><a href="#">Velozes e Furiosos 10</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/filmesesp/guardioes-galaxia.jpeg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ação/Aventura</li>
                                        </ul>
                                        <h5><a href="#">Guardiões da Galáxia 3</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/filmesesp/transformes.jpg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ficção científica/Ação</li>
                                        </ul>
                                        <h5><a href="#">Transformers: O Despertar das Feras</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/filmesesp/theflash.jpg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ação/Aventura</li>
                                        </ul>
                                        <h5><a href="#">The Flash</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/filmesesp/homem-aranha.jpg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ação/Aventura</li>
                                        </ul>
                                        <h5><a href="#">Homem-Aranha: Através do Aranhaverso</a></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="img/filmesesp/besouro-azul.jpeg"></div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Ação/Aventura</li>
                                        </ul>
                                        <h5><a href="#">Besouro Azul</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Mais Acessados</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Dias</li>
                                <li data-filter=".week">Semanas</li>
                                <li data-filter=".month">Meses</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day"
                                    data-setbg="img/sidebar/Pearl.jpeg">
                                    <h5><a href="#">Pearl</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix month week"
                                    data-setbg="img/sidebar/Avatar.jpeg">
                                    <h5><a href="#">Avatar</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix week"
                                    data-setbg="img/sidebar/gatodebotas.jpeg">
                                    <h5><a href="#">Gato de Botas</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix week"
                                    data-setbg="img/sidebar/creed-iii.jpeg">
                                    <h5><a href="#">Creed III</a></h5>
                                </div>
                                <div class="product__sidebar__view__item set-bg mix month day"
                                    data-setbg="img/sidebar/megan.jpeg">
                                    <h5><a href="#">M3gan</a></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- Cards End -->

    @endsection