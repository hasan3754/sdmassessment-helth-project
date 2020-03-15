<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<img src="{{asset('image.jpg')}}" alt="Planets" usemap="#planetmap">

    <div class="portfolioitem notVisible" >
        <h1>{{$newdata->Registration_ID_No}}</h1>
        <h1>{{$newdata->Name}}</h1>
        <h1>{{$newdata->Gender}}</h1>
        <h1>{{$newdata->Age}}</h1>
        <h1>{{$newdata->Contact_No}}</h1>
    </div>

<map name="planetmap">
    <area shape="poly" coords="449, 429, 408, 394, 388, 362, 404, 372, 434, 396, 460, 415" href="sun.htm" />
    <area shape="poly" coords="458, 406, 410, 374, 392, 351, 425, 367, 464, 394" href="sun.htm" />
    <area shape="poly" coords="459, 387, 411, 355, 393, 338, 429, 347, 456, 374" href="sun.htm" />
    <area shape="poly" coords="455, 358, 408, 338, 392, 321, 419, 328, 463, 352" href="sun.htm" />
    <area shape="poly" coords="455, 343, 399, 315, 389, 302, 420, 308, 445, 326" href="sun.htm" />
    <area shape="poly" coords="454, 325, 388, 290, 397, 286, 450, 303" href="sun.htm" />
    <area shape="poly" coords="459, 301, 405, 286, 386, 273, 436, 280" href="sun.htm"  />
    <area shape="poly" coords="459, 301, 405, 286, 386, 273, 436, 280" href="sun.htm"  />
    <area shape="poly" coords="455, 282, 410, 271, 393, 261, 419, 262, 483, 273, 449, 282" href="sun.htm" />
    <area shape="poly" coords="456, 265, 395, 254, 404, 246, 470, 248" href="sun.htm" />
    <area shape="poly" coords="459, 243, 388, 243, 406, 226, 480, 232" href="sun.htm" />
    <area shape="poly" coords="457, 224, 393, 227, 395, 211, 481, 209" href="sun.htm" />
    <area shape="poly" coords="145, 340, 212, 311, 263, 296, 198, 340" href="sun.htm" />
    <area shape="poly" coords="127, 313, 189, 307, 149, 329" href="sun.htm" />
    <area shape="poly" coords="137, 293, 184, 285, 262, 258, 197, 306, 137, 302" href="sun.htm" />
    <area shape="poly" coords="455, 207, 389, 207, 275, 291, 374, 193, 428, 187" href="sun.htm" />
    <area shape="poly" coords="456, 184, 382, 185, 355, 196, 259, 285, 207, 302, 330, 217, 350, 175, 400, 164" href="sun.htm" />
    <area shape="poly" coords="426, 129, 456, 145, 478, 128, 505, 159, 449, 169, 404, 155" href="sun.htm" />
    <area shape="poly" coords="469, 25, 432, 25, 457, 9, 485, 17" href="sun.htm" />
    <area shape="poly" coords="60, 788, 76, 791, 105, 812, 120, 833, 73, 808" href="sun.htm" />
    <area shape="poly" coords="47, 456, 37, 472, 45, 560, 54, 751, 49, 462" href="sun.htm" />
    <area shape="poly" coords="20, 413, 32, 433, 32, 468, 38, 491, 38, 544, 47, 587, 41, 648, 36, 692, 47, 743, 41, 798, 48, 821, 79, 823, 48, 777, 45, 741, 33, 466, 40, 494" href="sun.htm" />
    <area shape="poly" coords="62, 554, 68, 720, 85, 783, 121, 816, 161, 809, 150, 774, 100, 751, 75, 711" href="sun.htm" />
    <area shape="poly" coords="25, 404, 41, 418, 50, 440, 56, 467, 63, 726, 68, 755, 76, 786, 118, 818, 72, 775, 65, 736, 58, 549, 78, 540, 61, 421" href="sun.htm" />
    <area shape="poly" coords="35, 394, 73, 430, 80, 490, 80, 564, 85, 718, 94, 624, 100, 599, 99, 574, 86, 454, 89, 434, 45, 388" href="sun.htm" />
    <area shape="poly" coords="39, 380, 65, 394, 85, 415, 95, 446, 96, 489, 99, 537, 103, 563, 113, 523, 101, 465, 93, 417, 73, 393, 46, 377" href="sun.htm" />
    <area shape="poly" coords="45, 370, 74, 386, 92, 407, 106, 453, 113, 508, 114, 432, 79, 379, 48, 363" href="sun.htm" />
    <area shape="poly" coords="48, 357, 70, 370, 89, 385, 100, 403, 65, 350, 46, 343" href="sun.htm" />
    <area shape="poly" coords="125, 432, 109, 411, 92, 376, 111, 398, 142, 409" href="sun.htm" />
    <area shape="poly" coords="137, 404, 102, 381, 66, 345, 46, 336, 117, 377, 127, 384, 150, 381" href="sun.htm" />
    <area shape="poly" coords="129, 381, 73, 339, 54, 331, 98, 351, 114, 359, 143, 361" href="sun.htm" />
    <area shape="poly" coords="120, 358, 42, 317, 120, 339" href="sun.htm" />
    <area shape="poly" coords="38, 305, 88, 326, 99, 329, 112, 322, 79, 318" href="sun.htm" />
    <area shape="poly" coords="98, 318, 65, 308, 35, 292, 83, 307, 118, 310" href="sun.htm" />
    <area shape="poly" coords="105, 307, 64, 298, 35, 281, 89, 299, 105, 295, 125, 296" href="sun.htm" />
    <area shape="poly" coords="113, 293, 77, 291, 37, 276, 85, 287, 102, 282, 139, 282" href="sun.htm" />
    <area shape="poly" coords="126, 277, 64, 279, 28, 259, 89, 275, 99, 267, 122, 262" href="sun.htm"  />
    <area shape="poly" coords="144, 247, 83, 266, 44, 257, 145, 230" href="sun.htm" />
    <area shape="poly" coords="137, 227, 93, 243, 49, 254, 23, 238, 55, 251, 133, 208" href="sun.htm" />
    <area shape="poly" coords="128, 15, 131, 42, 97, 161, 125, 206, 95, 225, 48, 243, 26, 199, 96, 93, 116, 12" href="sun.htm" />
    <area shape="poly" coords="84, 10, 88, 37, 67, 110, 56, 145, 104, 44, 111, 13" href="sun.htm" />
    <area shape="poly" coords="616, 816, 585, 823, 599, 743" href="sun.htm" />
    <area shape="poly" coords="632, 642, 607, 690, 607, 773, 614, 808, 632, 795, 628, 704" href="sun.htm" />
    <area shape="poly" coords="566, 771, 550, 812, 584, 833, 581, 773" href="sun.htm" />
    <area shape="poly" coords="723, 395, 764, 458, 762, 495, 753, 501, 714, 397" href="sun.htm" />
    <area shape="poly" coords="690, 397, 720, 498, 745, 496, 705, 388" href="sun.htm" />
    <area shape="poly" coords="595, 716, 577, 716, 579, 751, 581, 773, 587, 794, 598, 732" href="sun.htm" />
    <area shape="poly" coords="582, 676, 546, 695, 586, 702" href="sun.htm" />
    <area shape="poly" coords="584, 562, 553, 638, 583, 673, 590, 598" href="sun.htm"  />
    <area shape="poly" coords="581, 529, 576, 563, 594, 554, 594, 525" href="sun.htm" />
    <area shape="poly" coords="576, 479, 584, 521, 589, 488" href="sun.htm" />
    <area shape="poly" coords="585, 471, 596, 513, 594, 588, 590, 670, 587, 711, 606, 703, 610, 555, 609, 458" href="sun.htm" />
    <area shape="poly" coords="614, 526, 613, 576, 615, 652, 633, 634, 627, 511" href="sun.htm" />
    <area shape="poly" coords="579, 397, 578, 439, 588, 455, 622, 440, 613, 406" href="sun.htm" />
    <area shape="poly" coords="577, 390, 629, 415, 626, 452, 612, 515, 652, 453, 606, 386, 579, 378" href="sun.htm" />
    <area shape="poly" coords="579, 358, 641, 381, 668, 412, 671, 461, 636, 587, 636, 614, 637, 512, 655, 445, 622, 390, 578, 372" href="sun.htm" />
    <area shape="poly" coords="581, 298, 643, 329, 631, 331, 580, 307" href="sun.htm" />
    <area shape="poly" coords="584, 289, 643, 326, 603, 291, 585, 284" href="sun.htm" />
    <area shape="poly" coords="584, 276, 625, 304, 638, 312, 626, 294, 588, 272" href="sun.htm" />
    <area shape="poly" coords="580, 265, 618, 284, 637, 299, 618, 278, 585, 256" href="sun.htm" />
    <area shape="poly" coords="580, 250, 611, 268, 635, 290, 613, 262, 582, 244" href="sun.htm" />
    <area shape="poly" coords="583, 238, 609, 253, 636, 282, 619, 254, 583, 232" href="sun.htm" />
    <area shape="poly" coords="581, 225, 615, 247, 638, 274, 618, 240, 579, 220" href="sun.htm" />
    <area shape="poly" coords="575, 213, 615, 234, 638, 263, 608, 222, 576, 204" href="sun.htm" />
    <area shape="poly" coords="575, 197, 602, 214, 639, 253, 607, 212, 577, 192" href="sun.htm" />
    <area shape="poly" coords="574, 185, 607, 204, 640, 247, 624, 213, 576, 177" href="sun.htm" />
    <area shape="poly" coords="575, 172, 612, 199, 633, 219, 613, 188, 574, 165" href="sun.htm" />
    <area shape="poly" coords="766, -3, 735, 16, 765, 23" href="sun.htm" />
    <area shape="poly" coords="572, 161, 599, 176, 622, 193, 642, 229, 644, 208, 602, 170" href="sun.htm" />
    <area shape="poly" coords="570, 150, 624, 180, 649, 211, 647, 252, 659, 314, 678, 371, 687, 365, 659, 274, 656, 202, 606, 158, 566, 139" href="sun.htm" />
    <area shape="poly" coords="573, 135, 654, 183, 665, 226, 670, 315, 707, 405, 713, 378, 682, 296, 673, 206, 650, 166, 579, 130" href="sun.htm" />
    <area shape="poly" coords="684, 273, 696, 324, 721, 383, 739, 426, 763, 461, 752, 420, 714, 336, 694, 267" href="sun.htm" />
    <area shape="poly" coords="572, 125, 601, 135, 646, 158, 675, 186, 682, 222, 682, 263, 692, 258, 689, 206, 672, 159, 595, 127, 575, 119" href="sun.htm" />
    <area shape="poly" coords="630, 137, 581, 115, 555, 114, 557, 100, 618, 119" href="sun.htm" />
    <area shape="poly" coords="601, 112, 579, 101, 555, 97, 536, 98, 543, 92, 572, 86, 603, 96" href="sun.htm" />
    <area shape="poly" coords="537, 53, 537, 62, 530, 59, 537, 78, 543, 86, 556, 90, 572, 81, 594, 91, 609, 83, 619, 62, 609, 61, 563, 62, 537, 63, 530, 57, 536, 57" href="sun.htm" />
    <area shape="poly" coords="569, 10, 546, 18, 534, 44, 551, 57, 576, 56, 597, 60, 613, 45, 601, 16" href="sun.htm" />
    <area shape="poly" coords="581, 311, 611, 323, 639, 336, 654, 350, 658, 359, 626, 338, 584, 322" href="sun.htm" />
    <area shape="poly" coords="577, 324, 637, 346, 660, 369, 664, 382, 656, 377, 636, 360, 616, 349, 581, 338" href="sun.htm" />
    <area shape="poly" coords="581, 353, 595, 358, 622, 366, 643, 386, 667, 414, 663, 392, 646, 373, 620, 353, 578, 339" href="sun.htm" />
    <area shape="poly" coords="224, 483, 276, 569, 278, 537, 227, 474" href="sun.htm" />
    <area shape="poly" coords="224, 463, 276, 530, 272, 492" href="sun.htm" />
    <area shape="poly" coords="202, 808, 262, 718, 273, 773, 223, 806" href="sun.htm" />
    <area shape="poly" coords="274, 752, 273, 781, 225, 811, 195, 815, 201, 832, 264, 818, 289, 788" href="sun.htm" />
    <area shape="poly" coords="225, 489, 236, 561, 279, 643, 283, 673, 279, 584" href="sun.htm" />
    <area shape="poly" coords="246, 584, 243, 617, 257, 670, 274, 746, 284, 704, 255, 599" href="sun.htm" />
    <area shape="poly" coords="291, 692, 299, 786, 274, 814, 321, 820, 308, 760, 316, 684" href="sun.htm" />
    <area shape="poly" coords="246, 471, 278, 491, 294, 680, 311, 673, 296, 569, 314, 466" href="sun.htm" />
    <area shape="poly" coords="404, 705, 397, 820, 410, 812, 428, 753" href="sun.htm" />
    <area shape="poly" coords="386, 551, 402, 603, 403, 666, 415, 703, 432, 749, 421, 802, 410, 825, 437, 832, 449, 767, 417, 642, 390, 549" href="sun.htm" />
    <area shape="poly" coords="475, 764, 454, 799, 498, 786" href="sun.htm" />
    <area shape="poly" coords="455, 772, 444, 831, 469, 830" href="sun.htm" />
    <area shape="poly" coords="364, 417, 364, 453, 390, 543, 419, 605, 437, 707, 453, 761, 440, 822, 454, 751, 437, 698, 431, 605" href="sun.htm" />
    <area shape="poly" coords="367, 399, 391, 490, 439, 597, 453, 681, 453, 613, 451, 559, 373, 383" href="sun.htm" />
    <area shape="poly" coords="372, 372, 449, 548, 457, 510, 377, 367" href="sun.htm" />
    <area shape="poly" coords="381, 363, 400, 401, 426, 444, 455, 499, 455, 465, 439, 426, 415, 398, 388, 356" href="sun.htm" />
</map>

<hr>



<form method="post" action="{{URL::to('/posture')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
   <h3> Posture and Functional Assessment:</h3>
  <table>
  <tr>
    Standing
    <th>Good</th>
    <th>Fair</th>
  <th>Poor</th>
    
  </tr>
  <tr>
    <td><input type="radio" name="Standing" id="allot"  value="Good"></td>
    <td><input type="radio" name="Standing" id="transfer" value="Fair"></td>
  <td><input type="radio" name="Standing" id="transfer" value="Poor"></td>
    
  </tr>
  
  </table>
  <div id="pelvic_tiltt" style="display: none;">
  <table >
    Pelvic Tilt:
    <tr>
      
      <th>Ant.</th>
      <th>Post.</th>
    <th>Lateral</th>
      
    </tr>
    <tr>
      <td><input type="radio" name="Pelvic_Tilt" id="allot"  value="Ant"></td>
      <td><input type="radio" name="Pelvic_Tilt" id="transfer" value="Post"></td>
    <td><input type="radio" name="Pelvic_Tilt" id="transfer" value="Lateral"></td>
      
    </tr>
    
    </table >
  </div>
    <div class="form-group" id="Sternumm" style="display: none;">
      <label for="inputAddress2">Rib/Xipi sternum:</label>
      <input type="text"name="sternum" id="inputDatabaseName" class="form-control" id="" placeholder="">
    </div>
    <div id="Sitting1" style="display: none">
    <table >
      Sitting
      <tr>
        <th>Slough</th>
        <th>Errect</th>
      
        
      </tr>
      <tr>
        <td><input type="radio" name="Sitting" id="allot" value="Slough"></td>
        <td><input type="radio" name="Sitting" id="transfer" value="Errect"></td>
        
      </tr>
      
      </table>
    </div>
  
    <div id="Transition1" style="display: none">
      <table>
        Transition:
        <tr>
          <th>Good</th>
          <th>Fair</th>
        <th>Poor</th>
          
        </tr>
        <tr>
          <td><input type="radio" name="Transition" id="allot" value="Goodd"></td>
          <td><input type="radio" name="Transition" id="transfer" value="Fairr"></td>
        <td><input type="radio" name="Transition" id="transfer" value="Poorr"></td>
          
        </tr>
        
        </table>
      </div>
  
      <div id="Bed_Mobility1" style="display: none">
        <table>
          Bed Mobility:
          <tr>
            <th>Painful</th>
            <th>No pain</th>
          
            
          </tr>
          <tr>
            <td><input type="radio" name="Bed_Mobility" id="allot" value="Painful"></td>
            <td><input type="radio" name="Bed_Mobility" id="transfer" value="No_pain"></td>
            
          </tr>
          
          </table>
  
        </div>
  
  
  
  
        <hr>
  
        <h3>Pain and movement limitations</h3>
    <div class="form-row">
        <div class="form-group col-md-12">
          <label for="inputEmail4">Thoracic Spine</label>
          <input type="text" name="Thoracic_Spine" class="form-control" id="inputEmail4" placeholder="">
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputAddres">Lumber Spine:</label>
      <input type="text" name="Lumber_Spine" class="form-control" id="inputAddres" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Hip:</label>
      <input type="text"name="Hip" class="form-control" id="inputAddress2" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputAddres">Sij:</label>
      <input type="text" name="Sij" class="form-control" id="inputAddres" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Knee:</label>
      <input type="text"name="Knee" class="form-control" id="inputAddress2" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputAddres">Ankle:</label>
      <input type="text" name="Ankle" class="form-control" id="inputAddres" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Cervical Spine</label>
      <input type="text"name="Cervical_Spine" class="form-control" id="inputAddress2" placeholder="">
    </div>
    <div class="form-group">
      <label for="inputAddress2">Shoulder</label>
      <input type="text"name="Shoulder" class="form-control" id="inputAddress2" placeholder="">
    </div>
  
  
  
   
  
  
  
  
  
    <hr>
  
  
    <h3>Passive strech test</h3>
  <select id="ddlPassport" name="myname">
       <option  value="Ankle Dorsiflexor">Ankle Dorsiflexor</option>
      <option  value="Ankle pl.flexor">Ankle pl.flexor</option>
      <option  value="Gluteusmeius">Gluteusmeius</option>
      <option  value="Gluteus Maximus">Gluteus Maximus</option>
      <option  value="Gluteusminimus">Gluteusminimus</option>
      <option  value="Hamstring">Hamstring</option>
      <option  value="Hip Adductor">Hip Adductor</option>
      <option  value="Lumber Extensor">Lumber Extensor</option>
      <option  value="Lumber Flexor">Lumber Flexor</option>
      <option  value="lliposoas">lliposoas</option>
      <option  value="Piriformis">Piriformis</option>
      <option  value="Please select">Please select</option>
       <option  value="Qolu">Qolu</option>      
       <option  value="Quads">Quads</option>
       </select>
  
  <div id="dvPassport" style="display: none">
    <input type="radio" name="bedStatus" id="allot"  value="right">Right
  <input type="radio" name="bedStatus" id="transfer" value="left">Left
  <input type="radio" name="bedStatus" id="transfer" value="both">Both
  </div>
  
  <div id="divPassport" style="display: none">
    <table>
    <tr>
      <th>Pain</th>
      <th>Tightness</th>
      
    </tr>
    <tr>
      <td><input type="radio" name="redStatus" id="allot"  value="Pain"></td>
      <td><input type="radio" name="redStatus" id="transfer" value="Tightness"></td>
      
    </tr>
  
  </table>
    
  
  </div>
  <div id="divePassport" style="display: none">
    <table>
    <tr>
      <th>Mild</th>
      <th>Moderate</th>
      <th>Severe</th>
      
    </tr>
    <tr>
      <td><input type="radio" name="gedStatus" id="allot"  value="mild"></td>
      <td><input type="radio" name="gedStatus" id="transfer" value="Moderate"></td>
      <td><input type="radio" name="gedStatus" id="transfer" value="Severe"></td>
      
    </tr>
  
  </table>
  </div>
  
  
    
  
  
  <hr>
  
  
  <div>
  <h3>Strength test</h3>
  <select id="aPassport" name="a">
    <option  value="Please select">Please select</option>
    <option  value="Gluteus Medius">Gluteus Medius</option>  
    <option  value="Gluteus Maximus">Gluteus Maximus</option>
   <option  value="Hamstring">Hamstring</option>
    <option  value="lliposoas">lliposoas</option>
    <option  value="Lumber extensor(core)">Lumber extensor(core)</option>
    <option  value="Pelvic Floor">Pelvic Floor</option>
    <option  value="QoL&Piriformis">QoL&Piriformis</option>
    <option  value="Quardiceps">Quardiceps</option>
    <option  value="Rectus & Tranverse Ab.">Rectus & Tranverse Ab.</option>  
  </select>
  
  <div id="bPassport" style="display: none">
    <h5>MMT</h5>
  <input type="radio" name="b" id="allot" checked="checked" value="right">Right
  <input type="radio" name="b" id="transfer" value="left">Left
  </div>
  
  <div id="cPassport" style="display: none">
  <table>
  <tr>
    <th>0</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
  </tr>
  <tr>
    <td><input type="radio" name="c" id="allot" checked="checked" value="0"></td>
    <td><input type="radio" name="c" id="transfer" value="1"></td>
    <td><input type="radio" name="c" id="allot" checked="checked" value="2"></td>
    <td><input type="radio" name="c" id="transfer" value="3"></td>
    <td><input type="radio" name="c" id="allot" checked="checked" value="4"></td>
    <td><input type="radio" name="c" id="transfer" value="5"></td>
    
  </tr>
</div>
  
  </table>

  </div>




  <hr>
  
  
  
  <h3>Neurological Examination of affected Part or mostly affected part only</h3>
  <select id="gPassport" name="a">
    <option  value="L2">L2</option>
    <option  value="L3">L3</option>  
    <option  value="L4">L4</option>
   <option  value="L5">L5</option>
    <option  value="S1">S1</option> 
  </select>
  
  <div id="hPassport" style="display: none">
    <h5>MMT</h5>
  <input type="radio" name="S" id="allot"  value="Sensory">Sensory
  <input type="radio" name="S" id="transfer" value="Motor">Motor
  </div>
  
  <div id="ePassport" style="display: none">
  <table>
  <tr>
    <th>0</th>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
  </tr>
  <tr>
    <td><input type="radio" name="c" id="allot" checked="checked" value="0"></td>
    <td><input type="radio" name="c" id="transfer" value="1"></td>
    <td><input type="radio" name="c" id="allot" checked="checked" value="2"></td>
    <td><input type="radio" name="c" id="transfer" value="3"></td>
    <td><input type="radio" name="c" id="allot" checked="checked" value="4"></td>
    <td><input type="radio" name="c" id="transfer" value="5"></td>
    
  </tr>
  
  </table>
</div>
<div id="fPassport" style="display: none">
  <table>
  <tr>
    <th>Diminished</th>
    <th>Impaired</th>
    <th>Intact</th>
  </tr>
  <tr>
    <td><input type="radio" name="c" id="allot" checked="checked" value="Diminished"></td>
    <td><input type="radio" name="c" id="transfer" value="Impaired"></td>
    <td><input type="radio" name="c" id="allot" checked="checked" value="Intact"></td>
  </tr>
  
  </table>
</div>














  <button type="submit"  value="Submit">Submit</button>
  </form>

<hr>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Sciatic</label>
      <input type="text" name="Thoracic_Spine" class="form-control" id="inputEmail4" placeholder="">
    </div>
  </div>
</div>
<div class="form-group">
  <label for="inputAddres">Tibial</label>
  <input type="text" name="Tibial" class="form-control" id="inputAddres" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddress2">Sural</label>
  <input type="text"name="Sural" class="form-control" id="inputAddress2" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddres">Common peroneal</label>
  <input type="text" name="Common_peroneal" class="form-control" id="inputAddres" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddress2">Femoral</label>
  <input type="text"name="Femoral" class="form-control" id="inputAddress2" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddres">Saphenous</label>
  <input type="text" name="Saphenous" class="form-control" id="inputAddres" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddress2">Other</label>
  <input type="text"name="Other" class="form-control" id="inputAddress2" placeholder="">
</div>

</div>

<hr>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Previous medication</label>
      <input type="text" name="Previous_medication" class="form-control" id="inputEmail4" placeholder="">
    </div>
  </div>
</div>
<div class="form-group">
  <label for="inputAddres">Co-morbidity</label>
  <input type="text" name="Co_morbidity" class="form-control" id="inputAddres" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddress2">Previous physiotherapy</label>
  <input type="text"name="Previous_physiotherapy" class="form-control" id="inputAddress2" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddres">Surgery/Trauma</label>
  <input type="text" name="Surgery_Trauma" class="form-control" id="inputAddres" placeholder="">
</div>
<div class="form-group">
<select id="pinti" name="aoption">
  <option  value="Please select">X-ray</option>
  <option  value="Gluteus Medius">MRI</option>  
  <option  value="Gluteus Maximus">CT</option>
</select>
</div>
<div class="form-group">
  <label for="inputAddres">Previous Diagnosis</label>
  <input type="checkbox" id="vehicle1" name="Previous_Diagnosis" value="Bike">
</div>

</div>


<hr>


  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Stretching</label>
      <input type="text" name="Previous_medication" class="form-control" id="inputEmail4" placeholder="">
    </div>
  </div>
</div>
<div class="form-group">
  <label for="inputAddres">Strengthening</label>
  <input type="text" name="Strengthening" class="form-control" id="inputAddres" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddress2">Neural_mechanics</label>
  <input type="text"name="Neural_mechanics" class="form-control" id="inputAddress2" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddres">Mechanical Correction</label>
  <input type="text" name="Mechanical_Correction" class="form-control" id="inputAddres" placeholder="">
</div>

<div class="form-group">
  <label for="inputAddres">Structural Management</label>
  <input type="text" name="Structural_Management" class="form-control" id="inputAddres" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddres">Stabilization</label>
  <input type="text" name="Stabilization" class="form-control" id="inputAddres" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddres">Maintenance</label>
  <input type="text" name="Maintenance" class="form-control" id="inputAddres" placeholder="">
</div>
<div class="form-group">
  <label for="inputAddres">Others</label>
  <input type="text" name="Others_1" class="form-control" id="inputAddres" placeholder="">
</div>

</div>


  
  </body>
  </html>
  
  
  <script type="text/javascript">
    $(document).ready(function () {
        $('#inputDatabaseName').keyup(function () { $("#Sitting1").show(); });
    });
  </script>
  <script type="text/javascript">
      $(function () {
          $("#ddlPassport").change(function () {
              if ($(this).val() == "Lumber Extensor") {
                  $("#dvPassport").show();
                  var a='Lumber Extensor';
              
              } 
              else if ($(this).val() == "Lumber Flexor") {
                  $("#dvPassport").show();
                  var a='Lumber Flexor';
                  
              }
              else if ($(this).val() == "Qolu") {
                  $("#dvPassport").show();
                  var a='Qolu';
              }
              else if ($(this).val() == "lliposoas") {
                  $("#bPassport").show();
                  var a='lliposoas';
              }
              else if ($(this).val() == "Quads") {
                  $("#dvPassport").show();
                  var a='Quads';
              }
              else if ($(this).val() == "Hamstring") {
                  $("#dvPassport").show();
                  var a='Hamstring';
              }
              else if ($(this).val() == "Gluteusminimus") {
                  $("#dvPassport").show();
                  var a='Gluteusminimus';
              }
              else if ($(this).val() == "Ankle Dorsiflexor") {
                  $("#dvPassport").show();
                  var a='Ankle Dorsiflexor';
              }
              else if ($(this).val() == "Gluteusmeius") {
                  $("#dvPassport").show();
                  var a='Gluteusmeius';
              }
              else if ($(this).val() == "Piriformis") {
                  $("#dvPassport").show();
                  var a='Piriformis';
              }
              else if ($(this).val() == "Gluteus Maximus") {
                  $("#dvPassport").show();
                  var a='Gluteus Maximus';
              }
              else if ($(this).val() == "Hip Adductor") {
                  $("#dvPassport").show();
                  var a='Hip Adductor';
              }
              else {
                  $("#dvPassport").hide();
              }
          });
  
  
        
          $("#aPassport").change(function () {
              if ($(this).val() == "lliposoas") {
                  $("#bPassport").show();
          
              
              } 
              else if ($(this).val() == "Rectus & Tranverse Ab.") {
                  $("#bPassport").show();
              
                  
              }
              else if ($(this).val() == "Gluteus Medius") {
                  $("#bPassport").show();
                  
              }
              else if ($(this).val() == "Lumber extensor(core)") {
                  $("#bPassport").show();
                  
              }
              else if ($(this).val() == "Gluteus Maximus") {
                  $("#bPassport").show();
              
              }
              else if ($(this).val() == "Hamstring") {
                  $("#bPassport").show();
                  
              }
              else if ($(this).val() == "Quardiceps") {
                  $("#bPassport").show();
                  
              }
              else if ($(this).val() == "Pelvic Floor") {
                  $("#bPassport").show();
                  
              }
              else {
                  $("#bPassport").hide();
              }
          });
  
  
          
              $('input:radio[name=bedStatus]').change(function() {
          if (this.value == 'right') {
              $("#divPassport").show();
          }
          else if (this.value == 'left') {
              $("#divPassport").show();
          }
          else if (this.value == 'both') {
              $("#divPassport").show();
          }
      });
      
      
              $('input:radio[name=redStatus]').change(function() {
          if (this.value == 'Pain') {
              $("#divePassport").show();
          }
          else if (this.value == 'Tightness') {
              $("#divePassport").show();
          }
      });
      $('input:radio[name=b]').change(function() {
        if (this.value == 'right') {
            $("#cPassport").show();
        }
        else if (this.value == 'left') {
            $("#cPassport").show();
        }
    });
  
    $('input:radio[name=Standing]').change(function() {
      if ($(this).val() == "Good") {
                  $("#pelvic_tiltt").show();
                  var a='Lumber Extensor';
              
              } 
              else if ($(this).val() == "Fair") {
                  $("#pelvic_tiltt").show();
                  var a='Lumber Extensor';
              
              } 
            else if ($(this).val() == "Poor") {
                  $("#pelvic_tiltt").show();
                  var a='Lumber Extensor';
              
              } 
      });
  
      $('input:radio[name=Pelvic_Tilt]').change(function() {
        if ($(this).val() == "Ant") {
                  $("#Sternumm").show();
                  var a='Lumber Extensor';
              
              } 
              else if ($(this).val() == "Post") {
                  $("#Sternumm").show();
                  var a='Lumber Extensor';
              
              } 
            else if ($(this).val() == "Lateral") {
                  $("#Sternumm").show();
                  var a='Lumber Extensor';
              
              } 
      });
  
  
  $('input:radio[name=Sitting]').change(function() {
    if ($(this).val() == "Slough") {
                  $("#Transition1").show();
                  var a='Lumber Extensor';
              
              } 
              else if ($(this).val() == "Errect") {
                  $("#Transition1").show();
                  var a='Lumber Extensor';
              
              } 
      });
      $('input:radio[name=Transition]').change(function() {
          if (this.value == 'Goodd') {
              $("#Bed_Mobility1").show();
          }
          else if (this.value == 'Fairr') {
              $("#Bed_Mobility1").show();
          }
          else if (this.value == 'Poorr') {
              $("#Bed_Mobility1").show();
          }
      });
  
  
  
  
      
      });


      $("#gPassport").change(function () {
              if ($(this).val() == "L2") {
                  $("#hPassport").show();
          
              
              } 
              else if ($(this).val() == "L3") {
                  $("#hPassport").show();
              
                  
              }
              else if ($(this).val() == "L4") {
                  $("#hPassport").show();
                  
              }
              else if ($(this).val() == "L5") {
                  $("#hPassport").show();
                  
              }
              else if ($(this).val() == "S1") {
                  $("#hPassport").show();
              
              }
          });

          $('input:radio[name=S]').change(function() {
          if (this.value == 'Sensory') {
            $("#fPassport").hide();
              $("#ePassport").show();
          }
          else if (this.value == 'Motor') {
            $("#ePassport").hide();
              $("#fPassport").show();
          }
      });
      
  </script>
  
  
  
  
  
  
  <style>
  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 30%;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  body{
  padding-left:30%;
  background-image: url("https://lh3.googleusercontent.com/proxy/iy3MZ1GQwrLTyAAhL5z65H9Teh1HpzHIKz39cWE04ZtOGRcBbxybmCc4uOMCxyt_CJyiq8kEjWpupL_4V21qAriTqgdgM2BFjcXA2_QjmsoKisJ1VSkAML-yPGZ2ITdOIQBPlA6EyXz99mJtfYawxDZM5FxrgrWV-9zNmkHDPgpe24dbfIaN");
  background-repeat: no-repeat;
  background-size:cover;
  font-size:20px;
  font-color:white;
  }
  #ddlPassport{
  margin-bottom:30px;
  margin-top:30px;
  };
  #dvPassport{
  margin-bottom:70px;
  margin-top:30px;
  }
  #divPassport{
  margin-bottom:30px;
  margin-top:30px;
  }
  button{
  margin-top:30px;
  }

  hr {
  display: block;
  margin-top: 2.5em;
  margin-bottom: 2.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
  border: 1px solid blueviolet;

}
  
  </style>