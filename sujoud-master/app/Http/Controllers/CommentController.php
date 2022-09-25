<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'status' => 'required',

        ]);

        $comments = Comment::where('user_id', '=', auth()->user()->id)->where('product_id', '=', $request->product_id)->get();
        if (count($comments) > 0) {
            return redirect()->back()->with('fail', 'You have already commented on this product');
        }
        else
         {
            $comment = Comment::create([
                'text' => $request->input('text'),
                'user_id' => auth()->user()->id,
                'product_id' => $request->product_id,
            ]);

            return redirect()->back()->with('success', 'Comment created successfully.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $product_id = (int)$request->query('product_id');
        // if ($product_id) {
        //     $comments = Comment::where('product_id', $product_id)->get();
        // } else {
        //     $comments = Comment::all();
        // }
        // return view('Pages.product-details', compact('comments'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentRequest  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            // 'text' => 'required',
            'status' => 'required',

        ]);

        $comment = Comment::find($id);
        // $comment->text = $request->input('text');
        $comment->status = $request->input('status');
        $comment->save();
        return redirect('admin/comments')->with('success', 'Updated successfully');

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }
}
