<?php

/* Configuration File */

class Config
{
    // Database Connection
    public static $db_host      = 'localhost';
    public static $db_id        = 'root';
    public static $db_pw        = '';
    public static $db_name      = 'login';
    
    // Logo File Location
    public static $logo_path    = 'path here';
    
    // Table Name and Column for Insert
    public static $tb_name      = 'onsell';
    public static $col_name          = array ('onsell_name','onsell_description','onsell_price','onsell_pic');
    
    // Title of Modal
    public static $modal_title  = 'Add new On Sell';
    
    // Global Text input limit
    public static $max_lg_limit = 100;
    
    // Image Path Save
    public static $Save_to      = 'onsell_newimg/';
    
    public static $Return_to    = 'http://localhost/HHC';
}