@extends('layouts.front-end')
@section('content')





    <div class="container">
        <h2>Carousel Example</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="OIP.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Los Angeles</h3>
                        <p>LA is always so much fun!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="OIP.jpg" alt="Chicago" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>Chicago</h3>
                        <p>Thank you, Chicago!</p>
                    </div>
                </div>

                <div class="item">
                    <img src="OIP.jpg" alt="New York" style="width:100%;">
                    <div class="carousel-caption">
                        <h3>New York</h3>
                        <p>We love the Big Apple!</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <section class="u-clearfix u-section-1" id="sec-9cee">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-gutter-0 u-layout-spacing-top u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-palette-2-base u-size-40 u-layout-cell-1" src="">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-text u-text-body-alt-color u-text-1">Patient 1</h1>
                                <p class="u-text u-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>
                                <a href="#" class="u-border-2 u-border-white u-btn u-button-style u-custom-color-1 u-btn-1">Donate now</a>
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-1" src="OIP.jpg" data-image-width="1080" data-image-height="1080">
                            <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-9cee">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-gutter-0 u-layout-spacing-top u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-palette-2-base u-size-40 u-layout-cell-1" src="">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-text u-text-body-alt-color u-text-1">Patient 2</h1>
                                <p class="u-text u-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>
                                <a href="#" class="u-border-2 u-border-white u-btn u-button-style u-custom-color-1 u-btn-1">Donate now</a>
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-1" src="OIP.jpg" data-image-width="1080" data-image-height="1080">
                            <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-3" id="sec-0b43">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-gutter-0 u-layout-spacing-top u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-palette-2-base u-size-40 u-layout-cell-1" src="">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-text u-text-body-alt-color u-text-1">Patient 3</h1>
                                <p class="u-text u-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>
                                <a href="#" class="u-border-2 u-border-white u-btn u-button-style u-custom-color-1 u-btn-1">Donate now</a>
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-1" src="OIP.jpg" data-image-width="1080" data-image-height="1080">
                            <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-1f13">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-gutter-0 u-layout-spacing-top u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-palette-2-base u-size-40 u-layout-cell-1" src="">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-text u-text-body-alt-color u-text-1">Patient 4</h1>
                                <p class="u-text u-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>
                                <a href="#" class="u-border-2 u-border-white u-btn u-button-style u-custom-color-1 u-btn-1">Donate now</a>
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-1" src="OIP.jpg" data-image-width="1080" data-image-height="1080">
                            <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="u-clearfix u-section-5" id="sec-8304">
        <div class="u-clearfix u-sheet u-sheet-1">
            <div class="u-clearfix u-gutter-0 u-layout-spacing-top u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-align-left u-container-style u-layout-cell u-left-cell u-palette-2-base u-size-40 u-layout-cell-1" src="">
                            <div class="u-container-layout u-valign-middle u-container-layout-1">
                                <h1 class="u-text u-text-body-alt-color u-text-1">Patient 5</h1>
                                <p class="u-text u-text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>
                                <a href="#" class="u-border-2 u-border-white u-btn u-button-style u-custom-color-1 u-btn-1">Donate now</a>
                            </div>
                        </div>
                        <div class="u-align-left u-container-style u-image u-layout-cell u-right-cell u-size-20 u-image-1" src="OIP.jpg" data-image-width="1080" data-image-height="1080">
                            <div class="u-container-layout u-valign-middle u-container-layout-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
