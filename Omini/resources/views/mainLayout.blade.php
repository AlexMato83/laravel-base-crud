<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" charset="utf-8"></script>
    <title>OMINI</title>
  </head>
  <body>
   <header>
     @include("components.header")
   </header>
   <main>
     @yield('main')
   </main>
   <footer>
     @include("components.footer")
   </footer>
  </body>
</html>
