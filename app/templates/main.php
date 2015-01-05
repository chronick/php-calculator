<!DOCTYPE html>

<html>
  <head>
    <title>Calculator</title>
    <link rel="stylesheet" href="/assets/css/app.css">
  </head>
  <body>

    <div class="container">
      <div class="row">
        <input type="text" id="expr"/>
      </div>
      <div class="row">
        <button id="clear" class="half-width">Clear</button>
        <button id="submit" class="half-width">=</button>
      </div>
      <div class="row">
        <button class="btn-calc quarter-width" data-operation="7">7</button>
        <button class="btn-calc quarter-width" data-operation="8">8</button>
        <button class="btn-calc quarter-width" data-operation="9">9</button>
        <button class="btn-calc btn-op quarter-width" data-operation="+">+</button>
      </div>
      <div class="row">
        <button class="btn-calc quarter-width" data-operation="4">4</button>
        <button class="btn-calc quarter-width" data-operation="5">5</button>
        <button class="btn-calc quarter-width" data-operation="6">6</button>
        <button class="btn-calc btn-op quarter-width" data-operation="-">-</button>
      </div>
      <div class="row">
        <button class="btn-calc quarter-width" data-operation="1">1</button>
        <button class="btn-calc quarter-width" data-operation="2">2</button>
        <button class="btn-calc quarter-width" data-operation="3">3</button>
        <button class="btn-calc btn-op quarter-width" data-operation="*">*</button>
      </div>
      <div class="row">
        <button class="btn-calc quarter-width" data-operation="0">0</button>
        <button class="btn-calc quarter-width" data-operation=".">.</button>
        <button class="btn-calc quarter-width" data-operation="-">-</button>
        <button class="btn-calc btn-op quarter-width" data-operation="/">/</button>
      </div>
    </div>

    <script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/assets/js/app.js"></script>
  </body>
</html>
