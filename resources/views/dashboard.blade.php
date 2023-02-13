@extends('layout')

@section('title')
    <title>Dashboard - Portfolio Site</title>
@endsection

@section('body-start')
    <body onload="javascript:move()">
    <script src="../js/progress-bar.js"></script>
@endsection

@section('header')
    <header>Dashboard</header>
@endsection

@section('content')
    <article>
        <!-- Credit to W3Schools for progress bar code inspiration -->
        <div class="nbsa-container">
            <h2>NBSA and EC Progress</h2>
            <div class="bar-background">
                <div id="nbsa-progress-bar" class="nbsa-container main-bar">
                </div>
            </div>
            <p id="progress-bar-text"><span id="ec-count">0</span> of 60 EC
                (must end higher than 45 EC due to NBSA)</p>
        </div>

        <h2>Table of Exams</h2>

        <table>
            <tr>
                <th>Quartile</th>
                <th>Course</th>
                <th>EC</th>
                <th>Exam</th>
                <th>Grade</th>
            </tr>
            <tr>
                <td rowspan="8">1 - Computer Science</td>
                <td>Program- and Career Orientation</td>
                <td class="dashboard-number">2.5</td>
                <td>Assessment website</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td>Computer Science Basics</td>
                <td class="dashboard-number">5.0</td>
                <td>Theory exam</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td>Programming Basics</td>
                <td class="dashboard-number">5.0</td>
                <td>Casus test</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td rowspan="3">PPD-E: Dutch Class</td>
                <td rowspan="3" class="dashboard-number">12.5</td>
                <td>Dutch test (x0.05)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td>English test (x0.05)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td>Criterium focused interview (x0.9)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td rowspan="2">Personality</td>
                <td class="dashboard-number">1.25</td>
                <td>IT Personality - projectweek 1</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td class="dashboard-number">1.25</td>
                <td>IT Personality 1</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td rowspan="2">2 - Game Development</td>
                <td rowspan="2">Object-Oriented Programming</td>
                <td rowspan="2" class="dashboard-number">10.0</td>
                <td>Group assignment (x0.5)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td>Casus test (x0.5)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td rowspan="4">3 - Modern Software Development</td>
                <td>Framework Development 1</td>
                <td class="dashboard-number">5.0</td>
                <td>Casus test</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td rowspan="3">Framework Project 1</td>
                <td rowspan="3" class="dashboard-number">7.5</td>
                <td>Criterium oriented interview (x0.33)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td>Assignment (x0.33)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td>Test (x0.34)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td rowspan="5">4 - Modern Software Development</td>
                <td rowspan="3">Framework Project 2</td>
                <td rowspan="3" class="dashboard-number">10.0</td>
                <td>Final delivery (x0.25)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td>Acceptance test (x0.25)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td>IT-development portfolio (x0.5)</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td rowspan="2">Personality</td>
                <td class="dashboard-number">1.25</td>
                <td>IT Personality International week</td>
                <td class="dashboard-number">N/A</td>
            </tr>
            <tr>
                <td class="dashboard-number">1.25</td>
                <td>IT Personality 2</td>
                <td class="dashboard-number">N/A</td>
            </tr>
        </table>
    </article>
@endsection
