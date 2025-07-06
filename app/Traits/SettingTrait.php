<?php
  
namespace App\Traits;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Support\Carbon;

use App\Models\Admin\UserPrefix;
  
trait SettingTrait{



    public function getPrefixes(){

        /*
        // Get all prefixes
        $prefixes = UserPrefix::all();

        // Get a single prefix by ID
        $prefix = UserPrefix::find(1); // Finds prefix with id = 1

        // Get first record
        $firstPrefix = UserPrefix::first();

        // Get prefixes ordered alphabetically
        $orderedPrefixes = UserPrefix::orderBy('prefix')->get();


        2. Conditional Queries
        // Get prefixes where id is greater than 3
        $filteredPrefixes = UserPrefix::where('id', '>', 3)->get();

        // Get a specific prefix by value
        $mrPrefix = UserPrefix::where('prefix', 'Mr.')->first();

        // Get multiple prefixes
        $commonPrefixes = UserPrefix::whereIn('prefix', ['Mr.', 'Mrs.', 'Ms.'])->get();

        */

      /* $prefix = UserPrefix::with(
                            'blogCategory:category_id,category_name'
                    )->select('article_id','title','url','image','meta_title','meta_keyword','meta_description', 'category','content' , 'read_time','author_id', 'status','created_at', 'updated_at')
                    /*->whereHas('collegeCity', function ($query) use ($location) {$query->where('city_state_url','=',$location);})*
                    ->where('article_id','>',0)
                    ->where('status','=',1)
                    ->orderBy('article_id', 'DESC')
                    ->limit(3)
                    ->get(); */

        $prefixes = UserPrefix::orderBy('prefix')->get();
  
        return $prefixes;

    }


    public function getYears(){

        $years = [];
        $currentYear = Carbon::now()->year;

        for ($year = 1940; $year <= $currentYear; $year++) {
            array_push($years, [
                'year' => $year,
                'selected' => ''
            ]);
        }


        return $years;
    }

    public function getMonths(){
        $months = [
            array('months' => '01', 'text' => 'January', 'selected' => ''),
            array('months' => '02', 'text' => 'February', 'selected' => ''),
            array('months' => '03', 'text' => 'March', 'selected' => ''),
            array('months' => '04', 'text' => 'April', 'selected' => ''),
            array('months' => '05', 'text' => 'May', 'selected' => ''),
            array('months' => '06', 'text' => 'June', 'selected' => ''),
            array('months' => '07', 'text' => 'July', 'selected' => ''),
            array('months' => '08', 'text' => 'August', 'selected' => ''),
            array('months' => '09', 'text' => 'September', 'selected' => ''),
            array('months' => '10', 'text' => 'October', 'selected' => ''),
            array('months' => '11', 'text' => 'November', 'selected' => ''),
            array('months' => '12', 'text' => 'December', 'selected' => ''),
        ];

        return $months;
    }

    public function getDates(){
        $days = [];
        for ($date = 1; $date <= 31; $date++) {
            array_push($days, [
                'date' => sprintf("%02d", $date),
                'selected' => ''
            ]);
        }
        return $days;
    }



    public function getConstants(){

        $constants = array(
            "ARDTL" => "-ardtl"
        );
        return (object) $constants;

    }


    function pageurl($title){
        # Prep string with some basic normalization
        $url = strtolower($title);
        $url = strip_tags($url);
        $url = stripslashes($url);
        $url = html_entity_decode($url);
    
        # Remove quotes (can't, etc.)
        $url = str_replace('\'', '', $url);
    
        # Replace non-alpha numeric with hyphens
        $match = '/[^a-z0-9]+/';
        $replace = '-';
        $url = preg_replace($match, $replace, $url);
    
        $url = trim($url, '-');
        /*echo json_encode($url);*/
        return $url;
    }





    
 
    public function latestBlogs(){

        $articles = Article::with(
                            'blogCategory:category_id,category_name'
                    )->select('article_id','title','url','image','meta_title','meta_keyword','meta_description', 'category','content' , 'read_time','author_id', 'status','created_at', 'updated_at')
                    /*->whereHas('collegeCity', function ($query) use ($location) {$query->where('city_state_url','=',$location);})*/
                    ->where('article_id','>',0)
                    ->where('status','=',1)
                    ->orderBy('article_id', 'DESC')
                    ->limit(10)
                    ->get();
  
        return $articles;
    }

    public function latestHomeBlogs(){

        $articles = Article::with(
                            'blogCategory:category_id,category_name'
                    )->select('article_id','title','url','image','meta_title','meta_keyword','meta_description', 'category','content' , 'read_time','author_id', 'status','created_at', 'updated_at')
                    /*->whereHas('collegeCity', function ($query) use ($location) {$query->where('city_state_url','=',$location);})*/
                    ->where('article_id','>',0)
                    ->where('status','=',1)
                    ->orderBy('article_id', 'DESC')
                    ->limit(3)
                    ->get();
  
        return $articles;
    }


    public function getShortDescriptionAttribute($content){
        $taglessDescription = strip_tags(content);
            return Str::words($taglessDescription, 156, '...');
    }

    public function imageAddClass($string){

        $html = $string;

        /*$html = $string;

        preg_match("/\<img.+src\=(?:\"|\')(.+?)(?:\"|\')(?:.+?)\>/", $string, $matches);
        echo "$matches[1]";


        $pattern = '/(<img[^>]+>(?:<\/img>)?)/';

        $pattern  = '\/<img.+src\=(?:\"|\')(.+?)(?:\"|\')(?:.+?)\>/'


        $regex_img = '/(<img)([^>]*[^>]*)(\/>)/mi';
       $regex_imgClass = '/(<img[^>]* )(class=\")([^\"]*\"[^>]*>)/mi';
        $html = preg_replace($pattern, "********", $html);*/




        $pattern = '/src\=(?:\"|\')(.*?)(?:\"|\')/';
       /* $regex_imgClass = '/(<img[^>]* )(class=\")([^\"]*\"[^>]*>)/mi';*/
        $html = preg_replace($pattern, 'class="lazy" src="data:image/png;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="$1"', $html); 

        /*$html = preg_replace($pattern, '***', $html);*/

     


        //$html = preg_replace($regex_imgClass, '$1class="image-responsiveO $3', $html);

       /* let content = "Hello <img src='1stImage.png' alt='AMP Example' height='200'width='300' >Learn more <img src='2ndImage.png' alt='AMP Example' height='200'width='300' >";
let result = content.replace(/(<img[^>]+>(?:<\/img>)?)/g, "$1</amp-img>");

let final = result.replace(/<img/g,'<amp-img');
console.log(final);*/


    /*$regex_img = '/(<img)([^>]*[^>]*)(\/>)/mi';
    $regex_imgClass = '/(<img[^>]* )(class=\")([^\"]*\"[^>]*>)/mi';
    $html = $string;*/
    /*if (preg_match_all($regex_img, $html, $matches)) {
        for ($x = 0; $x < count($matches[0]); $x++) {
            bdump($matches[0]);
            bdump($matches[0][$x]);
            bdump($x);
            if (preg_match($regex_imgClass, $matches[0][$x])) {
                $html = preg_replace($regex_imgClass, '$1class="image-responsiveO $3', $html);
            } else if (preg_match($regex_img, $matches[0][$x])) {
                $html = preg_replace($regex_img, '$1 class="image-responsiveN" $2$3', $html);
            }
        }
        return $html;
    }*/

    return $html;
}
  

public function getFeaturesImage($image){
    $fileInfo = pathinfo($image);
    return $fileInfo;
}


public function wordCount($html){

    //<meta name="description" content="{!! strip_tags(Illuminate\Support\Str::words($article->content,26)) !!}">

    /*$words_html = Str::wordCount($html);*/
    //$words = strip_tags(Str::wordCount($html));

    $htmlText = Str::of($html)->stripTags();

    /*$words = Str::wordCount($htmlText);*/
    return $htmlText;
}


public function getReadTime($html){

    $words_per_minute = 260;
    $htmlText = Str::of($html)->stripTags();
    $words = Str::wordCount($htmlText);

    $total_time = $words/$words_per_minute;

    $total_time = $total_time+0.5;

    $total_time = round($total_time , 0);

    $total_time = (string)$total_time;


    return "$total_time min read";
}





  
   
}
