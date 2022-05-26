<?php

namespace App\Http\Controllers;

use App\Model\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use BunnyCDN\Storage\BunnyCDNStorage;
use Corbpie\BunnyCdn\BunnyAPI;


class UploadController extends Controller
{
    public $bunnyCDNStorage ;
    public $storageZone = 'menow';
    public $directory = '/menow/images';
    public $access_key = '6fe6904f-3eb3-4ccb-b344949df549-a941-44bc';
    //public $bunny ;

    public function __construct()
    {

       $this->bunnyCDNStorage = new BunnyCDNStorage($this->storageZone, $this->access_key, "sg");
    }

    public function upload_media($data)
    {
        
        if(!is_array($data)){

            $without_ext_name= $this->slugify(preg_replace('/\..+$/', '', $data->getClientOriginalName()));

            $name = $without_ext_name .'-'. time().rand(1,100).'.'.$data->extension();
            $files['name'] = $name;
            $files['url'] = 'https://menow.b-cdn.net/images/'. $name ;
            $files['alt_tag'] = time().rand(1,100);

            if($this->bunnyCDNStorage->uploadFile($data->getPathName() , $this->storageZone."/images/{$name}")){

            $isUploaded = Upload::create(['name'=> $name,'url' =>$files['url'] ,'alt_tag' => $files['alt_tag']]);

            //echo json_encode(['message' =>'media has uploaded.' , 'status' =>200 , 'data' => $isUploaded]);
            return $isUploaded ;
        }

        }else{


            $files = [];
            if($data )
            {
                
                $i =0 ;
            
                foreach($data as $d)
                {                
                    

                $without_ext_name= $this->slugify(preg_replace('/\..+$/', '', $images[$i]->getClientOriginalName()));

                $name = $without_ext_name .'-'. time().rand(1,100).'.'.$images[$i]->extension();
                $files[$i]['name'] = $name;
                $files[$i]['url'] = 'https://menow.b-cdn.net/images/'. $name ;
                $files[$i]['alt_tag'] = time().rand(1,100);

                if($this->bunnyCDNStorage->uploadFile($images[$i]->getPathName() , $this->storageZone."/images/{$name}")){

                $isUploaded = Upload::create(['name'=> $name,'url' =>$files[$i]['url'] ,'alt_tag' => $files[$i]['alt_tag']]);

                echo json_encode(['message' =>'media has uploaded.' , 'status' =>200 , 'data' => $isUploaded]);
            
                }else{

                    return $errors = ['message'=>'server issue','status'=>404 ,'image_name'=>$file->getClientOrignalName()];
                }

                $i ++;
            }
            }else{
                echo json_encode(['message' =>'files are not uploaded' , 'status' =>404]);

            }
        }

       

    }


    public function get_all_images(){


       $data = Upload::orderBy('_id','desc')->get();

       echo json_encode(['data'=>$data ,'status'=>200]);
    }

    public function update_image($file , $id){

        $existing_data = Upload::select('name')->where('_id',$id)->first();

        $existing_name = $existing_data->name;

        $without_ext_name= $this->slugify(preg_replace('/\..+$/', '', $file->getClientOriginalName()));

        $name = $without_ext_name .'-'. time().rand(1,100).'.'.$file->extension();
        $files[$i]['name'] = $name;
        $files[$i]['url'] = 'https://menow.b-cdn.net/images/'. $name ;
        $files[$i]['alt_tag'] = time().rand(1,100);

        if($this->bunnyCDNStorage->uploadFile($file->getPathName() , $this->storageZone."https://menow.b-cdn.net/images/{$name}")){

        $isUpdated = Upload::where('_id' ,$id)->update(['name'=> $name,'url' =>$files[$i]['url']]);

        if(! $this->bunnyCDNStorage->deleteObject( '/menow/images/'.$existing_name))
        {
            echo json_encode(['message' => 'Bucket error' , 'status' => 404]);
        }

        }else{

            return $errors = ['message'=>'server issue','status'=>404 ,'image_name'=>$file->getClientOrignalName()];
        }


    }

    public function delete_images($id){

    $data = Upload::select('name')->where('_id',$id)->first();

        if(Upload::where('_id',$id)->delete()){


            if(! $this->bunnyCDNStorage->deleteObject( '/menow/images/'.$data->name))
            {
                echo json_encode(['message' => 'Bucket error' , 'status' => 404]);
            }

            echo json_encode(['message'=>'Data has been deleted','status'=>200]);

        }else{
            echo json_encode(['message'=>'Data has not been deleted' ,'status'=>404]);
        }

    }

    public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
       // $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            echo 'n-a';
        }

        return $text;
    }

}
