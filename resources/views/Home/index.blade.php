@extends('Layout.Layouts')

@section('title', 'Infinitech Advertising Corporation')@show

@section('content')
    <main>
        <section>
            <div class="container d-flex">
                <div class="left-content">
                    <div class="employee-img">
                        <img src="/assets/img/infinitech-Sirgio.png" alt="">
                    </div>
                </div>
                <div class="right-content ">
                    <div class="employee-details mb-4">
                        <h1 class="employee-name">giolo Evora</h1>
                        <h2 class="employee-position mb-4">Senior Web Developer</h2>
                        <p class="employee-desc">
                            A Senior Web Developer is responsible for designing, developing, and maintaining complex websites and web applications.</p>
                    </div>

                    <div class="employee-contact mb-xl-5">
                        <div class="location"><b>Office Address:</b> Unit 311, Campos Rueda Bldg., Urban Avenue, Makati City</div>
                        <div class="mobile-number"><b>Mobile No.:</b> +63992 440 1097</div>
                        <div class="tel"><b>Telephone No.:</b> (02) 7001-6157</div>
                        <div class="website"><b>Website:</b> www.infinitech.com</div>
                    </div>

                    <div class="employee-social mb-xl-5 d-flex">
                        <div class="social facebook"  data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-custom-class="custom-tooltip" data-bs-title="Facebook" ><i class="fa-brands fa-facebook"></i></div>
                        <div class="social twittter" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-custom-class="custom-tooltip" data-bs-title="Twitter" ><i class="fa-brands fa-twitter"></i></div>
                        <div class="social instagram" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-custom-class="custom-tooltip" data-bs-title="Instagram" ><i class="fa-brands fa-instagram"></i></div>
                        <div class="social telegram" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-custom-class="custom-tooltip" data-bs-title="Telegram" ><i class="fa-brands fa-telegram"></i></div>
                        <div class="social viber" data-bs-toggle="tooltip" data-bs-placement="top"  data-bs-custom-class="custom-tooltip" data-bs-title="Viber" ><i class="fa-brands fa-viber"></i></div>
                    </div>
                 
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    @parent
@show
