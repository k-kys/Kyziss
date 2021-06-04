<?php 



    // Upload ảnh
    public function uploadImage(Request $request)
    {
        $photo = $request->file('image');
        if (!is_dir($this->photoPath)) {
            mkdir($this->photoPath, 0777);
        }
        $name = date('YmdHis') . $photo->getClientOriginalName();
        $saveName = $name . '.' . $photo->getClientOriginalExtension();
        // $resizeName = $name . str_random(2).'.'.$photo->getClientOriginalExtension();
        // Image::make($photo)->resize(215, 215, function($constraints) {
        //     $constraints->aspectRatio();
        // })->save($this->photoPath.'/'.$resizeName);
        $photo->move($this->photoPath, $saveName);
        dd($this->photoPath . '/' . $saveName);
        return $this->photoPath . '/' . $saveName;
    }


    // Xoá ảnh
    public function destroy(Request $request, $id)
    {
        $uploadedImage = Admin::find($id)->image;
        if (empty($uploadedImage)) {
            return response()->json(['message' => 'Sorry file does not exist'], 400);
        }
        $filePath = $this->photoPath . '/' . $uploadedImage;
        // $resizedFile = $this->photoPath.'/'.$uploadedImage->resizedName;
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        if (!empty($uploadedImage)) {
            $uploadedImage->delete();
        }
        return response()->json(['message' => 'Delete File Successfully'], 200);
    }
