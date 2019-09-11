<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @if ('production' === config('app.env'))
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120639127-2"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'UA-120639127-2');
            </script>
        @endif
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Webathletes - Full-Stack Development</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="text-lg tracking-wide font-primary">

        @if (Session::has('success.project.lead'))
            @component('notification', ['type' => 'success',])
                <p class="font-bold">Request sent successfully</p>
                <p class="text-sm relative">
                    Thanks for sharing some insights into your project! #letsdothis
                </p>
            @endcomponent
        @endif

        <header class="bg-gray-100 relative">
            <nav class="bg-gray-200 flex h-16 w-full z-10 fixed top-0">
                <a class="flex-grow self-center text-xl sm:text-2xl ml-6 fixed z-10 lg:static lg:z-0 hover:text-highlight" title="Webathletes" href="/">Webathletes</a>

                <button class="script-hamburger hamburger hamburger--spin self-center lg:hidden mr-6 fixed right-0 z-10" type="button" aria-label="Menu" aria-controls="navigation" aria-expanded="false">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <div id="navigation" class="w-full lg:w-auto bg-gray-200 script-hamburger-toggle self-center hidden lg:block fixed bottom-0 lg:static h-full lg:h-auto">
                    <ul class="my-64 lg:my-0 font-secundary lg:mr-6">
                        <li class="text-center lg:text-left block lg:inline lg:mr-8 py-3 lg:py-0">
                            <a class="script-navigation-link border-b-2 border-gray-200 hover:border-highlight text-xl lg:text-base" title="About" href="#about">About</a>
                        </li>
                        <li class="text-center lg:text-left block lg:inline lg:mr-8 py-3 lg:py-0">
                            <a class="script-navigation-link border-b-2 border-gray-200 hover:border-highlight text-xl lg:text-base" title="Skills" href="#skills">Skills</a>
                        </li>
                        <li class="text-center lg:text-left block lg:inline lg:mr-8 py-3 lg:py-0">
                            <a class="script-navigation-link border-b-2 border-gray-200 hover:border-highlight text-xl lg:text-base" title="Portfolio" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="text-center lg:text-left block lg:inline lg:mr-8 py-3 lg:py-0">
                            <a class="script-navigation-link border-b-2 border-gray-200 hover:border-highlight text-xl lg:text-base" title="Portfolio" href="#resume">Resume</a>
                        </li>
                        <li class="text-center lg:text-left block lg:inline py-3 lg:py-0">
                            <a class="script-navigation-link border-b-2 border-gray-200 hover:border-highlight text-xl lg:text-base" title="Contact" href="#contact">Contact</a>
                        </li>
                        <li class="text-center lg:text-left block lg:inline py-3 lg:py-0 mb-3">
                            <a class="script-navigation-link text-base sm:ml-6 font-secundary px-5 py-2 rounded text-white hover:text-white bg-highlight hover:shadow-lg" title="Start project" href="#letsdothis">Start project</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <h1 class="p-6 font-extrabold text-3xl sm:text-5xl lg:text-6xl w-full text-center mt-16 pt-16 sm:pt-32">
                <span class="text-highlight">Full-Stack</span> development<br /> meets an <span class="text-highlight">athletes</span> mentality.
            </h1>
        </header>
        <div class="py-16 text-center border-b relative">
            <a id="about" class="absolute top-0"></a>
            <h2 class="text-3xl sm:text-4xl pb-3"><span class="text-highlight">About</span> me</h2>
            <p class="p-6 text-dark pb-12">I'm a full-stack developer with an athletes mentality.</p>
            <div class="p-6 flex flex-wrap lg:flex-no-wrap m-auto w-full">
                <div class="w-full lg:w-1/2 text-left sm:px-8 lg:px-16 lg:pt-8">
                    <p class="pb-6">
                        My name is Rick Voorneveld, age 33, born in Amsterdam, Netherlands.
                        I've been working as a developer in Amsterdam for 13 years now, started as a Junior developer with enthusiasm and the will to become better.
                        Now, 13 years later, I've worked my way up to Senior developer with Team Lead experience.
                    </p>
                    <p class="pb-6">
                        In these 13 years, I've been competing in sports at the highest level. Traveled all over the world for my (other) passion. This thought me a lot about working in a team, perform under pressure and 100% dedication to achieve your goals.
                    </p>
                    <a class="text-base font-secundary px-5 py-2 rounded text-white hover:text-white bg-black hover:bg-highlight" title="Download resume" href="/storage/resume.pdf" target="_blank">Download resume</a>
                </div>
                <div class="highlight w-full mx-auto lg:w-1/2 max-w-sm rounded overflow-hidden shadow-xl hover:shadow-2xl m-6">
                    <img class="highlight--image mt-12 mx-auto w-32 h-32 rounded-full" src="/images/rick.jpg" alt="Rick Voorneveld">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Rick Voorneveld</div>
                        <p class="text-gray-600 font-hairline text-base mb-4">
                            Full-Stack Developer
                        </p>
                    </div>
                    <div class="px-4 py-4">
                        <a href="tel:+32468047774" title="+32 468 047 774" class="highlight--button inline-block bg-support hover:bg-highlight text-white rounded-full my-2 px-2 py-2 text-xs sm:text-sm mr-2">
                            +32 468 047 774
                        </a>
                        <a href="mailto:rick@webathletes.nl" title="rick@webathletes.nl" class="highlight--button inline-block bg-support hover:bg-highlight text-white rounded-full my-2 px-2 py-2 text-xs sm:text-sm mr-2">
                            rick@webathletes.nl
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-16 text-center border-b relative">
            <a id="skills" class="absolute top-0"></a>
            <h2 class="text-3xl sm:text-4xl pb-3"><span class="text-highlight">Skills</span> I'm proud of</h2>
            <p class="p-6 text-dark pb-12">
                Satisfied with my current skills at this moment, but always looking for opportunities to improve myself.<br />My next challenge is becoming a <a class="underline hover:text-highlight" href="https://www.zend.com/en/services/certification/php-certification" target="_blank" title="Zend Certified Engineer">Zend Certified Engineer</a> by the end of 2019.</p>
            <div class="p-6 flex flex-wrap lg:flex-no-wrap mx-auto w-full">
                <div class="w-full text-left mb-6 mx-6">
                    <div class="font-secundary font-hairline text-sm flex">
                        <span class="flex-grow">HTML</span>
                        <span>75%</span>
                    </div>
                    <div class="w-full h-3 rounded-full bg-gray-200">
                        <div class="w-3/4 h-3 rounded-full bg-highlight"></div>
                    </div>
                </div>
                <div class="w-full text-left mb-6 mx-6">
                    <div class="font-secundary font-hairline text-sm flex">
                        <span class="flex-grow">CSS</span>
                        <span>67%</span>
                    </div>
                    <div class="w-full h-3 rounded-full bg-gray-200">
                        <div class="w-4/6 h-3 rounded-full bg-highlight"></div>
                    </div>
                </div>
            </div>
            <div class="p-6 flex flex-wrap lg:flex-no-wrap mx-auto w-full">
                <div class="w-full text-left mb-6 mx-6">
                    <div class="font-secundary font-hairline text-sm flex">
                        <span class="flex-grow">Javascript</span>
                        <span>83%</span>
                    </div>
                    <div class="w-full h-3 rounded-full bg-gray-200">
                        <div class="w-10/12 h-3 rounded-full bg-highlight"></div>
                    </div>
                </div>

                <div class="w-full text-left mb-6 mx-6">
                    <div class="font-secundary font-hairline text-sm flex">
                        <span class="flex-grow">PHP</span>
                        <span>87%</span>
                    </div>
                    <div class="w-full h-3 rounded-full bg-gray-200">
                        <div class="h-3 rounded-full bg-highlight" style="width: 87%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-16 text-center relative">
            <a id="portfolio" class="absolute top-0"></a>
            <h2 class="text-3xl sm:text-4xl pb-3">Practise makes <span class="text-highlight">perfect</span></h2>
            <p class="p-6 text-dark pb-12">Started mid-2019 as a freelancer, this portfolio is quality above quantity!</p>
            <div class="p-6 flex flex-wrap sm:flex-no-wrap mx-auto w-full lg:w-2/3">
                <div class="highlight w-full sm:w-1/2 rounded overflow-hidden shadow-lg hover:shadow-2xl mx-4">
                    <img class="highlight--image w-full" src="/images/nikkischilders.jpg" alt="Nikki Schilders">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">
                            <a href="https://www.nikkischilders.be/" target="_blank">Nikki Schilders</a>
                        </div>
                        <p class="text-dark text-base">
                            As a freelance physiotherapist, Nikki wanted to attract more clients via the website. We've put together a personal website where clients can book a session at designated times.
                        </p>
                        <p class="text-dark text-base pt-6">
                            Under the hood, there's a CRM system to manage clients and appointments.
                        </p>
                    </div>
                    <a href="https://github.com/rvoorneveld/nikkischilders.be" target="_blank" title="Go to source">
                        <svg class="svg svg-portfolio inline-block mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="https://www.nikkischilders.be" target="_blank" title="Go to website">
                        <svg class="svg svg-portfolio inline-block" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M13.144 8.171c-.035-.066.342-.102.409-.102.074.009-.196.452-.409.102zm-2.152-3.072l.108-.031c.064.055-.072.095-.051.136.086.155.021.248.008.332-.014.085-.104.048-.149.093-.053.066.258.075.262.085.011.033-.375.089-.304.171.096.136.824-.195.708-.176.225-.113.029-.125-.097-.19-.043-.215-.079-.547-.213-.68l.088-.102c-.206-.299-.36.362-.36.362zm13.008 6.901c0 6.627-5.373 12-12 12-6.628 0-12-5.373-12-12s5.372-12 12-12c6.627 0 12 5.373 12 12zm-8.31-5.371c-.006-.146-.19-.284-.382-.031-.135.174-.111.439-.184.557-.104.175.567.339.567.174.025-.277.732-.063.87-.025.248.069.643-.226.211-.381-.355-.13-.542-.269-.574-.523 0 0 .188-.176.106-.166-.218.027-.614.786-.614.395zm6.296 5.371c0-1.035-.177-2.08-.357-2.632-.058-.174-.189-.312-.359-.378-.256-.1-1.337.597-1.5.254-.107-.229-.324.146-.572.008-.12-.066-.454-.515-.605-.46-.309.111.474.964.688 1.076.201-.152.852-.465.992-.038.268.804-.737 1.685-1.251 2.149-.768.694-.624-.449-1.147-.852-.275-.211-.272-.66-.55-.815-.124-.07-.693-.725-.688-.813l-.017.166c-.094.071-.294-.268-.315-.321 0 .295.48.765.639 1.001.271.405.416.995.748 1.326.178.178.858.914 1.035.898.193-.017.803-.458.911-.433.644.152-1.516 3.205-1.721 3.583-.169.317.138 1.101.113 1.476-.029.433-.37.573-.693.809-.346.253-.265.745-.556.925-.517.318-.889 1.353-1.623 1.348-.216-.001-1.14.36-1.261.007-.094-.256-.22-.45-.353-.703-.13-.248-.015-.505-.173-.724-.109-.152-.475-.497-.508-.677-.002-.155.117-.626.28-.708.229-.117.044-.458.016-.656-.048-.354-.267-.646-.53-.851-.389-.299-.188-.537-.097-.964 0-.204-.124-.472-.398-.392-.564.164-.393-.44-.804-.413-.296.021-.538.209-.813.292-.346.104-.7-.082-1.042-.125-1.407-.178-1.866-1.786-1.499-2.946.037-.19-.114-.542-.048-.689.158-.352.48-.747.762-1.014.158-.15.361-.112.547-.229.287-.181.291-.553.572-.781.4-.325.946-.318 1.468-.388.278-.037 1.336-.266 1.503-.06 0 .038.191.604-.019.572.433.023 1.05.749 1.461.579.211-.088.134-.736.567-.423.262.188 1.436.272 1.68.069.15-.124.234-.93.052-1.021.116.115-.611.124-.679.098-.12-.044-.232.114-.425.025.116.055-.646-.354-.218-.667-.179.131-.346-.037-.539.107-.133.108.062.18-.128.274-.302.153-.53-.525-.644-.602-.116-.076-1.014-.706-.77-.295l.789.785c-.039.025-.207-.286-.207-.059.053-.135.02.579-.104.347-.055-.089.09-.139.006-.268 0-.085-.228-.168-.272-.226-.125-.155-.457-.497-.637-.579-.05-.023-.764.087-.824.11-.07.098-.13.201-.179.311-.148.055-.287.126-.419.214l-.157.353c-.068.061-.765.291-.769.3.029-.075-.487-.171-.453-.321.038-.165.213-.68.168-.868-.048-.197 1.074.284 1.146-.235.029-.225.046-.487-.313-.525.068.008.695-.246.799-.36.146-.168.481-.442.724-.442.284 0 .223-.413.354-.615.131.053-.07.376.087.507-.01-.103.445.057.489.033.104-.054.684-.022.594-.294-.1-.277.051-.195.181-.253-.022.009.34-.619.402-.413-.043-.212-.421.074-.553.063-.305-.024-.176-.52-.061-.665.089-.115-.243-.256-.247-.036-.006.329-.312.627-.241 1.064.108.659-.735-.159-.809-.114-.28.17-.509-.214-.364-.444.148-.235.505-.224.652-.476.104-.178.225-.385.385-.52.535-.449.683-.09 1.216-.041.521.048.176.124.104.324-.069.19.286.258.409.099.07-.092.229-.323.298-.494.089-.222.901-.197.334-.536-.374-.223-2.004-.672-3.096-.672-.236 0-.401.263-.581.412-.356.295-1.268.874-1.775.698-.519-.179-1.63.66-1.808.666-.065.004.004-.634.358-.681-.153.023 1.247-.707 1.209-.859-.046-.18-2.799.822-2.676 1.023.059.092.299.092-.016.294-.18.109-.372.801-.541.801-.505.221-.537-.435-1.099.409l-.894.36c-1.328 1.411-2.247 3.198-2.58 5.183-.013.079.334.226.379.28.112.134.112.712.167.901.138.478.479.744.74 1.179.154.259.41.914.329 1.186.108-.178 1.07.815 1.246 1.022.414.487.733 1.077.061 1.559-.217.156.33 1.129.048 1.368l-.361.093c-.356.219-.195.756.021.982 1.818 1.901 4.38 3.087 7.22 3.087 5.517 0 9.989-4.472 9.989-9.989zm-11.507-6.357c.125-.055.293-.053.311-.22.015-.148.044-.046.08-.1.035-.053-.067-.138-.11-.146-.064-.014-.108.069-.149.104l-.072.019-.068.087.008.048-.087.106c-.085.084.002.139.087.102z"/></svg>
                    </a>
                    <div class="px-4 py-4">
                        <span class="highlight--button inline-block bg-support hover:bg-highlight text-white rounded-full my-2 px-2 py-2 text-xs sm:text-sm mr-2">#PHP73</span>
                        <span class="highlight--button inline-block bg-support hover:bg-highlight text-white rounded-full my-2 px-2 py-2 text-xs sm:text-sm mr-2">#LARAVEL</span>
                        <span class="highlight--button inline-block bg-support hover:bg-highlight text-white rounded-full my-2 px-2 py-2 text-xs sm:text-sm">#MYSQL</span>
                        <span class="highlight--button inline-block bg-support hover:bg-highlight text-white rounded-full my-2 px-2 py-2 text-xs sm:text-sm">#TAILWINDCSS</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-16 text-center relative">
            <a id="resume" class="absolute top-0"></a>
            <h2 class="text-3xl sm:text-4xl pb-3">My <span class="text-highlight">resume</span></h2>
            <div class="p-6 pb-12">
                <a class="text-base font-secundary mt-12 my-6 px-5 py-2 rounded text-white hover:text-white bg-black hover:bg-highlight" title="Download resume" href="/storage/resume.pdf" target="_blank">Download resume</a>
            </div>
            <div class="lg:mb-16 flex flex-wrap sm:flex-no-wrap w-full m-auto w-full lg:w-3/4">
                <div class="mb-6 lg:mb-0 w-full sm:w-1/2 py-4 mx-4 border-t-8 border-highlight">
                    <h3 class="text-1xl">Web developer <span class="text-highlight">@ Media Concepts</span></h3>
                    <span class="font-mono text-highlight text-sm">2006 - 2015 (9 years)</span>
                    <p class="text-base text-left pt-8">
                        Web developer @ Media Concepts in Amsterdam. Together with my colleagues, I'm responsible for the realization, maintenance and further development of web-based applications for small, medium and large-sized companies.
                    </p>
                    <ul class="text-left mt-8 text-highlight font-mono text-base list-disc list-inside">
                        <li>Zend Framework</li>
                        <li>Subversion</li>
                        <li>PHP 5.6</li>
                        <li>MySQL</li>
                    </ul>
                </div>
                <div class="mb-6 lg:mb-0 w-full sm:w-1/2 py-4 mx-4 border-t-8 border-highlight">
                    <h3 class="text-1xl">Athlete <span class="text-highlight">@ Dutch korfball team</span></h3>
                    <span class="font-mono text-highlight text-sm">2007 - 2013 (6 years)</span>
                    <p class="text-base text-left pt-8">
                        Athlete @ Dutch national korfball team with the corresponding A-status of the NOC-NSF. With the national korfball team, we made various trips around the world to promote korfball around the globe. I've played several big tournaments such as the European Championships, World Cup and World Games.
                    </p>
                    <ul class="text-left mt-8 text-highlight font-mono text-base list-disc list-inside">
                        <li>Focus</li>
                        <li>Working together</li>
                        <li>Perform under pressure</li>
                    </ul>
                </div>
            </div>
            <div class="lg:mb-16 flex flex-wrap sm:flex-no-wrap w-3/4 m-auto w-full lg:w-3/4">
                <div class="mb-6 lg:mb-0 w-full sm:w-1/2 py-4 mx-4 border-t-8 border-highlight">
                    <h3 class="text-1xl">Web developer <span class="text-highlight">@ Hoteliers.com</span></h3>
                    <span class="font-mono text-highlight text-sm">2015 - 2016 (2 years)</span>
                    <p class="text-base text-left pt-8">
                        Web developer @ Hoteliers.com in Amsterdam. In my role as a PHP programmer, I am responsible, along with my colleagues, for the product portfolio of Hoteliers.com. Dutch market leader in hotel booking software. The focus on own portfolio made it possible to zoom in on the quality of the product keeping maintainability at full focus.
                    </p>
                    <ul class="text-left mt-8 text-highlight font-mono text-base list-disc list-inside">
                        <li>GIT</li>
                        <li>PHP 7+</li>
                        <li>Agile scrum</li>
                    </ul>
                </div>
                <div class="mb-6 lg:mb-0 w-full sm:w-1/2 py-4 mx-4 border-t-8 border-highlight">
                    <h3 class="text-1xl">Team Lead <span class="text-highlight">@ Hoteliers.com</span></h3>
                    <span class="font-mono text-highlight text-sm">2016 - present day</span>
                    <p class="text-base text-left pt-8">
                        In addition to my work as Web developer @ Hoteliers.com, I'm the Team Lead of the Design and Development team. Responsible for safety, performance and user experience for all products in the Hoteliers.com portfolio.
                    </p>
                    <ul class="text-left mt-8 text-highlight font-mono text-base list-disc list-inside">
                        <li>Continuous Integration</li>
                        <li>Test Driven Development</li>
                        <li>Laravel</li>
                        <li>Vue.js</li>
                    </ul>
                </div>
            </div>
            <div class="lg:mb-16 flex flex-wrap sm:flex-no-wrap w-3/4 m-auto w-full lg:w-3/4">
                <div class="mb-6 lg:mb-0 w-full sm:w-1/2 py-4 mx-4 border-t-8 border-highlight">
                    <h3 class="text-1xl">Owner <span class="text-highlight">@ Webathletes</span></h3>
                    <span class="font-mono text-highlight text-sm">2019 - present day</span>
                    <p class="text-base text-left pt-8">
                        I started my own company to gain more experience as a freelancer. Focus on supplementing my skills and learning new techniques.
                    </p>
                </div>
                <div class="w-full sm:w-1/2 py-4 mx-4">

                </div>
            </div>
        </div>
        <div class="p-6 py-16 bg-extradark text-gray-100 text-center sm:p-24 relative">
            <a id="contact" class="absolute top-0"></a>
            <h2 class="text-3xl">
                I would <span class="text-white hover:text-highlight">&hearts;</span> To Hear About Your Project
                <a href="#letsdothis" class="mt-6 text-xl sm:ml-6 font-secundary px-5 py-2 border rounded text-white border-white hover:text-black hover:bg-white">Start&nbsp;Project</a>
            </h2>
        </div>
        <footer class="footer bg-dark text-gray-100">
            <div class="flex flex-wrap lg:flex-no-wrap w-full xl:w-5/6 p-6 lg:p-12 mx-auto">
                <div class="w-full lg:w-1/3 mb-12 lg:mb-0 lg:mr-12">
                </div>
                <div class="text-sm sm:text-base w-full lg:w-1/3 mb-12 lg:mb-0 lg:mr-12">
                    <h2 class="text-3xl pb-6 text-center lg:text-left">Contact</h2>
                    <div class="flex mb-2">
                        <label class="flex-none w-1/3 sm:flex-grow text-right sm:text-left text-gray-400">Telephone:</label>
                        <a class="pl-3 sm:pl-0 text-left sm:text-right hover:text-highlight" href="tel:+32 468 047 774">
                            +32 468 047 774
                        </a>
                    </div>
                    <div class="flex">
                        <label class="sm:pr-0 flex-none w-1/3 sm:flex-grow text-right sm:text-left text-gray-400">Email:</label>
                        <a class="pl-3 sm:pl-0 text-left sm:text-right hover:text-highlight" href="mailto:rick@webathletes.nl">
                            rick@webathletes.nl
                        </a>
                    </div>
                </div>
                <div class="w-full lg:w-1/3">
{{--                    <h2 class="text-left text-3xl pb-6 text-center lg:text-left">Social</h2>--}}
{{--                    <div class="w-full text-center lg:text-left">--}}
{{--                        <svg class="inline-block svg svg-social mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>--}}
{{--                        <svg class="inline-block svg svg-social mr-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>--}}
{{--                        <svg class="inline-block svg svg-social" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"/></svg>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="font-hairline text-sm bg-extradark text-gray-600 text-center py-8">
                Handcrafted by <span class="hover:text-gray-300">Webathletes</span> &copy; {{ date('Y') }}
            </div>
        </footer>
        @component('modal', ['name' => 'letsdothis',])
            <h1 class="heading text-2xl sm:text-3xl mb-6 lg:mb-6 text-white text-center">I would <span class="hover:text-support">&hearts;</span> To Hear About Your Project</h1>
            @if(false === empty($errors->all()))
                <div class="bg-red-100 border-t-4 border-support rounded-b text-red-700 px-4 py-3 shadow-md mt-2 mb-4" role="alert">
                    <div class="flex">
                        <div class="py-1">
                            <svg class="rounded-full border-2 border-red-500 fill-current h-6 w-6 text-red-500 mr-4 mt-2" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                        </div>
                        <div>
                            <p class="font-bold">Something went wrong</p>
                            <p class="text-sm">Please fill in all the required fields.</p>
                        </div>
                    </div>
                </div>
            @endif
            <form class="w-full" method="post" action="{{ route('project') }}#letsdothis">
                {{ csrf_field() }}
                <div class="flex flex-wrap -mx-3 mb-0 lg:mb-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block tracking-wide text-white text-base mb-1" for="name">
                            Name
                        </label>
                        <input name="name" class="appearance-none block w-full bg-red-100 text-gray-800 border border-support rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="name" type="text" value="{{ old('name') }}">
                        @if($errors->first($key ='name'))
                            <p class="text-red-100 text-sm italic -mt-2 mb-2">{{ $errors->first($key) }}</p>
                        @endif
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block tracking-wide text-white text-base mb-1" for="surname">
                            Surname
                        </label>
                        <input name="surname" class="appearance-none block w-full bg-red-100 text-gray-800 border border-support rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="surname" type="text" value="{{ old('surname') }}" required>
                        @if($errors->first($key = 'surname'))
                            <p class="text-red-100 text-sm italic -mt-2 mb-2">{{ $errors->first($key) }}</p>
                        @endif
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-0 lg:mb-6">
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block tracking-wide text-white text-base mb-1" for="email">
                            Email
                        </label>
                        <input name="email" class="appearance-none block w-full bg-red-100 text-gray-800 border border-support rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" value="{{ old('email') }}">
                        @if($errors->first($key = 'email'))
                            <p class="text-red-100 text-sm italic -mt-2 mb-2">{{ $errors->first($key) }}</p>
                        @endif
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block tracking-wide text-white text-base mb-1" for="phone">
                            Phone
                        </label>
                        <input name="phone" class="appearance-none block w-full bg-red-100 text-gray-800 border border-support rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone" type="tel" value="{{ old('phone') }}">
                        @if($errors->first($key = 'phone'))
                            <p class="text-red-100 text-sm italic -mt-2 mb-2">{{ $errors->first($key) }}</p>
                        @endif
                    </div>
                    <div class="w-full px-3">
                        <label class="block tracking-wide text-white text-base mb-1" for="details">
                            Details
                        </label>
                        <textarea name="details" class="appearance-none block w-full bg-red-100 text-gray-800 border border-support rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="details" required>{{ old('details') }}</textarea>
                        @if($errors->first($key = 'details'))
                            <p class="text-red-100 text-sm italic -mt-2 mb-2">{{ $errors->first($key) }}</p>
                        @endif
                    </div>
                </div>
                <div class="w-full text-center mt-3 lg:mb-6">
                    <input class="cursor-pointer rounded mx-auto px-12 py-4 bg-white text-highlight hover:bg-support hover:text-white" type="submit" value="Start project">
                </div>
            </form>
        @endcomponent
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
