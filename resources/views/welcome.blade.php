<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Portfolio Site</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>Hello!</header>
<div class="home-page">
    <div class="content">
        <nav>
            <ul>
                <li class="current"><a href="/">Home</a></li>
                <li><a href="./profile">Profile</a></li>
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
                <li>
                    <a target="_blank"
                       href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/NL/5.-Onderwijs-examenregelingen/Onderwijs-en-examenregeling/OER-HZ-Bacheloropleiding-voltijd-2022-2023-DEF-13-juni.pdf">
                        HZ CER
                    </a>
                </li>
                <li><a target="_blank"
                       href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf">
                        HZ IR
                    </a>
                </li>
                <li><a target="_blank"
                       href="https://learn.hz.nl/course/view.php?id=23602#section-1">Learn</a></li>
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
                <section class="home-intro">
                    <p>Welcome to the home page of this little portfolio site I made!</p>
                    <p>Here, I will be convincing you why I believe the HBO-ICT course
                        and the field of IT in general suit
                        <a href="profile.html">me</a>. On the other pages of this site
                        I will giving more information about myself
                        and I will explain how I got here. I will do so with:
                    </p>
                    <ul>
                        <li>A <a href="profile.html">profile page</a> with
                            general information about myself</li>
                        <li>A <a href="blog.html">blog</a> with posts detailing
                            my reasoning for choosing this field of education</li>
                        <li>And of course this very page!</li>
                    </ul>
                </section>

                <div class="home-grid">
                    <section class="text last-element">
                        <h2>My Motivation</h2>

                        <p id="home-motivation-end">
                            Since I&apos;ve been playing video games for my entire life,
                            I have always had a fascination with them. As such, it didn&apos;t
                            take long before I also took an interest in the process behind creating one.
                            When I started looking up more information, I quickly found a deep respect
                            within myself for the people who are able to create these programs,
                            these experiences. Some time after, I realized I wanted to be able to
                            do that too, to feel that same respect that I feel for those developers
                            for myself.
                        </p>

                        <h2>The HZ
                            <a href="https://hz.nl/" target="_blank">
                                <img src="https://portal.hz.nl/dist/en/hz-logo.1cca39008849a0cfaeb8.svg"
                                     alt="HZ logo"
                                     id="hz-logo">
                            </a>
                        </h2>

                        <p class="last-element">
                            When I started looking for places to study programming,
                            I soon came across the HZ. Not only is it close to where I live,
                            the quality of the education is also superb.
                            The only downside is that the course isn&apos;t aimed at game development, but
                            that is hardly a setback as the program can easily serve as a stepping stone
                            instead. Not only that, but if I decide not to
                            pursue a career in game development after all, the HBO-ICT course at
                            the HZ is broad in a way that it allows me to pursue a different career
                            as a programmer outside of game development.
                        </p>
                    </section>
                </div>
            </article>
        </main>
    </div>
    <div class="home-figures">
        <figure id="code-screenshot-figure">
            <img src="./img/game-code-screenshot1-crop.png"
                 alt="Screenshot of game code"
                 id="game-code-screenshot"
                 loading="lazy">
            <figcaption>Snippet of code from my attempt at making a game.</figcaption>
        </figure>
        <figure id="hz-building-photo-figure">
            <img src="https://hz.nl/uploads/images/Gebouwen/DSC_4777-2.jpg"
                 alt="Image of the HZ building"
                 id="hz-building-photo"
                 loading="lazy">
            <figcaption>Photo of the HZ building</figcaption>
        </figure>
    </div>
</div>
</body>
</html>
