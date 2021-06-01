<?php


// MVC 패턴 구조화 연습 43강까지 진행

$dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994@@", "wayne94");


class DB__SeqSql {
    private string $templateStr = "";

    private array $params = [];


    public function __toString() : string {
     
        return $this->getTemplate();
    }

    public function add(string $sqlBit, string $param = null) {
        $this->templateStr .= " " .$sqlBit;

        if ($param) {
            $this->params[] = $param;
        }
    }

    public function getTemplate() : string {
        return $this->templateStr;
    }

    public function getForBindParam1stArg() : string {
        $paramTypesStr = "";

        $count = count($this->params);

        for ($i = 0; $i < $count; $i++) {
            $paramTypesStr .= "s";
        }
        
        return $paramTypesStr;

    }


    public function getParams() : array {
        return $this->params;
    }
}


// DB 연결을 위한 함수
function DB__secSql() {


    return new DB__SeqSql();
}

function DB__getRow2(DB__SeqSql $sql) {
    global $dbConn;
    $stmt = $dbConn->prepare($sql->getTemplate());
    $stmt->bind_param($sql->getForBindParam1stArg(), ...$sql->getParams());
    $stmt->execute();
    $result = $stmt->get_result();

    return $result->fetch_assoc();
}


function DB__getRow($sql) {

    $dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994", "wayne94");

    $result = mysqli_query($dbConn, $sql);

    $article = mysqli_fetch_assoc($result);

    return $article;
}


function DB__getRows($sql) : array{

    $dbConn = mysqli_connect("wayne94.cafe24.com", "wayne94", "suhan1994", "wayne94");

    $result = mysqli_query($dbConn, $sql);

    $articles = [];

    while ($result) {
        $data = mysqli_fetch_assoc($result);

        if ($data == null) {
            break;
        }

        $articles[] = $data;
    }

    return $articles;
}

?>