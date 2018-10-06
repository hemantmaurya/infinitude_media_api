<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'visit_id', 'client_id', 'status','last_update', 'country', 'balance','currency', 'custom_refer', 'has_ftd','campaign_keyword', 'ftd_date', 'lead_status', 'firstName', 'lastName', 'email', 'password', 'phone', 'reg_time', 'campaignId',
    ];

    


}
