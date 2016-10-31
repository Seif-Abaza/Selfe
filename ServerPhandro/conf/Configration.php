<?php

if (getcwd() == dirname(__FILE__)) {
    require '../System/ErrorPage.php';
    die(ShowError());
}

define("GET_PHONE_TYPE_FROM_IMEI", "http://www.imei.info/?imei=");
define("LINK_FOR_HASH_GROUPS", "Interface.php?type=");
define("DEFUALT_COOKIE", "serverphandro");
define("DEFUALT_COOKIE_ONLINE", "serverphandro");

define("DEBUG", "XDEBUG_SESSION_START"); //=netbeans-xdebug
//Application Switch
define("MAIN_COMMAND", "type");

define("MAIN_COMMAND_MEDIA", "HTTP_TYPE");

//Defination Globel Class
define("CLASS_DATABASE", "Database");
define("CLASS_TOOLS", "Tools");
define("CLASS_FILTER", "Filter");
define("SYSTEM_DIFINATION", "System");
define("PASSWORD_LENGTH", 7);
define("ACTIVE_LENGTH", 5);

//
//              +--------------+
//              |    Switchs   |
//              +--------------+
//              |______KEY_____+
//              |     FILED    |
//              +--------------+
//              |______KEY_____|
//              |     FILED    |
//              +--------------+



/* * ****************************************************************************
 * *****************************************************************************
 * *****************************************************************************
 * *****************************************************************************
 * ***************************************************************************** */
//*****************
//File Multimedia**
//*****************
define("PHOTO", "PHOTO");
define("AUDIO", "AUDIO");
define("VIDEO", "VIDEO");
define("BARCODE", "BARCODE");

//Group Switch User (1)
define("NEW_USER", "_1NU_");
define("EDIT_USER", "_1EU_");
define("DELETE_USER", "_1DU_");
define("UPLOAD_MALTIMEDIA", "_1UM_");
define("UPLOAD_FROM_URL", "_1UFU_");
define("GET_IMAGE", "_1GI_");
define("GET_VIDEO", "_1GV_");
define("GET_AUDIO", "_1GA_");

//Group Switch Giftes (2)
define("GET_GIFTES", "_2GG_");
define("GET_MUSIC", "_2GM_");
define("GET_PONANS", "_2GP_");
define("SET_MUSIC", "_2SM_");
define("SET_GIFTES", "_2SG_");
define("SET_PONANS", "_2SP_");


//Group Switch Status (3)
define("STATUS_TEXT", "_3ST_");
define("STATUS_CHANGE", "_3SC_");
define("GET_STATUS", "_3GS_");


//Group Switch Friend (4)
define("MAKE_FRIEND", "_4MF_");
define("MAKE_UNFRIEND", "_4MU_");
define("SEND_MESSAGE", "_4SM_");
define("SET_FRIEND_FAVORIT", "_4SFF_");
define("SET_FRIEND_UNFAVORIT", "_4SFU_");
define("SET_FRIEND_ACCEPT", "_4SFA_");
define("SET_FRIEND_REFUSED", "_4SFR_");
define("SET_FRIEND_FOLLOWER", "_4SFFL_");
define("SET_FRIEND_BLOCK", "_4SFB_");
define("SET_FRIEND_UNBLOCK", "_4SFUB_");


//Group Switch Notifcations (5)
define("LIKE", "_5LI_");
define("UNLIKE", "_5UL_");
define("SET_MESSAGE", "_5SM_");
define("GET_MESSAGE", "_5GM_");
define("GET_ALL_MESSAGE", "_5GAM_");
define("DEL_MESSAGE", "_5DM_");

//Android Connection
define("CONNECTION_ANDROID", "connect");

//Group Switch System (6)
define("TEST", "__test");
define("SUCCESS", "_6OK_");
define("USER_EXIST", "_6UEX_");
define("GROUP_EXIST", "_6GEX_");
define("GROUP_NOT_EXIST", "_6GNEX_");
define("YOU_ARE_ADMIN", "_6YAA_");
define("NO_NEW", "_6NN_");
define("NO_ZONE", "_6NZ_");
define("NOT_FOUND", "_6NF_");
define("NOT_FRINDS", "_6NFRE_");
define("NOT_ACTIVE_USER", "_6NAUR_");
define("UPDATE", "_6UDA_");
define("ALREADY_EXISTS", "_6ALEX_");
define("ALREADY_FRIENDS", "_6ALFRI_");
define("FAIL", "_6FI_");
define("DONE", "_6DONE_");
define("RETERN", "_6RET_");
define("PHONE_EXIST", "_6PE_");
define("DATABASE", "_6MSDBE_");
define("FILESYSTEM", "_6FSE_");
define("FILE_IMAGE", "_6FIE_");
define("URL_ERROR", "_6UER_");
define("USER_NOT_ACTIVATION", "_6UNA_");
define("ON", 1);
define("OFF", 0);
define("SERVER_MESSAGE_NOTE", "SMN");

//Group Switch Informations (7)
define("USER_SEARCH", "_7US_");
define("COUNTRY_BUFFER_LIST", "_7CBL_");
define("NETWORK_BUFFER_LIST", "_7NBL_");
define("GET_USER_LIST", "_7GULI_");
define("GET_USER_FRIENDS", "_7GUFR_");
define("GET_USER_INFO", "_7GUI_");
define("GET_COUNTRYS", "_7GC_");
define("PHONE_IMEI", "_7PI_");
define("PHONE_SIM_SERIAL_NUMBER", "_7PSSN_");
define("PHONE_NETWORK_COUNTRY_ISO", "_7PNCI_");
define("PHONE_NETWORK_ISO", "_7PNI_");
define("PHONE_NETWORK_NAME", "_7PNN_");
define("GET_NOTIFICATION", "_7GNOT_");

//Media 8
define("GET_ALBUMES", "_8GA_");
define("SET_COMMENT_IN_PHOTO", "_8SCIP_");
define("SET_COMMENT_IN_AUDIO", "_8SCIA_");
define("SET_COMMENT_IN_VIDEO", "_8SCIV_");
define("EDIT_COMMENT_IN_PHOTO", "_8ECIP_");
define("EDIT_COMMENT_IN_AUDIO", "_8ECIA_");
define("EDIT_COMMENT_IN_VIDEO", "_8ECIV_");
define("DELETE_COMMENT_IN_PHOTO", "_8DCIP_");
define("DELETE_COMMENT_IN_AUDIO", "_8DCIA_");
define("DELETE_COMMENT_IN_VIDEO", "_8DCIV_");

//Sync 9
define("SYNC_COUNTRY", "_9SNKC_");
define("SYNC_MEMBER_IN_COUNTRY", "_9SNKMIC_");
define("SYNC_MESSAGE", "_9SNKMSG_");
define("SYNC_NEWS", "_9SNKNEWS_");
define("SYNC_NOTIFICATION", "_9SNKNOTIF_");
define("SYNC_FRINDS", "_9SNKFRIND_");
define("SYNC_MUSIC", "_9SNKMUSIC_");
define("SYNC_PONANS", "_9SNKPONS_");
define("SYNC_STOCK", "_9SNKSTOK_");
define("SYNC_POST", "_9SNKPOST_");
define("SYNC_COMMENT", "_9SNKCOMM_");
define("SYNC_GIFTS", "_9SNKGIF_");
define("SYNC_ALL", "_9SNKALL_");

//Group Login 10
define("NORMAL_LOGIN", "_10GNL_");
define("PASSWORD_LOGIN", "_10GPL_");

//Post 11
define("POST_SET", "_11PS_");
define("POST_GET_USER_POST", "_11PGUP_");
define("POST_DEL", "_11PD_");
define("POST_EDI", "_11PE_");
define("POST_SHEAR", "_11PSH_");
//Post Comment 12
define("SET_POST_COMMENT", "_12SPC_");
define("GET_POST_COMMENT", "_12GPC_");
define("SET_POST_RECOMMENT", "_12SPRC_");
define("GET_POST_RECOMMENT", "_12GPRC_");
//Group 13
define("CREATE_GROUP", "_13CG_");
define("DELETE_GROUP", "_13DG_");
define("EDIT_GROUP", "_13EG_");
define("ADDTO_GROUP", "_13ATG_");
define("REVFROM_GROUP", "_13RFG_");
define("UPDATELEVEL_GROUP", "_13UDLG_");
///////////////////////////////
// Action for Notifications ///
///////////////////////////////
define("NOTIF_COMMENT", 0);
define("NOTIF_GIFT", 1);
define("NOTIF_STOCK", 2);
define("NOTIF_MESSAGE", 3);
define("NOTIF_FRIEND", 4);
///////////////////////////////
// Action for Notifications ///
///////////////////////////////
define("POST_POST", 0);
define("POST_GIFT", 1);
define("POST_STOCK", 2);
define("POST_FRIEND", 3);
///////////////////////////////
// Level for User Group     ///
///////////////////////////////
define("MEMBER_JUNIOR", 0);
define("MEMBER_KNOW", 1);
define("MEMBER_ACTIVE", 2);
define("MEMBER_PRONZ", 3);
define("MEMBER_GOLD", 4);
define("MEMBER_PROCURATOR", 5);
///////////////////////////////
// Level for User Friend    ///
///////////////////////////////
define("FRIEND_ACCEPT", 0);
define("FRIEND_REFUSED", 1);
define("FRIEND_BLOCK", 2);
define("FRIEND_FOLLOWER", 3);
define("FRIEND_WAITING", 4);
/////////////////////
// SMS STATUS    ///
///////////////////
define("SMS_WAITING", 0);
define("SMS_ACCEPT", 1);
////////////////////////
// SMS Functions    ///
//////////////////////
define("SMS_ACTIVE_CODE", "_SAC_");
//Function Online Radio
define("ONLINE_RADIO", "onradio");

/* * *****************************************************************************
 * *****************************************************************************
 * *****************************************************************************
 * *****************************************************************************
 * ***************************************************************************** */
define("FILED_UID", "_UID");
define("KEY_UID", "_KUID_");

define("TABLE_SYSTEM_LOG", "Table_System_Log");
define("FILED_SYSTEM_LOG_DATE", "_DATE_TIME");
define("FILED_SYSTEM_LOG_ACTION", "_ACTION");
define("FILED_SYSTEM_LOG_REQUEST", "_REQUEST");
define("FILED_SYSTEM_LOG_INFO", "_INFO");
define("FILED_SYSTEM_LOG_IP_CLIENT", "_IP_CLIENT");
define("FILED_SYSTEM_LOG_COUNTRY_ID", "_COUNTRY_ID");
define("FILED_SYSTEM_LOG_LEVEL", "_LEVEL");

define("TABLE_USER_LOG", "Table_User_Log");
define("FILED_USER_LOG_DATE", "_DATE_TIME");
define("FILED_USER_LOG_ACTION", "_ACTION");

define("TABLE_SYSTEM_BLOCK_IP_ADDRESS", "System_Block_IP");
define("FILED_SYSTEM_BLOCK_IP_ADDRESS_ID", "ID");
define("FILED_SYSTEM_BLOCK_IP_ADDRESS_IP_ADDRESS", "_IP_ADDRESS");
define("FILED_SYSTEM_BLOCK_IP_ADDRESS_COUNTRY", "_COUNTRY");
define("FILED_SYSTEM_BLOCK_IP_ADDRESS_BROWSER", "_BROWSER");
define("FILED_SYSTEM_BLOCK_IP_ADDRESS_DATETIME", "_DATE_TIME");
define("FILED_SYSTEM_BLOCK_IP_ADDRESS_REQU", "_REQU");
define("FILED_SYSTEM_BLOCK_IP_ADDRESS_BLOCK_IP", "_BLOCK_IP");

//GROUP 1 CONTACT
define("TABLE_CONTACT_LIST", "Table_Contact_List");
define("KEY_TABLE_CONTACT_LIST", "CONTACTLIST");

define("FILED_CONTACT_LIST_NAME", "_NAME");
define("KEY_CONTACT_LIST_NAME", "_K1CLN_");

define("FILED_CONTACT_LIST_PHONE_1", "_PHONE_1");
define("KEY_CONTACT_LIST_PHONE_1", "_K1CLP1_");

define("FILED_CONTACT_LIST_PHONE_2", "_PHONE_2");
define("KEY_CONTACT_LIST_PHONE_2", "_K1CLP2_");
//=====================================================================
//GROUP 2 COUNTRY
define("TABLE_COUNTRY", "Table_Country");
define("KEY_TABLE_COUNTRY", "COUNTRY");

define("FILED_COUNTRY_ID", "ID");
define("KEY_COUNTRY_ID", "_K2CI_");

define("FILED_COUNTRY_NAME", "_NAME");
define("KEY_COUNTRY_NAME", "_K2CN_");

define("FILED_COUNTRY_NICENAME", "_NICENAME");
define("KEY_COUNTRY_NICENAME", "_K2CNIN_");

define("FILED_COUNTRY_PATH_FLAG", "_PATH_FLAG");
define("KEY_COUNTRY_PATH_FLAG", "_K2CPF_");

define("FILED_COUNTRY_ISO", "_ISO");
define("KEY_COUNTRY_ISO", "_K2CISO_");

define("FILED_COUNTRY_ISO3", "_ISO3");
define("KEY_COUNTRY_ISO3", "_K2CISO3_");

define("FILED_COUNTRY_NUMCODE", "_NUMCODE");
define("KEY_COUNTRY_NUMCODE", "_K2CNUMC_");

define("FILED_COUNTRY_PHONECODE", "_PHONECODE");
define("KEY_COUNTRY_PHONECODE", "_K2CPHC_");

define("FILED_COUNTRY_MEMBERS", "_MEMBERS");
define("KEY_COUNTRY_MEMBERS", "_K2CM_");

define("FILED_COUNTRY_NUMBER_OF_NETWORK", "_NUMBER_OF_NETWORK");
define("KEY_COUNTRY_NUMBER_OF_NETWORK", "_K2NON_");

define("FILED_COUNTRY_CORRENSE", "_CORRENSE");
define("KEY_COUNTRY_CORRENSE", "_K2CCOR_");

define("FILED_COUNTRY_PRICE", "_PRICE");
define("KEY_COUNTRY_PRICE", "_K2CP_");

define("FILED_COUNTRY_BLOCK", "_BLOCK");
//====================================================================
//GROUP 3 GIFTES
define("TABLE_GIFTES", "Table_Giftes");
define("KEY_TABLE_GIFTES", "GIFTES");

define("FILED_GIFTES_CATEGORY", "_CATRGORY");
define("KEY_GIFTES_CATEGORY", "_K3GC_");

define("FILED_GIFTES_GIFT_SUBDIR", "_SUBDIR");
define("KEY_GIFTES_GIFT_SUBDIR", "_K3GGSD_");

define("FILED_GIFTES_GIFT_PATH", "_GIFT_PATH");
define("KEY_GIFTES_GIFT_PATH", "_K3GGP_");

define("FILED_GIFTES_PRICE", "_PRICE");
define("KEY_GIFTES_PRICE", "_K3GP_");

define("FILED_GIFTES_LIMITED", "_LIMITED");
define("KEY_GIFTES_LIMITED", "_K3GL_");

define("FILED_GIFTES_TO_USER", "_TO_USER");
define("KEY_GIFTES_TO_USER", "_K3GTU_");
//====================================================================
//GROUP 4 MPBILE NETWORK
define("TABLE_MOBILE_NETWORK", "Table_Mobile_Network");
define("KEY_TABLE_MOBILE_NETWORK", "MOBILENETWORK");

define("FILED_MOBILE_NETWORK_ID", "ID");
define("KEY_MOBILE_NETWORK_ID", "_K4MNI_");

define("FILED_MOBILE_NETWORK_NETWORK_NAME", "_NETWORK_NAME");
define("KEY_MOBILE_NETWORK_NETWORK_NAME", "_K4MNNN_");

define("FILED_MOBILE_NETWORK_CODE", "_CODE");
define("KEY_MOBILE_NETWORK_CODE", "_K4MNC_");

define("FILED_MOBILE_NETWORK_COUNTRY_NAME", "_COUNTRY_NAME");
define("KEY_MOBILE_NETWORK_COUNTRY_NAME", "_K4MNCN_");
//====================================================================
//GROUP 5 PHONE
define("TABLE_PHONE", "Table_Phone");
define("KEY_TABLE_PHONE", "PHONE");

define("FILED_PHONE_UID", "_UID");
define("KEY_PHONE_UID", "_K5PU_");

define("FILED_PHONE_IMEI", "_IMEI");
define("KEY_PHONE_IMEI", "_K5PI_");

define("FILED_PHONE_SIM_SERIAL", "_SIM_SERIAL");
define("KEY_PHONE_SIM_SERIAL", "_K5PSS_");

define("FILED_PHONE_SUBSCRIBERID", "_SUBSCRIBERID");
define("KEY_PHONE_SUBSCRIBERID", "_K5PSSI_");

define("FILED_PHONE_NETWORK", "_NETWORK");
define("KEY_PHONE_NETWORK", "_K5PN_");

define("FILED_PHONE_COUNTRY", "_COUNTRY");
define("KEY_PHONE_COUNTRY", "_K5PC_");
//====================================================================
//GROUP 6 SYSTEM
define("TABLE_SYSTEM", "Table_System");
define("KEY_TABLE_SYSTEM", "SYSTEM");

define("FILED_SYSTEM_ACTIV", "_ACTIV");
define("KEY_SYSTEM_ACTIV", "_K6SA_");

define("FILED_SYSTEM_VERSION", "_VERSION");
define("KEY_SYSTEM_VERSION", "_K6SV_");

define("FILED_SYSTEM_APPLICATION_NAME", "_APPLICATION_NAME");
define("KEY_SYSTEM_APPLICATION_NAME", "_K6SAN_");

define("FILED_SYSTEM_APPLICATION_PATH_MOBILE", "_APPLICATION_PATH_MOBILE");
define("KEY_SYSTEM_APPLICATION_PATH_MOBILE", "_K6SAPM_");

define("FILED_SYSTEM_SERVER_CURRENT_PATH", "_SERVER_CURRENT_PATH");
define("KEY_SYSTEM_SERVER_CURRENT_PATH", "_K6SSCP_");

define("FILED_SYSTEM_SERVER_NEW_PATH", "_SERVER_NEW_PATH");
define("KEY_SYSTEM_SERVER_NEW_PATH", "_K6SSNP_");

define("FILED_SYSTEM_POWER_BY", "_POWER_BY");
define("KEY_SYSTEM_POWER_BY", "_K6SPB_");

define("FILED_SYSTEM_INCRIMENT_PRICE_AFTER", "_INCRIMENT_PRICE_AFTER");
define("KEY_SYSTEM_INCRIMENT_PRICE_AFTER", "_K6SIPA_");

define("FILED_SYSTEM_INCRIMENT_PRICE", "_INCRIMENT_PRICE");
define("KEY_SYSTEM_INCRIMENT_PRICE", "_K6SIP_");

define("FILED_SYSTEM_LOG_SYSTEM", "_LOG_SYSTEM");
define("KEY_SYSTEM_LOG_SYSTEM", "_K6SLS_");

define("FILED_SYSTEM_CAN_GET_DATA_FROM_BROWSER", "_CAN_GET_DATA_FROM_BROWSER");
define("KEY_SYSTEM_CAN_GET_DATA_FROM_BROWSER", "_K6SCGDFB_");

define("FILED_SYSTEM_IS_UPDATE", "_IS_UPDATE");
define("KEY_SYSTEM_IS_UPDATE", "_K6SIU_");

define("FILED_SYSTEM_IS_ONLINE_SERVER", "_IS_ONLINE_SERVER");
define("KEY_SYSTEM_IS_ONLINE_SERVER", "_K6SIOS_");

define("FILED_SYSTEM_SYSTEM_USER_ID", "_SYSTEM_USER_ID");
define("KEY_SYSTEM_SYSTEM_USER_ID", "_K6SSUI_");

define("FILED_SYSTEM_ENCRIPTION_BUFFER", "_ENCRIPTION_BUFFER");
define("KEY_SYSTEM_ENCRIPTION_BUFFER", "_K6SEB_");

define("FILED_SYSTEM_POINT_PRICE", "_POINT_PRICE");
define("KEY_SYSTEM_POINT_PRICE", "_K6SPP_");

define("FILED_SYSTEM_LIKE_TO_POINT", "_LIKE_TO_POINT");
define("KEY_SYSTEM_LIKE_TO_POINT", "_K6SLTP_");

define("FILED_SYSTEM_NORMAL_SCORE", "_NORMAL_SCORE");
define("KEY_SYSTEM_NORMAL_SCORE", "_K6SNS_");

define("FILED_SYSTEM_VIP_SCORE", "_VIP_SCORE");
define("KEY_SYSTEM_VIP_SCORE", "_K6SVS_");

define("FILED_SYSTEM_MINIMAM_SEND_TO_STOCK", "_MINIMAM_SEND_TO_STOCK");
define("KEY_SYSTEM_MINIMAM_SEND_TO_STOCK", "_K6SMSTS_");

define("FILED_SYSTEM_MAXIMAM_SEND_TO_STOCK", "_MAXIMAM_SEND_TO_STOCK");
define("KEY_SYSTEM_MAXIMAM_SEND_TO_STOCK", "_K6SMASTS_");

define("FILED_SYSTEM_SHOW_UNLIKE", "_SHOW_UNLIKE");
define("KEY_SYSTEM_SHOW_UNLIKE", "_K6SSU_");

define("FILED_SYSTEM_SHOW_LIKE", "_SHOW_LIKE");
define("KEY_SYSTEM_SHOW_LIKE", "_K6SSL_");

define("FILED_SYSTEM_SHOW_TOP_IN_GLOBEL", "_SHOW_TOP_IN_GLOBEL");
define("KEY_SYSTEM_SHOW_TOP_IN_GLOBEL", "_K6SSTIG_");

define("FILED_SYSTEM_SHOW_TOP_IN_ZONE", "_SHOW_TOP_IN_ZONE");
define("KEY_SYSTEM_SHOW_TOP_IN_ZONE", "_K6SSTIZ_");

define("FILED_SYSTEM_SHOW_STOCK_IN_USERS_LIST", "_SHOW_STOCK_IN_USERS_LIST");
define("KEY_SYSTEM_SHOW_STOCK_IN_USERS_LIST", "_K6SSSIUL_");

define("FILED_SYSTEM_SHOW_POINTS_IN_USER_LIST", "_SHOW_POINTS_IN_USER_LIST");
define("KEY_SYSTEM_SHOW_POINTS_IN_USER_LIST", "_K6SSPIUL_");

define("FILED_SYSTEM_LIMITED_FOR_NETWORK", "_LIMITED_FOR_NETWORK");
define("KEY_SYSTEM_LIMITED_FOR_NETWORK", "_K6SLFN_");

define("FILED_SYSTEM_ICON_FOR_VIP", "_ICON_FOR_VIP");
define("KEY_SYSTEM_ICON_FOR_VIP", "_K6SIFV_");

define("FILED_SYSTEM_ICON_FOR_FAMUS", "_ICON_FOR_FAMUS");
define("KEY_SYSTEM_ICON_FOR_FAMUS", "_K6SIFF_");

define("FILED_SYSTEM_ICON_FOR_LEVEL_1", "_ICON_FOR_LEVEL_1");
define("KEY_SYSTEM_ICON_FOR_LEVEL_1", "_K6SIFL1_");

define("FILED_SYSTEM_ICON_FOR_LEVEL_2", "_ICON_FOR_LEVEL_2");
define("KEY_SYSTEM_ICON_FOR_LEVEL_2", "_K6SIFL2_");

define("FILED_SYSTEM_ICON_FOR_LEVEL_3", "_ICON_FOR_LEVEL_3");
define("KEY_SYSTEM_ICON_FOR_LEVEL_3", "_K6SIFL3_");

define("FILED_SYSTEM_ICON_FOR_LEVEL_4", "_ICON_FOR_LEVEL_4");
define("KEY_SYSTEM_ICON_FOR_LEVEL_4", "_K6SIFL4_");

define("FILED_SYSTEM_ICON_FOR_LEVEL_5", "_ICON_FOR_LEVEL_5");
define("KEY_SYSTEM_ICON_FOR_LEVEL_5", "_K6SIFL5_");

define("FILED_SYSTEM_ICON_FOR_LEVEL_6", "_ICON_FOR_LEVEL_6");
define("KEY_SYSTEM_ICON_FOR_LEVEL_6", "_K6SIFL6_");

define("FILED_SYSTEM_DATE_TIME", "_DATE_TIME");
define("KEY_SYSTEM_DATE_TIME", "_K6SDT_");

define("FILED_SYSTEM_SWITCH_MAIL", "_SWITCH_MAIL");

define("FILED_SYSTEM_SWITCH_SMS", "_SWITCH_SMS");

define("FILED_SYSTEM_SMS_API_URL", "_SMS_API_URL");

define("FILED_SYSTEM_SMS_AUTH_KEY", "_SMS_AUTH_KEY");

define("FILED_SYSTEM_SMS_SENDER_ID", "_SMS_SENDER_ID");

define("FILED_SYSTEM_SMS_ROUTE", "_SMS_ROUTE");

define("FILED_SYSTEM_SMS_RESPONSE_TYPE", "_SMS_RESPONSE_TYPE");

define("FILED_SYSTEM_SERVER_MAIL", "_SERVER_MAIL");



//====================================================================
//GROUP 7 TOP USERS
define("TABLE_TOP_USERS", "Table_Top_Users");
define("KEY_TABLE_TOP_USERS", "TOPUSERS");

define("FILED_TOP_USERS_COUNTRY_ID", "_COUNTRY_ID");
define("KEY_TOP_USERS_COUNTRY_ID", "_K7TUCI_");

define("FILED_TOP_USERS_TOP_BOY_NAME", "_TOP_BOY_NAME");
define("KEY_TOP_USERS_TOP_BOY_NAME", "_K7TUTBN_");

define("FILED_TOP_USERS_TOP_GIRL_NAME", "_TOP_GIRL_NAME");
define("KEY_TOP_USERS_TOP_GIRL_NAME", "_K7TUTGN_");

define("FILED_TOP_USERS_TOP_BOY_VALUE", "_TOP_BOY_VALUE");
define("KEY_TOP_USERS_TOP_BOY_VALUE", "_K7TUTBV_");

define("FILED_TOP_USERS_TOP_GIRL_VALUE", "_TOP_GIRL_VALUE");
define("KEY_TOP_USERS_TOP_GIRL_VALUE", "_K7TUTGV_");

define("FILED_TOP_USERS_DATE", "_DATE");
define("KEY_TOP_USERS_DATE", "_K7TUD_");
//====================================================================
//GROUP 8 USER
define("TABLE_USER", "Table_User");
define("KEY_TABLE_USER", "USER");

define("FILED_USER_ID", "ID");
define("KEY_USER_ID", "_K8UI_");

define("FILED_USER_UUID", "_UUID");
define("KEY_USER_UUID", "_K8UU_");

define("FILED_USER_NAME", "_NAME");
define("KEY_USER_NAME", "_K8UN_");

define("FILED_USER_PHONE", "_PHONE");
define("KEY_USER_PHONE", "_K8UP_");

define("FILED_USER_AGE", "_AGE");
define("KEY_USER_AGE", "_K8A_");

define("FILED_USER_EMAIL_ADDRESS", "_EMAIL_ADDRESS");
define("KEY_USER_EMAIL_ADDRESS", "_K8EAD_");

define("FILED_USER_SEX", "_SEX");
define("KEY_USER_SEX", "_K8US_");

define("FILED_USER_PASSWORD", "_PASSWORD");
define("KEY_USER_PASSWORD", "_K8UPS_");

define("FILED_USER_ACTIVATION", "_STATUS");
define("KEY_USER_ACTIVATION", "_K8USA_");

define("FILED_USER_DIR_PATH", "_DIR_PATH");
define("KEY_USER_DIR_PATH", "_K8UDP_");

define("FILED_USER_IS_FAMOUS", "_IS_FAMOUS");
define("KEY_USER_IS_FAMOUS", "_K8UIF_");

define("FILED_USER_IS_VIP", "_IS_VIP");
define("KEY_USER_IS_VIP", "_K8UIV_");

define("FILED_USER_LANGUAGE", "_LANGUAGE");
define("KEY_USER_LANGUAGE", "_K8ULANG_");

define("FILED_USER_DATE_TIME", "_DATE_TIME");
define("KEY_USER_DATE_TIME", "_K8UDT_");
//====================================================================
//GROUP 9 USER ONLINE
define("TABLE_USER_ONLINE", "Table_Users_Online");
define("KEY_TABLE_USER_ONLINE", "USERSONLINE");

define("FILED_USER_ONLINE_ID", "_UID");
define("KEY_USER_ONLINE_ID", "_K9UOI_");

define("FILED_USER_ONLINE_STATUS", "_STATUS");
define("KEY_USER_ONLINE_STATUS", "_K9UOS_");

define("FILED_USER_ONLINE_DATE_TIME", "_DATE_TIME");
define("KEY_USER_ONLINE_DATE_TIME", "_K9UDT_");

define("FILED_USER_ONLINE_WHAT_IS_IN_YOUR_MIND", "_WHAT_IS_IN_YOUR_MIND");
define("KEY_USER_ONLINE_WHAT_IS_IN_YOUR_MIND", "_K9UOWIIYM_");
//====================================================================
//GROUP 10 GIFT HISTORY
define("TABLE_USER_GIFT", "Table_User_Gift");
define("KEY_TABLE_USER_GIFT", "USERGIFT");

define("FILED_USER_GIFT_TO_UUID", "_TO_UUID");
define("KEY_USER_GIFT_TO_UUID", "_K10UGTU_");

define("FILED_USER_GIFT_GIFT_ID", "_GIFT_ID");
define("KEY_USER_GIFT_GIFT_ID", "_K10UGGID_");
//====================================================================
//GROUP 11 USER PHOTO
define("TABLE_USER_PHOTO", "Table_User_Photo");
define("KEY_TABLE_USER_PHOTO", "USERPHOTO");

define("FILED_USER_PHOTO_ID", "ID");
define("KEY_USER_PHOTO_ID", "_K11UPI_");

define("FILED_USER_PHOTO_UID", "_UID");
define("KEY_USER_PHOTO_UID", "_K11UPUI_");

define("FILED_USER_PHOTO_COMMENT", "_COMMENT");
define("KEY_USER_PHOTO_COMMENT", "_K11UPC_");

define("FILED_USER_PHOTO_PHOTO_PATH", "_PHOTO_PATH");
define("KEY_USER_PHOTO_PHOTO_PATH", "_K11UPPP_");

define("FILED_USER_PHOTO_IS_PROFILE", "_IS_PROFILE");
define("KEY_USER_PHOTO_IS_PROFILE", "_K11UPIP_");

define("FILED_USER_PHOTO_TIME_OF_LIKE", "_TIME_OF_LIKE");
define("KEY_USER_PHOTO_TIME_OF_LIKE", "_K11UPTOL_");

define("FILED_USER_PHOTO_TIME_OF_UNLIKE", "_TIME_OF_UNLIKE");
define("KEY_USER_PHOTO_TIME_OF_UNLIKE", "_K11UPTOU_");

define("FILED_USER_PHOTO_PRIVACY", "_PRIVACY");
define("KEY_USER_PHOTO_PRIVACY", "_K11UPP_");

define("FILED_USER_PHOTO_INATTACH", "_INATTACH");
define("KEY_USER_PHOTO_INATTACH", "_K11UPINT_");
//====================================================================
//GROUP 12 USER STOCK
define("TABLE_USER_STOCK", "Table_User_Stock");
define("KEY_TABLE_USER_STOCK", "USERSTOCK");

define("FILED_USER_STOCK_UID", "_UID");
define("KEY_USER_STOCK_UID", "_K12USU_");

define("FILED_USER_STOCK_MONEY_STOCK", "_MONEY_STOCK");
define("KEY_USER_STOCK_MONEY_STOCK", "_K12USMS_");

define("FILED_USER_STOCK_DATE_CHARGE_MONEY_STOK", "_DATE_CHARGE_MONEY_STOK");
define("KEY_USER_STOCK_DATE_CHARGE_MONEY_STOK", "_K12USDCMS_");

define("FILED_USER_STOCK_VALUE_WAS_CHARGE_MONEY_STOCK", "_VALUE_WAS_CHARGE_MONEY_STOCK");
define("KEY_USER_STOCK_VALUE_WAS_CHARGE_MONEY_STOCK", "_K12USVWCMS_");
//====================================================================
//GROUP 13 USER VIDEO
define("TABLE_USER_VIDEO", "Table_User_Video");
define("KEY_TABLE_USER_VIDEO", "USERVIDEO");

define("FILED_USER_VIDEO_ID", "ID");
define("KEY_USER_VIDEO_ID", "_K13UVI_");

define("FILED_USER_VIDEO_UID", "_UID");
define("KEY_USER_VIDEO_UID", "_K13UVUI_");

define("FILED_USER_VIDEO_VIDEO_PATH", "_VIDEO_PATH");
define("KEY_USER_VIDEO_VIDEO_PATH", "_K13UVVP_");

define("FILED_USER_VIDEO_COMMENT", "_COMMENT");
define("KEY_USER_VIDEO_COMMENT", "_K13UVC_");

define("FILED_USER_VIDEO_TIME_OF_LIKE", "_TIME_OF_LIKE");
define("KEY_USER_VIDEO_TIME_OF_LIKE", "_K13UVTOL_");

define("FILED_USER_VIDEO_TIME_OF_UNLIKE", "_TIME_OF_UNLIKE");
define("KEY_USER_VIDEO_TIME_OF_UNLIKE", "_K13UVTOU_");

define("FILED_USER_VIDEO_PRIVACY", "_PRIVACY");
define("KEY_USER_VIDEO_PRIVACY", "_K13UVP_");

define("FILED_USER_VIDEO_INATTACH", "_INATTACH");
define("KEY_USER_VIDEO_INATTACH", "_K13UVINTT_");
//====================================================================
//GROUP 14 MESSAGE
define("TABLE_MESSAGE", "Table_Messages");
define("KEY_TABLE_MESSAGE", "MESSAGES");

define("FILED_MESSAGE_ID", "ID");
define("KEY_MESSAGE_ID", "_K14MI_");

define("FILED_MESSAGE_UID", "_UID");
define("KEY_MESSAGE_UID", "_K14MU_");

define("FILED_MESSAGE_TO", "_TO");
define("KEY_MESSAGE_TO", "_K14MT_");

define("FILED_MESSAGE_FROM", "_FROM");
define("KEY_MESSAGE_FROM", "_K14MF_");

define("FILED_MESSAGE_MESSAGE", "_MESSAGE");
define("KEY_MESSAGE_MESSAGE", "_K14MM_");

define("FILED_MESSAGE_ATTACH", "_ATTACH");
define("KEY_MESSAGE_ATTACH", "_K14MATA_");

define("FILED_MESSAGE_DATE_TIME", "_DATE_TIME");
define("KEY_MESSAGE_DATE_TIME", "_K14MDA_");

define("FILED_MESSAGE_NEW", "_NEW");
define("KEY_MESSAGE_NEW", "_K14MN_");

define("FILED_MESSAGE_HIDE", "_HIDE");
define("KEY_MESSAGE_HIDE", "_K14MH_");
//====================================================================
//GROUP 15 NOTIFICATIONS
define("TABLE_NOTIFICATIONS", "Table_Notifications");
define("KEY_TABLE_NOTIFICATIONS", "NOTIFICATIONS");

define("FILED_NOTIFICATIONS_ID", "ID");
define("KEY_NOTIFICATIONS_ID", "_K15NI_");

define("FILED_NOTIFICATIONS_FROM", "_FROM");
define("KEY_NOTIFICATIONS_FROM", "_K15NF_");

define("FILED_NOTIFICATIONS_TO", "_TO");
define("KEY_NOTIFICATIONS_TO", "_K15NT_");

define("FILED_NOTIFICATIONS_LABEL", "_LABEL");
define("KEY_NOTIFICATIONS_LABEL", "_K15NL_");

define("FILED_NOTIFICATIONS_DATE_TIME", "_DATE_TIME");
define("KEY_NOTIFICATIONS_DATE", "_K15ND");

define("FILED_NOTIFICATIONS_ACTION", "_ACTION");
define("KEY_NOTIFICATIONS_ACTION", "_K15NA_");

define("FILED_NOTIFICATIONS_SERIAL", "_SERIAL");
define("KEY_NOTIFICATIONS_SERIAL", "_K15NS_");

define("FILED_NOTIFICATIONS_ISNEW", "_ISNEW");
define("KEY_NOTIFICATIONS_ISNEW", "_K15NIN_");


//====================================================================
//GROUP 16 FRIENDS
define("TABLE_FRIENDS", "Table_User_Friends");
define("KEY_TABLE_FRIENDS", "USERFRIENDS");

define("FILED_FRIENDS_ID", "ID");
define("KEY_FRIENDS_ID", "_K16FI_");

define("FILED_FRIENDS_UID", "_UID");
define("KEY_FRIENDS_UID", "_K16FU_");

define("FILED_FRIENDS_FRIEND", "_FRIEND");
define("KEY_FRIENDS_FRIEND", "_K16FF_");

define("FILED_FRIENDS_DATE", "_DATE_TIME");
define("KEY_FRIENDS_DATE", "_K16FD_");

define("FILED_FRIENDS_FAVORIT", "_FAVORIT");
define("KEY_FRIENDS_FAVORIT", "_K16FFV_");

define("FILED_FRIENDS_ACCEPT", "_ACCEPT");
define("KEY_FRIENDS_ACCEPT", "_K16FACC_");
//====================================================================
//GROUP 17 COMMANT PHOTOS
define("TABLE_USER_PHOTO_COMMENT", "Table_User_Photo_comment");
define("KEY_TABLE_USER_PHOTO_COMMENT", "USERPHOTOCOMMENT");

define("FILED_USER_PHOTO_COMMENT_ID", "ID");
define("KEY_USER_PHOTO_COMMENT_ID", "_K17UPCI_");

define("FILED_USER_PHOTO_COMMENT_UPID", "_UPID");
define("KEY_USER_PHOTO_COMMENT_UPID", "_K17UPCU_");

define("FILED_USER_PHOTO_COMMENT_FROM", "_FROM");
define("KEY_USER_PHOTO_COMMENT_FROM", "_K17UPCFR_");

define("FILED_USER_PHOTO_COMMENT_COMMENT", "_COMMENT");
define("KEY_USER_PHOTO_COMMENT_COMMENT", "_K17UPCC_");

define("FILED_USER_PHOTO_COMMENT_DATE", "_DATE_TIME");
define("KEY_USER_PHOTO_COMMENT_DATE", "_K17UPCD_");

define("FILED_USER_PHOTO_COMMENT_LIKE", "_LIKE");
define("KEY_USER_PHOTO_COMMENT_LIKE", "_K17UPCL_");

define("FILED_USER_PHOTO_COMMENT_UNLIKE", "_UNLIKE");
define("KEY_USER_PHOTO_COMMENT_UNLIKE", "_K17UPCUN_");
//====================================================================
//GROUP 18 COMMANT VIDEO
define("TABLE_USER_VIDEO_COMMENT", "Table_User_Video_comment");
define("KEY_TABLE_USER_VIDEO_COMMENT", "USERVODEOCOMMENT");

define("FILED_USER_VIDEO_COMMENT_ID", "ID");
define("KEY_USER_VIDEO_COMMENT_ID", "_K18UVCI_");

define("FILED_USER_VIDEO_COMMENT_UVID", "_UVID");
define("KEY_USER_VIDEO_COMMENT_UVID", "_K18UVCU_");

define("FILED_USER_VIDEO_COMMENT_FROM", "_FROM");
define("KEY_USER_VIDEO_COMMENT_FROM", "_K18UVCFR_");

define("FILED_USER_VIDEO_COMMENT_COMMENT", "_COMMENT");
define("KEY_USER_VIDEO_COMMENT_COMMENT", "_K18UVCC_");

define("FILED_USER_VIDEO_COMMENT_DATE", "_DATE_TIME");
define("KEY_USER_VIDEO_COMMENT_DATE", "_K18UVCD_");

define("FILED_USER_VIDEO_COMMENT_LIKE", "_LIKE");
define("KEY_USER_VIDEO_COMMENT_LIKE", "_K18UVCL_");

define("FILED_USER_VIDEO_COMMENT_UNLIKE", "_UNLIKE");
define("KEY_USER_VIDEO_COMMENT_UNLIKE", "_K18UVCUN_");
//====================================================================
//GROUP 19 POINT User
define("TABLE_USER_POINT", "Table_User_Point");
define("KEY_TABLE_USER_POINT", "USERPOINT");

define("FILED_USER_POINT_UID", "_UID");
define("KEY_USER_POINT_UID", "_K19UPU_");

define("FILED_USER_POINT_FROM", "_FROM");
define("KEY_USER_POINT_FROM", "_K19UPF_");

define("FILED_USER_POINT_POINT_STOCK", "_POINT_STOCK");
define("KEY_USER_POINT_POINT_STOCK", "_K19UPPS_");

define("FILED_USER_POINT_TOTAL_LIKE", "_TOTAL_LIKE");
define("KEY_USER_POINT_TOTAL_LIKE", "_K19UPTL_");

define("FILED_USER_POINT_TOTAL_UNLIKE", "_TOTAL_UNLIKE");
define("KEY_USER_POINT_TOTAL_UNLIKE", "_K19UPTUL_");

define("FILED_USER_POINT_DATE_CHARGE_POINT", "_DATE_CHARGE_POINT");
define("KEY_USER_POINT_DATE_CHARGE_POINT", "_K19UPDCP_");
//=======================================================================
//GROUP 20 Audio Table
define("TABLE_USER_AUDIO", "Table_User_Audio");
define("KEY_TABLE_USER_AUDIO", "USERAUDIO");

define("FILED_USER_AUDIO_ID", "ID");
define("KEY_USER_AUDIO_ID", "_K20UAI_");

define("FILED_USER_AUDIO_UID", "_UID");
define("KEY_USER_AUDIO_UID", "_K20UAUI_");

define("FILED_USER_AUDIO_AUDIO_PATH", "_AUDIO_PATH");
define("KEY_USER_AUDIO_AUDIO_PATH", "_K20UAAP_");

define("FILED_USER_AUDIO_COMMENT", "_COMMENT");
define("KEY_USER_AUDIO_COMMENT", "_K20UAC_");

define("FILED_USER_AUDIO_TIME_OF_LIKE", "_TIME_OF_LIKE");
define("KEY_USER_AUDIO_TIME_OF_LIKE", "_K20UATOL_");

define("FILED_USER_AUDIO_TIME_OF_UNLIKE", "_TIME_OF_UNLIKE");
define("KEY_USER_AUDIO_TIME_OF_UNLIKE", "_K20UATOU_");

define("FILED_USER_AUDIO_PRIVACY", "_PRIVACY");
define("KEY_USER_AUDIO_PRIVACY", "_K20UAP_");

define("FILED_USER_AUDIO_INATTACH", "_INATTACH");
define("KEY_USER_AUDIO_INATTACH", "_K20UAINTT_");
//======================================================================
//GROUP 21 Audio Comment Table
define("TABLE_USER_AUDIO_COMMENT", "Table_User_Audio_comment");
define("KEY_TABLE_USER_AUDIO_COMMENT", "USERAUDIOCOMMENT");

define("FILED_USER_AUDIO_COMMENT_ID", "ID");
define("KEY_USER_AUDIO_COMMENT_ID", "_K21UACI_");

define("FILED_USER_AUDIO_COMMENT_UAID", "_UAID");
define("KEY_USER_AUDIO_COMMENT_UAID", "_K21UACU_");

define("FILED_USER_AUDIO_COMMENT_FROM", "_FROM");
define("KEY_USER_AUDIO_COMMENT_FROM", "_K21UACFR_");

define("FILED_USER_AUDIO_COMMENT_COMMENT", "_COMMENT");
define("KEY_USER_AUDIO_COMMENT_COMMENT", "_K21UACC_");

define("FILED_USER_AUDIO_COMMENT_DATE", "_DATE_TIME");
define("KEY_USER_AUDIO_COMMENT_DATE", "_K21UACD_");

define("FILED_USER_AUDIO_COMMENT_LIKE", "_LIKE");
define("KEY_USER_AUDIO_COMMENT_LIKE", "_K21UACL_");

define("FILED_USER_AUDIO_COMMENT_UNLIKE", "_UNLIKE");
define("KEY_USER_AUDIO_COMMENT_UNLIKE", "_K21UACUN_");
//======================================================================
//GROUP 22 User Table IP Address
define("TABLE_USER_IP_ADDRESS", "Table_Users_IP_Address");
define("KEY_TABLE_USER_IP_ADDRESS", "USERIPADDRESS");

define("FILED_USER_IP_ADDRESS_ID", "ID");
define("KEY_USER_IP_ADDRESS_ID", "_K22UIAI_");

define("FILED_USER_IP_ADDRESS_UID", "_UID");
define("KEY_USER_IP_ADDRESS_UID", "_K22UIAU_");

define("FILED_USER_IP_ADDRESS_IP_ADDR", "_IP_ADDR");
define("KEY_USER_IP_ADDRESS_IP_ADDR", "_K22UIAIA_");

define("FILED_USER_IP_ADDRESS_LOCATION", "_LOCATION");
define("KEY_USER_IP_ADDRESS_LOCATION", "_K22UIAL_");

define("FILED_USER_IP_ADDRESS_TIME_DATE", "_DATE_TIME");
define("KEY_USER_IP_ADDRESS_TIME_DATE", "_K22UIATD_");
//=====================================================================
//Group 23 User Country Zone
define("TABLE_USER_COUNTRY_ZONE", "Table_User_Country_Zone");
define("KEY_TABLE_USER_COUNTRY_ZONE", "USERCOUNTRYZONE");

define("FILED_USER_COUNTRY_ZONE_ID", "ID");
define("KEY_USER_COUNTRY_ZONE_ID", "_K23UCZI_");

define("FILED_USER_COUNTRY_ZONE_UID", "_UID");
define("KEY_USER_COUNTRY_ZONE_UID", "_K23UCZU_");

define("FILED_USER_COUNTRY_ZONE_COUNTRY", "_COUNTRY");
define("KEY_USER_COUNTRY_ZONE_COUNTRY", "_K23UCZC_");
//=====================================================================
//Group 24 Bad Word
define("TABLE_BAD_WORD", "Table_Bad_Word");
define("FILED_BAD_WORD_ID", "ID");
define("FILED_BAD_WORD_WORD", "_WORD");
define("FILED_BAD_WORD_REPLACEMENT", "_REPLACEMENT");
define("FILED_BAD_WORD_HOW_TIME", "_HOW_TIME");
//=====================================================================
//Group 25 Woring Word
define("TABLE_WORRNING_WORD", "Table_Worrning_Word");
define("FILED_WORRNING_WORD_ID", "ID");
define("FILED_WORRNING_WORD_WORD", "_WORD");
define("FILED_WORRNING_WORD_HOW_TIME", "_HOW_TIME");
//=====================================================================
//Group 26 Extantion Woring Word
define("TABLE_WORRNING_WORD_EXTATION", "Table_Worrning_Word_Extintion");
define("FILED_WORRNING_WORD_WHO_SAY_THIS", "_WHO_SAY_THIS");
define("FILED_WORRNING_WORD_DATE_TIME", "_DATE_TIME");
define("FILED_WORRNING_WORD_IP", "_IP");
//=====================================================================
//Group 27 Hashtag Word
define("TABLE_HASHTAG", "Table_Hashtag");
define("FILED_HASHTAG_ID", "ID");
define("FILED_HASHTAG_WORD", "_WORD");
define("FILED_HASHTAG_HOW_TIME", "_HOW_TIME");
//=====================================================================
//Group 28 Main Table Language for Message System and Other
define("TABLE_LANGUAGE", "Table_Language");
define("FILED_LANGUAGE_ID", "ID");
define("FILED_LANGUAGE_LANGUAGE", "_LANGUAGE");
define("KEY_LANGUAGE_LANGUAGE", "_K28LL_");
//=====================================================================
//Group 29 SubTable Language for Message System and Other
define("TABLE_SYSTEM_LANGUAGE", "Table_System_Language");
define("FILED_SYSTEM_LANGUAGE_ID", "ID");
define("FILED_SYSTEM_LANGUAGE_LID", "_LID");
define("FILED_SYSTEM_LANGUAGE_MESSAGE_ORGINAL", "_MESSAGE_ORGINAL");
define("FILED_SYSTEM_LANGUAGE_MESSAGE_OTHER", "_MESSAGE_OTHER");
//=====================================================================
//Group 30 Music Catigory Music
define("TABLE_CATIGORY_MUSIC", "Table_Catigory_Music");
define("KEY_TABLE_CATIGORY_MUSIC", "table_catigory_music");

define("FILED_CATIGORY_MUSIC_ID", "ID");
define("KEY_CATIGORY_MUSIC_ID", "_K30CMID_");

define("FILED_CATIGORY_MUSIC_NAME", "_NAME");
define("KEY_CATIGORY_MUSIC_NAME", "_K30CMN_");

define("FILED_CATIGORY_MUSIC_IMAGE_PATH", "_IMAGE_PATH");
define("KEY_CATIGORY_MUSIC_IMAGE_PATH", "_K30CMIP_");
//=====================================================================
//Group 31 Music Album
define("TABLE_ALBUM_MUSIC", "Table_Album_Music");
define("KEY_TABLE_ALBUM_MUSIC", "table_album_music");

define("FILED_ALBUM_MUSIC_ID", "ID");
define("KEY_ALBUM_MUSIC_ID", "_K31AMID_");

define("FILED_ALBUM_MUSIC_CID", "_CID");
define("KEY_ALBUM_MUSIC_CID", "_K31AMCID_");

define("FILED_ALBUM_MUSIC_UID", "_UID");
define("KEY_ALBUM_MUSIC_UID", "_K31AMUID_");

define("FILED_ALBUM_MUSIC_NAME", "_NAME");
define("KEY_ALBUM_MUSIC_NAME", "_K31AMN_");

define("FILED_ALBUM_MUSIC_IMAGE_PATH", "_IMAGE_PATH");
define("KEY_ALBUM_MUSIC_IMAGE_PATH", "_K31AMIP_");

define("FILED_ALBUM_MUSIC_MEMBER_LIKE_IT", "_MEMBER_LIKE_IT");
define("KEY_ALBUM_MUSIC_MEMBER_LIKE_IT", "_K31AMMLI_");

define("FILED_ALBUM_MUSIC_HOW_MENY_LISINGD", "_HOW_MENY_LISINGD");
define("KEY_ALBUM_MUSIC_HOW_MENY_LISINGD", "_K31AMHML_");

define("FILED_ALBUM_MUSIC_BARCODE_PATH", "_BARCODE_PATH");
define("KEY_ALBUM_MUSIC_BARCODE_PATH", "_K31AMBP_");
//=====================================================================
//Group 32 Music Table for Stream
define("TABLE_MUSIC", "Table_Music");
define("KEY_TABLE_MUSIC", "table_music");

define("FILED_MUSIC_ID", "ID");
define("KEY_MUSIC_ID", "_K32MID");

define("FILED_MUSIC_AID", "_AID");
define("KEY_MUSIC_AID", "_K32MAID_");

define("FILED_MUSIC_UID", "_UID");
define("KEY_MUSIC_UID", "_K32MUID_");

define("FILED_MUSIC_NAME", "_NAME");
define("KEY_MUSIC_NAME", "_K32MN_");

define("FILED_MUSIC_TIME_OF_LIKE", "_TIME_OF_LIKE");
define("KEY_MUSIC_TIME_OF_LIKE", "_K32MTOL_");

define("FILED_MUSIC_TIME_OF_UNLIKE", "_TIME_OF_UNLIKE");
define("KEY_MUSIC_TIME_OF_UNLIKE", "_K32MTOUL_");

define("FILED_MUSIC_PRIVACY", "_PRIVACY");
define("KEY_MUSIC_PRIVACY", "_K32MPR_");

define("FILED_MUSIC_DATE_TIME", "_DATE_TIME");
define("KEY_MUSIC_DATE_TIME", "_K32MDT_");

define("FILED_MUSIC_HIDE", "_HIDE");
define("KEY_MUSIC_HIDE", "_K32MH_");
//=====================================================================
//Group 33 Post
define("TABLE_POST", "Table_Post");
define("KEY_TABLE_POST", "table_post");

define("FILED_POST_ID", "ID");
define("KEY_POST_ID", "_K33PID_");

define("FILED_POST_UID", "_UID");
define("KEY_POST_UID", "_K33PUID_");

define("FILED_POST_TEXT", "_TEXT");
define("KEY_POST_TEXT", "_K33PT_");

define("FILED_POST_MOOD", "_MOOD");
define("KEY_POST_MOOD", "_K33PM_");

define("FILED_POST_PLACE", "_PLACE");
define("KEY_POST_PLACE", "_K33PP_");

define("FILED_POST_MEDIA_PATH", "_MEDIA_PATH");
define("KEY_POST_MEDIA_PATH", "_K33PMP_");

define("FILED_POST_DATE_TIME", "_DATE_TIME");
define("KEY_POST_DATE_TIME", "_K33PDT_");

define("FILED_POST_TIME_OF_LIKE", "_TIME_OF_LIKE");
define("KEY_POST_TIME_OF_LIKE", "_K33PTOL_");

define("FILED_POST_TIME_OF_UNLIKE", "_TIME_OF_UNLIKE");
define("KEY_POST_TIME_OF_UNLIKE", "_K33PTOU_");

define("FILED_POST_PRIVACY", "_PRIVACY");
define("KEY_POST_PRIVACY", "_K33PPV_");

//=====================================================================
//Group 34 Post Comment
define("TABLE_POST_COMMENT", "Table_Post_Comment");
define("KEY_TABLE_POST_COMMENT", "Table_Post_Comment");

define("FILED_POST_COMMENT_ID", "ID");
define("KEY_POST_COMMENT_ID", "_K34PCID_");

define("FILED_POST_COMMENT_UID", "_UID");
define("KEY_POST_COMMENT_UID", "_K34PCUID_");

define("FILED_POST_COMMENT_CID", "_CID");
define("KEY_POST_COMMENT_CID", "_K34PCCID_");

define("FILED_POST_COMMENT_TEXT", "_TEXT");
define("KEY_POST_COMMENT_TEXT", "_K34PCT_");

define("FILED_POST_COMMENT_DATE_TIME", "_DATE_TIME");
define("KEY_POST_COMMENT_DATE_TIME", "_K34PTIMDE_");

define("FILED_POST_COMMENT_TIME_OF_LIKE", "_TIME_OF_LIKE");
define("KEY_POST_COMMENT_TIME_OF_LIKE", "_K34PCTOL_");

define("FILED_POST_COMMENT_TIME_OF_UNLIKE", "_TIME_OF_UNLIKE");
define("KEY_POST_COMMENT_TIME_OF_UNLIKE", "_K34PCTOU_");

define("FILED_POST_COMMENT_PRIVACY", "_PRIVACY");
define("KEY_POST_COMMENT_PRIVACY", "_K34PCPV_");

define("FILED_POST_COMMENT_MEDIA_PATH", "_MEDIA_PATH");
define("KEY_POST_COMMENT_MEDIA_PATH", "_K34PCMP_");

define("FILED_POST_COMMENT_FOR", "_FOR");
define("KEY_POST_COMMENT_FOR", "_K34PCFOR_");

define("FILED_POST_COMMENT_REPORT", "_REPORT");
define("KEY_POST_COMMENT_REPORT", "_K34PCRP_");

//=====================================================================
//Group 35 Post Recomment
define("TABLE_POST_COMMENT_RECOMMENT", "Table_Post_Comment_Recomment");
define("KEY_TABLE_POST_COMMENT_RECOMMENT", "Table_Post_Comment_Recomment");

define("FILED_POST_COMMENT_RECOMMENT_ID", "ID");
define("KEY_POST_COMMENT_RECOMMENT_ID", "_K35PCRID_");

define("FILED_POST_COMMENT_RECOMMENT_UID", "_UID");
define("KEY_POST_COMMENT_RECOMMENT_UID", "_K35PCRUID_");

define("FILED_POST_COMMENT_RECOMMENT_CCID", "_CCID");
define("KEY_POST_COMMENT_RECOMMENT_CCID", "_K35PCRCCID_");

define("FILED_POST_COMMENT_RECOMMENT_TEXT", "_TEXT");
define("KEY_POST_COMMENT_RECOMMENT_TEXT", "_K35PCRT_");

define("FILED_POST_COMMENT_RECOMMENT_DATE_TIME", "_DATE_TIME");
define("KEY_POST_COMMENT_RECOMMENT_DATE_TIME", "_K35PDATETI_");

define("FILED_POST_COMMENT_RECOMMENT_TIME_OF_LIKE", "_TIME_OF_LIKE");
define("KEY_POST_COMMENT_RECOMMENT_TIME_OF_LIKE", "_K35PCRTOL_");

define("FILED_POST_COMMENT_RECOMMENT_TIME_OF_UNLIKE", "_TIME_OF_UNLIKE");
define("KEY_POST_COMMENT_RECOMMENT_TIME_OF_UNLIKE", "_K35PCRTOU_");

define("FILED_POST_COMMENT_RECOMMENT_PRIVACY", "_PRIVACY");
define("KEY_POST_COMMENT_RECOMMENT_PRIVACY", "_K35PCRPV_");

define("FILED_POST_COMMENT_RECOMMENT_MEDIA_PATH", "_MEDIA_PATH");
define("KEY_POST_COMMENT_RECOMMENT_MEDIA_PATH", "_K35PCRMP_");

define("FILED_POST_COMMENT_RECOMMENT_REPORT", "_REPORT");
define("KEY_POST_COMMENT_RECOMMENT_REPORT", "_K35PCRRP_");

//=====================================================================
//Group 36 Location for user
define("TABLE_GPS_LOCATIONS", "Table_GPS_Locations");
define("KEY_TABLE_GPS_LOCATIONS", "Table_GPS_Locations");

define("FILED_GPS_LOCATIONS_ID", "ID");
define("KEY_GPS_LOCATIONS_ID", "_K36GLID_");

define("FILED_GPS_LOCATIONS_UID", "_UID");
define("KEY_GPS_LOCATIONS_UID", "_K36GLUID_");

define("FILED_GPS_LOCATIONS_LASTUPDATE", "_LASTUPDATE");
define("KEY_GPS_LOCATIONS_LASTUPDATE", "_K36GLLUD_");

define("FILED_GPS_LOCATIONS_LATITUDE", "_LATITUDE");
define("KEY_GPS_LOCATIONS_LATITUDE", "_K36GLLA_");

define("FILED_GPS_LOCATIONS_LONGITUDE", "_LONGITUDE");
define("KEY_GPS_LOCATIONS_LONGITUDE", "_K36GLLO_");

define("FILED_GPS_LOCATIONS_SPEED", "_SPEED");
define("KEY_GPS_LOCATIONS_SPEED", "_K36GLSP_");

define("FILED_GPS_LOCATIONS_DIRECTION", "_DIRECTION");
define("KEY_GPS_LOCATIONS_DIRECTION", "_K36GLDIR_");

define("FILED_GPS_LOCATIONS_DISTANCE", "_DISTANCE");
define("KEY_GPS_LOCATIONS_DISTANCE", "_K36GLDIS_");

define("FILED_GPS_LOCATIONS_GPSTIME", "_GPSTIME");
define("KEY_GPS_LOCATIONS_GPSTIME", "_K36GLGT_");

define("FILED_GPS_LOCATIONS_LOCATIONMETHOD", "_LOCATIONMETHOD");
define("KEY_GPS_LOCATIONS_LOCATIONMETHOD", "_K36GLLM_");

define("FILED_GPS_LOCATIONS_ACCURACY", "_ACCURACY");
define("KEY_GPS_LOCATIONS_ACCURACY", "_K36GLACC_");

define("FILED_GPS_LOCATIONS_EXTRAINFO", "_EXTRAINFO");
define("KEY_GPS_LOCATIONS_EXTRAINFO", "_K36GLEX_");

define("FILED_GPS_LOCATIONS_EVENTTYPE", "_EVENTTYPE");
define("KEY_GPS_LOCATIONS_EVENTTYPE", "_K36GLET_");
//=====================================================================
//Group 37 Shaer Table
define("TABLE_SHAER", "Table_Shaer");
define("KEY_TABLE_SHAER", "Table_Shaer");

define("FILED_SHAER_ID", "ID");
define("KEY_SHAER_ID", "_K37SID_");

define("FILED_SHAER_UID", "_UID");
define("KEY_SHAER_UID", "_K37SUID_");

define("FILED_SHAER_POST_ID", "_POST_ID");
define("KEY_SHAER_POST_ID", "_K37SPID_");

define("FILED_SHAER_TEXT", "_TEXT");
define("KEY_SHAER_TEXT", "_K37ST_");

define("FILED_SHAER_DATE_TIME", "_DATE_TIME");
define("KEY_SHAER_DATE_TIME", "_K37SD_");

define("FILED_SHAER_TIME_OF_LIKE", "_TIME_OF_LIKE");
define("KEY_SHAER_TIME_OF_LIKE", "_K37STOL_");

define("FILED_SHAER_TIME_OF_UNLIKE", "_TIME_OF_UNLIKE");
define("KEY_SHAER_TIME_OF_UNLIKE", "_K37STOU_");

define("FILED_SHAER_PRIVACY", "_PRIVACY");
define("KEY_SHAER_PRIVACY", "_K37SPV_");

define("FILED_SHAER_REPORT", "_REPORT");
define("KEY_SHAER_REPORT", "_K37SRP_");
//=====================================================================
//Group 38 Groups Table
define("TABLE_GROUPS", "Table_Groups");
define("KEY_TABLE_GROUPS", "Table_Groups");

define("FILED_GROUPS_ID", "ID");
define("KEY_GROUPS_ID", "_K38GID_");

define("FILED_GROUPS_NAME", "_NAME");
define("KEY_GROUPS_NAME", "_K38GN_");

define("FILED_GROUPS_GUID", "_GUID");
define("KEY_GROUPS_GUID", "_K38GGUD_");

define("FILED_GROUPS_LOGO_IMAGE", "_LOGO_IMAGE");
define("KEY_GROUPS_LOGO_IMAGE", "_K38GLI_");

define("FILED_GROUPS_ADMIN", "_ADMIN");
define("KEY_GROUPS_ADMIN", "_K38GA_");

define("FILED_GROUPS_PRIVACY", "_PRIVACY");
define("KEY_GROUPS_PRIVACY", "_K38GP_");

define("FILED_GROUPS_DATE_TIME", "_DATE_TIME");
define("KEY_GROUPS_DATE_TIME", "_K38GDT_");

define("FILED_GROUPS_HIDE", "_HIDE");
define("KEY_GROUPS_HIDE", "_K38GH_");
//=====================================================================
//Group 39 Member Groups Table
define("TABLE_MEMBER_GROUPS", "Table_Member_Groups");
define("KEY_TABLE_MEMBER_GROUPS", "Table_Member_Groups");

define("FILED_MEMBER_GROUP_ID", "ID");
define("KEY_MEMBER_GROUP_ID", "_K39MGID_");

define("FILED_MEMBER_GROUP_IDG", "_IDG");
define("KEY_MEMBER_GROUP_IDG", "_K39MGIDG_");

define("FILED_MEMBER_GROUP_UID", "_UID");
define("KEY_MEMBER_GROUP_UID", "_K39MGUID_");

define("FILED_MEMBER_GROUP_VALUE", "_VALUE");
define("KEY_MEMBER_GROUP_VALUE", "_K39MGV_");

define("FILED_MEMBER_GROUP_DATE_TIME", "_DATE_TIME");
define("KEY_MEMBER_GROUP_DATE_TIME", "_K39MGDT_");
//=====================================================================
//Group 40 Post Member in Groups Table
define("TABLE_POSTS_IN_GROUP", "Table_Posts_In_Group");
define("KEY_TABLE_POSTS_IN_GROUP", "table_posts_in_group");

define("FILED_POSTS_IN_GROUP_ID", "ID");
define("KEY_POSTS_IN_GROUP_ID", "_K40PMGID_");

define("FILED_POSTS_IN_GROUP_IDG", "_IDG");
define("KEY_POSTS_IN_GROUP_IDG", "_K40PMGIDG_");

define("FILED_POSTS_IN_GROUP_UIDMG", "_UIDMG");
define("KEY_POSTS_IN_GROUP_UIDMG", "_K40PMGUIMG_");

define("FILED_POSTS_IN_GROUP_TEXT", "_TEXT");
define("KEY_POSTS_IN_GROUP_TEXT", "_K40PMGTX_");

define("FILED_POSTS_IN_GROUP_MOOD", "_MOOD");
define("KEY_POSTS_IN_GROUP_MOOD", "_K40PMGM_");

define("FILED_POSTS_IN_GROUP_PLACE", "_PLACE");
define("KEY_POSTS_IN_GROUP_PLACE", "_K40PMGP_");

define("FILED_POSTS_IN_GROUP_MEDIA_PATH", "_MEDIA_PATH");
define("KEY_POSTS_IN_GROUP_MEDIA_PATH", "_K40PMGMP_");

define("FILED_POSTS_IN_GROUP_DATE_TIME", "_DATE_TIME");
define("KEY_POSTS_IN_GROUP_DATE_TIME", "_K40PMGDT_");

define("FILED_POSTS_IN_GROUP_TIME_OF_LIKE", "_TIME_OF_LIKE");
define("KEY_POSTS_IN_GROUP_TIME_OF_LIKE", "_K40PMGTOL_");

define("FILED_POSTS_IN_GROUP_TIME_OF_UNLIKE", "_TIME_OF_UNLIKE");
define("KEY_POSTS_IN_GROUP_TIME_OF_UNLIKE", "_K40PMGTOU_");
//=====================================================================
//Group 41 SMS Table
define("TABLE_SMS", "Table_SMS");
define("KEY_TABLE_SMS", "Table_SMS");

define("FILED_SMS_ID", "ID");
define("KEY_SMS_ID", "_K41SID_");

define("FILED_SMS_UID", "_UID");
define("KEY_SMS_UID", "_K41SUID_");

define("FILED_SMS_APIKEY", "_APIKEY");
define("KEY_SMS_APIKEY", "_K41SAP_");

define("FILED_SMS_ACTIVE_CODE", "_ACTIVE_CODE");
define("KEY_SMS_ACTIVE_CODE", "_K41SAC_");

define("FILED_SMS_STATUS", "_STATUS");
define("KEY_SMS_STATUS", "_K41SS_");

define("FILED_SMS_DATE_TIME", "_DATE_TIME");
define("KEY_SMS_DATE_TIME", "_K41SDT_");

///=====================================================================
//Group 42 Request SMS Table
define("TABLE_SMS_RESEVED_ACTIVE", "Table_SMS_RESEVED_ACTIVE");
define("KEY_TABLE_SMS_RESEVED_ACTIVE", "Table_SMS_RESEVED_ACTIVE");

define("FILED_SMS_RESEVED_ID", "ID");
define("KEY_SMS_RESEVED_ID", "_K42SRID_");

define("FILED_SMS_RESEVED_SMS_ID", "_SMS_ID");
define("KEY_SMS_RESEVED_SMS_ID", "_K42SRSI_");

define("FILED_SMS_RESEVED_CODE", "_CODE");
define("KEY_SMS_RESEVED_CODE", "_K42SRC_");

define("FILED_SMS_RESEVED_STATUS", "_STATUS");
define("KEY_SMS_RESEVED_STATUS", "_K42SRS_");

define("FILED_SMS_RESEVED_DATE_TIME", "_DATE_TIME");
define("KEY_SMS_RESEVED_DATE_TIME", "_K42SRDT_");
///=====================================================================
//Group 43 Gift  Catigory
define("TABLE_CATEGORY_GIFTES", "Table_Category_Giftes");
define("KEY_TABLE_CATEGORY_GIFTES", "TABLE_CATEGORY_GIFTES");

define("FILED_CATEGORY_GIFTES_ID", "ID");
define("KEY_CATEGORY_GIFTES_", "_K43CG");

define("FILED_CATEGORY_GIFTES_TEXT", "_TEXT");
define("KEY_CATEGORY_GIFTES_TEXT", "_K43CGT_");

define("FILED_CATEGORY_GIFTES_FREE", "_FREE");
define("KEY_CATEGORY_GIFTES_FREE", "_K43CGF_");

define("FILED_CATEGORY_GIFTES_PUBLICE", "_PUBLICE");
define("KEY_CATEGORY_GIFTES_PUBLICE", "_K43CGPU_");

define("FILED_CATEGORY_GIFTES_PRIVATE", "_PRIVATE");
define("KEY_CATEGORY_GIFTES_PRIVATE", "_K43CGPV_");
///=====================================================================
//Group 


/* --------------------------------+
 * System Paths                   |
 * --------------------------------+ */

define("IMAGE_FILE", "image");
define("MUSIC_FILE", "music");
define("WATERMARKE_FILE", "img_mark");
define("DATA_DIR_NAME", "data");
define("DATA_FILE", MAIN_DIR . DIRECTORY_SEPARATOR . DATA_DIR_NAME);
define("TEMP_FILE", MAIN_DIR . DIRECTORY_SEPARATOR . DATA_DIR_NAME . DIRECTORY_SEPARATOR . "tmp" . DIRECTORY_SEPARATOR);

define("FLAGS_BUFFER_SIZE", "64");

define("DIR_FOR_GIFTES", "giftes");
define("DIR_FOR_FLAGS", "flags");
define("DIR_FOR_ICONS", "icons");

define("IMAGE_WATERMARKER_1", "wow_1.png");
define("IMAGE_WATERMARKER_2", "wow_2.png");
define("IMAGE_WATERMARKER_3", "wow_3.png");
define("IMAGE_WATERMARKER_4", "wow_4.png");

define("SYSTEM_FILE_LOG", TEMP_FILE . "SystemLog.txt");
define("DATABASE_LOG", TEMP_FILE . "Databaselog.txt");
define("SYSTEM_FILE_TIME_FOR_DEBUG", TEMP_FILE . "CountDebug.txt");

define("BLOCK_DDOS_DIR", MAIN_DIR . DIRECTORY_SEPARATOR . "BDOS");
define("SYSTEM_XML_VAR", TEMP_FILE . "System.xml");

define("DIR_IMAGE", DATA_FILE . DIRECTORY_SEPARATOR . "users");
define("DIR_GROUPS", DATA_FILE . DIRECTORY_SEPARATOR . "groups");

define("DIR_FLAGS", DATA_DIR_NAME . DIRECTORY_SEPARATOR . IMAGE_FILE . DIRECTORY_SEPARATOR . DIR_FOR_FLAGS . DIRECTORY_SEPARATOR . FLAGS_BUFFER_SIZE . DIRECTORY_SEPARATOR);
define("DIR_GIFTS", DATA_DIR_NAME . DIRECTORY_SEPARATOR . IMAGE_FILE . DIRECTORY_SEPARATOR . DIR_FOR_GIFTES . DIRECTORY_SEPARATOR);
define("DIR_ICONS", DATA_DIR_NAME . DIRECTORY_SEPARATOR . IMAGE_FILE . DIRECTORY_SEPARATOR . DIR_FOR_ICONS . DIRECTORY_SEPARATOR);

define("DIR_MUSIC", DATA_FILE . DIRECTORY_SEPARATOR . MUSIC_FILE);

define("IMAGE_WATERMARKER_PATH_4", DATA_FILE . DIRECTORY_SEPARATOR . IMAGE_FILE . DIRECTORY_SEPARATOR . WATERMARKE_FILE . DIRECTORY_SEPARATOR . IMAGE_WATERMARKER_4);
define("IMAGE_WATERMARKER_PATH_3", DATA_FILE . DIRECTORY_SEPARATOR . IMAGE_FILE . DIRECTORY_SEPARATOR . WATERMARKE_FILE . DIRECTORY_SEPARATOR . IMAGE_WATERMARKER_3);
define("IMAGE_WATERMARKER_PATH_2", DATA_FILE . DIRECTORY_SEPARATOR . IMAGE_FILE . DIRECTORY_SEPARATOR . WATERMARKE_FILE . DIRECTORY_SEPARATOR . IMAGE_WATERMARKER_2);
define("IMAGE_WATERMARKER_PATH_1", DATA_FILE . DIRECTORY_SEPARATOR . IMAGE_FILE . DIRECTORY_SEPARATOR . WATERMARKE_FILE . DIRECTORY_SEPARATOR . IMAGE_WATERMARKER_1);

define("PATH_IMAGE_USERS", DIR_IMAGE);
define("PATH_GROUPS", DIR_GROUPS);
define("PATH_FLAGS", DIR_FLAGS);
define("PATH_GIFTES", DIR_GIFTS);
define("PATH_ICONS", DIR_ICONS);

define("GEOIP_DATA_FILE", MAIN_DIR . "/System/geoip/GeoLiteCity.dat");

define("DATABASE_SCRIPT_PATH", MAIN_DIR . "/Database/Super_WoW_DB.sql");

/* * **************************
 * Function Main Declaration*
 * ************************** */
define("ANDROID_PHONE_CONNECTION", "Android_Phone");
define("TESTING", "Test");
define("USER_GROUP", "User_Group");
define("USER_MANGMENT", "User_Mangment_Group");
define("MULTIMEDIA_GROUP", "Multimedia_Group");
define("USER_LOGIN", "Login_Unit");
define("MESSAGE_GROUP", "Message_Unit");
define("GIFT_GROUP", "Gift_Unit");
define("ICONS_USER_GROUP", "Icon_User_Unit");
define("MONEY_GROUP", "Money_Unit");
define("CONNECT_GROUP", "Conntact_Unit");
define("SYNC_GROUP", "Sync_Unit");
define("FRIEND_GROUP", "Friends");
define("SEARCH_GROUP", "Search");
define("COUNTRY_LIST", "BufferCountrys");
define("NETWORK_LIST", "BufferNetworks");
define("POST_GROUP", "Post");
define("GROUPS", "Groups");
define("SMS_GROUP", "sms_active");
define("RADIO_GROUP", "RadioOnline");

/* * **********************
 *  Get User List Switch*
 * ********************** */
define('GET_BY_ZONE_ONLY', 1);
define('GET_BY_NETWORK', 2);
define('GET_BY_PHONE_TYPE', 3);
define('GET_BY_COUNTRY', 4);
define('GET_BY_USER', 5);
/**
 * GEO LOCATION FILEDS
 */
define("GEO_CONTINENT_CODE", 0x1);
define("GEO_CONTINENTNAME", 0x2);
define("GEO_CONTINENT", 0x3);
define("GEO_COUNTRYCODE2", 0x4);
define("GEO_COUNTRYCODE3", 0x5);
define("GEO_COUNTRYNAME", 0x6);
define("GEO_REGIONNAME", 0x7);
define("GEO_CITYNAME", 0x8);
define("GEO_CITYLATITUDE", 0x9);
define("GEO_CITYLONGITUDE", 0x10);
define("GEO_COUNTRYLATITUDE", 0x11);
define("GEO_COUNTRYLONGITUDE", 0x12);
define("GEO_LOCALTIMEZONE", 0x15);
define("GEO_LOCALTIMEEPOCH", 0x16);
/* * ****************************************************************************+
 * ******************************  Privace  ************************************|
 * **************************************************************************** */
define("EVERYONE", 0);
define("FRIEND_ONLY", 1);
define("ZONE_ONLY", 2);
define("NETWORK_ONLY", 3);
define("GROUPS_ONLY", 4);
define("GROUPS_AND_FRIENDS", 5);
define("GROUPS_AND_ZONE", 6);
define("GROUPS_AND_NETWORK", 7);
define("ZONE_AND_NETWORK", 8);
define("ZONE_AND_FRIENDS", 9);
define("NETWORK_AND_FRIENDS", 10);
define("NETWORK_AND_ZONE", 11);
/* * ************************
 * Server Messages
 * ************************ */
define('WELCOME_MESSAGE_IN_STATUS', 'status_message');
define('SERVER_ERROR_TITEL_MESSAGE', 'error_titel_message');
define('SERVER_ERROR_MESSAGE', 'error_message');
define('SERVER_ERROR_NUMBER', 'error_number');
define('SORRY_FOR_UPDATE', 'update_message');
define("SERVER_REPAIR_TITEL_MESSAGE", "server_repair_message");
define("SERVER_REPAIR_MESSAGE", "server_update_message");
define("YOU_HAVE_A_NEW_MESSAGE", "YHNM");
define("NEW_MESSAGE", "NM");
define("NEW_FRIEND", "NFRI");
define("LABEL_USER_COMMENT", "label_user_comment");
define("ACTIVE_CODE", "active_code");
define("ERROR_MESSAGE", "error_message");
define("INVITATION", "invitation");

/* * *****************************************************************************
 * *****************************************************************************
 * *****************************************************************************
 * *****************************************************************************
 * ***************************************************************************** */

function Configration() {
    if (ONLINE_SERVER) {
        $db = array(
            'host' => 'localhost',
            'port' => 3306,
            'user' => 'USERNAME',
            'pass' => 'PASSWORD',
            'db' => 'DATABASE_NAME'
        );
        return $db;
    } else {
        $db = array(
            'host' => 'localhost',
            'port' => 3306,
            'user' => 'USERNAME',
            'pass' => 'PASSWORD',
            'db' => 'DATABASE_NAME'
        );
        return $db;
    }
}

function GetFunctions() {
    $MainFunctions = [
        ANDROID_PHONE_CONNECTION => array(
            CONNECTION_ANDROID
        ),
        TESTING => array(
            TEST
        ),
        USER_GROUP => array(
            NEW_USER, EDIT_USER, DELETE_USER
        ),
        USER_MANGMENT => array(
            GET_USER_INFO, GET_ALBUMES, SET_COMMENT_IN_PHOTO, GET_NOTIFICATION, EDIT_COMMENT_IN_PHOTO, DELETE_COMMENT_IN_PHOTO,
            STATUS_CHANGE, SET_PONANS, GET_PONANS, GET_USER_LIST
        ),
        MULTIMEDIA_GROUP => array(
            UPLOAD_MALTIMEDIA, GET_IMAGE, GET_VIDEO, GET_AUDIO, UPLOAD_FROM_URL
        ),
        USER_LOGIN => array(
            NORMAL_LOGIN, PASSWORD_LOGIN, ADMIN_LOGIN, USERSYSTEM_LOGIN
        ),
        MESSAGE_GROUP => array(
            SET_MESSAGE, GET_MESSAGE, GET_ALL_MESSAGE, DEL_MESSAGE
        ),
        GIFT_GROUP => array(
        ),
        ICONS_USER_GROUP => array(
        ),
        MONEY_GROUP => array(
        ),
        CONNECT_GROUP => array(
        ),
        SEARCH_GROUP => array(
            USER_SEARCH
        ),
        COUNTRY_LIST => array(
            COUNTRY_BUFFER_LIST
        ),
        NETWORK_LIST => array(
            NETWORK_BUFFER_LIST
        ),
        SYNC_GROUP => array(
            SYNC_COUNTRY, SYNC_MEMBER_IN_COUNTRY, SYNC_COMMENT, SYNC_FRINDS,
            SYNC_GIFTS, SYNC_MESSAGE, SYNC_NEWS,SYNC_MUSIC, SYNC_NOTIFICATION, SYNC_PONANS,
            SYNC_STOCK, SYNC_POST, SYNC_ALL
        ),
        FRIEND_GROUP => array(
            GET_USER_FRIENDS, MAKE_FRIEND, MAKE_UNFRIEND, SET_FRIEND_FAVORIT, SET_FRIEND_UNFAVORIT, SET_FRIEND_ACCEPT, SET_FRIEND_BLOCK, SET_FRIEND_UNBLOCK, SET_FRIEND_FOLLOWER, SET_FRIEND_REFUSED
        ),
        POST_GROUP => array(
            POST_SET, POST_GET_USER_POST, POST_EDI, POST_DEL, POST_SHEAR, SET_POST_COMMENT, GET_POST_COMMENT, SET_POST_RECOMMENT, GET_POST_RECOMMENT
        ),
        RADIO_GROUP => array(ONLINE_RADIO),
        GROUPS => array(CREATE_GROUP, DELETE_GROUP, EDIT_GROUP, ADDTO_GROUP, REVFROM_GROUP, UPDATELEVEL_GROUP),
        SMS_GROUP => array(SMS_ACTIVE_CODE)
    ];

    return $MainFunctions;
}

function FileAllow() {
    $file = array(
        AUDIO => array(
            'mp3', '3gp'
        ),
        VIDEO => array(
            'mp4'
        ),
        PHOTO => array(
            'jpg', 'png', 'JPG', 'PNG'
        )
    );

    return $file;
}

function SystemVariable($Var) {
    $File = SYSTEM_XML_VAR;
    if (file_exists($File)) {
        $dom = new DOMDocument();
        $dom->load(SYSTEM_XML_VAR);
        
        $dom->formatOutput = true;
        $x = $dom->documentElement;
        foreach ($x->childNodes AS $item) {
            if (strstr($item->nodeName, $Var)) {
                return $item->nodeValue;
            }
        }
        return false;
    } else {
        $Need = null;
        require_once MAIN_DIR . '/Database/SQLClass.php';
        $Configration = Configration();
        $Database = new SQLClass($Configration['db'], $Configration['user'], $Configration['pass']);
        if (!is_null($Data = $Database->select(TABLE_SYSTEM, [FILED_SYSTEM_ACTIV => ON]))) {
            $doc = new DOMDocument('1.0');
            $doc->formatOutput = true;
            $root = $doc->createElement('system');
            $root = $doc->appendChild($root);
            foreach ($Data as $Key => $Value) {
                $title = $doc->createElement($Key);
                $title = $root->appendChild($title);

                $text = $doc->createTextNode($Value);
                $text = $title->appendChild($text);
                if (strstr($Key, $Var)) {
                    $Need = $Value;
                }
            }
            $doc->save(SYSTEM_XML_VAR);
            $Database->closeConnection();
            unset($Database);
            unset($doc);
            unset($dom);

            return (!empty($Need) ? $Need : false);
        }
    }
}

function MessagesSystem($Message) {
    $MessgeArray = array(
        WELCOME_MESSAGE_IN_STATUS => "I am " . SystemVariable(FILED_SYSTEM_APPLICATION_NAME) . "Now :)",
        SERVER_ERROR_TITEL_MESSAGE => "404 Page Not Found",
        SERVER_ERROR_MESSAGE => "Page Not Found",
        SERVER_ERROR_NUMBER => "404",
        SORRY_FOR_UPDATE => "We Are Sorry But Server in Uptodate Please try later",
        SERVER_REPAIR_TITEL_MESSAGE => "Server is Repair",
        SERVER_REPAIR_MESSAGE => "We are sorry but server in update",
        YOU_HAVE_A_NEW_MESSAGE => "%s You Have a New Message",
        NEW_MESSAGE => "New Message From %s",
        NEW_FRIEND => "%s want to be your friend",
        LABEL_USER_COMMENT => "User %s comment on your photo.",
        ACTIVE_CODE => "Welcome to SuperWoW... Active Code : %s.Your Password: %s.",
        ERROR_MESSAGE => "Error : %s",
        INVITATION => "Your Friend %s is Invitation you to be friend in " .
        SystemVariable(FILED_SYSTEM_APPLICATION_NAME) . " URL: " .
        SystemVariable(FILED_SYSTEM_APPLICATION_PATH_MOBILE) . "."
    );
    return $MessgeArray[$Message];
}
