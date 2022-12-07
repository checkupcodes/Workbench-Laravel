@php
    $footer = App\Models\Footer::find(1);
@endphp

<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Contact us</h5>
                        <h4 class="title">{{$footer->number}}</h4>
                    </div>
                    <div class="footer__widget__text">
                        <p>{{$footer->short_description}}</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">my address</h5>
                        <h4 class="title">Turkey</h4>
                    </div>
                    <div class="footer__widget__address">
                        <p>{{$footer->address}}</p>
                        <a href="mailto:noreply@envato.com" class="mail">{{$footer->email}}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">Follow me</h5>
                        <h4 class="title">socially connect</h4>
                    </div>
                    <div class="footer__widget__social">
                        <p>Lorem ipsum dolor sit amet enim. <br> Etiam ullamcorper.</p>
                        <ul class="footer__social__list">
                            <li><a href="{{$footer->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{$footer->twitter}}"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="{{$footer->github}}"><i class="fab fa-behance"></i></a></li>
                            <li><a href="{{$footer->linkedin}}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{$footer->instagram}}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>{{$footer->copyright}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>