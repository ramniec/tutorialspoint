<html lang="en">
<head>
  <title>Multiple File Upload Example</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="480">
    <meta property="og:image:height" content="283">
    <meta property="og:image" content="{{$certificate}}">
</head>
<body>


<div class="container lst">

<h3 class="well">Social Share</h3>
<div class="container">
  <div class="row">
  <div class="col-sm-2">
</div>

  <div class="col-sm-10">
      <p><a href="http://www.linkedin.com/shareArticle?url={{$certificate}}&title={{$title}}&summary={{$summary}}" target="_blank" class="fa fa-linkedin"></a></p>

      <p><a href="http://www.facebook.com/sharer/sharer.php?picture={{$certificate}}&caption={{$title}}&description={{$summary}}" target="_blank" class="fa fa-facebook"></a></p>

      <p><a href="http://www.twitter.com/intent/tweet?url={{$certificate}}&text={{$title}}" target="_blank" class="fa fa-twitter"></a></p>


      <i id="twitter_share" class="fa fa-twitter fs20" style="position: relative; bottom: 4px;"></i>

      <script type="text/javascript">
        $('#twitter_share').click(function (e) {
    e.preventDefault();
    var loc = "https://global-uploads.webflow.com/5e157547d6f791d34ea4e2bf/6087f2b060c7a92408bac811_logo.svg";
    var title = "Shate image";
    window.open('http://twitter.com/share?url=' + loc + '&text=' + title + '&', 'twitterwindow', 'height=450, width=550, top=' + ($(window).height() / 2 - 225) + ', left=' + $(window).width() / 2 + ', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
});
      </script>

      <div id="mImageBox">
<img id='my_image' src='https://global-uploads.webflow.com/5e157547d6f791d34ea4e2bf/6087f2b060c7a92408bac811_logo.svg' alt='img test' width="auto" height="auto" onclick="fbs_click(this)"/>
</div>

<script>
     function fbs_click(TheImg) {
     u=TheImg.src;
     // t=document.title;
    t=TheImg.getAttribute('alt');
    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;
}
</script>
</div>


</div>
</div>
</div>


</body>
</html>