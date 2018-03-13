<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    public function saveLead($data)
    {
            $this->name_lead = $data['name_lead'];
            $this->email_lead = $data['email_lead'];
            $this->contacted = "not";
            $this->save();
            return 1;
    }   
}
