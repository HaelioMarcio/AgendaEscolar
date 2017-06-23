<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/4.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('cd145b7c029995a46ae4', {
      encrypted: true
    });

    var channel = pusher.subscribe('post_channel');
    channel.bind('App\\Events\\CreatePost', function(data) {
      console.log(data.post.name);
      alert('Olá ' + data.post.name);
    });
  </script>
</head>