@extends('layout')

@section('title')
    <title>My Profile - Portfolio Site</title>
@endsection

@section('header')
    <header>My Profile</header>
@endsection

@section('div-id')
    <div id="profile-page">
@endsection

@section('content')
    <article>
        <div id="profile-text">
            <section>
                <h2>Personal Information</h2>

                <ul>
                    <li>Name: Marcus Houten</li>
                    <li>Age: 18 years old</li>
                    <li>Place of residence: Kruiningen, at my mother's house</li>
                    <li>Education: Gymnasium Beta</li>
                </ul>
            </section>

            <section class="last-element">
                <h2>Extra-curricular Activities</h2>

                <p>
                    I am currently unemployed, though I have delivered newspapers before.
                    I have also worked at several supermarkets.
                </p>

                <p>
                    In my off time I tend to play video games, either alone
                    or online with my friends. When we're all available we also sometimes
                    play Dungeons & Dragons together, where I tend to take the role of
                    the DM (Dungeon Master). I am of course open to playing with
                    new people if anyone is interested!
                </p>

                <p class="last-element">
                    My current favorite video games include Dead by Daylight,
                    Garry&apos;s Mod (of course with many, many add-ons), Minecraft, Bloons TD 6,
                    Undertale and Deltarune. When I&apos;m browsing other games I often
                    tend to look at horror games, and I have a particular fascination
                    with Five Nights at Freddy&apos;s (fan) games due to growing up with
                    the franchise.
                </p>
            </section>
        </div>
    </article>
@endsection

@section('figures')
    <div id="profile-figures">
        <figure id="profile-photo-figure">
            <img src="img/MarcusProfilePictureResize2.jpg"
                 alt="Marcus looking at the camera."
                 id="profile-photo">
            <figcaption id="profile-photo-figcaption">A picture of me.</figcaption>
        </figure>
    </div>
@endsection
