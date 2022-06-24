<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/_debugbar/open' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.openhandler',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/stylesheets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.css',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_debugbar/assets/javascript' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.assets.js',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FRIs8F3bO0Ouho1h',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DEEUGzPMSNvdmA4u',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/instagram' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P5XrtAYuaxdwYU44',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_doctor_review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JSBN6LdTMEzSMBVC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkoutbrain' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YgrmYtaiAV8ehV64',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sendnotification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fwt1rGc3FSvr9q0c',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy_policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kCzoeMsxAXGzBDcG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/_debugbar/c(?|lockwork/([^/]++)(*:39)|ache/([^/]++)(?:/([^/]++))?(*:73))|/changeLang/([^/]++)(*:101)|/([^/]++)(?|/(?|a(?|uth/([^/]++)(?|(*:144)|/callback(*:161))|bout\\-us(*:178)|llfacilites(*:197)|d(?|dreview(*:216)|min(?|(*:230)|/(?|p(?|ostlogin(*:254)|a(?|ckage(?|(*:274)|/(?|create(*:292)|([^/]++)(?|(*:311)|/edit(*:324)|(*:332)))|(*:342))|tient(*:356)|ymentgateway(*:376)))|d(?|ashboard(*:398)|e(?|partment(?|(*:421)|service/([^/]++)(*:445))|lete(?|d(?|epartment(?|/([^/]++)(*:486)|service/([^/]++)(*:510))|octor/([^/]++)(*:533))|package/([^/]++)(*:558)|review/([^/]++)(*:581)|\\-(?|blog/([^/]++)(*:607)|workshop/([^/]++)(*:632)|room/([^/]++)(*:653)|subscriber/([^/]++)(*:680)|faq/([^/]++)(*:700)|event/([^/]++)(*:722))))|octor(*:738))|logout(*:753)|s(?|e(?|tti(?|mezone/([^/]++)(*:790)|ng/([^/]++)(*:809))|nnews(*:823))|a(?|ve(?|d(?|epartment(?|/([^/]++)(*:866)|service/([^/]++)/([^/]++)(*:899))|octor/([^/]++)/([^/]++)(*:931))|notification(*:952)|basicsetting(*:972)|s(?|erverkey(*:992)|itesetting(*:1010))|terms(*:1025)|p(?|rivacy(*:1044)|ackage/([^/]++)(*:1068))|uploadsection(*:1091))|mepwd/([^/]++)(*:1115))|ubscri(?|ption(*:1139)|bers(*:1152))|how\\-(?|blog/([^/]++)(*:1183)|room/([^/]++)(*:1205)|faq/([^/]++)(*:1226)))|a(?|dd\\-(?|department(*:1258)|wo(?|rkshop(*:1278)|men(*:1290))|room(*:1304)|faq(*:1316)|event(*:1330)|about(*:1344)|home\\-section(*:1366))|ppointment/([^/]++)/([^/]++)(*:1404)|rticles(?|(*:1423)|/(?|create(*:1442)|([^/]++)(?|(*:1462)|/edit(*:1476)|(*:1485)))|(*:1496))|bout(*:1510))|c(?|reate\\-(?|department(*:1544)|wo(?|rkshop(*:1564)|men(*:1576))|room(*:1590)|faq(*:1602)|event(*:1616)|about(*:1630)|home\\-section(*:1652))|ha(?|nge(?|pa(?|ssword(*:1684)|ckagestatus/([^/]++)/([^/]++)(*:1722))|s(?|ettingstatus/([^/]++)(*:1757)|tatuspayment/([^/]++)/([^/]++)(*:1796)))|t(*:1808))|ontactus(*:1826))|update(?|d(?|epartment(?|(*:1861)|service(*:1877))|octorprofile(*:1899))|workinghours(*:1921)|p(?|rofile(*:1940)|a(?|ssword(*:1959)|ckage(*:1973)|ymentgateway(*:1994)))|\\-(?|blog/([^/]++)(*:2023)|wo(?|rkshop/([^/]++)(*:2052)|men/([^/]++)(*:2073))|room/([^/]++)(*:2096)|faq/([^/]++)(*:2117)|event/([^/]++)(*:2140)|about/([^/]++)(*:2163)|home/([^/]++)(*:2185)))|e(?|dit(?|p(?|rofile(*:2216)|aymentgateway/([^/]++)(*:2247))|\\-(?|blog/([^/]++)(*:2275)|wo(?|rkshop/([^/]++)(*:2304)|men/([^/]++)(*:2325))|room/([^/]++)(*:2348)|faq/([^/]++)(*:2369)|event/([^/]++)(*:2392)|about/([^/]++)(*:2415)|home/([^/]++)(*:2437)))|vents(*:2453))|n(?|otification(?|(*:2481)|/(?|create(*:2500)|([^/]++)(?|(*:2520)|/edit(*:2534)|(*:2543)))|(*:2554))|ews(*:2567))|r(?|eview(*:2586)|ooms(*:2599))|blogs(?|(*:2617)|/(?|create(*:2636)|([^/]++)(?|(*:2656)|/edit(*:2670)|(*:2679)))|(*:2690))|wo(?|rkshops(*:2712)|men(*:2724))|faqs(*:2738)|home\\-section(*:2760)))))|b(?|log(?|(*:2783)|\\-detail/([^/]++)(*:2809))|ookappoinment(*:2832))|s(?|e(?|rvices(?|(*:2859)|/([^/]++)(?|(*:2880)|/([^/]++)(*:2898)))|ttimezone/([^/]++)(*:2927))|pecial\\-membership\\-for\\-women(*:2967)|ave(?|contact(*:2989)|subscribe/([^/]++)(*:3016))|ubscription/([^/]++)(*:3046))|faqs(*:3060)|wo(?|men\\-empowerment(*:3090)|rkshop(?|(*:3108)|/([^/]++)(*:3126)|\\-booking(*:3144)))|events(*:3161)|r(?|ooms/([^/]++)(*:3187)|eset(?|password/([^/]++)(*:3220)|newpwd(*:3235)))|g(?|et(?|serviceanddoctor/([^/]++)(*:3280)|currenttime/([^/]++)(*:3309))|allery(*:3325))|d(?|octor(?|list(*:3351)|details/([^/]++)(*:3376))|eletemedia(*:3396))|c(?|ontact\\-us(*:3420)|h(?|eckcurrentpwd(*:3446)|angepasswords(*:3468)))|p(?|ri(?|cing(*:3492)|vacypolicy(*:3511))|ost(?|register(*:3535)|login(*:3549)|forgot(*:3564))|aymentsubscription(*:3592))|termcondition(*:3615)|u(?|serlog(?|out(*:3640)|in(*:3651))|pdateprofile(*:3673))|m(?|ediaupload(*:3697)|yaccount(*:3714)))|(*:3725)))/?$}sDu',
    ),
    3 => 
    array (
      39 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.clockwork',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      73 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'debugbar.cache.delete',
            'tags' => NULL,
          ),
          1 => 
          array (
            0 => 'key',
            1 => 'tags',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5IqYO4SMtrTaiwyu',
          ),
          1 => 
          array (
            0 => 'lang',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social.oauth',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'social.callback',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'driver',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      178 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about-us',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9mKdu4bjj0NNDDQj',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b61SDfjfPSVQ9aQC',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JnlMz67fMeJJxK2O',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      254 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::38zMjMJXbWPkzxMt',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      274 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.index',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.create',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.show',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'package',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.edit',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'package',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      332 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.update',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'package',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'package.destroy',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'package',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.store',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      356 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IBBP5I3Bfs36XyMZ',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::53jS4gq9TwoRf6lg',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      421 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'department',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'departmentservice',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      486 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yIQwyI2Ahd5YbsGQ',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5SaIjBeX8laQXx9E',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      533 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UPphtrdXrZAVSFIO',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      558 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MOVLTVTB0oxw1P9l',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      581 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::42mXJ5OYU9oRyBy2',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      607 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2u7deUP3c2d26J63',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uTtwhZHOc7xKcMT8',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      653 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L0q4PJoYtnk99yFV',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HyZfOi4aV1hqqDaj',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      700 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sSmeam5EoKgRtaw9',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nSmyzBaevY7MCBLO',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FuEnH2EI7rssKQpH',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      790 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NkWfQ08iFwwOLMrE',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'time',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GUtFs4lVMx50Ec9n',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tMXInggTTbbzK1Tw',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      866 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lye1ngD3Xo2o77x0',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      899 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bcrzlL13semmOCPr',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'dept_id',
            2 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      931 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NJIPF7eV7XRb33TS',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
            2 => 'tab_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      952 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2cj2CnLNG8P4RVHl',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qaZJIMNQvm6K2gTU',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      992 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b2sltJIBacyWmZbz',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1010 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JVQcCanKOuWIa96S',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nBznNzHgzNFojw7u',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1044 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qEFIe7A3akX7b6Vt',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HxRLcMlMIYqgCwv6',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dwwkh5joVsUgkiii',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::csKmi3r8SSyqfC4e',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1139 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y2jsI2QgWOFG7g0A',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pTUZWqH07olpKHTZ',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1183 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L2z4VOjfha8W7tYw',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1205 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4nfm0raJaEoNepIn',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IN2gQ7eFEakEnleB',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1258 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Hzxcnegyg8gWrCN',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1278 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NRykQE8j7hqcoZnJ',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1290 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6iJp8OXPOkBlNWOR',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QghU46b2DORd9lZd',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YcyMkgOYKRD1weB5',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1330 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CmHEs5YfQwxbMsqF',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mn0fMQEkSs4SAWJV',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gUkoVP8Y4Z0Rzp1g',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zdBT9g7KZdIel9TQ',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'start_date',
            2 => 'end_date',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1423 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.index',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1442 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.create',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.show',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1476 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.edit',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'article',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.update',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'article',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'articles.destroy',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'article',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1496 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'articles.store',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cVyKP9jCT4XvUS11',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XCxPYrS5rd2rRnBC',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a6L7Lt3E6u2EI5zQ',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1590 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ggc84BHzRl6BCfCc',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VtkqqTJNPOPuTSKT',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1616 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fr2YK08eIA4QAMnE',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1630 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jfAXsA4lVhKibEdm',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1652 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QdEIyLtHfvvCGv2g',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1684 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changepassword',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1722 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v8J5ajBnd8UapxXz',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'status',
            2 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1757 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TWIMEcvXegdpLkPr',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'fields',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1796 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eGZmcT1TLZ0k8aEu',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'pay_id',
            2 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'chat',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pc3uJuZX8iDDPWrU',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1861 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aBDBrSsviRPJjUb3',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wbn7cwCNWRPpk1Ko',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1899 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PcPESJwYhxXwl94X',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tBsbS3tqarr97V5R',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1940 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zFzm5McjRjdEtoN0',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6YyVQubCHUV4f7rp',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T3MhxQysc18CNIA1',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mwPINHWeks2ErMnC',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XDNWuQvKTs7uNEXa',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2052 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jKGmjWEsVxlGgjig',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2073 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mXKz41lMqpwPOFFq',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2096 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7eT9pssP3EaO2PuA',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sYv6H27eCffp2qDX',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eLtERPOxRrDK4Ix7',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jMEnEoeDPNAMxNkw',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2185 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2gksFrnMkjg9CFfG',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dTvTOfjtCHohAxqB',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M7hWNRHoMCDGEP7j',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3ccLWHcfTMSVXbZA',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2304 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XVU2GuwQuGafHSsF',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::39rcWJzS7b2uqDMt',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K4Du3qs5vkpGA8M0',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2369 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xE1vuTKflL9n4XTb',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2392 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UUni7jIxZobz3eVD',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2415 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JHjYR1UON1MkA5le',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QgDtLutCEasEnB0f',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'events',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2481 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.index',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2500 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.create',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.show',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2534 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.edit',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'notification',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.update',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'notification',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'notification.destroy',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'notification',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2554 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.store',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2567 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BD3rkkc6oBRetLCQ',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gvbb6eAlzP8DoYPG',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rooms',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.index',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.create',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2656 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.show',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2670 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.edit',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'blog',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2679 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.update',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'blog',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.destroy',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'blog',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.store',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2712 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshops',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2724 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'women',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faqs',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home-section',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c9DfgeDkcwVxZMa3',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C16F4ujuVEknzCo5',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2832 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::grpBxqbJPWryaiMc',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I87UafTZNBHAGYac',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'department.service/',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services/',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'service',
            2 => 'subservice',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qy825WC9yFlRkqkG',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'time',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7UnajVYWVVSNId29',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      2989 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kmK7Ha8ORv8Ojenw',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3016 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a0WXva9js68lonxb',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3046 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lNGgRNIE5EbvH4q9',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'package_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S5zcscki0tzATXPY',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3090 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'women-empowerment',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::27GkxyNdqrP9R9j5',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop.details',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3144 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'workshop-booking',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iRct77EphdfPLfBc',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3187 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IKdYnpbjL0F284r3',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TScOmEaIeRJl6gU5',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3235 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HFBB8n4fqpMjamM6',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fdMSSKc65Q3Yg0rw',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S40xcCidLCgKAfSH',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'offset',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3325 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EPN1u0DyHMTvKDup',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rz3kPQILqSHcxBsX',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'doctor.details',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3396 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rQteh8dyj9hm2BQ2',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VkrDtjmpk0KfonoU',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YtTM3tvJzyPJxsqO',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3468 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fXot9i4WPQ7PH2kI',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q4fEwdBYGfTTShDh',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KVvUEg4yRL81lcDC',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XXC7MZFDclCphYv6',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3549 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4u7tv2tcvZ5KkBLG',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3564 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iJYYgDDGBQWRGhGT',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qhVGnCeXFd2sE5M5',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3615 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UbLN3eEQ7sjm4wzH',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3640 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9I3Q24QBnXlKY5dl',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xtl2oF98SC5ZB6nz',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3673 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IybICBNYrE8Rmy2Q',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0lDLohwCPHwxGBy8',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WohoBFjNC4UkwDIS',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kBqtHgVq1aXrVMk2',
          ),
          1 => 
          array (
            0 => 'locale',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'debugbar.openhandler' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/open',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'as' => 'debugbar.openhandler',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@handle',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.clockwork' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/clockwork/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'as' => 'debugbar.clockwork',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\OpenHandlerController@clockwork',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.css' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/stylesheets',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'as' => 'debugbar.assets.css',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@css',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.assets.js' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_debugbar/assets/javascript',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'as' => 'debugbar.assets.js',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\AssetController@js',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'debugbar.cache.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '_debugbar/cache/{key}/{tags?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'Barryvdh\\Debugbar\\Middleware\\DebugbarEnabled',
        ),
        'uses' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'as' => 'debugbar.cache.delete',
        'controller' => 'Barryvdh\\Debugbar\\Controllers\\CacheController@delete',
        'namespace' => 'Barryvdh\\Debugbar\\Controllers',
        'prefix' => '_debugbar',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FRIs8F3bO0Ouho1h' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:297:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:79:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000631941250000000032ccff76";}";s:4:"hash";s:44:"cpbZP6P0WG99r6+Imz9weKEoL/o77N2AWd+h+QY+RG4=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FRIs8F3bO0Ouho1h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DEEUGzPMSNvdmA4u' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:390:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:171:"function() {
    // Artisan::call(\'optimize\');
    $lang = \\Session::get(\'locale\') == null ? \'en\' : \\Session::get(\'locale\');
        return \\redirect("/".$lang);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000631941270000000032ccff76";}";s:4:"hash";s:44:"N6FQh5IbAc55n4HJt+jhq7xjWogaOo9h/oHViuvVg0o=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DEEUGzPMSNvdmA4u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5IqYO4SMtrTaiwyu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'changeLang/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LangController@change',
        'controller' => 'App\\Http\\Controllers\\LangController@change',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5IqYO4SMtrTaiwyu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P5XrtAYuaxdwYU44' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'instagram',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@instagram',
        'controller' => 'App\\Http\\Controllers\\FrontController@instagram',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::P5XrtAYuaxdwYU44',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JSBN6LdTMEzSMBVC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_doctor_review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthenticatedoctorController@show_product_review_user',
        'controller' => 'App\\Http\\Controllers\\AuthenticatedoctorController@show_product_review_user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::JSBN6LdTMEzSMBVC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YgrmYtaiAV8ehV64' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'checkoutbrain',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\braintreeController@checkoutbrain',
        'controller' => 'App\\Http\\Controllers\\braintreeController@checkoutbrain',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YgrmYtaiAV8ehV64',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fwt1rGc3FSvr9q0c' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sendnotification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@sendnotification',
        'controller' => 'App\\Http\\Controllers\\FrontController@sendnotification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Fwt1rGc3FSvr9q0c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kCzoeMsxAXGzBDcG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy_policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@privacy',
        'controller' => 'App\\Http\\Controllers\\HomeController@privacy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kCzoeMsxAXGzBDcG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social.oauth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/auth/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\FacebookController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\FacebookController@redirectToProvider',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'social.oauth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'social.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/auth/{driver}/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\FacebookController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\FacebookController@handleProviderCallback',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'social.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kBqtHgVq1aXrVMk2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@showhome',
        'controller' => 'App\\Http\\Controllers\\FrontController@showhome',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::kBqtHgVq1aXrVMk2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about-us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@about',
        'controller' => 'App\\Http\\Controllers\\FrontController@about',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'about-us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c9DfgeDkcwVxZMa3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@blog',
        'controller' => 'App\\Http\\Controllers\\FrontController@blog',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::c9DfgeDkcwVxZMa3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I87UafTZNBHAGYac' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@services',
        'controller' => 'App\\Http\\Controllers\\FrontController@services',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::I87UafTZNBHAGYac',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S5zcscki0tzATXPY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@faqs',
        'controller' => 'App\\Http\\Controllers\\FrontController@faqs',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::S5zcscki0tzATXPY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'women-empowerment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/women-empowerment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@women_empowerment',
        'controller' => 'App\\Http\\Controllers\\FrontController@women_empowerment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'women-empowerment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7UnajVYWVVSNId29' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/special-membership-for-women',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@become_member',
        'controller' => 'App\\Http\\Controllers\\FrontController@become_member',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::7UnajVYWVVSNId29',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::27GkxyNdqrP9R9j5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/workshop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@workshop',
        'controller' => 'App\\Http\\Controllers\\FrontController@workshop',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::27GkxyNdqrP9R9j5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iRct77EphdfPLfBc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@events',
        'controller' => 'App\\Http\\Controllers\\FrontController@events',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::iRct77EphdfPLfBc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IKdYnpbjL0F284r3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/rooms/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@rooms',
        'controller' => 'App\\Http\\Controllers\\FrontController@rooms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::IKdYnpbjL0F284r3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/workshop/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@workshopdetail',
        'controller' => 'App\\Http\\Controllers\\FrontController@workshopdetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'workshop.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fdMSSKc65Q3Yg0rw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/getserviceanddoctor/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@getserviceanddoctor',
        'controller' => 'App\\Http\\Controllers\\FrontController@getserviceanddoctor',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::fdMSSKc65Q3Yg0rw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::grpBxqbJPWryaiMc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/bookappoinment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@bookappoinment',
        'controller' => 'App\\Http\\Controllers\\FrontController@bookappoinment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::grpBxqbJPWryaiMc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9mKdu4bjj0NNDDQj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/allfacilites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@allfacilites',
        'controller' => 'App\\Http\\Controllers\\FrontController@allfacilites',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::9mKdu4bjj0NNDDQj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'department.service/' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@department',
        'controller' => 'App\\Http\\Controllers\\FrontController@department',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'department.service/',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services/' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/services/{service}/{subservice}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@departmentdetail',
        'controller' => 'App\\Http\\Controllers\\FrontController@departmentdetail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'services/',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rz3kPQILqSHcxBsX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/doctorlist',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@doctorlist',
        'controller' => 'App\\Http\\Controllers\\FrontController@doctorlist',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::rz3kPQILqSHcxBsX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EPN1u0DyHMTvKDup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@gallery',
        'controller' => 'App\\Http\\Controllers\\FrontController@gallery',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::EPN1u0DyHMTvKDup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VkrDtjmpk0KfonoU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/contact-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@contact_us',
        'controller' => 'App\\Http\\Controllers\\FrontController@contact_us',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::VkrDtjmpk0KfonoU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kmK7Ha8ORv8Ojenw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale}/savecontact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@savecontact',
        'controller' => 'App\\Http\\Controllers\\FrontController@savecontact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::kmK7Ha8ORv8Ojenw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a0WXva9js68lonxb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale}/savesubscribe/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@savesubscribe',
        'controller' => 'App\\Http\\Controllers\\FrontController@savesubscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::a0WXva9js68lonxb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::q4fEwdBYGfTTShDh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale}/pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@pricing',
        'controller' => 'App\\Http\\Controllers\\FrontController@pricing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::q4fEwdBYGfTTShDh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UbLN3eEQ7sjm4wzH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale}/termcondition',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@termcondition',
        'controller' => 'App\\Http\\Controllers\\FrontController@termcondition',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::UbLN3eEQ7sjm4wzH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KVvUEg4yRL81lcDC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale}/privacypolicy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@privacypolicy',
        'controller' => 'App\\Http\\Controllers\\FrontController@privacypolicy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::KVvUEg4yRL81lcDC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XXC7MZFDclCphYv6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/postregister',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@postregister',
        'controller' => 'App\\Http\\Controllers\\FrontController@postregister',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::XXC7MZFDclCphYv6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4u7tv2tcvZ5KkBLG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/postlogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@postlogin',
        'controller' => 'App\\Http\\Controllers\\FrontController@postlogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::4u7tv2tcvZ5KkBLG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9I3Q24QBnXlKY5dl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/userlogout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@userlogout',
        'controller' => 'App\\Http\\Controllers\\FrontController@userlogout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::9I3Q24QBnXlKY5dl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iJYYgDDGBQWRGhGT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/postforgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@postforgot',
        'controller' => 'App\\Http\\Controllers\\FrontController@postforgot',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::iJYYgDDGBQWRGhGT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'doctor.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/doctordetails/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@doctordetails',
        'controller' => 'App\\Http\\Controllers\\FrontController@doctordetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'doctor.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b61SDfjfPSVQ9aQC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale}/addreview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@addreview',
        'controller' => 'App\\Http\\Controllers\\FrontController@addreview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::b61SDfjfPSVQ9aQC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0lDLohwCPHwxGBy8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/mediaupload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@mediaupload',
        'controller' => 'App\\Http\\Controllers\\FrontController@mediaupload',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::0lDLohwCPHwxGBy8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rQteh8dyj9hm2BQ2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/deletemedia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@deletemedia',
        'controller' => 'App\\Http\\Controllers\\FrontController@deletemedia',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::rQteh8dyj9hm2BQ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WohoBFjNC4UkwDIS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/myaccount',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@myaccount',
        'controller' => 'App\\Http\\Controllers\\FrontController@myaccount',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::WohoBFjNC4UkwDIS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IybICBNYrE8Rmy2Q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@updateprofile',
        'controller' => 'App\\Http\\Controllers\\FrontController@updateprofile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::IybICBNYrE8Rmy2Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YtTM3tvJzyPJxsqO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/checkcurrentpwd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@checkcurrentpwd',
        'controller' => 'App\\Http\\Controllers\\FrontController@checkcurrentpwd',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::YtTM3tvJzyPJxsqO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fXot9i4WPQ7PH2kI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale}/changepasswords',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@changepasswords',
        'controller' => 'App\\Http\\Controllers\\FrontController@changepasswords',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::fXot9i4WPQ7PH2kI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qy825WC9yFlRkqkG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/settimezone/{time}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@settimezone',
        'controller' => 'App\\Http\\Controllers\\HomeController@settimezone',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::Qy825WC9yFlRkqkG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lNGgRNIE5EbvH4q9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/subscription/{package_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@showorderpage',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@showorderpage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::lNGgRNIE5EbvH4q9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xtl2oF98SC5ZB6nz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/userlogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@userlogin',
        'controller' => 'App\\Http\\Controllers\\FrontController@userlogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::Xtl2oF98SC5ZB6nz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qhVGnCeXFd2sE5M5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/paymentsubscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@paymentsubscription',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@paymentsubscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::qhVGnCeXFd2sE5M5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TScOmEaIeRJl6gU5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/resetpassword/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@resetpwd',
        'controller' => 'App\\Http\\Controllers\\FrontController@resetpwd',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::TScOmEaIeRJl6gU5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HFBB8n4fqpMjamM6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale}/resetnewpwd',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@resetpassword',
        'controller' => 'App\\Http\\Controllers\\FrontController@resetpassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::HFBB8n4fqpMjamM6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S40xcCidLCgKAfSH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/getcurrenttime/{offset}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@getcurrenttime',
        'controller' => 'App\\Http\\Controllers\\HomeController@getcurrenttime',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::S40xcCidLCgKAfSH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C16F4ujuVEknzCo5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/blog-detail/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@blogdetails',
        'controller' => 'App\\Http\\Controllers\\FrontController@blogdetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'generated::C16F4ujuVEknzCo5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshop-booking' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/workshop-booking',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\FrontController@workshopBooking',
        'controller' => 'App\\Http\\Controllers\\FrontController@workshopBooking',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/{locale}',
        'where' => 
        array (
        ),
        'as' => 'workshop-booking',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JnlMz67fMeJJxK2O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@showlogin',
        'controller' => 'App\\Http\\Controllers\\HomeController@showlogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JnlMz67fMeJJxK2O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::38zMjMJXbWPkzxMt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/postlogin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@postlogin',
        'controller' => 'App\\Http\\Controllers\\HomeController@postlogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::38zMjMJXbWPkzxMt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@showdashboard',
        'controller' => 'App\\Http\\Controllers\\HomeController@showdashboard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FuEnH2EI7rssKQpH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@logout',
        'controller' => 'App\\Http\\Controllers\\HomeController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::FuEnH2EI7rssKQpH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NkWfQ08iFwwOLMrE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/settimezone/{time}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@settimezone',
        'controller' => 'App\\Http\\Controllers\\HomeController@settimezone',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NkWfQ08iFwwOLMrE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'department' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@index',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'department',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Hzxcnegyg8gWrCN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/add-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@create',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4Hzxcnegyg8gWrCN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cVyKP9jCT4XvUS11' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/create-department',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@store',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::cVyKP9jCT4XvUS11',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Lye1ngD3Xo2o77x0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/savedepartment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@saveddepartment',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@saveddepartment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Lye1ngD3Xo2o77x0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aBDBrSsviRPJjUb3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/updatedepartment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@updatedepartment',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@updatedepartment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::aBDBrSsviRPJjUb3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yIQwyI2Ahd5YbsGQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/deletedepartment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@deletedepartment',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@deletedepartment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yIQwyI2Ahd5YbsGQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'departmentservice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/departmentservice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@departmentservice',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@departmentservice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'departmentservice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bcrzlL13semmOCPr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/savedepartmentservice/{dept_id}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@savedepartmentservice',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@savedepartmentservice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bcrzlL13semmOCPr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wbn7cwCNWRPpk1Ko' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/updatedepartmentservice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@updatedepartmentservice',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@updatedepartmentservice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wbn7cwCNWRPpk1Ko',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5SaIjBeX8laQXx9E' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/deletedepartmentservice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DepartmentController@deletedepartmentservice',
        'controller' => 'App\\Http\\Controllers\\DepartmentController@deletedepartmentservice',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::5SaIjBeX8laQXx9E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'doctor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/doctor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@index',
        'controller' => 'App\\Http\\Controllers\\DoctorController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'doctor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NJIPF7eV7XRb33TS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/savedoctor/{id}/{tab_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@savedoctor',
        'controller' => 'App\\Http\\Controllers\\DoctorController@savedoctor',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NJIPF7eV7XRb33TS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PcPESJwYhxXwl94X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/updatedoctorprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@updatedoctorprofile',
        'controller' => 'App\\Http\\Controllers\\DoctorController@updatedoctorprofile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::PcPESJwYhxXwl94X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UPphtrdXrZAVSFIO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/deletedoctor/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@deletedoctor',
        'controller' => 'App\\Http\\Controllers\\DoctorController@deletedoctor',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UPphtrdXrZAVSFIO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tBsbS3tqarr97V5R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/updateworkinghours',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@updateworkinghours',
        'controller' => 'App\\Http\\Controllers\\DoctorController@updateworkinghours',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tBsbS3tqarr97V5R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dTvTOfjtCHohAxqB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/editprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@editprofile',
        'controller' => 'App\\Http\\Controllers\\HomeController@editprofile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dTvTOfjtCHohAxqB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zFzm5McjRjdEtoN0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/updateprofile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@updateprofile',
        'controller' => 'App\\Http\\Controllers\\HomeController@updateprofile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zFzm5McjRjdEtoN0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changepassword' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/changepassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@changepassword',
        'controller' => 'App\\Http\\Controllers\\HomeController@changepassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'changepassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::csKmi3r8SSyqfC4e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/samepwd/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@check_password_same',
        'controller' => 'App\\Http\\Controllers\\HomeController@check_password_same',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::csKmi3r8SSyqfC4e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6YyVQubCHUV4f7rp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/updatepassword',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@updatepassword',
        'controller' => 'App\\Http\\Controllers\\HomeController@updatepassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6YyVQubCHUV4f7rp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'notification.index',
        'uses' => 'App\\Http\\Controllers\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\NotificationController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/notification/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'notification.create',
        'uses' => 'App\\Http\\Controllers\\NotificationController@create',
        'controller' => 'App\\Http\\Controllers\\NotificationController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'notification.store',
        'uses' => 'App\\Http\\Controllers\\NotificationController@store',
        'controller' => 'App\\Http\\Controllers\\NotificationController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/notification/{notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'notification.show',
        'uses' => 'App\\Http\\Controllers\\NotificationController@show',
        'controller' => 'App\\Http\\Controllers\\NotificationController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/notification/{notification}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'notification.edit',
        'uses' => 'App\\Http\\Controllers\\NotificationController@edit',
        'controller' => 'App\\Http\\Controllers\\NotificationController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => '{locale}/admin/notification/{notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'notification.update',
        'uses' => 'App\\Http\\Controllers\\NotificationController@update',
        'controller' => 'App\\Http\\Controllers\\NotificationController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale}/admin/notification/{notification}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'notification.destroy',
        'uses' => 'App\\Http\\Controllers\\NotificationController@destroy',
        'controller' => 'App\\Http\\Controllers\\NotificationController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2cj2CnLNG8P4RVHl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/savenotification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@savenotification',
        'controller' => 'App\\Http\\Controllers\\NotificationController@savenotification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2cj2CnLNG8P4RVHl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GUtFs4lVMx50Ec9n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/setting/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@showsetting',
        'controller' => 'App\\Http\\Controllers\\NotificationController@showsetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GUtFs4lVMx50Ec9n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qaZJIMNQvm6K2gTU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/savebasicsetting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@savebasicsetting',
        'controller' => 'App\\Http\\Controllers\\NotificationController@savebasicsetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qaZJIMNQvm6K2gTU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b2sltJIBacyWmZbz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/saveserverkey',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@saveserverkey',
        'controller' => 'App\\Http\\Controllers\\NotificationController@saveserverkey',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::b2sltJIBacyWmZbz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JVQcCanKOuWIa96S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/savesitesetting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@savesitesetting',
        'controller' => 'App\\Http\\Controllers\\NotificationController@savesitesetting',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JVQcCanKOuWIa96S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nBznNzHgzNFojw7u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/saveterms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@saveterms',
        'controller' => 'App\\Http\\Controllers\\NotificationController@saveterms',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::nBznNzHgzNFojw7u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qEFIe7A3akX7b6Vt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/saveprivacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@saveprivacy',
        'controller' => 'App\\Http\\Controllers\\NotificationController@saveprivacy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qEFIe7A3akX7b6Vt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Dwwkh5joVsUgkiii' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/saveuploadsection',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@saveuploadsection',
        'controller' => 'App\\Http\\Controllers\\NotificationController@saveuploadsection',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Dwwkh5joVsUgkiii',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zdBT9g7KZdIel9TQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/appointment/{start_date}/{end_date}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\AppointmentController@showappointment',
        'controller' => 'App\\Http\\Controllers\\AppointmentController@showappointment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zdBT9g7KZdIel9TQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'package.index',
        'uses' => 'App\\Http\\Controllers\\PackageController@index',
        'controller' => 'App\\Http\\Controllers\\PackageController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/package/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'package.create',
        'uses' => 'App\\Http\\Controllers\\PackageController@create',
        'controller' => 'App\\Http\\Controllers\\PackageController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/package',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'package.store',
        'uses' => 'App\\Http\\Controllers\\PackageController@store',
        'controller' => 'App\\Http\\Controllers\\PackageController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/package/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'package.show',
        'uses' => 'App\\Http\\Controllers\\PackageController@show',
        'controller' => 'App\\Http\\Controllers\\PackageController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/package/{package}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'package.edit',
        'uses' => 'App\\Http\\Controllers\\PackageController@edit',
        'controller' => 'App\\Http\\Controllers\\PackageController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => '{locale}/admin/package/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'package.update',
        'uses' => 'App\\Http\\Controllers\\PackageController@update',
        'controller' => 'App\\Http\\Controllers\\PackageController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale}/admin/package/{package}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'package.destroy',
        'uses' => 'App\\Http\\Controllers\\PackageController@destroy',
        'controller' => 'App\\Http\\Controllers\\PackageController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HxRLcMlMIYqgCwv6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/savepackage/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@savepackage',
        'controller' => 'App\\Http\\Controllers\\PackageController@savepackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HxRLcMlMIYqgCwv6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T3MhxQysc18CNIA1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/updatepackage',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@updatepackage',
        'controller' => 'App\\Http\\Controllers\\PackageController@updatepackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::T3MhxQysc18CNIA1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MOVLTVTB0oxw1P9l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/deletepackage/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@deletepackage',
        'controller' => 'App\\Http\\Controllers\\PackageController@deletepackage',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::MOVLTVTB0oxw1P9l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TWIMEcvXegdpLkPr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/changesettingstatus/{fields}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@changesettingstatus',
        'controller' => 'App\\Http\\Controllers\\NotificationController@changesettingstatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::TWIMEcvXegdpLkPr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gvbb6eAlzP8DoYPG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@showreview',
        'controller' => 'App\\Http\\Controllers\\DoctorController@showreview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Gvbb6eAlzP8DoYPG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::42mXJ5OYU9oRyBy2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/deletereview/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@deletereview',
        'controller' => 'App\\Http\\Controllers\\DoctorController@deletereview',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::42mXJ5OYU9oRyBy2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BD3rkkc6oBRetLCQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/news',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@shownews',
        'controller' => 'App\\Http\\Controllers\\NotificationController@shownews',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::BD3rkkc6oBRetLCQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tMXInggTTbbzK1Tw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/sennews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\NotificationController@sendnews',
        'controller' => 'App\\Http\\Controllers\\NotificationController@sendnews',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::tMXInggTTbbzK1Tw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pc3uJuZX8iDDPWrU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/contactus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@showcontactus',
        'controller' => 'App\\Http\\Controllers\\HomeController@showcontactus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pc3uJuZX8iDDPWrU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IBBP5I3Bfs36XyMZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@showpatient',
        'controller' => 'App\\Http\\Controllers\\HomeController@showpatient',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IBBP5I3Bfs36XyMZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::53jS4gq9TwoRf6lg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/paymentgateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@getpaymentgateway',
        'controller' => 'App\\Http\\Controllers\\PackageController@getpaymentgateway',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::53jS4gq9TwoRf6lg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M7hWNRHoMCDGEP7j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/editpaymentgateway/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@editpaymentgateway',
        'controller' => 'App\\Http\\Controllers\\PackageController@editpaymentgateway',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::M7hWNRHoMCDGEP7j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mwPINHWeks2ErMnC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/updatepaymentgateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@updatepaymentgateway',
        'controller' => 'App\\Http\\Controllers\\PackageController@updatepaymentgateway',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mwPINHWeks2ErMnC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eGZmcT1TLZ0k8aEu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/changestatuspayment/{pay_id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\PackageController@changestatuspayment',
        'controller' => 'App\\Http\\Controllers\\PackageController@changestatuspayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::eGZmcT1TLZ0k8aEu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y2jsI2QgWOFG7g0A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@showsubscription',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@showsubscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::y2jsI2QgWOFG7g0A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v8J5ajBnd8UapxXz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/changepackagestatus/{status}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\SubscriptionController@changepackagestatus',
        'controller' => 'App\\Http\\Controllers\\SubscriptionController@changepackagestatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::v8J5ajBnd8UapxXz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => '{locale}/admin/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@showchat',
        'controller' => 'App\\Http\\Controllers\\HomeController@showchat',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'chat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'articles.index',
        'uses' => 'App\\Http\\Controllers\\ArticleController@index',
        'controller' => 'App\\Http\\Controllers\\ArticleController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/articles/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'articles.create',
        'uses' => 'App\\Http\\Controllers\\ArticleController@create',
        'controller' => 'App\\Http\\Controllers\\ArticleController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/articles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'articles.store',
        'uses' => 'App\\Http\\Controllers\\ArticleController@store',
        'controller' => 'App\\Http\\Controllers\\ArticleController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'articles.show',
        'uses' => 'App\\Http\\Controllers\\ArticleController@show',
        'controller' => 'App\\Http\\Controllers\\ArticleController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/articles/{article}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'articles.edit',
        'uses' => 'App\\Http\\Controllers\\ArticleController@edit',
        'controller' => 'App\\Http\\Controllers\\ArticleController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => '{locale}/admin/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'articles.update',
        'uses' => 'App\\Http\\Controllers\\ArticleController@update',
        'controller' => 'App\\Http\\Controllers\\ArticleController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'articles.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale}/admin/articles/{article}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'articles.destroy',
        'uses' => 'App\\Http\\Controllers\\ArticleController@destroy',
        'controller' => 'App\\Http\\Controllers\\ArticleController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'blogs.index',
        'uses' => 'App\\Http\\Controllers\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\BlogController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/blogs/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'blogs.create',
        'uses' => 'App\\Http\\Controllers\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\BlogController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'blogs.store',
        'uses' => 'App\\Http\\Controllers\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\BlogController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'blogs.show',
        'uses' => 'App\\Http\\Controllers\\BlogController@show',
        'controller' => 'App\\Http\\Controllers\\BlogController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/blogs/{blog}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'blogs.edit',
        'uses' => 'App\\Http\\Controllers\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\BlogController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => '{locale}/admin/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'blogs.update',
        'uses' => 'App\\Http\\Controllers\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\BlogController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => '{locale}/admin/blogs/{blog}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'as' => 'blogs.destroy',
        'uses' => 'App\\Http\\Controllers\\BlogController@destroy',
        'controller' => 'App\\Http\\Controllers\\BlogController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3ccLWHcfTMSVXbZA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/edit-blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\BlogController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3ccLWHcfTMSVXbZA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2u7deUP3c2d26J63' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/delete-blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@delete',
        'controller' => 'App\\Http\\Controllers\\BlogController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2u7deUP3c2d26J63',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XDNWuQvKTs7uNEXa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/update-blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\BlogController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XDNWuQvKTs7uNEXa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L2z4VOjfha8W7tYw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/show-blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@show',
        'controller' => 'App\\Http\\Controllers\\BlogController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::L2z4VOjfha8W7tYw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'workshops' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/workshops',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\WorkshopController@index',
        'controller' => 'App\\Http\\Controllers\\WorkshopController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'workshops',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NRykQE8j7hqcoZnJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/add-workshop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeSectionController@create',
        'controller' => 'App\\Http\\Controllers\\HomeSectionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::NRykQE8j7hqcoZnJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XCxPYrS5rd2rRnBC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/create-workshop',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeSectionController@store',
        'controller' => 'App\\Http\\Controllers\\HomeSectionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XCxPYrS5rd2rRnBC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XVU2GuwQuGafHSsF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/edit-workshop/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\WorkshopController@edit',
        'controller' => 'App\\Http\\Controllers\\WorkshopController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::XVU2GuwQuGafHSsF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jKGmjWEsVxlGgjig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/update-workshop/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\WorkshopController@update',
        'controller' => 'App\\Http\\Controllers\\WorkshopController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jKGmjWEsVxlGgjig',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uTtwhZHOc7xKcMT8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/delete-workshop/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\WorkshopController@delete',
        'controller' => 'App\\Http\\Controllers\\WorkshopController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uTtwhZHOc7xKcMT8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rooms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/rooms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\RoomController@index',
        'controller' => 'App\\Http\\Controllers\\RoomController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'rooms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QghU46b2DORd9lZd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/add-room',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\RoomController@create',
        'controller' => 'App\\Http\\Controllers\\RoomController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QghU46b2DORd9lZd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ggc84BHzRl6BCfCc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/create-room',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\RoomController@store',
        'controller' => 'App\\Http\\Controllers\\RoomController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Ggc84BHzRl6BCfCc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K4Du3qs5vkpGA8M0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/edit-room/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\RoomController@edit',
        'controller' => 'App\\Http\\Controllers\\RoomController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::K4Du3qs5vkpGA8M0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L0q4PJoYtnk99yFV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/delete-room/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\RoomController@delete',
        'controller' => 'App\\Http\\Controllers\\RoomController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::L0q4PJoYtnk99yFV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7eT9pssP3EaO2PuA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/update-room/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\RoomController@update',
        'controller' => 'App\\Http\\Controllers\\RoomController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7eT9pssP3EaO2PuA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4nfm0raJaEoNepIn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/show-room/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\RoomController@show',
        'controller' => 'App\\Http\\Controllers\\RoomController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::4nfm0raJaEoNepIn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pTUZWqH07olpKHTZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/subscribers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@subscribers',
        'controller' => 'App\\Http\\Controllers\\DoctorController@subscribers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pTUZWqH07olpKHTZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HyZfOi4aV1hqqDaj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/delete-subscriber/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\DoctorController@deleteSubscriber',
        'controller' => 'App\\Http\\Controllers\\DoctorController@deleteSubscriber',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::HyZfOi4aV1hqqDaj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\FaqController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'faqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YcyMkgOYKRD1weB5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/add-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@create',
        'controller' => 'App\\Http\\Controllers\\FaqController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::YcyMkgOYKRD1weB5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VtkqqTJNPOPuTSKT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/create-faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@store',
        'controller' => 'App\\Http\\Controllers\\FaqController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VtkqqTJNPOPuTSKT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xE1vuTKflL9n4XTb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/edit-faq/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@edit',
        'controller' => 'App\\Http\\Controllers\\FaqController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::xE1vuTKflL9n4XTb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sSmeam5EoKgRtaw9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/delete-faq/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@delete',
        'controller' => 'App\\Http\\Controllers\\FaqController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sSmeam5EoKgRtaw9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sYv6H27eCffp2qDX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/update-faq/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@update',
        'controller' => 'App\\Http\\Controllers\\FaqController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::sYv6H27eCffp2qDX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IN2gQ7eFEakEnleB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/show-faq/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\FaqController@show',
        'controller' => 'App\\Http\\Controllers\\FaqController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::IN2gQ7eFEakEnleB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'events' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\EventController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'events',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CmHEs5YfQwxbMsqF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/add-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@create',
        'controller' => 'App\\Http\\Controllers\\EventController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CmHEs5YfQwxbMsqF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fr2YK08eIA4QAMnE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/create-event',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@store',
        'controller' => 'App\\Http\\Controllers\\EventController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Fr2YK08eIA4QAMnE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UUni7jIxZobz3eVD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/edit-event/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@edit',
        'controller' => 'App\\Http\\Controllers\\EventController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UUni7jIxZobz3eVD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nSmyzBaevY7MCBLO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/delete-event/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@destroy',
        'controller' => 'App\\Http\\Controllers\\EventController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::nSmyzBaevY7MCBLO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eLtERPOxRrDK4Ix7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/update-event/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\EventController@update',
        'controller' => 'App\\Http\\Controllers\\EventController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::eLtERPOxRrDK4Ix7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@index',
        'controller' => 'App\\Http\\Controllers\\AboutController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mn0fMQEkSs4SAWJV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/add-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@create',
        'controller' => 'App\\Http\\Controllers\\AboutController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mn0fMQEkSs4SAWJV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jfAXsA4lVhKibEdm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/create-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@store',
        'controller' => 'App\\Http\\Controllers\\AboutController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jfAXsA4lVhKibEdm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JHjYR1UON1MkA5le' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/edit-about/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@edit',
        'controller' => 'App\\Http\\Controllers\\AboutController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::JHjYR1UON1MkA5le',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jMEnEoeDPNAMxNkw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/update-about/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@update',
        'controller' => 'App\\Http\\Controllers\\AboutController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jMEnEoeDPNAMxNkw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'women' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/women',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\WomenEmpowermentController@index',
        'controller' => 'App\\Http\\Controllers\\WomenEmpowermentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'women',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6iJp8OXPOkBlNWOR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/add-women',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\WomenEmpowermentController@create',
        'controller' => 'App\\Http\\Controllers\\WomenEmpowermentController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::6iJp8OXPOkBlNWOR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a6L7Lt3E6u2EI5zQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/create-women',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\WomenEmpowermentController@store',
        'controller' => 'App\\Http\\Controllers\\WomenEmpowermentController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::a6L7Lt3E6u2EI5zQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::39rcWJzS7b2uqDMt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/edit-women/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\WomenEmpowermentController@edit',
        'controller' => 'App\\Http\\Controllers\\WomenEmpowermentController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::39rcWJzS7b2uqDMt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mXKz41lMqpwPOFFq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/update-women/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\WomenEmpowermentController@update',
        'controller' => 'App\\Http\\Controllers\\WomenEmpowermentController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mXKz41lMqpwPOFFq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home-section' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/home-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeSectionController@index',
        'controller' => 'App\\Http\\Controllers\\HomeSectionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'home-section',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gUkoVP8Y4Z0Rzp1g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/add-home-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeSectionController@create',
        'controller' => 'App\\Http\\Controllers\\HomeSectionController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::gUkoVP8Y4Z0Rzp1g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QdEIyLtHfvvCGv2g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/create-home-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeSectionController@store',
        'controller' => 'App\\Http\\Controllers\\HomeSectionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QdEIyLtHfvvCGv2g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QgDtLutCEasEnB0f' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '{locale}/admin/edit-home/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeSectionController@edit',
        'controller' => 'App\\Http\\Controllers\\HomeSectionController@edit',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::QgDtLutCEasEnB0f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2gksFrnMkjg9CFfG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/admin/update-home/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'setAdminLocale',
          2 => 'admincheckexiste',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeSectionController@update',
        'controller' => 'App\\Http\\Controllers\\HomeSectionController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '{locale}/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2gksFrnMkjg9CFfG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
