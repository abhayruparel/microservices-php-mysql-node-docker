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
router.get('/image', function(req,res){
	// res.redirect("http://localhost:8080/");
	res.redirect("http://localhost:8080/image.php");
});
router.get('/persistence', function(req,res){
	// res.redirect("http://localhost:8080/");
	res.redirect("http://localhost:8080/persistence.php");
});
router.get('/recommend', function(req,res){
	// res.redirect("http://localhost:8080/");
	res.redirect("http://localhost:8080/recommend.php");
});
router.get('/login', function(req,res){
	// res.redirect("http://localhost:8080/");
	res.redirect("http://localhost:8080/signin.php");
	console.log("redirected to login page");
});


app.use(express.static(path));
app.use('/',router);

app.listen(port, function () {
	console.log('routing app listening on port 8001!')
})