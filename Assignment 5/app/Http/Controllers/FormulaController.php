<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulaController extends Controller
{
    public function input_geometry() {
        return view('input_geometry');
    }
    
    public function result_geometry (Request $request) {
        $a = $request->get('first_term');
        $r = $request->get('ratio');
        $n = $request->get('num_of_terms');
        if ($r>1) {
            $result = (($a*(pow($r,$n) - 1)) / ($r - 1));
        } 
        else {
            $result = ((1-($a*(pow($r,$n)))) / (1 - $r));
        }
        return view('result_geometry',[
            'a' => $a,
            'r' => $r,
            'n' => $n,
            'result'=> $result
        ]);
    }

    public function input_arithmetic() {
        return view('input_arithmetic');
    }

    public function result_arithmetic (Request $request) {
        $a = $request->get('first_term');
        $b = $request->get('difference');
        $n = $request->get('num_of_terms');
        
        $result = ($n/2)*((2*$a)+(($n- 1)*$b));
        return view('result_arithmetic',[
            'a' => $a,
            'b' => $b,
            'n' => $n,
            'result'=> $result
        ]);
    }
    
    public function input_fibonacci() {
        return view('input_fibonacci');
    }

    public function result_fibonacci (Request $request) {
        $seq1 = $request->get('seq1');
        $seq2 = $request->get('seq2');
        $limit = $request->get('limit');

        $tmp1 = $seq1;
        $tmp2 = $seq2;
        
        $output = "$seq1  $seq2";
        for ($i = 0; $i < $limit - 2; $i++) {
            $next_number = $seq1 + $seq2;            
            $output = $output . " $next_number";
            $seq1 = $seq2;
            $seq2 = $next_number;
        }
        
        return view('result_fibonacci',[
            'seq1' => $tmp1,
            'seq2' => $tmp2,
            'n' => $limit,
            'result' => $output]);
    }
}