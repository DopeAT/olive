@extends('layouts.app')
@section('page_id', 'about')
@section('content')

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="content">
                        <h1>{{ __('About') }} Olive Power</h1>
                        <p class="hero-text">Экстракт листьев дикой оливы!</p>
                        <p class="hero-text">
                            <strong>САМЫЙ МОЩНЫЙ
                                АНТИОКСИДАНТ В МИРЕ!</strong> <br>
                            В 18000 раз больше
                            антиоксидантов, чем в оливковом
                            масле.
                        </p>
                        <a href="{{ route('order') }}?order=1" class="mt-3 buy btn btn-lg btn-custom">
                            Добавить в корзину <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-text-section">
        <div class="container text-center">
            <p>
                OLIVE POWER — это уникальный
                экстракт листьев дикой оливы с
                высоким содержанием
                полифенолов, которые полностью
                усваиваются организмом.
            </p>
            <p>
                Самый мощный природный
                антиоксидант в мире, который
                балансирует жизненные функции,
                нейтрализует действие свободных
                радикалов в организме и содержит
                питательные вещества для здоровья
                человека.
            </p>
        </div>
    </section>

    <section class="features white-background">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 items">
                    <div class="row">
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Поддерживает сердечно-сосудистую систему</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Снижает уровень холестерина</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Укрепляет иммунную систему</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Контролирует артериальное давление</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Контролирует уровень сахара в крови</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Противомикробное и противовирусное действие</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Противовоспалительное действие</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Противораковое действие</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-text-section">
        <div class="container text-center">
            <div class="row pros-row">
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Дикие деревья</h4>
                        <p class="text-muted">
                            Эксклюзивное использование
                            листьев диких оливковых деревьев -
                            чистых и богатых полифенолами!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Только свежие листья</h4>
                        <p class="text-muted">
                            Используются исключительно
                            свежие листья, которые не
                            подвергались никакой другой
                            обработке – так они сохраняют все
                            свои питательные вещества.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Листья собираются весной.</h4>
                        <p class="text-muted">
                            Листья для Olive Power собираем
                            только весной. Именно тогда они
                            содержат максимально возможное
                            количество полифенолов!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Водный экстракт без алкоголя и химии</h4>
                        <p class="text-muted">
                            Экологически чистые технологии!
                            В процессе производства экстракта
                            «Olive Power» не используются
                            спирты и химикаты!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Уникальные технологии и ноу-хау</h4>
                        <p class="text-muted">
                            Передовые технологии,
                            разработанные за последние 10 лет
                            - гарантия уникальных качеств Olive
                            Power!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Опыт четырех поколений</h4>
                        <p class="text-muted">
                            Опыт четырех поколений в
                            выращивании и переработке
                            оливок.
                            Olive Power - Наше лучшее
                            достижение на сегодняшний день!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="features white-background">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-12">
                    <p>Натуральный экстракт листьев
                    дикой оливы.</p>
                    <p>Природные капли здоровья
                    активного действия из солнечной
                    Греции!</p>
                    <p>Оливковая сила - экстракт листьев диких оливковых деревьев. 100%
                    натуральный продукт для
                    восстановления жизненной силы и
                    здоровья, созданный с
                    использованием инновационных
                    технологий без искусственных
                        ингредиентов.</p>
                    <p><strong>OLIVE POWER — это уникальный
                    экстракт листьев дикой оливы с
                    высоким содержанием
                    полифенолов, которые полностью
                            усваиваются организмом.</strong></p>
                    <p>Самый мощный природный
                    антиоксидант в мире, который
                    балансирует жизненные функции,
                    нейтрализует действие свободных
                    радикалов в организме и содержит
                    питательные вещества для здоровья
                    человека.</p>
                </div>
            </div>
        </div>
    </section>

    <header class="overlay" style="height: auto">
        <div class="position-relative">
            <div class="container px-5 text-center">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h3 class="page-header-title mb-3">
                            <strong>Полeзные свойства:</strong>
                        </h3>
                        <p class="page-header-text text-white mb-0">Недавние медицинские и
                            лабораторные исследования, а
                            также работа многих ученых по
                            всему миру доказали связь между
                            экстрактом листьев оливы и
                            многими преимуществами для
                            здоровья человека:</p>
                        <hr class="white-hr">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">1</span>
                                </h4>
                                <p>Самый мощный природный
                                    антиоксидант в мире</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">2</span>
                                </h4>
                                <p>Снижает уровень холестерина и
                                    триглицеридов ЛПНП, значительно
                                    снижая риск атеросклероза</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">3</span>
                                </h4>
                                <p>Помогает защитить и
                                    поддерживать здоровую сердечно-
                                    сосудистую систему</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">4</span>
                                </h4>
                                <p>Противораковое действие</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">5</span>
                                </h4>
                                <p>Противомикробное действие</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">6</span>
                                </h4>
                                <p>Укрепляет нервную систему в
                                    условиях, связанных с высоким
                                    уровнем стресса</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">7</span>
                                </h4>
                                <p>Устраняет риск грибковых
                                    инфекций</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">8</span>
                                </h4>
                                <p>Антивозрастное действие и общая
                                    поддержка уровня здоровья</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">9</span>
                                </h4>
                                <p>Регулирует уровень
                                    артериального давления и
                                    предотвращает гипертонию</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">10</span>
                                </h4>
                                <p>Регулирует уровень сахара в
                                    крови и проявляет
                                    антидиабетическое действие.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">11</span>
                                </h4>
                                <p>Повышает иммунитет</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">12</span>
                                </h4>
                                <p>Усиливает
                                    противовоспалительные свойства человеческого организма.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">13</span>
                                </h4>
                                <p>Помогает механизмам
                                    организма в регенерации клеток и
                                    заживления ран</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">14</span>
                                </h4>
                                <p>Защищает слизистую оболочку
                                    желудочно-кишечного тракта</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">15</span>
                                </h4>
                                <p>Репрессивные действия при
                                    подагре</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">16</span>
                                </h4>
                                <p>Замедляет развитие болезни
                                    Альцгеймера и Паркинсона</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="svg-border-rounded text-light">
            <!-- Rounded SVG Border-->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
        </div>
    </header>

    @include('components.products', ['locale' => 'ru'])

@endsection
