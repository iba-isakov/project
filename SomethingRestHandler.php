
<?php
require_once("SimpleRest.php");
require_once("Something.php");
         
class SomethingRestHandler extends SimpleRest {
 
     
     
    public function encodeJson($responseData,$method) {
		$arr=array('url'=>"http://locahost".$_SERVER['REQUEST_URI'],'output'=>$responseData,'task'=>$method);
        $jsonResponse = json_encode($arr, JSON_UNESCAPED_UNICODE);
        return $jsonResponse;       
    }
 
     
    public function Num2Str($number) {
 
		$something=new Something();
        $rawData = $something->Num2Str($number);
        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Error');        
        } else {
            $statusCode = 200;
        }
 
        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this ->setHttpHeaders($requestContentType, $statusCode);

         $response = $this->encodeJson($rawData,$number);
           echo $response;
        
    }
	public function Quad($a,$b,$c)
	{
		$something=new Something();
        $rawData = $something->Quad($a,$b,$c);
        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Error');        
        } else {
            $statusCode = 200;
        }
 
        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this ->setHttpHeaders($requestContentType, $statusCode);
		print_r($rawData);
         $response = $this->encodeJson($rawData,"Квадратное уравнение");
           echo $response;
	}
	public function dayOfWeek($date)
	{
		$something=new Something();
        $rawData = $something->dayOfWeek($date);
        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Error');        
        } else {
            $statusCode = 200;
        }
 
        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this ->setHttpHeaders($requestContentType, $statusCode);
		print_r($rawData);
         $response = $this->encodeJson($rawData,"День недели");
           echo $response;
	}
	public function fibonacci($number)
	{
		$something=new Something();
        $rawData = $something->fibonacci($number);
        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Error');        
        } else {
            $statusCode = 200;
        }
 
        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this ->setHttpHeaders($requestContentType, $statusCode);
         $response = $this->encodeJson($rawData,"Фибоначи");
           echo $response;
	}
		public function region($reg)
	{
		$something=new Something();
        $rawData = $something->region($reg);
        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('error' => 'Error');        
        } else {
            $statusCode = 200;
        }
 
        $requestContentType = $_SERVER['HTTP_ACCEPT'];
        $this ->setHttpHeaders($requestContentType, $statusCode);
         $response = $this->encodeJson($rawData,"Регион");
           echo $response;
	}
}
?>