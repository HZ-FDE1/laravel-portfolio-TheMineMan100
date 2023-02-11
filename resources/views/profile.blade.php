<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Profile - Portfolio Site</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>My Profile</header>
<div id="profile-page">
    <div class="content">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li class="current"><a href="./profile">Profile</a></li>
                <li><a href="./dashboard">Dashboard</a></li>
                <li class="blog-dropdown">
                    <a href="./blog" class="blog-dropdown-button">Blog</a>
                    <div class="blog-dropdown-content">
                        <a href="./post5-profession">Profession</a>
                        <a href="./post4-feedback">Feedback</a>
                        <a href="./post3-experience">Programming Experience</a>
                        <a href="./post2-swot">SWOT Analysis</a>
                        <a href="./post1-study-choice">Study Choice</a>
                    </div>
                </li>
                <li><a href="./faq">FAQ</a></li>
            </ul>
        </nav>
        <aside>
            <ul>
                <li><a target="_blank" href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/NL/5.-Onderwijs-examenregelingen/Onderwijs-en-examenregeling/OER-HZ-Bacheloropleiding-voltijd-2022-2023-DEF-13-juni.pdf">HZ CER</a></li>
                <li><a target="_blank"
                       href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf">
                        HZ IR
                    </a>
                </li>
                <li><a target="_blank" href="https://learn.hz.nl/course/view.php?id=23602#section-1">Learn</a></li>
                <li><a target="_blank"
                       href="https://teams.microsoft.com/l/team/19%3a2e2afa0286b04932be16cb8ad2d9d2c0%40thread.skype/conversations?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">
                        Teams
                    </a>
                </li>
                <li><a target="_blank" href="https://hz.osiris-student.nl/#/home">Study Progress</a></li>
                <li><a target="_blank" href="https://github.com/HZ-HBO-ICT">Github</a></li>
            </ul>
        </aside>

        <main>
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
        </main>
    </div>
    <div id="profile-figures">
        <figure id="profile-photo-figure">
            <img src="img/MarcusProfilePictureResize2.jpg"
                 alt="Marcus looking at the camera."
                 id="profile-photo">
            <figcaption id="profile-photo-figcaption">A picture of me.</figcaption>
        </figure>
    </div>
</div>
</body>
</html>
