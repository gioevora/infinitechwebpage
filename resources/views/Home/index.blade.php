@extends('Layout.Layouts')

@section('title', 'Infinitech Advertising Corporation')@show

@section('content')
    <main>
        <section class="main-section">
            <div class="container cotent">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="left-content text-center">
                            <div class="employee-img">
                                <img src="/profiles/{{ $record->profile }}" alt="{{ $record->profile }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="right-content ">
                            <div class="employee-details mb-4">
                                <h1 class="employee-name">{{ $record->firstname }} {{ $record->lastname }}</h1>
                                <h2 class="employee-position mb-4">{{ $record->position }}</h2>
                                <p class="employee-desc">
                                    A Senior Web Developer is responsible for designing, developing, and maintaining complex
                                    websites and web applications.</p>
                            </div>

                            <div class="employee-contact mb-xl-5">
                                <div class="location"><b>Office Address:</b> Unit 311, Campos Rueda Bldg., Urban Avenue,
                                    Makati City
                                </div>
                                <div class="mobile-number"><b>Mobile No.:</b> +63992 440 1097</div>
                                <div class="tel"><b>Telephone No.:</b> (02) 7001-6157</div>
                                <div class="website"><b>Website:</b> www.infinitech.com</div>
                            </div>

                            <div class="employee-social mb-xl-5 d-flex">
                                <div class="social facebook" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-title="Facebook">
                                    <a href="{{ $record->facebook }}">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                </div>

                                <div class="social telegram" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
                                    <a href="https://t.me/+63{{ $record->telegram }}">
                                        <i class="fa-brands fa-telegram"></i>
                                    </a>
                                </div>

                                <div class="social viber" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-title="Wechat">
                                    <a href=""><i class="fa-brands fa-weixin"></i></a>
                                </div>

                                <div class="social viber" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-title="Viber">
                                    <a href="viber://chat?number=9171176331"><i class="fa-brands fa-viber"></i></a>
                                </div>

                                <div class="social viber" data-bs-toggle="tooltip" data-bs-placement="top"
                                    data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
                                    <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                                </div>


                                <form method="get" action="/download-vcard">
                                    <div class="social viber" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-custom-class="custom-tooltip" data-bs-title="Add to contacts">
                                        <button type="submit" class="border-0"><i
                                                class="fa-solid fa-address-card"></i></button>
                                        <input type="hidden" name="id" value="{{ $record->employee_id }}">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </section>
    </main>


@endsection


@include('cookie-consent::index')

@section('scripts')
    @parent
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script src="/JS/Admin/Schedules.js"></script>



@show
