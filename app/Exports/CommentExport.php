<?php

namespace App\Exports;

use App\comment;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;

class CommentExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return comment::all();
        return $users = DB::table('comments')
        ->join('posts' ,'comments.post_id','=','posts.id')
        ->select('comments.id as Id','posts.name as PostName','comments.comment as Comments','comments.created_at as Created At')
        ->get();
       
    }

    public function headings(): array
    {
        return [
            '#',
            'Post Nmae',
            'Comment',
            'Created At',
           
        ];
    }
}
