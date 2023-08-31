<?php

namespace App\Services\Impl;

use App\Repositories\ImageRepository;
use App\Services\ImageService;
use Illuminate\Support\Facades\Http;

class ImageServiceImpl implements ImageService
{
    private ImageRepository $imageRepository;

    public function __construct(ImageRepository $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function getImages()
    {
    }

    public function getImageById($id)
    {
    }

    public function getImageBySlug($slug)
    {
    }

    public function deleteImage($imageId)
    {
    }
    public function updateImage($imageId, array $newDetails)
    {
    }
    public function createImage(array $newDetails)
    {
    }
    public function findImageWithSort($sortColumn, $sortDirection, $searchTerm = null)
    {
    }
}
