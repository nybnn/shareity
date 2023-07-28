<!-- Data in website -->
<?php 
// pricing page - add-ons
  $prices = [
      [	  
        // 'title' => 'Basic',
        'title' => 'Level 1',
	    	'price' => '$1,000',
        'list' => '<br><br>
        ● Pre-campaign promotion and project plan kick-off meeting (1 hour)<br>
        ● Campaign set up, dashboard login, and training (1 hour class)<br>
        ● Dashboard analytics training (1 hour class)<br>'
        
	    ],
      [
        // 'title' => 'CAMPAIGN',
        'title' => 'Level 2',
	    	'price' => '$2,500',
        'list' => '
        ● Pre-campaign promotion and project plan kick-off meeting (1 hour) <br>
        ● Idea generation/research, sample pre-launch collaterals<br>
        ● Campaign set-up, dashboard login, and training (1 hour class)<br>
        ● Launch page set-up, standard badges and standard GLAD ™<br>
        ● Dashboard analytics training (1 hour class)<br>'
        //  ● Project manager $ 150 per hour'
        // <br><br>
        // Additional Support and Training Classes<br>
        // &nbsp &nbsp &nbsp∎ Marketing/Idea Generation: $150 per hour <br>
        // &nbsp &nbsp &nbsp∎ Design Services/Project Support: $80 per hour <br>
        // &nbsp &nbsp &nbsp∎ Addition Training Classes: $250 per hour
      ],
      [
        // 'title' => 'Enterprise',
        'title' => 'Level 3',
	    	'price' => '$5,000',
        'list' => '
        ● Pre-campaign promotion and project plan kick-off meeting (up to 5 hours)<br>
        &nbsp &nbsp &nbsp∎ Campaign idea generation/research, sample pre-launch collaterals, signage<br>
        &nbsp &nbsp &nbsp∎ Project Manager - interface with Ad/PR Agencies<br>
        ● Campaign set-up, dashboard login, and training (30 days, up to 5 hours)<br>
        ● Launch page set-up, custom Badges™ and GLAD™ creation<br>
        ● Real-time A/B testing support<br>
        ● Dashboard analytics training (30 days, up to 5 hours)<br>'
	    ],
  ];
?>
<?php 
// pricing page - plans
  $plans = [
      [
        'title' => 'Basic',
        'etiq' => 'd-none',
	    	'annual' => '32',
	    	'monthly' => '50',
        'descM' => 'billed monthly',
        'descA' => 'billed annually (save $18 vs monthly)',
        'list' => '
        1 Campaign per month (one short-code)<br><br>
        50 credits/month<br><br>
        $0.50/credit after<br><br>
        Standard chat support<br><br>
        Ability to push messages/rewards
        '
	    ],
      [	  
        'title' => 'Premium',
        'etiq' => 'etiq',
	    	'annual' => '3,750',
	    	'monthly' => '5,000',
        'descM' => 'billed monthly',
        'descA' => 'billed annually (save $1,250 vs monthly)',
        'list' => '
        5 Campaigns per month (5 short-codes)<br><br>
        5,000 Credits/month<br><br>
        $0.25/credit after<br><br>
        Everything in Basic plus:<br><br>
        First-party database collection with basic data/analytics<br><br>
        Enhanced rewards and messaging based on SWAY score<br><br>
        10 hours of graphic design/brand support/campaign implementation per month<br><br>
        Cross-promotion campaigns (emails, opt-in, etc)
        '
	    ],
      [
        'title' => 'Enterprise',
        'etiq' => 'd-none',
	    	'annual' => '7,500',
	    	'monthly' => '10,000',
        'descM' => 'billed monthly',
        'descA' => 'billed annually (save $2,500 vs monthly)',
        'list' => '
        10 Campaigns per month (10 short-codes)<br><br>
        10,000 Credits/month<br><br>
        $0.20/credit after<br><br>
        Everything in Premium plus:<br><br>
        Enhanced campaign data and analytics training<br><br>
        20 hours of graphic design/brand support/campaign implementation per month<br><br>
        Future features: AI and AR challenges
        '
      ],
  ];
  
?>
<?php 
// pricing page
  $bboxes = [
      [	  
        'number' => '01',
	    	'text' => 'Create your account and setup your profile.'
	    ],
      [
        'number' => '02',
	    	'text' => 'Create a campaign/challenge. <br>Get creative, and track the data via the Dashboard ™.'
      ],
      [
        'number' => '03',
	    	'text' => 'Create a campaign and a challenge.<br> Get creative, have fun, and track the data on your campaign.'
	    ],
  ];
?>
<?php 
// how it works page
  $begin = [
      [	  
        'title' => 'Setting Up Your Account',
        'subt' => ' • Change your password<br> 
                    • Link a cause<br> 
                    • Create a campaign',
        'link' => 'https://youtu.be/jKbegl7Nzrk',
	    	'poster' => 'sign-up.png'
	    ],
      [
        'title' => 'Buying Credits',
        'subt' => ' • Enter credit amount<br> 
                    • Choose a payment processor',
        'link' => 'https://youtu.be/DmxgKL5EBro',
	    	'poster' => 'buying-credits.png'
      ],
      [
        'title' => 'Creating a Challenge',
        'subt' => ' • Keep it simple, short & fun<br> 
                    • Keep it vertical<br> 
                    • Be specific',
        'link' => 'https://youtu.be/xNaJvYeN4Fc',
	    	'poster' => 'create-campaign.png'
      ],
      [
        'title' => 'Tracking and Managing Campaigns',
        'subt' => ' • Campaign dashboard<br>
                    • Real-time analytics<br>
                    • Simple management',
        'link' => 'https://youtu.be/MU_DDeXu6f0',
	    	'poster' => 'track-manage.png'
      ],
      [
        'title' => 'Promoting Your Challenge',
        'subt' => '• Create a challenge link<br>
                   • Create a 797979 keyword<br>
                   • Share both across media platforms',
        'link' => 'https://youtu.be/i9-KaTGBd4U',
	    	'poster' => 'promote-challenge.png'
      ],
  ];
?>
<?php 
// how it works page
  $webapp = [
      [	  
        'title' => 'Accepting a Challenge',
        'subt' => ' • Tap to accept any challenge.<br> 
        • Share your content with peers.<br> 
        • Raise more funds',
        'link' => 'https://youtu.be/90MFYqYg0bI',
	    	'poster' => 'accepting-challenge.png'
	    ],
      [
        'title' => 'Track Your Impact',
        'subt' => ' • Views on promotional challenge.<br> 
        • Peer-to-peer influence.<br> 
        • Individual sway
        ',
        'link' => 'https://youtu.be/aMOCYlvkFMU',
	    	'poster' => 'track-impact.png'
      ],
      [
        'title' => 'Earn Rewards',
        'subt' => ' • Gift cards.<br> 
                    • Coupons.<br> 
                    • Merchandise',
        'link' => 'https://youtu.be/F5fIyCbyeFw',
	    	'poster' => 'receive-rewards.png'
      ],
  ];
?>
<?php 
// Our Story Page - Rows Story
  $rowstory = [
      [	  
        'img' => 'about-us-background.jpg',
        'title' => 'Story title',
	    	'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit 
        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat 
        cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
	    ],
      [
        'img' => 'about-us-background.jpg',
        'title' => 'Story title',
	    	'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit 
        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat 
        cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
      ],
      [
        'img' => 'about-us-background.jpg',
        'title' => 'Story title',
	    	'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit 
        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat 
        cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
	    ],
      [
        'img' => 'about-us-background.jpg',
        'title' => 'Story title',
	    	'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
        ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit 
        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat 
        cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
	    ],
  ];
?>

<?php 
// Our Story Page - quest-sect
  $questsect = [
    [
      'h3' => 'WHY',
      'h2' => 'Purpose',
      'txt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
      ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit',
    ],
    [
      'h3' => 'HOW',
      'h2' => 'Mission',
      'txt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
      ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit',
    ],
    [
      'h3' => 'WHAT',
      'h2' => 'Vision',
      'txt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
      ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
      ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit',
    ],
  ];
?>

<?php 
// Stories Page
  $stories = [
     [
        'logo' => 'shareity-web.png',
        'quote' => 'Filler text - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. ',
	    	'photo' => 'ben.png',
        'person' => 'Ben Hill',
        'charge' => 'CEO/FOUNDER',
        'image' => 'about-us-background.jpg'
	    ],
      [
        'logo' => 'shareity-web.png',
        'quote' => 'Filler text - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. ',
	    	'photo' => 'ben.png',
        'person' => 'Ben Hill',
        'charge' => 'CEO/FOUNDER',
        'image' => 'about-us-background.jpg'
	    ],
      [
        'logo' => 'shareity-web.png',
        'quote' => 'Filler text - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. ',
	    	'photo' => 'ben.png',
        'person' => 'Ben Hill',
        'charge' => 'CEO/FOUNDER',
        'image' => 'about-us-background.jpg'
	    ],
      [
        'logo' => 'shareity-web.png',
        'quote' => 'Filler text - Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt 
        ut labore et dolore magna aliqua. ',
	    	'photo' => 'ben.png',
        'person' => 'Ben Hill',
        'charge' => 'CEO/FOUNDER',
        'image' => 'about-us-background.jpg'
	    ],
    /*[
        'logo' => '',
        'quote' => '',
	    	'photo' => '',
        'person' => '',
        'charge' => '',
        'image' => ''
	    ],*/
  ];
?>
<?php 
// Stories Page - Rate
  $rates = [
    [ 'num' => '1' ], ['num' => '2'],['num' => '3'],['num' => '4'],['num' => '5'],
      ['num' => '6'], ['num' => '7'],['num' => '8'],['num' => '9'],['num' => '10'], 
    
];
?>
<?php 
// Event Page - timesched
  $times = [
  [ 'name' => 'Introductions',
    'hour' => '3:00 PM',
    'aligname' => 'text-align:right',    
    'alighour' => 'text-align:right',
  ],   
  [ 'name' => 'Shareity Platform Overview',
    'hour' => '3:10 PM',
    'aligname' => 'text-align:left',
    'alighour' => 'text-align:left',
  ], 
  [ 'name' => 'Kevin Harrington',
    'hour' => '3:25 PM',
    'aligname' => 'text-align:right',
    'alighour' => 'text-align:right',
  ], 
  [ 'name' => 'Active Opportunities',
    'hour' => '3:30 PM',
    'aligname' => 'text-align:left',
    'alighour' => 'text-align:left',
  ],
  [ 'name' => 'Q&A Session',
  'hour' => '3:35 PM',
  'aligname' => 'text-align:right',
  'alighour' => 'text-align:right',
  ], 
  [ 'name' => 'Closing Statements',
    'hour' => '3:45 PM',
    'aligname' => 'text-align:left',
    'alighour' => 'text-align:left',
  ],    
];
?>