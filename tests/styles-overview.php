<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="src/css/style.css">
  <title>NAYKEL Test Document</title>
</head>

<body>

<div class="grid">
  <div class="item"><img src="../../images/placeholder-4x3.svg" alt=""></div>
</div>

  <div class="container">
    <div id="style-buttons" class="bx-body">
      <div class="bx-title">Buttons</div>
      <button class="btn" type="button">Default</button>
      <button class="btn-primary" type="button">Primary</button>
      <button class="btn-secondary" type="button">Secondary</button>
      <button class="btn-danger" type="button">Danger</button>
      <button class="btn-success" type="button">Success</button>
      <button class="btn-disabled" type="button">Disabled</button>
      <div class="bx-title mt">Button Sizes</div>
      <button class="btn-success btn-sm" type="button">Small</button>
      <button class="btn-success" type="button">Default</button>
      <button class="btn-success btn-lg" type="button">Large</button>
      <div class="pxy-sm mt info">
        <ul class="uk-list">
          <li>Use colour schemes to further modify the button styles.</li>
        </ul>
      </div>
    </div>
  </div>

  <h1>SCSS Notes and How To's</h1>
  <h2>Creating and Using Mixins</h2>
  <p>Create the mixin and declare the parameters to be passed <code>@mixin mixinName($param1, $param2){}</code></p>
  <p>Call the mixin using <code>@include mixinName();</code></p>
  <h5>Set default parameters <em><strong>required parameters must precede optional parameters</strong></em></h5>
  <p><code>@mixin mixinName($param2, $param1: value){}</code></p>
  <pre><code>@mixin bx($padding, $bg-color){
    padding: $padding;
    background-color: $bg-color;
  }
  </code></pre>

  <div class="bx bx-body ">Hello</div>


  <div class="container py-lg">
    <article>

      <h1>Article Heading</h1>

      <p class="uk-article-meta">Written by <a href="#">Nathan Watts</a> on 1 February 2019. Posted in <a href="#">Blog</a></p>

      <p class="lead">This is the lead text that can help to draw attention to the content of your article, web page, or any important text. This can be used aware not just the top of the page.</p>

      <p class="">Spicy jalapeno bacon ipsum dolor amet dolore short ribs leberkas jerky nisi vanim, aliqua ribeye irure burgdoggen magna venison corned beef. Ball tip ham aliquip, turducken pariatur tail fugiat ea jowl shank beef ribs. Enim et doner eu deserunt ribeye meatloaf landjaeger turkey magna tail consequat. Picanha biltong alcatra, beef ribs chuck esse magna ea. Ullamco cupim sed boudin id nisi. Jowl landjaeger velit magna in occaecat, deserunt enim.</p>
      <p class="">Pancetta capicola aliquip alcatra t-bone, sint pork chop shank chuck eiusmod fugiat veniam. Esse ground round burgdoggen frankfurter, et magna nulla leberkas eiusmod pork turducken shank. Short ribs velit beef ribs cupidatat shank andouille officia nulla in. Jowl beef dolore, occaecat jerky sunt sausage in exercitation flank picanha turkey chuck tenderloin ex.</p>

      <h2 class="">This is a subheading</h2>
      <p class="">Bacon ipsum dolor amet turducken meatball hamburger beef pork loin burgdoggen ribeye beef ribs picanha spare ribs pancetta. Shankle prosciutto sausage picanha capicola jerky. Capicola turducken t-bone, bresaola sirloin leberkas rump. Chicken hamburger pig, porchetta ground round andouille fatback doner beef shank short loin prosciutto meatloaf cow.</p>

      <div class="bx-body bx-primary">
        Super cool important message that deserves to go in a box! If you read this you are being very througher and I like pickles on my sub.
      </div>

      <p>Frankfurter ground round nostrud, ut pancetta cow magna fugiat landjaeger enim. Eiusmod est tenderloin, pariatur in do nisi strip steak landjaeger labore.</p>
      <div class="mt">
        <a class="uk-button uk-button-primary" href="#">Read more</a>
        <a class="uk-button uk-button-secondary" href="#">5 Comments</a>
      </div>

    </article>

  </div>

</body>

</html>








<div class="wrapper pxy">
  <div class="flexCon">
    <div class="mr">
      <div class="bx-body">
        <div class="bx-title">Headings</div>
        <h1>heading 1</h1>
        <h2>heading 2</h2>
        <h3>heading 3</h3>
        <h4>heading 4</h4>
        <h5>heading 5</h5>
        <h6>heading 6</h6>
      </div>
    </div>
    <div class="mr">
      <div class="bx-body">
        <div class="bx-title">Paragraph Text</div>
        <p class="lead">A <code>.lead</code> to a paragraph to make the text stand out a little more.</p>
        <p>This is the standard paragraph text</p>
      </div>

      <div id="style-buttons" class="bx-body">
        <div class="bx-title">Buttons</div>
        <p>Buttons use the <code>.uk-button</code> or <code>.btn</code> prefix</p>
        <button class="btn" type="button">Default</button>
        <button class="btn btn-primary" type="button">Primary</button>
        <button class="btn btn-secondary" type="button">Secondary</button>
        <button class="btn btn-danger" type="button">Danger</button>
        <button class="btn btn-disabled" type="button">Disabled</button>
        <div class="bx-title mt">Button Sizes</div>
        <button class="btn btn-small" type="button">Small</button>
        <button class="btn" type="button">Default</button>
        <button class="btn btn-large" type="button">Large</button>
        <div class="pxy-sm mt info">
          <ul class="uk-list">
            <li>Use colour schemes to further modify the button styles.</li>
          </ul>
        </div>
      </div>


    </div>

    <div class="mr">
      <div class="bx-body">
        <div class="bx-title">Alerts</div>
        <div class="uk-alert uk-alert-info">This is the info alert</div>
        <div class="uk-alert uk-alert-success">This is the success alert</div>
        <div class="uk-alert uk-alert-warning">This is the warning alert</div>
        <div class="uk-alert uk-alert-danger">This is the success danger</div>
      </div>
    </div>
  </div>
</div>

NAYKEL&trade;



<section class="container"></section>
<hr>
<div class="uk-grid">
  <div class="uk-width-1-3">

  </div>
  <div class="uk-width-1-3">
    <div class="bx mb">
      <p>This is the Default paragraph text</p>
      <hr>
      <p class="lead">This is normal paragraph text using the <code>lead</code> class.</p>
      <hr>
      <a href="">This is a link</a>
    </div>

  </div>


</div>


</div>