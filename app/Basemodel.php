<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class Basemodel extends Model
{
    //
    
	public function scopeMonthvaluestring()
   {
   		return[ '01'=>"JANUARY",
		    	'02'=>"FEBRUARY",
		    	'03'=>"MARCH",
		    	'04'=>"APRIL",
		    	'05'=>"MAY",
		    	'06'=>"JUNE",
		    	'07'=>"JULY",
		    	'08'=>"AUGUST",
		    	'09'=>"SEPTEMBER",
		    	'10'=>"OCTOBER",
		    	'11'=>"NOVEMBER",
		    	'12'=>"DECEMBER",
    	];
   }

    public function scopePeriodcovered()
    {
    	return[ '1'=>"01-01",
		    	'2'=>"01-16",
		    	'3'=>"02-01",
		    	'4'=>"02-16",
		    	'5'=>"03-01",
		    	'6'=>"03-16",
		    	'7'=>"04-01",
		    	'8'=>"04-16",
		    	'9'=>"05-01",
		    	'10'=>"05-16",
		    	'11'=>"06-01",
		    	'12'=>"06-16",
		    	'13'=>"07-01",
		    	'14'=>"07-16",
		    	'15'=>"08-01",
		    	'16'=>"08-16",
		    	'17'=>"09-01",
		    	'18'=>"09-16",
		    	'19'=>"10-01",
		    	'20'=>"10-16",
		    	'21'=>"11-01",
		    	'22'=>"11-16",
		    	'23'=>"12-01",
		    	'24'=>"12-16",
    	];
    }

   public function scopeMonthvalue()
   {
   		return[ '01-1'=>1,
		    	'01-2'=>2,
		    	'02-1'=>3,
		    	'02-2'=>4,
		    	'03-1'=>5,
		    	'03-2'=>6,
		    	'04-1'=>7,
		    	'04-2'=>8,
		    	'05-1'=>9,
		    	'05-2'=>10,
		    	'06-1'=>11,
		    	'06-2'=>12,
		    	'07-1'=>13,
		    	'07-2'=>14,
		    	'08-1'=>15,
		    	'08-2'=>16,
		    	'09-1'=>17,
		    	'09-2'=>18,
		    	'10-1'=>19,
		    	'10-2'=>20,
		    	'11-1'=>21,
		    	'11-2'=>22,
		    	'12-1'=>23,
		    	'12-2'=>24,
    	];
   }

   public function scopeModepayment()
   {
   		return[ '7'=>"Weekly",
		    	'2'=>"Bimonthly",
		    	'3'=>"Quarterly",
		    	'1'=>"Monthly",
    	];
   }


}
