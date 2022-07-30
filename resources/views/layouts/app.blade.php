<!doctype html>
<html>
<head>




    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">








<!-- products ----------------->

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="{{ asset('assets/cssproduct/style.css') }}">

   <!-- custom js file link  -->
   <script src="{{ asset('assets/jsproduct/script.js') }}" defer></script>


   <!-- products ------------------>

  <!-- digicrft extra links-->


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Shadows+Into Light&amp;display=swap" media="all" id="shr-font-shadows-into light">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <!-- css-->

  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/templates/common/css/star-rating.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css">

  <!--meta-->

  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0"></script>
  <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui">
  <meta property="og:image" itemprop="image" content="https://vcard-bucket.s3.us-east-2.amazonaws.com/A14/digicrafts/1590668843251.jpeg" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="Mrs. Puja Maheshwari Agrawal (Founder & Owner)" />
  <title>DIGICRAFTS</title>
  <meta name="title" content="DIGICRAFTS" />
  <link rel="manifest" id="manifest-placeholder">
  @livewireStyles

  <!-- script-->

  <script>
      var dynamicManifest = {
          "name": "DIGICRAFTS",
          "short_name": "DIGICRAFTS",
          "description": "DIGICRAFTS",
          "start_url": "http://digicraftsvisitingcard.in/digicrafts",
          "background_color": "#000000",
          "theme_color": "#0f4a73",
          "icons": [{
              "src": "https://vcard-bucket.s3.us-east-2.amazonaws.com/A14/digicrafts/1590668843251.jpeg",
              "sizes": "256x256",
              "type": "image/png"
          }],
          "display": "standalone"
      }
      const stringManifest = JSON.stringify(dynamicManifest);
      const blob = new Blob([stringManifest], {
          type: 'application/json'
      });
      const manifestURL = URL.createObjectURL(blob);
      document.querySelector('#manifest-placeholder').setAttribute('href', manifestURL);
  </script>


<!-- digicrft extra links-->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    @livewireStyles
</head>
<body>



    <div id="app">
        <main class="">
            @yield('content3')
        </main>
    </div>












    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>














    <!-- digicraft   extra-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.min.js"></script>
    <script src="{{ asset('assets/templates/common/js/star-rating.js') }}"></script>
    <script src="{{ asset('assets/templates/common/js/script.5.js') }}"></script>

    <!-- digicraft   extra-->

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

      @livewireScripts
</body>
</html>
