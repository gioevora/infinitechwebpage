@extends('Layout.Layouts')

@section('title', 'Infinitech Advertising Corporation')@show

@section('content')
    <main>
        <section>
            <div class="container d-flex">
                <div class="left-content">
                    <div class="employee-img">
                        <img src="/assets/img/infinitech-gio.jpg" alt="">
                    </div>
                </div>
                <div class="right-content ">
                    <div class="employee-details mb-4">
                        <h1 class="employee-name">giolo evora</h1>
                        <h2 class="employee-position mb-4">senior web developer</h2>
                        <p class="employee-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus error eius omnis facilis officia modi dolor atque quo eligendi accusamus blanditiis fugiat sapiente aspernatur est nisi, quasi voluptates veritatis pariatur?</p>
                    </div>

                    <div class="employee-contact mb-xl-5">
                        <div class="location"><b>Office Address:</b> Unit 311, Campos Rueda Bldg., Urban Avenue, Makati City</div>
                        <div class="mobile-number"><b>Mobile No.:</b> +63992 440 1097</div>
                        <div class="tel"><b>Telephone No.:</b> (02) 7001-6157</div>
                        <div class="website"><b>Website:</b> www.infinitech.com</div>
                    </div>

                    <div class="employee-social mb-xl-5 d-flex">
                        <div class="social facebook"><i class="fa-brands fa-facebook"></i></div>
                        <div class="social twittter"><i class="fa-brands fa-twitter"></i></div>
                        <div class="social instagram"><i class="fa-brands fa-instagram"></i></div>
                        <div class="social telegram"><i class="fa-brands fa-telegram"></i></div>
                        <div class="social viber"><i class="fa-brands fa-viber"></i></div>
                    </div>
                 
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    @parent
@show
