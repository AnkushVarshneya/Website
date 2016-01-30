<?php
    $options[] = array( "name" => "Social",
    					"sicon" => "social.png",
						"type" => "heading");
						
	$options[] = array( "name" => "GitHub URL",
                        "id" => $shortname."_github",
                        "std" => "",
                        "type" => "text");
						
    $options[] = array( "name" => "LinkedIn URL",
                        "id" => $shortname."_linkedin",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Twitter URL",
                        "id" => $shortname."_twitter",
                        "std" => "",
                        "type" => "text");
						
	$options[] = array( "name" => "Facebook URL",
                        "id" => $shortname."_facebook",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Google+ URL",
                        "id" => $shortname."_googleplus",
                        "std" => "",
                        "type" => "text");
					
	$options[] = array( "name" => "Email URL",
                        "id" => $shortname."_email",
                        "std" => "",
                        "type" => "text");

	$options[] = array( "name" => "Stack Over Flow URL",
                        "id" => $shortname."_stackoverflow",
                        "std" => "",
                        "type" => "text");

	$options[] = array( "name" => "Good Reads URL",
                        "id" => $shortname."_goodreads",
                        "std" => "",
                        "type" => "text");
						
    $options[] = array( "name" => "Dribble URL",
                        "id" => $shortname."_dribble",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Vimeo URL",
                        "id" => $shortname."_vimeo",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Skype URL",
                        "id" => $shortname."_skype",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Pinterest URL",
                        "id" => $shortname."_pinterest",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "RSS",
                        "desc" => "Display RSS link",
                        "id" => $shortname."_rss",
                        "std" => "1",
                        "type" => "checkbox");
    $options[] = array( "name" => "External RSS URL",
                        "desc" => "Add external RSS URL, like Feedburner, etc. This will overwrite the regular blog RSS, if enabled.",
                        "id" => $shortname."_extrss",
                        "std" => "",
                        "type" => "text");						
?>