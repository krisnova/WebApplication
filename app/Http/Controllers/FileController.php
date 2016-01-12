<?php
class FileController extends BaseController {

public function index()
{
return View::make('fileupload');
}
public function upload_file()
{
Input::file('uploadfile')->move(public_path().'/upload',Input::file('uploadfile')->getClientOriginalName());
return View::make('successfile');
}
}
?>
