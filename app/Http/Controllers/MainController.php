<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Taxtype;
use App\Models\Nontaxable;
use App\Models\Activitycode;
use App\Models\Unittype;
use App\Models\Country;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $login =  TaxLogin();

       dd($login);
    }


    public function notifications()
    {
         dd('notifivation');
    }






    //  TODO=>=>add Tax Types To Seeder

    public function taxx()
    {



       $taxes =  [
           [
              "Code" => "T1",
              "Desc_en"=> "Value added tax",
              "Desc_ar"=> "ضريبه القيمه المضافه"
           ],
           [
              "Code"=> "T2",
              "Desc_en"=> "Table tax (percentage)",
              "Desc_ar"=> "ضريبه الجدول (نسبيه)"
            ],
            [
              "Code"=> "T3",
              "Desc_en"=> "Table tax (Fixed Amount)",
              "Desc_ar"=> "ضريبه الجدول (قطعيه)"
            ],
            [
              "Code"=> "T4",
              "Desc_en"=> "Withholding tax (WHT)",
              "Desc_ar"=> "الخصم تحت حساب الضريبه"
            ],
            [
              "Code"=> "T5",
              "Desc_en"=> "Stamping tax (percentage)",
              "Desc_ar"=> "ضريبه الدمغه (نسبيه)"
             ],
            [
              "Code"=> "T6",
              "Desc_en"=> "Stamping Tax (amount)",
              "Desc_ar"=> "ضريبه الدمغه (قطعيه بمقدار ثابت )"
             ],
            [
              "Code"=> "T7",
              "Desc_en"=> "Entertainment tax",
              "Desc_ar"=> "ضريبة الملاهى"
             ],
            [
              "Code"=> "T8",
              "Desc_en"=> "Resource development fee",
              "Desc_ar"=> "رسم تنميه الموارد"
             ],
            [
              "Code"=> "T9",
              "Desc_en"=> "Table tax (percentage)",
              "Desc_ar"=> "رسم خدمة"
             ],
            [
              "Code"=> "T10",
              "Desc_en"=> "Municipality Fees",
              "Desc_ar"=> "رسم المحليات"
             ],
            [
              "Code"=> "T11",
              "Desc_en"=> "Medical insurance fee",
              "Desc_ar"=> "رسم التامين الصحى"
             ],
            [
              "Code"=> "T12",
              "Desc_en"=> "Other fees",
              "Desc_ar"=> "رسوم أخري"
            ],



            [
              "Code"=> "T13",
              "Desc_en"=> "Stamping tax (percentage)",
              "Desc_ar"=> "ضريبه الدمغه (نسبيه)"
            ],
            [
              "Code"=> "T14",
              "Desc_en"=> "Stamping Tax (amount)",
              "Desc_ar"=> "ضريبه الدمغه (قطعيه بمقدار ثابت )"
            ],
            [
              "Code"=> "T15",
              "Desc_en"=> "Entertainment tax",
              "Desc_ar"=> "ضريبة الملاهى"
            ],
            [
              "Code"=> "T16",
              "Desc_en"=> "Resource development fee",
              "Desc_ar"=> "رسم تنميه الموارد"
            ],
            [
              "Code"=> "T17",
              "Desc_en"=> "Table tax (percentage)",
              "Desc_ar"=> "رسم خدمة"
            ],
            [
              "Code"=> "T18",
              "Desc_en"=> "Municipality Fees",
              "Desc_ar"=> "رسم المحليات"
            ],
            [
              "Code"=> "T19",
              "Desc_en"=> "Medical insurance fee",
              "Desc_ar"=> "رسم التامين الصحى"
            ],
            [
              "Code"=> "T20",
              "Desc_en"=> "Other fees",
              "Desc_ar"=> "رسوم أخرى"
           ]

        ];


        foreach($taxes as $tax){


            Taxtype::create([

                'code'    => $tax['Code'],
                'name_en' => $tax['Desc_en'],
                'name_ar' => $tax['Desc_ar'],
            ]);

        }

        return redirect('/');
    }



    public function nontaxx()
    {

        // nontaxx


        $taxes = [


                [
                  "Code"           =>"V001",
                  "Desc_en"         =>"Export",
                  "Desc_ar"         =>"تصدير للخارج",
                  "TaxtypeReference"=>"T1",
                  'type'            => 'amount',
            ],
                [
                  "Code"=>"V002",
                  "Desc_en"=>"Export to free areas and other areas",
                  "Desc_ar"=>"تصدير مناطق حرة وأخرى",
                  "TaxtypeReference"=>"T1",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"V003",
                  "Desc_en"=>"Exempted good or service",
                  "Desc_ar"=>"سلعة أو خدمة معفاة",
                  "TaxtypeReference"=>"T1",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"V004",
                  "Desc_en"=>"A non-taxable good or service",
                  "Desc_ar"=>"سلعة أو خدمة غير خاضعة للضريبة",
                  "TaxtypeReference"=>"T1",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"V005",
                  "Desc_en"=>"Exemptions for diplomats, consulates and embassies",
                  "Desc_ar"=>"إعفاءات دبلوماسين والقنصليات والسفارات",
                  "TaxtypeReference"=>"T1",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"V006",
                  "Desc_en"=>"Defence and National security Exemptions",
                  "Desc_ar"=>"إعفاءات الدفاع والأمن القومى",
                  "TaxtypeReference"=>"T1",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"V007",
                  "Desc_en"=>"Agreements exemptions",
                  "Desc_ar"=>"إعفاءات اتفاقيات",
                  "TaxtypeReference"=>"T1",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"V008",
                  "Desc_en"=>"Special Exemptios and other reasons",
                  "Desc_ar"=>"إعفاءات خاصة و أخرى",
                  "TaxtypeReference"=>"T1",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"V009",
                  "Desc_en"=>"General Item sales",
                  "Desc_ar"=>"سلع عامة",
                  "TaxtypeReference"=>"T1",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"V010",
                  "Desc_en"=>"Other Rates",
                  "Desc_ar"=>"نسب ضريبة أخرى",
                  "TaxtypeReference"=>"T1",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"Tbl01",
                  "Desc_en"=>"Table tax (percentage)",
                  "Desc_ar"=>"ضريبه الجدول (نسبيه)",
                  "TaxtypeReference"=>"T2",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"Tbl02",
                  "Desc_en"=>"Table tax (Fixed Amount)",
                  "Desc_ar"=>"ضريبه الجدول (النوعية)",
                  "TaxtypeReference"=>"T3",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W001",
                  "Desc_en"=>"Contracting",
                  "Desc_ar"=>"المقاولات",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W002",
                  "Desc_en"=>"Supplies",
                  "Desc_ar"=>"التوريدات",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W003",
                  "Desc_en"=>"Purachases",
                  "Desc_ar"=>"المشتريات",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W004",
                  "Desc_en"=>"Services",
                  "Desc_ar"=>"الخدمات",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W005",
                  "Desc_en"=>"Sumspaid by the cooperative societies for car transportation to their members",
                  "Desc_ar"=>"المبالغالتي تدفعها الجميعات التعاونية للنقل بالسيارات لاعضائها",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W006",
                  "Desc_en"=>"Commissionagency & brokerage",
                  "Desc_ar"=>"الوكالةبالعمولة والسمسرة",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W007",
                  "Desc_en"=>"Discounts& grants & additional exceptional incentives granted by smoke &cement companies",
                  "Desc_ar"=>"الخصوماتوالمنح والحوافز الاستثنائية ةالاضافية التي تمنحها شركات الدخان والاسمنت ",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W008",
                  "Desc_en"=>"Alldiscounts & grants & commissions granted by petroleum &telecommunications & other companies",
                  "Desc_ar"=>"جميعالخصومات والمنح والعمولات  التيتمنحها  شركات البترول والاتصالات ...وغيرها من الشركات المخاطبة بنظام الخصم",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W009",
                  "Desc_en"=>"Supporting export subsidies",
                  "Desc_ar"=>"مساندة دعم الصادرات التي يمنحها صندوق تنمية الصادرات ",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W010",
                  "Desc_en"=>"Professional fees",
                  "Desc_ar"=>"اتعاب مهنية",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W011",
                  "Desc_en"=>"Commission & brokerage _A_57",
                  "Desc_ar"=>"العمولة والسمسرة _م_57",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W012",
                  "Desc_en"=>"Hospitals collecting from doctors",
                  "Desc_ar"=>"تحصيل المستشفيات من الاطباء",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W013",
                  "Desc_en"=>"Royalties",
                  "Desc_ar"=>"الاتاوات",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W014",
                  "Desc_en"=>"Customs clearance",
                  "Desc_ar"=>"تخليص جمركي ",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W015",
                  "Desc_en"=>"Exemption",
                  "Desc_ar"=>"أعفاء",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"W016",
                  "Desc_en"=>"advance payments",
                  "Desc_ar"=>"دفعات مقدمه",
                  "TaxtypeReference"=>"T4",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"ST01",
                  "Desc_en"=>"Stamping tax (percentage)",
                  "Desc_ar"=>"ضريبه الدمغه (نسبيه)",
                  "TaxtypeReference"=>"T5",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"ST02",
                  "Desc_en"=>"Stamping Tax (amount)",
                  "Desc_ar"=>"ضريبه الدمغه (قطعيه بمقدار ثابت)",
                  "TaxtypeReference"=>"T6",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"Ent01",
                  "Desc_en"=>"Entertainment tax (rate)",
                  "Desc_ar"=>"ضريبة الملاهى (نسبة)",
                  "TaxtypeReference"=>"T7",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"Ent02",
                  "Desc_en"=>"Entertainment tax (amount)",
                  "Desc_ar"=>"ضريبة الملاهى (قطعية)",
                  "TaxtypeReference"=>"T7",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"RD01",
                  "Desc_en"=>"Resource development fee (rate)",
                  "Desc_ar"=>"رسم تنميه الموارد (نسبة)",
                  "TaxtypeReference"=>"T8",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"RD02",
                  "Desc_en"=>"Resource development fee (amount)",
                  "Desc_ar"=>"رسم تنميه الموارد (قطعية)",
                  "TaxtypeReference"=>"T8",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"SC01",
                  "Desc_en"=>"Service charges (rate)",
                  "Desc_ar"=>"رسم خدمة (نسبة)",
                  "TaxtypeReference"=>"T9",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"SC02",
                  "Desc_en"=>"Service charges (amount)",
                  "Desc_ar"=>"رسم خدمة (قطعية)",
                  "TaxtypeReference"=>"T9",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"Mn01",
                  "Desc_en"=>"Municipality Fees (rate)",
                  "Desc_ar"=>"رسم المحليات (نسبة)",
                  "TaxtypeReference"=>"T10",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"Mn02",
                  "Desc_en"=>"Municipality Fees (amount)",
                  "Desc_ar"=>"رسم المحليات (قطعية)",
                  "TaxtypeReference"=>"T10",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"MI01",
                  "Desc_en"=>"Medical insurance fee (rate)",
                  "Desc_ar"=>"رسم التامين الصحى (نسبة)",
                  "TaxtypeReference"=>"T11",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"MI02",
                  "Desc_en"=>"Medical insurance fee (amount)",
                  "Desc_ar"=>"رسم التامين الصحى (قطعية)",
                  "TaxtypeReference"=>"T11",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"OF01",
                  "Desc_en"=>"Other fees (rate)",
                  "Desc_ar"=>"رسوم أخرى (نسبة)",
                  "TaxtypeReference"=>"T12",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"OF02",
                  "Desc_en"=>"Other fees (amount)",
                  "Desc_ar"=>"رسوم أخرى (قطعية)",
                  "TaxtypeReference"=>"T12",
                  'type' => 'amount'
            ],
                [
                  "Code"=>"ST03",
                  "Desc_en"=>"Stamping tax (percentage)",
                  "Desc_ar"=>"ضريبه الدمغه (نسبيه)",
                  "TaxtypeReference"=>"T13",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"ST04",
                  "Desc_en"=>"Stamping Tax (amount)",
                  "Desc_ar"=>"ضريبه الدمغه (قطعيه بمقدار ثابت)",
                  "TaxtypeReference"=>"T14",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"Ent03",
                  "Desc_en"=>"Entertainment tax (rate)",
                  "Desc_ar"=>"ضريبة الملاهى (نسبة)",
                  "TaxtypeReference"=>"T15",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"Ent04",
                  "Desc_en"=>"Entertainment tax (amount)",
                  "Desc_ar"=>"ضريبة الملاهى (قطعية)",
                  "TaxtypeReference"=>"T15",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"RD03",
                  "Desc_en"=>"Resource development fee (rate)",
                  "Desc_ar"=>"رسم تنميه الموارد (نسبة)",
                  "TaxtypeReference"=>"T16",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"RD04",
                  "Desc_en"=>"Resource development fee (amount)",
                  "Desc_ar"=>"رسم تنميه الموارد (قطعية)",
                  "TaxtypeReference"=>"T16",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"SC03",
                  "Desc_en"=>"Service charges (rate)",
                  "Desc_ar"=>"رسم خدمة (نسبة)",
                  "TaxtypeReference"=>"T17",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"SC04",
                  "Desc_en"=>"Service charges (amount)",
                  "Desc_ar"=>"رسم خدمة (قطعية)",
                  "TaxtypeReference"=>"T17",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"Mn03",
                  "Desc_en"=>"Municipality Fees (rate)",
                  "Desc_ar"=>"رسم المحليات (نسبة)",
                  "TaxtypeReference"=>"T18",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"Mn04",
                  "Desc_en"=>"Municipality Fees (amount)",
                  "Desc_ar"=>"رسم المحليات (قطعية)",
                  "TaxtypeReference"=>"T18",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"MI03",
                  "Desc_en"=>"Medical insurance fee (rate)",
                  "Desc_ar"=>"رسم التامين الصحى (نسبة)",
                  "TaxtypeReference"=>"T19",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"MI04",
                  "Desc_en"=>"Medical insurance fee (amount)",
                  "Desc_ar"=>"رسم التامين الصحى (قطعية)",
                  "TaxtypeReference"=>"T19",
                  'type' => 'amount',
            ],
                [
                  "Code"=>"OF03",
                  "Desc_en"=>"Other fees (rate)",
                  "Desc_ar"=>"رسوم أخرى (نسبة)",
                  "TaxtypeReference"=>"T20",
                  'type' => 'percentage',
            ],
                [
                  "Code"=>"OF04",
                  "Desc_en"=>"Other fees (amount)",
                  "Desc_ar"=>"رسوم أخرى (قطعية)",
                  "TaxtypeReference"=>"T20",
                  'type' => 'amount',

              ]
        ];


        foreach($taxes as $tax){


            Taxtype::create([

                'code'    => $tax['Code'],
                'name_en' => $tax['Desc_en'],
                'name_ar' => $tax['Desc_ar'],
                'parent'  => $tax['TaxtypeReference'],
                'type'    => $tax['type'],
            ]);

        }

        return redirect('/');
    }



    public function activity(){


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://sdk.preprod.invoicing.eta.gov.eg/files/ActivityCodes.json',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',

          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $response = json_decode($response, true);

        foreach($response as $res){


          Activitycode::create([

                'code'    => $res['code'],
                'Desc_en' => $res['Desc_en'],
                'Desc_ar' => $res['Desc_ar'],
          ]);
        }


        dd('done');
    }


    public function unittype(){


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://sdk.preprod.invoicing.eta.gov.eg/files/UnitTypes.json',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',

          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $response = json_decode($response, true);

        foreach($response as $res){


          Unittype::create([

                'code'    => $res['code'],
                'desc_en' => $res['desc_en'],
                'desc_ar' => $res['desc_ar'],
          ]);
        }


        dd('done');
    }

    public function country(){


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://sdk.preprod.invoicing.eta.gov.eg/files/CountryCodes.json',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Content-Type: application/json',

          ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $response = json_decode($response, true);

        foreach($response as $res){


          Country::create([

                'code'    => $res['code'],
                'Desc_en' => $res['Desc_en'],
                'Desc_ar' => $res['Desc_ar'],
          ]);
        }


        dd('done');
    }

}
