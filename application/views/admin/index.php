<h1 style="text-align: center;">Welcome <?php echo $this->session->userdata('identity'); ?>!</h1>
<hr>
<p style="text-align: center; margin-bottom: 400px;">Select a site section in the navigation area above to manage your website.</p>

<a href="#" data-reveal-id="myModal">Click Me For A Modal</a>

<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>