<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/6
 * Time: 13:53
 */

namespace App\Model\Tao;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Article extends Base
{
    use SoftDeletes;
    protected $table = 'article';
    protected $model = null;
    public function fromDateTime($value)
    {
        return empty($value)?$value:$this->getTimeFormat();
    }

    public function getTimeFormat()
    {
        return time();
    }

    public function __construct(array $attributes = [])
    {
        $this->model = DB::table('information');
        parent::__construct($attributes);
    }

    public function goodsList($num, $data)
    {
        if (isset($data['search_date']) && $data['search_date'] != '请选择日期') {
            $search_date = $this->getTime($data['search_date']);
            $start_time = $search_date['start']??'';
            $end_time = $search_date['end']??time();
        } else {
            $start_time = $search_date['start']??'';
            $end_time = $search_date['end']??time();
        }
        if (isset($data['search']) || isset($search_date)) {
            $list = Article::where('title', 'like', '%'.trim($data['search']).'%')->
            where('created_at', '>=', $start_time)->
            where('updated_at', '<=', $end_time)->orderBy('created_at', 'desc')->
            orderBy('sort', 'asc')->paginate($num);
            $list->appends([
                'search'        =>$data['search'],
                'search_date'   =>$data['search_date'],
            ]);
        } else {
            $list = Article::orderBy('created_at', 'desc')->orderBy('sort', 'asc')->paginate($num);
        }
        return $list;
    }

    public function getOneDetail($id)
    {
        return Article::find($id);
    }

    public function delData($id)
    {
        $model = Article::find($id);
        return $model->delete();
    }
}
