<?php
global $cfg;

$lang['site']['title'] = "IntelliMerge for Spotify";

$lang['home']['description'] = "With this helpful app, you'll be able to make Master Playlists that are smart 
    enough to update themselves based on the contents of other playlists. Have you ever wanted to include a Spotify 
    curated playlist that is frequently updated into your own custom playlist without having to keep track of what's new?
     Now you can. With {$lang['site']['title']} you can create playlist links that are frequently monitored for changes 
     and propagated to your Master Playlist. Now you can merge Spotify playlists from any user like a pro.";
$lang['home']['recent_changes'] = "Recent Changes";

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
$lang['about']['vip_legal'] = "VIP Membership on {$cfg['site']['title']} does not include any membership with Spotify, either implied or explicitly. As a third-party beneficiary of the WritheM Terms of Service / End User Licence agreement and privacy policy, Spotify is entitled to directly enforce our end user license agreement on our behalf. We reserve the right to change limits and benefits of our VIP membership at any time. We will do everything we can to inform you of these changes before we make them via our Change Log at the <a href='about.php'>FAQ page</a>. If your account on Spotify is closed, you are responsible for also cancelling your VIP subscription on our system. We do not monitor your account status on Spotify. We do not guarantee system availability but will make every effort for 99.9% uptime. All VIP memberships are non-refundable and service interruptions or cancellations beyond our control are not cause for any refunds (either partial or in full). Scheduled maintenance and outages will be posted on our system status page that can be found at <a href=\"https://status.writhem.com/\" target=\"_blank\">https://status.writhem.com/</a>. The scan/update service runs on the plebian server. The website runs on praetor server. Both of these servers are hosted at WM2-AB-CA. Cancelling your Intellimerge VIP membership does not delete or remove any information on either Spotify's servers or the WritheM Project server. To request removal of your account information from the WritheM Project server, please follow the process outlined at in the <a href='about.php'>FAQ page</a>.";

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