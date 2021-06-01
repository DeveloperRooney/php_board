<?php

class APP__ArticleRepository {


    public function getForPrintArticles() : array {

        $sql = "select * from article order by desc";

        return DB__getRows($sql);
    }

}



class APP__ArticleService {

    private APP__ArticleRepository $articleRepository;

    public function __construct()
    {
        $this->articleRepository = new APP__ArticleRepository();
    }

    public function getForPrintArticles() : array {
        return $this->articleRepository->getForPrintArticles();
    }

}

class APP_UserArticleController {

    private APP__ArticleService $articleService;

    public function __construct() {
        $this->articleService = new APP_ArticleService();
        
    }

    public function actionShowList() : array {
        $articles = $this->articleService->getForPrintArticles();

        return $articles;
    }

}


?>