<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield ('title')
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
@yield ('header')
@yield ('div-id')
    <div class="content">
        <nav>
            <ul>
                <li class="{{ Request::path() === '/' ? 'current' : '' }}"><a href="/">Home</a></li>
                <li class="{{ Request::path() === 'profile' ? 'current' : '' }}"><a href="/profile">Profile</a></li>
                <li class="{{ Request::path() === 'dashboard' ? 'current' : '' }}"><a href="/dashboard">Dashboard</a></li>
                <li class="{{ Request::path() === 'grades' ? 'current' : '' }}"><a href="/grades">Grades</a></li>
                <li class="blog-dropdown">
                    <a href="/articles" class="{{ Request::path() === 'articles' ? 'current' : '' }} blog-dropdown-button">Blog</a>
                    <div class="blog-dropdown-content">
                        <a href="./post5-profession">Profession</a>
                        <a href="./post4-feedback">Feedback</a>
                        <a href="./post3-experience">Programming Experience</a>
                        <a href="./post2-swot">SWOT Analysis</a>
                        <a href="./post1-study-choice">Study Choice</a>
                    </div>
                </li>
                <li class="{{ Request::path() === 'faqs' ? 'current' : '' }}"><a href="/faqs">FAQ</a></li>
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
            @yield ('content')
        </main>
    </div>
    @yield ('figures')
</div>
</body>
</html>
