<?php
class FileController extends BaseController {
$file = Input::file('file');
$destinationPath = 'uploads';
// If the uploads fail due to file system, you can try doing public_path().'/uploads'
$filename = str_random(12);
//$filename = $file->getClientOriginalName();
//$extension =$file->getClientOriginalExtension();
$upload_success = Input::file('file')->move($destinationPath, $filename);

if( $upload_success ) {
   return Response::json('success', 200);
} else {
   return Response::json('error', 400);
}
}
?>
