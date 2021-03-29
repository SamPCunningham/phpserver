<?php
   /* function is_palindrome( $string ) {
        $pal_check = ( $string == strrev( $string ));
        return $pal_check;
}

    var_dump( is_palindrome("joe"));
    echo is_palindrome('joe');
    
    function compare_numbers( $a, $b ) {
        if ($a >= $b ) {
            return $a;
        }

        return $b;
    }

    var_dump( compare_numbers(9,12 ));
*/
    function anchor(){
    
        $array[36] = [
                        "noanchor" => [
                                            "lpad" => 36,
                                            "hpad" => 4,
                                            "wpad" => 162,
                                            "wanchor" => 205,
                                            "nanchor" => 0,
                                            "apw" => 162
                                        ],
                        "ground_1"  =>  [
                                            "lpad" => 36,
                                            "hpad" => 4,
                                            "wpad" => 162,
                                            "wanchor" => 205,
                                            "nanchor" => 2,
                                            "apw" => 572
                                        ],
                        "ground_2"  =>  [
                                            "lpad" => 36,
                                            "hpad" => 4,
                                            "wpad" => 162,
                                            "wanchor" => 205,
                                            "nanchor" => 4,
                                            "apw" => 982
                                        ],
                        "concrete"  =>  [
                                            "lpad" => 36,
                                            "hpad" => 4,
                                            "wpad" => 162,
                                            "wanchor" => 232,
                                            "nanchor" => 4,
                                            "apw" => 1092.4
                                        ]                
                    ];
                    
        $array[40] = [
                        "noanchor" => [
                                            "lpad" => 40,
                                            "hpad" => 4,
                                            "wpad" => 200,
                                            "wanchor" => 205,
                                            "nanchor" => 0,
                                            "apw" => 200
                                        ],
                        "ground_1"  =>  [
                                            "lpad" => 40,
                                            "hpad" => 4,
                                            "wpad" => 200,
                                            "wanchor" => 205,
                                            "nanchor" => 2,
                                            "apw" => 610
                                        ],
                        "ground_2"  =>  [
                                            "lpad" => 40,
                                            "hpad" => 4,
                                            "wpad" => 200,
                                            "wanchor" => 205,
                                            "nanchor" => 4,
                                            "apw" => 1020
                                        ],
                        "concrete"  =>  [
                                            "lpad" => 40,
                                            "hpad" => 4,
                                            "wpad" => 200,
                                            "wanchor" => 232,
                                            "nanchor" => 4,
                                            "apw" => 1130
                                        ]                
                    ];
                    
        return $array;
                       
    }
    
    var_dump(anchor([40]));
    echo '<br/><br/>';
    var_dump(anchor([36],['noanchor']));
    print_r(anchor([36],["noanchor"]));
    echo '<br/><br/>';
    print_r(anchor(40));
/*
    $array[36] = [
        "noanchor" => [
                            "lpad" => 36,
                            "hpad" => 4,
                            "wpad" => 162,
                            "wanchor" => 205,
                            "nanchor" => 0,
                            "apw" => 162
                        ],
        "ground_1"  =>  [
                            "lpad" => 36,
                            "hpad" => 4,
                            "wpad" => 162,
                            "wanchor" => 205,
                            "nanchor" => 2,
                            "apw" => 572
                        ],
        "ground_2"  =>  [
                            "lpad" => 36,
                            "hpad" => 4,
                            "wpad" => 162,
                            "wanchor" => 205,
                            "nanchor" => 4,
                            "apw" => 982
                        ],
        "concrete"  =>  [
                            "lpad" => 36,
                            "hpad" => 4,
                            "wpad" => 162,
                            "wanchor" => 232,
                            "nanchor" => 4,
                            "apw" => 1092.4
                        ]                
    ];
    print_r($array);
    
$array[40] = [
        "noanchor" => [
                            "lpad" => 40,
                            "hpad" => 4,
                            "wpad" => 200,
                            "wanchor" => 205,
                            "nanchor" => 0,
                            "apw" => 200
                        ],
        "ground_1"  =>  [
                            "lpad" => 40,
                            "hpad" => 4,
                            "wpad" => 200,
                            "wanchor" => 205,
                            "nanchor" => 2,
                            "apw" => 610
                        ],
        "ground_2"  =>  [
                            "lpad" => 40,
                            "hpad" => 4,
                            "wpad" => 200,
                            "wanchor" => 205,
                            "nanchor" => 4,
                            "apw" => 1020
                        ],
        "concrete"  =>  [
                            "lpad" => 40,
                            "hpad" => 4,
                            "wpad" => 200,
                            "wanchor" => 232,
                            "nanchor" => 4,
                            "apw" => 1130
                        ]                
    ];
    print_r($array);
    
var_dump($array[40]);
echo '<br />';
var_dump($array[36]);
print_r($array[36]["noanchor"]);
*/