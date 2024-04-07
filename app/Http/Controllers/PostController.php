<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    private $posts;
    public function __construct()
    {
        $this->posts = new Post();
    }
    public function index()
    {
        $postList = $this->posts->getAllPost();
        return view('posts', compact('postList'));
    }
    public function getPost($id)
    {
        $post = Post::find($id);
        return view('onePost', compact('post'));
    }
    public function mySql()
    {
        // Create
        DB::statement('INSERT INTO posts (id, title, description) VALUES (?, ?, ?)', [51, 'Bài viết mới', 'Nội dung bài viết mới']);
        //Read
        $post = DB::select('SELECT * FROM posts WHERE id = ?', [51]);
        //Update
        DB::statement('UPDATE posts SET title = ?, description = ? WHERE id = ?', ['Updated Bài viết mới', 'Updated Nội dung bài viết mới', 51]);
        //Delete
        DB::statement('DELETE FROM posts WHERE id = ?', [51]);
    }
    public function pdo()
    {
        // Create
        DB::connection()->getPdo()->prepare('INSERT INTO posts (id, title, description) VALUES (?, ?, ?)')->execute([51, 'Bài viết mới', 'Nội dung bài viết mới']);
        // Read
        $stmt = DB::connection()->getPdo()->prepare('SELECT * FROM posts WHERE id = ?');
        $stmt->execute([51]);
        $post = $stmt->fetch();
        // Update
        $stmt = DB::connection()->getPdo()->prepare('UPDATE posts SET title = ?, description = ? WHERE id = ?');
        $stmt->execute(['Update Bài viết mới', 'Updated Nội dung bài viết mới', 51]);
        // Delete
        $stmt = DB::connection()->getPdo()->prepare('DELETE FROM posts WHERE id = ?');
        $stmt->execute([51]);
    }
}
