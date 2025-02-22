<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    protected $guarded=[''];
    private static $productImage, $productImages, $image,$imageName,$extension, $directory;

    private static function getImageUrl($image)
    {
        self::$extension = $image->getClientOriginalExtension();
        self::$imageName = rand(0,500000) . '.' . self::$extension;
        self::$directory = "admin/img/product-other-img/";
        $image->move(self::$directory, self::$imageName);

        return self::$directory . self::$imageName;
    }



    public static function newProductImage($images,$id)
    {

        foreach ($images as $image){
            self::$productImage = new ProductImage();
            self::$productImage->product_id = $id;
            self::$productImage->image = self::getImageUrl($image);
            self::$productImage->save();
        }
    }

    // public static function updateProductImage($images, $id)
    // {

    //     self::$productImages = ProductImage::where('product_id',$id)->get();
    //     foreach (self::$productImages as $productImage ){

    //         if (file_exists($productImage->image)){
    //             unlink($productImage->image);
    //         }

    //         $productImage->delete();
    //     }
    //     self::newProductImage($images, $id);
    // }
    // public static function updateProductImage($images, $id)
    // {
    //     // Get the current product images from the database
    //     $currentImages = ProductImage::where('product_id', $id)->get();

    //     // If there are images to delete, we'll compare them with the incoming ones
    //     foreach ($currentImages as $productImage) {
    //         // Check if the current image is not in the new images list
    //         if (!in_array($productImage->image, $images)) {
    //             // If the image is no longer in the list, delete it
    //             if (file_exists( $productImage->image)) {
    //                 unlink( $productImage->image);
    //             }

    //             // Delete the record from the database
    //             $productImage->delete();
    //         }
    //     }

    //     // Add the new images (if any)
    //     self::newProductImage($images, $id);
    // }

    public static function updateProductImage($images, $id, $deleteImageIds = [])
{
    // Fetch all existing images for the product
    $existingImages = ProductImage::where('product_id', $id)->get();

    // // 1. DELETE: Remove the images that the user marked for deletion
    // if (!empty($deleteImageIds)) {
    //     $imagesToDelete = ProductImage::whereIn('id', $deleteImageIds)->get();
    //     foreach ($imagesToDelete as $imageToDelete) {
    //         // Delete the image file from storage
    //         if (file_exists($imageToDelete->image)) {
    //             unlink($imageToDelete->image);
    //         }
    //         // Delete the image record from the database
    //         $imageToDelete->delete();
    //     }
    // }

    // 2. Add new images (those that are in the new list)
    if ($images && count($images) > 0) {
        foreach ($images as $image) {
            $path = self::getImageUrl($image);  // Assuming getImageUrl() returns the image path

            // Check if the image is already in the database for this product
            $existingImage = ProductImage::where('product_id', $id)->where('image', $path)->first();
            if (!$existingImage) {
                // If not already present, add the new image
                ProductImage::create([
                    'product_id' => $id,
                    'image' => $path,
                ]);
            }
        }
    }
}



    
    

    public static function deleteProductImages($id)
    {
        self::$productImages = ProductImage::where('product_id',$id)->get();
        foreach (self::$productImages as $productImage ){

            if (file_exists($productImage->image)){
                unlink($productImage->image);
            }

            $productImage->delete();
        }
    }
    public static function deleteProductImage($id)
    {
        $productImage = ProductImage::findOrFail($id);

        // Delete the image file from storage
        if (file_exists($productImage->image)){
            unlink($productImage->image);
        }

        // Remove the image record from the database
        $productImage->delete();

        // return back()->with('success', 'Image removed successfully!');
    }



}
