<?php

// contains main content of the site which will be pasted into the page template
$siteMainContent = '
    <main>
        <article>

            <header>
                <h2 class="article-header">Quiz - sprawdź się</h2>
            </header>

            <hr class="quiz-hr">

            <!-- quiz link -->
            <section>
                <div class="download-game">
                    <a href="https://drive.google.com/file/d/1yBIbjN3bQ7rLL_eLrI49m9VjxkmN0sIA/view?usp=sharing"
                        target="_blank" title="Pobierz grę na temat Makbeta!">
                        <img src="assets/img/imgByJan/download-game.png" id="download-game__image">
                    </a>
                </div>
            </section>

            <hr>

            <!-- quiz description -->
            <section>
                <p><span class="bigger-font-size">Nasz quiz dotyczy całości lektury Makbeta. Większość potrzebnych
                        informacji znajdziesz na stronie oraz zalinkowanych źródłach, ale będą też pytania o wyższej
                        trudności, gdzie musisz wykazać się samodzielnym pozyskaniem informacji. Powodzenia!</span></p>
            </section>

            <hr>

            <!-- quiz instruction -->
            <section>
                <h5>Instrukcja</h5>

                <p><span class="redColor">Uwaga!</span> Program można uruchomić tylko na komputerze z Windowsem!</p>

                <ul id="download-instruction">

                    <li>
                        Kliknij na powyższy napis "POBIERZ GRĘ"
                    </li>

                    <li>
                        Po otworzeniu się strony pobierz plik (~19MB)
                    </li>

                    <li>
                        Rozpakuj pobrany plik zip
                    </li>

                    <li>
                        Otwórz rozpakowany folder "Makbet" lub "Makbet-Gra"
                    </li>

                    <li>
                        Uruchom plik "Szekspir.exe"
                    </li>

                </ul>

                <p>Jeśli chciałbyś wyjść z quizu przed jego zakończeniem użyj skrótu ALT + TAB i kliknij \'X\' przy okienku gry.</p>
            </section>

            <hr>

        </article>
    </main>
';

// Pasting the content
echo $siteMainContent;

?>