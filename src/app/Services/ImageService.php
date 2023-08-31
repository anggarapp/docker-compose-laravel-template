<?php

namespace App\Services;

interface ImageService
{
    public function getImages();
    public function getImageById($id);
    public function getImageBySlug($slug);
    public function deleteImage($imageId);
    public function updateImage($imageId, array $newDetails);
    public function createImage(array $newDetails);
    public function findImageWithSort($sortColumn, $sortDirection, $searchTerm = null);
}
