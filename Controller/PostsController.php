<?php
class PostsController extends AppController
{
    // indexアクション
    public function index()
    {
        // Postモデルから全件取得 -> 変数$postsに格納
        $posts = $this->Post->find('all');
        // 取得した内容を「posts」という名前でViewに渡す
        $this->set('posts', $posts);
    }

    // viewアクション
    public function view($id)
    {
        // Postモデルから指定したidのデータを1件取得 -> 変数$postに格納
        $post = $this->Post->findById($id);
        // 取得した内容を「post」という名前でViewに渡す
        $this->set('post', $post);
    }

    // addアクション
    public function add()
    {
        // Form送信されたかどうかを判断
        if ($this->request->is('post')) {
            // Postモデルに新規保存
            $this->Post->save($this->request->data);

            // メッセージをセットして一覧に遷移
            $this->Session->setFlash('追加しました！');
            return $this->redirect('/posts/');
        }
    }
}
