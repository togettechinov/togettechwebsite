<?php
/**
 * Created by PhpStorm.
 * User: teukapmaths
 * Date: 09/11/2017
 * Time: 12:40
 */

use Illuminate\Routing\Route;

if (! function_exists('classActivePath')) {
    /**
     * Best practice for handling "active" menu item in L5
     * @param $paths
     * @return string
     */
    function classActivePath($paths) {

        if(is_array($paths)) {
            $flag = true;
            foreach($paths as $path) {
                $path = explode('.', $path);
                $segment = 2;
                $flag = true;

                foreach($path as $p) {
                    $flag = $flag && (request()->segment($segment) == $p);
                    $segment++;
                }

                if($flag) break;
            }

            return $flag ? 'menu-open' : '';
        } else {
            $paths = explode('.', $paths);
            $segment = 2;
            foreach($paths as $p) {
                if((request()->segment($segment) == $p) == false) {
                    return '';
                }
                $segment++;
            }

            return 'menu-open';
        }

    }
}


if(! function_exists('mob_url')) {
    function mob_url($path = '/') {
        $env = app()->environment();
        if($env == 'pre-production' ||$env == 'production' || $env == 'development' || $env == 'test') {
            return secure_url($path);
        } else if($env == 'local') {
            return url()->to($path);
        } else {
            return url($path);
        }
    }
}

if(! function_exists('set_active')) {
    function set_active( $request, $path, $multiple = false, $level = null, $active = 'active' )
    {
        $givenPath = explode('/', $request);
        if(count($givenPath)==1){
            return '';
        }
        if ($multiple) {
           if (!is_null($level)) {
                return  $givenPath[1] == $path ? $active : '';
            }

            return $givenPath[1] == $path ? $active : '';
        }

        return  $givenPath[1] == $path ? $active : '';
    }
}
if(! function_exists('set_active_home')) {
    function set_active_home($request, $active = 'active' )
    {
        $givenPath = explode('/', $request);
        if(count($givenPath)==1){
            return $active;
        }else{
            return '';
        }
    }
}

if(! function_exists('set_sub_active')) {
    function set_sub_active( $request, $path, $multiple = false, $level = null, $active = 'active-sub' )
    {

        $givenPath = explode('/', $request);
        if(count($givenPath)==1){
            return '';
        }
        if ($multiple) {
            if (!is_null($level)) {
                return $givenPath[1] == $path ? $active : '';
            }

            return $givenPath[1] == $path ? $active : '';
        }
        //dd($request,$givenPath);
        return $givenPath[1] == $path ? $active : '';
    }
}

if (!function_exists('mob_links')) {
    /**
     * Permet de faire passer les liens des paginations de Laravel en https lorsqu'on est en production
     * @param  String $str
     * @return String
     */
    function mob_links($str) {
        $env = app()->environment();
        if($env == 'production' || $env == 'development' || $env == 'test') {
            return str_replace('http://', 'https://', $str);
        } else if($env == 'local') {
            return $str;
        } else {
            return $str;
        }
    }
}

if(! function_exists('mob_route')) {
    function mob_route($name, $parameters = []) {
        $env = app()->environment();
        if($env == 'production' || $env == 'development' || $env == 'test') {
            $route = route($name, $parameters);
            if (strpos($route, 'https://') !== false) {
                return $route;
            } else {
                return str_replace('http://', 'https://', $route);
            }
        } else if($env == 'local') {
            return route($name, $parameters);
        } else {
            return route($name, $parameters);
        }
    }
}

if(! function_exists('mob_asset')) {
    function mob_asset($name) {
        $env = app()->environment();
        if($env == 'production' || $env == 'development' || $env == 'test') {
            $asset = asset($name);
            if (strpos($asset, 'https://') !== false) {
                return $asset;
            } else {
                return str_replace('http://', 'https://', $asset);
            }
        } else if($env == 'local') {
            return asset($name);
        } else {
            return asset($name);
        }
    }
}

if(! function_exists('countByParameter')){
    function countByParameter($tableName,$parameter){
        toggleDatabase(true);
        return \DB::table($tableName)->where($parameter)->count();
    }
}



if(! function_exists('mobDateFormat')) {
    /**
     * This function alows you to format the date to rend to the views depending on the user language config. Exple 09-12-2018 for french
     * @param String $date. The date to format coming to the database
     * @param String $format. Optional. The format at which you want date should be returned
     * @return String
     */
    function mobDateFormat($date, $format = null) {
        if ($date) {
            $local = \App::getLocale();
            $format_ = is_null($format) ? getDateFormat() : $format;
            $carbonDate = \Carbon\Carbon::parse($date);
            return is_null( $date ) ? '' : $carbonDate->format($format_);
        }
        return '';
    }
}

if(! function_exists('mobDateToString')) {
    /**
     * Allows to translate a date carbon instance into a string understandable by humans. Exple 10, February 2018
     * @param  Carbon\Carbon $date The date to translate
     * @return  String
     * @todo  Gérer plus efficacement la traduction en français (en utlisant les méthodes de Carbon)
     */
    function mobDateToString($date) {
        if (is_null($date))
            return '';

        $local = \App::getLocale();
        \Carbon\Carbon::setLocale($local);
        $carbonDate = \Carbon\Carbon::parse($date);
        if ($local == 'fr') {
            $days = ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'];
            $months = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novemebre', 'Décembre'];

            $date = $days[ intval($carbonDate->dayOfWeek) ] . ', ' . $carbonDate->format('d') . ' '  . $months[intval($carbonDate->format('m')) - 1] . ' '  . $carbonDate->format('Y');
            return $date;
        }

        return $carbonDate->format('D, d F Y');
    }
}

if (! function_exists('getDateFormat')) {
    /**
     * Allows to get the Date format to use depending on the user language
     * @return  String
     */
    function getDateFormat() {
        return config('mobility.date-format.' . \App::getLocale());
    }
}

if(! function_exists('momoSetting')) {
    function momoSetting($setting, $type, $param = null) {
        $bool = isset($setting->momo->type) && $type == $setting->momo->type;
        if($param) {
            return $bool ? $setting->momo->{$param} : null;
        }
        return $bool;
    }
}


if (! function_exists('getDateTimePickerFormat')) {
    /**
     * This helper retrieves the right format datetimepicket.js plugin should use depending on the user language config inorder to save to the database without problem
     * @return String.
     */
    function getDateTimePickerFormat() {
        return config('mobility.date-format.datetime-picker.' . \App::getLocale());
    }
}

if( !function_exists('mob_amount_round') ) {
    function mob_amount_round($amount, $currency = "default") {
        $precision = config('mobility.precision.' . $currency);
        return round($amount, $precision);
    }
}


    if(!function_exists('asLetters')){
        function int2str($a,$separateur=",") {
            $joakim = explode('.',$a);
            if (isset($joakim[1]) && $joakim[1]!=''){
                return int2str($joakim[0]).' Dirhams '.int2str($joakim[1]).' Centimes.' ;
            }

            if ($a<0) return 'moins '.int2str(-$a);
            if ($a<17){
                switch ($a){
                    case 0: return 'Zero';
                    case 1: return 'Un';
                    case 2: return 'Deux';
                    case 3: return 'Trois';
                    case 4: return 'Quatre';
                    case 5: return 'Cinq';
                    case 6: return 'Six';
                    case 7: return 'Sept';
                    case 8: return 'Huit';
                    case 9: return 'Neuf';
                    case 10: return 'Dix';
                    case 11: return 'Onze';
                    case 12: return 'Douze';
                    case 13: return 'Treize';
                    case 14: return 'Quatorze';
                    case 15: return 'Quinze';
                    case 16: return 'Seize';
                }
            } else if ($a<20){
                return 'dix-'.int2str($a-10);
            } else if ($a<100){
                if ($a%10==0){
                    switch ($a){
                        case 20: return 'Vingt';
                        case 30: return 'Trente';
                        case 40: return 'Quarante';
                        case 50: return 'Cinquante';
                        case 60: return 'Soixante';
                        case 70: return 'Soixante-dix';
                        case 80: return 'Quatre-vingt';
                        case 90: return 'Quatre-vingt-dix';
                    }
                } else if ($a<70){
                    return int2str($a-$a%10).'-'.int2str($a%10);
                } else if ($a<80){
                    return int2str(60).'-'.int2str($a%20);
                } else{
                    return int2str(80).'-'.int2str($a%20);
                }
            } else if ($a==100){
                return 'Cent';
            } else if ($a<200){
                return int2str(100).($a%100!=0?' '.int2str($a%100):'');
            } else if ($a<1000){
                return int2str((int)($a/100)).' '.int2str(100).' '.($a%100!=0?int2str($a%100):'');
            } else if ($a==1000){
                return 'Mille';
            } else if ($a<2000){
                return int2str(1000).($a%1000!=0?' '.int2str($a%1000):'');
            } else if ($a<1000000){
                return int2str((int)($a/1000)).' '.int2str(1000).' '.($a%1000!=0?int2str($a%1000):'');
            }
            else return $a;
        }
    }

    if(!function_exists('dateFormatting')){
        function dateFormatting($data) {

            //@TODO check the object keys and make sure they correspond to y,m,d,h,i and ss.
            if(!is_object($data)){
                $format = 'Error, Date object needed but something else given!';
                return $format;
            }

            $timestamp = strtotime($data);

            $strTime = array("sec", "min", "hr", "jr", "moi", "an");
            $length = array("60","60","24","30","12","10");

            $currentTime = time();
            if($currentTime >= $timestamp) {
                $diff     = time()- $timestamp;
                for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
                    $diff = $diff / $length[$i];
                }

                $diff = round($diff);
                return "Depuis ".$diff . " " . $strTime[$i] . "(s)";
            }
        }
    }

    if(!function_exists('get_timeAgo')){
        function get_timeAgo( $date )
        {
            $timestamp = strtotime($date);
            $estimate_time = time() - $timestamp;

            if( $estimate_time < 1 )
            {
                return 'less than 1 second ago';
            }

            $condition = array(
                12 * 30 * 24 * 60 * 60  =>  'an',
                30 * 24 * 60 * 60       =>  'moi',
                24 * 60 * 60            =>  'jr',
                60 * 60                 =>  'hr',
                60                      =>  'min',
                1                       =>  'sec'
            );

            foreach( $condition as $secs => $str )
            {
                $d = $estimate_time / $secs;

                if( $d >= 1 )
                {
                    $r = round( $d );
                    return 'Depuis ' . $r . ' ' . $str . ( $r > 1 ? 's' : '' );
                }
            }
        }
    }

    if(!function_exists('getServiceCats')){
        function getServiceCats()
        {
            try{
               return \DB::table('service_type')->get();
            }catch (\Exception $exception){
                return [];
            }
        }
    }
use Illuminate\Support\Facades\Crypt;

    if(!function_exists('encryptData')){
        function encryptData($data)
        {
            return Crypt::encrypt($data);
        }
    }

    if(!function_exists('decryptData')){
        function decryptData($data)
        {
            return Crypt::decrypt($data);
        }
    }

if (!function_exists('getTableById')) {
    function getTableById($table,$id)
    {
            // gets last inserted row
            $result = \DB::table($table)
                            ->where('id', $id)
                            ->first();
        return $result;
    }
}

if (!function_exists('routeMethod')) {
    function routeMethod($controller,$method = null){
        if($method){
            return ['App\Http\Controllers'.$controller.'::class',$method];
        }else{
            return 'App\Http\Controllers'.$controller.'::class';
        }

    }
}

if (!function_exists('getTableByAllOrFirst')) {
    function getTableByAllOrFirst($table,$value='first')
    {
        try {
// gets last inserted row
            if($value == 'all'){
                $result = \DB::table($table)->get();
            }else{
                $result = \DB::table($table)->first();
            }

        } catch (\Exception $exception) {
            return null;
        }

        return $result;
    }
}

if (!function_exists('totalLikes')) {
    function totalLikes($servicesArray)
    {
      $counts = 0;

      foreach ($servicesArray as $value) {
              $counts += count($value->likes);
        
      }
        return $counts;
    }
}

if (!function_exists('totalComments')) {
    function totalComments($servicesArray)
    {
      $counts = 0;

      foreach ($servicesArray as $value) {
        $counts += count($value->comments);
      }
        return $counts;
    }
}

if (!function_exists('getTableByAttribute')) {
    function getTableByAttribute($table,$tableAttribute,$value,$first=null)
    {

        if($first){
            try {
                // gets last inserted row
                $result = \DB::table($table)
                    ->where($tableAttribute, $value)
                    ->first();
            } catch (\Exception $exception) {
                return (object)[];
            }
        }else{
            try {
                // gets last inserted row
                $result = \DB::table($table)
                    ->where($tableAttribute, $value)
                    ->get();
            } catch (\Exception $exception) {
                return [];
            }
        }
        return $result;
    }
}


if (!function_exists('getTableByAnyAttribute')) {
    function getTableByAnyAttribute($table,$tableAttribute,$value,$first=null)
    {

        if($first){
            try {
                // gets last inserted row
                $result = \DB::table($table)
                    ->where($tableAttribute, 'LIKE', '%' . $value . '%')
                    ->first();
            } catch (\Exception $exception) {
                return (object)[];
            }
        }else{
            try {
                // gets last inserted row
                $result = \DB::table($table)
                    ->where($tableAttribute, 'LIKE', '%' . $value . '%')
                    ->get();
            } catch (\Exception $exception) {
                return [];
            }
        }
        return $result;
    }
}

if (!function_exists('getCitiesByAnyAttribute')) {
    function getCitiesByAnyAttribute($tableAttribute,$value,$first=null)
    {

        if($first){
            try {
                // gets last inserted row
                $result = \DB::table('cities')
                    ->where($tableAttribute, 'LIKE', '%' . $value . '%')
                    ->where('country_id',38)
                    ->first();
            } catch (\Exception $exception) {
                return (object)[];
            }
        }else{
            try {
                // gets last inserted row
                $result = \DB::table('cities')
                    ->where($tableAttribute, 'LIKE', '%' . $value . '%')
                    ->where('country_id',38)
                    ->get();
            } catch (\Exception $exception) {
                return [];
            }
        }
        return $result;
    }
}

if (!function_exists('deleteImage')) {
    function deleteImage($id,$imageName,$table,$attribute,$filePath)
    {
        // gets last inserted row
        $result = \DB::table($table)
            ->where('id', $id)
            ->first();

        if(!$result){
            return ['status'=>false,'message'=>__('message.attribute-not-found'),'error'=>'element not found exception'];
        }

        try{
            $images = json_decode($result->{$attribute});

            $output =  \DB::transaction(function () use ($images,$id,$imageName,$filePath) {
                //deleting
                $index = array_search($imageName, $images);
                if ($index !== false) {
                    unset($images[$index]);
                }
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
                return (object)['status' => true, 'image' => json_encode(array_values($images))];
            });
        }catch (\Exception $e){
            $output = (object)['status'=>false,'message'=>__('message.attribute-not-found'),'error'=>$e->getMessage()];
        }

        return $output;
    }
}

if (!function_exists('getTableWithMultipleAttributes')) {
    function getTableWithMultipleAttributes($table,$tableAttributes)
    {
        //keep space in at right of table attribute string
            try {
                // gets last inserted row
                $sql_query = "select * from " . $table . "where";
                $total = count($tableAttributes);
                $conditions = '';
                foreach ($tableAttributes as $key=>$value){
                    if($total >1){
                        $conditions .= " ". $key." = ".$value." and ";
                        $total--;
                    }else{
                        $conditions .= " ". $key." = ".$value;
                    }
                }
                $query = $sql_query.$conditions;

                $result = \DB::select($query);

            } catch (\Exception $exception) {
                return null;
            }

        return $result;
    }
}

use App\Repositories\CommentsRepository;
use App\Repositories\ServiceRepository;

if (!function_exists('getServiceRatingById')) {
    function getServiceRatingById($service_id,$html=true)
    {
        $comment = new CommentsRepository(new \App\Models\Comments);
        $fiveStars = $comment->getByServiceAndRatings($service_id,5);
        $fourStars = $comment->getByServiceAndRatings($service_id,4);
        $threeStars = $comment->getByServiceAndRatings($service_id,3);
        $twoStars = $comment->getByServiceAndRatings($service_id,2);
        $oneStar = $comment->getByServiceAndRatings($service_id,1);

        // Formula (5Star*5starCount + 4Star*4starCount + 3Star*3starCount + 2Star*2starCount + 1Star*1starCount)/(5starCount+4starCount+3starCount+2starCount+1starCount)
        $denominator = count($fiveStars)+count($fourStars)+count($threeStars)+count($twoStars)+count($oneStar);
        $numerator = 5*count($fiveStars) + 4*count($fourStars) + 3*count($threeStars) + 2*count($twoStars) + 1*count($oneStar);
        if($numerator == 0){
            $rating = 0.1;
            $index = 0.1;
        }else{
            $rating = $numerator/$denominator;
            $index = number_format($rating,2,'.','');
        }

        $wholeNumber = floor($rating);
        if($html){
            $response = '<div class="row start-xs middle-xs ratings" id="stars" title="'.__('message.stars-count',['count'=>$index]).'">';

            for ($i=0; $i<$wholeNumber ;$i++){
                $response .= '<i class="material-icons mat-icon-sm">star</i>';
            }
          if(is_float($rating)){
                $response .= '<i class="material-icons mat-icon-sm">star_half</i>';
          }

            $response .= '</div>';
        }else{
            $response = $rating;
        }

        return $response;
    }
}

if (!function_exists('getServicesRating')) {
    function getServicesRating($services,$html=true)
    {
        $comment = new CommentsRepository(new \App\Models\Comments);

        $fiveStars = 0;
        $fourStars = 0;
        $threeStars = 0;
        $twoStars = 0;
        $oneStar = 0;

        foreach($services as $service){
            $fiveStars += count($comment->getByServiceAndRatings($service->id,5));
            $fourStars += count($comment->getByServiceAndRatings($service->id,4));
            $threeStars += count($comment->getByServiceAndRatings($service->id,3));
            $twoStars += count($comment->getByServiceAndRatings($service->id,2));
            $oneStar += count($comment->getByServiceAndRatings($service->id,1));
        }

       // dd($fiveStars,$fourStars,$threeStars,$twoStars,$oneStar);
        // Formula (5Star*5starCount + 4Star*4starCount + 3Star*3starCount + 2Star*2starCount + 1Star*1starCount)/(5starCount+4starCount+3starCount+2starCount+1starCount)
        $denominator = $fiveStars + $fourStars + $threeStars + $twoStars + $oneStar;
        $numerator = 5*$fiveStars + 4*$fourStars + 3*$threeStars + 2*$twoStars + 1*$oneStar;

        if($numerator == 0){
            $rating = 0.1;
            $index = 0.1;
        }else{
            $rating = $numerator/$denominator;
            $index = number_format($rating,2,'.','');
        }

        $wholeNumber = floor($rating);
        if($html){
            $response = '<div class="row start-xs middle-xs ratings" id="stars" title="'.__('message.stars-count',['count'=>$index]).'">';

            for ($i=0; $i<$wholeNumber ;$i++){
                $response .= '<i class="material-icons mat-icon-sm">star</i>';
            }
          if(is_float($rating)){
                $response .= '<i class="material-icons mat-icon-sm">star_half</i>';
          }

            $response .= '</div>';
        }else{
            $response = $rating;
        }

        return $response;
    }
}


if (!function_exists('getServicesRatingByCompany')) {
    function getServicesRatingByCompany($companyId)
    {
        $services = new ServiceRepository(new \App\Models\Service);
       return getServicesRating($services->getServicesByCompany($companyId));
    }
}

if (!function_exists('generateCode')) {
    function generateCode($prefix, $table, $tableAttribute) {

        try {
            // gets last inserted row
            $result = \DB::table($table)
                ->select($tableAttribute)
                ->orderBy('id', 'desc')
                ->first();
        } catch (\Exception $exception) {
            return/* dd(__('messages.table-or-column-not-exist'));*/
                back()->with('error', __('messages.table-or-column-not-exist'));
        }

        $prefixMonthYear = $prefix;
        $range = 5; //config("suhucam.gen-length");


        if (is_null($result)) {
            $ref = $prefixMonthYear .  str_pad('', $range - 1, '0', STR_PAD_RIGHT) . '1';

        } else {
            $oldCode = $result->{$tableAttribute};
            if(!$oldCode){
                $ref = $prefixMonthYear .  str_pad('', $range - 1, '0', STR_PAD_RIGHT) . '1';

            }else{
                // collecting last inserted value with respect to given table attribute
                $oldCode = $result->{$tableAttribute};

                $newLength = strlen($prefixMonthYear);

                if ($prefixMonthYear == substr($oldCode, 0, $newLength)) {
                    // collect incremented value
                    $increment = substr($oldCode, '-' . $range) + 1;
                    $newIncrement = str_pad((int)$increment, $range, '0', STR_PAD_LEFT);

                    $ref = $prefixMonthYear .  $newIncrement;

                } else {
                    $ref = $prefixMonthYear .  str_pad('', $range - 1, '0', STR_PAD_RIGHT) . '1';

                }
            }

        }

        return $ref;
    }
}