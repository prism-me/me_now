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
            '_route' => 'generated::1o21DkaE9GZ5NZM4',
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
            '_route' => 'generated::oZBUj95UpbG5Vxvq',
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
            '_route' => 'generated::OM8SWlcV9O1MwjVw',
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
            '_route' => 'generated::OjzxMdVTyTD1WGSq',
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
            '_route' => 'generated::2Rhp7O6qnfQLUYdy',
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
            '_route' => 'generated::DYPIkEtae0k8Mgsw',
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
            '_route' => 'generated::k3TFLO8ERyD0ABH6',
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
            '_route' => 'generated::8oV6MRbgGNh3328n',
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
            '_route' => 'generated::wmToG8bOlY0yuUUJ',
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
            '_route' => 'addreview',
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
            '_route' => 'generated::PNYdbXvBXGjMpvbO',
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
            '_route' => 'generated::IzllAMs41EpNdtmv',
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
            '_route' => 'generated::cpbeqWcjrO3d0220',
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
            '_route' => 'generated::ueEZeEp9x2wKAweD',
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
            '_route' => 'generated::7Pbf9vqnZMSTMZlm',
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
            '_route' => 'generated::0H8rgeYv4E7Q2JGh',
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
            '_route' => 'generated::YTDM15PBLV4UT9sI',
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
            '_route' => 'generated::ULNGc8UvnmHFFVEX',
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
            '_route' => 'generated::CgdXURANYkqimMnC',
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
            '_route' => 'generated::e73PlI6GQzUlYAyU',
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
            '_route' => 'generated::RRQj01bzBfkOduSC',
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
            '_route' => 'generated::O6iK92EzUBhRRHxS',
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
            '_route' => 'generated::OmnODgASdeFBHCHy',
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
            '_route' => 'generated::EC68k3aUfCgrp2Nj',
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
            '_route' => 'generated::55UErtsHN27Ibyl4',
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
            '_route' => 'generated::cAaxtd8f5dPQZE8t',
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
            '_route' => 'generated::ko5AD3qhcXV7oCxV',
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
            '_route' => 'generated::ZbjemqxF3VVgihTh',
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
            '_route' => 'generated::C8pHccymvVpqLdRD',
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
            '_route' => 'generated::u99gyG3ZZZrkDNe5',
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
            '_route' => 'generated::lKXjsodrIpV5vt64',
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
            '_route' => 'generated::cTFUtGp20TwOwgTu',
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
            '_route' => 'generated::llnqqamaTJi6IiZZ',
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
            '_route' => 'generated::5DDEgFxuFZJ95htK',
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
            '_route' => 'generated::Hkuz8Obsahr4EZcj',
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
            '_route' => 'generated::0YAmfdrIvc3KuRu8',
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
            '_route' => 'generated::Yvkdc6IjbaVLsT2r',
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
            '_route' => 'generated::Eyj9fg1C0dUYI5qa',
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
            '_route' => 'generated::mkviFJgwsxCVSJ9P',
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
            '_route' => 'generated::fzNnb7I3Knyu4xjA',
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
            '_route' => 'generated::tCTiT24m4xGPCCze',
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
            '_route' => 'generated::YMt0XzLYTz1UalBR',
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
            '_route' => 'generated::C7cG28n7ViVCTbyA',
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
            '_route' => 'generated::gd8XpABZ6rarKsUv',
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
            '_route' => 'generated::Yk1Y9mK2Xg0ZJviE',
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
            '_route' => 'generated::cVIuPyuXvykdYzcH',
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
            '_route' => 'generated::uvTnTAPhuI88rCUb',
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
            '_route' => 'generated::l8x5SfLt2UaZXpLC',
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
            '_route' => 'generated::6pMtMiL9pxbj9djT',
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
            '_route' => 'generated::smkYX0xTHX8EhGyH',
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
            '_route' => 'generated::fKwj8jbKfS9ojEwa',
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
            '_route' => 'generated::idy7uERe0pZ7hlJl',
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
            '_route' => 'generated::OoEARWe867ajorDN',
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
            '_route' => 'generated::UnlgekoGrFPkCPWs',
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
            '_route' => 'generated::6oNqBhH2H7RAlmH5',
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
            '_route' => 'generated::sAkuuwa4Y7Xxt2SQ',
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
            '_route' => 'generated::A2nYynrszD2mdVfJ',
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
            '_route' => 'generated::5RQpnF0vw3duMNdZ',
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
            '_route' => 'generated::FWKcVPJjhaE3J3W0',
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
            '_route' => 'generated::NCW4zXY3DtMTSNOM',
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
            '_route' => 'generated::UgbOiZlWKiFs2zBG',
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
            '_route' => 'generated::p6UCdxCLG8oMLLR0',
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
            '_route' => 'generated::88imFTShWqPqFwOj',
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
            '_route' => 'generated::W9aYav3Clh20dlW7',
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
            '_route' => 'generated::CjbnQfkO1r1ewSy3',
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
            '_route' => 'generated::o5cV1ybw2bqPINI4',
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
            '_route' => 'generated::1sBMYG8YcVy8Sy8P',
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
            '_route' => 'generated::jA1KbbReJMLQGKs4',
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
            '_route' => 'generated::sOrv6ZZEltpzhd1X',
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
            '_route' => 'generated::KdIwvX7G9iM24yTW',
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
            '_route' => 'generated::Vnq4sP8FoysJY9Sm',
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
            '_route' => 'generated::Gz9NEaa7Csiw8L7h',
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
            '_route' => 'generated::7xVEjZn7taXDPYZ2',
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
            '_route' => 'generated::HebKWFITd1ega0je',
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
            '_route' => 'generated::35DZ4NZVj5V4A7C9',
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
            '_route' => 'generated::LCbK9eBpLZ0USgZ3',
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
            '_route' => 'generated::J4KlK1fra4VoP6lM',
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
            '_route' => 'generated::8XGD7odQrGNlXCpX',
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
            '_route' => 'generated::gVs7VaeUvYzC8AGU',
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
            '_route' => 'generated::rXPowUj831utc2Js',
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
            '_route' => 'generated::GepM1As0ZAQFfu16',
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
            '_route' => 'generated::qzSmI6jtN3D8FIFl',
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
            '_route' => 'generated::BVOfARXKcHPXLFiG',
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
            '_route' => 'generated::V9DSYkrvwOzSsjdq',
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
            '_route' => 'generated::wOVISHTJb4T79Q9O',
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
            '_route' => 'generated::67SdoUidNdktbxjb',
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
            '_route' => 'generated::73K8fAmn72iiMW6k',
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
            '_route' => 'generated::cWKP8Rm2VuZX9AkA',
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
            '_route' => 'generated::qFVh8ppNGvjNAM2C',
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
            '_route' => 'generated::w5YEuvSpxMe3RkEU',
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
            '_route' => 'generated::n8v4IKXTXyxPIGWz',
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
            '_route' => 'generated::K6ymsYM4Qhqi4RII',
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
            '_route' => 'generated::Js4OQL1tEB64vkyB',
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
            '_route' => 'generated::gWRiAsiP86PqaR2k',
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
            '_route' => 'generated::wnKXyflAGPaHB85e',
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
            '_route' => 'generated::wWmOCuKggiSYc7eu',
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
            '_route' => 'generated::r7HKiJM45hBQ0plR',
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
            '_route' => 'generated::7IuVLiIC1yJMVGRC',
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
            '_route' => 'generated::AMYBqeX0MkQzfCle',
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
            '_route' => 'generated::im5vHzSIHvDP85j8',
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
            '_route' => 'generated::PvI4pibWKYIl6vg7',
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
            '_route' => 'generated::q8laYrKMHMeGBc7k',
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
            '_route' => 'generated::qRPMTrcvRqYLDcn0',
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
            '_route' => 'generated::sB8lQvgmpEs1S7uX',
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
            '_route' => 'generated::PMfxX3CXwPdikE3r',
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
            '_route' => 'generated::NBIbwTw0LoPW0QNt',
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
            '_route' => 'generated::cIkYp2iZnBdKIs0X',
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
            '_route' => 'rooms/',
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
            '_route' => 'generated::0VmVDcDYooBPE5Wo',
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
            '_route' => 'generated::VSqOHfQDCwIqYQP1',
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
            '_route' => 'generated::KDyDcmxvwDJFs218',
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
            '_route' => 'generated::tpk2Td3BhPB2TKae',
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
            '_route' => 'generated::iL3UStjK1kGC72d9',
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
            '_route' => 'generated::tdmWTJiX2GMQcypL',
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
            '_route' => 'generated::CuJxxZBxHerOwNJO',
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
            '_route' => 'generated::8juj0BNCAcUYKoNB',
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
            '_route' => 'generated::6JcKpecD6SNgxHcR',
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
            '_route' => 'generated::5wc5FCi5QsYr4GGX',
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
            '_route' => 'generated::8hNGaDV4PywGMzKt',
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
            '_route' => 'generated::9NVLppeErx2579Tv',
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
            '_route' => 'generated::0yiuQWXPpIQEvfG3',
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
            '_route' => 'generated::H1Ayo473IBj19PdU',
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
            '_route' => 'generated::mK1JaRkrSImMKx35',
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
            '_route' => 'generated::1Vu1evdBK58MU54A',
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
            '_route' => 'generated::Ck5iwB8wdBUnqkka',
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
            '_route' => 'generated::dUVGAaUNfZs5UPaV',
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
            '_route' => 'generated::qiGreiuv3Hs9kZ6J',
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
            '_route' => 'generated::VBmoh3PAcAtwRyzt',
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
            '_route' => 'generated::k1l6FZYpaezs9esx',
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
            '_route' => 'generated::qJlPiKoA5i5NJ2fn',
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
            '_route' => 'generated::trNINf8y5YPhXAOb',
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
    'generated::1o21DkaE9GZ5NZM4' => 
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
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000325365720000000053bbaf41";}";s:4:"hash";s:44:"PEChsXi5IxkO1sxQoWk2fKQK/x+wPw4e5W/9QUYlLrs=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1o21DkaE9GZ5NZM4',
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
    'generated::oZBUj95UpbG5Vxvq' => 
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
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:394:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:175:"function() {
    // Artisan::call(\'optimize\');
        $lang = \\Session::get(\'locale\') == null ? \'en\' : \\Session::get(\'locale\');
        return \\redirect("/".$lang);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000325365700000000053bbaf41";}";s:4:"hash";s:44:"Q78qLFa1NHVwaPrvntLH+hqFNupsvmjFSyK9ordQ8xs=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::oZBUj95UpbG5Vxvq',
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
    'generated::8oV6MRbgGNh3328n' => 
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
        'as' => 'generated::8oV6MRbgGNh3328n',
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
    'generated::OM8SWlcV9O1MwjVw' => 
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
        'as' => 'generated::OM8SWlcV9O1MwjVw',
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
    'generated::OjzxMdVTyTD1WGSq' => 
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
        'as' => 'generated::OjzxMdVTyTD1WGSq',
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
    'generated::2Rhp7O6qnfQLUYdy' => 
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
        'as' => 'generated::2Rhp7O6qnfQLUYdy',
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
    'generated::DYPIkEtae0k8Mgsw' => 
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
        'as' => 'generated::DYPIkEtae0k8Mgsw',
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
    'generated::k3TFLO8ERyD0ABH6' => 
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
        'as' => 'generated::k3TFLO8ERyD0ABH6',
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
    'generated::trNINf8y5YPhXAOb' => 
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
        'as' => 'generated::trNINf8y5YPhXAOb',
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
    'generated::wWmOCuKggiSYc7eu' => 
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
        'as' => 'generated::wWmOCuKggiSYc7eu',
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
    'generated::AMYBqeX0MkQzfCle' => 
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
        'as' => 'generated::AMYBqeX0MkQzfCle',
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
    'generated::PMfxX3CXwPdikE3r' => 
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
        'as' => 'generated::PMfxX3CXwPdikE3r',
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
    'generated::PvI4pibWKYIl6vg7' => 
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
        'as' => 'generated::PvI4pibWKYIl6vg7',
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
    'generated::NBIbwTw0LoPW0QNt' => 
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
        'as' => 'generated::NBIbwTw0LoPW0QNt',
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
    'generated::cIkYp2iZnBdKIs0X' => 
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
        'as' => 'generated::cIkYp2iZnBdKIs0X',
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
    'rooms/' => 
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
        'as' => 'rooms/',
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
    'generated::KDyDcmxvwDJFs218' => 
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
        'as' => 'generated::KDyDcmxvwDJFs218',
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
    'generated::7IuVLiIC1yJMVGRC' => 
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
        'as' => 'generated::7IuVLiIC1yJMVGRC',
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
    'generated::wmToG8bOlY0yuUUJ' => 
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
        'as' => 'generated::wmToG8bOlY0yuUUJ',
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
    'generated::tdmWTJiX2GMQcypL' => 
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
        'as' => 'generated::tdmWTJiX2GMQcypL',
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
    'generated::iL3UStjK1kGC72d9' => 
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
        'as' => 'generated::iL3UStjK1kGC72d9',
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
    'generated::8juj0BNCAcUYKoNB' => 
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
        'as' => 'generated::8juj0BNCAcUYKoNB',
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
    'generated::q8laYrKMHMeGBc7k' => 
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
        'as' => 'generated::q8laYrKMHMeGBc7k',
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
    'generated::qRPMTrcvRqYLDcn0' => 
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
        'as' => 'generated::qRPMTrcvRqYLDcn0',
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
    'generated::8hNGaDV4PywGMzKt' => 
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
        'as' => 'generated::8hNGaDV4PywGMzKt',
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
    'generated::Ck5iwB8wdBUnqkka' => 
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
        'as' => 'generated::Ck5iwB8wdBUnqkka',
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
    'generated::9NVLppeErx2579Tv' => 
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
        'as' => 'generated::9NVLppeErx2579Tv',
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
    'generated::0yiuQWXPpIQEvfG3' => 
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
        'as' => 'generated::0yiuQWXPpIQEvfG3',
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
    'generated::H1Ayo473IBj19PdU' => 
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
        'as' => 'generated::H1Ayo473IBj19PdU',
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
    'generated::dUVGAaUNfZs5UPaV' => 
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
        'as' => 'generated::dUVGAaUNfZs5UPaV',
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
    'generated::mK1JaRkrSImMKx35' => 
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
        'as' => 'generated::mK1JaRkrSImMKx35',
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
    'addreview' => 
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
        'as' => 'addreview',
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
    'generated::k1l6FZYpaezs9esx' => 
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
        'as' => 'generated::k1l6FZYpaezs9esx',
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
    'generated::CuJxxZBxHerOwNJO' => 
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
        'as' => 'generated::CuJxxZBxHerOwNJO',
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
    'generated::qJlPiKoA5i5NJ2fn' => 
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
        'as' => 'generated::qJlPiKoA5i5NJ2fn',
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
    'generated::VBmoh3PAcAtwRyzt' => 
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
        'as' => 'generated::VBmoh3PAcAtwRyzt',
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
    'generated::6JcKpecD6SNgxHcR' => 
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
        'as' => 'generated::6JcKpecD6SNgxHcR',
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
    'generated::5wc5FCi5QsYr4GGX' => 
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
        'as' => 'generated::5wc5FCi5QsYr4GGX',
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
    'generated::im5vHzSIHvDP85j8' => 
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
        'as' => 'generated::im5vHzSIHvDP85j8',
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
    'generated::sB8lQvgmpEs1S7uX' => 
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
        'as' => 'generated::sB8lQvgmpEs1S7uX',
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
    'generated::qiGreiuv3Hs9kZ6J' => 
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
        'as' => 'generated::qiGreiuv3Hs9kZ6J',
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
    'generated::1Vu1evdBK58MU54A' => 
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
        'as' => 'generated::1Vu1evdBK58MU54A',
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
    'generated::0VmVDcDYooBPE5Wo' => 
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
        'as' => 'generated::0VmVDcDYooBPE5Wo',
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
    'generated::VSqOHfQDCwIqYQP1' => 
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
        'as' => 'generated::VSqOHfQDCwIqYQP1',
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
    'generated::tpk2Td3BhPB2TKae' => 
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
        'as' => 'generated::tpk2Td3BhPB2TKae',
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
    'generated::r7HKiJM45hBQ0plR' => 
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
        'as' => 'generated::r7HKiJM45hBQ0plR',
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
    'generated::PNYdbXvBXGjMpvbO' => 
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
        'as' => 'generated::PNYdbXvBXGjMpvbO',
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
    'generated::IzllAMs41EpNdtmv' => 
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
        'as' => 'generated::IzllAMs41EpNdtmv',
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
    'generated::cAaxtd8f5dPQZE8t' => 
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
        'as' => 'generated::cAaxtd8f5dPQZE8t',
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
    'generated::ko5AD3qhcXV7oCxV' => 
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
        'as' => 'generated::ko5AD3qhcXV7oCxV',
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
    'generated::uvTnTAPhuI88rCUb' => 
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
        'as' => 'generated::uvTnTAPhuI88rCUb',
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
    'generated::sAkuuwa4Y7Xxt2SQ' => 
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
        'as' => 'generated::sAkuuwa4Y7Xxt2SQ',
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
    'generated::u99gyG3ZZZrkDNe5' => 
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
        'as' => 'generated::u99gyG3ZZZrkDNe5',
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
    'generated::jA1KbbReJMLQGKs4' => 
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
        'as' => 'generated::jA1KbbReJMLQGKs4',
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
    'generated::7Pbf9vqnZMSTMZlm' => 
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
        'as' => 'generated::7Pbf9vqnZMSTMZlm',
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
    'generated::lKXjsodrIpV5vt64' => 
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
        'as' => 'generated::lKXjsodrIpV5vt64',
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
    'generated::sOrv6ZZEltpzhd1X' => 
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
        'as' => 'generated::sOrv6ZZEltpzhd1X',
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
    'generated::0H8rgeYv4E7Q2JGh' => 
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
        'as' => 'generated::0H8rgeYv4E7Q2JGh',
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
    'generated::cTFUtGp20TwOwgTu' => 
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
        'as' => 'generated::cTFUtGp20TwOwgTu',
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
    'generated::KdIwvX7G9iM24yTW' => 
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
        'as' => 'generated::KdIwvX7G9iM24yTW',
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
    'generated::YTDM15PBLV4UT9sI' => 
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
        'as' => 'generated::YTDM15PBLV4UT9sI',
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
    'generated::Vnq4sP8FoysJY9Sm' => 
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
        'as' => 'generated::Vnq4sP8FoysJY9Sm',
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
    'generated::V9DSYkrvwOzSsjdq' => 
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
        'as' => 'generated::V9DSYkrvwOzSsjdq',
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
    'generated::Gz9NEaa7Csiw8L7h' => 
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
        'as' => 'generated::Gz9NEaa7Csiw8L7h',
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
    'generated::tCTiT24m4xGPCCze' => 
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
        'as' => 'generated::tCTiT24m4xGPCCze',
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
    'generated::7xVEjZn7taXDPYZ2' => 
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
        'as' => 'generated::7xVEjZn7taXDPYZ2',
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
    'generated::llnqqamaTJi6IiZZ' => 
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
        'as' => 'generated::llnqqamaTJi6IiZZ',
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
    'generated::ZbjemqxF3VVgihTh' => 
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
        'as' => 'generated::ZbjemqxF3VVgihTh',
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
    'generated::5DDEgFxuFZJ95htK' => 
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
        'as' => 'generated::5DDEgFxuFZJ95htK',
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
    'generated::Hkuz8Obsahr4EZcj' => 
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
        'as' => 'generated::Hkuz8Obsahr4EZcj',
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
    'generated::0YAmfdrIvc3KuRu8' => 
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
        'as' => 'generated::0YAmfdrIvc3KuRu8',
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
    'generated::Yvkdc6IjbaVLsT2r' => 
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
        'as' => 'generated::Yvkdc6IjbaVLsT2r',
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
    'generated::Eyj9fg1C0dUYI5qa' => 
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
        'as' => 'generated::Eyj9fg1C0dUYI5qa',
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
    'generated::fzNnb7I3Knyu4xjA' => 
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
        'as' => 'generated::fzNnb7I3Knyu4xjA',
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
    'generated::6oNqBhH2H7RAlmH5' => 
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
        'as' => 'generated::6oNqBhH2H7RAlmH5',
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
    'generated::mkviFJgwsxCVSJ9P' => 
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
        'as' => 'generated::mkviFJgwsxCVSJ9P',
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
    'generated::HebKWFITd1ega0je' => 
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
        'as' => 'generated::HebKWFITd1ega0je',
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
    'generated::ULNGc8UvnmHFFVEX' => 
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
        'as' => 'generated::ULNGc8UvnmHFFVEX',
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
    'generated::CjbnQfkO1r1ewSy3' => 
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
        'as' => 'generated::CjbnQfkO1r1ewSy3',
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
    'generated::wnKXyflAGPaHB85e' => 
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
        'as' => 'generated::wnKXyflAGPaHB85e',
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
    'generated::CgdXURANYkqimMnC' => 
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
        'as' => 'generated::CgdXURANYkqimMnC',
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
    'generated::gWRiAsiP86PqaR2k' => 
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
        'as' => 'generated::gWRiAsiP86PqaR2k',
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
    'generated::C8pHccymvVpqLdRD' => 
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
        'as' => 'generated::C8pHccymvVpqLdRD',
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
    'generated::1sBMYG8YcVy8Sy8P' => 
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
        'as' => 'generated::1sBMYG8YcVy8Sy8P',
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
    'generated::cpbeqWcjrO3d0220' => 
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
        'as' => 'generated::cpbeqWcjrO3d0220',
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
    'generated::ueEZeEp9x2wKAweD' => 
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
        'as' => 'generated::ueEZeEp9x2wKAweD',
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
    'generated::wOVISHTJb4T79Q9O' => 
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
        'as' => 'generated::wOVISHTJb4T79Q9O',
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
    'generated::35DZ4NZVj5V4A7C9' => 
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
        'as' => 'generated::35DZ4NZVj5V4A7C9',
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
    'generated::o5cV1ybw2bqPINI4' => 
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
        'as' => 'generated::o5cV1ybw2bqPINI4',
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
    'generated::YMt0XzLYTz1UalBR' => 
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
        'as' => 'generated::YMt0XzLYTz1UalBR',
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
    'generated::W9aYav3Clh20dlW7' => 
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
        'as' => 'generated::W9aYav3Clh20dlW7',
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
    'generated::67SdoUidNdktbxjb' => 
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
        'as' => 'generated::67SdoUidNdktbxjb',
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
    'generated::e73PlI6GQzUlYAyU' => 
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
        'as' => 'generated::e73PlI6GQzUlYAyU',
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
    'generated::LCbK9eBpLZ0USgZ3' => 
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
        'as' => 'generated::LCbK9eBpLZ0USgZ3',
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
    'generated::gd8XpABZ6rarKsUv' => 
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
        'as' => 'generated::gd8XpABZ6rarKsUv',
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
    'generated::l8x5SfLt2UaZXpLC' => 
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
        'as' => 'generated::l8x5SfLt2UaZXpLC',
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
    'generated::A2nYynrszD2mdVfJ' => 
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
        'as' => 'generated::A2nYynrszD2mdVfJ',
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
    'generated::73K8fAmn72iiMW6k' => 
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
        'as' => 'generated::73K8fAmn72iiMW6k',
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
    'generated::J4KlK1fra4VoP6lM' => 
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
        'as' => 'generated::J4KlK1fra4VoP6lM',
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
    'generated::RRQj01bzBfkOduSC' => 
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
        'as' => 'generated::RRQj01bzBfkOduSC',
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
    'generated::smkYX0xTHX8EhGyH' => 
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
        'as' => 'generated::smkYX0xTHX8EhGyH',
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
    'generated::FWKcVPJjhaE3J3W0' => 
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
        'as' => 'generated::FWKcVPJjhaE3J3W0',
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
    'generated::qFVh8ppNGvjNAM2C' => 
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
        'as' => 'generated::qFVh8ppNGvjNAM2C',
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
    'generated::O6iK92EzUBhRRHxS' => 
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
        'as' => 'generated::O6iK92EzUBhRRHxS',
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
    'generated::gVs7VaeUvYzC8AGU' => 
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
        'as' => 'generated::gVs7VaeUvYzC8AGU',
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
    'generated::Yk1Y9mK2Xg0ZJviE' => 
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
        'as' => 'generated::Yk1Y9mK2Xg0ZJviE',
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
    'generated::C7cG28n7ViVCTbyA' => 
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
        'as' => 'generated::C7cG28n7ViVCTbyA',
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
    'generated::OmnODgASdeFBHCHy' => 
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
        'as' => 'generated::OmnODgASdeFBHCHy',
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
    'generated::fKwj8jbKfS9ojEwa' => 
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
        'as' => 'generated::fKwj8jbKfS9ojEwa',
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
    'generated::NCW4zXY3DtMTSNOM' => 
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
        'as' => 'generated::NCW4zXY3DtMTSNOM',
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
    'generated::w5YEuvSpxMe3RkEU' => 
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
        'as' => 'generated::w5YEuvSpxMe3RkEU',
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
    'generated::EC68k3aUfCgrp2Nj' => 
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
        'as' => 'generated::EC68k3aUfCgrp2Nj',
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
    'generated::rXPowUj831utc2Js' => 
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
        'as' => 'generated::rXPowUj831utc2Js',
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
    'generated::cVIuPyuXvykdYzcH' => 
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
        'as' => 'generated::cVIuPyuXvykdYzcH',
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
    'generated::idy7uERe0pZ7hlJl' => 
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
        'as' => 'generated::idy7uERe0pZ7hlJl',
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
    'generated::UgbOiZlWKiFs2zBG' => 
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
        'as' => 'generated::UgbOiZlWKiFs2zBG',
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
    'generated::n8v4IKXTXyxPIGWz' => 
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
        'as' => 'generated::n8v4IKXTXyxPIGWz',
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
    'generated::55UErtsHN27Ibyl4' => 
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
        'as' => 'generated::55UErtsHN27Ibyl4',
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
    'generated::GepM1As0ZAQFfu16' => 
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
        'as' => 'generated::GepM1As0ZAQFfu16',
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
    'generated::OoEARWe867ajorDN' => 
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
        'as' => 'generated::OoEARWe867ajorDN',
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
    'generated::p6UCdxCLG8oMLLR0' => 
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
        'as' => 'generated::p6UCdxCLG8oMLLR0',
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
    'generated::K6ymsYM4Qhqi4RII' => 
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
        'as' => 'generated::K6ymsYM4Qhqi4RII',
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
    'generated::qzSmI6jtN3D8FIFl' => 
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
        'as' => 'generated::qzSmI6jtN3D8FIFl',
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
    'generated::6pMtMiL9pxbj9djT' => 
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
        'as' => 'generated::6pMtMiL9pxbj9djT',
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
    'generated::5RQpnF0vw3duMNdZ' => 
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
        'as' => 'generated::5RQpnF0vw3duMNdZ',
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
    'generated::cWKP8Rm2VuZX9AkA' => 
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
        'as' => 'generated::cWKP8Rm2VuZX9AkA',
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
    'generated::8XGD7odQrGNlXCpX' => 
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
        'as' => 'generated::8XGD7odQrGNlXCpX',
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
    'generated::UnlgekoGrFPkCPWs' => 
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
        'as' => 'generated::UnlgekoGrFPkCPWs',
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
    'generated::88imFTShWqPqFwOj' => 
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
        'as' => 'generated::88imFTShWqPqFwOj',
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
    'generated::Js4OQL1tEB64vkyB' => 
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
        'as' => 'generated::Js4OQL1tEB64vkyB',
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
    'generated::BVOfARXKcHPXLFiG' => 
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
        'as' => 'generated::BVOfARXKcHPXLFiG',
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
