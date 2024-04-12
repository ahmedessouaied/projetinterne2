<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Article </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federo&family=Gloock&family=Manuale:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/singlearticle.css') }}">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">

</head>

<body>
    @include('navbar')
    <div class=" container">
        <article class="t-content__article-wrapper" data-article-content="">
            <div class="t-content__section a-tag">
                <a href="#" class="a-tag__wrapper">Catégorie</a>
            </div>
            <h1 class="t-content__title a-page-title">How artificial intelligence is transforming the world</h1>
            <p class="t-content__chapo">Resumé de l'article
                Artificial intelligence (AI) is a wide-ranging tool that enables people to rethink how we integrate information, analyze data, and use the resulting insights to improve decision making—and already it is transforming every walk of life. In this report, Darrell West and John Allen discuss AI’s application across a variety of sectors, address issues in its development, and offer recommendations for getting the most out of AI while still protecting important human values.
            </p>
            <div class="t-content__dates t-content__dates--reading-time ">
                <p class="m-pub-dates">
                    <span class="m-pub-dates__date">
                        Published: 
                        <time datetime="2024-03-24T08:00:14+00:00">
                        {{ $article->created_at }}
                        </time>
                    </span>
                </p>
                <div class="m-from-author">
                    <span class="m-from-author__by-label">Author: </span>
                    <a href="user.blade.php" class="m-from-author__name">Ghassen Fatnassi</a>
                </div>
                <div class="a-reading-time">
                    <span class="a-svg a-svg--picto-clock" title="Temps de lecture"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                            <path fill="currentColor" d="M12 2c-5.522 0-10 4.478-10 10s4.478 10 10 10 10-4.478 10-10-4.478-10-10-10zm0 18c-4.418 0-8-3.582-8-8s3.582-8 8-8 8 3.582 8 8-3.582 8-8 8zm1-11h-1v5l4.25 2.548.75-1.232-3.75-2.268z" />
                        </svg>
                    </span> 2 mn
                </div>
                <div class="anchors-container">
                    <div class="save-article-wrapper">
                        <button type="button" class="cvMh7UGw" data-article-id="{{ $article->id }}">
                            <svg class="saved-article_svg__fs-icon saved-article_svg__fs-icon--saved-article" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="25" height="25">
                                <path d="M13.9 3c.7 0 1.3.6 1.3 1.3V17L10 13.9 4.8 17V4.3c0-.7.5-1.3 1.3-1.3h7.8z"></path>
                            </svg>
                        </button>

                    </div>
                </div>
            </div>
            <div class="t-content__main-media">
                <figure class="m-figure m-figure--16x9">
                    <img fetchpriority="high" src="{{ asset('assets/AI.jpg') }}" alt="" class="m-figure__img lazy">
                    <figcaption class="m-figure__caption">
                        <span class="a-media-legend">A robot thinking</span><span class="a-media-legend">© Getty Images</span>
                    </figcaption>
                </figure>
            </div>
            <div class="t-content">
                <p>
                    There’s been a lot of scary talk going around lately. Artificial intelligence is getting more powerful — especially the new generative AI that can write code, write stories, and generate outputs ranging from pretty pictures to product designs. The greatest concern is not so much that computers will become smarter than humans, it’s that they will be unpredictably smart, or unpredictably foolish, due to quirks in the AI's code. Experts worry that if we keep entrusting key tasks to them, they could trigger what Elon Musk has called “civilization destruction.”

                    This worst-case scenario needs to be addressed but will not happen soon. If you own or manage a midsize company, the pressing issue is how new developments in AI will affect your business. Our view, which reflects a consensus view, says to handle this change in the environment the way any big change should be handled. Don’t ignore it, or try to resist it, or get stuck on what it might do to you. Instead, look at what you can do with the change. Embrace it. Leverage it to your advantage.

                    Here’s a brief overview that should make clear a couple of key points. Although the recent surge in AI may seem like it came out of the blue, it’s really just the next step in a long process of evolutionary change. Not only can midsize companies participate in the evolution, they will have to in order to stay fit to survive.

                    How we got here … and where we can go next

                    Artificial intelligence—the creation of software and hardware able to simulate human smarts—isn’t new. Crucial core technologies for today’s AI were first conceived in the 1970s and ‘80s. In the 1990s, IBM’s Deep Blue chess machine played and beat the reigning world champion, setting a milestone for AI researchers. Since then, AI has continued to improve while moving into new realms, some of which we now take for granted. By the 2010s, natural language processing was refined to the point where Siri and Alexa could be your virtual assistants.

                    What’s new lately is that major tech-industry players have been ramping up investment at the frontiers of AI. Elon Musk is a leader in the field despite his reservations. He has launched a deep-pocketed startup, X.ai, to focus solely on cutting-edge AI. Microsoft is the lead investor in OpenAI. Amazon, Google/Alphabet, and others are placing big bets in the race as well.
                </p>
            </div>




        </article>

    </div>
    <livewire:comments :model="$article"/>
    <!--More acrticles-->

    <div class="container">
        <h1 class="my-4">Read More</h1>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="text-center categorie ">
                    <a href="#">Catégorie 1</a>
                </div>
                <a href="">
                    <div class="card">

                        <img class="card-img-top img-responsive mx-auto d-block" src="{{ asset('assets/1.jpg') }}" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">Title 1</h4>
                            <p class="m-pub-dates"><span class="m-pub-dates__date">Published: <time datetime="2024-03-24T08:00:14+00:00">23/03/2024 - 09:00</time></span></p>
                            <p class="card-text">Resumé de l'article Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error
                                quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure
                                perspiciatis mollitia recusandae vero vel quam!</p>
                        </div>
                    </div>
            </div></a>
            <div class="col-md-4">
                <div class="text-center categorie">
                    <a href="#">Catégorie 2</a>
                </div>
                <a href="">
                    <div class="card">

                        <img class="card-img-top img-responsive mx-auto d-block" src="{{ asset('assets/2.png') }}" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">Title 2</h4>
                            <p class="m-pub-dates"><span class="m-pub-dates__date">Published: <time datetime="2024-03-24T08:00:14+00:00">23/03/2024 - 09:00</time></span></p>
                            <p class="card-text"> resumé de l'article Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error
                                quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure
                                perspiciatis mollitia recusandae vero vel quam!</p>
                        </div>
                    </div>
            </div></a>
            <div class="col-md-4">
                <div class="text-center categorie">
                    <a href="#">Catégorie 3</a>
                </div>
                <a href="">
                    <div class="card">

                        <img class="card-img-top img-responsive mx-auto d-block" src="{{ asset('assets/3.jpg') }}" alt="Card image cap">

                        <div class="card-body">
                            <h4 class="card-title">Title 3</h4>
                            <p class="m-pub-dates"><span class="m-pub-dates__date">Published: <time datetime="2024-03-24T08:00:14+00:00">23/03/2024 - 09:00</time></span></p>
                            <p class="card-text card__snippet">Resumé de l'article Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error
                                quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure
                                perspiciatis mollitia recusandae vero vel quam!</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <script src="{{asset('js/dark-mode.js')}}"></script>
        <script src="{{ asset('js/reading.time.js') }}"></script>
        <script src="{{ asset('js/tts.js') }}"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.8/dist/cdn.min.js"></script>
        <script src="{{ asset('js/singlearticle.js') }}"></script>
    </body>

</html>