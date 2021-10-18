const express = require('express');
const app = express();
const router = express.Router();

const path = __dirname + '/views/';
const port = 8001;

router.use(function(req,res,next){
	console.log('/' + req.method);
	next();
});

router.get('/', function(req,res){
	res.redirect("http://localhost:8080/");
});

// router.get('/image', function(req,res){
// 	res.sendFile(path + 'image.html');
// });
// router.get('/persistence', function(req,res){
// 	res.sendFile(path + 'persistence.html');
// });
// router.get('/recommend', function(req,res){
// 	res.sendFile(path + 'recommend.html');
// });
router.get('/signin', function(req,res){
	// res.writeHead(301, {Location: 'http://localhost/tea_store/views/signin.php'});
	res.redirect('http://localhost/tea_store/views/signin.php');
});
router.get('/signin.php',function(req,res){
res.send('sign')
});
app.use(express.static(path));
app.use('/',router);

app.listen(port, function () {
	console.log('example app listening on port 8001!!')
})