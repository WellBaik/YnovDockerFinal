var express = require('express');
var app = express();
var redis = require('redis');

var client = redis.createClient('6379', 'redis');

app.get('/', function (req, res) {
  client.incr('counter', function(err, counter) {
    if(err) return next(err);
    res.send('Cette page a été vue ' + counter + ' fois!');
  });
});

var server = app.listen(8080, function () {
  console.log('Le serveur est démarré');
});
