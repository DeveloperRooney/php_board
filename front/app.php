<?php


class APP_UserArticleController {

    private APP_ArticleService $articleService;


    public function __construct() {
        $this->articleService = new APP_ArticleService();
        
    }

    public function actionShowList():array {
        $articles =  $this->articleService->getForPrintArticles();

        return $articles;
    }
}


class APP_ArticleService {

    private APP_ArticleRepository $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new APP_ArticleRepository();
    }

    public function getForPrintArticles():array {
        return $this->articleRepository->getForPrintArticles();
    }
}

class APP_ArticleRepository {
    public function getForPrintArticles():array {

        $sql = "select * from article";

        $articles = DB__getRows($sql);

        return $articles;
    }
}

?>