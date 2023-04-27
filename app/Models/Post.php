<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $guarded = ['created_at', 'updated_at'];

    /**
     * Get all posts
     *
     * @return Collection
     *
     */
    function index(): Collection
    {
        return Post::all();
    }

    /**
     * Store a new post
     *
     * @param Request $request
     *
     * @return string
     *
     */
    public function store(Request $request): string
    {
        $validatedData = $request->validate([
            'category' => 'required',
            'title_es' => 'required',
            'title_en' => 'required',
            'title_pt' => 'required',
            'text_es' => 'required',
            'text_en' => 'required',
            'text_pt' => 'required',
            'file_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $validatedData['file_path']->store('public/posts');

        $post = new Post;
        $post->category = $validatedData['category'];
        $post->title_es = $validatedData['title_es'];
        $post->title_en = $validatedData['title_en'];
        $post->title_pt = $validatedData['title_pt'];
        $post->text_es = $validatedData['text_es'];
        $post->text_en = $validatedData['text_en'];
        $post->text_pt = $validatedData['text_pt'];
        $post->file_path = $imagePath;
        $post->save();

        return 'Post creado exitosamente';
    }

    /**
     * Update a post
     *
     * @param Request $request
     * @param Post $post
     *
     * @return string
     *
     */
    public function updatePost(Request $request): string
    {
        $validatedData = $request->validate([
            'category' => 'required',
            'title_es' => 'required',
            'title_en' => 'required',
            'title_pt' => 'required',
            'text_es' => 'required',
            'text_en' => 'required',
            'text_pt' => 'required',
            'file_path' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = Post::findOrFail($request->id);

        if ($request->hasFile('file_path'))
            Storage::delete($post->file_path);

        if (isset($validatedData['file_path'])) {
            $imagePath = $validatedData['file_path']->store('public/posts');
            $post->file_path = $imagePath;
        }


        $post->category = $validatedData['category'];
        $post->title_es = $validatedData['title_es'];
        $post->title_en = $validatedData['title_en'];
        $post->title_pt = $validatedData['title_pt'];
        $post->text_es = $validatedData['text_es'];
        $post->text_en = $validatedData['text_en'];
        $post->text_pt = $validatedData['text_pt'];
        $post->save();

        return 'Post actualizado exitosamente';
    }

    /**
     * Get a post by id
     *
     *
     * @param Request $request
     *
     * @return JsonResponse
     *
     */
    public function getPostById(Request $request): ?Post
    {
        $post = Post::find($request->id);
        return $post;
    }

    /**
     * Delete a post by id
     *
     * @param Request $request
     * 
     * @return string
     *
     */
    public function deletePost(Request $request): string
    {
        $post = Post::findOrFail($request->id);
        $post->delete();
        return 'Post eliminado exitosamente';
    }
}