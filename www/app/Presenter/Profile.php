<?php

namespace App\Presenter;

use App\Core;

/**
 * Profile Presenter:
 *
 * @author John Alex
 * @since 1.0.6
 */
class Profile extends Core\Presenter {

    /**
     * Format:
     * @access public
     * @return array
     * @since 1.0.6
     */
    public function format() {
        return [
            "name" => $this->data->first_name . " " . $this->data->last_name,
            "email" => $this->data->email
        ];
    }

}
