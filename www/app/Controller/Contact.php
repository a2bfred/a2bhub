<?php

namespace App\Controller;

use App\Core;
use App\Model;
use App\Utility;
use App\Presenter;

/**
 * Register Controller:
 *
 * @author John Alex
 * @since 1.0.2
 */
class Contact extends Core\Controller {

    /**
     * Index: Renders the register view. NOTE: This controller can only be
     * accessed by unauthenticated users!
     * @access public
     * @example register/index
     * @return void
     * @since 1.0.2
     */
    public function index() {

        // Check that the user is unauthenticated.
        Utility\Auth::checkAuthenticated();

        // Get an instance of the user model using the ID stored in the session. 
        $userID = Utility\Session::get(Utility\Config::get("SESSION_USER"));
        if (!$User = Model\User::getInstance($userID)) {
            Utility\Redirect::to(APP_URL);
        }        

        if (!$Role = Model\Role::getInstance($userID)) {
            Utility\Redirect::to(APP_URL);
        }

        $role = $Role->getUserRole($userID)->role_name;

        if(empty($role)) {
            Utility\Redirect::to(APP_URL . $role);
        }
        
        $selectedTheme = $User->getUserSettings($userID);
        if(isset($selectedTheme[0]) && !empty($selectedTheme)){
            $selectedTheme = $selectedTheme[0]->theme;
        }else{
            $selectedTheme = '';
        }

        $this->View->addCSS("css/theme/".$selectedTheme.".css");
        $this->View->addCSS("css/".$selectedTheme.".css");
       
        // Render view template
        // Usage renderTemplate(string|$template, string|$filepath, array|$data)

        $imageList = (Object) Model\User::getProfile($userID);
        $profileImage = '/img/default-profile.png';
        foreach($imageList->user_image as $img){
            if( $img->image_src!="" && $img->image_type=='profile' ){
                $profileImage = base64_decode($img->image_src);
            }
        }

        // Set any dependencies, data and render the view.
        $this->View->addJS("js/contact.js");

        // Render view template
        // Usage renderTemplate(string|$template, string|$filepath, array|$data)
        $this->View->renderTemplate($role, "contact/index", [
            "title" => "Contact Us",
            "data" => (new Presenter\Profile($User->data()))->present(),
            "user" => (Object) Model\User::getProfile($userID),
            "users" => Model\User::getUsersInstance($userID),
            "image_profile" => $profileImage,
            'selected_theme' => $selectedTheme
        ]);
    }

    public function sendEmail($userID=""){
        
        $userID = Utility\Session::get(Utility\Config::get("SESSION_USER"));
        if (!$User = Model\User::getInstance($userID)) {
            Utility\Redirect::to(APP_URL);
        }  
        
        if(isset($_POST)){
            $mail = Model\SendMail::sendContactus($_POST);
            // return json_encode(["success"=>true]);
            echo json_encode($mail);
        }
      
    }
}