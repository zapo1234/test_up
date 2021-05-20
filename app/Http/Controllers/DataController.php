<?php

namespace App\Http\Controllers;

use App\Datas;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class Datacontroller extends Controller
{
    
  
  
  public function home(){
        
    
      // période une 1
        $from = date('2021-01-01');
        $to = date('2021-04-30');

       // users
      $users ="123456789";

      // date au format francais 
      $froms = date('2021-01-01');
      $tos = date('2021-04-30');
      
      $datefrom = explode('-', $froms);

      $jour = $datefrom[2];
      $month =$datefrom[1];
      $years = $datefrom[0];

      $todate = explode('-', $tos);
 
      $jours =  $todate[2];
      $months = $todate[1];
      $year =  $todate[0];

      $date1 = $jour.'/'.$month.'/'.$years;
      
      $date2 = $jours.'/'.$months.'/'.$year;
      
 

        //récupéeration des données pour la période 1

        $result = DB::table('datas')->whereBetween('date', [$from, $to])->where('users',$users)->get();
        
        // recupération le nombre de produit vendu sur une période données
        // sur les 4 produits données
        // créer des tableaux vide
        $tab = [];
        $tab1 = [];
        $tab2 = [];
        $tab3 = [];

        foreach($result as $resultats) {
         
         // on reucpere les données du product1 pour le mettre dans un tableau
         $tab[] = $resultats->product1;

         // on recupére les elements du produit1 sur forme d'un tablea
         
         // recupération des données sur l'achat du produits 2 dans une chaine de caractère 

         $tab1[] = $resultats->product2;

          // on reucpere les données sur forme de chaine de caractère du produit 3
          $tab2[] = $resultats->product3;
         
          // recupération des données sur l'achat du produits 4 dans une chaine de caractère 
 
          $tab3[] = $resultats->product4;

           
        }

        // calcul des points en fonctions des produits 4 articles achété par le client sur la période données
        // total des articles product 1 achétés
         $result1 = array_sum($tab);
         // total des articles product 2 achétés
         $result2 = array_sum($tab1);
         // total des articles product 3 achétés
         $result3 = array_sum($tab2);
         //total des articles product 4 achétés
         $result4 = array_sum($tab3);

         // caclul du nombre de points et du montant
         // product recupére les points
         $points1 = $result1*5;
        
         // le points du produit 2
         if($result2 > 1){
          $points2 = $result2*5;
          
         }

         if($result2 == 0){

          $point2 =0;
         }
        // les points du produit3

         if($result3>2) {
         $points3 = $result3/2*15;
    
         }

         if($result3 <2){

           $points3 = 0;
         }

         // les points du produit 4
         $points4 = $result4*35;


         $point_total = $points1+$points2+$points3+$points4;
        
         // montant total génere pour la période 1
         $montant = $point_total*0.001;


       
    
         // récupération des données pour la période 2
        // période 2
       $from1 = date('2021-05-01');
       $to1 = date('2021-08-30');

       $datefro = explode('-', $from1);

       $jour1 = $datefro[2];
       $month1 =$datefro[1];
       $years1 = $datefro[0];
 
       $todat = explode('-', $to1);
  
       $jours1 =  $todat[2];
       $months1 = $todat[1];
       $year1 =  $todat[0];
 
       $date3 = $jour1.'/'.$month1.'/'.$years1;
       
       $date4 = $jours1.'/'.$months1.'/'.$year1;
       

       $result1 = DB::table('datas')->whereBetween('date', [$from1, $to1])->where('users',$users)->get();

      // recupération le nombre de produit vendu sur une période données
        // sur les 4 produits données
        // créer des tableaux vide
        $tabs = [];
        $tabs1 = [];
        $tabs2 = [];
        $tabs3 = [];

        foreach($result1 as $resultats1) {
         
         // on reucpere les données du product1 pour le mettre dans un tableau
         $tabs[] = $resultats1->product1;

         // on recupére les elements du produit1 sur forme d'un tablea
         
         // recupération des données sur l'achat du produits 2 dans une chaine de caractère 

         $tabs1[] = $resultats1->product2;

          // on reucpere les données sur forme de chaine de caractère du produit 3
          $tabs2[] = $resultats1->product3;
         
          // recupération des données sur l'achat du produits 4 dans une chaine de caractère 
 
          $tabs3[] = $resultats1->product4;
        }
           // calcul des points en fonctions des produits 4 articles achété par le client sur la période données
        // total des articles product 1 achétés
         $result12 = array_sum($tabs);
         // total des articles product 2 achétés
         $result22 = array_sum($tabs1);
         // total des articles product 3 achétés
         $result32 = array_sum($tabs2);
         //total des articles product 4 achétés
         $result42 = array_sum($tabs3);

         // caclul du nombre de points et du montant
         // product recupére les points
         $points12 = $result12*5;
        
         // le points du produit 2
         if($result22 > 1){
          $points22 = $result22*5;
          
         }

         if($result22 ==0){

           $points22 = 0;
         }
        // les points du produit3

         if($result32>2) {
         $points32 = $result32/2*15;
    
         }

         if($result32 < 2){

            $points32 =0;
         }

         // les points du produit 4
         $points42 = $result42*35;
        $point_total1 = $points12+$points22+$points32+$points42;
        
         // montant total génere pour la période 2
         $montant1 = $point_total1*0.001;



         // recupération des données pour la période 3

          // période 3 
          $from2 = date('2021-10-01');
          $to2 = date('2021-12-31');
           

          $datefro1 = explode('-', $from2);

          $jour2 = $datefro1[2];
          $month2 =$datefro1[1];
          $years2 = $datefro1[0];
    
          $todat1 = explode('-', $to2);
     
          $jours2 =  $todat1[2];
          $months2 = $todat1[1];
          $year2 =  $todat1[0];
    
          $date5 = $jour2.'/'.$month2.'/'.$years2;
          
          $date6 = $jours2.'/'.$months2.'/'.$year2;


          $result2 = DB::table('datas')->whereBetween('date', [$from2, $to2])->where('users',$users)->get();

          // recupération le nombre de produit vendu sur une période données
            // sur les 4 produits données
            // créer des tableaux vide
            $arrays = [];
            $array1 = [];
            $array2 = [];
            $array3 = [];
    
            foreach($result2 as $resultats2) {
             
             // on reucpere les données du product1 pour le mettre dans un tableau
             $arrays[] = $resultats2->product1;
    
             // on recupére les elements du produit1 sur forme d'un tablea
             
             // recupération des données sur l'achat du produits 2 dans une chaine de caractère 
    
             $array1[] = $resultats2->product2;
    
              // on reucpere les données sur forme de chaine de caractère du produit 3
              $array2[] = $resultats2->product3;
             
              // recupération des données sur l'achat du produits 4 dans une chaine de caractère 
     
              $array3[] = $resultats2->product4;
            }
               // calcul des points en fonctions des produits 4 articles achété par le client sur la période données
            // total des articles product 1 achétés
             $result13 = array_sum($arrays);
             // total des articles product 2 achétés
             $result23 = array_sum($array1);
             // total des articles product 3 achétés
             $result33 = array_sum($array2);
             //total des articles product 4 achétés
             $result43 = array_sum($array3);
    
             // caclul du nombre de points et du montant
             // product recupére les points
             $points13 = $result13*5;
            
             // le points du produit 2
             if($result23 > 1){
              $points23 = $result23*5;
              
             }
    
             if($result23 ==0){
    
               $points23 = 0;
             }
            // les points du produit3
    
             if($result33>2) {
             $points33 = $result33/2*15;
        
             }
    
             if($result33 < 2){
    
                $points33 =0;
             }
    
             // les points du produit 4
             $points44 = $result43*35;
            $point_total2 = $points13+$points23+$points33+$points44;
            
             // montant total génere pour la période 3
             $montant2 = $point_total2*0.001;
    

        
         // afficher le tableau 
         // afficher un style css
    
         $outpout ='<table class="table" style="border:1px solid #eee;margin-top:30px;margin-left:30%;width:40%;"><caption class="cap">Récompense fidélisation achats du users'.$users.'</caption>
	     <thead>
		   <tr style="border:1px solid #eee;">
		   <th style="border:1px solid black; text align:center" scope="col">Période</th>
		   <th style="border:1px solid black; text align:center" scope="col">Point</th>
		   <th style="border:1px solid black; text align:center" scope="col">Montant (€)</th>
		   </tr>
	     </thead>
	     <tbody>
     ';

	   $outpout .='
	    <tr>
	    <td style="border:1px solid black; text-align:center">'. $date1.'à '.$date2.'</td>
	    <td style="border:1px solid black; text-align:center">'.$point_total.'</td>
	    <td style="border:1px solid black; text-align:center">'.$montant.'</td>
      </tr>
      <tr>
     <td style="border:1px solid black; text-align:center">'. $date3.'à '.$date4.'</td>
     <td style="border:1px solid black; text-align:center">'.$point_total1.'</td>
     <td style="border:1px solid black; text-align:center">'.$montant1.'</td>
     </tr>
      <tr>
      <td style="border:1px solid black; text-align:center">'. $date5.'à '.$date6.'</td>
      <td style="border:1px solid black; text-align:center">'.$point_total2.'</td>
      <td style="border:1px solid black; text-align:center">'.$montant2.'</td>
     </tr>';

     $outpout .='</tbody></table>';
         // créer un tableau
        return$outpout;
        
    


  }
}
