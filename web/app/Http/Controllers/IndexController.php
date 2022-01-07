<?php
namespace App\Http\Controllers;
use myframe\Controller;
use App\Category;
use App\Article;
use myframe\Page;

class IndexController extends Controller
{
    public function index(Category $category,Article $article)
    {
        $id=(int)$this->request->get('id',0);
        $page=(int)$this->request->get('page',1);
        $size=6;
        $offset=($page-1)*$size;
        $where=[];
        if($id){
            //筛选栏目
            $where['cid']=$id;
            $category_name=$category->where('id',$id)->value('name');
            $this->assign('category_name',$category_name);
        }
        $where['show']=1;
        //查询文章列表
        $data=$article->where($where)->orderBy('id','DESC')->limit($offset,$size)->get(['id','title','author','image','created_at']);
        $this->assign('article',$data);
        $this->assign('id',$id);
        //分页
        $total=$article->where($where)->count();
        $url="?id=$id&page=";
        $this->assign('page_html',Page::html($url,$total,$page,$size));
        //公共模块
        $this->category($category);
        $this->sidebar($article);
        $this->title($id ? $category_name :'首页');
        return $this->fetch('index');
    }
    protected function title($title='')
    {
        $this->assign('title',$title);
    }
    protected function category(Category $category)
    {
        $data=$category->orderBy('id','ASC')->get();
        $this->assign('category',$data);
    }
    protected function sidebar(Article $article)
    {
        //最新文章
        $data=$article->where('show',1)->orderBy('id','DESC')->limit(5)->get(['id','title']);
        $this->assign('article_new',$data);
        //最热文章
        $data=$article->where('show',1)->orderBy('views','DESC')->limit(10)->get(['id','title']);
        $this->assign('article_hot',$data);
    }
    public function show(Category $category,Article $article)
    {
        $id=(int)$this->request->get('id',0);
        $page=(int)$this->request->get('page',1);
        $data=$article->where('id',$id)->where('show',1)->first();
        if($data){
            $category_name=$category->where('id',$id)->value('name');
            $this->assign('category_name',$category_name);
            //增加阅读量
            $article->where('id',$id)->where('show',1)->increment('views');
            $data['views']+=1;
        }
        //查询
        $prev=$article->where('id','<',$id)->where('show',1)->orderBy('id','DESC')->first(['id','title']);
        $next=$article->where('id','>',$id)->where('show',1)->orderBy('id','ASC')->first(['id','title']);
        $this->assign('article_prev',$prev);
        $this->assign('article_next',$next);
        $this->assign('article',$data);
        $this->assign('id',isset($data['cid'])? $data['cid']:0);
        //公共模块
        $this->category($category);
        $this->sidebar($article);
        $this->title($data ? $data['title']: '');
        return $this->fetch('show');
    }
}