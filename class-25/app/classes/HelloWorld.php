<?php


namespace App\classes;


class HelloWorld
{
    public $message;
    public $x;
    public $array1;
    public $array2;
    public $array3;
    public $student;
    public function __construct()
    {
        $this->message='Hello';
        $this->x=10;
        //Array declaration
        //Numericla arrya
        $this->array1=array('11',232,34);
        //Array declaration in another way
        //associative array
        $this->array2=array(
            'a'=>'100',
            'b'=>45,
            'c'=>34,
        );
        $this->array3=[
        ['a'=>'11'],
        ['b'=>'15'],
        ['c'=>324],
        ];
        $this->student;

        $this->student=[
            [
                'Name'=>'Rafi',
                'Email'=>'smrafi@gmail.com',
                'Phone'=>[
                    'mobile-1'=>'01485885875',
                    'mobile-2'=>'01485885875',
                ]
            ],
            [
                'Name'=>'Kafi',
                'Email'=>'smKafi@gmail.com',
                'Phone'=>'016466428341'
            ]
        ];


    }
    public function index(){
        //for loop
//        for($this->x;$this->x <100;++$this->x){
//            echo $this->x .' ';
//        }
        //while loop
//        $this->x;
//        while ($this->x<100){
//            echo $this->x.' ';
//            $this->x++;
//        }
        //do while loop0
//        do{
//            echo $this->x.' ';
//            $this->x++;
//        }while($this->x<100);

        //arry print
//        print_r($this->array1);
//        echo '<pre>';
//        print_r($this->array1);
//        var_dump($this->array1);
//
//        print_r($this->array2);
//        var_dump($this->array2);
//        foreach ($this->array1 as $item){
//            echo $item .' ';
//        }
//        echo '<br>';
//        foreach ($this->array1 as $key=>$item){
//            echo $key.'=>'.$item .' <br>';
//        }
//
//        foreach ($this->array2 as $key=>$value){
//            echo  $key.'=>'. $value.'<br>';
//        }
//        echo '<pre>';
//        var_dump($this->student);
//        foreach ($this->student as $value){
//            foreach ($value as $key=>$item){
//                echo $key.'=>'.' '.$item .'<br>';
//            }
//            echo '<br>';
//
//        }


        foreach ($this->student as $value){
            foreach ($value as $item){
                if(is_array($item)){
                    foreach ($item as $v_item){
                        echo $v_item.'<br>';
                    }

                      }else{
                          echo $item.'<br>';
                }
            }
            echo '<br>';
        }



    }

}