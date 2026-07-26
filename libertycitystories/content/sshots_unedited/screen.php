<script language="javascript">
  // Resize window to fit image
</script>

<html>
  <head>
    <title>Screenshot</title>
    <style type="text/css">
      body,
      html {
        height: 100%;
        background-color: #000000;
        margin: 0px 0px 0px 0px;
      }
    </style>
  </head>
  <body>
    <img
      src=""
      width="480"
      height="272"
      id="screenshot-image"
    >

    <script language="javascript">
      // Extract the image file name from the URL
      var urlParams = new URLSearchParams(window.location.search);
      var imageFileName = urlParams.get('img');

      // Remove periods from the image file name
      imageFileName = imageFileName.replace(/\./g, '');

      // Set the src attribute of the image element
      var imgElement = document.getElementById('screenshot-image');
      imgElement.src =
        'http://www.rockstargames.com/libertycitystories/content/sshots/' +
        imageFileName;
    </script>
  </body>
</html>
