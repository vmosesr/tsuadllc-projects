@include ('tsuadllc.pages.includes.header-navigation')
            
    <div class="">
        {{ $slot }}
    </div>

    @fluxScripts

@include ('tsuadllc.pages.includes.footer')