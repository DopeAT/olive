@if ($locale === 'el')
    <section class="products">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-6 product">
                        <img src="/images/product-transparentx{{ $product->id }}.png" alt="{{ $product->name }}"
                             class="img-fluid">
                        <p class="product-name mb-2"> {{ $product->name }} </p>
                        <p class="product-decription mb-0">Φυσικό εκχύλισμα φύλλων άγριας ελιάς</p>
                        <p class="product-decription mb-0">Αρκετό για {{ $product->id === 1 ? 'ένα' : 'δυο' }} μήν{{ $product->id === 1 ? 'α' : 'ς' }}!</p>
                        <p class="product-decription">20 σταγόνες την ημέρα! (2 x 10)</p>
                        <div class="price">
                            <span class="font-weight-bold">€{{ +$product->price }}</span>
                        </div>
                        <a href="{{ route('order') }}?order={{ $product->id }}" class="mt-3 buy btn btn-lg btn-custom">
                            Προσθήκη στο καλάθι <i class="fas fa-shopping-cart"></i>
                        </a>
                        <p class="small pt-1 font-weight-bold">ΔΩΡΕΑΝ Παράδοση</p>
                    </div>
                @endforeach
            </div>

            <hr>

            <div class="col-12">
                <h5 class="text-center font-weight-bold">Συνιστάμενη ημερήσια δόση και χορήγηση:</h5>
                <p class="text-muted py-3">
                    Πάρτε 10 σταγόνες, αραιωμένες σε
                    νερό, χυμό ή οποιοδήποτε άλλο
                    ποτό της επιλογής σας, 2 φορές την
                    ημέρα. Η προληπτική λήψη του
                    προϊόντος έχει πολλά οφέλη για
                    την υγεία μακροπρόθεσμα. Δεν
                    υπάρχουν περιορισμοί στη
                    διάρκεια της χρήσης.
                </p>
            </div>
        </div>
    </section>
@elseif ($locale === 'en')
    <section class="products">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-6 product">
                        <img src="/images/product-transparentx{{ $product->id }}.png" alt="{{ $product->name }}"
                             class="img-fluid">
                        <p class="product-name mb-2"> {{ $product->name }} </p>
                        <p class="product-decription mb-0">Wild Olive Leaf Extract!</p>
                        <p class="product-decription mb-0">Enough for one month!</p>
                        <p class="product-decription">20 drops a day! (2 x 10)</p>
                        <div class="price">
                            <span class="font-weight-bold">€{{ +$product->price }}</span>
                        </div>
                        <a href="{{ route('order') }}?order={{ $product->id }}" class="mt-3 buy btn btn-lg btn-custom">
                            Add to basket <i class="fas fa-shopping-cart"></i>
                        </a>
                        <p class="small pt-1 font-weight-bold">FREE Delivery</p>
                    </div>
                @endforeach
            </div>

            <hr>

            <div class="col-12">
                <h5 class="text-center font-weight-bold">Recommended daily dose and intake:</h5>
                <p class="text-muted py-3">
                    Take twice a day - 10 drops each time,
                    diluted in water, juice, smoothie or any
                    other drink of your choice. Proactive
                    use intake has proven to be beneficial
                    to our health. No restrictions on the
                    duration of the use.
                </p>
            </div>
        </div>
    </section>
@else
    <section class="products">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-6 product">
                        <img src="/images/product-transparentx{{ $product->id }}.png" alt="{{ $product->name }}"
                             class="img-fluid">
                        <p class="product-name mb-2"> {{ $product->name }} </p>
                        <p class="product-decription mb-0">Экстракт листьев дикой оливы</p>
                        <p class="product-decription mb-0">Достаточно на один месяц!</p>
                        <p class="product-decription">20 капель в день (2х10)</p>
                        <div class="price">
                            <span class="font-weight-bold">€{{ +$product->price }}</span>
                        </div>
                        <a href="{{ route('order') }}?order={{ $product->id }}" class="mt-3 buy btn btn-lg btn-custom">
                            Добавить в корзину <i class="fas fa-shopping-cart"></i>
                        </a>
                        <p class="small pt-1 font-weight-bold">бесплатная доставка</p>
                    </div>
                @endforeach
            </div>

            <hr>

            <div class="col-12">
                <h5 class="text-center font-weight-bold">Рекомендуемая суточная доза и прием:</h5>
                <p class="text-muted py-3">
                    Принимать два раза в день - по 10
                    капель каждый раз, разбавляя их
                    водой, соком, смузи или любым
                    другим напитком по вашему
                    выбору. Проактивное потребление
                    оказалось полезным для нашего
                    здоровья. Нет ограничений по
                    продолжительности использования.
                </p>
            </div>
        </div>
    </section>
@endif
