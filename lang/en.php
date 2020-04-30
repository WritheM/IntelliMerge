<?php
global $cfg;

$lang['site']['title'] = "IntelliMerge for Spotify";

$lang['home']['description'] = "With this helpful app, you'll be able to make Master Playlists that are smart 
    enough to update themselves based on the contents of other playlists. Have you ever wanted to include a Spotify 
    curated playlist that is frequently updated into your own custom playlist without having to keep track of what's new?
     Now you can. With {$lang['site']['title']} you can create playlist links that are frequently monitored for changes 
     and propagated to your Master Playlist. Now you can merge Spotify playlists from any user like a pro.";
$lang['home']['recent_changes'] = "Recent Changes";


$lang['about']['description'] = "The purpose of this site is to take several Spotify Playlists and generate a single playlist from them.<br/>The system then monitors those lists for changes and propagates any changes to the master list. This means that you can now follow spotify created lists or user created lists that change frequently to make your own mix in a single list. Ideal for mobile users. Can also be used to merge Spotify playlists!";
$lang['about']['q_a']['first_run']['question'] = "Hey, I'm new. How do I merge my lists? What are all these buttons?";
$lang['about']['q_a']['first_run']['answer']['intro'] = "First off. Welcome! Thank you for choosing {$lang['site']['title']}. Here is a quick crash course to getting your first Master Playlist set up and monitoring playlists for changes.";
$lang['about']['q_a']['first_run']['answer']['steps'] = array();
array_push($lang['about']['q_a']['first_run']['answer']['steps'],['title'=>"Creating your first Master Playlist",
    'body'=>"The first thing you'll want to do is head to the <a href=\"editor.php\">Playlist Editor</a> and create a Master Playlist. This is the playlist that the system will change as your linked playlists change. You can <div class=\"btn btn-info btn-sm\"><i class=\"mdi mdi-14px mdi-arrow-down-bold-box\"></i></div>import an existing playlist from Spotify or <div class=\"btn btn-success btn-sm\"><i class=\"mdi mdi-14px mdi-new-box\"></i></div>create a new playlist"]);
array_push($lang['about']['q_a']['first_run']['answer']['steps'],['title'=>"Creating Playlist Links to your Master Playlist",
    'body'=>"After you've created your Master Playlist in the System, you'll want to start telling the system which playlists should be monitored for changes. The system will look at all of the songs that are on your linked playlists and then add them to your Master Playlist. To edit your links click the <div class=\"btn btn-outline-primary btn-sm\"><i class=\"mdi mdi-14px mdi-link-box-variant\"></i></div> button in the Actions column. All of the playlists that you follow on Spotify will be displayed. If you want to create a link to a playlist that is not in this list, you'll need to find it on Spotify, follow it and then return to {$lang['site']['title']}. Once a link is created, you can unfollow the playlist. This lets you create links to playlists that you dont even have in your account. Handy. There are two types of links you can make for a playlist: Includes and Excludes (Please read the FAQ further down on this page titled \"What does it mean to Include/Exclude playlists? Should I just Exclude everything I'm not Including?\"). You can <div class=\"btn btn-outline-success btn-sm\"><i class=\"mdi mdi-14px mdi-playlist-plus\"></i></div> Include a playlist or <div class=\"btn btn-outline-dark btn-sm\"><i class=\"mdi mdi-14px mdi-playlist-remove\"></i></div> Exclude a playlist from your master Playlist. You will not be able to include or exclude a Master Playlist from itself, but you can include or exclude it from other master playlists."]);
array_push($lang['about']['q_a']['first_run']['answer']['steps'],['title'=>"Filter your playlists",
    'body'=>"If you're an avid playlist link creator you may want to show the playlist links that you've created in the past without showing <em>all</em> of the playlists you follow. At the top of the Edit Links window there will be tabs that let you filter the results to things like All Followed, All Linked, or a combination of those. Click those to only show the playlists pertinent to the tab you want to see"]);
array_push($lang['about']['q_a']['first_run']['answer']['steps'],['title'=>"Unfollow or Follow a Playlist",
    'body'=>"Now that you've created a link to a playlist, you no longer need to follow it. If you choose, you can click the <div class=\"btn btn-info btn-sm\"><i class=\"mdi mdi-14px mdi-playlist-minus\"></i></div> UnFollow button to remove it from your Spotify account. Some of the playlists you have will be missing this button. These are the playlists that you own and cannot Unfollow. If you have created a link to a playlist, and then unfollowed it, you will also have the option to <div class=\"btn btn-outline-info btn-sm\"><i class=\"mdi mdi-14px mdi-playlist-star\"></i></div> Follow it again. When you are done, you can either press the x in the top right of the pop-up window, press close at the bottom right, or use the back button on your device. It saves the changes as you make them, so there is no 'Save' button to hit when you are done"]);
array_push($lang['about']['q_a']['first_run']['answer']['steps'],['title'=>"Edit settings of the Master Playlist",
    'body'=>"The defaults of a Master Playlist will work for most users, but you may want to take a look at what settings are available for each Master Playlist. To edit the settings of each Master Playlist you can click the <div class=\"btn btn-outline-primary btn-sm\"><i class=\"mdi mdi-14px mdi-cog-box\"></i></div> button in the Actions column from the Main page. You can also access the scan/update logs for each Master Playlist from the settings pop-up window (coming soon)"]);
array_push($lang['about']['q_a']['first_run']['answer']['steps'],['title'=>"Creating your Master Playlist on Spotify",
    'body'=>"If you did not import a playlist in step 1, you will be required to tell the system that it's time to create it on Spotify and link it to your newly created playlist. This is not done automatically to give you time to set the links and settings before the updater picks it up for the first time. Click the <div class=\"btn btn-info btn-sm\"><i class=\"mdi mdi-14px mdi-plus-box\"></i></div> Create button to create it in your Spotify Account. Now you just have to wait for the next Scan to pick up your playlist and update it. You can see the last time that your playlists were scanned below your list of master playlists, or on your profile page. In both places, you can click <div class=\"btn btn-primary btn-sm\"><i class=\"mdi mdi-14px mdi-reload\"></i></div> to manually queue it for update as well. If you make a large number of changes to the links, this is a great tool to get your master playlists updated quickly"]);
$lang['about']['q_a']['vip']['question'] = "What features are included with VIP?";
$lang['about']['q_a']['vip']['answer'] = "With a VIP Membership, you can have all these extra features listed below. Show your
                        appreciation for the service and pledge a few extra dollars each month to make sure that
                        {$lang['site']['title']} stays online and running smoothly. Thank you very
                        much for your support!";

$lang['about']['vip_sign_up'] = "Sign Up Now";
$lang['about']['vip_manage'] = "Manage Your Subscription";
$lang['about']['vip_benefits'] = array();
array_push($lang['about']['vip_benefits'],array('icon' => "text-box-multiple-outline",
    'title' => "Longer Playlists",
    'description' => "By default we only pull the first {$cfg['app']['playlist_limit_basic']} songs before we stop. If you have VIP we up that limit to {$cfg['app']['playlist_limit_vip']}."));
array_push($lang['about']['vip_benefits'],array('icon' => "playlist-plus",
    'title' => "More Playlists",
    'description' => "Basic users are limited to only creating {$cfg['app']['playlist_count_basic']} Master Playlists that are updated. VIP users can make {$cfg['app']['playlist_count_vip']} Master Playlists."));
array_push($lang['about']['vip_benefits'],array('icon' => "clock-fast",
    'title' => "More frequent updates",
    'description' => "Basic users only get their playlists updated once every {$cfg['app']['update_duration_basic']} but as a VIP member your playlists are scanned every {$cfg['app']['update_duration_vip']}."));
array_push($lang['about']['vip_benefits'],array('icon' => "reload",
    'title' => "Queue Playlist Refresh",
    'description' => "We give you the ability to queue your playlists for a refresh. Did you just make a bunch of changes to your links? Now you can queue a refresh to pick it up at the next scan."));
array_push($lang['about']['vip_benefits'],array('icon' => "billboard",
    'title' => "No Ads",
    'description' => "We need to pay for the servers somehow and we'll cut out the middle man and hide those pesky ads if you opt to give us a few extra dollars each month instead."));
array_push($lang['about']['vip_benefits'],array('icon' => "api",
    'title' => "API Access",
    'description' => "You can make your own API requests to our backend directly. We'll give you an API Key and you can query the status of your playlists, add and remove playlists, or queue a refresh.",
    'help_icon' => "help-circle",
    'help_title' => "Be nice...&trade;",
    'help_content' => "Although we give you access to refresh your playlists via API, please, please, PLEASE do not implement an automatic schedule for more than what we already have for you. This is meant to provide one-off functionality when you add/remove content. If we notice a large number of api requests for this functionality we may revoke your api key."));
array_push($lang['about']['vip_benefits'],array('icon' => "history",
    'title' => "Master Playlist Update Logs",
    'description' => "We'll give you access to the update logs, letting you see how much was added or removed for the last 20 runs for each Master Playlist.",
    'help_icon' => "alert-decagram",
    'help_title' => "Coming Soon.",
    'help_content' => "We are tracking all changes/updates, and this information is accessible via the API, but we haven't added to the front-end yet."));
array_push($lang['about']['vip_benefits'],array('icon' => "webhook",
    'title' => "Webhooks",
    'description' => "Once we finish updating your playlists, we'll send an update package to the webhook url that you define. Use this to get notifications in slack, discord, IFTTT, or many others.",
    'help_icon' => "alert-decagram",
    'help_title' => "Coming Soon.",
    'help_content' => "We are working to have this pushed for our next major release."));
array_push($lang['about']['vip_benefits'],array('icon' => "test-tube",
    'title' => "Beta Access",
    'description' => "The newest features and bug fixes are pushed directly to the VIP users first. This means that they will often get more functionality turned on before the regular users."));
array_push($lang['about']['vip_benefits'],array('icon' => "emoticon-kiss",
    'title' => "Our never-ending appreciation",
    'description' => "This project has been the result of input from many people and that feedback has led to continuous improvement. We could not have done that without you! Thank you very much! With your subscription comes a very heart-filled Thank you!"));
$lang['about']['vip_legal'] = "VIP Membership on {$lang['site']['title']} does not include any membership with Spotify, either implied or explicitly. As a third-party beneficiary of the WritheM Terms of Service / End User Licence agreement and privacy policy, Spotify is entitled to directly enforce our end user license agreement on our behalf. We reserve the right to change limits and benefits of our VIP membership at any time. We will do everything we can to inform you of these changes before we make them via our Change Log at the <a href='about.php'>FAQ page</a>. If your account on Spotify is closed, you are responsible for also cancelling your VIP subscription on our system. We do not monitor your account status on Spotify. We do not guarantee system availability but will make every effort for 99.9% uptime. All VIP memberships are non-refundable and service interruptions or cancellations beyond our control are not cause for any refunds (either partial or in full). Scheduled maintenance and outages will be posted on our system status page that can be found at <a href=\"https://status.writhem.com/\" target=\"_blank\">https://status.writhem.com/</a>. The scan/update service runs on the plebian server. The website runs on praetor server. Both of these servers are hosted at WM2-AB-CA. Cancelling your Intellimerge VIP membership does not delete or remove any information on either Spotify's servers or the WritheM Project server. To request removal of your account information from the WritheM Project server, please follow the process outlined at in the <a href='about.php'>FAQ page</a>.";


$lang['editor']['new_exceed_quota_basic'] = "You are unable to create or import any additional Master Playlists at this time. It seems you may have exceeded the quota of Master Playlists allocated to your account.";
$lang['editor']['import_exceed_quota_basic'] = $lang['editor']['new_exceed_quota_basic'];
$lang['editor']['tooltip_edit_links'] = "This will let you edit the linked playlists to this Master Playlist. Linked playlists are the source of songs in a Master Playlist.";
$lang['editor']['tooltip_settings'] = "Change the settings of a Master Playlist.";
$lang['editor']['tooltip_enable_disable'] = "Allows you to Enable or Disable a Master Playlist from updating automatically";
$lang['editor']['tooltip_unlink_remove'] = "This Master Playlist has been created on Spotify, so this button will let you remove that link to the Spotify playlist. Effectively removing it from the {$lang['site']['title']} server but not your Spotify Account.";
$lang['editor']['tooltip_delete_forever'] = "You haven't linked this playlist to a Spotify playlist, which means pressing this button will delete this playlist on the {$lang['site']['title']} server and all of the links associated with it forever.";
$lang['editor']['tooltip_view_on_spotify'] = "This lets you view the playlist on Spotify.";
$lang['editor']['tooltip_link_to_spotify'] = "Create a link to a new Spotify Playlist. This will create this playlist on your Spotify account so that the system can start updating it there.";
$lang['editor']['tooltip_help_title'] = "Are you feeling lost?";
$lang['editor']['tooltip_help'] = "Any time you see this little <i class='mdi mdi-help-circle mdi-14px text-muted'></i> you can hover to show some help about what that function does. You may also want to head to the <a href='about.php' class='btn btn-sm btn-primary'>FAQ</a> for more help in what these buttons mean and how to create your first Master Playlist. (To make these help windows stay open, so that you can click the button inside, then just click the <i class='mdi mdi-help-circle mdi-14px text-muted'></i> to toggle the help window)";