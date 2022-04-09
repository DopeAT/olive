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
                        <p class="hero-text">Το πιο ισχυρό Αντιοξειδωτικό στον Κόσμο!</p>
                        <p class="hero-text">
                            <strong>Φυσικό εκχύλισμα φύλλων άγριας
                                ελιάς!</strong> <br>
                            18.000 φορές περισσότερα
                            αντιοξειδωτικά από το εξαιρετικό
                            παρθένο ελαιόλαδο.
                        </p>
                        <a href="{{ route('order') }}?order=1" class="buy btn btn-custom">
                            Προσθήκη στο καλάθι <i class="fas fa-shopping-cart"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-text-section">
        <div class="container text-center">
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
                                <span>ρυθμίζει το σάκχαρο</span>
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

    <section class="intro-text-section">
        <div class="container text-center">
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
                <div class="col-md-12">
                    Φυσικό εκχύλισμα φύλλων άγριας
                    ελιάς.
                    Σταγόνες Υγείας από τη φύση με
                    ενεργή φροντίδα για σας, από την
                    ηλιόλουστη Ελλάδα!
                    Το εκχύλισμα φύλλων άγριας ελιάς
                    είναι ένα 100% φυσικό προϊόν για
                    περισσότερη ζωτική ενέργεια και
                    βελτίωση της υγείας, που
                    δημιουργήθηκε με πρωτότυπη
                    τεχνολογία, χωρίς τεχνητά
                    συστατικά.
                    Το OLIVE POWER είναι το μοναδικό
                    προϊόν στη Ελλάδα με την
                    υψηλότερη περιεκτικότητα σε
                    πολυφαινόλες, ως εκχύλισμα
                    φύλλων άγριας ελιάς, με την πιο
                    απορροφήσιμη μορφή για το
                    οργανισμό.
                    Το πιο ισχυρό φυσικό
                    αντιοξειδωτικό στον κόσμο, το
                    οποίο εξισορροπεί τις ζωτικές
                    λειτουργίες, εξουδετερώνει τη
                    δράση των ελεύθερων ριζών στο
                    σώμα και έχει πολλά οφέλη για την
                    ανθρώπινη υγεία.
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
                            <strong>Χρήσιμες ιδιότητες:</strong>
                        </h3>
                        <p class="page-header-text text-white mb-0">Οι ιατρικές έρευνες και οι
                            εργαστηριακές μελέτες τα
                            τελευταία χρόνια, καθώς και το
                            έργο πολλών επιστημόνων σε όλο
                            τον κόσμο, αποδεικνύουν τη
                            σύνδεση μεταξύ του εκχυλίσματος
                            των φύλλων ελιάς, με τα πολλά
                            οφέλη για την ανθρώπινη υγεία
                            από τη χρήση του:</p>
                        <hr class="white-hr">
                    </div>
                </div>

                <div class="row">
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span class="circle-num">1</span>
                                </h4>
                                <p>Το πιο ισχυρό αντιοξειδωτικό
                                    στον κόσμο.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">2</span>
                                </h4>
                                <p>Μειώνει τα επίπεδα LDL
                                    χοληστερόλης και τριγλυκεριδίων
                                    μειώνοντας σημαντικά τον κίνδυνο
                                    αθηροσκλήρωσης.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">3</span>
                                </h4>
                                <p>Προστατεύει και διασφαλίζει την
                                    υγεία του καρδιακού συστήματος.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">4</span>
                                </h4>
                                <p>Έχει δράση κατά του καρκίνου</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">5</span>
                                </h4>
                                <p>Έχει αντιμικροβιακή δράση</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">6</span>
                                </h4>
                                <p>Υποστηρίζει το νευρικό σύστημα
                                    σε συνθήκες υψηλών επιπέδων
                                    στρες</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">7</span>
                                </h4>
                                <p>Ασχολείται με διάφορες
                                    μυκητιασικές μολύνσεις
                                    (μυκητοκτόνων δραστηριοτήτων)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">8</span>
                                </h4>
                                <p>Επιβραδύνει την διαδικασία
                                    γήρανσης του σώματος και
                                    διατηρεί την φυσική υγεία</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">9</span>
                                </h4>
                                <p>Ρυθμίζει την αρτηριακή πίεση
                                    και επιτυγχάνει πολλά καλά
                                    αποτελέσματα στην καταπολέμηση
                                    της υπέρτασης</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">10</span>
                                </h4>
                                <p>Ρυθμίζει τα επίπεδα του
                                    σακχάρου αίματος και έχει
                                    αντιδιαβητική δράση.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">11</span>
                                </h4>
                                <p>Ενισχύει το ανοσοποιητικό
                                    σύστημα και ωθεί το σώμα στην
                                    πρόληψη των διαφόρων ιών
                                    λοίμωξης</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">12</span>
                                </h4>
                                <p>Αυξάνει τις αντιφλεγμονώδες
                                    δυνάμεις ολόκληρου του
                                    οργανισμού</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">13</span>
                                </h4>
                                <p>Αυξάνει την κυτταρική
                                    αναγέννηση και βοηθά στην
                                    ταχύτερη επούλωση των
                                    τραυμάτων</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">14</span>
                                </h4>
                                <p>Προστασία του γαστρεντερικού
                                    βλεννογόνου</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">15</span>
                                </h4>
                                <p>15. Δρα κατασταλτικά στην
                                    ποδάγρα</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 my-3 border-right border-left">
                        <div class="benefits-content text-center">
                            <div class="details">
                                <h4>
                                    <span style="  background: #0f6848;
  border-radius: 0.8em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: #ffffff;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; " class="-circle">16</span>
                                </h4>
                                <p>Εμποδίζει την ανάπτυξη της
                                    νόσου του Αλτσχαιμέρ και του
                                    Πάρκινσον</p>
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

    @include('components.products', ['locale' => 'el'])

@endsection
