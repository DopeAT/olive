@extends('layouts.app')
@section('page_id', 'home')
@section('content')

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="content">
                        <h1>Olive Power</h1>
                        <p class="hero-text">Экстракт листьев дикой оливы!</p>
                        <p class="hero-text">
                            <strong>САМЫЙ МОЩНЫЙ
                                АНТИОКСИДАНТ В МИРЕ!</strong> <br>
                            В 18000 раз больше
                            антиоксидантов, чем в оливковом
                            масле.
                        </p>
                        <a href="{{ route('order') }}?order=1" class="buy btn btn-custom">
                            Добавить в корзину <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/images/olive_home.png" class="img-fluid" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-text-section">
        <div class="container text-center">
            <h2 class="text-center welcome-text">Добро пожаловать в Olive Power</h2>
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

    @include('components.products', ['locale' => 'ru'])

@endsection
