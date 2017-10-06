var express = require('express');
var router = express.Router();
var moment = require('moment');

var anniv = moment("1994-10-08 16:00");
var taylor_bday = moment("2003-06-02 18:03");
var sam_bday = moment("2005-09-23 18:24");

var marriage_age = anniv.fromNow(true);
var taylor_age = taylor_bday.fromNow(true);
var sam_age = sam_bday.fromNow(true);

var global_sponsors = [
    {corp:'ACME Corporation',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/acme.svg',ort:'landscape',ref:'Looney Tunes',link:'http://looneytunes.warnerbros.com'},
    {corp:'Aperture Science',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/aperture_science.svg',ort:'portrait',ref:'Portal',link:'http://orange.half-life2.com/portal.html'},
    {corp:'ATMOS',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/atmos.png',ort:'portrait',ref:'Doctor Who',link:'http://en.wikipedia.org/wiki/The_Sontaran_Stratagem'},
    {corp:'Benthic Petroleum',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/benthic.png',ort:'landscape',ref:'The Abyss',link:'http://www.imdb.com/title/tt0096754/'},
    {corp:'Blue Sun',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/bluesun.png',ort:'portrait',ref:'Firefly/Serenity',link:'http://www.imdb.com/title/tt0303461/'},
    {corp:'Bluebook',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/bluebook.png',ort:'portrait',ref:'Ex Machina ',link:'http://www.imdb.com/title/tt0470752/'},
    {corp:'Buy n Large',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/buynlarge.png',ort:'portrait',ref:'Wall&bull;E',link:'http://disney.go.com/disneypictures/wall-e/'},
    {corp:'CHOAM',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/choam.png',ort:'landscape',ref:'Dune',link:'http://en.wikipedia.org/wiki/Dune_(novel)'},
    {corp:'Cyberdyne',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/cyberdyne.png',ort:'portrait',ref:'Terminator 2',link:'http://www.imdb.com/title/tt0103064/'},
    {corp:'Delos',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/delos.png',ort:'portrait',ref:'Westworld',link:'http://www.imdb.com/title/tt0475784/'},
    {corp:'Dinoco',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/dinoco.png',ort:'landscape',ref:'Pixar Films (Cars, Toy Story)',link:'http://www.pixar.com'},
    {corp:'ENCOM',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/encom.png',ort:'landscape',ref:'TRON',link:'http://www.imdb.com/title/tt0084827/'},
    {corp:'Fhloston Paradise',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/fhloston_paradise.png',ort:'landscape',ref:'The Fifth Element',link:'http://www.imdb.com/title/tt0119116'},
    {corp:'Gizmonic Institute',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/gizmonic.png',ort:'portrait',ref:'Mystery Science Theater 3000',link:'http://en.wikipedia.org/wiki/Mystery_Science_Theater_3000'},
    {corp:'Goliath National Bank',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/gnb.png',ort:'landscape',ref:'How I Met Your Mother',link:'http://www.imdb.com/title/tt0460649/'},
    {corp:'InGen',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/ingen.png',ort:'portrait',ref:'Jurassic Park',link:'http://www.imdb.com/title/tt0107290/'},
    {corp:'Initech',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/initech.png',ort:'portrait',ref:'Office Space',link:'http://www.imdb.com/title/tt0151804/'},
    {corp:'Knight Industries',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/knight_industries.png',ort:'portrait',ref:'Knight Rider',link:'http://www.imdb.com/title/tt0083437/'},
    {corp:'Kwik E Mart',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/kwikemart.png',ort:'portrait',ref:'The Simpsons',link:'http://www.imdb.com/title/tt0096697/'},
    {corp:'LexCorp',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/lexcorp.png',ort:'landscape',ref:'Superman',link:'http://en.wikipedia.org/wiki/Superman'},
    {corp:'Lunar Industries, Inc.',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/lunar_industries.png',ort:'landscape',ref:'Moon',link:'http://www.imdb.com/title/tt1182345/'},
    {corp:'MacLaren’s Irish Pub',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/maclarens.png',ort:'landscape',ref:'How I Met Your Mother',link:'http://www.imdb.com/title/tt0460649/'},
    {corp:'MomCorp',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/momcorp.png',ort:'landscape',ref:'Futurama',link:'http://www.imdb.com/title/tt0149460/'},
    {corp:'Multi National United',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/mnu.png',ort:'landscape',ref:'District 9',link:'http://www.multinationalunited.com/'},
    {corp:'Nakatomi Trading Corporation',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/nakatomi.png',ort:'landscape',ref:'Die Hard',link:'http://www.imdb.com/title/tt0095016/'},
    {corp:'Oceanic Airlines',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/oceanic.png',ort:'portrait',ref:'Lost',link:'http://www.imdb.com/title/tt0411008/'},
    {corp:'Octan',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/octan.png',ort:'landscape',ref:'Lego',link:'http://lego.wikia.com/wiki/Octan'},
    {corp:'Omni Consumer Products',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/ocp.png',ort:'portrait',ref:'Robocop',link:'http://www.imdb.com/title/tt0093870/'},
    {corp:'OsCorp',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/oscorp.png',ort:'landscape',ref:'Spiderman',link:'http://en.wikipedia.org/wiki/Spider-Man'},
    {corp:'Planet Express',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/planet_express.png',ort:'landscape',ref:'Futurama',link:'http://www.imdb.com/title/tt0149460/'},
    {corp:'Reardon Steel',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/reardon.png',ort:'landscape',ref:'Atlas Shrugged',link:'http://en.wikipedia.org/wiki/Atlas_Shrugged'},
    {corp:'Resource Development Administration',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/rda.png',ort:'landscape',ref:'James Cameron&rsquo;s Avatar',link:'http://www.avatarmovie.com/'},
    {corp:'Rossum Corporation',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/rossum.png',ort:'landscape',ref:'Dollhouse',link:'http://www.imdb.com/title/tt1135300/'},
    {corp:'Ryan Industries',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/ryan_industries.png',ort:'portrait',ref:'Bioshock',link:'http://en.wikipedia.org/wiki/Bioshock'},
    {corp:'Shipstone Corporation',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/shipstone.png',ort:'portrait',ref:'Robert A. Heinlein Expanded Universe',link:'http://en.wikipedia.org/wiki/Friday_%28novel%29'},
    {corp:'Soylent Corporation',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/soylent.png',ort:'landscape',ref:'Soylent Green',link:'http://www.imdb.com/title/tt0070723'},
    {corp:'Stark Industries',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/stark.png',ort:'landscape',ref:'Iron Man',link:'http://en.wikipedia.org/wiki/Iron_man'},
    {corp:'Trask Industries',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/trask.png',ort:'portrait',ref:'X-Men',link:'http://www.trask-industries.com'},
    {corp:'Tyrell Corporation',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/tyrell.png',ort:'portrait',ref:'Blade Runner',link:'http://www.imdb.com/title/tt0083658/'},
    {corp:'Umbrella Corporation',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/umbrella.png',ort:'portrait',ref:'Resident Evil',link:'http://en.wikipedia.org/wiki/Resident_evil'},
    {corp:'Veidt Industries',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/veidt.png',ort:'landscape',ref:'Watchmen',link:'http://en.wikipedia.org/wiki/Watchmen'},
    {corp:'Wayne Enterprises',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/wayne.png',ort:'landscape',ref:'Batman',link:'http://en.wikipedia.org/wiki/Batman'},
    {corp:'Weyland Yutani',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/weyland_yutani.png',ort:'landscape',ref:'Aliens',link:'http://www.imdb.com/title/tt0090605/'},
    {corp:'Wonka Candy Company',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/wonka.png',ort:'landscape',ref:'Willy Wonka and the Chocolate Factory',link:'http://www.imdb.com/title/tt0067992/'},
    {corp:'Yoyodyne Propulsion Systems',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/yoyodyne.png',ort:'landscape',ref:'The Adventures of Buckaroo Banzai Across the 8th Dimension',link:'http://www.imdb.com/title/tt0086856/'},
    {corp:'Zik Zak',image:'https://s3-us-west-1.amazonaws.com/chuckharper/images/sponsors/crtskin/zikzak.png',ort:'landscape',ref:'Max Headroom',link:'http://www.imdb.com/title/tt0092402/'},

];

/* GET home page. */
router.get('/', function(req, res, next) {
    var sponsors = JSON.parse(JSON.stringify(global_sponsors));
    var select_sponsors = [];
    var sponsor_count = 3;
    for (var i=0;i<sponsor_count;i++) {
        var rand = Math.floor((Math.random() * sponsors.length));
        if (sponsors[rand] == null) {
            i--;
            continue;
        }
        select_sponsors.push(sponsors[rand]);
        sponsors[rand] = null;
    }

    res.render('index', { title: 'chuckharper.com', pageid: 'home', sponsors: select_sponsors, current_year: (new Date()).getFullYear(), marriage_age: marriage_age, taylor_age:taylor_age, sam_age:sam_age });
});

router.get('/about', function(req, res, next) {
    res.render('about', { title: 'About Chuck Harper', pageid: 'about', current_year: (new Date()).getFullYear(), marriage_age: marriage_age, taylor_age:taylor_age, sam_age:sam_age });
});

router.get('/about/tron', function(req, res, next) {
    res.render('tron', { title: 'About Chuck Harper - TRON Legacy', pageid: 'tron', current_year: (new Date()).getFullYear()});
});

router.get('/bookmarks', function(req, res, next) {
    res.render('bookmarks', { title: "Chuck Harper's Bookmarks", pageid: 'bookmarks', current_year: (new Date()).getFullYear() });
});

router.get('/sponsors', function(req, res, next) {

    res.render('sponsors', { title: "Chuck Harper's Sponsors", pageid: 'sponsors', sponsors: global_sponsors, current_year: (new Date()).getFullYear() });
});

module.exports = router;
