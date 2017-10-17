<?php 


class Sanguo{

	     protected $name;
         private $shibing ;
                     
        protected function Sunquan(){
           echo '周瑜打黄盖,一个愿打一个愿挨';

        }

         private function Liubei(){
        	echo $this->name='卧龙';
        	echo '先生请献一良策,先攻曹军亦或是吴军';
        }

        function Mengde(){
        	   echo '许攸多亏有你相助，才能大破袁绍大军';
        }


        function Simayi(){
        	echo $this->shibing='将军,诸葛亮诈死,';
        	return '诸葛亮诈死竟也让我退军';
        }


        function t1(){
        	$this->Sunquan();//内部调用protected方法有效
        }

        function t2(){
        	$this->Liubei();//内部调用private方法有效
        }

        function Math($a,$b){
        	echo $c=$a+$b;
        }

   

}


$a= new Sanguo();
$g=$a->Math(1,2);
 $a->t2();
// $a->Sunquan();

// echo '<br>';

// $b=&$a;
// $b->Liubei();

// echo '<br>';

// $c=&$b;
// $c->Mengde();


// echo '<br>';
// $d=&$c;
// echo $d->Simayi();
// echo '<br>';




class role{


	     public $role;
         public $age;
         public $weight;

	      function __construct($role,$age,$weight){

          echo '姓名：'.$this->role=$role.'<br>';
    	  echo  '年龄：'.$this->age=$age.'<br>';
    	  echo'体重：'.$this->weight=$weight.'<br>';

    	   
          }




          // function test(){
          // 	$this->Sunquan();//外部调用另一个类的protected的方法失效
          // }


          // function  test2(){

          //    $this->Liubei();//外部调用另一个类的private的方法失效
          // }

          function test3(){
          	$this->Mengde();//外部调用另一个类的public的方法有效
          }
         
}



$e= new role('张飞','20','100kg');
 ?>