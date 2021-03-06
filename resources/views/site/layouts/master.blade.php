@include('site.common.head')
<body>

@if(isset($isPlay) && $isPlay == true && FACEBOOK_APPID != '')
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{{ FACEBOOK_APPID }}',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
@endif

<?php $device = getDevice2(); ?>
			
@include('site.common.top')
@include('site.common.ad', ['posPc' => 1, 'posMobile' => 2])
<div class="row">
	<div class="medium-8 columns">
		<div class="content">
			@yield('content')
		</div>
	</div>
	<div class="medium-4 columns">
    @include('site.common.ad', ['posPc' => 7, 'posMobile' => 8])
		@include('site.common.side')
    @include('site.common.ad', ['posPc' => 9, 'posMobile' => 10])
	</div>
</div>
@include('site.common.ad', ['posPc' => 3, 'posMobile' => 4])
@include('site.common.bottom')

@if($device != MOBILE)
<a class="gotop" href="#" title="Lên đầu trang" rel="nofollow"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>
@endif

<script async src="{{ asset('js/app.js') }}"></script>
</body>
</html>
