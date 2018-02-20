<?php  

    use Illuminate\Support\Facades\Input;
    use Illuminate\Support\Facades\Storage;
    use Intervention\Image\ImageManagerStatic as Image;
    use Ixudra\Curl\Facades\Curl;
    if( ! function_exists('response_json') ){

        function response_json($response_data =  array() ,$status = 0, $message_code = ''){
            return response()->json([
                        'Data'      => $response_data,
                        'message'   => $message_code,
                        'status'    => $status
                ]);
        }

    }

    if(! function_exists('image_decoder')){
    function image_decoder($data,  $category ,  $id)
        { 
            $file  = base64_decode($data);
            
            $sizes[] = array('H'=> 50 , 'W' => 50 ,  'size'=>'small');
            $sizes[] = array('H'=> 150 , 'W' => 150,  'size' => 'medium');
            $sizes[] = array('H'=> 300 , 'W' => 300, 'size' => 'large');

            foreach($sizes as $size){ 
            $image =  Image::make($file)->resize($size['H'],$size['W'])->encode();
            $path =  "{$category}/{$id}.png";
            $destinationPath = "public/{$size['size']}/{$path}";
            Storage::put($destinationPath, $image); 
            }
            return $path;
            
           }   
    }

    if( ! function_exists('upload_image')){
        
        function upload_image($file,  $category ,  $id)
        {   
            $sizes[] = array('H'=> 50 , 'W' => 50 ,  'size'=>'small');
            $sizes[] = array('H'=> 150 , 'W' => 150,  'size' => 'medium');
            $sizes[] = array('H'=> 300 , 'W' => 300, 'size' => 'large');
            
            $extension = $file->getClientOriginalExtension();
            $filename =  $id.'.'.$extension; 
            $destinationPath = 'images/{$category}';
            foreach($sizes as $size){ 
                $img = Image::make($file->getRealPath());
            $img->resize($size['H'], $size['W'], function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath.'/'.$size['size'].'/'.$filename);
            
            }
            
            $destinationPath = 'images/thumbnail/orignal';
            $upload_success = $file->move($destinationPath, $filename);
        

        
            //Input::merge(array('imageAddress' => $destinationPath.'/'.$filename));

            //intervention image resize
        
            //                $img = Image::make(public_path($img))->resize(200, 200);
            
        }   
    }

    
    if( ! function_exists('distance_measure')){
        
        function distance_measure($origin, $destinations)
        { 
            // $destinations[0] =  "33.691501,73.008058";

            $request = "https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins={$origin}&destinations=";
           
            if(is_array($destinations)){
                for($i= 0 ; $i<=count($destinations)-1; $i++){
                  $lat_long = explode(",", $destinations[$i]);
                    $request .= $lat_long[0].'%2C'.$lat_long[1].'%7C';
                }  
            }
            else{
                $request .=$destinations;
            }
                $request .="&key=AIzaSyC936zVufnncd3sMKwBSwOk6O_dgaLcmGc";
            $result = getCURL($request);
        }
    }
    if( ! function_exists('getCURL')){
        
        function getCURL($url)
        {
        $response = Curl::to($url)
                    ->get();
        print_r($response);
        }
    }
    if( ! function_exists('custom_crul')){
        
        function custom_crul($url)
        {   
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec ($ch);
        $info = curl_getinfo($ch);
        $http_result = $info ['http_code'];
        curl_close ($ch);
        }
    }

    if( ! function_exists('custom_distance')){
        
        function custom_distance($lat_lng1, $lat_lng2, $unit="K")
        {  

            $latlng1 = explode(",", $lat_lng1);
            $latlng2 = explode(",", $lat_lng2);
            //$theta = $lon1 - $lon2;
            $theta = $latlng1[1] - $latlng2[1];
            // $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  
            $dist = sin(deg2rad($latlng1[0])) * sin(deg2rad($latlng2[0])) +  cos(deg2rad($latlng1[0])) * cos(deg2rad($latlng2[0])) * cos(deg2rad($theta));
            
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            if ($unit == "K") {
            return ($miles * 1.609344);
            } else if ($unit == "N") {
            return ($miles * 0.8684);
            } else {
            return $miles;
            }
        }
    }


?>
