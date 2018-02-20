{{-- <div style="background-color: #d6d6d6;" class="partner-block">
 <div style="" class="uk-container uk-text-center">
     <h2 style="color: #adadad;margin-bottom: 50px !important;margin-top: 50px !important;" class="uk-margin-large-top uk-margin-large-bottom">Partner section</h2>
 </div>
</div> {{-- END OF PARTNER --}}
<div class="subscribe-block"> {{-- START Subscribe block --}}
    <div class="uk-container">
        <div class="uk-grid uk-flex uk-margin-medium-top uk-margin-medium-bottom">
            <div class="uk-width-1-2@s uk-text-center">
                <div class="call-text inverse-text mobile-title">Subscribe to receive news and updates</div>
                <span class="inverse-text">You can unsubscribe at any time by emailing info@overwatch-seasons.com</span>
            </div>
            <div class="uk-width-1-2@s uk-margin-small-top">
                <form method="POST" action="/subscriber" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="uk-flex">
                        <input type="text" name="email" class="uk-input " placeholder="Your Email Address" >
                        <button class="uk-button uk-button-default" type="submit">Subscribe</button>
                    </div>
                    @if( count($errors) )
                        <ul style="color: red;">
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if(session()->has('message'))
                        <div class="uk-alert uk-alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div> {{-- END Subscribe block --}}
<div class="footer-bottom"> {{-- START Footer Bottom --}}
    <div class="uk-container">
        <div class="uk-width-1-1 uk-text-center ">
            <h1 style="line-height: 0.1rem;" class="call-text inverse-text mobile-title">Stay connected </h1>
            <a class="footer-icon " href="https://www.facebook.com/overwatchseasons" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a class="footer-icon" href="https://www.twitch.tv/overwatchseasons" target="_blank"><i class="fab fa-twitch"></i></a>
            <a class="footer-icon" href="https://vk.com/overwatch_seasons" target="_blank"><i class="fab fa-vk"></i></a>
            <a class="footer-icon" href="#" target="_blank"><i class="fab fa-youtube"></i></a>
            <a class="footer-icon" href="mailto:info@overwatch-seasons.com" target="_top"><i class="fas fa-envelope"></i></a>
            <div class="uk-margin-medium-top">
            <p class="footer-text">©2018 Overwatch Seasons International Cup.</br> All trademarks referenced herein are the properties of their respective owners.</p>

                <img style="height:auto; width:100px;" src="/svg/playstation.svg"> <img style="height:auto; width:70px;" src="/svg/blizzard2.svg">
            </div>
        </div>
    </div>
</div> {{-- END Footer Bottom --}}
