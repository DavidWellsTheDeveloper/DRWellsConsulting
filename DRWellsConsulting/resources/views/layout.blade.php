<!DOCTYPE html>
<html lang="en">


@include('includes.head')

  <body>

    @include('includes.nav')

    @yield ('content')

    <footer>
      @include('includes.footer')
    </footer>
  </body>
</html>
