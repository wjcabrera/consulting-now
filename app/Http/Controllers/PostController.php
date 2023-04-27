<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    
    /**
     *  Create a new controller instance
     *
     * @param  protected
     *
     */
    public function __construct(protected Post $post){}

    /**
     * Get all post
     *
     * @return JsonResponse
     *
     */
    public function index(): JsonResponse
    {
        return new JsonResponse(['post' => $this->post->index()], 200);
    }

    /**
     * Store a new post
     *
     * @param Request $request
     *
     * @return JsonResponse
     *
     */
    public function store(Request $request): JsonResponse
    {
        return new JsonResponse(['post' => $this->post->store($request)], 200);
    }

    /**
     * Update a post
     *
     * @param Request $request
     * @param Post $post
     *
     * @return JsonResponse
     *
     */
    public function updatePost(Request $request): JsonResponse
    {
        return new JsonResponse(['post' => $this->post->updatePost($request)], 200);
    }

    /**
     * Get a post by id
     *
     * @param Request $request
     * 
     * @return JsonResponse
     * 
     */
    public function getPostById(Request $request): JsonResponse
    {
        return new JsonResponse(['post' => $this->post->getPostById($request)], 200);
    }

    /**
     * Delete a post
     *
     * @param Request $request
     *
     * @return JsonResponse
     *
     */
    public function deletePost(Request $request): JsonResponse
    {
        return new JsonResponse(['post' => $this->post->deletePost($request)], 200);
    }

    /**
     * Get current user
     *
     * @return JsonResponse
     *
     */
    public function getCurrentUser(): JsonResponse
    {
        return new JsonResponse(['user' => Auth::user()->name], 200);
    }
}