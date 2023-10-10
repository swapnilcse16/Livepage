<?php
    $linkprefix = "";
    if($navdesign!=0){
        $linkprefix = "index.php";
    }
    $menu = array("Home", "About", "Academics", "People", "Notices", "News and Events");
    $menulinks = array($linkprefix."#hero-section", $linkprefix."#about", "#header", "#header", $linkprefix."#about", $linkprefix."#courses");
    
    //Whether the i-th item has any dropdown or not.
    ///This array must be changed when the sequence of menu is changed
    $dropdownindex = array(0, 0, 1, 1, 0, 0); 
    
    /*This portion to be changed if a new drop down is added*/
    ///i-th array is the elements of i-th dropdown
    $deepdropdowns = array(
        array("Courses", "Syllabus"), //List of Academics
        array("Faculty Members", "Officers and Staff") //List of People
    );


    $deepdropdownlinks = array(
        array("#", "#"), //List of Academics
        array("people.php", "people.php") //List of People
    );

    //i-th element is the size of i-th dropdown
    $deepdropdownsize = array(2, 2);
?>