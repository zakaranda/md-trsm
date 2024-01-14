var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res) {
    res.render('pages/index', { title: 'index' });
});

/* GET type page. */
router.get('/type-of-investment-fund', function(req, res) {
    res.render('pages/type-of-investment-fund', { title: 'Type' });
});

/* GET PCC page. */
router.get('/protected-cell-company', function(req, res) {
    res.render('pages/protected-cell-company', { title: 'PCC' });
});

/* GET Project page. */
router.get('/projects', function(req, res) {
    res.render('pages/projects', { title: 'Projects' });
});

module.exports = router;
