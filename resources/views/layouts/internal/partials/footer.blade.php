@inject('recents', 'App\Models\Blog\Post')
<footer class="page-footer" style="margin-top: 37px;">
    <div class="container">
        <div class="row">
            <!--           ¬ page-footer__contacts           /-->
            <div class="col-sm-6 col-md-4 col-lg-3">
                <h4 class="page-footer__title">Contato</h4>
                <ul class="page-footer__list">
                    <li><a class="rs-number" href="tel:#">+55 61 99800-7328</a></li>
                    <li><a class="rs-number" href="tel:#">+55 61 3970-3883</a></li>
                    <li><a class="rs-mail" href="#"><span class="__cf_email__" data-cfemail="fd8f92849c91d08e8d9cbd9398899a9293d39e9290908893948984d39e9290">royallaseroficial@gmail.com]</span></a></li>

                </ul>
            </div>
            <!--           end page-footer__contacts           /-->
            <!--           ¬ page-footer__instagram           /-->
            <div class="col-sm-12 col-md-4 col-lg-3 page-footer__intstagram">
                <h4 class="page-footer__title">Últimas notícias</h4>
                <div class="instagram-top-list cf">
                    <ul class="page-footer__list">
                        @foreach($recents->limit(3)->blog()->get() as $recent)
                        <li>
                            <div class="col-sm-6">
                                <a href="{{ route('blog.show', $recent->slug) }}"><img src="{{ $recent->thumb_path == '' ? 'https://placehold.it/75x75' : asset($recent->thumb_path) }}" alt="post-img"></a>
                            </div>
                            <div class="col-sm-6">
                                <h5 style="color: white">{{ $recent->title }}</h5>
                                <p>{!! \Illuminate\Support\Str::limit(strip_tags($recent->content), 30) !!}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!--           end page-footer__instagram           /-->
            <!--           ¬ page-footer__twitter           /-->

            <!--           end page-footer__twitter           /-->
            <!--           ¬ page-footer__tags           /-->
            <div class="col-sm-6 col-md-12 col-lg-3 page-footer__tags">
                <h4 class="page-footer__title">Tags</h4>
                <ul class="blog-tags cf blog-tags--footer">
                    <li><a href="#">beleza</a></li>
                    <li><a href="#">tratamento</a></li>
                    <li><a href="#">-dor</a></li>
                    <li><a href="#">+conforto</a></li>
                    <li><a href="#">estética</a></li>
                    <li><a href="#">perfeição</a></li>
                    <li><a href="#">essência</a></li>
                </ul>
            </div>
            <!--           end page-footer__tags           /-->
        </div>
    </div>
    <div class="page-footer__copyright">
        <div class="container"><p class="text-white font-11 m-0" style="margin-bottom: 0; padding-bottom: 5px; padding-top: 5px; font-size: 14px !important; color: white!important; text-align: center;">Feito com <i class="fa fa-heart animated infinite fast heartBeat" style="color:red;"></i> por <a title="Agência Hoogli" href="http://hoogli.com.br/" target="_blank" rel="noopener"><img style="vertical-align: middle; margin-top: 3px" src="https://renovareurologia.com.br/principal/images/hoogli.png" alt="hoogli logo" width="60"></a><br></p>  </div>
    </div>
</footer>
<!--           = lightbox gallery           /-->
<div class="blueimp-gallery blueimp-gallery-controls" id="blueimp-gallery">
    <div class="slides"></div><a class="prev" href="#"></a><a class="next" href="#"></a><a class="close" href="#"></a>
</div>
<!--           end lightbox gallery           /-->
<!--         = popup reservation form         *-->
<div class="modal fade" id="modal-inquiry">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-content-centered">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <section class="modal-body">
                    <div class="hr-heading">
                        <h2 class="h1">Agendamento</h2>
                    </div>
                    <form class="booking-form js-form-booking" action="{{ route('bookmark') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="row row-sm">
                            <div class="form-group col-xs-12">
                                <label class="label-control">Seu nome <span class="label-warn">*</span></label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                            <div class="form-group col-xs-12">
                                <label class="label-control">Seu e-mail <span class="label-warn">*</span></label>
                                <input class="form-control" type="email" name="email" required>
                            </div>
                            <div class="form-group col-xs-12">
                                <label class="label-control">Telefone<span class="label-warn">*</span></label>
                                <input class="form-control" type="text" name="phone" required>
                            </div>

                            <div class="form-group col-xs-12">
                                <label for="date" class="label-control">Escolha seu horário <span class="label-warn">*</span></label>
                                <input type="datetime-local" name="date_schedule" class="form-control" required>
                            </div>

                            <div class="form-group col-xs-12">
                                <label class="label-control">Sua mensagem</label>
                                <textarea class="form-control" rows="7" name="message" required></textarea>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <button class="btn btn--darker" type="submit">enviar</button>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>
<!--         end  popup reservation form         /-->
<!-- Google map init-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script data-cfasync="false" src="{{ asset('principal/js/email-decode.min.js') }}"></script><script src="https://goo.gl/maps/kFZ1qV6gUoQJoQTf8"></script>
<script src="{{ asset('principal/js/bundle.js') }}"></script>
</body>
</html>
