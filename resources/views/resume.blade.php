<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Online Resume</title>
        <link rel="stylesheet" href="{{mix('css/online-resume.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="hero">
                    <h1 class="name"><strong>Yang</strong> Junhai(Shuyi)</h1>
                    <span class="job-title">Full Stack Developer</span>
                    <span class="email">y.junhai@gmail.com</span>

                    <h2 class="lead">
                        I am a fan of cutting edge, open source technology, a believer of web applications and a Han
                        Chinese culture dilettante.
                    </h2>

                    <div class="list-card">
                        <span class="exp">I am</span>
                        <div>
                            <h3>Coding maniac.</h3>
                            <span>
                            Laravel + Vue = <span class="text red">❤</span>, prefers CentOS and Fedora, dabbles in Bootstrap and Element UI, and I think I am way over my 100k lines of (effective) code...
                        </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Skills and intrest section -->
            <div class="container">

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
            </div>

            <!-- Achievements -->

            <div class="container cards">

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
                        <span>Web Application can deliver products in a consistent manner, and is as powerful as native application. My favourite is <b>Laravel + Vue</b>.
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

            </div>

            <!-- Timeline -->

            <div class="container">
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
                                    Lead Developer @KoreConX
                                </p>
                            </el-link>
                            <p>
                                Site : <a href="https://www.koreconx.com" target="_blank">KoreConX</a>
                            </p>
                            <br>
                            <p>Leader Developer, currently adopting Laravel and Vue, for a robust and scalable FinTech Platform. I believe in using cutting edge technology, good software practices and cleaning code, together with Open Source Software, to present a platform for investors, issuers, platforms to interact with each others, managing their minute book, and more.</p>
                            <br>
                            <p>Worked on these projects: Investor Relations Module, CapTable, Compliance Platform, Portfolio Management.</p>
                        </el-popover>
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
                                Was in charging of integrating online medical appointment system with popular Canadian EMRs, such as Telus Health.
                            </p>
                            <br>
                            <p>Worked on these projects: EMR Integration, Online Booking System API</p>
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

            </div>
        </div>

        <br><br>


        <footer class="container">
            <h4>Credit:</h4>
            <small style="font-size: 12px">Adopt from:</small>
            <span style="font-size: 14px; margin-top: 0.1rem">
                <a href="https://dribbble.com/shots/4342703-Minimal-resume-freebie-for-junior-self-taught-people">Nicolas Meuzard</a>
            </span>
        </footer>
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
