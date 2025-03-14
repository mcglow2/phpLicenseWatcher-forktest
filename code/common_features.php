<?php

/* 
 * Community sourced library of default feature settings
 */


/*
 * The feature code is not currently used but this data is collecting it to future proof it.
 * Long term it may be needed to address a potential feature name collission 
 * between vendors to seperate features with identical name .
 * 
 * 
 * /opt/lmtools/lmutil lmstat -a -c 50000@lic.server.com
 * 
 * Vendor daemon status (on lic.server.com):
 *
 *   FEATURECODE: UP v11.16.5
 * Feature usage info:
 * 
 * 
 */


$default_feature_settings = [
    //Software: Abaqus      Feature Code: ABAQUSLM
    "ABAQUSLM" => [
        "FeatureA" => [ "show" => true, "track"=>true ],
        "FeatureB" => [ "show" => true, "track"=>false ],
        "FeatureC" => [ "show" => true, "track"=>true ],
    ],

    //Software: MatLab      Feature Code: MLM    
    "MLM" => [
        "MATLAB" => [ "show" => true, "track"=>true ],
        "Statistics_Toolbox" => [ "show" => true, "track"=>true ],
        "Image_Toolbox" => [ "show" => true, "track"=>true ],
    ],
    
    
    
];


//Do not edit below this line

$default_feature_settings_temp = [];
foreach( $default_feature_settings as $vendor ){
    foreach( $vendor as $feature ){
        $default_feature_settings_temp[] = $feature;
    }
}


define('DEFAULT_FEATURE_SETTINGS', $default_feature_settings_temp);
unset($default_feature_settings);