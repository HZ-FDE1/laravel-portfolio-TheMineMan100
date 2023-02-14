@extends('layout')

@section('title')
    <title>FAQ - Portfolio Site</title>
@endsection

@section('header')
    <header>Frequently Asked Questions</header>
@endsection

@section('content')
    <article class="questions">
        <ul>
            @foreach($faqs as $faq)
                <li>{{ $faq->question }}</li>
                <li>{{ $faq->answer }}</li>
                <li><a href="{{ $faq->link }}">Relevant link</a> (Links to: {{ $faq->link }})</li>
                <br>
            @endforeach
        </ul>
        <section>
            <details>
                <summary class="faq-summary">
                    <h2>Q: How can you print a document from your laptop at HZ?</h2>
                </summary>

                <p class="last-element">
                    A: Everything about printing documents can be found at the HZ Topdesk website
                    <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=bd81be42f243450e95e510949a496145"
                       target="_blank">here</a>.
                    A link to the printing website can be found
                    <a href="https://mynetpay.hz.nl/webprint" target="_blank">here</a>.
                </p>
            </details>
        </section>

        <hr>

        <section>
            <details>
                <summary class="faq-summary">
                    <h2>Q: How can you scan a document a send it to your laptop at HZ?</h2>
                </summary>

                <p class="last-element">
                    A: You can find the instructions on the HZ Topdesk website;
                    a link to that tutorial can be found
                    <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=d065a4e8a56d47dcbd0ffb9cdf78f20b&origin=searchPreview"
                       target="_blank">here</a>.
                </p>
            </details>
        </section>

        <hr>

        <section>
            <details>
                <summary class="faq-summary">
                    <h2>Q: How can I buy something (like when I sign up for the IT introduction
                        event at Friday 16/09) on the HZ web shop?
                    </h2>
                </summary>

                <p class="last-element">
                    A: You can find the webshop on the MyHZ portal,
                    and from there you can easily make your purchase.
                    You can also find the link to the web shop
                    <a
                        href="https://webshop.hz.nl/WebshopApp/defaulten.aspx?menu=082076044027019251066025111065201099237062130097"
                        target="_blank">
                        here</a>.
                </p>
            </details>
        </section>

        <hr>

        <section>
            <details>
                <summary class="faq-summary">
                    <h2>Q: Where can I find the latest instructions on what
                        to do when you are sick / show symptoms of COVID?
                    </h2>
                </summary>

                <p class="last-element">
                    A: You can find the link to everything regarding Covid-19 at the HZ
                    <a href="https://hz.nl/en/current-affairs/coronavirus" target="_blank">here</a>.
                </p>
            </details>
        </section>

        <hr>

        <section>
            <details>
                <summary class="faq-summary">
                    <h2>Q: How can you book a project space in one of the wings?</h2>
                </summary>

                <p class="last-element">
                    A: All the precise information, including the reservation
                    procedure can be found
                    <a href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=7e54d40b762c4dc79205e200f0d4d818"
                       target="_blank">here</a>
                    on the HZ Topdesk website.
                </p>
            </details>
        </section>

        <hr>

        <section>
            <details>
                <summary class="faq-summary">
                    <h2>
                        Q: What are the instructions if you want to park your car at the HZ parking lot?
                    </h2>
                </summary>

                <p>
                    A: Free parking is available at the car park at Poelendaelesingel 8 in Middelburg.
                    This is at a few minutes&apos; walk from HZ. Unfortunately,
                    it is not possible to park directly at the HZ premises.
                    However, there is a disabled parking space available right next to
                    the HZ building at Het Groene woud 1-3.
                </p>

                <p>
                    At the barrier of the
                    car park the Poelendaelesingel you can ring the bell. After passing the barrier,
                    follow the signs to the HZ parking places, marked with a white sign with the HZ logo.
                </p>

                <p>
                    Students and staff can only enter by presenting their HZ pass at the barriers,
                    guests can ring the bell at the barrier.
                </p>

                <p>
                    Please note: if you park at the Poelendaelesingel,
                    you cannot reach the HZ via the pedestrian tunnel
                    due to the construction work for the Joint Research Center Zeeland.
                    You can cross at the traffic lights at the intersection,
                    Poelendaelesingel/Het Groene Woud.
                </p>

                <p class="last-element">
                    This information can also be found at the bottom
                    of <a href="https://hz.nl/en/about-hz/contact/middelburg" target="_blank">this</a>
                    page.
                </p>
            </details>
        </section>
    </article>
@endsection
