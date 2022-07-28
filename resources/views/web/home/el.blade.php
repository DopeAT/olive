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
                        <p class="hero-text">Το πιο ισχυρό Αντιοξειδωτικό στον Κόσμο!</p>
                        <p class="hero-text">
                            <strong>Φυσικό εκχύλισμα φύλλων άγριας
                                ελιάς!</strong> <br>
                            18.000 φορές περισσότερα
                            αντιοξειδωτικά από το εξαιρετικά
                            παρθένο ελαιόλαδο.
                        </p>
                        <a href="/order?order=1" class="buy btn btn-custom">
                            Προσθήκη στο καλάθι <i class="fas fa-shopping-cart"></i>
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
            <h2 class="text-center welcome-text">Καλωσήρθατε στο Olive Power</h2>
            <p>
                Το OLIVE POWER είναι το μοναδικό
                προϊόν στη Ελλάδα με την
                υψηλότερη περιεκτικότητα σε
                πολυφαινόλες, ως εκχύλισμα
                φύλλων άγριας ελιάς, με την πιο
                απορροφήσιμη μορφή για το
                οργανισμό.
            </p>
            <p>
                Το πιο ισχυρό φυσικό
                αντιοξειδωτικό στον κόσμο, το
                οποίο εξισορροπεί τις ζωτικές
                λειτουργίες, εξουδετερώνει τη
                δράση των ελεύθερων ριζών στο
                σώμα και έχει πολλά οφέλη για την
                ανθρώπινη υγεία.
            </p>

            <div class="row pros-row">
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Άγρια δέντρα</h4>
                        <p class="text-muted">
                            Χρησιμοποιούμε μόνο φύλλα από
                            άγρια ελιά - εγγυημένα καθαρά και
                            πολύ πλούσια σε πολυφαινόλες!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Μόνο φρέσκα φύλλα</h4>
                        <p class="text-muted">
                            Χρησιμοποιούμε μόνο φρέσκα
                            φύλλα, τα οποία δεν έχουν
                            υποβληθεί σε άλλη επεξεργασία -
                            έχουν διατηρήσει όλα τα πολύτιμα
                            συστατικά τους!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Τα φύλλα συλλέγονται την άνοιξη</h4>
                        <p class="text-muted">
                            Συλλέγουμε τα φύλλα για την Olive
                            Power μόνο την άνοιξη - που τότε
                            έχουν το υψηλότερο περιεχόμενο
                            πολυφαινολών, αποδεδειγμένα
                            από την εμπειρία μας!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Υδατικό εκχύλισμα χωρίς οινόπνευμα και χημικά</h4>
                        <p class="text-muted">
                            Πλήρως φιλική προς το περιβάλλον
                            τεχνολογία, χωρίς τη χρήση
                            οποιωνδήποτε αλκοολών και
                            χημικών ουσιών στην παραγωγή
                            του Olive Power!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Μοναδική τεχνολογία και τεχνογνωσία</h4>
                        <p class="text-muted">
                            Τεχνολογία που αναπτύχθηκε και
                            βελτιώθηκε τα τελευταία 10 χρόνια
                            - μια εγγύηση για τις μοναδικές
                            ιδιότητες του Olive Power!
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="boxes">
                        <h4>Εμπειρία τεσσάρων γενεών</h4>
                        <p class="text-muted">
                            Τέσσερις γενιές ελαιοκαλλιέργειας
                            και επεξεργασίας - Olive Power - το
                            καλύτερο που μπορούσαμε να
                            δημιουργήσουμε μέχρι σήμερα!
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
                                <span>Διατηρεί το καρδιαγγειακό σύστημα</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Μειώνει τα επίπεδα χοληστερόλης</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Αντιμικροβιακή και αντιική δράση</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Ρυθμίζει το σάκχαρο</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Υποστηρίζει το ανοσοποιητικό
                                    σύστημα</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Αντιφλεγμονώδες δράση</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Ρυθμίζει την αρτηριακή πίεση</span>
                            </div>
                        </div>
                        <div class="col-md-3 feature">
                            <div class="icon">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div class="text">
                                <span>Αντικαρκινική δράση</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.products', ['locale' => 'el'])

@endsection
