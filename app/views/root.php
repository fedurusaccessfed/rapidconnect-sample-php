<html>
  <head>
    <title>AAF | Home</title>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="container">
        <p>&nbsp;</p>
      </div>
    </header>

    <section class="content">
      <div class="container">
        <div class="row">
          <div class="span2"><img src="/aaf_white.png"/></div>
          <div class="span10"><h1>Rapid Connect Demo for Pagoda Box</h1></div>
        </div>

        <div class="hero-unit">
          <p>
            This is a quick demo to show integration between AAF Rapid Connect and applications running on Pagoda Box.
          </p>
          <p>AAF Rapid Connect takes a SAML 2 assertion containing authentication and identity details and changes it into a secure JSON Web Token. It works for all identities in all AAF connected SAML 2 IdP without any changes being made by IdP administrators.</p>
          <p>Once created the secure JSON Web Token is transmitted to Pagoda Box applications where it can be decoded using PHP without the need for low level unix installation of components like the Shibboleth SP.</p>

          <br>
          <center><a href="INSERT_YOUR_RAPID_CONNECT_URL_HERE" class="btn btn-large btn-info">LOGIN VIA THE AUSTRALIAN ACCESS FEDERATION</a></center>
        </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <hr>
        <p>Pagoda Box Demo Application</p>
        <p>
          Developed for the <a href="http://www.aaf.edu.au">Australian Access Federation</a> by <a href="http://bradleybeddoes.com">Bradley Beddoes</a>
        </p>
      </div>
    </footer>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
  </body>
</html>
