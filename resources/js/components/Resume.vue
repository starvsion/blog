<template>
    <el-card>
        <el-row class="container">
            <div class="hero">
                <h1 class="name"><strong>Yang</strong> Junhai(Shuyi)</h1>
                <span class="job-title">Full Stack Developer</span>
                <span class="email">y.junhai@gmail.com</span>

                <h2 class="lead">
                    I am a fan of cutting edge, open source technology, a believer of web applications and a Han Chinese
                    culture dilettante.
                </h2>

                <div class="el-row" :gutter="10">
                    <el-col :span="8">
                        <fa-icon :icon="['fab','github']" class="mr-1"/>
                         <a href="https://github.com/starvsion">https://github.com/starvsion</a>
                    </el-col>
                    <el-col :span="8">
                        <fa-icon prefix="fab" :icon="['fab','linkedin-in']" class="mr-1"/>
                         <a href="https://bit.ly/2EuZUf5">https://bit.ly/2EuZUf5</a>
                    </el-col>
                    <el-col :span="8">
                        <fa-icon prefix="fab" :icon="['fab','stack-overflow']" class="mr-1"/>
                         <a href="https://bit.ly/2LWcZ77">https://bit.ly/2LWcZ77</a>
                    </el-col>
                </div>

                <div class="list-card">
                    <span class="exp">I am</span>
                    <div>
                        <h3>Coding maniac.</h3>
                        <span>
                            Laravel + Vue = <span class="text red">❤</span>, prefers CentOS and Fedora, dabbles in Bootstrap and Element UI, and I think I am way over my 100k lines of (effective) code...
                        </span>
                    </div>
                </div>

                <div class="list-card">
                    <span class="exp">TL;DR</span>
                    <div>
                        <h3>#Laravel</h3>
                        <h3>#Vue</h3>
                        <h3>#FullStack</h3>
                        <h3>#DevOps</h3>
                        <h3>#FinTech</h3>
                        <h3>#InfoSec</h3>
                        <h3>#CSMajor</h3>
                        <h3>#OOP</h3>
                        <h3>#Scrum</h3>
                    </div>
                </div>
            </div>
        </el-row>

        <!-- Skills and intrest section -->
        <el-row class="container">

            <div class="sections">
                <h2 class="section-title">Skills</h2>

                <div class="list-card">
                    <el-tooltip content="3 Years Professionally" placement="top-end">
                             <span class="exp">
                                + 10 Years
                             </span>
                    </el-tooltip>
                    <div>
                        <h3>Object programming & frameworks</h3>
                        <span>PHP, Laravel, Java, C#, ASP.NET...</span>
                    </div>
                </div>

                <div class="list-card">
                    <span class="exp">+ 3 years</span>
                    <div>
                        <h3>Front End Development</h3>
                        <span>Vue, Bootstrap, Element UI, SCSS, storybook, component driven design... </span>
                    </div>
                </div>

                <div class="list-card">
                    <span class="exp">+ 5 years</span>
                    <div>
                        <h3>Linux</h3>
                        <span>Fedora, CentOS, Ubuntu, Deployment, Scaling (in both directions), LNMP, LAMP... </span>
                    </div>
                </div>

                <div class="list-card">
                    <span class="exp">+ 3 years</span>
                    <div>
                        <h3>Software engineering</h3>
                        <span> ❗Clean Code, Best Practices, PSR-1,2,4, UML, OOP, pivotal tracker, agile, scrum, git(hub) ... </span>
                    </div>
                </div>
            </div>
            <div class="sections">
                <h2 class="section-title">Interests</h2>

                <div class="list-card">
                    <div>
                        <h3>Container Technology</h3>
                        <span>Docker, Kubernetes, vm, serverless application </span>
                    </div>
                </div>

                <div class="list-card">
                    <div>
                        <h3>UI/UX</h3>
                        <span>Universal Design Principles, Ant Design guideline, storybook, anthropology and UX </span>
                    </div>
                </div>
                <div class="list-card">
                    <div>
                        <h3>Culture and Religion</h3>
                        <span>Hanfu Movement, Han Culture, Confucius Rites and Rituals, GuQin,  Mahayana Theories</span>
                    </div>
                </div>
                <div class="list-card">
                    <div>
                        <h3>Cat</h3>
                        <span>I love cats, mine is called <b>JavaScript</b></span>
                    </div>
                </div>
            </div>
        </el-row>

        <!-- Achievements -->

        <el-row class="container cards">

            <div class="card">
                <div class="skill-level">
                    <h2>100</h2>
                    <span>K+</span>
                </div>

                <div class="skill-meta">
                    <h3>Lines of codes</h3>
                    <span>Problem solving my way out! Adopting, Learning, Experiment and Innovate with different technology and methods</span>
                </div>
            </div>


            <div class="card">
                <div class="skill-level">
                    <h2>100</h2>
                    <span>%</span>
                </div>

                <div class="skill-meta">
                    <h3>Web Developer</h3>
                    <span>Web Application can deliver products in a consistent manner, and is as powerful as
                              native application. My favourite is <b>Laravel + Vue</b>.</span>
                </div>
            </div>


            <div class="card">
                <div class="skill-level">
                    <h2>50</h2>
                    <span>%</span>
                </div>

                <div class="skill-meta">
                    <h3>Team Work</h3>
                    <span>Set a common coding standard, write clean codes and utilize git, CI, PR, github issues etc.</span>
                </div>
            </div>


            <div class="card">
                <div class="skill-level">
                    <h2>50</h2>
                    <span>%</span>
                </div>

                <div class="skill-meta">
                    <h3>Personal Quality</h3>
                    <span>
                            Keep on learning, be ready for changes, never be frail in front challenges! Be humble, do not prejudge.
                        </span>
                </div>
            </div>

        </el-row>

        <!-- Timeline -->

        <el-row class="container">
            <el-button icon="el-icon-warning" type="text">Hover to see more information</el-button>
            <ol class="timeline">
                <li>
                    <p class="line">Experiences</p>
                    <span class="point"></span>
                    <el-popover
                        placement="top-start"
                        title="Lead Developer @KoreConX"
                        trigger="hover"
                        width="500"
                    >
                        <el-link slot="reference" :underline="false">
                            <p class="description">
                                Lead Developer @ KoreConX
                            </p>
                        </el-link>
                        <p>
                            Site : <a href="https://www.koreconx.com" target="_blank">KoreConX</a>
                        </p>
                        <br>
                        <p>Leader Developer, currently adopting Laravel and Vue, for a robust and scalable FinTech
                           Platform. I believe in using cutting edge technology, good software practices and cleaning
                           code, together with Open Source Software, to present a platform for investors, issuers,
                           platforms to interact with each others, managing their minute book, and more.
                        </p>
                        <br>
                        <p>Worked on these projects: Investor Relations Module, CapTable, Compliance Platform, Portfolio
                           Management.
                        </p>
                        <br>
                        <p><b>Technology:</b> Laravel, Lumen Vue, JQuery, MySQL, Linux </p>
                    </el-popover>
                    <br>
                    <span class="date">Today - June. 2017</span>
                </li>

                <li>
                    <span class="point"></span>
                    <el-popover
                        placement="top-start"
                        title="Software Developer @ Health Myself"
                        trigger="hover"
                        width="400"
                    >
                        <el-link slot="reference" :underline="false">
                            <p class="description">
                                Software Developer @ Health Myself
                            </p>
                        </el-link>
                        <p>
                            Site : <a href="https://www.healthmyself.ca" target="_blank">Health Myself</a>
                        </p>
                        <br>
                        <p>
                            Was in charging of integrating online medical appointment system with popular Canadian EMRs,
                            such as Telus Health.
                        </p>
                        <br>
                        <p>Worked on these projects: EMR Integration, Online Booking System API</p>
                        <br>
                        <p><b>Technology:</b> PHP, RESTful API, JQuery, MySQL, Linux, Java, C# </p>

                    </el-popover>
                    <span class="date">Feb. 2017 - Jan. 2016</span>
                </li>

                <li>
                    <p class="line">Education</p>
                    <span class="point"></span>
                    <p class="description">
                        University of Toronto <br>(Hon. BSC. CS)
                    </p>
                    <span class="date">2015 - 2013</span>
                </li>

                <li>
                    <span class="point"></span>
                    <p class="description">
                        Nanyang Polytechnic
                        <br>
                        Dip. Information Security
                    </p>
                    <span class="date">2013 - 2010</span>
                </li>
            </ol>
        </el-row>
        <br>
        <footer class="container">
            <h4>Credit:</h4>
            <small style="font-size: 12px">Adopt from:</small>
            <span style="font-size: 14px; margin-top: 0.1rem">
                <a href="https://dribbble.com/shots/4342703-Minimal-resume-freebie-for-junior-self-taught-people">Nicolas Meuzard</a>
            </span>
        </footer>
    </el-card>
</template>

<script>
    export default {
        name: "Resume"
    };
</script>

<style scoped lang="scss">
    /* https://newtodesing.com/
       v2.0 | 20110126
       License: none (public domain)
    */
    @import "../../sass/variables";
    @import "../../sass/text";

    /* Reset Styles */
    $dark-blue: #5B6A9A;
    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed,
    figure, figcaption, footer, header, hgroup,
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        vertical-align: baseline;
    }

    article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
        display: block;
    }

    a {
        text-decoration: none;
        text-transform: none;
        color: $indigo;
    }

    body {
        line-height: 1;
        font-family: $font-family;
        text-rendering: optimizeLegibility;
        -webkit-font-smoothing: antialiased;
        font-size: 19px;
        background-color: #FEFEFE;
        color: $blue;
    }

    ol, ul {
        list-style: none;
    }

    blockquote, q {
        quotes: none;
    }

    blockquote {
        &:before, &:after {
            @extend .no-content;
        }
    }

    q {
        &:before, &:after {
            @extend .no-content;
        }
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    p {
        color: #15171a;
        font-size: 17px;
        line-height: 31px;
    }

    strong {
        font-weight: 600;
    }

    div, footer {
        box-sizing: border-box;
    }

    /* Reset ends */

    /*Hero section*/

    .container {
        max-width: 1100px;
        height: auto;
        margin: 60px auto;
    }

    .hero {
        margin: auto;
        position: relative;
    }

    h1.name {
        font-size: 70px;
        font-weight: 300;
        display: inline-block;
    }

    .job-title {
        vertical-align: middle;
        background-color: $indigo;
        color: $blue;
        font-weight: 600;
        margin-top: 1rem;
        border-radius: 5px;
        display: inline-block;
        padding: 15px 25px;
        float: right;
    }

    .email {
        display: block;
        font-size: 24px;
        font-weight: 300;
        color: #81899C;
        margin-top: 1em;
    }

    .lead {
        font-family: "EB Garamond", "PingFang SC", serif;
        font-style: italic;
        font-size: 1.9em;
        font-weight: 300;
        margin-top: 1em;
        margin-bottom: 1em;
        line-height: 55px;
        font-variant: unset;
    }

    /*hero ends*/

    /*skills & interests*/

    .sections {
        vertical-align: top;
        display: inline-block;
        width: 49.7%;
        height: 50px;
    }

    .section-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .list-card {
        margin: 30px 0;

        .exp, div {
            display: inline-block;
            vertical-align: top;
        }

        .exp {
            margin-right: 1em;
            color: $indigo;
            font-weight: 600;
            width: 7rem;
            margin-top: 1rem;
        }

        div {
            width: 70%;
        }

        h3 {
            font-size: 20px;
            font-weight: 600;
            color: $dark-blue;
            line-height: 26px;
            margin-bottom: 8px;
        }

        div span {
            font-size: 16px;
            color: #81899C;
            line-height: 22px;
        }
    }

    /*skill and interests ends*/

    /* Achievements */

    .cards {
        max-width: 1120px;
        display: block;
        margin-top: 30%;
    }

    .card {
        width: 47.9%;
        height: 200px;
        background-color: #EEF0F7;
        display: inline-block;
        margin: 7px 5px;
        vertical-align: top;
        border-radius: 10px;
        text-align: center;
        padding-top: 50px;
    }

    .card-active, .card:hover {
        transform: scale(1.02);
        transition: 0.5s;
        background-color: #fff;
        box-shadow: 0 5px 50px -8px #ddd;
        cursor: pointer;
    }

    .skill-level {
        display: inline-block;
        max-width: 12rem;
        @extend .label;

        span {
            font-size: 35px;
            font-weight: 300;
            color: $dark-blue;
            vertical-align: top;
        }

        h2 {
            font-size: 95px;
            font-weight: 300;
            display: inline-block;
            vertical-align: top;
            color: $dark-blue;
            letter-spacing: -5px;
        }
    }

    .skill-meta {
        vertical-align: top;
        display: inline-block;
        max-width: 300px;
        text-align: left;
        margin-top: 15px;
        margin-left: 15px;

        h3 {
            font-size: 20px;
            font-weight: 800;
            color: $dark-blue;
            margin-bottom: 5px;
        }

        span {
            color: #81899C;
            line-height: 20px;
            font-size: 16px;
        }
    }

    /* Achievements ends */

    /* Timeline styles*/

    ol {
        position: relative;
        display: block;
        margin: 100px 0;
        height: 2px;
        background: #EEF0F7;

        &::before, &::after {
            content: "";
            position: absolute;
            top: -10px;
            display: block;
            width: 0;
            height: 0;
            border-radius: 10px;
            border: 0 solid #31708F;
        }

        &::before {
            left: -5px;
        }

        &::after {
            right: -10px;
            border: 0 solid transparent;
            border-left: 20px #31708F;
            border-radius: 3px;
        }
    }

    /* ---- Timeline elements ---- */

    li {
        position: relative;
        display: inline-block;
        float: left;
        width: 25%;
        height: 50px;

        .line {
            position: absolute;
            top: -47px;
            left: 1%;
            font-size: 20px;
            font-weight: 600;
            color: darken($blue, 20%);
        }

        .point {
            content: "";
            top: -7px;
            left: 0;
            display: block;
            width: 8px;
            height: 8px;
            border: 4px solid #fff;
            border-radius: 10px;
            background: $indigo;
            position: absolute;
        }

        .description {
            display: none;
            padding: 10px 0;
            margin-top: 20px;
            position: relative;
            z-index: 1;
            max-width: 95%;
            font-size: 18px;
            font-weight: 600;
            line-height: 25px;
            color: $dark-blue;
            @extend .label;
        }
    }

    .description::before {
        @extend .no-content;
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: 5px solid #f4f4f4;
        position: absolute;
        top: -5px;
        left: 43%;
    }

    .timeline .date {
        font-size: 14px;
        color: #81899C;
        font-weight: 300;
    }

    /* ---- Hover effects ---- */

    li {
        &:hover {
            color: $indigo;
        }

        .description {
            display: block;
            @extend .label;

        }
    }

    /*timeline ends*/

    /* Media queries*/

    @media (max-width: 1024px) {
        .container {
            padding: 15px;
            margin: 0 auto;
        }
        .cards {
            margin-top: 250px;
        }
    }

    @media (max-width: 768px) {
        .container {
            padding: 15px;
            margin: 0 auto;
        }
        .cards {
            margin-top: 320px;
        }
        .card {
            padding: 15px;
            text-align: left;

            h2 {
                font-size: 70px;
            }

            width: 100%;
            height: auto;
            margin: 10px 0;
            float: left;
        }
        .sections {
            width: 100%;
            height: auto;
            margin: 10px 0;
            float: left;
        }
        .timeline {
            border: none;
            background-color: rgba(0, 0, 0, 0);

            li {
                margin-top: 70px;
                height: 150px;
            }
        }
    }

    @media (max-width: 425px) {
        h1.name {
            font-size: 40px;
        }
        .card, .sections {
            width: 100%;
            height: auto;
            margin: 10px 0;
            float: left;
        }
        .timeline {
            display: none;
        }
        .job-title {
            position: absolute;
            font-size: 15px;
            top: -40px;
            right: 20px;
            padding: 10px;
            float: right;
        }
        .lead {
            margin-top: 15px;
            font-size: 20px;
            line-height: 28px;
        }
        .container {
            margin: 0;
            padding: 0 15px;
        }
        footer {
            margin-top: 2050px;
        }
    }

    /* End of all :P*/
</style>
