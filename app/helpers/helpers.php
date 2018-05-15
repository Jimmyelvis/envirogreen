<?php

public function fullpic(){

  if($file = $request->file('fullpic_id')) {

    $name = time() . $file->getClientOriginalName();
    $file->move('images/houses', $name);
    $photo = PhotoListing::create(['file'=>$name]);

    $input['fullpic_id'] = $fullpic->id;

  }else{
    echo "no file exhists";
  }

}


 ?>
