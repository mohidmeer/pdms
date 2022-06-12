<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'father_husband_name',
        'iqama_no',
        'passport_no',
        'hijri_detention_date',
        'gregorian_detention_date',
        'detention_authority',
        'detention_city',
        'status',
        'charges_crime',
        'case_details',
        'prison',
        'prisoner_number',
        'pakistan_city',
        'detention_period',
        'private_rights_haq_e_khas',
        'expected_release_date_status',
        'etd_date',
        'shifted_to_other_department',
        'shifting_date_gregorian',
        'actual_release_date_hijri',
        'actual_release_date_gregorian',
        'prisoner_status',
    ];

    public function shifted_to_other_department()
    {
        return $this->hasMany(PrisionerShifted::class);
    }

    public static function detention_authority(): array
    {
        return [
            'Administrative Intelligence',
            'Anti narcotics',
            'Border Security',
            'State Security',
        ];
    }

    public static function detention_city(): array
    {
        return [
            'Ahsa',
            'Dammam',
            'Hafr Al Batin',
            'Jaof',
            'Majma',
            'Northern Borders',
            'Riyadh',
        ];
    }

    public static function prisoner_status(): array
    {
        return [
            'Under Trial',
            'Detainee',
            'Sentence',
        ];
    }

    public static function crime_charges(): array
    {
        return [
            'Border Security',
            'Border Security Violation',
            'Bribery',
            'Cyber Crime',
            'Dishonesty',
            'Drugs ',
            'Embezzlement',
            'Fighting',
            'Financial Claim',
            'Forgery',
            'Fraud',
            'Illegal Border Cross',
            'Immoral Offence',
            'Interpol ',
            'Kidnapping',
            'Miscellaneous',
            'Money Laundering',
            'Murder ',
            'Robbery ',
            'Security',
            'Smuggling',
            'Theft',
            'Theft / Robbery',
            'Traffic Accident',
            'Wine',
            'Wine Selling',
        ];
    }


    public static function prisons(): array
    {
        return [
            'Askaan - RD',
            'Malaz - RD',
            'Kharj - RD',
            'Hota bani tamim - RD',
            'Muzahmiyah - RD',
            'Quwaiiyah - RD',
            'Duwadmi -  RD',
            'Shaqra - RD',
            'Majma - RD',
            'Wadi Dawasir - RD',
            'Buraidah - QM',
            'Unaizah - QM',
            'Rass - QM',
            'Dammam - EN',
            'Ahsa - EN',
            'Jubail - EN',
            'Khafji - EN',
            'Hafr al Batin - EN',
            'Rafha - NB',
            'Arar - NB',
            'Turaif - NB',
            'Sakaka - JF',
            'Qurayyat - JF',
            'Hail',
            'Tabuk',
        ];
    }
}
