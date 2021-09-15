<?php
global $cfg;

/**
 * Used across several pages. Generic Language. Buttons. Etc.
 */
$lang['site']['title'] = "IntelliMerge for Spotify";

$lang['login'] = "Login";
$lang['logout'] = "Logout";
$lang['go_back'] = "Go back";
$lang['privacy'] = "Privacy";
$lang['terms'] = "Terms";
$lang['all_rights'] = "All rights reserved";
$lang['changelog']['english_only'] = "We apologize the change-log is only available in English at this time.";

$lang['tracking']['title'] = "Accept Tracking";
$lang['tracking']['description'] = "This will let you opt-out of tracking. You may choose to prevent us from aggregating and analyzing the actions you take here. Doing so will protect your privacy, but will also prevent us from learning from your actions and creating a better experience for you and other users.";
$lang['tracking']['dnt_enabled'] = $lang['tracking']['description'] . " This option is currently disabled since your browser is reporting that you do not want to be tracked. This is a setting of your browser so you won't be able to opt-in until you disable the 'Do Not Track' feature.";
$lang['tracking']['opted_out'] = "You have opted out of Tracking. We have saved this setting in a cookie in your browser, which means that you may need to set this setting on each device you use. We do not save this setting account wide";

$lang['errors']['error'] = "Error";
$lang['errors']['tech_details'] = "Some technical details on that error are:";
$lang['errors']['db_unavailable'] = "It looks as though we are currently experiencing database issues. You wont be able to proceed until the issue is resolved, but rest assured we are aware.";
$lang['errors']['cant_login'] = "Yikes. Something went wrong when trying to log you in with that code. It could be a temporary problem with Spotify, in which case you can try again in a sec, or it might a problem on our end.";

$lang['vip_sign_up'] = "Sign Up Now";
$lang['vip_manage'] = "Manage Your Subscription";
$lang['vip_benefits'] = []; // array(10)
array_push($lang['vip_benefits'],['icon' => "text-box-multiple-outline",
    'title' => "Longer Playlists",
    'description' => "By default we only pull the first {$cfg['app']['playlist_limit_basic']} songs before we stop. If you have VIP we up that limit to {$cfg['app']['playlist_limit_vip']}."]);
array_push($lang['vip_benefits'],['icon' => "playlist-plus",
    'title' => "More Playlists",
    'description' => "Basic users are limited to only creating {$cfg['app']['playlist_count_basic']} Master Playlists that are updated. VIP users can make {$cfg['app']['playlist_count_vip']} Master Playlists."]);
array_push($lang['vip_benefits'],['icon' => "heart",
    'title' => "Link to Liked Tracks",
    'description' => "Link your liked tracks to a Master Playlist directly. This isn't technically a playlist at all, but VIP users are able to link it anyway.",
    'help_icon' => "new-box",
    'help_title' => "New!",
    'help_content' => "This is a brand new feature, released to VIPs only right now."]);
array_push($lang['vip_benefits'],['icon' => "billboard",
    'title' => "No Ads",
    'description' => "We need to pay for the servers somehow and we'll cut out the middle man and hide those pesky ads if you opt to give us a few extra dollars each month instead."]);
array_push($lang['vip_benefits'],['icon' => "clock-fast",
    'title' => "More frequent updates",
    'description' => "Basic users only get their playlists updated once every {$cfg['app']['update_duration_basic']} but as a VIP member your playlists are scanned every {$cfg['app']['update_duration_vip']}."]);
array_push($lang['vip_benefits'],['icon' => "reload",
    'title' => "Queue Playlist Refresh",
    'description' => "We give you the ability to queue your playlists for a refresh. Did you just make a bunch of changes to your links? Now you can queue a refresh to pick it up at the next scan."]);
array_push($lang['vip_benefits'],['icon' => "api",
    'title' => "API Access",
    'description' => "You can make your own API requests to our backend directly. We'll give you an API Key and you can query the status of your playlists, add and remove playlists, or queue a refresh.",
    'help_icon' => "help-circle",
    'help_title' => "Be nice...&trade;",
    'help_content' => "Although we give you access to refresh your playlists via API, please, please, PLEASE do not implement an automatic schedule for more than what we already have for you. This is meant to provide one-off functionality when you add/remove content. If we notice a large number of api requests for this functionality we may revoke your api key."]);
array_push($lang['vip_benefits'],['icon' => "history",
    'title' => "Master Playlist Update Logs",
    'description' => "We'll give you access to the update logs, letting you see how much was added or removed for the last 20 runs for each Master Playlist."]);
array_push($lang['vip_benefits'],['icon' => "webhook",
    'title' => "Webhooks",
    'description' => "Once we finish updating your playlists, we'll send an update package to the webhook url that you define. Use this to get notifications in slack, discord, IFTTT, or many others.",
    'help_icon' => "alert-decagram",
    'help_title' => "Coming Soon.",
    'help_content' => "We are working to have this pushed for our next major release."]);
array_push($lang['vip_benefits'],['icon' => "test-tube",
    'title' => "Beta Access",
    'description' => "The newest features and bug fixes are pushed directly to the VIP users first. This means that they will often get more functionality turned on before the regular users."]);
array_push($lang['vip_benefits'],['icon' => "emoticon-kiss",
    'title' => "Our never-ending appreciation",
    'description' => "This project has been the result of input from many people and that feedback has led to continuous improvement. We could not have done that without you! Thank you very much! With your subscription comes a very heart-filled Thank you!"]);
$lang['vip_legal'] = "VIP Membership on {$lang['site']['title']} does not include any membership with Spotify, either implied or explicitly. As a third-party beneficiary of the WritheM Terms of Service / End User Licence agreement and privacy policy, Spotify is entitled to directly enforce our end user license agreement on our behalf. We reserve the right to change limits and benefits of our VIP membership at any time. We will do everything we can to inform you of these changes before we make them via our Change Log at the <a href='about.php'>FAQ page</a>. If your account on Spotify is closed, you are responsible for also cancelling your VIP subscription on our system. We do not monitor your account status on Spotify. We do not guarantee system availability but will make every effort for 99.9% uptime. All VIP memberships are non-refundable and service interruptions or cancellations beyond our control are not cause for any refunds (either partial or in full). Scheduled maintenance and outages will be posted on our system status page that can be found at <a href=\"https://status.writhem.com/\" target=\"_blank\">https://status.writhem.com/</a>. The scan/update service runs on the plebian server. The website runs on praetor server. Both of these servers are hosted at WM2-AB-CA. Cancelling your Intellimerge VIP membership does not delete or remove any information on either Spotify's servers or the WritheM Project server. To request removal of your account information from the WritheM Project server, please follow the process outlined at in the <a href='about.php'>FAQ page</a>.";


/**
 * index.php aka Home
 **/
$lang['home']['title'] = "Home";
$lang['home']['description'] = "With this helpful app, you'll be able to make Master Playlists that are smart enough to update themselves based on the contents of other playlists. Have you ever wanted to include a Spotify curated playlist that is frequently updated into your own custom playlist without having to keep track of what's new? Now you can. With {$lang['site']['title']} you can create playlist links that are frequently monitored for changes and propagated to your Master Playlist. Now you can merge Spotify playlists from any user like a pro.";
$lang['home']['maintenace_mode']['title'] = "NOTICE";
$lang['home']['maintenace_mode']['body'] = "Maintenance Mode is currently Enabled. We will be back shortly! Check <a target=\"_blank\" href=\"https://status.writhem.com/\">https://status.writhem.com/</a> for detailed information";
$lang['home']['welcome_back'] = "Welcome back";
$lang['home']['edit_button'] = "Edit Master Playlists";
$lang['home']['not_logged_in'] = "You are not currently logged in. Please login to create a new Master Playlist or edit your existing Master Playlists";
$lang['home']['changelog']['title'] = "Recent Changes";
$lang['home']['changelog']['link'] = "For a full list of updates you can check the&nbsp;<a href=\"about.php#changelog\">changelog</a>";

/**
 * about.php aka About/FAQ
 **/
$lang['about']['title'] = "About/FAQ";
$lang['about']['description'] = "The purpose of this site is to take several Spotify Playlists and generate a single playlist from them.<br/>The system then monitors those lists for changes and propagates any changes to the master list. This means that you can now follow spotify created lists or user created lists that change frequently to make your own mix in a single list. Ideal for mobile users. Can also be used to merge Spotify playlists!";
$lang['about']['q_a']['first_run']['question'] = "Hey, I'm new. How do I merge my lists? What are all these buttons?";
$lang['about']['q_a']['first_run']['answer']['intro'] = "First off. Welcome! Thank you for choosing {$lang['site']['title']}. Here is a quick crash course to getting your first Master Playlist set up and monitoring playlists for changes.";
$lang['about']['q_a']['first_run']['answer']['steps'] = []; // array(6)
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
$lang['about']['q_a']['vip']['answer'] = "With a VIP Membership, you can have all these extra features listed below. Show your appreciation for the service and pledge a few extra dollars each month to make sure that {$lang['site']['title']} stays online and running smoothly. Thank you very much for your support!";
$lang['about']['q_a']['feature']['question'] = "I found a bug or I have a feature suggestion. Where do I report it?";
$lang['about']['q_a']['feature']['answer'] = "Great! We've built the site based largely on feedback from people just like yourself. We would love to have your input. You can head over to our <i class='mdi mdi-github'></i><a href='https://github.com/WritheM/IntelliMerge' target='_blank'>GitHub</a> repository to make your feature requests or bug reports. We have some great resources for contributing to the project there including a preview of some features that might be added to future versions of {$lang['site']['title']}.";
$lang['about']['q_a']['privacy']['question'] = "What do you do with my data?";
$lang['about']['q_a']['privacy']['answer']['intro'] = "Your privacy is important to us so we wanted to expand on our <a href=\"//writhem.com/privacy.php\" target=\"_blank\">Privacy Policy</a> and how it pertains specifically to {$lang['site']['title']}";
$lang['about']['q_a']['privacy']['answer']['points'] = []; // array(4)
array_push($lang['about']['q_a']['privacy']['answer']['points'], "We will never sell your information either as an anonymized collection or as distinct. Unless required to share any information by law enforcement agencies or agreements with our third party vendors (including but not limited to Spotify), we will never willingly give information about your usage of this service to anyone. You can always request an export of the data that we capture about you as well. Please create a support ticket for this and allow 7-14 days for us to process requests of this nature");
array_push($lang['about']['q_a']['privacy']['answer']['points'],"We only capture information from your account or usage that we absolutely require to perform the services we promise to provide. In addition to this, we only request access to the elements of your account that we absolutely require to perform the services we promise to you. This means things like age, name, or any security information about your Spotify profile are never stored in our database. We do log IP addresses and information such as browser used, but never store this in any way that can be 'linked' to a specific user. This technical information is captured to monitor security and performance as well as develop the service further (If the majority of our users switch to Internet Explorer 6.0 then we may consider re-writing our website to support that). Most recently this is what has led us to completely rewrite the website with mobile first design. We found that >65% of our users were mobile users");
array_push($lang['about']['q_a']['privacy']['answer']['points'],"If you're using our API we do log detailed information about its usage. This includes when, who, and what is requested. We only log uses of our API if directly using an APIKey and not when a user is logged in. Only VIPs are given the option to generate an APIKey. Usage of our API constitutes agreement with our detailed logging");
array_push($lang['about']['q_a']['privacy']['answer']['points'],"We also log detailed information about webhooks. This includes failure rates and full history of the set urls and their responses. We log this to deter and control abuse of the feature. As this is a VIP only feature that users must opt-in to use, if you are uncomfortable with our logging of this, do not use it. Usage of the Webhook features, constitutes agreement with our logging of your usage of this feature");
$lang['about']['q_a']['exclude']['question'] = "What does it mean to Include/Exclude playlists? Should I just Exclude everything I'm not Including?";
$lang['about']['q_a']['exclude']['answer'] = "In short, no. Songs that are on an Excluded list will never be added to your Master Playlist. It's a sort of blacklist. Let's think of an example. I want to create a Master Playlist that includes my country's Top 50 tracks on Spotify, but it occasionally has an artist that I can't stand. If I find a playlist that includes all of the songs I would never want to include (Most artists have a \"This is __\" created by Spotify that would be perfect for this), then I can set that as excluded from my Master Playlist. My Master Playlist will then only contain the songs that are in the Included Top 50 but not on the Excluded 'This is __' playlist. Alternatively, you can create your own Excluded playlist on Spotify and then exclude that from your Master Playlist. You can Include or Exclude as many playlists as you want, but know that the system will only pick up the first ~{$cfg['app']['playlist_limit_basic']} songs for Basic users, or ~{$cfg['app']['playlist_limit_vip']}songs for VIP Users.";
$lang['about']['q_a']['limits']['question'] = "Are there any limits to the playlists?";
$lang['about']['q_a']['limits']['answer'] = "We currently limit <strong>the number of songs</strong> that will be added to a master list, as well as <strong>the number of master lists</strong> per account. To keep the number of hits to the Spotify API reasonable, we only add the first {$cfg['app']['playlist_limit_basic']} songs that are found on a scan. We first compile a list of songs we need to add, accounting for the songs that are excluded, and stop once we hit {$cfg['app']['playlist_limit_basic']} songs. Then we remove the old songs, which means that if we need to remove any, you'll have less than {$cfg['app']['playlist_limit_basic']} songs. Once the updater runs again, it should pick up some additional songs and get you closer to {$cfg['app']['playlist_limit_basic']} songs though. Additionally, we do increase this basic limit to {$cfg['app']['playlist_limit_vip']} songs for VIP Users. Finally, users will only be able to make {$cfg['app']['playlist_count_basic']} Master Playlists per account. VIP Users are allowed to make {$cfg['app']['playlist_count_vip']} Master Playlists.";
$lang['about']['q_a']['coverart']['question'] = "What are those numbers in the playlist cover art?";
$lang['about']['q_a']['coverart']['answer'] = "Those numbers in the last update section of the graphic are what the system did to your track count last time it updated your master playlist. It will show the last date that it updated (according to UTC) and how many songs were added or removed. In this example there were 20 songs added and 3 removed. Now you know when the last time the master list was updated and by how much :)";
$lang['about']['q_a']['legal']['question'] = "Are there certain legal things I should be aware of?";
$lang['about']['q_a']['legal']['answer']['intro'] = "Thanks for asking such a non-scripted question! As a part of using this service there are certain conditions that you agree to as outlined in the privacy policy and terms of use documents linked in the footer of this page. There are some additional terms as outlined here. By signing in, and authorizing this app on your Spotify account, you hereby provide your agreement to the following";
$lang['about']['q_a']['legal']['answer']['points'] = []; // array(5)
array_push($lang['about']['q_a']['legal']['answer']['points'], "We do not make any warranties or representations on behalf of Spotify and we expressly disclaim all implied warranties with respect to the Spotify Platform, Spotify Service and Spotify Content, including the implied warranties of merchantability, fitness for a particular purpose and non-infringement");
array_push($lang['about']['q_a']['legal']['answer']['points'], "You agree that you are prohibited from modifying or creating derivative works based on the Spotify Platform, Spotify Service or Spotify Content");
array_push($lang['about']['q_a']['legal']['answer']['points'], "You are prohibited from decompiling, reverse-engineering, disassembling, and otherwise reducing the Spotify Platform, Spotify Service, and Spotify Content to source code or other human-perceivable form, to the full extent allowed by law");
array_push($lang['about']['q_a']['legal']['answer']['points'], "WritheM Web Solutions is responsible for this app and we hereby release any liability on the part of third parties (e.g., Spotify); In short, Spotify is not responsible for the content found on the WritheM Servers");
array_push($lang['about']['q_a']['legal']['answer']['points'], "Finally, Spotify is a third party beneficiary of the WritheM end user license agreement and privacy policy and is entitled to directly enforce our end user license agreement on our behalf");
$lang['about']['q_a']['purge']['question'] = "This service was great but I dont need it anymore. How do I delete my information?";
$lang['about']['q_a']['purge']['answer'] = "As part of our agreement to access the Spotify Servers we agree to some conditions. One of which is to delete all information on our server if you revoke access to the app. To revoke this app from accessing your account going forward you can go to your Spotify Account Settings -> Click Apps and then click the Revoke Access button next to {$lang['site']['title']}. A direct link to this page is <a href=\"https://www.spotify.com/ca-en/account/apps/\" target=\"_blank\">here</a>. Once we detect that we no longer have access to your account we put your account on hiatus until you sign back in via the web browser and re-authenticate the app. If your account stays in a hiatus status for 60 days, we remove all records of your playlists and the associations you made on the {$lang['site']['title']} app. If you wish to manually reduce this wait period to zero, you can email <a href=\"mailto:admin@writhem.com\">our support</a> or use our <a href=\"http://writhem.com/contact.php\" target=\"_target\">contact form</a> and ask for manual account deletion. You will also need to provide us with your Support ID which can be found on your <a href=\"profile.php\">profile page</a> to verify the ownership of your account";
$lang['about']['q_a']['donations']['question'] = "I'm a big fan of this service; can I help out in anyway?";
$lang['about']['q_a']['donations']['answer'] = "The scale of this project has certainly grown but it is still endorsed and supported by <a href=\"http://writhem.com/\" target=\"_blank\">WritheM Web Solutions</a>. We provide a free tier as service to our users, but any donations you would like to make would be appreciated! You can send us <a href=\"https://paypal.me/writhem\" target=\"_blank\">pennies via paypal</a>, or click this button. <a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=58PCHTDQS35SC\" class=\"external-link\" rel=\"nofollow\"><img class=\"confluence-embedded-image confluence-external-resource\" width=\"100\" src=\"https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif\" data-image-src=\"https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif\"></a> We also have a longer term commitment that allows people to support the service. Check out the VIP Membership from your <a href=\"profile.php\">profile</a> page for more details.<br/>Keep an eye out in the future for opportunities to earn your VIP membership for free by developing translations for the system too! We are planning on supporting many different languages in the future and will need help translating the system. Soon&trade;.";
$lang['about']['q_a']['changelog']['question'] = "Is there a changelog?";
$lang['about']['q_a']['changelog']['answer'] = "Here is a copy of the updates as they were originally posted on the main page. Each named version is included below. <br />We are currently running version: {$cfg['app']['version']} build: {$cfg['app']['build']}";
$lang['about']['stats']['question'] = "Show me some cool stats?";
$lang['about']['stats']['answer']['intro'] = "Alright. We don't have a lot of data but";
$lang['about']['stats']['answer']['points'] = []; // array(3)
array_push($lang['about']['stats']['answer']['points'], "We monitor lists for %total_users% accounts");
array_push($lang['about']['stats']['answer']['points'], "These users have %total_mpls% master lists that are linked on Spotify");
array_push($lang['about']['stats']['answer']['points'], "These users have created %total_spls% playlist links");
$lang['about']['stats']['answer']['outro'] = "And some specific technical stats on our last run";

/**
 * editor.php aka Playlist Editor
 */
$lang['editor']['title'] = "Playlist Editor";
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

/**
 * profile.php aka Profile
 */
$lang['profile']['title'] = "Profile";
